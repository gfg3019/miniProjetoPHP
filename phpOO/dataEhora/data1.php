<?php
//echo date('d/m/Y');
/*$ts = strtotime("2001-02-11");
echo date('l, d/m/Y', $ts);*/
//setlocale(LC_ALL, "pt-BR", "pt_BR.utf-8", "portuguese");
//echo strftime("%A %B");
$dt = new DateTime();
$periodo = new DateInterval("P15D");
echo $dt->format("d/m/Y H:i:s");
$dt->add($periodo);
echo "<br>";
echo $dt->format("d/m/Y H:i:s");