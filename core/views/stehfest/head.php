<link rel="stylesheet" type="text/css" href="<?php echo \GLOBALVAR\ROOT; ?>/css/stehfest/style.css" />

<script type="text/javascript" src="<?php echo \GLOBALVAR\ROOT; ?>/js/jqplot/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="<?php echo \GLOBALVAR\ROOT; ?>/js/jqplot/plugins/jqplot.dateAxisRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo \GLOBALVAR\ROOT; ?>/js/jqplot/plugins/jqplot.logAxisRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo \GLOBALVAR\ROOT; ?>/js/jqplot/plugins/jqplot.canvasTextRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo \GLOBALVAR\ROOT; ?>/js/jqplot/plugins/jqplot.canvasAxisTickRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo \GLOBALVAR\ROOT; ?>/js/jqplot/plugins/jqplot.ohlcRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo \GLOBALVAR\ROOT; ?>/js/jqplot/plugins/jqplot.cursor.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo \GLOBALVAR\ROOT; ?>/js/jqplot/jquery.jqplot.min.css" />


<script type="text/javascript" src="<?php echo \GLOBALVAR\ROOT; ?>/js/jqplot/plugins/jqplot.canvasAxisLabelRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo \GLOBALVAR\ROOT; ?>/js/jqplot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo \GLOBALVAR\ROOT; ?>/js/jqplot/plugins/jqplot.highlighter.min.js"></script>

<script type="text/javascript" src="<?php echo \GLOBALVAR\ROOT; ?>/js/stehfest/BesselFc.js"></script>
<script type="text/javascript" src="<?php echo \GLOBALVAR\ROOT; ?>/js/stehfest/Stehfest.js"></script>
<script type="text/javascript" src="<?php echo \GLOBALVAR\ROOT; ?>/js/stehfest/fc.js"></script>

<script>

    var s = new Array(<?php echo $this->model->graphData['s']; ?>);

    var t = new Array(<?php echo $this->model->graphData['t']; ?>);

    $(document).ready(function() {

        dimData = realToDimensionless(t, s);
        
        td = createTd(dimData[1][0], dimData[dimData.length - 1][0]);

        modelData = stehfest(td);
        
        ploting(modelData, dimData);

    });
</script>