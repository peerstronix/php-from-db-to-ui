<?php

    require_once ("./php/DBConnect.php");

    require_once ("./php/component.php");

    $database = new DBConnect("localhost", "peerselectronics", "products", "root", "");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class="row text-center py-3 px-3">

        <?php
        //Here, the $result variable is used to hold what is returned when we enter into our database and call the getProduct function
        $result = $database->getProduct();

        //Now that we have the results here we can iterate the result and display them on our page
        while ($row = mysqli_fetch_assoc($result)){

            //Now we use our component function to display the results iteratively
            component($row['product_name'], $row['product_price'], $row['product_image']);
        }

        ?>



<!--        <div class="col-md-3 col-sm-6 my-3 my-md-0">-->
<!--            <form action="index.php" method="post" class="form-card">-->
<!--                <div class="card shadow">-->
<!--                    <div>-->
<!--                        <img src="./images/product-photos/samsungJ7p.jpg" align="pic">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Samsung N10</h5>-->
<!--                        <div class="rating">-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="far fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                        </div>-->
<!--                        <h5><span class="price">GHC999.00</span></h5>-->
<!--                        <button type="submit" name="add" class="btn btn-sm btn-warning">Add to Cart <i class="fas fa-shopping-cart"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3 col-sm-6 my-3 my-md-0">-->
<!--            <form action="index.php" method="post" class="form-card">-->
<!--                <div class="card shadow">-->
<!--                    <div>-->
<!--                        <img src="./images/product-photos/samsungN10.jpg" align="pic">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Samsung N10</h5>-->
<!--                        <div class="rating">-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="far fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                        </div>-->
<!--                        <h5><span class="price">GHC999.00</span></h5>-->
<!--                        <button type="submit" name="add" class="btn btn-sm btn-warning">Add to Cart <i class="fas fa-shopping-cart"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3 col-sm-6 my-3 my-md-0">-->
<!--            <form action="index.php" method="post" class="form-card">-->
<!--                <div class="card shadow">-->
<!--                    <div>-->
<!--                        <img src="./images/product-photos/iphoneXsMax.jpg" align="pic">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Samsung N10</h5>-->
<!--                        <div class="rating">-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="far fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                        </div>-->
<!--                        <h5><span class="price">GHC999.00</span></h5>-->
<!--                        <button type="submit" name="add" class="btn btn-sm btn-warning">Add to Cart <i class="fas fa-shopping-cart"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3 col-sm-6 my-3 my-md-0">-->
<!--            <form action="index.php" method="post" class="form-card">-->
<!--                <div class="card shadow">-->
<!--                    <div>-->
<!--                        <img src="./images/product-photos/iphone7.jpg" align="pic">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Samsung N10</h5>-->
<!--                        <div class="rating">-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="far fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                        </div>-->
<!--                        <h5><span class="price">GHC999.00</span></h5>-->
<!--                        <button type="submit" name="add" class="btn btn-sm btn-warning">Add to Cart <i class="fas fa-shopping-cart"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
    </div>

