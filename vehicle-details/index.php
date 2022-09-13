<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>	
	<div class="col-md-3"></div>
	<div class="col-md-6 well">		
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="form-group">
				
				<?php 
				//	if(ISSET($_POST['generate'])){
				//		if($_POST['code'] != ""){	
				$qrcode_msg="DHAKA-METRO-BA-11-4138%0A";
                $qrcode_msg.="NARAYANGONJ VIA LINK ROAD - DHAKA - (SAYDABAD)%0A";
                $qrcode_msg.="05-01-2022%0A";
                $qrcode_msg.="https://acquaintbd.xyz/brtangong/checker.php?code=ba114138";
				?>
					<center><img src="generate.php?code=<?php echo $qrcode_msg;?>" alt=""></center>
					<p style="text-align:center;"><?php 
					$filename="DHAKA-METRO-BA-11-4138";
					echo $filename.".png";?></p>
				<?php
					//	}
				//	}
				?>
			</div>
		</div>
	</div>
</body>
</html