/**
 * Created by Dragoness_crysta on 24/4/2017.
 */


$(function () {


    function regionCodeFromString(str)
    {
        var code="";
        switch (str) {
            case "Attica": code="gr-at"; break;
            case "Central Greece": code="gr-gc"; break;
            case "Central Macedonia": code="gr-mc"; break;
            case "Crete": code="gr-cr"; break;
            case "Eastern Macedonia and Thrace": code="gr-mt"; break;
            case "Epirus": code="gr-ep"; break;
            case "Ionian Islands": code="gr-ii"; break;
            case "North Aegean Islands": code="gr-an"; break;
            case "Peloponnese": code="gr-pp"; break;
            case "South Aegean Islands": code="gr-as"; break;
            case "Western Greece": code="gr-gw"; break;
            case "Western Macedonia": code="gr-mw"; break;
        }
        return code;
    }

    $.ajax({
        method:"GET",
        url:'fetch-map-risk.php',
        success: function(average){
            debugger;
            var average=JSON.parse(average);
            var data_list=[];

            $.each(average, function(key, obj){

                var list_item =[];
                list_item.push(regionCodeFromString(obj.region));
                list_item.push(obj.riskAvg);
                data_list.push(list_item);
            });



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
                        [0, '#04a100'],
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
                    data: data_list,
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
                }]
            });

        }

    })
});