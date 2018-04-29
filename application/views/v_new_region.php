 <?php echo form_open('Ctrl_Main/form_region');  ?>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Region code:</label>
                                    <input placeholder="Saisissez deux caracteres " name="REG_CODE" type="text" class="form-control" id="VIS_MATRICULE">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Region nom:</label>
                                    <input name="REG_NOM" type="text" class="form-control" id="VIS_NOM">
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

                                    
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                <input type="submit" name="newRegBtn" class="btn btn-primary" value="Enregistrer"/>
                            </div>
<?php echo form_close(); 