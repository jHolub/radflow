<div class="row">

    <div class="col-sm-3">      
        <div class="form-group">
            <label class="small" for='RADIUS_WELL'>RADIUS_WELL [m]</label>
            <input class="form-control input-sm" type="text" id="RADIUS_WELL" name="RADIUS_WELL" value="<?php $this->print_(['sourceData', 'RADIUS_WELL']) ?>" > 
        </div>
    </div>
    <div class="col-sm-3">      
        <div class="form-group">
            <label class="small" for='RECHARGE'>RECHARGE [m3/s]</label>
            <input class="form-control input-sm" type="text" id="RECHARGE" name="RECHARGE" value="<?php $this->print_(['sourceData', 'RECHARGE']) ?>" > 
        </div>
    </div>
    <div class="col-sm-3">      
        <div class="form-group">
            <label class="small" for='TRANSMISSIVITY'>TRANSMISSIVITY [m2/s] </label>
            <input class="form-control input-sm" type="text" id="TRANSMISSIVITY" name="TRANSMISSIVITY" value="<?php $this->print_(['sourceData', 'TRANSMISSIVITY']) ?>" >
        </div>
    </div>
    <div class="col-sm-3">      
        <div class="form-group">
            <label class="small" for='STORATIVITY'>STORATIVITY []</label>          
            <input  class="form-control input-sm" id="STORATIVITY" type="text" name="STORATIVITY" value="<?php $this->print_(['sourceData', 'STORATIVITY']) ?>" > 

        </div>
    </div>
</div>

<form action="<?php $this->link(['action' => 'saveParametrs']); ?>" method="POST">   
    <div class="row">
        <div class="col-sm-3">      
            <div class="form-group">
                <label class="small">DEFINE: SKIN EFFECT S:</label>   
                <input type="range" min="0" max="100" value="0" step="1" onchange="$('#SKIN').val(this.value);
                        redraw()" />   

                <label class="small">DEFINE: WELL STORAGE C:</label>   
                <input type="range" min="100" max="10000" value="0" step="50" onchange="$('#WELL_STORAGE').val(this.value);
                        redraw()" />   

            </div>
        </div>
        <div class="col-sm-3">      
            <div class="form-group">

                <label class="small">SKIN EFFECT Wd:</label>
                <input class="form-control input-sm" id='SKIN' name='SKIN' type='text' value="<?php $this->print_(['sourceData', 'SKIN']) ?>" >
                <label class="small">WELL STORAGE Cd:</label>
                <input class="form-control input-sm" id='WELL_STORAGE' name='WELL_STORAGE' type='text' value="<?php $this->print_(['sourceData', 'WELL_STORAGE']) ?>">


            </div>
        </div>
        <div class="col-sm-3">   
            <br>
            <div class="btn btn-default btn-sm " onclick="redraw()">REDRAW</div>
            <br><br>
            <input class="btn btn-primary btn-sm" type="submit" value="SAVE PARAMETRS">
        </div>


    </div>
</form> 


<div class="form-inline">

    <div class="form-group">          
        <label class="small">Nash–Sutcliffe model efficiency coefficient:</label>
        <input class="form-control"s id="NS" type="text" disabled="disable">
    </div>


    <button class="btn btn-default btn-sm" onclick="matching()">MATCHING</button>

</div>



<div id='border_charts'>

    <div id="chart"></div>

</div>


