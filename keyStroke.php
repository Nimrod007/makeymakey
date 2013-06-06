<?php
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<script>
document.addEventListener('keydown', function(event) {

        var key =  String.fromCharCode(event.keyCode);
        var fieldNameElement = document.getElementById('key');
        fieldNameElement.innerHTML = key;

}, true);
</script>
</head>
<body>
<div id="key">press a key</div>
</body>
</html>
