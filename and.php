<pre>
    <?php
    $true = TRUE;
    $false = FALSE;

    $a = $true && $true;
    $b = $true && $false;
    $c = $true && $true && $true;

    $d = $true && $false && $false;
    $e = $true && ($true && $false);
    ver_dump($a,$b,$c,$d,$e);
    ?>
</pre>