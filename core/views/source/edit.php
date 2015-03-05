
<br><br>

<?php if (!empty($this->model->sourceData['TEST_DATA'])): ?>

    <div>
        NAME OF DATA: <?php echo $this->write($this->model->sourceData['TEST_DATA']); ?>
        <a href="<?php echo \GLOBALVAR\ROOT . "/?core=source&action=delDataSource&render=edit"; ?>">DELETE DATA</a>
    </div>

<?php else: ?>

    <div>
        DRAWDOWN DATA
        <form action="<?php echo \GLOBALVAR\ROOT . "/?core=source&action=saveDataSource&render=edit"; ?>" method="post" enctype="multipart/form-data" >

            <label for='file'>Allowed data format: TXT</label>

            <input type="file" name="file" size="500" >

            <input type="submit" name="save_data" value="SAVE" >

        </form>

    </div>

<?php endif; ?>
<hr>
<br>
<?php if (!empty($this->model->sourceData['OBSERV_DATA'])): ?>

    <div>
        NAME OF OBSERVATION WELL DATA: <?php echo $this->write($this->model->sourceData['OBSERV_DATA']); ?>
        <a href="<?php echo \GLOBALVAR\ROOT . "/?core=source&action=delDataSource&render=edit&observData=1"; ?>">OBSERVATION DATA DELETE</a>
    </div>

<?php else: ?>

    OBSERVATION WELL DATA
    <form action="<?php echo \GLOBALVAR\ROOT . "/?core=source&action=saveDataSource&render=edit&observData=1"; ?>" method="post" enctype="multipart/form-data" >

        <label for='file'>Allowed data format: TXT</label>

        <input type="file" name="file" size="500" >

        <input type="submit" name="save_data" value="SAVE" >

    </form>
    
<?php endif; ?>
    
<hr>
<br>
<?php $this->embed('parametrs.php'); ?>