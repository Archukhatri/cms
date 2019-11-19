<?php
    include "includes/admin_header.php"; 
?>

    <div id="wrapper">

      <?php
    include "includes/admin_navigation.php"; 
?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Welcome To Admin Panel <small>Author</small></h1>

          <!--  add category form start here-->
           <div class="col-xs-6">


            <!-- read from functions.php file -->
            <?php insert_categories();
            ?>




            <form action ="" method='post'>
              <div class ="form-group">
                <label for="cat_title">Add Category</label>
                <input type="text" class="form-control" name="cat_title">
              </div>
               <div class ="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
              </div>
            </form>



            <!-- to update and includesss query start here-->
            <?php
            if(isset($_GET['edit'])){

              $cat_id = $_GET['edit'];

              include "includes/update_categories.php";
             }
            ?>
              <!-- to update query stop here -->


          </div>
             <!--  add category form stop here-->

             <div class="col-xs-6">
              <table border='2' class="table , table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Category Title</th>
                      <th>To Edit Category</th>
                      <th>To Delete Category</th>
                  </tr>
                </thead>
                <tbody>

               
                 <?php
                 findAllcategories();
                  // <!-- to  find all categories -->
                ?>

                <!-- to delete categories that we added -->
                <?php
                 deleteCategories();
                ?>


                </tbody>
              </table>

          </div>



        </div>
<?php
    include "includes/admin_footer.php"; 
?>
