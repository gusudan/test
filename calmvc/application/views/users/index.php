            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading newheaders"><h3 class="panel-title">Register</h3></div>
                    <div class="panel-body newback">
                        <form class="form-horizontal" action="<?php echo URL; ?>users/adduser" method="POST">
                            <div class="form-group">
                                <label for="inputemail" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="inputemail" placeholder="Email">
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="inputnume" class="col-sm-3 control-label">Nume</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="inputnume" placeholder="Nume">
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="inputprenume" class="col-sm-3 control-label">Prenume</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="inputprenume" placeholder="Prenume">
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="inputpass" class="col-sm-3 control-label">Parola</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="inputpass" placeholder="Parola">
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="inputpass2" class="col-sm-3 control-label">Confirma parola</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="inputpass2" placeholder="Confirma parola">
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <input type="submit" class="form-control btn btn-default" name="submit" placeholder="Register">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>       
