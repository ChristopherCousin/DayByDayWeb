<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Articles</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


		<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

		<!-- Stylesheet -->
		<link href="assets/css/style.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

		<?php include "../php/DataBaseManager.php";


		?>

    <!--     Fonts and icons     -->
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.html" class="simple-text">
                    Control Panel
                </a>
            </div>

            <ul class="nav">
							<li>
									<a href="../index.php">
											<i class="pe-7s-home"></i>
											<p>Home Page</p>
									</a>
							</li>
                <li>
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="articles.php">
                        <i class="pe-7s-note"></i>
                        <p>Articles</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="articles.php">
                        <i class="pe-7s-rocket"></i>
                        <p>Control your time</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Article</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="../index.php?data=logout">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Article</h4>
                            </div>
                            <div class="content">
                                <form action = "../php/uploadArticle.php" method="post" id="myForm" enctype="multipart/form-data">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" name="title" placeholder="Title" id="title">
                                            </div>
                                        </div>
																				<div class="col-md-12">
																						<div class="form-group" style="margin-left:0.6em">
																								<label>Description</label>
																								<textarea rows="5" class="form-control" id="description" name="description" placeholder="Here can be your description"></textarea>
																						</div>
																				</div>
																				<div class="file-upload">
																				  <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

																				  <div class="image-upload-wrap">
																				    <input type='file' class="file-upload-input" name="image" id="image" onchange="readURL(this);" accept="image/*" />
																				    <div class="drag-text">
																				      <h3>Drag and drop a file or select add Image</h3>
																				    </div>
																				  </div>
																				  <div class="file-upload-content">
																				    <img class="file-upload-image" src="#" alt="your image" />
																				    <div class="image-title-wrap">
																				      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
																				    </div>
																				  </div>
																				</div>
                                    <input type="submit" class="btn btn-info btn-fill pull-right" name="submit" value="Upload Article"/>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

				<div class="content2" id="content2">
						<div class="container-fluid">
								<div class="row">
										<div class="col-md-9">
												<div class="card">
														<div class="header">
																<h4 class="title">Delete Article</h4>
														</div>
														<div class="content2">
															<?php
															$articles = getArticles();
															echo '
																			<table class="table table-hover test1">
																			 <thead class="thead-dark test2">
																		    <tr>
																				  <th>Action</th>
																					<th>ID</th>
																		      <th>Title</th>
																		      <th>Description</th>
																		    </tr>
																				</thread>
																			<tbody>
																			';
																			 for($x = 0; $x < count($articles) ; $x++)
																			{
																				echo '
																					<form method="post" action="articles.php">
																						<tr>
																							<td><button type="submit" class="btn btn-danger" id="deleteAction" name="deleteAction">Delete</button></td>
																							<td><input type="hidden" name="td_id" value="'.$articles[$x]->id.'">'.$articles[$x]->id.'</td>
																							<td><input type="hidden" name="td_title" value="'.$articles[$x]->title.'">'.$articles[$x]->title.'</td>
																							<td><input type="hidden" name="td_description" value="'.$articles[$x]->description.'">'.$articles[$x]->description.'</td>
																						</tr>
																					</form> ';
																			}

																			echo '</tbody>
																						</table>';

																						if(array_key_exists('deleteAction',$_POST))
																						{
																							if(isset($_POST["td_id"]))
																							{
																								 if(removeArticle($_POST["td_id"]))
																								 {
																										echo '<script> window.location.href="articles.php?data=succesdeletearticle"; </script>';
																								 } else {
																									  echo '<script> swal("Cancelled", "Error Deleting Article", "error"); </script>';
																								 }
																							}
																						}


																						if(isset($_GET["data"]))
																								{
																										if($_GET["data"] == "succesarticle")
																										{
																												echo '<script> swal("Added!", "The article has been Added!", "success"); </script>';
																										}
																										else if($_GET["data"] == "succesdeletearticle")
																										{
																												echo '<script> swal("Deleted!", "The article has been deleted!", "success"); </script>';
																										}
																								}
															?>

														</div>
										</div>
								</div>
						</div>
				</div>
				</div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="">Day By Day</a>, made with love
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
  <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>

	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>


	  <script class="jsbin" src="assets/js/main.js"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
