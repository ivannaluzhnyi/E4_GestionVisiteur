<?php include 'v_nav.php'; ?> 
<div class="container">
     <input value="L'accueil"  style="width: 100%;" type="button" class="btn btn-secondary" data-dismiss="modal" onClick="location.href='<?php echo base_url(); ?>'"/>
<h4><b></b></h4>
       <table class="table">
               <thead class="thead-dark">
               <tr>
                   <th>Visiteur:</th>
                   <th>Date:</th>
                   <th>Region:</th>
                   <th>Role:</th>
               </tr>
               </thead>
                <?php     
                    foreach($lesTravaillers as $tr){
                ?>
               <tr>
                   <td><?php echo $tr->Vis_PRENOM." ".$tr->VIS_NOM;?>  </td>
                   <td><?php echo $tr->JJMMAA;?></td>
                   <td><?php echo $tr->REG_NOM;?></td>
                   <td><?php echo $tr->TRA_ROLE;?></td>
             
               </tr>
          <?php   
            }
           ?>  
          
       </table>
</div>