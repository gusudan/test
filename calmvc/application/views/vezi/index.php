<div class="col-xs-7 containerzile">
    <div class="row ">
        
        <h1 class="vezititlu"><?php echo $eveniment->titlu; ?></h1>

    </div>
    <div class="linie"></div>
    <div class="row">
        <div class="col-xs-3 vezidata">
            <span class="col-xs-12 vezizi">
                <?php
                $data = $this->dataTransform($eveniment->data);
                echo $data[0]
                ?>
            </span>
            <span class="col-xs-12 veziluna">
                <?php
                echo $data[1]
                ?>
            </span>
            <span class="col-xs-12 vezian">
                <?php
                echo $data[2]
                ?>
            </span>
        </div>

        <div class="col-xs-3 ora">
            <span class="glyphicon glyphicon-time"></span><br><span><?php echo $eveniment->ora; ?></span>
        </div>
        <div class="col-xs-5 tip">
            <p><span class="glyphicon glyphicon-certificate"></span> <?php echo $eveniment->tip; ?></p>
            <p><span class="glyphicon glyphicon-bell"></span> <?php echo $eveniment->reminder; ?> min</p>
        </div>
    </div>
    <div class="linie"></div>
    <div class="row detalii">

        <dl class="dl-horizontal text-justify">
            <dt>Detalii</dt>
            <dd> <?php echo $eveniment->detalii; ?></dd>

            <dt>
                <a data-toggle="confirmation" href='<?php echo URL; ?>edit/delete/<?php echo $eveniment->id; ?>'>
                    <span class="glyphicon glyphicon-trash red"></span>
                </a>
            </dt>
            <dd> 
                <a href='<?php echo URL; ?>edit/eveniment/<?php echo $eveniment->id; ?>'>
                    <span class="glyphicon glyphicon-edit yellow"></span>
                </a>
            </dd>

        </dl>

    </div>

</div>


<?php include APP . 'views/_templates/nextevents.php'; ?>
