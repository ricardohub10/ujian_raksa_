<?php
$i = 1;
foreach ($_POST['item'] as $value)
{
    echo $value;
    // jalankan query "UPDATE namatable SET urutan = $i WHERE menu = $value";
    $i++;
}
?>