<section class="content">
    <div class="row">
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h4 class="box-title">Légende</h4>
                </div>
                <div class="box-body">
                    <ul>
                        <li><span class="text-green"><i class="fa fa-square"></i></span> Formation Validé</li>
                        <li><span class="text-orange"><i class="fa fa-square"></i></span> Formation En attente</li>
                        <li><span class="text-red"><i class="fa fa-square"></i></span> Formation Refusé</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-body no-padding">
                    <!-- THE CALENDAR -->
                    <div id="calendar"></div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<!-- jQuery 2.2.3 -->
<script src="<?= BASE_URL; ?>/Views/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- /.content --><!-- fullCalendar 2.2.5 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.js"></script>
<script>

    $(document).ready(function() {

        var zone = "05:30";  //Change this to your timezone
//        var id_s = $id_s;

        $.ajax({
            url: 'Models/calendar.php',
            type: 'POST', // Send post data
//            data: 'type=fetchuser&id='+id_s,
            data: 'type=fetchuser',
            async: false,
            success: function(s){
                json_events = s;
            }
        });

        /* initialize the calendar
         -----------------------------------------------------------------*/

        $('#calendar').fullCalendar({
            events: JSON.parse(json_events),
            //events: [{"id":"14","title":"New Event","start":"2015-01-24T16:00:00+04:00","allDay":false}],

            utc: true,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            slotDuration: '00:30:00',

            eventRender: function(event, element)
            {
                if (event.etat == "Validé")
                {
                    element.css('background-color', 'green');
                    element.css('borderColor', 'green');
                }
                else if (event.etat == "En attente")
                {
                    element.css('background-color', 'orange');
                    element.css('borderColor', 'orange');
                }
                else if (event.etat == "Refusé")
                {
                    element.css('background-color', 'red');
                    element.css('borderColor', 'red');
                }
            }
        });
    });

</script>
