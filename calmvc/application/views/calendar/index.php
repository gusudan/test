<?php echo 'ceva' . date("F j, Y, g:i a", 1512725368) . ' - ' . date("w") . ' - ' . date('w',strtotime(date('02-m-Y'))) . '>> ' . date('w',strtotime(time())) . '--' . strtotime(time()); ?>
<?php $numezile = ['Ianuarie','Februarie','Martie','Aprilie','Mai','Iunie','Iulie','August','Septembrie','Octombrie','Noiembrie','Decembrie',] ?>
<div class="col-xs-7 containerzile">

                <div class="row">
                    <div class="col-xs-12 luna">
                        <div class="col-xs-4"><a href=<?php echo URL . "calendar/data/" . date("nY",(strtotime(($luna-1).$an)));?>><span class="glyphicon glyphicon-chevron-left"></span></a></div>
                        <div class="col-xs-4"><?php echo $numezile[$luna-1] . "-" . "$an";?></div>
                        <div class="col-xs-4"><a href=<?php echo URL . "calendar/data/" . date("nY",(($luna+1).$an));?>><span class="glyphicon glyphicon-chevron-right"></span></a></div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-1 numezile">Luni</div>
                        <div class="col-xs-2 numezile">Marti</div>
                        <div class="col-xs-2 numezile">Miercuri</div>
                        <div class="col-xs-1 numezile">Joi</div>
                        <div class="col-xs-2 numezile">Vineri</div>
                        <div class="col-xs-2 numezile">Sambata</div>
                        <div class="col-xs-2 numezile">Duminica</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-1 zile">1</div>
                        <div class="col-xs-2 zile">2</div>
                        <div class="col-xs-2 zile">3</div>
                        <div class="col-xs-1 zile">4</div>
                        <div class="col-xs-2 zile">5</div>
                        <div class="col-xs-2 zile">6</div>
                        <div class="col-xs-2 zile">7</div>
                        <div class="col-xs-1 zile">1</div>
                        <div class="col-xs-2 zile">2</div>
                        <div class="col-xs-2 zile">3</div>
                        <div class="col-xs-1 zile">4</div>
                        <div class="col-xs-2 zile">5</div>
                        <div class="col-xs-2 zile">6</div>
                        <div class="col-xs-2 zile">7</div>
                        <div class="col-xs-1 zile">1</div>
                        <div class="col-xs-2 zile">2</div>
                        <div class="col-xs-2 zile">3</div>
                        <div class="col-xs-1 zile">4</div>
                        <div class="col-xs-2 zile">5</div>
                        <div class="col-xs-2 zile">6</div>
                        <div class="col-xs-2 zile">7</div>
                        <div class="col-xs-1 zile">1</div>
                        <div class="col-xs-2 zile">2</div>
                        <div class="col-xs-2 zile">3</div>
                        <div class="col-xs-1 zile">4</div>
                        <div class="col-xs-2 zile">5</div>
                        <div class="col-xs-2 zile">6</div>
                        <div class="col-xs-2 zile">7</div>
                    </div>
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