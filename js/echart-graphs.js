//main page top tools
var myChart = echarts.init(document.getElementById('bar-chart-1'));

    var option = {
        
        color: 'rgba(59,172,240,1)',
        tooltip: {
            trigger: 'item',
            position: 'inside',
            formatter: '{c0}'
        },
        grid: {
            show: false,
            left: "30%",
            right: "-5%",
        },
        xAxis: {
            type: 'value',
            splitLine: {
                show: false,
            },
            boundaryGap: [0, 0.1],
            axisLine: {
                show: false,
            },
            axisTick: {
                show:false,
            },
            axisLabel: {
                show: false,
            },
        },
        yAxis: {
            axisLabel: {
                margin: 10,
                textStyle: {
                    fontSize: 14,
                }
            },
            axisTick: {
                show:false,
            },
            axisLine: {
                show: false,
            },
            inverse: true,
            type: 'category',
            data: [{value: 'Javascript', itemStyle: {color: '#000'},}, 'Python', 'HTML', 'CSS', 'Java', 'node.js', 'Android', 'HTML5', 'JQuery', 'CSS3'],
        },
        series: [{
            data: [25862, 16523, 12751, 12620, 11647, 11199, 9394, 8859, 6011, 5015],
            type: 'bar',
        }],
    };
        // use configuration item and data specified to show chart
myChart.setOption(option);

var myChart = echarts.init(document.getElementById('bar-chart-2'));

    var option = {
        
        color: 'rgba(12,200,140,1)',
        tooltip: {
            trigger: 'item',
            position: 'inside',
            formatter: '{c0}'
        },
        grid: {
            show: false,
            left: "30%",
            right: "-5%",
        },
        xAxis: {
            type: 'value',
            splitLine: {
                show: false,
            },
            boundaryGap: [0, 0.1],
            axisLine: {
                show: false,
            },
            axisTick: {
                show:false,
            },
            axisLabel: {
                show: false,
            },
        },
        yAxis: {
            axisLabel: {
                margin: 10,
                textStyle: {
                    fontSize: 14,
                }
            },
            axisTick: {
                show:false,
            },
            axisLine: {
                show: false,
            },
            inverse: true,
            type: 'category',
            data: [{value: 'Javascript', itemStyle: {color: '#000'},}, 'Python', 'node.js', 'Android', 'CSS', 'HTML', 'HTML5', 'Java', 'JQuery', 'iOS'],
        },
        series: [{
            data: [2995, 2147, 1697, 1293, 1284, 1251, 1090, 1075, 785, 755],
            type: 'bar',
        }],
    };


        // use configuration item and data specified to show chart
myChart.setOption(option);

var myChart = echarts.init(document.getElementById('bar-chart-3'));

    var option = {
        
        color: 'rgba(210,150,230,1)',
        tooltip: {
            trigger: 'item',
            position: 'inside',
            formatter: '{c0}'
        },
        grid: {
            show: false,
            left: "44%",
            right: "-5%",
        },
        xAxis: {
            type: 'value',
            splitLine: {
                show: false,
            },
            boundaryGap: [0, 0.1],
            axisLine: {
                show: false,
            },
            axisTick: {
                show:false,
            },
            axisLabel: {
                show: false,
            },
        },
        yAxis: {
            axisLabel: {
                margin: 10,
                textStyle: {
                    fontSize: 14,
                }
            },
            axisTick: {
                show:false,
            },
            axisLine: {
                show: false,
            },
            inverse: true,
            type: 'category',
            data: [{value: 'Tim Lytle', itemStyle: {color: '#000'},}, 'Joe Nash', 'Minerva Tantoco', 'Gregor Engelmann', 'Remko de Knikker', 'Tim Tregubov', 'Tim Fogarty', 'Sam Machin', 'Ryan Hill', 'Pierre Gauthier'],
        },
        series: [{
            data: [10, 9, 8, 8, 7, 6, 6, 6, 6, 6],
            type: 'bar',
        }],
    };

        // use configuration item and data specified to show chart
myChart.setOption(option);