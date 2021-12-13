<?php
function factoryel($x) {
    $i = 0;
    $z = 0;
    while ($i <= $x) {
        $z = $z * $i;
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


