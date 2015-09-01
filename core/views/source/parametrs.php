<hr>
<h4>Fyzikální charakteristiky zkoumané oblasti</h4>
<form action="<?php $this->link(['action' => 'saveParametrs', 'render' => 'edit']); ?>" method="post">
    <div class="row">
        <div class="col-sm-4">      
            <div class="form-group">
                <label class="small" for='STORATIVITY'>STORATIVITA []:</label>
                <input class="form-control input-sm" id= "STORATIVITY" type="text" name="STORATIVITY" value="<?php $this->print_(['sourceData', 'STORATIVITY']); ?>" >               

                <label class="small"  for='WELL_DISTANCE'>VZDÁLENOST POZOROVACÍHO VRTU [m]:</label>  
                <input class="form-control input-sm" type="text" name="WELL_DISTANCE" value="<?php $this->print_(['sourceData', 'WELL_DISTANCE']); ?>" > 

                <label class="small"  for='WELL_STORAGE'>VLASTNÍ OBJEM VRTU []:</label>
                <input class="form-control input-sm" type="text" name="WELL_STORAGE" value="<?php $this->print_(['sourceData', 'WELL_STORAGE']); ?>" >

            </div>
        </div>

        <div class="col-sm-4">      
            <div class="form-group">
                <label class="small"  for='TRANSMISSIVITY'>TRANSMISSIVITA [m2/s]:</label>
                <input class="form-control input-sm" type="text" name="TRANSMISSIVITY" value="<?php $this->print_(['sourceData', 'TRANSMISSIVITY']); ?>" >   

                <label class="small"  for='RADIUS_WELL'>POLOMĚR VRTU [m]:</label>
                <input class="form-control input-sm" type="text" name="RADIUS_WELL" value="<?php $this->print_(['sourceData', 'RADIUS_WELL']); ?>" >
                <br> 
                <input  class="btn btn-success btn-sm" type="submit" value="ULOŽ" >
            </div>
        </div>

        <div class="col-sm-4">      
            <div class="form-group">
                <label class="small"  for='RECHARGE'>ČERPANÉ MNOŽSTVÍ [m3/s]:</label>
                <input class="form-control input-sm" type="text" name="RECHARGE" value="<?php $this->print_(['sourceData', 'RECHARGE']); ?>" > 

                <label class="small"  for='SKIN'>DODATEČNÉ ODPORY []:</label>
                <input class="form-control input-sm" type="text" name="SKIN" value="<?php $this->print_(['sourceData', 'SKIN']); ?>" >

            </div>
        </div>

    </div>

</form>
