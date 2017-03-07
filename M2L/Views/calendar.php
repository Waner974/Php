<section class="content">
    <div class="row">
        <!--<div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h4 class="box-title">Formations à venir</h4>
                </div>
                <div class="box-body">
                    <div id="external-events">
                        <?php /*foreach ($listFormation as $key => $value)
                        {
                        echo '<div class="external-event bg-green">'.$value['libelle'].'</div>';
                        }
                        */?>
                        <div class="checkbox">
                            <label for="drop-remove">
                                <input type="checkbox" id="drop-remove" checked="checked">
                                remove after drop
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
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

        function updateEvent(event,dayDelta,minuteDelta,allDay)
        {
            $.ajax({ 'url': 'Controllers/events.php?action=update', 'type': 'POST',
                'data': {'id':event.id, 'dayDelta': dayDelta, 'minuteDelta': minuteDelta, 'allDay': allDay},
                success: function(data) {
                    if(data.error)
                        alert(data.error);
                },
                error: function(data) {
                    alert('Une erreur est survenue.');
                }
            });
        }

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            eventSources: ['Controllers/events.php?action=get'],

            eventDrop: function(event,dayDelta,minuteDelta,allDay,revertFunc) {
                if (!confirm("Valider la modification ?")) {
                    revertFunc();
                } else {
                    updateEvent(event,dayDelta,minuteDelta,allDay);
                }
            },
            eventResize: function(event,dayDelta,minuteDelta,revertFunc) {
                if (!confirm("Valider la modification ?")) {
                    revertFunc();
                } else {
                    updateEvent(event,dayDelta,minuteDelta,0);
                }
            }
        });

    });

</script>