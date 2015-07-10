<hr>
<h4>Physical properties of an pumping well</h4>

<form action="<?php $this->link(['action' => 'saveParametrs', 'render' => 'edit']); ?>" method="post">
    <div class="row">
        <div class="col-sm-4">      
            <div class="form-group">
                <label class="small" for='STORATIVITY'>STORATIVITY []:</label>
                <input class="form-control input-sm" id= "STORATIVITY" type="text" name="STORATIVITY" value="<?php $this->print_(['sourceData', 'STORATIVITY']); ?>" >               

                <label class="small"  for='WELL_DISTANCE'>DISTANCE OBSERVATION WELL [m]:</label>  
                <input class="form-control input-sm" type="text" name="WELL_DISTANCE" value="<?php $this->print_(['sourceData', 'WELL_DISTANCE']); ?>" > 

                <label class="small"  for='WELL_STORAGE'>WELLBORE STORAGE []:</label>
                <input class="form-control input-sm" type="text" name="WELL_STORAGE" value="<?php $this->print_(['sourceData', 'WELL_STORAGE']); ?>" >

            </div>
        </div>

        <div class="col-sm-4">      
            <div class="form-group">
                <label class="small"  for='TRANSMISSIVITY'>TRANSMISSIVITY [m2/s]:</label>
                <input class="form-control input-sm" type="text" name="TRANSMISSIVITY" value="<?php $this->print_(['sourceData', 'TRANSMISSIVITY']); ?>" >   

                <label class="small"  for='RADIUS_WELL'>RADIUS_WELL [m]:</label>
                <input class="form-control input-sm" type="text" name="RADIUS_WELL" value="<?php $this->print_(['sourceData', 'RADIUS_WELL']); ?>" >
                <br> 
                <input  class="btn btn-success btn-sm" type="submit" value="SAVE" >
            </div>
        </div>

        <div class="col-sm-4">      
            <div class="form-group">
                <label class="small"  for='RECHARGE'>RECHARGE [m3/s]:</label>
                <input class="form-control input-sm" type="text" name="RECHARGE" value="<?php $this->print_(['sourceData', 'RECHARGE']); ?>" > 

                <label class="small"  for='SKIN'>SKIN EFFECT []:</label>
                <input class="form-control input-sm" type="text" name="SKIN" value="<?php $this->print_(['sourceData', 'SKIN']); ?>" >

            </div>
        </div>

    </div>

</form>
