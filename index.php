<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Start CMS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

               
                    <li class=''>
                        <a href="category.php?category=">Category</a>
                    </li>
                    
                    
                    <li>
                        <a href="admin">Admin</a>
                    </li> 

                  
                    <li class=''>
                        <a href="registration.php">Registration</a>
                    </li>
                    <li class=''>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Navigation -->

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="post.php">sfsad</a>
                </h2>
                <p class="lead">
                    by <a href="author_posts.php">sad</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> dasd</p>
                <hr>
                <a href="post.php?p_id=">
                    <img class="img-responsive" src="images/dasd" alt="">
                </a>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-primary" href="post.php?p_id=">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                

                

            </div>

            <!-- Blog Sidebar Widgets Column -->
          <div class="col-md-4">

                          <!-- Blog Search Well -->
                          <div class="well">
                              <h4>Blog Search</h4>
                              <form action="search.php" method="post">
                                  <div class="input-group">
                                      <input type="text" name="search" class="form-control">
                                          <span class="input-group-btn">
                                              <button name="submit" class="btn btn-default" type="submit">
                                                  <span class="glyphicon glyphicon-search"></span>
                                              </button>
                                          </span>
                                  </div>
                                  <!-- /.input-group -->
                              </form>
                          </div>

                          <!-- Login Form -->
                          <div class="well">
                              
<!-- 
                                  <h4>Logged in as </h4>
                                  <a href="includes/logout.php" class='btn btn-warning'>Logout</a>
 -->
                         

                                  <h4>Login</h4>
                                  <form action="includes/login.php" method="post">
                                      <div class="form-group">
                                          <input type="text" name="username" class="form-control" placeholder="Username">
                                      </div>
                                      <div class="input-group">
                                          <input type="password" name="password" class="form-control" placeholder="Password">
                                          <span class="input-group-btn">
                                              <button class="btn btn-primary" type="submit" name="login">Login</button>
                                          </span>
                                      </div>
                                      <!-- /.input-group -->
                                  </form>


                              
                          </div>

                          <!-- Blog Categories Well -->
                          <div class="well">
                              <h4>Blog Categories</h4>
                              <div class="row">
                                  <div class="col-lg-12">
                                      <ul class="list-unstyled">

                                      </ul>
                                  </div>
                                  <!-- /.col-lg-6 -->
                              </div>
                              <!-- /.row -->
                          </div>

                          <!-- Side Widget Well -->
                         <div class="well">
                             <h4>Side Widget Well</h4>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                         </div>

                      </div>

        </div>
        <!-- /.row -->

        <hr>

        <ul class="pager">
           
        </ul>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>