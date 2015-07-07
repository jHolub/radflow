<div class="row">
    <div class="col-sm-4">   
        <?php if ($this->var_(['sourceData','TEST_DATA'])): ?>


            NAME OF DATASET: <?php echo $this->print_(['sourceData','TEST_DATA']); ?>
            <a href="<?php $this->link(['aaction'=>'selDataSource','render'=>'edit'])?>">DELETE DATA</a>

        <?php else: ?>

            DRAWDOWN DATA
            <form action="<?php $this->link(["action"=>"saveDataSource",'render'=>'edit'])?>" method="post" enctype="multipart/form-data" >

                <label for='file'>Allowed data format: TXT</label>

                <input type="file" name="file" size="500" >

                <input class="btn btn-default" type="submit" name="save_data" value="SAVE" >

            </form>



        <?php endif; ?>
    </div>
    <div class="col-sm-4">   
        <?php if ($this->var_(['sourceData', 'OBSERV_DATA'])): ?>


            NAME OF OBSERVATION WELL DATA: <?php echo $this->print_(['sourceData','OBSERV_DATA']); ?>
            <a href="<?php $this->link(['action'=>'delDataSource','render'=>'edit','observData'=>1]);?>">OBSERVATION DATA DELETE</a>


        <?php else: ?>

            OBSERVATION WELL DATA
            <form action="<?php $this->link(['action'=>'saveDataSource','render'=>'edit','observData'=>1]);?>" method="post" enctype="multipart/form-data" >

                <label for='file'>Allowed data format: TXT</label>

                <input type="file" name="file" size="500" >

                <input class="btn btn-default" type="submit" name="save_data" value="SAVE" >

            </form>

        <?php endif; ?>
    </div>
</div>

<?php $this->embed('parametrs.php'); ?>