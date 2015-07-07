
<div class="row">

    <div class="col-sm-4">      
        <div class="form-group">

            <label>t1 [s]: </label>
            <input class="form-control" id='t1_point' type='text' readonly>

            <label>s1 [cm]: </label>
            <input class="form-control" id='s1_point' type='text' readonly>

        </div>
    </div>

    <div class="col-sm-4">      
        <div class="form-group">
            <label>t2 [s]: </label>
            <input class="form-control" id='t2_point' type='text' readonly >     

            <label>s2 [cm]: </label>             
            <input class="form-control" id='s2_point' type='text' readonly > 
        </div>
    </div>

    <div class="col-sm-4">      
        <div class="form-group">

            <label>SLOPE i:</label>      
            <input class="form-control" id='result_i' type='number' readonly>
            <label>t0 [s]</label>
            <input class="form-control" id='result_t0' type='text'>
        </div>
    </div>    

</div>


<div class="row">
    <div class="col-sm-4">      
        <div class="form-group">

            <label for='RECHARGE'>RECHARGE [m3/s]</label>
            <input class="form-control" type="text" id="RECHARGE" name="RECHARGE" value="<?php $this->print_(['sourceData', 'RECHARGE']) ?>" >

        </div>
    </div>

    <div class="col-sm-4">      
        <div class="form-group">
            <label for='WELL_DISTANCE'>DISTANCE OBSERVATION WELL [m]</label>
            <input class="form-control" type="text" id="WELL_DISTANCE" name="WELL_DISTANCE" value="<?php $this->print_(['sourceData','WELL_DISTANCE']) ?>" >            

        </div>
    </div>
</div>


<form action="<?php echo \GLOBALVAR\ROOT . "/?core=jacob&handle=saveParametrs"; ?>" method="POST">

    <div class="row">
        <div class="col-sm-4">      
            <div class="form-group">
                <label for='TRANSMISSIVITY'>TRANSMISSIVITY [m2/s] (EDITABLE)</label>

                <input class="form-control" type="text" id="TRANSMISSIVITY" name="TRANSMISSIVITY" value="<?php $this->print_(['sourceData','TRANSMISSIVITY']) ?>" readonly>
                <div class="btn btn-default" id="button" onclick='analysisTrans();'>SOLVE TRANSMISIVITY</div>
            </div>
        </div>

        <div class="col-sm-4">      
            <div class="form-group">
                <label for='STORATIVITY'>STORATIVITY [] (EDITABLE)</label>

                <input class="form-control" id="STORATIVITY" type="text" name="STORATIVITY" value="<?php $this->print_(['sourceData','STORATIVITY']) ?>" readonly>            

                <div class="btn btn-default" id="button" onclick='analysisStor();'>SOLVE STORATIVITY</div>
            </div>
        </div>
    </div>

    <div class="btn btn-default" id="button" onclick='delAnalysisInput();'>RESET</div>

    <input class="btn btn-default" type="submit" value="SAVE PARAMETRS">

</form>



<div class="row">

    <div class="col-sm-9"> 
        <div id="chart">
        </div>
    </div>
    <div class="col-sm-3"> 
        <div id="apl_data">
            <table>
                <thead>
                    <tr>
                        <th></th><th>Time [s]</th><th>Drawdown [m]</th>
                    </tr>
                </thead>
                <tbody id="apl_data_tab_body">
                </tbody>
                <tbody id="apl_dataObserv_tab_body">
                </tbody>
            </table>    
        </div>
    </div>
</div>