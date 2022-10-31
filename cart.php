<?php
    session_start();
    // $_SESSION["cart"] = array();

    class product {
        public $item;
        function __construct($item){
            $this->item = $item;
        }
        function addbnb(){
            return $this->item;
        }
    }
    $_SESSION['bread'] = [
        [
            'name' => 'white Bread',
            'price' => '1200',
            'quantity' => '10',
            'supply' => '1'
        ],
        [
            'name' => 'Browny Bread',
            'price' => '1500',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'Coconut Bread',
            'price' => '2000',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'Banana Bread',
            'price' => '1800',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
        'name' => 'Bread Cube',
        'price' => '1800',
        'quantity' => '10',
        'supply' => '1'

        ],
        [
        'name' => 'Cheesy Bread',
        'price' => '1800',
        'quantity' => '10',
        'supply' => '1'

        ],
        [
        'name' => 'Chicken Bread',
        'price' => '1800',
        'quantity' => '10',
        'supply' => '1'

        ],
        [
            'name' => 'Sadien Bread',
            'price' => '1200',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'sacarra Bread',
            'price' => '1800',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'Chocolate Bread',
            'price' => '2000',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'Wheat Bread',
            'price' => '800',
            'quantity' => '10',
            'supply' => '1'

            ],
    
        [
            'name' => 'Olive Bread',
            'price' => '1400',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'Pineapple Bread',
            'price' => '1800',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'Rainbow Bread',
            'price' => '2500',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'Apple Bread',
            'price' => '1500',
            'quantity' => '5',
            'supply' => '1'

        ],
        [
            'name' => 'Peanut Bread',
            'price' => '2500',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'Hot Bread',
            'price' => '2000',
            'quantity' => '5',
            'supply' => '1'

        ],
        [
            'name' => 'Vanilla Bread',
            'price' => '1800',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
        'name' => 'Weed Bread',
        'price' => '1800',
        'quantity' => '10',
        'supply' => '1'

        ],
        [
        'name' => 'Bun Bread',
        'price' => '850',
        'quantity' => '10',
        'supply' => '1'
        ],
        [
            'name' => 'Package',
            'price' => '000',
            'quantity' => '-',
            'supply' => '-'
            ]
    
        ];
    // $_SESSION['quantity'] = $_SESSION['bread'][$_key]['quantity'];
    $_SESSION['count'] = 0;
    if (isset($_POST['white']) || isset($_POST['browny']) || isset($_POST['coconut']) || isset($_POST['banana']) || isset($_POST['cube']) || isset($_POST['cheesy']) || isset($_POST['chicken']) || isset($_POST['sadien']) || isset($_POST['sacarra']) || isset($_POST['chocolate']) || isset($_POST['wheat']) || isset($_POST['olive']) || isset($_POST['pineapple']) || isset($_POST['rainbow']) || isset($_POST['apple']) || isset($_POST['peanut']) || isset($_POST['hot']) || isset($_POST['wheat']) || isset($_POST['weed']) || isset($_POST['bun'])){
        increment();
    }
    // if(isset($_POST['white'])){
    //     $_SESSION['key']= 0;// get id of a button in php
    //     // $_SESSION['id'] = $_POST['id'];
    // }elseif(isset($_POST['browny'])){
    //     $_SESSION['key']= 1;
    // }else{
    //     $_SESSION['key']= 2;
    // }
    if(isset($_POST['white'])){
        $_SESSION['key']= 0;// get id of a button in php
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['browny'])){
        $_SESSION['key']= 1;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['coconut'])){
        $_SESSION['key']= 2;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['banana'])){
        $_SESSION['key']= 3;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['cube'])){
        $_SESSION['key']= 4;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['cheesy'])){
        $_SESSION['key']= 5;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['chicken'])){
        $_SESSION['key']= 6;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['sadien'])){
        $_SESSION['key']= 7;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['sacarra'])){
        $_SESSION['key']= 8;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['chocolate'])){
        $_SESSION['key']= 9;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['wheat'])){
        $_SESSION['key']= 10;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['olive'])){
        $_SESSION['key']= 11;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['pineapple'])){
        $_SESSION['key']= 12;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['rainbow'])){
        $_SESSION['key']= 13;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['apple'])){
        $_SESSION['key']= 14;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['peanut'])){
        $_SESSION['key']= 15;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['hot'])){
        $_SESSION['key']= 16;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['vanilla'])){
        $_SESSION['key']= 17;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['weed'])){
        $_SESSION['key']= 18;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }elseif(isset($_POST['bun'])){
        $_SESSION['key']= 19;
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }
    else{
        $_SESSION['key']= '20';
        $_SESSION['product'] =  $_SESSION['bread'][$_SESSION['key']]['name'];
        $_SESSION['productPrice'] =  $_SESSION['bread'][$_SESSION['key']]['price'];
        $_SESSION['qtty'] = $_SESSION['bread'][$_SESSION['key']]['supply'];
    }
    function increment(){
        $_SESSION['count'] += 1;
    }
    // $_SESSION['selected'] = array($_SESSION['product'], $_SESSION['productPrice'], $_SESSION['qtty']);
    $_SESSION['selected'] = array($_SESSION['product'] => array($_SESSION['productPrice'], $_SESSION['qtty']));
    // $_SESSION['selected'] = array($_SESSION['selecteed'] => $_SESSION['qtty']);
    // $_SESSION["cart"] = array();
        //new item selected
    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = $_SESSION['selected'];
    }
 // unset($_SESSION["cart"]);
    // foreach ($_SESSION['selected'] as $array) {
    //     $_SESSION["cart"] = array_merge($_SESSION['cart'], $_SESSION["selected"]);
    //      }
    $_SESSION["cart"] = array_merge($_SESSION['cart'], $_SESSION["selected"]);
    // $_SESSION["cart"] += $_SESSION["selected"];

    // $_SESSION["cart"] = array_push($_SESSION['cart'], $_SESSION["selected"]);

    // $_SESSION["selected"] = array_merge($_SESSION['cart'], $_SESSION["selected"]);


    // if(!empty($_SESSION["bread"])) {
	// 	foreach($_SESSION["bread"] as $bread => $price) {
    //         echo $bread => $price;
    //     }
                // $_SESSION['product'] =  $_SESSION['selected'][$_SESSION['bread'][$_key]['name']];

    // do{
    //     $_SESSION['count'] += 1;
    // }
    // while(isset($_POST['white']));

    // foreach ($_SESSION['bread'] as $bread) {
        // echo "$bread <br>";
    //   }
            // $_SESSION['i'] = 0;
            // do
            // {
            //     echo $_SESSION['bread']$_SESSION['i']."\n";
            //     $i++;
            // }
            // while($_SESSION['i'] < count($_SESSION['bread']));
    if (isset($_POST['submit'])){
        header("location: counter.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    if (isset($_SESSION["mode"])){
        if ($_SESSION["mode"] == "light"){ ?>
        <link rel="stylesheet" href="style/light.css">
        <?php 
        }else {?>
            <link rel="stylesheet" href="style/dark.css">
        <?php 
        }
    }else {?>
    <link rel='stylesheet' href='style/cart.css'>
    <?php 
    }
    ?>
    <link rel="stylesheet" href="style/cart.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <form action="cart.php" method="POST" onsubmit="preventDefault()">
        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <div class="logo">
                    <img src="images/e.png" alt=""><h1>Chef</h1>
                    <button type='submit' name='submit'><img src="images/grocery-cart.png" alt=""></button>
                    <span class="add"><?php echo ((count($_SESSION['cart']))); ?></span>
                </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Product</a>
                </li>
            </ul>
            </div>

            <span class="d-flex">
                <input class="form-control me-3" type="text" placeholder="Search">
                <button class="btn" type="button">Search</button>
            </span>

        </nav>
        <div class="container">
            <div class="d-flex justify-content-between mb-2">
                <div class="card bread">
                    <img class="card-img-top" src="images/bread 3.jfif" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][0]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][0]['price']; ?></p>
                    <input type="submit" class="card-text" name="white" value="Shop with us">
                </div>
                <div class="card bread">
                    <img class="card-img-top" src="images/bread 22.jfif" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][1]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][1]['price']; ?></p>
                    <input type="submit" class="card-text" name="browny" value="Shop with us">
                </div>
                <div class="card bread">
                    <img class="card-img-top" src="images/bread 4.jfif" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][2]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][2]['price']; ?></p>
                    <input type="submit" class="card-text" name="coconut" value="Shop with us">
                </div>
                <div class="card bread">
                    <img class="card-img-top" src="images/bread 1.jfif" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][3]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][3]['price']; ?></p>
                    <input type="submit" class="card-text" name="banana" value="Shop with us">
                </div>
                <div class="card bread">
                    <img class="card-img-top" src="images/Bread cube.jpg" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][4]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][4]['price']; ?></p>
                    <input type="submit" class="card-text" name="cube" value="Shop with us">
                </div>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <div class="card bread">
                    <img class="card-img-top" src="images/cheesy Bread.jfif" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][5]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][5]['price']; ?></p>
                    <input type="submit" class="card-text" name="cheesy" value="Shop with us">
                </div>
                <div class="card bread">
                    <img class="card-img-top" src="images/bread 6.jfif" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][6]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][6]['price']; ?></p>
                    <input type="submit" class="card-text" name="chicken" value="Shop with us">
                </div>
                <div class="card bread">
                    <img class="card-img-top" src="images/bread 16.jfif" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][7]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][7]['price']; ?></p>
                    <input type="submit" class="card-text" name="sadien" value="Shop with us">
                </div>
                <div class="card bread">
                    <img class="card-img-top" src="images/braed 7.jfif" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][8]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][8]['price']; ?></p>
                    <input type="submit" class="card-text" name="sacarra" value="Shop with us">
                </div>
                <div class="card bread">
                    <img class="card-img-top" src="images/chocolate bread.jfif" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][9]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][9]['price']; ?></p>
                    <input type="submit" class="card-text" name="chocolate" value="Shop with us">
                </div>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <div class="card bread">
                    <img class="card-img-top" src="images/bread 11" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][10]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][10]['price']; ?></p>
                    <input type="submit" class="card-text" name="wheat" value="Shop with us">
                </div>
                <div class="card bread">
                    <img class="card-img-top" src="images/bread 13" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][11]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][11]['price']; ?></p>
                    <input type="submit" class="card-text" name="olive" value="Shop with us">
                </div>
                <div class="card bread">
                    <img class="card-img-top" src="images/bread 2.jfif" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][12]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][12]['price']; ?></p>
                    <input type="submit" class="card-text" name="pineapple" value="Shop with us">
                </div>
                <div class="card bread">
                    <img class="card-img-top" src="images/rainbow bread.jfif" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][13]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][13]['price']; ?></p>
                    <input type="submit" class="card-text" name="rainbow" value="Shop with us">
                </div>
                <div class="card bread">
                    <img class="card-img-top" src="images/bread 12" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][14]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][14]['price']; ?></p>
                    <input type="submit" class="card-text" name="apple" value="Shop with us">
                </div>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <div class="card bread">
                    <img class="card-img-top" src="images/peanut bread.jfif" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][15]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][15]['price']; ?></p>
                    <input type="submit" class="card-text" name="peanut" value="Shop with us">
                </div>
                <div class="card bread">
                    <img class="card-img-top" src="images/bread 15.jfif" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][16]['name']; ?></h4>
                    <p class="card-text"></p><?php echo $_SESSION['bread'][16]['price']; ?>
                    <input type="submit" class="card-text" name="hot" value="Shop with us">
                </div>
                <div class="card bread">
                    <img class="card-img-top" src="images/bread 5.jfif" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][17]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][17]['price']; ?></p>
                    <input type="submit" class="card-text" name="vanilla" value="Shop with us">
                </div>

                <div class="card bread">
                    <img class="card-img-top" src="images/fruit mix.jfif" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][18]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][18]['price']; ?></p>
                    <input type="submit" class="card-text" name="weed" value="Shop with us">
                </div>
                <div class="card bread">
                    <img class="card-img-top" src="images/cream bread.jfif" alt="bread1">
                    <h4 class="card-title"><?php echo $_SESSION['bread'][19]['name']; ?></h4>
                    <p class="card-text"><?php echo $_SESSION['bread'][19]['price']; ?></p>
                    <input type="submit" class="card-text" name="bun" value="Shop with us">
                </div>

            </div>
        </div>
    </form>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src='cart.js'></script>
</body>
</html>