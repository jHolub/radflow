
function singlePloting(data, id, label) {

    document.getElementById(id).innerHTML = "";

    $.jqplot(id, data, {
        grid: {
            drawGridLines: true,
            backgroundColor: "#FCFCFC",
            gridLineColor: '#E8E8E8',
            gridLineWidth: 1,
            borderWidth: 0.1,
            shadow: false
        },
        seriesDefaults: {
            markerOptions: {
                size: 7,
                shadow: false
            },
            shadow: false
        },
        highlighter: {
            sizeAdjust: 10,
            tooltipLocation: 'n',
            tooltipAxes: 'y',
            useAxesFormatters: false,
            showTooltip: true,
            tooltipFade: true
        },
        cursor: {
            show: true,
            tooltipLocation: 'se',
            zoom: false,
            dblClickReset: true,
            showVerticalLine: true,
            showHorizontalLine: true,
            fontSize: '13px'
        },
        legend: {
            show: true,
            location: 'nw'
        },
        series: [
            {label: 'Pumping test', isDragable: false, color: "#001ECE", lineWidth: 3, markerOptions: {size: 5, shadow: true}, shadow: true}
        ],
        axes: {
            xaxis: {
                //ticks: [0.001,0.1,0.3,1, 10, 100, 500, 1000, 5000, 10000, 50000, 100000, 500000, 1000000, 5000000, 10000000, 50000000, 100000000, 500000000, 1000000000],
                label: label.x,
                tickOptions: {
                    fontSize: '11px',
                    formatString: '%.1e'                           //http://perldoc.perl.org/functions/sprintf.html                      
                },
                renderer: $.jqplot.LogAxisRenderer
            },
            yaxis: {
               // min: 0,
                //max: 20,
                label: label.y,
                tickOptions: {
                    fontSize: '11px',
                    formatString: '%.1f'                           //http://perldoc.perl.org/functions/sprintf.html                      
                }
            }
        }
    });
}

function ploting(model, data, id, label) {

    document.getElementById(id).innerHTML = "";

    $.jqplot(id, [data, model], {
        grid: {
            drawGridLines: true,
            backgroundColor: "#FCFCFC",
            gridLineColor: '#E8E8E8',
            gridLineWidth: 1,
            borderWidth: 0.1,
            shadow: false
        },
        seriesDefaults: {
            markerOptions: {
                size: 7,
                shadow: false
            },
            shadow: false
        },
        highlighter: {
            sizeAdjust: 10,
            tooltipLocation: 'n',
            tooltipAxes: 'y',
            useAxesFormatters: false,
            showTooltip: true,
            tooltipFade: true
        },
        cursor: {
            show: true,
            tooltipLocation: 'se',
            zoom: false,
            dblClickReset: true,
            showVerticalLine: true,
            showHorizontalLine: true,
            fontSize: '13px'
        },
        legend: {
            show: true,
            location: 'nw'
        },
        series: [
            {label: 'Pumping test', isDragable: false, color: "#001ECE", lineWidth: 3, markerOptions: {size: 5, shadow: true}, shadow: true},
            {label: 'Model data - Agarwal', isDragable: false, color: "#AF0000",linePattern: 'dashed', lineWidth: 3, markerOptions: {size: 0, shadow: false}, shadow: true}
        ],
        axes: {
            xaxis: {
                //ticks: [0.001,0.1,0.3,1, 10, 100, 500, 1000, 5000, 10000, 50000, 100000, 500000, 1000000, 5000000, 10000000, 50000000, 100000000, 500000000, 1000000000],
                label: label.x,
                tickOptions: {
                    fontSize: '11px',
                    formatString: '%.1e'                           //http://perldoc.perl.org/functions/sprintf.html                      
                },
                renderer: $.jqplot.LogAxisRenderer
            },
            yaxis: {
               // min: 0,
                //max: 20,
                label: label.y,
                tickOptions: {
                    fontSize: '11px',
                    formatString: '%.1f'                           //http://perldoc.perl.org/functions/sprintf.html                      
                }
            }
        }
    });
}


