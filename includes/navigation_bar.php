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
                <a class="navbar-brand" href="index.php">CMS Front</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav">

                    <?php 

                    $query = "SELECT * FROM categories";
                    $select_all_categories_query = mysqli_query($connection,$query);

                    while($row = mysqli_fetch_assoc($select_all_categories_query)){
                        $cat_title = $row['cat_title'];

                        echo "<li><a href='#'>{$cat_title}<?a></li>";

                    }
                       

                    ?>





  <a class="navbar-brand" href="admin"  align = right>Admin</a>


               <!-- 
                    <li class=''>
                        <a href="category.php?category=">Category</a>
                    </li> -->
         <!-- 
                    <li class=''>
                        <a href="registration.php">Registration</a>
                    </li>
                    <li class=''>
                        <a href="contact.php">Contact</a>
                    </li> -->


<!-- <div>
                      <li>
                        <a href="admin" style="text-align:center">Admin</a>
                    </li> 
</div> -->
         
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Navigation -->