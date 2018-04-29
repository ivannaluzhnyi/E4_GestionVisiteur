<?php include 'v_nav.php'; ?>  
<div class="container">
<?php echo form_open('Ctrl_Main/form_visiteur');  ?>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Matriculation (num):</label>
                                    <input value="<?php echo $unVis[0]->VIS_MATRICULE; ?>" name="VIS_MATRICULE" type="text" class="form-control" id="VIS_MATRICULE" disabled>
                                </div>
    <input type="hidden" name="hidden_id" value="<?php echo $unVis[0]->VIS_MATRICULE; ?>"/>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nom:</label>
                                    <input value="<?php echo $unVis[0]->VIS_NOM; ?>" name="VIS_NOM" type="text" class="form-control" id="VIS_NOM">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Prenom:</label>
                                    <input value="<?php echo $unVis[0]->Vis_PRENOM; ?>" name="Vis_PRENOM" type="text" class="form-control" id="Vis_PRENOM">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Adresse:</label>
                                    <input value="<?php echo $unVis[0]->VIS_ADRESSE; ?>" name="VIS_ADRESSE" class="form-control" id="VIS_ADRESSE"/>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Code postal:</label>
                                    <input value="<?php echo $unVis[0]->VIS_CP; ?>" name="VIS_CP" type="text" class="form-control" id="VIS_CP">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Ville:</label>
                                    <input value="<?php echo $unVis[0]->VIS_VILLE; ?>" name="VIS_VILLE" type="text" class="form-control" id="VIS_VILLE">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Date d'embauche:</label>
                                    <input value="<?php echo $unVis[0]->VIS_DATEEMBAUCHE; ?>   Ancienne date" type="text" class="form-control" id="VIS_DATEEMBAUCHE" disabled>
                                    <p style="margin-bottom: -3px;">Choisissez une nouvelle date</p>
                                    <input value="<?php echo $unVis[0]->VIS_DATEEMBAUCHE; ?>" name="VIS_DATEEMBAUCHE" type="datetime" class="form-control" id="VIS_DATEEMBAUCHE">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Secteur:</label>
                                    <select name="SEC_CODE" id="lstSec">
                                        <?php foreach ($lesSecteurs as $sec){ 
                                                                $opt="";
                                            if($unVis[0]->SEC_CODE == $sec->SEC_CODE){
                                                $opt = "selected";
                                            }
                                            echo "<option ".$opt." value='".$sec->SEC_CODE."'>".$sec->SEC_LIBELLE."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Laboratoire:</label>
                                    <select name="LAB_CODE" id="lstLab"> 
                                    <?php foreach ($lesLabos as $l){ 
                                        $opt="";
                                            if($unVis[0]->LAB_NOM == $l->LAB_NOM){
                                                $opt = "selected";
                                            }
                                        echo "<option ".$opt." value='".$l->LAB_CODE."'>".$l->LAB_NOM."</option>";
                                    }
                                    ?>
                                    </select>
                                </div>
                                
                                    
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="location.href='<?php echo base_url(); ?>'">L'accueil</button>
                                <input type="submit" name="modVisBtn" class="btn btn-primary" value="Enregistrer"/>
                            </div>
<?php echo form_close();  ?>
</div>