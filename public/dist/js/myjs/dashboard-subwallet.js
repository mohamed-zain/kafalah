/**
 * Created by Mohamed-Zain on 5/23/2019.
 */
/*Dashboard Init*/

"use strict";

/*****Ready function start*****/

$(document).ready(function(){
    /*****get wallet data*****/
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var data2 = 0;
    var data3 = 0;
    $.ajax({
        type: 'POST',
        url : "http://version2.archi2030.com/LoansListsdata",
        data :  { walletid: 1 },
        //dataType: 'json',
        cache:false,

        success  : function(data) {
           console.log(data);
            var data1 = data.totalPrice;
        },
        error: function(xhr, textStatus, thrownError){
             console.log(thrownError);
        }

    });
    /*****get wallet data*****/


    $('#statement').DataTable({
        "bFilter": false,
        "bLengthChange": false,
        "bPaginate": false,
        "bInfo": false,
    });

    if( $('#chart_6').length > 0 ){
        var ctx6 = document.getElementById("chart_6").getContext("2d");
        var data6 = {
            labels: [
                "رصيد المحفظة",
                "المبالغ المحصلة",
                "المبالغ المصروفة"
            ],
            datasets: [
                {
                    data: [data1,22222,111111],
                    backgroundColor: [
                        "rgba(240,197,65,.6)",
                        "rgba(46,205,153,.6)",
                        "rgba(78,157,230,.6)",
                    ],
                    hoverBackgroundColor: [
                        "rgba(240,197,65,.6)",
                        "rgba(46,205,153,.6)",
                        "rgba(78,157,230,.6)",
                    ]
                }]
        };

        var doughnutChart  = new Chart(ctx6,{
            type: 'doughnut',
            data: data6,
            options: {
                animation: {
                    duration:	3000
                },
                responsive: true,
                maintainAspectRatio:false,
                legend: {
                    display:false
                },
                tooltip: {
                    backgroundColor:'rgba(33,33,33,1)',
                    cornerRadius:0,
                    footerFontFamily:"'Poppins'"
                },
                elements: {
                    arc: {
                        borderWidth: 0
                    }
                }
            }
        });
    }
    if($('#area_chart').length > 0) {
        var data=[{
            period: 'Son',
            iphone: 10,
            ipad: 80,
            itouch: 20
        }, {
            period: 'Mon',
            iphone: 130,
            ipad: 100,
            itouch: 80
        }, {
            period: 'Tue',
            iphone: 80,
            ipad: 30,
            itouch: 70
        }, {
            period: 'Wed',
            iphone: 70,
            ipad: 200,
            itouch: 140
        }, {
            period: 'Thu',
            iphone: 180,
            ipad: 50,
            itouch: 140
        }, {
            period: 'Fri',
            iphone: 105,
            ipad: 170,
            itouch: 80
        },
            {
                period: 'Sat',
                iphone: 250,
                ipad: 150,
                itouch: 200
            }];
        var dataNew = [{
            period: 'Jan',
            iphone: 10,
            ipad: 60,
            itouch: 20
        },
            {
                period: 'Feb',
                iphone: 110,
                ipad: 100,
                itouch: 80
            },
            {
                period: 'March',
                iphone: 120,
                ipad: 100,
                itouch: 80
            },
            {
                period: 'April',
                iphone: 110,
                ipad: 100,
                itouch: 80
            },
            {
                period: 'May',
                iphone: 170,
                ipad: 100,
                itouch: 80
            },
            {
                period: 'June',
                iphone: 120,
                ipad: 150,
                itouch: 80
            },
            {
                period: 'July',
                iphone: 120,
                ipad: 150,
                itouch: 80
            },
            {
                period: 'Aug',
                iphone: 190,
                ipad: 120,
                itouch: 80
            },
            {
                period: 'Sep',
                iphone: 110,
                ipad: 120,
                itouch: 80
            },
            {
                period: 'Oct',
                iphone: 10,
                ipad: 170,
                itouch: 10
            },
            {
                period: 'Nov',
                iphone: 10,
                ipad: 470,
                itouch: 10
            },
            {
                period: 'Dec',
                iphone: 30,
                ipad: 170,
                itouch: 10
            }
        ];

        var lineChart = Morris.Area({
            element: 'area_chart',
            data: data ,
            xkey: 'period',
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['iphone', 'ipad', 'itouch'],
            pointSize: 0,
            lineWidth:0,
            fillOpacity: 0.6,
            pointStrokeColors:['#2ecd99', '#4e9de6', '#f0c541'],
            behaveLikeLine: true,
            grid: false,
            hideHover: 'auto',
            lineColors: ['#2ecd99', '#4e9de6', '#f0c541'],
            resize: true,
            redraw: true,
            smooth: true,
            gridTextColor:'#878787',
            gridTextFamily:"Poppins",
            parseTime: false
        });
    }

    /* Switchery Init*/
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    $('#morris_switch').each(function() {
        new Switchery($(this)[0], $(this).data());
    });
    var swichMorris = function() {
        if($("#morris_switch").is(":checked")) {
            lineChart.setData(data);
            lineChart.redraw();
        } else {
            lineChart.setData(dataNew);
            lineChart.redraw();
        }
    }
    swichMorris();
    $(document).on('change', '#morris_switch', function () {
        swichMorris();
    });

});
/*****Ready function end*****/

