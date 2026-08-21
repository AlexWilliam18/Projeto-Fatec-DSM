<?php
    $num = $_POST['txtnum'];
    for ($i=1; $i <= 10; $i++) {
        $result = $num * $i; 
        echo "<p>$num X $i = $result</p>";
    }
?>