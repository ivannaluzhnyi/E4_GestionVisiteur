 <?php echo form_open('Ctrl_Main/form_visiteur');  ?>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Matriculation (num):</label>
                                    <input name="VIS_MATRICULE" type="text" class="form-control" id="VIS_MATRICULE">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nom:</label>
                                    <input name="VIS_NOM" type="text" class="form-control" id="VIS_NOM">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Prenom:</label>
                                    <input name="Vis_PRENOM" type="text" class="form-control" id="Vis_PRENOM">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Adresse:</label>
                                    <textarea name="VIS_ADRESSE" class="form-control" id="VIS_ADRESSE"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Code postal:</label>
                                    <input name="VIS_CP" type="text" class="form-control" id="VIS_CP">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Ville:</label>
                                    <input name="VIS_VILLE" type="text" class="form-control" id="VIS_VILLE">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Date d'embauche:</label>
                                    <input name="VIS_DATEEMBAUCHE" type="date" class="form-control" id="VIS_DATEEMBAUCHE">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Secteur:</label>
                                    <select name="SEC_CODE" id="lstSec">
                                        <?php foreach ($lesSecteurs as $sec){ 
                                            echo "<option value='".$sec->SEC_CODE."'>".$sec->SEC_LIBELLE."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Laboratoire:</label>
                                    <select name="LAB_CODE" id="lstLab"> 
                                    <?php foreach ($lesLabos as $l){ 
                                        echo "<option value='".$l->LAB_CODE."'>".$l->LAB_NOM."</option>";
                                    }
                                    ?>
                                    </select>
                                </div>
                                    
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                <input type="submit" name="newVisBtn" class="btn btn-primary" value="Enregistrer"/>
                            </div>
<?php echo form_close();  ?>