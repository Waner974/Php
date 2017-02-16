<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="row">
               <br>	 
                  <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body bk-primary text-light">
                            <div class="stat-panel text-center">
                                <div class="stat-panel-number h1 ">
                                
                            	<?php echo $nbUser;
                            	 ?>
                                </div>
                                <div class="stat-panel-title text-uppercase"><span
                                  class="glyphicon glyphicon-user"></span>Utilisateur(s) affecté(s)
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="row">
				<h2 class="page-title"> Liste des utilisateurs</h2>
				<table class="table">
    				<thead>
      <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Mail</th>
        <th>Formations</th>
      </tr>
    </thead>
		<?php
      if($nbUser>0){
				foreach ($user as $key => $value) {
				echo 
        '<tbody>
        <tr>
        <td>'.$value['nom'].'</td>
        <td>'.$value['prenom'].'</td>
        <td>'.$value['mail'].'</td>
      	<td><a href="'.BASE_URL.'/formationUser?id='.$value['id_s'].'" class="glyphicon glyphicon-list"></a></td>
        </tr>
        </tbody>';
}
        }
				?>
</table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
