<!DOCTYPE html>
<html>
	<head>
		<title>Take Screenshot : </title>
		<script src="js/jquery.min.js"></script>
	</head>
<body>

<div id="print_div_1">
	<h2>User Table</h2>
	<table width="80%" align="center" border="1"  cellpadding="3" cellspacing="5">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Contact Number</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Bharat Parmar</td>
				<td>bharatparmar383@gmail.com</td>
				<td>+91 9687766553</td>
			</tr>
			<tr>
				<td>Jack Thomas</td>
				<td>jackthomas1122@gmail.com</td>
				<td>+91 12312312312</td>
			</tr>
			<tr>
				<td>Lucy Grill</td>
				<td>lucygrill1122@gmail.com</td>
				<td>+91 12312313212</td>
			</tr>
			<tr>
				<td>Krish Kanes</td>
				<td>krish.kanes@gmail.com</td>
				<td>+91 132123123</td>
			</tr>
		</tbody>
	</table>
</div>
<br>
<button class='save-image' data-print-area='#print_div_1'>Capture User Table</button>
<hr><br>

<div id="print_div_2" style="text-align:center;">
	<img src="img1.jpg" alt="image1">
</div>
<br>
<button class='save-image' data-print-area='#print_div_2'>Capture Image1</button>
<hr><br>

<br>
<button class='save-image' data-print-area='body'>Capture Entire Webpage</button>
<hr><br>

<canvas id="image-canvas" style="display:none;"></canvas>
<script type="text/javascript" src="js/html2canvas/html2canvas.js"></script>
<script type="text/javascript" src="js/html2canvas/jquery.plugin.html2canvas.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	/*BEGIN DOWNLOAD HTML CONTENT AS IMAGE*/
	if($("#image-canvas").length>0) {
		$(".save-image").on('click', function() {
			$("#image-canvas").height($($(this).attr('data-print-area')).height());
			$("#image-canvas").width($($(this).attr('data-print-area')).width());
			$($(this).attr('data-print-area')).html2canvas({
				onrendered: function (canvas) {
	              var formdata = {
	                              image_code:canvas.toDataURL("image/png")
	                            };
	              //console.log(formdata);
	              $.post("saveimage.php", formdata, function(msg) {
	                console.log(msg);
	                window.location.href=msg;
	              });
				}
			});
	    });    
	}		
	/*END DOWNLOAD HTML CONTENT AS IMAGE*/
});
</script>
</body>
</html>

