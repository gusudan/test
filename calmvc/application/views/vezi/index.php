<div class="col-xs-7 containerzile">
    <div class="row">
        <h1><?php echo $eveniment->titlu; ?></h1>
    </div>
    
    <div class="row">
        <div class="data">
            <?php
            $data = $this->dataTransform($eveniment->data);
            echo $data[0] . '-' . $data[1]?>
        </div>
        
        
        <span class="label label-primary"><?php echo implode('-',$this->dataTransform($eveniment->data)); ?></span>
    Ora: <?php echo $eveniment->ora; ?>
    </div>
    
    <div class="row">
    Detalii: <?php echo $eveniment->detalii; ?>
    
    </div>
</div>


<div class="col-xs-5">
    <div class="col-xs-12">
        <div class="col-xs-12 headerevenimente">Urmatoarele evenimente</div>

        <?php foreach ($nextev as $key => $value): ?>
            <div class="col-xs-12 urmevenimente">
                <a href='<?php echo URL; ?>vezi/eveniment/<?php echo $value->id; ?>'>
                    <?php echo implode('-',$this->dataTransform($value->data)) . " - " . $value->titlu; ?>
                </a>
            </div>
        <?php endforeach; ?> 

    </div>
</div>
