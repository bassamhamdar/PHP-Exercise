
<?php
$matrix = array (
    "musical" => ["0"=> "Oklahoma", "1" => "The Music Man", "2" => "South Pacific" ],
    "dramas " => ["0" => "Lawrence of Arabia", "1" =>" To Kill a Mockingbird", "2"=> "Casablanca"],
    "mysteries" => ["0" => "The Maltese Falcon", "1" => "Rear Window", "2"=> "North by Northwest"]
);

foreach($matrix as $key => $value){
    echo "$key <br>";
    foreach($value as $number => $data){
        echo"---> $number = $data <br>";
    }
}
?>
<html><br><h2>Descending Order</h2></html>
<?php
krsort($matrix);
foreach($matrix as $key => $value){
    echo "$key <br>";
    foreach($value as $number => $data){
        echo"---> $number = $data <br>";
    }
}

