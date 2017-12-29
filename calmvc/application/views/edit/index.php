<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form class="form-horizontal" role="form" action="<?php echo URL; ?>edit/modifica/<?php echo $eveniment->id; ?>" method="POST">
            <fieldset>
                <!-- Form Name -->
                <legend>Modifica eveniment</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Nume</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="Nume Eveniment" name="titlu" class="form-control" value="<?php echo $eveniment->titlu; ?>">
                    </div>
                </div>


                <!-- Text input-->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Tip</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="sel1" name="tip">
                            <option selected><?php echo $eveniment->tip; ?></option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Data</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" name="data" value="<?php echo $eveniment->data;?>">
                    </div>

                    <label class="col-sm-2 control-label" for="textinput">Ora</label>
                    <div class="col-sm-4">
                        <input type="time" class="form-control"  name="ora" value="<?php echo $eveniment->ora; ?>">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Detalii</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="5" id="detalii" name="detalii"><?php echo $eveniment->detalii; ?></textarea>
                    </div>
                </div>



                <!-- Text input-->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Reminder</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="sel2" name="reminder">
                            <option selected value="<?php echo $eveniment->reminder; ?>"><?php echo $eveniment->reminder; ?> min</option>
                            <option value="0">0 min</option>
                            <option value="10">10 min</option>
                            <option value="30">30 min</option>
                            <option value="60">60 min</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="pull-right">
                            <button type="reset" class="btn btn-default">Sterge</button>
                            <button type="submit" name="submit" class="btn btn-primary">Salveaza</button>
                        </div>
                    </div>
                </div>

            </fieldset>
        </form>
    </div><!-- /.col-lg-12 -->

</div><!-- /.row -->




