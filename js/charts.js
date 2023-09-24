var jsonData; // Define the variable to hold the JSON data

function poll() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/data.php", true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Parse the JSON response into a JavaScript object
            jsonData = JSON.parse(xhr.responseText);

            // Update the chart with the new data
            updateChart();
        }
    };

    xhr.send(); // Send the request
}

function updateChart() {
    // Check if jsonData is defined and contains the expected structure
    if (jsonData && jsonData.time && jsonData.solar_voltage) {
        svchart.xAxis[0].setCategories(jsonData.time);
        svchart.series[0].setData(jsonData.solar_voltage);

        scchart.xAxis[0].setCategories(jsonData.time);
        scchart.series[0].setData(jsonData.solar_current);

        stchart.xAxis[0].setCategories(jsonData.time);
        stchart.series[0].setData(jsonData.solar_temperature);

        lvchart.xAxis[0].setCategories(jsonData.time);
        lvchart.series[0].setData(jsonData.load_voltage);

        lcchart.xAxis[0].setCategories(jsonData.time);
        lcchart.series[0].setData(jsonData.load_current);

        socchart.xAxis[0].setCategories(jsonData.time);
        socchart.series[0].setData(jsonData.state_of_charge);       //[jsonData.state_of_charge[jsonData.state_of_charge.length-1]]
    
    }
}

var svchart = Highcharts.chart('svchart', {
    title: {
        text: 'Solar voltage against time'
    },
    xAxis: {
        categories: [], // Initialize with an empty array
        title: {
            text: 'Time'
        }
    },
    yAxis: {
        title: {
            text: 'Solar voltage (V)'
        }
    },
    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
        }
    },
    series: [{
        type: 'spline',
        name: 'Solar Voltage',
        data: [] // Initialize with an empty array
    }]
});

var scchart = Highcharts.chart('scchart', {
    title: {
        text: 'Solar current against time'
    },
    xAxis: {
        categories: [], // Initialize with an empty array
        title: {
            text: 'Time'
        }
    },
    yAxis: {
        title: {
            text: 'Solar current (mA)'
        }
    },
    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
        }
    },
    series: [{
        type: 'spline',
        name: 'Solar current',
        data: [] // Initialize with an empty array
    }]
});

var stchart = Highcharts.chart('stchart', {
    title: {
        text: 'Solar temperature against time'
    },
    xAxis: {
        categories: [], // Initialize with an empty array
        title: {
            text: 'Time'
        }
    },
    yAxis: {
        title: {
            text: 'Solar temperature (*C)'
        }
    },
    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
        }
    },
    series: [{
        type: 'spline',
        name: 'Solar temperature',
        data: [] // Initialize with an empty array
    }]
});

var lvchart = Highcharts.chart('lvchart', {
    title: {
        text: 'Load voltage against time'
    },
    xAxis: {
        categories: [], // Initialize with an empty array
        title: {
            text: 'Time'
        }
    },
    yAxis: {
        title: {
            text: 'Load Voltage (V)'
        }
    },
    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
        }
    },
    series: [{
        type: 'spline',
        name: 'Load Voltage',
        data: [] // Initialize with an empty array
    }]
});

var lcchart = Highcharts.chart('lcchart', {
    title: {
        text: 'Load current against time'
    },
    xAxis: {
        categories: [], // Initialize with an empty array
        title: {
            text: 'Time'
        }
    },
    yAxis: {
        title: {
            text: 'Load current (A)'
        }
    },
    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
        }
    },
    series: [{
        type: 'spline',
        name: 'Load Current',
        data: [] // Initialize with an empty array
    }]
});

var socchart = Highcharts.chart('socchart', {
    title: {
        text: 'Battery State of charge against time'
    },
    xAxis: {
        categories: [], // Initialize with an empty array
        title: {
            text: 'Time'
        }
    },
    yAxis: {
        title: {
            text: 'State of charge against time (%)'
        }
    },
    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
        }
    },
    series: [{
        type: 'spline',
        name: 'Battery state of charge',
        data: [] // Initialize with an empty array
    }]
});

window.onload = function () {
    function update() {
        poll();
        console.log('After updating');
        setTimeout(update, 3000);
    }

    update(); // Start the update loop
};
