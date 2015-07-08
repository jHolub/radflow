
<form class="form-inline" method='POST' action='<?php $this->link(['action' => 'newSource']); ?>' name = 'newSource' onsubmit='return checkNewModel()'>

    <div class="form-group"> 
        <label for='name_source'>Name (only alphabets): </label>

        <input class="form-control" type='text' name='name_source'>
    </div>

    <input class="btn btn-default" type='submit' value='NEW DATASET'>

</form>

