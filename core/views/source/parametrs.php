<br>
<b>
    Well hydraulic parameters
</b>
<br>
<br>
<table id="model_parameters">

    <form action="<?php echo \GLOBALVAR\ROOT . "/?core=source&handle=saveParametrs&render=edit"; ?>" method="post">

        <tr>
            <td>
                <label for='STORATIVITY'>STORATIVITY []</label>
            </td>
            <td>
                <input id= "STORATIVITY" type="text" name="STORATIVITY" value="<?php $this->write($this->model->sourceData['STORATIVITY']) ?>" >               
            </td>
            <td>
                <label for='TRANSMISSIVITY'>TRANSMISSIVITY [m2/s] </label>
            </td>
            <td>
                <input type="text" name="TRANSMISSIVITY" value="<?php $this->write($this->model->sourceData['TRANSMISSIVITY']) ?>" >          
            </td>
        </tr>

        <tr>
            <td>
                <label for='RECHARGE'>RECHARGE [m3/s]</label>     
            </td>
            <td>
                <input type="text" name="RECHARGE" value="<?php $this->write($this->model->sourceData['RECHARGE']) ?>" > 
            </td> 
            <td>
                <label for='WELL_DISTANCE'>DISTANCE OBSERVATION WELL [m]</label>  
            </td> 
            <td>
                <input type="text" name="WELL_DISTANCE" value="<?php $this->write($this->model->sourceData['WELL_DISTANCE']) ?>" >  
            </td>            
        </tr> 

        <tr>
            <td>
                <label for='RADIUS_WELL'>RADIUS_WELL [m]</label>
            </td>
            <td>
                <input type="text" name="RADIUS_WELL" value="<?php $this->write($this->model->sourceData['RADIUS_WELL']) ?>" >
            </td> 
            <td>
                <label for='SKIN'>SKIN EFFECT []</label>
            </td> 
            <td>
                <input type="text" name="SKIN" value="<?php $this->write($this->model->sourceData['SKIN']) ?>" >
            </td>           
        </tr>                
        <tr>
            <td>
                <label for='WELL_STORAGE'>WELLBORE STORAGE []</label>
            </td>
            <td>
                <input type="text" name="WELL_STORAGE" value="<?php $this->write($this->model->sourceData['WELL_STORAGE']) ?>" >
            </td>
        <tr>
            <td>
                <input type="submit" value="SAVE" >
            </td>
        </tr>
    </form>

</table>    