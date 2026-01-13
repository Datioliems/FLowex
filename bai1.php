<?php 
$so = $_GET["so"];
$sum = 1;
for ($i = 1; $i <= $so; $i++) {
$sum *= $i;
};
echo "$sum";
?>
<?php 

?>