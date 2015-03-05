
<h3>Jacob semilogarithmic method</h3>

<table id='control_panel'>
    <tr>
        <td>
            <label>t1 [s]: </label>

        </td>
        <td>
            <input id='t1_point' type='text' readonly>
        </td>
        <td>
            <label>t2 [s]: </label>

        </td>
        <td>
            <input id='t2_point' type='text' readonly >          
        </td>
        <td>
            <label>SLOPE i:</label>
        </td>
        <td>        
            <input id='result_i' type='number' readonly>
        </td>
    </tr>

    <tr>
        <td> 
            <label>s1 [cm]: </label>
        </td>
        <td>
            <input id='s1_point' type='text' readonly>
        </td>
        <td>
            <label>s2 [cm]: </label>             
        </td>
        <td>
            <input id='s2_point' type='text' readonly > 
        </td>        
    </tr>

    <tr>
        <td>
            <label for='RECHARGE'>RECHARGE [m3/s]</label>
        </td> 
        <td>
            <input type="text" id="RECHARGE" name="RECHARGE" value="<?php $this->write($this->model->sourceData['RECHARGE']) ?>" >
        </td>
        <td>
            <label>t0 [s]</label>
        </td>    
        <td>
            <input id='result_t0' type='text'>
        </td> 
        <td>

            <label for='WELL_DISTANCE'>DISTANCE OBSERVATION WELL [m]</label>
        </td>
        <td>
            <input type="text" id="WELL_DISTANCE" name="WELL_DISTANCE" value="<?php $this->write($this->model->sourceData['WELL_DISTANCE']) ?>" >            
        </td>        
    </tr>
</table>

<form action="<?php echo \GLOBALVAR\ROOT . "/?core=jacob&handle=saveParametrs"; ?>" method="POST">
   
    <table>
        <tr>
            <td>
                <label for='TRANSMISSIVITY'>TRANSMISSIVITY [m2/s] (EDITABLE)</label>
            </td>
            <td>    
                <input type="text" id="TRANSMISSIVITY" name="TRANSMISSIVITY" value="<?php $this->write($this->model->sourceData['TRANSMISSIVITY']) ?>" readonly>
            </td>                
            <td>
                <b><div id="button" onclick='analysisTrans();'>SOLVE TRANSMISIVITY</div></b>
            </td>
        </tr>
        <tr>
            <td>
                <label for='STORATIVITY'>STORATIVITY [] (EDITABLE)</label>
            </td>            
            <td>
                <input id="STORATIVITY" type="text" name="STORATIVITY" value="<?php $this->write($this->model->sourceData['STORATIVITY']) ?>" readonly>            
            </td>
            <td>
                <b><div id="button" onclick='analysisStor();'>SOLVE STORATIVITY</div></b>
            </td>    
        </tr>
        <tr>
            <td>
                <b><div id="button" onclick='delAnalysisInput();'>RESET</div></b>
            </td>
        </tr>        
        <tr>
            <td>
                <input type="submit" value="SAVE PARAMETRS">
            </td>
        </tr>
    </table>

</form>





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

<div id="chart">
</div>