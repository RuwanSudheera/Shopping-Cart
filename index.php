<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Green World</title>
    <link rel="icon" href="Tree_images/title.jpg">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--own js file-->
	<script type="text/javascript" src="main.js"></script>

</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand"><img src="Tree_images/logo.jpg" alt="Green World" width="150px"></a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span> Product</a></li>
				<li style="width: 300px; left:10px; top:10px"><input type="text" class="form-control" id="search" name=""></li>
				<li style="top:10px; left: 20px"><input type="submit" class="btn btn-primary" id="search_btn" name=""></li>			
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart <span class="badge">0</span></a>
                    <div class="dropdown-menu" style="width: 400px">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-3">S1.No</div>
                                    <div class="col-md-3">Product image</div>
                                    <div class="col-md-3">Product Name</div>
                                    <div class="col-md-3">Price in $</div>
                                </div>
                            </div>
                            <div class="panel-body"> </div>
                            <div class="panel-footer"> </div>
                        </div>
                    </div>
                </li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Sign In</a>
					<ul class="dropdown-menu">
						<div style="width: 300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" required/>
									<label for="email">Password</label>
									<input type="Password" class="form-control" id="Password" required/>
									<p><br/></p>
									<a href="#" style="color: white; list-style: none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float: right;" id="login" value="Login" name="">
								</div>
								<div class="panel-footer" id="e_msg"></div>								
							</div>							
						</div>
					</ul>
				</li>
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>		
			</ul>
		</div>	
	</div>

	<p><br/></p>
	<p><br/></p>
	<p><br/></p>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1">
				
			</div>
			<div class="col-md-2">
                <div id="get_category">
                </div>
<!--				<div class="nav nav-pills nav-stacked">-->
<!--					<li class="active"><a href="#"><h4>Categories</h4></a></li>-->
<!--					<li><a href="#">Categories</a></li>-->
<!--					<li><a href="#">Categories</a></li>-->
<!--					<li><a href="#">Categories</a></li>-->
<!--					<li><a href="#">Categories</a></li>-->
<!--				</div>-->
                <div id="get_brand">
                </div>
<!--				<div class="nav nav-pills nav-stacked">-->
<!--					<li class="active"><a href="#"><h4>Brands</h4></a></li>-->
<!--					<li><a href="#">Categories</a></li>-->
<!--					<li><a href="#">Categories</a></li>-->
<!--					<li><a href="#">Categories</a></li>-->
<!--					<li><a href="#">Categories</a></li>-->
<!--				</div>-->
			</div>
			<div class="col-md-8"></div>
				<div class="panel panel-info">
					<div class="panel-heading">tree</div>
					<div class="panel-body">

                        <div id="get_tree">
<!--                        Here we get product jquery Ajax Request-->
                        </div>
<!--						<div class="col-md-2">-->
<!--							<div class="panel panel-info">-->
<!--								<div class="panel-heading">Nelli Tree</div>-->
<!--								<div class="panel-body">-->
<!--									<img src="Tree_images/tree1.JPG" width="170px">-->
<!--								</div>-->
<!--								<div class="panel-heading">Rs.500.00-->
<!--									<button style="float: right;" class="btn btn-danger btn-xs">AddToCart</button>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->

					</div>					
				</div>
				<div class="panel-footer">&copy;2017</div>
			<div class="col-md-1"></div>			
		</div>
		
	</div>

</body>
</html>