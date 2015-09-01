<h4 class="help">Vytvoření modelu (maximální počet modelů je 10)</h4>    

<?php $this->embed('newModel.php'); ?>
<hr>
<h4 class="help">Čerpací zkoušky</h4>    

<?php $this->embed('listModel.php'); ?>


<?php if ($this->var_('activeSource')): ?>

    <?php $this->render('edit'); ?>

<?php endif; ?>