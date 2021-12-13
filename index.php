<?php
function factoryel($x) {
    $i = 1;
    $z = 1;
    while ($i <= $x) {
        $z = $z * ++$i;
    }
    echo $z;
}
?>




<?php
factoryel(4);
?>
<hr>
<?php
factoryel(10);
?>


