<?php
function enkripsi(){
    $input=$_POST["input"];

    $key = array(
        'a' => '!', 'b' => '@', 'c' => '+', 'd' => '#', 'e' => '_',
        'f' => '$', 'g' => '%', 'h' => '^', 'i' => '=', 'j' => '*',
        'k' => 'A', 'l' => 'B', 'm' => 'C', 'n' => 'D', 'o' => 'E' ,
        'p' => 'R', 'q' => 'S', 'r' => 'T', 's' => 'U', 't' => 'V',
        'u' => '(', 'v' => ')', 'w' => '{', 'x' => ',', 'y' => '`', 'z' => '"',
        '1' => 'F', '2' => 'G', '3' => 'H', '4' => 'I', '5' => 'J',
        '6' => 'K', '7' => 'L', '8' => 'M', '9' => 'N', '0' => 'O'
    );

    // $input = strtolower($input);

    $enkripsi = str_replace(array_keys($key), $key, $input);

    echo "kata yang di enkripsi adalah = " , $input;

    echo "<br><br>";
    echo "hasil enkripsi adalah = " , $enkripsi;

};
?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
        {
            enkripsi();
        }
?>