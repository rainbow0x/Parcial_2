<?php
include('Class/sumatorias.php');

$n = $_POST['n'];

$ins = new sumar();

if ($n == null) {

}
else
{
    $ins->sumatoria($n);
    header("Location: index.html");
}
?>