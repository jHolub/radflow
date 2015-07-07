<div class="help">Create new model (max 10 models).</div>    

<?php $this->embed('newModel.php'); ?>

<div class="help">List of previously dataset.</div>    

<?php $this->embed('listModel.php'); ?>


<?php if ($this->var_('activeSource')): ?>

    <?php $this->render('edit'); ?>

<?php endif; ?>