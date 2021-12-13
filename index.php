<?php
function factoryel($x) {
    $i = 1;
    $z = 1;
    while ($i <= $x) {
        $z = $z * ++$i;
    }
    return $z;
}
?>




<?php
echo factoryel(4);
?>
<hr>
<?php
$g = factoryel(10);

echo $g;

?>


