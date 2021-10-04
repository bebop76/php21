<!DOCTYPE html>
<html lang="it">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<a class="link" href="index.php?col=red" value="red">Red</a>
<a class="link" href="index.php?col=gre" value="gre">Green</a>
<a class="link" href="index.php?col=yel" value="yel">Yellow</a>
<?php
		if (isset($_GET['col'])) {
			$color = $_GET['col'];
		}else{
			$color = "red";
		}
  ?>
  <div class="toChange">
  Color is changing
  </div>
  <?php echo $color ?>
  <script>
		
	$(document).ready(function(){
		var jcolor = '<?php echo $color ?>';
		//$(this).attr('value');
		
	console.log(jcolor);
		
		if (jcolor == "red") {
			$(".toChange").css({"color": "red"});
				
		}
		if (jcolor == "gre") {
			$(".toChange").css({"color": "green"});
				
		}
		if (jcolor == "yel") {
			$(".toChange").css({"color": "yellow"});
				
		}
		
		
	});
	
	</script>
 </body>
 </html>