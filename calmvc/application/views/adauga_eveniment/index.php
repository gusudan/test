<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form class="form-horizontal" role="form">
            <fieldset>

                <!-- Form Name -->
                <legend>Adauga eveniment</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Nume</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="Nume Eveniment" class="form-control">
                    </div>
                </div>


                <!-- Text input-->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Tip</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="sel1">
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
                        <input type="date" placeholder="State" class="form-control">
                    </div>

                    <label class="col-sm-2 control-label" for="textinput">Ora</label>
                    <div class="col-sm-4">
                        <input type="time" placeholder="Post Code" class="form-control">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Detalii</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="5" id="detalii"></textarea>
                    </div>
                </div>



                <!-- Text input-->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Reminder</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="sel2">
                            <option>0 min</option>
                            <option>10 min</option>
                            <option>30 min</option>
                            <option>60 min</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-default">Sterge</button>
                            <button type="submit" class="btn btn-primary">Salveaza</button>
                        </div>
                    </div>
                </div>

            </fieldset>
        </form>
    </div><!-- /.col-lg-12 -->

</div><!-- /.row -->