/*****Load function start*****/
$(window).load(function(){
    window.setTimeout(function(){
        $.toast({
            heading: 'لوحة تحكم المحافظ الفرعية',
            text: 'كل الاجراءات الخاصة بالمحفظة الفرعية تتم من هنا , بالاضافة لعرض الاحصاءات',
            position: 'top-right',
            loaderBg:'#f0c541',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });
    }, 3000);
});
/*****Load function* end*****/

var sparklineLogin = function() {
    if( $('#sparkline_1').length > 0 ){
        $("#sparkline_1").sparkline([2,4,4,6,8,5,6,4,8,6,6,2 ], {
            type: 'line',
            width: '100%',
            height: '35',
            lineColor: '#2ecd99',
            fillColor: 'rgba(46,205,153,.6)',
            minSpotColor: '#2ecd99',
            maxSpotColor: '#2ecd99',
            spotColor: '#2ecd99',
            highlightLineColor: 'rgba(0, 0, 0, 0.6)',
            highlightSpotColor: '#2ecd99'
        });
    }
    if( $('#sparkline_2').length > 0 ){
        $("#sparkline_2").sparkline([0,2,8,6,8], {
            type: 'line',
            width: '100%',
            height: '35',
            lineColor: '#2ecd99',
            fillColor: 'rgba(46,205,153,.6)',
            minSpotColor: '#2ecd99',
            maxSpotColor: '#2ecd99',
            spotColor: '#2ecd99',
            highlightLineColor: 'rgba(0, 0, 0, 0.6)',
            highlightSpotColor: '#2ecd99'
        });
    }
    if( $('#sparkline_3').length > 0 ){
        $("#sparkline_3").sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40, 45, 56, 7, 10], {
            type: 'line',
            width: '100%',
            height: '35',
            lineColor: '#2ecd99',
            fillColor: 'rgba(46,205,153,.6)',
            minSpotColor: '#2ecd99',
            maxSpotColor: '#2ecd99',
            spotColor: '#2ecd99',
            highlightLineColor: 'rgba(0, 0, 0, 0.6)',
            highlightSpotColor: '#2ecd99'
        });
    }
    if( $('#sparkline_4').length > 0 ){
        $("#sparkline_4").sparkline([0,2,8,6,8,5,6,4,8,6,6,2 ], {
            type: 'bar',
            width: '100%',
            height: '50',
            barWidth: '5',
            barSpacing: '5',
            barColor: '#2ecd99',
            highlightSpotColor: '#2ecd99'
        });
    }
}
var sparkResize;
$(window).resize(function(e) {
    clearTimeout(sparkResize);
    sparkResize = setTimeout(sparklineLogin, 200);
});
sparklineLogin();