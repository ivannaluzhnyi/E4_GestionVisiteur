 <?php echo form_open('Ctrl_Main/form_travailler');  ?>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Visiteur:</label>
                                    <select name="VIS_MATRICULE" id="lstSec">
                                        <?php foreach ($lesVisiteurs as $vis){ 
                                            echo "<option value='".$vis->VIS_MATRICULE."'>".$vis->Vis_PRENOM." ".$vis->VIS_NOM."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Date:</label>
                                    <input name="JJMMAA" type="date" class="form-control" id="JJMMAA">
                                </div>

                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Région:</label>
                                    <select name="REG_CODE" id="REG_CODE">
                                        <?php foreach ($lesRegions as $reg){ 
                                            echo "<option value='".$reg->REG_CODE."'>".$reg->REG_NOM."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Role:</label>
                                    <input name="TRA_ROLE" type="text" class="form-control" id="TRA_ROLE">
                                </div>

                                    
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                <input type="submit" name="newTravBtn" class="btn btn-primary" value="Enregistrer"/>
                            </div>
<?php echo form_close(); 