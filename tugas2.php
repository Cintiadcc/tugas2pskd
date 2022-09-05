<?php
function enkripsi(){
    $input=$_POST["input"];

    $key = array(
        '!' => 'a', '@' => 'b', '+' => 'c', '#' => 'd', '_' => 'e',
        '$' => 'f', '%' => 'g', '^' => 'h', '=' => 'i', '*' => 'j',
        'A' => 'k', 'B' => 'l', 'C' => 'm', 'D' => 'n', 'E' => 'o' ,
        'R' => 'p', 'S' => 'q', 'T' => 'r', 'U' => 's', 'V' => 't',
        '(' => 'u', ')' => 'v', '{' => 'w', ',' => 'x', '`' => 'y', '"' => 'z',
        'F' => '1', 'G' => '2', 'H' => '3', 'I' => '4', 'J' => '5',
        'K' => '6', 'L' => '7', 'M' => '8', 'N' => '9', 'O' => '0'
    );

    // $input = strtolower($input);

    $enkripsi = str_replace(array_keys($key), $key, $input);

    echo "kata yang akan di enkripsi adalah = " , $input;

    echo "<br><br>";
    echo "hasil deskripsi adalah = " , $enkripsi;

};
?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
        {
            enkripsi();
        }
?>