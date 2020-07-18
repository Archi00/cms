<?php include "includes/admin_header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->

        <?php include "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Archi00</small>
                        </h1>

                        <!--Add category form-->
                        <div class="col-xs-6">

                          <?php insertCategories(); ?>

                        <form class="" action="" method="post">

                            <div class="form-group">
                              <label for="cat_title"> Add Category </label>
                              <input class="form-control" type="text" name="cat_title">
                            </div>
                            <div class="form-group">
                              <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>
                      </form>

                        <?php
                            if(isset($_GET['edit'])) {

                              $cat_id = $_GET['edit'];

                              include "includes/update_categories.php";

                            }
                         ?>

                    </div>
                        <!--#Add category form-->

                        <!--Show category data-->
                      <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th> ID </th>
                              <th> Category Title </th>
                            </tr>
                          </thead>
                          <tbody>

                            <?php findAllCategories(); ?>

                            <?php deleteCategories(); ?>

                          </tbody>
                        </table>
                      </div>
                        <!--#Show category data-->

                      </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>

        <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php"; ?>
