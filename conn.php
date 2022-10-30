<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <table class="card reggae">
            <tr>
                <td>product id</td>
                <td>product name</td>
                <td>Price</td>
                <td>quantity</td>
            </tr>
<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'songs');
if (!$conn){
    echo 'connection error '. mysqli_connect_error();
}else{
    echo 'connect successfully!';
}
// $num = $_SESSION['key'];
if (isset($_POST)){
$num = $_SESSION['key'] + 1;
$sql = "SELECT * FROM bread WHERE id = '$num'";
$result = mysqli_query($conn, $sql);
$bread = mysqli_fetch_all($result, MYSQLI_ASSOC);

$_SESSION["cart"] = array();
foreach ($bread as $array) {
    $_SESSION["cart"] = array_merge($_SESSION['cart'], $bread);
}
$array = array();
$cart = array_merge($array, $bread);
print_r($_SESSION["cart"]);

// while ($reggae = mysqli_fetch_array($result)){
//     echo $reggae['song_id']. "\n";
// };
// print_r($reggae);
// new $bread() = $bread;
// foreach ($cart as $bread){
    foreach ($bread as $val){
        //     echo $name. " is " .$value. "\n"; 
            echo '<tr><td>' . $val['id']. '</td><td>' . $val['name'] . '</td><td>' . $val['price'] . '</td><td>' . count($bread) . '</td><td><input type="submit" name="remove" value="-"></td><td><input type="submit" name="add" value="+"></td></tr>';
            echo "<br>";
            $_SESSION['product'] = $bread;
    }}
// }
// foreach ($bread as $val){
//     //     echo $name. " is " .$value. "\n"; 
//         echo '<tr><td>' . $val['id']. '</td><td>' . $val['name'] . '</td><td>' . $val['price'] . '</td><td>' . count($bread) . '</td><td><input type="submit" name="remove" value="-"></td><td><input type="submit" name="add" value="+"></td></tr>';
//         echo "<br>";
//         $_SESSION['product'] = $bread;
// }}

?>
</table>
 <?php
//  mysqli_free_result($result);
//  mysqli_close($conn);
?>    
</body>
</html>
