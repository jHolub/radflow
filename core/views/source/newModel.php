
<form class="form-inline" method='POST' action='<?php $this->link(['action' => 'newSource']); ?>' name = 'newSource' onsubmit='return checkNewModel()'>

    <div class="form-group"> 
        <label class="small" for='name_source'>Název (pouze alphabet znaky): </label>

        <input class="form-control input-sm" type='text' name='name_source'>
    </div>

    <input class="btn btn-default btn-sm" type='submit' value='Vytvoř'>

</form>

