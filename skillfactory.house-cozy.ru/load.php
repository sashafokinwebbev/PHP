<?php
$cod = '<?php include("main.php");  ?>';
echo'<link rel="stylesheet" href="load.css">';
echo "<div class='okno' id='1'><div class='loader' id= '1'></div></div>";
echo '<script>setTimeout(() => {document.getElementById("1").remove();}, 2000);</script>';
?>