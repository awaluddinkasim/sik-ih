/* Template Name: Techwind - Tailwind CSS Multipurpose Landing & Admin Dashboard Template
   Author: Shreethemes
   Email: support@shreethemes.in
   Website: https://shreethemes.in
   Version: 2.2.0
   Created: May 2022
   File Description: For Apex Chart
*/

try {
    var options1 = {
        series: [{
            name: 'Profit',
            data: [500, 653, 548, 482, 553, 570, 560, 610, 580, 854, 945, 1150],
        }, {
            name: 'Expenses',
            data: [246, 379, 521, 453, 243, 264, 333, 246, 468, 222, 456, 789]
        }],
        chart: {
            type: 'bar',
            height: 350,
            toolbar: {
                show: false,
                autoSelected: 'zoom'
            },
        },
        grid: {
            strokeDashArray: 5,
      
        },
        plotOptions: {
            bar: {
                borderRadius: 5,
                horizontal: false,
                columnWidth: '40%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        colors: ['#4f46e5', '#10b981'],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },
        yaxis: {
            title: {
                text: 'Profit / Expenses (USD)',
    
                style: {
                    colors: ['#8492a6'],
                    fontSize: '16px',
                    fontFamily: 'Nunito, sans-serif',
                    fontWeight: 600,
                },
            },
        },
        fill: {
            opacity: 1,
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return "$" + val
                }
            }
        }
    };
    
    var chart1 = new ApexCharts(document.querySelector("#mainchart"), options1);
    chart1.render();
} catch (error) {
    
}

//CryptoCurrency

//Chart 1
try {
    var options = {
        series: [{
            data: [20, 45, 40, 64, 35, 25, 35]
        }],
        chart: {
            type: 'area',
            height: 90,
            width: '100%',
            sparkline: {
                enabled: true
            }
        },
        stroke: {
            curve: 'smooth',
            width: 3,
        },
        colors: ['#059669'],
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                inverseColors: false,
                opacityFrom: 0.45,
                opacityTo: 0.05,
                stops: [20, 100, 100, 100]
            },
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart-1"), options);
    chart.render();

    
} catch (error) {
    
}

//chart 2
    try {
    var options = {
        series: [{
            data: [10, 25, 30, 54, 45, 39, 15]
        }],
        chart: {
            type: 'area',
            height: 90,
            width: '100%',
            sparkline: {
                enabled: true
            }
        },
        stroke: {
            curve: 'smooth',
            width: 3,
        },
        colors: ['#dc2626'],
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                inverseColors: false,
                opacityFrom: 0.45,
                opacityTo: 0.05,
                stops: [20, 100, 100, 100]
            },
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart-2"), options);
    chart.render();
    
} catch (error) {
    
}


//Chart 3
try {
    var options = {
        series: [{
            data: [15, 20, 10, 45, 20, 10, 5]
        }],
        chart: {
            type: 'area',
            height: 90,
            width: '100%',
            sparkline: {
                enabled: true
            }
        },
        stroke: {
            curve: 'smooth',
            width: 3,
        },
        colors: ['#059669'],
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                inverseColors: false,
                opacityFrom: 0.45,
                opacityTo: 0.05,
                stops: [20, 100, 100, 100]
            },
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart-3"), options);
    chart.render();
    
} catch (error) {
    
}


//Chart 4
try {
    var options = {
        series: [{
            data: [3, 5, 7, 11, 8, 5, 7]
        }],
        chart: {
            type: 'area',
            height: 90,
            width: '100%',
            sparkline: {
                enabled: true
            }
        },
        stroke: {
            curve: 'smooth',
            width: 3,
        },
        colors: ['#dc2626'],
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                inverseColors: false,
                opacityFrom: 0.45,
                opacityTo: 0.05,
                stops: [20, 100, 100, 100]
            },
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart-4"), options);
    chart.render();
    
} catch (error) {
    
}

//Chart 5
try {
    var options = {
        series: [{
            data: [20, 14, 24, 30, 16, 12, 8]
        }],
        chart: {
            type: 'area',
            height: 90,
            width: '100%',
            sparkline: {
                enabled: true
            }
        },
        stroke: {
            curve: 'smooth',
            width: 3,
        },
        colors: ['#dc2626'],
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                inverseColors: false,
                opacityFrom: 0.45,
                opacityTo: 0.05,
                stops: [20, 100, 100, 100]
            },
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart-5"), options);
    chart.render();
    
} catch (error) {
    
}

//Chart 6
try {
    var options = {
        series: [{
            data: [4, 7, 15, 10, 8, 12, 18]
        }],
        chart: {
            type: 'area',
            height: 90,
            width: '100%',
            sparkline: {
                enabled: true
            }
        },
        stroke: {
            curve: 'smooth',
            width: 3,
        },
        colors: ['#059669'],
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                inverseColors: false,
                opacityFrom: 0.45,
                opacityTo: 0.05,
                stops: [20, 100, 100, 100]
            },
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function (seriesName) {
                        return ''
                    }
                }
            },
            marker: {
                show: false
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart-6"), options);
    chart.render();
    
} catch (error) {
    
}