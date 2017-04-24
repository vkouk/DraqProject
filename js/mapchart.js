/**
 * Created by Dragoness_crysta on 24/4/2017.
 */


$(function () {
    var data = [
        ['gr-as', 0],
        ['gr-ii', 1],
        ['gr-at', 2],
        ['gr-pp', 3],
        ['gr-ts', 4],
        ['gr-an', 5],
        ['gr-gc', 6],
        ['gr-cr', 7],
        ['gr-mc', 8],
        ['gr-ma', 9],
        ['gr-mt', 10],
        ['gr-gw', 11],
        ['gr-mw', 12],
        ['gr-ep', 13]
    ];


    var chart = new Highcharts.Map('map-chart', {
        chart: {
            map: 'countries/gr/gr-all',
            animation: true,
            backgroundColor: 'transparent',
            borderColor: '#335cad',
            borderWidth: 1,

        },


        title: {
            text: 'Diabetes Risk Assessment Map'
        },

        subtitle: {
            text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/gr/gr-all.js">Greece</a>'

        },

        mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'bottom'
            }
        },


        legend: {
            symbolWidth: 400
        },

        colorAxis: {
            description: 'Diabetes Risk',
            min: 1,
            max: 5,
            stops: [
                [0, '#00b202'],
                [0.25, '#faff0a'],
                [0.50, '#ff9d09'],
                [0.75, '#ff5000'],
                [1, '#ff0808']
            ],

            labels: {
                style: {
                    'fontSize': '15px'
                },
                step: 2
            },

        },

        series: [{
            data: data,
            name: 'Region',
            states: {
                hover: {
                    color: '#da2b25'
                }
            },
            dataLabels: {
                enabled: true,
                format: '{point.properties.alt-name}'
            }
        }],
    });

});