<!--    <div class="row text-center py-5 px-3">-->
<!--        <div class="col-md-3 col-sm-6 my-3 my-md-0">-->
<!--            <form action="index.php" method="post" class="form-card">-->
<!--                <div class="card shadow">-->
<!--                    <div>-->
<!--                        <img src="./images/product-photos/samsungJ7p.jpg" align="pic">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Samsung N10</h5>-->
<!--                        <div class="rating">-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="far fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                        </div>-->
<!--                        <h5><span class="price">GHC999.00</span></h5>-->
<!--                        <button type="submit" name="add" class="btn btn-sm btn-warning">Add to Cart <i class="fas fa-shopping-cart"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3 col-sm-6 my-3 my-md-0">-->
<!--            <form action="index.php" method="post" class="form-card">-->
<!--                <div class="card shadow">-->
<!--                    <div>-->
<!--                        <img src="./images/product-photos/samsungJ7p.jpg" align="pic">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Samsung N10</h5>-->
<!--                        <div class="rating">-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="far fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                        </div>-->
<!--                        <h5><span class="price">GHC999.00</span></h5>-->
<!--                        <button type="submit" name="add" class="btn btn-sm btn-warning">Add to Cart <i class="fas fa-shopping-cart"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3 col-sm-6 my-3 my-md-0">-->
<!--            <form action="index.php" method="post" class="form-card">-->
<!--                <div class="card shadow">-->
<!--                    <div>-->
<!--                        <img src="./images/product-photos/samsungJ7p.jpg" align="pic">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Samsung N10</h5>-->
<!--                        <div class="rating">-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="far fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                        </div>-->
<!--                        <h5><span class="price">GHC999.00</span></h5>-->
<!--                        <button type="submit" name="add" class="btn btn-sm btn-warning">Add to Cart <i class="fas fa-shopping-cart"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3 col-sm-6 my-3 my-md-0">-->
<!--            <form action="index.php" method="post" class="form-card">-->
<!--                <div class="card shadow">-->
<!--                    <div>-->
<!--                        <img src="./images/product-photos/samsungJ7p.jpg" align="pic">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Samsung N10</h5>-->
<!--                        <div class="rating">-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="far fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                        </div>-->
<!--                        <h5><span class="price">GHC999.00</span></h5>-->
<!--                        <button type="submit" name="add" class="btn btn-sm btn-warning">Add to Cart <i class="fas fa-shopping-cart"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="row text-center py-5 px-3">-->
<!--        <div class="col-md-3 col-sm-6 my-3 my-md-0">-->
<!--            <form action="index.php" method="post" class="form-card">-->
<!--                <div class="card shadow">-->
<!--                    <div>-->
<!--                        <img src="./images/product-photos/samsungJ7p.jpg" align="pic">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Samsung N10</h5>-->
<!--                        <div class="rating">-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="far fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                        </div>-->
<!--                        <h5><span class="price">GHC999.00</span></h5>-->
<!--                        <button type="submit" name="add" class="btn btn-sm btn-warning">Add to Cart <i class="fas fa-shopping-cart"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3 col-sm-6 my-3 my-md-0">-->
<!--            <form action="index.php" method="post" class="form-card">-->
<!--                <div class="card shadow">-->
<!--                    <div>-->
<!--                        <img src="./images/product-photos/samsungJ7p.jpg" align="pic">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Samsung N10</h5>-->
<!--                        <div class="rating">-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="far fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                        </div>-->
<!--                        <h5><span class="price">GHC999.00</span></h5>-->
<!--                        <button type="submit" name="add" class="btn btn-sm btn-warning">Add to Cart <i class="fas fa-shopping-cart"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3 col-sm-6 my-3 my-md-0">-->
<!--            <form action="index.php" method="post" class="form-card">-->
<!--                <div class="card shadow">-->
<!--                    <div>-->
<!--                        <img src="./images/product-photos/samsungJ7p.jpg" align="pic">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Samsung N10</h5>-->
<!--                        <div class="rating">-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="far fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                        </div>-->
<!--                        <h5><span class="price">GHC999.00</span></h5>-->
<!--                        <button type="submit" name="add" class="btn btn-sm btn-warning">Add to Cart <i class="fas fa-shopping-cart"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3 col-sm-6 my-3 my-md-0">-->
<!--            <form action="index.php" method="post" class="form-card">-->
<!--                <div class="card shadow">-->
<!--                    <div>-->
<!--                        <img src="./images/product-photos/samsungJ7p.jpg" align="pic">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Samsung N10</h5>-->
<!--                        <div class="rating">-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="far fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                        </div>-->
<!--                        <h5><span class="price">GHC999.00</span></h5>-->
<!--                        <button type="submit" name="add" class="btn btn-sm btn-warning">Add to Cart <i class="fas fa-shopping-cart"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="row text-center py-5 px-3">-->
<!--        <div class="col-md-3 col-sm-6 my-3 my-md-0">-->
<!--            <form action="index.php" method="post" class="form-card">-->
<!--                <div class="card shadow">-->
<!--                    <div>-->
<!--                        <img src="./images/product-photos/samsungJ7p.jpg" align="pic">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Samsung N10</h5>-->
<!--                        <div class="rating">-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="far fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                        </div>-->
<!--                        <h5><span class="price">GHC999.00</span></h5>-->
<!--                        <button type="submit" name="add" class="btn btn-sm btn-warning">Add to Cart <i class="fas fa-shopping-cart"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3 col-sm-6 my-3 my-md-0">-->
<!--            <form action="index.php" method="post" class="form-card">-->
<!--                <div class="card shadow">-->
<!--                    <div>-->
<!--                        <img src="./images/product-photos/samsungJ7p.jpg" align="pic">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Samsung N10</h5>-->
<!--                        <div class="rating">-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="far fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                        </div>-->
<!--                        <h5><span class="price">GHC999.00</span></h5>-->
<!--                        <button type="submit" name="add" class="btn btn-sm btn-warning">Add to Cart <i class="fas fa-shopping-cart"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3 col-sm-6 my-3 my-md-0">-->
<!--            <form action="index.php" method="post" class="form-card">-->
<!--                <div class="card shadow">-->
<!--                    <div>-->
<!--                        <img src="./images/product-photos/samsungJ7p.jpg" align="pic">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Samsung N10</h5>-->
<!--                        <div class="rating">-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="far fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                        </div>-->
<!--                        <h5><span class="price">GHC999.00</span></h5>-->
<!--                        <button type="submit" name="add" class="btn btn-sm btn-warning">Add to Cart <i class="fas fa-shopping-cart"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3 col-sm-6 my-3 my-md-0">-->
<!--            <form action="index.php" method="post" class="form-card">-->
<!--                <div class="card shadow">-->
<!--                    <div>-->
<!--                        <img src="./images/product-photos/samsungJ7p.jpg" align="pic">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Samsung N10</h5>-->
<!--                        <div class="rating">-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="fa fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                            <i class="far fa-star" style="color: yellowgreen; font-size: 10px;"></i>-->
<!--                        </div>-->
<!--                        <h5><span class="price">GHC999.00</span></h5>-->
<!--                        <button type="submit" name="add" class="btn btn-sm btn-warning">Add to Cart <i class="fas fa-shopping-cart"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>