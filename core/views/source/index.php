<h4 class="help">Create new model (A maximum of ten models).</h4>    

<?php $this->embed('newModel.php'); ?>
<hr>
<h4 class="help">List of previously dataset.</h4>    

<?php $this->embed('listModel.php'); ?>


<?php if ($this->var_('activeSource')): ?>

    <?php $this->render('edit'); ?>

<?php endif; ?>