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
        <div class="col-sm-2">      
            <div class="form-group">
                <label class="small">sd_1:</label>
                <input class="form-control input-sm" id='sd_1' name='sd_1' type='text' value="">
            </div>
        </div>
        <div class="col-sm-2">      
            <div class="form-group">
                <label class="small">sd_2</label>
                <input class="form-control input-sm" id='sd_2' name='sd_2' type='text' value="" >
            </div>
        </div>
        <div class="col-sm-2">      
            <div class="form-group">
                <label class="small">td_1:</label>
                <input class="form-control input-sm" id='td_1' name='td_1' type='text' value="">
            </div>
        </div>
        <div class="col-sm-2">      
            <div class="form-group">
                <label class="small">td_2</label>
                <input class="form-control input-sm" id='td_2' name='td_2' type='text' value="" >
            </div>
        </div>  
        <div class="col-sm-2">      
            <div class="form-group">
                <label class="small">iz</label>
                <input class="form-control input-sm" id='iz' name='iz' type='text' value="" >
            </div>
        </div>       

    </div>




    <div class="row">
        <div class="col-sm-3">      
            <div class="form-group">
                <label class="small">WELL STORAGE Cd:</label>
                <input class="form-control input-sm" id='WELL_STORAGE' name='WELL_STORAGE' type='text' value="<?php $this->print_(['sourceData', 'WELL_STORAGE']) ?>">
            </div>
        </div>
        <div class="col-sm-3">      
            <div class="form-group">
                <label class="small">SKIN EFFECT Wd:</label>
                <input class="form-control input-sm" id='SKIN' name='SKIN' type='text' value="<?php $this->print_(['sourceData', 'SKIN']) ?>" >
            </div>
        </div>
        <div class="col-sm-3">   
            <br>
            <div class="btn btn-default btn-sm " onclick="solve()">SOLVE</div>
            <input class="btn btn-primary btn-sm" type="submit" value="SAVE PARAMETRS">
        </div>
    </div>
</form> 


<div id='border_charts'>

    <div id="chart"></div>

</div>



<script>


    var Radflow = window.Drutes || {};
    Radflow.dir = "<?php echo \GLOBALVAR\ROOT; ?>";

    Radflow.s_input = new Array(<?php $this->print_(['graphData', 's']); ?>);

    Radflow.t_input = new Array(<?php $this->print_(['graphData', 't']); ?>);

    Radflow.data = [[]];

    for (i = 0; i < Radflow.t_input.length; i++) {

        Radflow.data[i] = [Radflow.t_input[i], Radflow.s_input[i]];
    }

    Math.log10 = function (n) {
        return (Math.log(n)) / (Math.log(10));
    };



    Radflow.straightLine = new function () {

        this.sd1 = null;

        this.sd2 = null;

        this.td1 = null;

        this.td2 = null;

        this.settingOrder = 0;

        this.setInput = function () {

            document.getElementById('sd_1').value = this.sd1;
            document.getElementById('sd_2').value = this.sd2;

            document.getElementById('td_1').value = this.td1;
            document.getElementById('td_2').value = this.td2;

        };

        this.setInput();

        this.init = function (sd, td) {

            if (this.settingOrder === 0) {

                this.sd1 = sd;
                this.td1 = td;
                this.settingOrder = 1;
            } else {

                this.sd2 = sd;
                this.td2 = td;
                this.settingOrder = 0;
            }

            this.setInput();

        };
    }();


    Radflow.analysis = function () {


        iz = (Radflow.straightLine.sd2 - Radflow.straightLine.sd1) / (Math.log10(Radflow.straightLine.td2) - Math.log10(Radflow.straightLine.td1));

        document.getElementById('iz').value = iz;

        Q = document.getElementById('RECHARGE').value;

        T = document.getElementById('TRANSMISSIVITY').value;

        Cd = document.getElementById('WELL_STORAGE').value;

        W = (1 / 0.86) * (((2 * Math.PI * T * iz) / Q) - (1.0127 * (Math.log10(Cd))) - 1.0237);

        document.getElementById('SKIN').value = W;
    };


    $(document).ready(function () {

        singlePloting([Radflow.data], 'chart', {x: 't[s]', y: "s[m]"});

        $('#chart').bind('jqplotClick', function (ev, seriesIndex, pointIndex, data) {

            Radflow.straightLine.init(pointIndex.yaxis, pointIndex.xaxis);

            Radflow.analysis();

            ploting([
                [Radflow.straightLine.td1, Radflow.straightLine.sd1],
                [Radflow.straightLine.td2, Radflow.straightLine.sd2]],
                    Radflow.data,
                    'chart',
                    {x: 't[s]', y: "s[m]"}
            );
        }
        );
    });
</script>


