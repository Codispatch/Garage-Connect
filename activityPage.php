
<style>

::selection { background: #5f74a0; color: #fff; }
::-moz-selection { background: #5f74a0; color: #fff; }
::-webkit-selection { background: #5f74a0; color: #fff; }

br { display: block; line-height: 1.6em; } 

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block; }
ol, ul { list-style: none; }

input, textarea { 
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  outline: none; 
}

table { border-collapse: collapse; border-spacing: 0; }
img { border: 0; max-width: 100%; }


/** page structure **/
#keywords {
  margin: 0 auto;
  font-size: 1.2em;
  margin-bottom: 15px;
  width: 100%;
}
#keywords thead {
  cursor: pointer;
  background: #039BE5;
}
#keywords thead tr th { 
  font-weight: bold;
  padding: 12px 2px 12px 2px;
  border-bottom: 3px solid #0277BD;
}
#keywords thead tr th span { 
  padding-right: 20px;
  background-repeat: no-repeat;
  background-position: 100% 100%;
  color:#fff;
}

#keywords thead tr th.headerSortUp, #keywords thead tr th.headerSortDown {
  background: #acc8dd;
}

#keywords tbody tr { 
  color: #555;
}
#keywords tbody tr td {
  text-align: center;
  padding: 15px 10px;
}
#keywords tbody tr td.lalign {
  text-align: left;
}
</style>
<script src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery.tablesorter.min.js"></script>
<script type="text/javascript">
 $('#keywords').tablesorter();
$('#keywords').click(function(){ 
  $('#cnfmbox').fadeIn("fast").delay(500).fadeOut("fast"); // Confirming things with the Manager
  $('.msg').html("Sorting table records ..."); // Status Message to the Manager
});
$("#btnExport").click(function (e) {
    window.open('data:application/vnd.ms-excel,' + $('#data').text());
    e.preventDefault();
});
</script>
<div id="data">
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr >
        <th><span>Vehicle Name</span></th>
        <th><span>Vehicle Number</span></th>
        <th><span>Progress Statistics</span></th>
        <th><span>Slot Number</span></th>
        <th><span>Garage Assigned</span></th>
		<th><span>Manager Assigned</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="lalign"> Maruthi Swift</td>
        <td>KA 007</td>
        <td>On Going</td>
        <td>GC 7 B</td>
        <td>GC A 876</td>
		<td>Ramesh Vadu</td>
      </tr>
      <tr>
         <td class="lalign"> TATA mini Truck</td>
        <td>KE 247</td>
        <td>Completed</td>
        <td>GC 7 A</td>
        <td>GC A 886</td>
		<td>Suresh Padu</td>
      </tr>
      <tr>
        <td class="lalign"> Renault Duster</td>
        <td>TN 127</td>
        <td>Completed</td>
        <td>GC 7 B</td>
        <td>GC A 886</td>
		<td>Ganesh Fadu</td>
      </tr>
      <tr>
        <td class="lalign"> Bajaj Pulsar</td>
        <td>JA 667</td>
        <td>On Going</td>
        <td>GC 7 A</td>
        <td>GC D 776</td>
		<td>Vignesh Ladu</td>
      </tr>
      <tr>
        <td class="lalign"> Honda gixxer</td>
        <td>KA 337</td>
        <td>On Going</td>
        <td>GC 7 B</td>
        <td>GC A 776</td>
		<td>Mahesh Wadu</td>
      </tr>
      <tr>
        <td class="lalign"> Suzukhi Verna</td>
        <td>UP 117</td>
        <td>Not Started</td>
        <td>GC 7 C</td>
        <td>GC C 976</td>
		<td>Harish Yadu</td>
      </tr>
	   <tr>
         <td class="lalign">Cayman porsche</td>
        <td> MU 247</td>
        <td>Not Started</td>
        <td>GC 7 D</td>
        <td>GC B 186</td>
		<td>Hithesh Padu</td>
      </tr>
    </tbody>
  </table>
  </div>
  <input type="button" id="btnExport" value=" Export Table data into Excel " />