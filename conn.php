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
                <td>Song id</td>
                <td>Song name</td>
                <td>Artist</td>
                <td>Rating</td>
            </tr>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'songs');
if (!$conn){
    echo 'connection error '. mysqli_connect_error();
}else{
    echo 'connect successfully!';
}
$sql = 'SELECT * FROM reggae';
$result = mysqli_query($conn, $sql);
$reggae = mysqli_fetch_all($result, MYSQLI_ASSOC);
// while ($reggae = mysqli_fetch_array($result)){
//     echo $reggae['song_id']. "\n";
// };

// print_r($reggae);
foreach ($reggae as $val){
    // foreach ($val as $name => $value){
    //     echo $name. " is " .$value. "\n"; 
            echo '<tr><td>' . $val['song_id']. '</td><td>' . $val['song_name'] . '</td><td>' . $val['artist'] . '</td><td>' . $val['rating'] . '</td><td><input type="submit" name="remove" value="-"></td><td><input type="submit" name="add" value="+"></td></tr>';
            echo "\n";
    }
// }
mysqli_free_result($result);
mysqli_close($conn);
?>
</table>
    
</table>
</body>
</html>
