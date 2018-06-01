<?php

include "db.php";

if(isset($_POST["category"])){
    $category_query = "SELECT * FROM categories";
    $run_query = mysqli_query($con, $category_query);

    echo" <div class='nav nav-pills nav-stacked'><li class='active'><a href='#'><h4>Categories</h4></a></li>";

    if(mysqli_num_rows($run_query) > 0){
        while($row = mysqli_fetch_array($run_query)){
            $cid = $row["cat_id"];
            $cat_name = $row["cat_title"];

            echo"<li><a href='#' class='category' cid='$cid'>$cat_name</a></li>";
        }
        echo"</div>";
    }
}

if(isset($_POST["brand"])){
    $brand_query = "SELECT * FROM brands";
    $run_query = mysqli_query($con, $brand_query);

    echo"<div class='nav nav-pills nav-stacked'><li class='active'><a href='#'><h4>Brands</h4></a></li>";

    if(mysqli_num_rows($run_query) > 0){
        while($row = mysqli_fetch_array($run_query)){
            $bid = $row["brand_id"];
            $brand_name = $row["brand_title"];
            echo"<li><a href='#'>$brand_name</a></li>";
        }
        echo"</div>";
    }
}

if(isset($_POST["tree"])){
    $tree_query = "SELECT * FROM trees ORDER BY RAND() LIMIT 0,9";
    $run_query = mysqli_query($con, $tree_query);

    if(mysqli_num_rows($run_query) > 0){
        while ($row = mysqli_fetch_array($run_query)){
            $tree_id = $row['tree_id'];
            $tree_cat = $row['tree_cat'];
            $tree_brand = $row['tree_brand'];
            $tree_title = $row['tree_title'];
            $tree_price = $row['tree_price'];
            $tree_image = $row['tree_image'];

            echo "
                <div class='col-md-3'>
					<div class='panel panel-info'>
						<div class='panel-heading'>$tree_title</div>
						<div class='panel-body'>
							<img src='$tree_image' width='200px' height='260px'>
						</div>
						<div class='panel-heading'>Rs.$tree_price.00
							<button tid='tree_id' style='float: right;' class='btn btn-danger btn-xs'>Add To Cart</button>
						</div>
				    </div>
				</div>

            ";

        }
    }
}

if (isset($_POST["get_selected_Category"])){
    $cid = $_POST["cat_id"];
    $sql = "SELECT * from trees WHERE tree_cat = '$cid'";
    $run_query = mysqli_query($con,$sql);
    while ($row=mysqli_fetch_array($run_query)){

            $tree_id = $row['tree_id'];
            $tree_cat = $row['tree_cat'];
            $tree_brand = $row['tree_brand'];
            $tree_title = $row['tree_title'];
            $tree_price = $row['tree_price'];
            $tree_image = $row['tree_image'];

            echo "
                <div class='col-md-3'>
					<div class='panel panel-info'>
						<div class='panel-heading'>$tree_title</div>
						<div class='panel-body'>
							<img src='$tree_image' width='200px' height='260px'>
						</div>
						<div class='panel-heading'>Rs.$tree_price.00
							<button tid='tree_id' style='float: right;' class='btn btn-danger btn-xs'>Add To Cart</button>
						</div>
				    </div>
				</div>

            ";


    }
}

?>