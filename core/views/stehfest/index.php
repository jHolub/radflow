
<h3>REAL WELL</h3>


<table id='control_panel_theis'>
    <tr>
        <td>
            <label for='RADIUS_WELL'>RADIUS_WELL [m]</label>
        </td> 
        <td>
            <input type="text" id="RADIUS_WELL" name="RADIUS_WELL" value="<?php $this->write($this->model->sourceData['RADIUS_WELL']) ?>" > 
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
            <label for='TRANSMISSIVITY'>TRANSMISSIVITY [m2/s] </label>
        </td> 
        <td>
            <input type="text" id="TRANSMISSIVITY" name="TRANSMISSIVITY" value="<?php $this->write($this->model->sourceData['TRANSMISSIVITY']) ?>" >
        </td> 
        <td>
            <label for='STORATIVITY'>STORATIVITY []</label>
        </td> 
        <td>            
            <input id="STORATIVITY" type="text" name="STORATIVITY" value="<?php $this->write($this->model->sourceData['STORATIVITY']) ?>" > 
        </td>
    </tr>
    <tr>           
        <td>
            <b><div id="button" onclick="calculTheis();">SOLVE</div></b>
        </td>
    </tr>

</table>

<form action="<?php echo \GLOBALVAR\ROOT . "/?core=stehfest&handle=saveParametrs"; ?>" method="POST">   

    <table>
        <tr>
            <td>
                <label>SKIN EFFECT S:</label>
            </td>
            <td>
                <input id='SKIN' name='SKIN' type='text' value="<?php $this->write($this->model->sourceData['SKIN']) ?>" >
            </td>
            <td>
                <label>WELL STORAGE C:</label>
            </td>
            <td>
                <input id='WELL_STORAGE' name='WELL_STORAGE' type='text' value="<?php $this->write($this->model->sourceData['WELL_STORAGE']) ?>">
            </td>
            <td>
                <input type="submit" value="SAVE PARAMETRS">
            </td>            
        </tr>       
    </table>   

</form> 

<table>
    <tr>
        <td>
            <label>DEFINE: SKIN EFFECT S:</label>   
        </td>
        <td>
            <input type="range" min="0" max="100" value="0" step="1" onchange="$('#SKIN').val(this.value);redraw()" />   
        </td>
    </tr>
    <tr>
        <td>
            <label>DEFINE: WELL STORAGE C:</label>   
        </td>
        <td>
            <input type="range" min="100" max="10000" value="0" step="50" onchange="$('#WELL_STORAGE').val(this.value);redraw()" />   
        </td> 
        <td>
            <button onclick="redraw()">REDRAW</button>
        </td>    
    </tr>
</table>


<div id='border_charts'>

    <div id="chart"></div>

</div>