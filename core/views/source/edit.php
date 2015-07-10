<hr>

<h4>Loading of pumping-well data</h4>  

<div class="dropdown">
    <a dropdown-toggle" type="button" data-toggle="dropdown" ><span class="glyphicon glyphicon-info-sign"></span>valid data definition:</a>
    <div class="dropdown-menu">
        <i> 1. column - time; 2. column - drawdown</i>
        <div>Example CSV format (\t = tab; \n = end of line ):<br>
            20 \t 0.1 \n <br>
            120 \t 0.3 \n 
        </div>
    </div>
</div>
  
    
<div class="row">
    <div class="col-sm-6">   
        <?php if ($this->var_(['sourceData', 'TEST_DATA'])): ?>


            NAME OF DATASET: <?php echo $this->print_(['sourceData', 'TEST_DATA']); ?>
            <a href="<?php $this->link(['aaction' => 'selDataSource', 'render' => 'edit']) ?>"><span class="glyphicon glyphicon-trash"> DELETE DATA</a>

        <?php else: ?>

            DRAWDOWN DATA
            <form class="form-inline" action="<?php $this->link(["action" => "saveDataSource", 'render' => 'edit']) ?>" method="post" enctype="multipart/form-data" >
                <div class="form-group"> 
                    <label class="small" for='file'>Allowed data format: TXT</label>

                    <input class="form-control input-sm" type="file" name="file" size="500" >

                    <input class="btn btn-default btn-sm" type="submit" name="save_data" value="SAVE" >
                </div>
            </form>



        <?php endif; ?>
    </div>
    <div class="col-sm-6">   
        <?php if ($this->var_(['sourceData', 'OBSERV_DATA'])): ?>


            NAME OF OBSERVATION WELL DATA: <?php echo $this->print_(['sourceData', 'OBSERV_DATA']); ?>
            <a href="<?php $this->link(['action' => 'delDataSource', 'render' => 'edit', 'observData' => 1]); ?>"><span class="glyphicon glyphicon-trash"> OBSERVATION DATA DELETE</a>


        <?php else: ?>

            OBSERVATION WELL DATA
            <form class="form-inline" action="<?php $this->link(['action' => 'saveDataSource', 'render' => 'edit', 'observData' => 1]); ?>" method="post" enctype="multipart/form-data" >
                <div class="form-group"> 
                    <label class="small" for='file'>Allowed data format: TXT</label>

                    <input class="form-control input-sm" type="file" name="file" size="500" >

                    <input class="btn btn-default btn-sm" type="submit" name="save_data" value="SAVE" >
                </div>
            </form>

        <?php endif; ?>
    </div>
</div>

<?php $this->embed('parametrs.php'); ?>