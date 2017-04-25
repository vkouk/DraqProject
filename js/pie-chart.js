/**
 * Created by Dragoness_crysta on 25/4/2017.
 */

$(function () {

    function genderToString(str){
        var code="";
        switch(str){
            case 'M': code='Male'; break;
            case 'F': code='Female'; break;
        }
        return code;
    }

    $.ajax({


        method: "GET",
        url: "pie-chart1.php",
        success: function (percent_gender) {
            //debugger;
            var percent_gender = JSON.parse(percent_gender);
            var data_list = [];

            $.each(percent_gender, function (key, obj) {
                var item = [];
                item.push(genderToString(obj.gender));
                item.push(Number(obj.percentage));
                data_list.push(item);
            });



            var chart = Highcharts.chart('pie-chart-1', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Male and Female patients percentage'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.0f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.0f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                    name: 'Gender',
                    colorByPoint: true,
                    data: data_list
                }]
            })
        }
    });






});

$(function () {

    function historyToString(str){
        var code="";
        switch(str){
            case 'No': code='No relation with type-2 diabetes'; break;
            case 'Yes-second-relation': code='Second relation with type-2 diabetes'; break;
            case 'Yes-first-relation':code='First relation with type-2 diabetes';break;
        }
        return code;
    }

    $.ajax({


        method: "GET",
        url: "pie-chart2.php",
        success: function (percent_history) {
            debugger;
            var percent_history = JSON.parse(percent_history);
            var history_list = [];

            $.each(percent_history, function (key, obj) {
                var item = [];
                item.push(historyToString(obj.family_history));
                item.push(Number(obj.historyPercentage));
                history_list.push(item);
            });



            var chart = Highcharts.chart('pie-chart-2', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Percentage of patients with type-2 diabetic relatives'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.0f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.0f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                    name: 'Family History',
                    colorByPoint: true,
                    data: history_list
                }]
            })
        }
    });





});
