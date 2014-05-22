<html>
<body>

<?php
$ip=$_POST["ip"];

$secondoctet=substr($ip, 4, 2);
$thirdoctet=substr($ip, 7, 3);

/* echo $secondoctet; */

switch ($secondoctet) {
  case "22":
  	switch ($thirdoctet) {
  		case "100":
  			echo "You are in IDFA of B100";
  			break;
  		case "101":
  			echo "You are in IDFA of B100";
  			break;
  		case "104":
  			echo "You are in IDFB of B100";
  			break;
  		case "105":
  			echo "You are in IDFB of B100";
  			break;
  		case "108":
  			echo "You are in IDFC of B100";
  			break;
  		case "109":
  			echo "You are in IDFC of B100";
  			break;
  		case "112":
  			echo "You are in IDFD of B100";
  			break;
  		case "113":
  			echo "You are in IDFD of B100";
  			break;
  		case "116":
  			echo "You are in IDFE of B100";
  			break;
  		case "117":
  			echo "You are in IDFE of B100";
  			break;
  		default:
  			echo "You are somewhere in B100";
  	}
    break;
  case "20":
  	switch ($thirdoctet) {
  		case "190":
  			echo "You could be anywhere on wireless!";
  			break;
  		case "191":
  			echo "You could also be anywhere on wireless!";
  			break;
  		default: switch ($thirdoctet) {
  			case "100":
  				echo "You are in IDFA of HQ";
  				break;
  			case "101":
  				echo "You are in IDFA of HQ";
  				break;
  			case "104":
  				echo "You are in IDFB of HQ";
  				break;
  			case "105":
  				echo "You are in IDFB of HQ";
  				break;
  			case "108":
  				echo "You are in IDFC of HQ";
  				break;
  			case "109":
  				echo "You are in IDFC of HQ";
  				break;
  			case "112":
  				echo "You are in IDFD of HQ";
  				break;
  			case "113":
  				echo "You are in IDFD of HQ";
  				break;
  			default:
  				echo "You are somewhere in HQ";
  		} ;
  	} ;
  /* default:
  	echo "You are a stranger in a strange land"; */
}


?>
</body>
</html>
