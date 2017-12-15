<?php
$numeluni = [
    'Ianuarie',
    'Februarie',
    'Martie',
    'Aprilie',
    'Mai',
    'Iunie',
    'Iulie',
    'August',
    'Septembrie',
    'Octombrie',
    'Noiembrie',
    'Decembrie'
        ]
?>
<div class="col-xs-7 containerzile">
    <div class="row">
        <div class="col-xs-12 luna">
            <div class="col-xs-3"><a href=<?php echo URL . "calendar/data/" . $prevmonth; ?>><span class="glyphicon glyphicon-chevron-left"></span></a></div>
            <div class="col-xs-6"><?php echo $numeluni[$luna - 1] . " - " . "$an"; ?></div>
            <div class="col-xs-3"><a href=<?php echo URL . "calendar/data/" . $nextmonth; ?>><span class="glyphicon glyphicon-chevron-right"></span></a></div>

        </div>
    </div>


    <div class="row seven-cols">
        <div class="col-lg-1 col-md-3 col-sm-4 col-xs-6 numezile">Luni</div>
        <div class="col-lg-1 col-md-3 col-sm-4 col-xs-6 numezile">Marti</div>
        <div class="col-lg-1 col-md-3 col-sm-4 col-xs-6 numezile">Miercuri</div>
        <div class="col-lg-1 col-md-3 col-sm-4 col-xs-6 numezile">Joi</div>
        <div class="col-lg-1 col-md-3 col-sm-4 col-xs-6 numezile">Vineri</div>
        <div class="col-lg-1 col-md-3 col-sm-4 col-xs-6 numezile">Sambata</div>
        <div class="col-lg-1 col-md-3 col-sm-4 col-xs-6 numezile">Duminica</div>
    </div>



    <div class="row seven-cols">
        <?php for ($i = 1; $i < $firstday; $i++) : ?>
            <div class="col-lg-1 col-md-3 col-sm-4 col-xs-6 zileempty"></div>
        <?php endfor ?>      

<?php for ($i = 1; $i <= $lastday; $i++) : ?>
            <div class="col-lg-1 col-md-3 col-sm-4 col-xs-6 zile"><?php echo $i; ?>
                
                <a href="#myModal" class="pull-right addlink" data-toggle="modal" data-target="#myModal" data-id="<?php echo strlen($i) == 1 ? "0" . $i : $i; ?>">
                    <span class="glyphicon glyphicon-plus"></span> 
                </a>
                
                
                <?php foreach ($event as $key => $value): ?>
                    <?php if (date('d', strtotime($value->data)) == $i) : ?>
                            <div class="linkevent"><a href='#'><?php echo $value->titlu; ?></a></div>
                    <?php endif; ?>
                    <!-- echo date('d',strtotime($value->data)) == $i ? 'EVENT ' : " "; -->
    <?php endforeach; ?> 
                    
            </div>
<?php endfor ?> 

    </div>

</div>


<div class="col-xs-5">
    <div class="col-xs-12">
        <div class="col-xs-12 headerevenimente">Urmatoarele evenimente</div>
        <div class="col-xs-12 urmevenimente">25.02.1999 - Next</div>
        <div class="col-xs-12 urmevenimente">25.02.1999 - Next</div>
        <div class="col-xs-12 urmevenimente">25.02.1999 - Next</div>
        <div class="col-xs-12 urmevenimente">25.02.1999 - Next</div>
        <div class="col-xs-12 urmevenimente">25.02.1999 - Next</div>
        <div class="col-xs-12 urmevenimente">25.02.1999 - Next</div>
        <div class="col-xs-12 urmevenimente">25.02.1999 - Next</div>
    </div>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Adauga Eveniment</h4>
            </div>
            <div class="modal-body">
                <p>

                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" role="form" action="<?php echo URL; ?>adauga_eveniment/adauga" method="POST">

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Nume</label>
                                <div class="col-sm-10">
                                    <input type="text" required name="nume" value="" placeholder="Nume Eveniment" class="form-control">
                                </div>
                            </div>


                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Tip</label>
                                <div class="col-sm-10">
                                    <select required class="form-control" name="tip"  id="sel1">
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
                                    <input type="date" required name="data" placeholder="State" value="" class="form-control">
                                </div>

                                <label class="col-sm-2 control-label" for="textinput">Ora</label>
                                <div class="col-sm-4">
                                    <input type="time" required name="ora" placeholder="Post Code" class="form-control">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Detalii</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="detalii" rows="5" id="detalii"></textarea>
                                </div>
                            </div>



                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Reminder</label>
                                <div class="col-sm-10">
                                    <select required class="form-control" name="reminder" id="sel2">
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
                                        <button type="reset" class="btn btn-default" data-dismiss="modal">Inchide</button>
                                        <button type="submit" name="submit" class="btn btn-primary">Salveaza</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div><!-- /.col-lg-12 -->

                </div><!-- /.row -->






                </p>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">

    $('#myModal').on('show.bs.modal', function (e) {
        var phpVar = '<?php echo $an . "-" . $luna . "-"; ?>';
        var ziId = phpVar + $(e.relatedTarget).data('id');
        $(e.currentTarget).find('input[name="data"]').val(ziId);
    });
</script>