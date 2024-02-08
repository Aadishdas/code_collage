<?php
if (isset($_POST['submit'])) {
    $str = $_POST['str'];
    $vowels = array('a', 'e', 'i', 'o', 'u');
    $len = strlen($str);
    $num = 0;
    for ($i = 0; $i < $len; $i++) {
        if (in_array(strtolower($str[$i]), $vowels)) { // Convert character to lowercase for comparison
            $num++;
        }
    }
    echo "Number of vowels: $num";
}
?>
