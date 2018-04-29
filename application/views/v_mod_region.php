<?php include 'v_nav.php'; ?> 
<div class="container">
     <input value="L'accueil"  style="width: 100%;" type="button" class="btn btn-secondary" data-dismiss="modal" onClick="location.href='<?php echo base_url(); ?>'"/>
<h4><b>Veuillez choisir une region pour pouvoir le modifier</b></h4>
       <table class="table">
               <thead class="thead-dark">
               <tr>
                   <th>code</th>
                   <th>Nom region:</th>
                   <th>Nom secteur</th>
                   <th>Option</th>
               </tr>
               </thead>
                <?php     
                    foreach($lesRegions as $vis){
                ?>
               <tr>
                   <td><?php echo $vis->REG_CODE;?></td>
                   <td><?php echo $vis->REG_NOM;?></td>
                   <td><?php echo $vis->SEC_LIBELLE;?></td>
                   
                   <td><input type="button" class="btn btn-info" name="tet" value="Choisir" onclick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Main/modRegion/<?php echo $vis->REG_CODE; ?>'"/>           
               </tr>
          <?php   
            }
           ?>  
          
       </table>
</div>