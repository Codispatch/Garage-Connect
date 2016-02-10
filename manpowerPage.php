<?PHP
require_once("session.php");
if(!checkSession())
{
    RedirectTo("http://localhost/xampp/ProjectX/SigninPage.php");
    exit;
}	
?>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}
#leftperformance {
  overflow:auto; /* This will add a scroll when required */
  width:60%;
  float:left;
  height: 100%
	float:left;	
}
#rightperformance {
  overflow:auto; /* This will add a scroll when required */
  width:40%;
  float:left;
  height: 100%
}
</style>
<script type="text/javascript" src="js/Chart.min.js"></script>
<div id="performance">
<section id="leftperformance">
<canvas id="canvasleft" height="500" width="650" ></canvas>
</section>

<section id="rightperformance" style="">
<canvas id="canvasright" height="230" width="300"></canvas>
<table style="width:100%,margin-top:2%">
  <tr>
    <th>Name</th>
    <th>Working</th>
    <th>Assigned</th>		
    <th>Not Assigned</th>
	<th>Idle</th>
  </tr>
  <tr>
    <td>Kane</td>
	<td>Yes</td>
    <td>Yes</td>		
    <td>-</td>
	<td>-</td>
  </tr>
  <tr>
    <td>Smith</td>
	<td>Yes</td>
    <td>Yes</td>		
    <td>-</td>
	<td>-</td>
  </tr>
  <tr>
    <td>Jill</td>
	<td>-</td>
    <td>-</td>		
    <td>Yes</td>
	<td>-</td>
  </tr>
  <tr>
    <td>John</td>
	<td>-</td>	
    <td>-</td>		
    <td>-</td>
	<td>Yes</td>
  </tr>
</table>
</section>
</div>
<br style="clear:both;"/>
	<script>
		var LineChart = {
			labels : ["January", "February", "March", "April", "May", "June", "July"],
			datasets : [
				{
					fillColor : "#00E676",
					strokeColor : "#00C853",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
					data: [65, 59,46, 40, 56, 55, 40]
				},
				{
					fillColor : "rgba(255,235,59,0.85)",
					strokeColor : "rgba(253, 216, 53,.95)",
					pointColor : "rgba(173,173,173,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
					data: [28, 48, 40, 62, 86, 35, 60]
				}
			]
			
		}
  var DoughnutChart = [{
    value: 40,
    color: "#F44336",
}, {
    value: 42,
    color: "#FFEB3B"
}, 
{
    value: 10,
    color: "#00C853"
},
{
    value: 5,
    color: "#795548"
}];	
	var myLineChart = new Chart(document.getElementById("canvasleft").getContext("2d")).Line(LineChart, {scaleFontSize : 13, 	scaleFontColor : "#ffa45e"});
	var myDoughnutChart = new Chart(document.getElementById("canvasright").getContext("2d")).Doughnut(DoughnutChart);

	</script>