function plotingReal(model, data, id) {

    document.getElementById(id).innerHTML = "";

    $.jqplot(id, [data, model], {
        title: 's vs t',
        grid: {
            drawGridLines: true,
            backgroundColor: "#F7FCFD",
            gridLineColor: '#E8E8E8',
            gridLineWidth: 1,
            borderWidth: 0.1,
            shadow: false
        },
        seriesDefaults: {
            markerOptions: {
                size: 7,
                shadow: false
            },
            shadow: false
        },
        highlighter: {
            sizeAdjust: 10,
            tooltipLocation: 'n',
            tooltipAxes: 'y',
            useAxesFormatters: false,
            showTooltip: true,
            tooltipFade: true
        },
        cursor: {
            show: true,
            tooltipLocation: 'se',
            zoom: false,
            dblClickReset: true,
            showVerticalLine: true,
            showHorizontalLine: true,
            fontSize: '13px'
        },
        legend: {
            show: true,
            location: 'en'
        },
        series: [
            {label: 'Cerpaci zkouska', isDragable: false, color: "blue", lineWidth: 2, markerOptions: {size: 3, shadow: false}, shadow: false},
            {label: 'Modelovana data', isDragable: false, color: "red", lineWidth: 1, markerOptions: {size: 2, shadow: false}, shadow: false}
        ],
        axes: {
            xaxis: {
                ticks: [0.01,0.05,0.1,0.5,1, 10, 100, 500, 1000, 5000],
                tickOptions: {
                   formatString: '%.1f'                           //http://perldoc.perl.org/functions/sprintf.html                      
                },
                renderer: $.jqplot.LogAxisRenderer
            },
            yaxis: {
                min: 0,
                max: 10,
                label: "s",
                tickOptions: {
                    fontSize: '12px',
                    formatString: '%.1f'                           //http://perldoc.perl.org/functions/sprintf.html                      
                }
            }
        }
    });
}

function plotingLogLog(model, data, id) {

    document.getElementById(id).innerHTML = "";

    $.jqplot(id, [data, model], {
        title: 'log log sd vs ts/wd',
        grid: {
            drawGridLines: true,
            backgroundColor: "#F7FCFD",
            gridLineColor: '#E8E8E8',
            gridLineWidth: 1,
            borderWidth: 0.1,
            shadow: false
        },
        seriesDefaults: {
            markerOptions: {
                size: 7,
                shadow: false
            },
            shadow: false
        },
        highlighter: {
            sizeAdjust: 10,
            tooltipLocation: 'n',
            tooltipAxes: 'y',
            useAxesFormatters: false,
            showTooltip: true,
            tooltipFade: true
        },
        cursor: {
            show: true,
            tooltipLocation: 'se',
            zoom: false,
            dblClickReset: true,
            showVerticalLine: true,
            showHorizontalLine: true,
            fontSize: '13px'
        },
        legend: {
            show: true,
            location: 'en'
        },
        series: [
            {label: 'Cerpaci zkouska', isDragable: false, color: "blue", lineWidth: 2, markerOptions: {size: 3, shadow: false}, shadow: false},
            {label: 'Modelovana data', isDragable: false, color: "red", lineWidth: 1, markerOptions: {size: 2, shadow: false}, shadow: false}
        ],
        axes: {
            xaxis: {
                ticks: [0.01,0.05,0.1,0.5,1, 10, 100, 500, 1000, 5000,10000,100000,1000000],
                tickOptions: {
                   formatString: '%.1f'                           //http://perldoc.perl.org/functions/sprintf.html                      
                },
                renderer: $.jqplot.LogAxisRenderer
            },
            yaxis: {
                  ticks: [0.01,0.1,1,10,100],
                  min:0.1, 
                  max:100,
                  label: "sd",
                  tickOptions: {
                      fontSize: '13px',
                      textColor: "black",
                      formatString: '%.1f'                           //http://perldoc.perl.org/functions/sprintf.html                      
                  },
                  renderer: $.jqplot.LogAxisRenderer
            }
        }
    });
}