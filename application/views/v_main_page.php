<html>
<?php include 'v_nav.php'; ?>
    
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
                    <?php 
            foreach($regionDuSecteur as $stat){
                echo "['".$stat->SEC_LIBELLE."',".$stat->nbRegion."],";
            }
          ?>
        ]);
        var options = {
          title: 'Nombre de région par secteur',
          pieSliceText: 'value'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }

    </script>
    <script>
    google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
                    <?php 
            foreach($visDeRegion as $stat){
                echo "['".$stat->REG_NOM."',".$stat->nbVis."],";
            }
          ?>
        ]);
        var options = {
          title: 'Nombre de visiteurs qui travaillent dans un region:',
          pieSliceText: 'value'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
        chart.draw(data, options);
      }</script>
    
    
        
        <div class="container">
             <div class="row">
                <div class="col-3">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">GSB</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Visiteur</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Région</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Travailler</a>                   
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-stat" role="tab" aria-controls="v-pills-settings" aria-selected="false">Statistique</a>

                  </div>
                </div>
                <div class="col-9">
                  <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <p>Le laboratoire <b>Galaxy Swiss Bourdin (GSB)</b> est issu de la fusion entre le géant américain Galaxy (spécialisé dans le secteur des maladies virales dont le SIDA et les hépatites) et le conglomérat européen Swiss Bourdin (travaillant sur des médicaments plus conventionnels), lui-même déjà union de trois petits laboratoires.</p>
                        <p>En 2009, les deux géants pharmaceutiques ont uni leurs forces pour créer un leader de ce secteur industriel.</p>
                        <p>L'entité Galaxy Swiss Bourdin Europe a établi son siège administratif à Paris.</p>
                        <p>Le siège social de la multinationale est situé à Philadelphie, Pennsylvanie, aux Etats-Unis.</p>

                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <p>Les <b>visiteurs</b> constituent la base de la partie commerciale. Ils fournissent les rapports de visite, des informations sur les médecins (décès, déménagements...), et des états de frais pour lesquels ils reçoivent des remboursements (non géré). Ils dépendent d'un des départements du laboratoire (Swiss, Bourdin, Autres labos)</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Créer un visiteur</button>  
                        <input type="button" class="btn btn-info" name="subValider" value="Modifier - lister les Visiteur" onclick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Main/modifirVisiteurPage'"/>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <p>Les <b>délégués régionaux</b> sont des visiteurs à part entière, mais ils ont un rôle d'intermédiaire entre les visiteurs d'une région et leur responsable de secteur. Ils disposent d'une décharge horaire pour s'occuper de l'organisation de réunions bilan mensuelles, de recueillir les problèmes rencontrés sur le terrain... Ils ont un accès aux rapports de leurs collègues</p>
                        <p>Ils sont aussi des visiteurs occupant trois quarts de leur temps professionnel à la visite médicale.</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example1-modal-lg">Créer une region</button>
                        <input type="button" class="btn btn-info" name="subValider" value="Modifier - lister les Regions" onclick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Main/modifirRegionPage'"/>  
                   

                    
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".insererTravailler">Insérer travail</button>
                                                <input type="button" class="btn btn-info" name="subValider" value="Modifier - lister les Regions" onclick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Main/listTravailler'"/>  
                    </div>
                      
                      <div class="tab-pane fade" id="v-pills-stat" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                              <div id="piechart" style="width: 100%; height: 200px;"></div>
                              <div id="piechart2" style="width: 100%; height: 500px;"></div>
                      </div>
                  </div>
                </div>
                 
              </div>
        </div>
                
                
    
            <div class="modal fade insererTravailler" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                     
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">✓ Insérer dans quelle(s) région(s) travaille un visiteur:</h5>
                          </div>
                          <div class="modal-body">
                           <?php require  'v_new_travail.php';?>   
                    </div>
                  </div>
                </div> 
            </div>          
       
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                     
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">✓ Ajouter un nouveau visiteur:</h5>
                        </div>
                        <div class="modal-body">
                           <?php require  'v_new_visiteur.php';?>   
                        </div>
                  </div>
                </div> 
            </div>
       
       
            <div class="modal fade bd-example1-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                 <div class="modal-dialog modal-lg">
                   <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">✓ Ajouter une nouvelle  region:</h5>
                        </div>
                    <div class="modal-body">
                        <?php require 'v_new_region.php'; ?>   
                    </div>
                 </div>
               </div> 
           </div>
                
    </body>
</html>

