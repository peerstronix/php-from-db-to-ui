<?php

function component($productname, $productprice, $productimage){
    $element = "<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
            <form action=\"index.php\" method=\"post\" class=\"form-card\">
                <div class=\"card shadow\">
                    <div>
                        <img src=\"$productimage\" alt=\"pic\">
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">$productname</h5>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\" style=\"color: yellowgreen; font-size: 10px;\"></i>
                            <i class=\"fa fa-star\" style=\"color: yellowgreen; font-size: 10px;\"></i>
                            <i class=\"fa fa-star\" style=\"color: yellowgreen; font-size: 10px;\"></i>
                            <i class=\"fa fa-star\" style=\"color: yellowgreen; font-size: 10px;\"></i>
                            <i class=\"far fa-star\" style=\"color: yellowgreen; font-size: 10px;\"></i>
                        </div>
                        <h5><span class=\"price\">GHC$productprice.00</span></h5>
                        <button type=\"submit\" name=\"add\" class=\"btn btn-sm btn-warning\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                    </div>
                </div>
            </form>
        </div>";

    echo $element;
}


?>