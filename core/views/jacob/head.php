 <link rel="stylesheet" type="text/css" href="<?php echo \GLOBALVAR\ROOT; ?>/css/jacob/style.css" />
 
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

<script type="text/javascript" src="<?php echo \GLOBALVAR\ROOT; ?>/js/jacob/fc.js"></script>

<script>
    
    var s = new Array(<?php $this->print_(['graphData','s']);?>);
    
    var t = new Array(<?php $this->print_(['graphData','t']);?>);
    
    var s_observ = new Array(<?php $this->print_(['graphDataObserv','s']);?>);
    
    var t_observ = new Array(<?php $this->print_(['graphDataObserv','t']);?>);

</script>