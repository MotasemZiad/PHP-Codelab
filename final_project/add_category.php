<?php
    include_once("db/db_connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['category_name'];
        $description = $_POST['category_description'];
        $status = isset($_POST['category_status']) ? 1 : 0;
        $date = Date("y-m-d h:i:s");

        // if(isset($_POST['category_status'])){
        //     $status = $_POST['category_status'];
        // }else{
        //     $status = 0;
        // }

        $query = "INSERT INTO categories(name, description, status, created_at) VALUES('$name', '$description', '$status', '$date')";

        $result = mysqli_query($connection, $query);
        if($result){
            echo "Success";
        }else {
            echo "Error". mysqli_error($connection);
        }
        
    }
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<?php include_once("shared/header.php"); ?>

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern"
  data-col="2-columns">
  <?php 
  include_once("shared/nav.php"); 
  include_once("shared/side_bar.php");
  ?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row"> 
      </div>
      <div class="content-body">
      <section id="basic-form-layouts">
          <div class="row match-height">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form">Category Info</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <form class="form" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-user"></i>Add a new category</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput1">Category Name</label>
                              <input type="text" id="projectinput1" class="form-control" placeholder="Category Name"
                              name="category_name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput2">Category Description</label>
                              <input type="text" id="projectinput2" class="form-control" placeholder="Category Description"
                              name="category_description">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput3">Status</label>
                              <input type="checkbox" id="projectinput3" name="category_status" value="1">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            Add 
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
         </div>
    </div>
  </div>
        <?php include_once("shared/footer.php"); ?>
    </body>
</html>