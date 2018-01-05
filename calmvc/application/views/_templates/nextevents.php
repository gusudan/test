<div class="col-xs-5">
    <div class="col-xs-12">
        <div class="col-xs-12 headerevenimente">Urmatoarele evenimente</div>

        <?php foreach ($nextev as $key => $value): ?>
            <div class="col-xs-12 urmevenimente">
                <a data-toggle="confirmation" href='<?php echo URL; ?>edit/delete/<?php echo $value->id; ?>'>
                    <span class="glyphicon glyphicon-trash red"></span>
                </a>
                <a href='<?php echo URL; ?>edit/eveniment/<?php echo $value->id; ?>'>
                    <span class="glyphicon glyphicon-edit yellow"></span>
                </a>
                <a href='<?php echo URL; ?>vezi/eveniment/<?php echo $value->id; ?>'>
                    <?php echo date('d-m-Y', strtotime($value->data)) . " - " . substr($value->titlu,0,15) . "..."; ?>
                </a>
                
            </div>
        <?php endforeach; ?> 

    </div>
</div>