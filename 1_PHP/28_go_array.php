<?php
$cars = array("BMW", "Audi", "Mercedes", "Porsche");
foreach ($cars as $car) {
echo $car . "<br />";
}
?>

<?php
//либо так:
$cars = array("BMW", "Audi", "Mercedes", "Porsche");
for ($i=0; $i<count($cars); $i++) echo $cars[$i]."<br/>";
?>