<style type="text/css">
/* The CSS */
#sidebar {
width: 0px;
}
#button, #button-remote {
display: none;
    color: #6e6e6e;
    font: bold 12px Helvetica, Arial, sans-serif;
    text-decoration: none;
    padding: 7px 12px;
    position: relative;
    text-shadow: 0 1px 0 #fff;
    -webkit-transition: border-color .218s;
    -moz-transition: border .218s;
    -o-transition: border-color .218s;
    transition: border-color .218s;
    background: #f3f3f3;
    background: -webkit-gradient(linear,0% 40%,0% 70%,from(#F5F5F5),to(#F1F1F1));
    background: -moz-linear-gradient(linear,0% 40%,0% 70%,from(#F5F5F5),to(#F1F1F1));
    border: solid 1px #dcdcdc;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    margin-right: 10px;
}

#button:hover {
	color: #333;
    border-color: #999;
    -moz-box-shadow: 0 2px 0 rgba(0, 0, 0, 0.2); 
	-webkit-box-shadow:0 2px 5px rgba(0, 0, 0, 0.2);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
	
}
select {
  padding: 10px;
  margin: 5px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
  -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
  box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
  background: #fff;
  color: #888;
  border: none;
  outline: none;
  display: inline-block;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  cursor: pointer;
}
@media screen and (-webkit-min-device-pixel-ratio:0) {
    select {padding-right:18px}
}

label {position:relative}
label:after {
    content:'<>';
    font:11px "Consolas", monospace;
    color:#aaa;
    -webkit-transform:rotate(90deg);
    -moz-transform:rotate(90deg);
    -ms-transform:rotate(90deg);
    transform:rotate(90deg);
    right:8px; top:2px;
    padding:0 0 2px;
    border-bottom:1px solid #ddd;
    position:absolute;
    pointer-events:none;
}
label:before {
    content:'';
    right:6px; top:0px;
    width:20px; height:20px;
    background:#f8f8f8;
    position:absolute;
    pointer-events:none;
    display:block;
}
</style>

<div class="upPage">
<form>
<select id="vehno" name="vehno">
<option value=""> Select Car Number</option>
<option value="KA876">KA876</option>
<option value="TN133">TN133</option>
<option value="KL324">KL324</option>
</select>
<select id="job" name="job">
<option value="">--</option>
<option value="engine-oil" class="KA876">Engine Oil</option>
<option value="tyre-change" class="KA876">change Tyre</option>
<option value="seat-cover" class="KA876">Seat Cover</option>
<option value="steering" class="KA876">Steering</option>
<option value="Seat-belt" class="KA876">Seat Belt</option>

<option value="engine-oil" class="TN133">Engine Oil</option>
<option value="tyre-change" class="TN133">change Tyre</option>
<option value="seat-cover" class="TN133">Seat Cover</option>
<option value="steering" class="TN133">Steering</option>
<option value="Seat-belt" class="TN133">Seat Belt</option>

<option value="engine-oil" class="KL324">Engine Oil</option>
<option value="tyre-change" class="KL324">change Tyre</option>
<option value="seat-cover" class="KL324">Seat Cover</option>
<option value="steering" class="KL324">Steering</option>
<option value="Seat-belt" class="KL324">Seat Belt</option>

</select>
<select id="status" name="status">
<option value="">--</option>
<option value="On Going"   class="KA876 engine-oil ">On Going</option>
<option value="Not Started"   class="KA876 tyre-change seat-cover ">Not Started</option>
<option value="Completed"   class="KA876 steering Seat-belt">Completed</option>

<option value="On Going"   class="TN133 steering Seat-belt">On Going</option>
<option value="Not Started"   class="TN133 engine-oil ">Not Started</option>
<option value="Completed"   class="TN133 tyre-change seat-cover">Completed</option>

<option value="On Going"   class="KL324 tyre-change seat-cover ">On Going</option>
<option value="Not Started"   class="KL324 steering Seat-belt">Not Started</option>
<option value="Completed"   class="KL324 engine-oil">Completed</option>

</select>
<button id="button" type="button" >Update and Save your Settings</button>
</form>
</div>


<script src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<script src="jquery.chained.js?v=0.9.4" type="text/javascript" charset="utf-8"></script> 
<script type="text/javascript">
  $(function() {
    $("#job").chained("#vehno");
    $("#status").chained("#job");
    
    /* Show Button after all previous values are selected*/
    $("#status").bind("change", function(event) {
        if ("" != $("option:selected", this).val() && "" != $("option:selected", $("#job")).val()) {
            $("#button").fadeIn();
        } else {
            $("#button").hide();          
        }
    }); 
	$("#button").click(function() {
	$('#cnfmbox').fadeIn("fast").delay(2000).fadeOut("fast"); // Confirming things with the Manager
	$('.msg').html("Your Settings has been Successfully Saved ... "); // Status Message to the Manager
	});
  });
  </script>