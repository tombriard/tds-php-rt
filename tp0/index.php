<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<a href="?i=5">Hello en php 5 fois</a><br>
<a href="?i=50">Hello en php 50 fois</a><br>
<a href="?i=500">Hello en php 500 fois</a><br>
<form>
    <label for="i">Vous pouvez saisir $i</label>
    <input type="number" max="50" name="i" id="i">
</form>
    
<?php
    $i=0;
    $max=0;
    if(isset($_GET["i"]))
        $max=max(50,$_GET["i"]);
while($i<$max){
    echo "<span style='font-size:{$i}pt'>Hello en PHP !";
    echo " - $i<br>";
    $i++;
}

?>
</body>
</html>