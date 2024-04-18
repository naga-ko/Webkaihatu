AND
<pre>
<?php
$true = TRUE;
$false = FALSE;

$a = $true && $true;
$b = $true && $false;
$c = $true && $true && $true;

$d = $true && $false && $false;
$e = $true && ($true && $false);
var_dump($a,$b,$c,$d,$e);
?>
</pre>
OR
<pre>
<?php
$true = TRUE;
$false = FALSE;

$a = $true || $true;
$b = $true || $false;
$c = $true || $true || $true;
$d = $true || $false || $false;

$e = $true || ($true || $false);
$f = $false || $false;
var_dump($a,$b,$c,$d,$e,$f);
?>
</pre>
NOT
<pre>
<?php
$true = TRUE;
$false = FALSE;

$a = !$true;
$b = !$false;
$c = !$true && !$true;

$d = !($true && $true);

var_dump($a,$b,$c,$d);
?>
</pre>

p74
<pre>
<?php
$true = TRUE;
$false = FALSE;

$a = $true && $true;
$b = $true && $false;
$c = $true || $true;
$d = $true || $false;
$e = !$true;
$f = !$false;
$g = !($true && $false);
$h = !($true && $false) && $true;
var_dump($a,$b,$c,$d,$e,$f,$g,$h);
?>
</pre>