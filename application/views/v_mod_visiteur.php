<?php include 'v_nav.php'; ?> 
<div class="container">
         <input value="L'accueil"  style="width: 100%;" type="button" class="btn btn-secondary" data-dismiss="modal" onClick="location.href='<?php echo base_url(); ?>'"/>
<h4><b>Veuillez choisir un visiteur pour pouvoir le modifier</b></h4>
       <table class="table">
               <thead class="thead-dark">
               <tr>
                   <th>Matricule</th>
                   <th>Nom</th>
                   <th>Prenom</th>
                   <th>Adresse</th>
                   <th>CP</th>
                   <th>Ville</th>
                   <th>Date d'embauche</th>
                   <th>Nom secteur</th>
                   <th>Nom du laboratoire</th>
                   <th>Option</th>

               </tr>
               </thead>
                <?php     
                    foreach($lesVisiteurs as $vis){
                ?>
               <tr>
                   <td><?php echo $vis->VIS_MATRICULE;?></td>
                   <td><?php echo $vis->VIS_NOM;?></td>
                   <td><?php echo $vis->Vis_PRENOM;?></td>
                   <td><?php echo $vis->VIS_ADRESSE;?></td>
                   <td><?php echo $vis->VIS_CP;?></td>
                   <td><?php echo $vis->VIS_VILLE;?></td>
                   <td><?php echo $vis->VIS_DATEEMBAUCHE;?></td>
                   <td><?php echo $vis->SEC_LIBELLE;?></td>
                   <td><?php echo $vis->LAB_NOM;?></td>
                   
                   <td><input type="button" class="btn btn-info" name="tet" value="Choisir" onclick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Main/modVisiteur/<?php echo $vis->VIS_MATRICULE; ?>'"/>           
               </tr>
          <?php   
            }
           ?>  
          
       </table>
</div>