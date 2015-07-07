<br>
<b>
    Well hydraulic parameters
</b>

<form action="<?php $this->link(['action' => 'saveParametrs', 'render' => 'edit']); ?>" method="post">
    <div class="row">
        <div class="col-sm-4">      
            <div class="form-group">
                <label for='STORATIVITY'>STORATIVITY []</label>
                <input class="form-control" id= "STORATIVITY" type="text" name="STORATIVITY" value="<?php $this->print_(['sourceData', 'STORATIVITY']); ?>" >               

                <label for='WELL_DISTANCE'>DISTANCE OBSERVATION WELL [m]</label>  
                <input class="form-control" type="text" name="WELL_DISTANCE" value="<?php $this->print_(['sourceData', 'WELL_DISTANCE']); ?>" > 

                <label for='WELL_STORAGE'>WELLBORE STORAGE []</label>
                <input class="form-control" type="text" name="WELL_STORAGE" value="<?php $this->print_(['sourceData', 'WELL_STORAGE']); ?>" >

            </div>
        </div>

        <div class="col-sm-4">      
            <div class="form-group">
                <label for='TRANSMISSIVITY'>TRANSMISSIVITY [m2/s] </label>
                <input class="form-control" type="text" name="TRANSMISSIVITY" value="<?php $this->print_(['sourceData', 'TRANSMISSIVITY']); ?>" >   

                <label for='RADIUS_WELL'>RADIUS_WELL [m]</label>
                <input class="form-control" type="text" name="RADIUS_WELL" value="<?php $this->print_(['sourceData', 'RADIUS_WELL']); ?>" >

            </div>
        </div>

        <div class="col-sm-4">      
            <div class="form-group">
                <label for='RECHARGE'>RECHARGE [m3/s]</label>
                <input class="form-control" type="text" name="RECHARGE" value="<?php $this->print_(['sourceData', 'RECHARGE']); ?>" > 

                <label for='SKIN'>SKIN EFFECT []</label>
                <input class="form-control" type="text" name="SKIN" value="<?php $this->print_(['sourceData', 'SKIN']); ?>" >

            </div>
        </div>

    </div>







    <input  class="btn btn-default" type="submit" value="SAVE" >

</form>
