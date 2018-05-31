$(document).ready(function() {

  img_liquid()

})
//
function img_liquid() {

  $(".imgLiquid.imgLiquidFill").imgLiquid()
  $(".imgLiquid.imgLiquidNoFill").imgLiquid({fill:false})
  $(".imgLiquid.imgLiquidNoFillLeft").imgLiquid({
    fill:false,
    horizontalAlign:"left"
  })
  $(".imgLiquid.imgLiquidNoFillRight").imgLiquid({
    fill:false,
    horizontalAlign:"right"
  })

}

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

  var data = google.visualization.arrayToDataTable([
    ['Distribution', 'Token percent'],
    ['Reservations', 20],
    ['Marketing', 25],
    ['Resources', 15],
    ['Development', 40]
  ]);

  var options = {
    title: '',
    backgroundColor:{
      'fill':'transparent',
      'strokeWidth': '0px'
    },
    chartArea: {
      height:'80%',
      width: '80%',
      backgroundColor: {
        strokeWidth: 0,
        stroke: 'transparent'
      }
    },
    fontSize: '1.5em',
    // legend: {
    //   position: 'none'
    // },
    legend: {
      position: 'bottom',
      textStyle: {
        color: 'white'
      }
    },
    colors: ['#00A36D','#00C49A','#5DFC9F','#78FAB2']
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));

  chart.draw(data, options);
}
