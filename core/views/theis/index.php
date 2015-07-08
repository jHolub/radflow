
<h4>Theis Solution - Theis type curve method</h4>
<div class="row">

    <div class="col-sm-4">      
        <div class="form-group">
            <label>W(u): </label>

            <input class="form-control input-sm" id='w_point' type='text' readonly>

            <label>1/u: </label>

            <input class="form-control input-sm" id='u_point' type='text' readonly>
        </div>
    </div>

    <div class="col-sm-4">      
        <div class="form-group">
            <label for='RECHARGE'>RECHARGE [m3/s]</label>

            <input class="form-control input-sm" type="text" id="RECHARGE" name="RECHARGE" value="<?php  $this->print_(['sourceData', 'RECHARGE']) ?>" > 

            <label>s [L]: </label>

            <input class="form-control input-sm" id='s_point' type='text'>
        </div>
    </div>

    <div class="col-sm-4">      
        <div class="form-group">
            <label>t [s]: </label>

            <input class="form-control input-sm" id='t_point' type='text'>

            <label for='WELL_DISTANCE'>WELL_DISTANCE [m]</label>

            <input class="form-control input-sm" type="text" id="WELL_DISTANCE" name="WELL_DISTANCE" value="<?php $this->print_(['sourceData', 'WELL_DISTANCE']) ?>" > 
        </div>
    </div>    

</div>

<form action="<?php echo \GLOBALVAR\ROOT . "/?core=theis&handle=saveParametrs"; ?>" method="POST">   
    <div class="row">

        <div class="col-sm-4">      
            <div class="form-group">
                <label for='TRANSMISSIVITY'>TRANSMISSIVITY [m2/s] (Editable)</label>
                <input class="form-control input-sm" type="text" id="TRANSMISSIVITY" name="TRANSMISSIVITY" value="<?php $this->print_(['sourceData', 'TRANSMISSIVITY']) ?>" >

                <div class="btn btn-default btn-sm" id="button" onclick="calculTheis();">SOLVE</div>     
                <input class="btn btn-primary btn-sm" type="submit" value="SAVE PARAMETRS">
            </div>
        </div>

        <div class="col-sm-4">      
            <div class="form-group">
                <label for='STORATIVITY'>STORATIVITY [] (Editable)</label>
                <input class="form-control input-sm" id="STORATIVITY" type="text" name="STORATIVITY" value="<?php $this->print_(['sourceData', 'STORATIVITY']) ?>" > 
            </div>
        </div>    

    </div>
</form>  



<div id='border_charts'>

    <div id="chart"></div>

    <div id="dragg_able">
        <div id="dragg_button" ></div>
        <div id="chart1" ></div>
    </div>
</div>