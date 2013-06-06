<?php
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<script src="jquery.js"></script>
<script>
var input="";
$(document).unbind('keydown').bind('keydown', function (event) {
	
    var doPrevent = false;
    if (event.keyCode === 8) {
        var d = event.srcElement || event.target;
        if ((d.tagName.toUpperCase() === 'INPUT' && (d.type.toUpperCase() === 'TEXT' || d.type.toUpperCase() === 'PASSWORD')) 
             || d.tagName.toUpperCase() === 'TEXTAREA') {
            doPrevent = d.readOnly || d.disabled;
        }
        else {
            doPrevent = true;
        }
    }

    if (doPrevent) {
    	input = input.slice(0, -1);
        var fieldNameElement = document.getElementById('key');
        fieldNameElement.innerHTML = input;
        event.preventDefault();
    }
});

document.addEventListener('keydown', function(event) {
	var keyStroke=event.keyCode;
	switch (keyStroke)
	{
	case 8: //backspace
		input = input.slice(0, -1);
		  break;
	case 32: //space
	  x=" "; 
	  break;
	case 65: //A
	  x="ש"; 
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
	case 190: //>
	  x="ץ";
	  break;
	case 188: //<
	  x="ת";
	  break;
	case 59: //;
	  x="ף";
	  break;
	default:
	  x="";
	  break;
	} 
	input = input + x;
        var fieldNameElement = document.getElementById('key');
        fieldNameElement.innerHTML = input;
}, true);
</script>
</head>
<body>

<div id="key" style="position:fixed;
  z-index: 100;  
  top:50%;  
  left:50%;  
  margin:-100px 0 0 -100px;  
  width:200px;  
  height:200px; " >press a key</div>
</body>
</html>
