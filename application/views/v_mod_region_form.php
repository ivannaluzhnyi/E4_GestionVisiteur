<?php include 'v_nav.php';?>  
<div class="container">
    <?php echo form_open('Ctrl_Main/form_region');  ?>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Region code:</label>
                                        <input  value="<?php echo $unReg[0]->REG_CODE; ?>" name="REG_CODE" type="text" class="form-control" id="REG_CODE" disabled>
                                        <input type="hidden" name="hidden_id" value="<?php echo $unReg[0]->REG_CODE; ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Region nom:</label>
                                        <input value="<?php echo $unReg[0]->REG_NOM; ?>" name="REG_NOM" type="text" class="form-control" id="REG_NOM" >
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Secteur:</label>
                                        <select name="SEC_CODE" id="lstSec">
                                            <?php foreach ($lesSecteurs as $sec){ 
                                                $opt="";
                                                if($unReg[0]->SEC_CODE == $sec->SEC_CODE){
                                                    $opt = "selected";
                                                }
                                                echo "<option  ".$opt." value='".$sec->SEC_CODE."'>".$sec->SEC_LIBELLE."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>


                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="location.href='<?php echo base_url(); ?>'">L'accueil</button>
                                    <input type="submit" name="modRegBtn" class="btn btn-primary" value="Enregistrer"/>
                                </div>
    <?php echo form_close();  ?>
</div>