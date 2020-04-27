<?php
if (isset($_COOKIE["contador"])){

    setcookie("contador",$_COOKIE["contador"]+1,time()+3600);
    echo "<p>Número de recargas: ".$_COOKIE["contador"]."</p>";
}
else{
    setcookie("contador",1,time()+3600);
    echo "<p>Número de recargas: 0</p>";
}
?>