// JavaScript Document
// Project: RadFlow
// Author: Jiri Holub
// Description: Stehfest algorithm


function dimensionlessToReal(td, sd) {

    t = new Array();
    s = new Array();
    data = new Array;

    Q = parseFloat(document.getElementById('RECHARGE').value);
    T = parseFloat(document.getElementById('TRANSMISSIVITY').value);
    rv = parseFloat(document.getElementById('RADIUS_WELL').value);
    S = parseFloat(document.getElementById('STORATIVITY').value);

    for (l = 0; l < td.length; l++) {

 // cas 
        t[l] = (td[l] * ((rv * rv) * S)) / T;
 
// snizeni  
        s[l] = (sd[l] * Q) / (2 * Math.PI * T);

        data[l] = [t[l], s[l]];
    }

    return data;
}


// t = time, s = pressure drop, return array[[td],[sd]]
function realToDimensionless(t, s) {

    td = new Array();
    sd = new Array();
    data = new Array;

    Q = parseFloat(document.getElementById('RECHARGE').value);
    T = parseFloat(document.getElementById('TRANSMISSIVITY').value);
    rv = parseFloat(document.getElementById('RADIUS_WELL').value);
    S = parseFloat(document.getElementById('STORATIVITY').value);

    for (l = 0; l < t.length; l++) {

// bezrozmerny cas 
        td[l] = ((T * t[l]) / ((rv * rv) * S));
 
// bezrozmerne snizeni          
        sd[l] = (((2 * Math.PI * T) / Q) * s[l]);
        
        data[l] = [td[l], sd[l]];
    }

    return data;
}

function createTd(first_time, last_time) {

    if(first_time == 0 || first_time < 0){        
        first = 1;
    }else{
        first = first_time;
    }
    
    last = last_time;

    td = new Array();
    td[0] = first / 10;
    i = 1;
    
    while (td[i - 1] < (last * 10)) {
        td[i] = td[i - 1] * 1.2;
        i++;
    }
    
    return td;
}


//Laplace transform function, skin effect, wellbore storage
function F(p) {

    C = document.getElementById('WELL_STORAGE').value;        // storage well
    S = document.getElementById('SKIN').value;        // skin effect

    // AGARWAL: Investigation of Wellbore_Storage and skin effect
    div = p * (Math.sqrt(p) * BesselK1(Math.sqrt(p)) + C * p * (BesselK0(Math.sqrt(p)) + S * Math.sqrt(p) * BesselK1(Math.sqrt(p))));

    // bezrozmerne snizeni v Laplasove prostoru
    hd = (BesselK0(Math.sqrt(p)) + (S * Math.sqrt(p) * BesselK1(Math.sqrt(p)))) / div;

    return hd;
}

//Laplace transform function, Theis equation
function F_1(p){
    
    // r distance of pumped well to observ. well
    // S storativity
    // p laplace parametr
    // T transmisivity

    T = parseFloat(document.getElementById('TRANSMISSIVITY').value);
    r = parseFloat(document.getElementById('RADIUS_WELL').value);
    S = parseFloat(document.getElementById('STORATIVITY').value); 
    
    rk = Math.sqrt(((r*r) * S * p) / T);
    
    hd = ( BesselK0(rk) / p );

    return hd;
}

function stehfest(td) {

    //STEHFEST TERMS 
    N = 10;
    // Vi presented by Walton(1996)
    Vi = new Array(0.08333333333333333, -32.08333333333334, 1279.0, -15623.66666666667, 84244.1666666666, -236957.5, 375911.66666666667, -340071.6666666667, 164062.5, -32812.5);

    result = [[]];

    for (a = 0; a < td.length; a++) {

        sum = 0;
        i = 1;
        while (i <= N) {
            k = (i + i) / 2;
            p = i * (Math.log(2) / td[a]);
            sum = sum + Vi[i - 1] * F(p);
            i++;
        }
        // groundwater function - dimensionless drawdowns
        ft = Math.log(2) / td[a] * sum;

        result[a] = [td[a], ft];
    }

    return result;
}

function ploting(model, data) {

    document.getElementById('chart').innerHTML = "";

    $.jqplot('chart', [data, model], {
        title: 'Swd',
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
            //    ticks: [1, 10, 100, 500, 1000, 5000, 10000, 50000, 100000, 500000, 1000000, 5000000, 10000000, 50000000, 100000000, 500000000, 1000000000],
                tickOptions: {
                    formatString: '%.1e'                           //http://perldoc.perl.org/functions/sprintf.html                      
                },
                renderer: $.jqplot.LogAxisRenderer
            },
            yaxis: {
                min: 0,
                max: 30,
                label: "s",
                tickOptions: {
                    fontSize: '12px',
                    formatString: '%.1f'                           //http://perldoc.perl.org/functions/sprintf.html                      
                }
            }
        }
    });
}