
<h3>Theisova metoda typové křivky</h3>

<table id='control_panel_theis'>
    <tr>
        <td>
            <label>W(u): </label>
        </td>
        <td>
            <input id='w_point' type='text' readonly>
        </td>        
        <td>
            <label>1/u: </label>
        </td>
        <td>
            <input id='u_point' type='text' readonly>
        </td>
        <td>
            <label for='RECHARGE'>RECHARGE [m3/s]</label>
        </td>
        <td>
            <input type="text" id="RECHARGE" name="RECHARGE" value="<?php $this->write($this->model->sourceData['RECHARGE']) ?>" > 
        </td>            
    </tr>
    <tr>
        <td>  
            <label>s [L]: </label>
        </td>
        <td>
            <input id='s_point' type='text'>
        </td>
        <td>
            <label>t [s]: </label>
        </td>
        <td>
            <input id='t_point' type='text'>
        </td>
        <td>
            <label for='WELL_DISTANCE'>WELL_DISTANCE [m]</label>
        </td>
        <td>
            <input type="text" id="WELL_DISTANCE" name="WELL_DISTANCE" value="<?php $this->write($this->model->sourceData['WELL_DISTANCE']) ?>" > 
        </td>
    </tr>
</table>

<form action="<?php echo \GLOBALVAR\ROOT . "/?core=theis&handle=saveParametrs"; ?>" method="POST">   
    <table>
        <tr>    
            <td>
                <label for='TRANSMISSIVITY'>TRANSMISSIVITY [m2/s] (Editable)</label>
            </td>
            <td>
                <input type="text" id="TRANSMISSIVITY" name="TRANSMISSIVITY" value="<?php $this->write($this->model->sourceData['TRANSMISSIVITY']) ?>" >
            </td>
        </tr>
        <tr>
            <td>
                <label for='STORATIVITY'>STORATIVITY [] (Editable)</label>
            </td>
            <td>
                <input id="STORATIVITY" type="text" name="STORATIVITY" value="<?php $this->write($this->model->sourceData['STORATIVITY']) ?>" > 
            </td>
            <td>
                <b><div id="button" onclick="calculTheis();">SOLVE</div></b>
            </td>
        </tr>
        <tr>    
            <td>   
                <input type="submit" value="SAVE PARAMETRS">
            </td>
        </tr>   
    </table>       
</form>  



<div id='border_charts'>

    <div id="chart"></div>

    <div id="dragg_able">
        <div id="dragg_button" ></div>
        <div id="chart1" ></div>
    </div>
</div>