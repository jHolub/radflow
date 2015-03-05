<div class="help">Create new model (max 10 models).</div>    

<?php $this->embed('newModel.php'); ?>

<div class="help">List of previously models.</div>    

<?php $this->embed('listModel.php'); ?>


<?php if ($this->model->getActiveSource()): ?>

    <?php $this->render('edit'); ?>




<?php endif; ?>