<?php
$m1 = array("English" => "55", "Hindi" => "60", "Maths" => "70", "Marathi" => "85");
echo "<br><br><b>Elements of an array along with their keys :</b>";
echo "<br> <br> Your score ".$m1['English']. " in English";
echo "<br> <br> Your score ".$m1["Hindi"]. " in Hindi";
echo "<br> <br> Your score ".$m1['Maths']." in Maths";
echo "<br> <br> Your score ".$m1['Marathi']. " in Marathi";
echo "<br><br><b>Size of an array is :</b>".count($m1);
array_splice($m1,0,1);
echo "<br><br><b>After deleting array is :</b>";
foreach($m1 as $x => $x_value)
echo "<br><br>Key=". $x.", Value=". $x_value;
echo "<br>";
?>
