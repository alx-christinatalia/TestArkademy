<html>
<head>
    <title>Soal5</title>
</head>
    <form action="" method="get">
        <input type="input" name="coba"></br>
        <input type="submit" name="cobalah">
    </form>
    
<?php
    if(isset($_GET['cobalah'])) {
        echo count_handshake($_GET['coba']);
    }
    function count_handshake($a) {
        $b = $a;
        $r = 0;
        for ($i=1; $i <= $a-1; $i++) { 
            $r = $r + $i;
        }
        return $r;
    }