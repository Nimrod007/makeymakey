<?php
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<script>
document.addEventListener('keydown', function(event) {
	var keyStroke=event.keyCode;
	switch (keyStroke)
	{
	case 65:
	  x="ש"; //A
	  break;
	case 66: //B
	  x="נ";
	  break;
	case 67: //C
	  x="ב";
	  break;
	case 68: //D
	  x="ג";
	  break;
	case 69: //E
	  x="ק";
	  break;
	case 70: //F
	  x="כ";
	  break;
	case 71:  //G
	  x="ע";
	  break;
	case 72: //H
	  x="י";
	  break;
	case 73: //I
	  x="ן";
	  break;
	case 74: //J
	  x="ח";
	  break;
	case 75: //K
	  x="ל";
	  break;
	case 76: //L
	  x="ך";
	  break;
	case 77: //M
	  x="צ";
	  break;
	case 78: //N
	  x="מ";
	  break;
	case 79: //O
	  x="ם"; 
	  break;
	case 80: //P
	  x="פ";
	  break;
	case 81: //Q
	  x="/";
	  break;
	case 82: //R
	  x="ר";
	  break;
	case 83: //S
	  x="ד";
	  break;
	case 84: //T
	  x="א";
	  break;
	case 85: //U
	  x="ו";
	  break;
	case 86: //V
	  x="ה";
	  break;
	case 87: //W
	  x="'";
	  break;
	case 88: //X
	  x="ס";
	  break;
	case 89: //Y
	  x="ט";
	  break;
	case 90: //Z
	  x="ז";
	  break;
	case 62: //>
	  x="ץ";
	  break;
	case 60: //<
	  x="ת";
	  break;
	case 59: //;
	  x="ף";
	  break;
	} 
        var fieldNameElement = document.getElementById('key');
        fieldNameElement.innerHTML = x;

}, true);
</script>
</head>
<body>
<div id="key">press a key</div>
</body>
</html>
