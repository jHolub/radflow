 
<?php
$this->embed('login.php');

$this->embed('register.php');
?>

<div class="row">

    <div class="col-sm-8"> 
        <h4>Pumping test</h4>
        <div class="text text-justify">
            Pumping test is a basic method for determination aquifer hydraulic parameters. The main hydraulic parameters are evaluated 
            the transmissivity T and the storativity well S, these two main indicators define the basic physical properties of the aquifer. 
            Estimation of these parameters is commonly used semi-logarithmic straight-line method, which is based on the assumptions for 
            Theis mathematical model. Nevertheless, there are other parameters corresponding real conditions during pumping test, skin 
            effect and wellbore storage can occur in a pumping well. Both the skin effect and the wellbore storage were neglecting in 
            the Theis model. The evaluation of pumping test data conducted usually a method for obtaining estimates hydraulic parameters, 
            skin effect and wellbore storage not comprise. Despite the fact that neglecting of the skin effect and the wellbore storage 
            can lead to false analysis of the time-drawdown variation in the pumping well. Due to further related activities, such as 
            solutions contaminant transport, where the hydraulic parameters are included and the time but also the energy consumption 
            of pumping test data acquisition is desirable to prevent erroneous analysis. The pumping-well data plotted on a 
            semi-logarithmic paper two straight lines can obtained, this characteristic shape of the curve indicates the skin effect 
            and the wellbore storage influence conducted pumping test. Here the evaluation method is developed to the estimation of 
            transmissivity, storativity, skin effect und wellbore storage of pumping test data showing this characteristic curve shape.    
        </div>

        <h4>Wellbore storage</h4>
        <div class="text text-justify">
            In the early time of pumping test, withdrawn mass of water not comes from the surrounding aquifer but from water volume
            originally stored in the well casing (Papadopulos and Cooper 1967). If the pumped well has a finite diameter and wellbore 
            storage is appreciable, the discharge rate is the sum of the aquifer flow rate and the rate of wellbore storage depletion. 
            The aquifer flow rate increases exponentially with time toward the discharge rate and the wellbore storage depletion rate 
            decreases in a like manner to zero (Streltsova, 1988). Storage well has only influence on early time pumping test and decrease 
            with time (Fenske, 1977), neglecting it could result in overestimate of storage coefficient (Black and Kipp, 1977).

        </div>

        <h4>Skin effect</h4>
        <div class="text text-justify">
            A thin wellbore skin can be present at the interface between the pumped well screen and the aquifer (Moench, 1985). 
            Variant of the phenomenon causes skin effect part of them created already during drilling of borehole, a drilling process 
            can arises creation of a damage zone induces an extra lost to groundwater flow. The damage zone around the borehole brings 
            about hydraulic properties changes of surrounding the borehole and subsequent influence the time-drawdown result of the pumping 
            test. The skin effect is presented the screen inflicting the head loss. The head loss are represented  turbulent flow, partial 
            penetration well and the other phenomenon, due to the difficulty in determining appropriate value of skin effect is usually 
            neglected, it nevertheless exerts a extra head loss on the wellbore surface. Zero skin indicates that there is no drilling 
            damage or fractures near the wellbore, and partial penetration is negligible. Appropriate skin effect value is defined as 
            the deference of actual drawdown on the pumping well and drawdown based on the Thies model, for large times can be defined
            as (Van Everdingen 1953):
            <br>
            <i> sw = sd + s	(1)</i>
            <br>
            where sw is pumping well drawdown, sd is drawdown caused by the skin and s is drawdown based on the Theis model.

        </div>

    </div>
    <div class="col-sm-4">   
        <img style="padding-left: 20px;" src="./images/pumping_1.png"> 
        <br>
        <i>1. The scheme of pumping test, where Q is pumping rate, h well drawdown and r radius </i>
        <br><br>
        <img src="./images/skin.png">
        <br>
        <i>2. Drawdown in the well affected by skin effect</i>
    </div>

</div> 
