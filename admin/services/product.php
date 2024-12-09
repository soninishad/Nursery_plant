<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Administrator Department</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="../dist/css/adminx.css" media="screen" />

    <!-- this is only relevant for the demo -->
    <link rel="stylesheet" href="../demo/demo.css">
  </head>
  <body>
    <div class="adminx-container">
      <!-- Header -->
      <nav class="navbar navbar-expand justify-content-between fixed-top">
        <a class="navbar-brand mb-0 h1 d-none d-md-block" href="/services/index1.html">
          <img src="../demo/img/logo.png" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
          Administrator
        </a>


        <div class="d-flex flex-1 d-block d-md-none">
          <a href="#" class="sidebar-toggle ml-3">
            <i data-feather="menu"></i>
          </a>
        </div>

        <ul class="navbar-nav d-flex justify-content-end mr-2">
          <li class="nav-item dropdown">
            <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
              <img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg" class="d-inline-block align-top" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">My Profile</a>
              <!-- <a class="dropdown-item" href="#">My Tasks</a> -->
              <!-- <a class="dropdown-item" href="#">Settings</a> -->
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="#">Sign out</a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- // Header -->

      <!-- expand-hover push -->
      <div class="adminx-sidebar expand-hover push" id="sidebar">
        <ul class="sidebar-nav">
          <li class="sidebar-nav-item">
            <a href="../index1.html" class="sidebar-nav-link">
              <span class="sidebar-nav-icon">
                <i data-feather="home"></i>
              </span>
              <span class="sidebar-nav-name">
                Dashboard
              </span>
              <span class="sidebar-nav-end">
              </span>
            </a>
          </li>



      <!-- services -->
      <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#example" aria-expanded="false" aria-controls="example">
              <span class="sidebar-nav-icon">
                <i data-feather="pie-chart"></i>
              </span>
              <span class="sidebar-nav-name">
               Services
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="example">
              <li class="sidebar-nav-item">
                <a href="./services/product.php" class="sidebar-nav-link">
                  <!-- <span class="sidebar-nav-abbr">
                    
                  </span> -->
                  <span class="sidebar-nav-name">
                   Add New  Services
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./services/showallproduct.php" class="sidebar-nav-link">
                  <!-- <span class="sidebar-nav-abbr">
                  
                  </span> -->
                  <span class="sidebar-nav-name">
                    View Services
                  </span>
                </a>
              </li>
            </ul>
          </li>


<!-- Enquiry -->
          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navTables" aria-expanded="false" aria-controls="navTables">
              <span class="sidebar-nav-icon">
                <i data-feather="align-justify"></i>
              </span>
              <span class="sidebar-nav-name">
               Enquiry
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navTables">
              <li class="sidebar-nav-item">
                <a href="../Enquiry/showenquiry.php" class="sidebar-nav-link">
                  <!-- <span class="sidebar-nav-abbr">
                    
                  </span> -->
                  <span class="sidebar-nav-name">
                    View Enquiry
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/tables_data.html" class="sidebar-nav-link">
                  <!-- <span class="sidebar-nav-abbr">
                    
                  </span> -->
                  <span class="sidebar-nav-name">
                    Data Tables
                  </span>
                </a>
              </li>
            </ul>
          </li>


          <!-- <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navTables" aria-expanded="false" aria-controls="navTables">
              <span class="sidebar-nav-icon">
                <i data-feather="align-justify"></i>
              </span>
              <span class="sidebar-nav-name">
                Tables
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navTables">
              <li class="sidebar-nav-item">
                <a href="./tables.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Re
                  </span>
                  <span class="sidebar-nav-name">
                    Regular Tables
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./tables_data.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Da
                  </span>
                  <span class="sidebar-nav-name">
                    Data Tables
                  </span>
                </a>
              </li>
            </ul>
          </li> -->

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navForms" aria-expanded="false" aria-controls="navForms">
              <span class="sidebar-nav-icon">
                <i data-feather="edit"></i>
              </span>
              <span class="sidebar-nav-name">
                Forms
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navForms">
              <li class="sidebar-nav-item">
                <a href="./form_elements.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    El
                  </span>
                  <span class="sidebar-nav-name">
                    Elements
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./form_advanced.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Ad
                  </span>
                  <span class="sidebar-nav-name">
                    Advanced Elements
                  </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navUI" aria-expanded="false" aria-controls="navUI">
              <span class="sidebar-nav-icon">
                <i data-feather="grid"></i>
              </span>
              <span class="sidebar-nav-name">
                UI Elements
              </span>
              <span class="sidebar-nav-end">
                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navUI">
              <li class="sidebar-nav-item">
                <a href="./icons.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Ic
                  </span>
                  <span class="sidebar-nav-name">
                    Icons
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./buttons.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Bu
                  </span>
                  <span class="sidebar-nav-name">
                    Buttons
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./notifications.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    No
                  </span>
                  <span class="sidebar-nav-name">
                    Notifications
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./progress.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Pr
                  </span>
                  <span class="sidebar-nav-name">
                    Progress Bars
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./tabs.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Ta
                  </span>
                  <span class="sidebar-nav-name">
                    Tabs
                  </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navExtra" aria-expanded="false" aria-controls="navExtra">
              <span class="sidebar-nav-icon">
                <i data-feather="layers"></i>
              </span>
              <span class="sidebar-nav-name">
                Other Layouts
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navExtra">
              <li class="sidebar-nav-item">
                <a href="./login.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Lo
                  </span>
                  <span class="sidebar-nav-name">
                    Login
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./signup.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Si
                  </span>
                  <span class="sidebar-nav-name">
                    Sign Up
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./404.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Nf
                  </span>
                  <span class="sidebar-nav-name">
                    404 Error
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./500.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Is
                  </span>
                  <span class="sidebar-nav-name">
                    500 Error
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./timeline.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Ti
                  </span>
                  <span class="sidebar-nav-name">
                    Timeline
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./invoice.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    In
                  </span>
                  <span class="sidebar-nav-name">
                    Invoice
                  </span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>



      
      <!-- Main Content -->
      <div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Product</a></li>
                <li class="breadcrumb-item active  aria-current="page">Product</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Add New Product</h1>
            </div>


            <!-- <div class="row" > -->
            <form action="productcode.php" method="post"   enctype="multipart/form-data">
                    Image :
                <input type="file" name="file" class="form-control" >
                <br/>
                Title :
                 <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title" >
                 <br/>
                 paragraph :
                 <input type="text" name="paragraph" id="paragraph"  class="form-control"  placeholder="Enter Paragraph">
                 <br>
                 <input type="submit" value="Add"  class="btn btn-primary">
            </form>
            <!-- </div> -->
          </div>
        </div>
      </div>
      <!-- // Main Content -->
    </div>




    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.js"></script>

    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.vanilla.js"></script-->
  </body>
</html>