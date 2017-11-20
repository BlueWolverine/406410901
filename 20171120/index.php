<?php
$data=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)   
);
 echo '<table border="4">';
 echo '<tr font-weight="bold">';
 echo '<th>Name</th>';
 echo '<th >Stock</th>';
 echo '<th>Sold</th>';
 echo '</tr>';
foreach($data as $sector=>$table) {
    echo '<tr>';
    foreach($table as $row) {
        echo '<td>'.$row.'</td>';
    }
    echo '</tr>';
}
 echo '</table>';
?>

<?php
$data=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)   
);
echo '<table border="4">';
echo '<tr font-weight="bold">';
echo '<th>Name</th>';
echo '<th >Stock</th>';
echo '<th>Sold</th>';
echo '</tr>';
for($i=0; $i<count($data); $i++) {
    echo '<tr>';
    for($j=0; $j<count($data[$i]); $j++) {
        echo '<td>'.$data[$i][$j].'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>

<?php
$data=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)   
);
function makeTable($x) {
    return '<td>'.$x.'</td>';
}
for($i = 0; $i<count($data); $i++) {
    $array2[$i] = array_map("makeTable", $data[$i]);
}
echo '<table border="4">';
echo '<tr font-weight="bold">';
echo '<th>Name</th>';
echo '<th >Stock</th>';
echo '<th>Sold</th>';
echo '</tr>';
for($i = 0; $i<count($data); $i++) {
    echo '<tr>';
    echo join(" ", $array2[$i]);
    echo '</tr>';
}
echo '</table>';
?>
