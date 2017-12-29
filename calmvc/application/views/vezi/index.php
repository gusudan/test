<div class="col-xs-7 containerzile">
    <div class="row ">
        <h1 class="vezititlu"><?php echo $eveniment->titlu; ?></h1>

    </div>

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


        <div class="col-xs-3 data">
            <?php echo implode('-', $data); ?>
        </div>

        <div class="col-xs-3 data">
            Ora: <?php echo $eveniment->ora; ?>
        </div>
    </div>

    <div class="row">
        Detalii: <?php echo $eveniment->detalii; ?>

    </div>
</div>


<?php include APP . 'views/_templates/nextevents.php'; ?>
