<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/cart.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@400;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <div class="logo">
                <img src="images/e.png" alt=""><h1>Chef</h1>
                <button type='submit' name='submit'><img src="images/grocery-cart.png" alt=""></button>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="cart.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Product</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="d-flex cartcase justify-content-between mb-2">
            <?php
            session_start();
                // echo $_SESSION['bread'][4]['name'];
                // if (isset($_POST['shop'])){
                //     $_SESSION['count'] += 1;
                // }    echo $_SESSION['product'];
                // foreach($item as $_SESSION['selected']){
                //     echo $item;
                // }
                // var_dump($_SESSION['selected']);
                // echo $_SESSION['product'];
                // echo '<br/>';
                // echo count($_SESSION['selected']);
                    // print_r($_SESSION["selected"]);
                    // echo json_encode($_SESSION["selected"]);
                    // echo "<pre>";
                    // print_r($_SESSION["cart"]);
                    // echo "<pre>";

                    ?>
                <form method='POST' action='counter.php'>
                <table class="card bread">
                    <tr>
                        <td>Items</td>
                        <td>Price</td>
                        <td></td>
                        <td></td>
                    </tr>
                
                    <?php
                    $_total = 0;
                if(!empty($_SESSION["cart"])) {
                            foreach ($_SESSION["cart"] as $key => $_val) {
                                $_SESSION['val'] = $_val[1];
                                echo '<tr><td>' . $key . '</td><td>' . $_val[0] . '</td><td>' . $_SESSION['val'] . '</td><td><input type="submit" name="remove" value="-"></td><td><input type="submit" name="add" value="+"></td></tr>';
                                echo "\n";
                                $_total += $_val[0];
                            }
                        }

                // session_destroy();
                    ?>
                    <tr class='card-text'>
                        <td>Total</td>
                        <td><?php echo $_total ?></td>
                </tr>
                </table>
                </form>
                <?php
                    // if ($_SESSION['bread'][0]['quantity'] > $_val[1]){
                        // function add(){
                        //     $_SESSION['val'] += 1;
                        // }
                        // function remove(){
                        //     $_SESSION['val'] -= 1;
                        // }
                    if (isset(($_POST['remove']))){
                        $_SESSION['val'] -= 1;
                        // remove();
                    }elseif (isset(($_POST['add']))){
                        $_SESSION['val'] += 1;}
                        // add();
                    // }else{
                    //     $_SESSION['val'] = $_SESSION['val'];
                    // }
                // }
                // session_destroy();
                ?>
                <div class="car">
                <a href='cart.php'><button type='submit'>Continue shopping</button></a><br>
                <a href='counter.php'><button type='submit'>Checkout</button></a>
                </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src='cart.js'></script>
</body>
</html>
