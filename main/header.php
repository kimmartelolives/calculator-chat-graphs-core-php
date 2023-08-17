<?php
if(!isset($_SESSION['user']))
{
   
   echo "<script>						
   window.location.href='../index.php ';
   </script>";
}
$session = $_SESSION['user'];           

include("../settings-db/config.php");

$SelectAccountQuery = "
SELECT
id,
UserName,
FirstName,
LastName,
ProfilePicture
FROM
user_account
WHERE 
id = $session;
";
$ResultUserQuery = $conn->query($SelectAccountQuery);
if ($ResultUserQuery->num_rows > 0) {

  while($row = $ResultUserQuery->fetch_assoc()) {
  
     $id = $row['id'];
     $UserName = $row['UserName'];
     $ProfilePicture = $row['ProfilePicture'];
     $FirstName = $row['FirstName'];
     $LastName = $row['LastName'];

?>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="image/bg_3.png" alt="ss" height="auto" width="auto">
  </div>

  <!-- Navbar -->
  
  <nav class="main-header navbar navbar-expand navbar-dark">
    
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://www.facebook.com/SummerSkyTeamPogi" class="nav-link" target="_blank">Facebook Page</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" data-toggle="modal" data-target="#modal-default" class="nav-link">Donation</a>
      </li>
      
    </ul>



    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
    <img src="dp_image/<?php echo $row['ProfilePicture']; ?>" class="img-circle elevation-2" width="50px" height="50px" alt="User Image">
    
        <a href="#" style="color:white;" data-toggle="modal" data-target="#modal-default1" >My Account</a>
        &nbsp; &nbsp;  &nbsp; 
        <a href="logout-user.php" onclick="return confirm('Are you sure you want to logout?')" style="color:red;">Logout</a> 
      </li>
</ul>

  
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="image/ss.ico" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SUMMER SKY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
         
        </div>
        <div class="info">
          <a href="#" class="d-block"> <?php echo $FirstName.' '.$LastName; ?></a>
          <small><?php echo $UserName;?></small>
        </div>
      </div>

 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a> 
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-hammer"></i>
              <p>
                Crafting
                <i class="fas fa-angle-left right"></i>
         
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
            <ul class="nav nav-treeview">

            <li class="nav-header">Arms</li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Weapon</p>
                  <i class="fas fa-angle-left right"></i>
                </a>

                <ul class="nav nav-treeview">

                   <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon far fa-circle text-danger"></i>
                      <p>Epic Weapon</p>                 
                     
                    </a>
                    </li>
                    -->
                    <li class="nav-item">
                    <a href="crafting-legendary-weapon.php" class="nav-link">
                      <i class="nav-icon far fa-circle text-warning"></i>
                      <p>Legendary Weapon</p>
                     
                    </a>
                    </li>

                </ul>

              </li>
                     

              <li class="nav-header">Accessories</li>

              
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Necklace</p>
                  <i class="fas fa-angle-left right"></i>
                </a>

                <ul class="nav nav-treeview">

               <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Epic Necklace</p>
                
                </a>
                </li>
                -->
                <li class="nav-item">
                <a href="crafting-legendary-accessories.php" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Legendary Necklace</p>
                
                </a>
                </li>

                </ul>
              </li>
              

            </ul>
          </li>

          <li class="nav-item">
            <a href="item-project.php" class="nav-link">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Item Projects
             
              </p>
            </a> 
          </li>

          

      </nav>
      
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <br><br><br>
  <?php
include("../settings-db/config.php");
$SelectAnnouncementQuery = "SELECT message1 FROM announcement WHERE id = 1";
$ResultAnnouncementQuery = $conn->query($SelectAnnouncementQuery);

    if ($ResultAnnouncementQuery->num_rows > 0) 
    {
            while($row = $ResultAnnouncementQuery->fetch_assoc()) 
            {
                $message = $row['message1'];
              
                echo'

                        <div class="container-fluid">
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">  
                                </li>
                            <marquee scrollamount="30"><h3 style="color:black;"><b> '.$message.'</b></h3></marquee>
                        </ol>

                    ';
                }
            }
            else 
        {
        echo "0 results";
        }

 ?>


    <!-- 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
       
            </div>
        
          </div>
         
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
              </div>
        
            </div>
     
          </div>
   
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">760</span>
              </div>
        
            </div>
    
          </div>
   
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
       
            </div>
   
          </div>

        </div>
-->

<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">DONATION</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center"">
              <img src="image/gcash.jpg" alt="gcash" width="400px" height="600px">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
     

      <div class="modal fade" id="modal-default1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              
              <h4 class="modal-title">MY ACCOUNT: <small><?php echo $UserName; ?></small></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
            <form action="update-profile.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">First Name</label>
                                                        <input class="form-control py-4" id="inputFirstName" type="text" name="FirstName" value="<?php echo $FirstName; ?>" placeholder="Enter first name"/>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                                        <input class="form-control py-4" id="inputLastName" type="text" name="LastName" value="<?php echo $LastName; ?>" placeholder="Enter last name"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input class="form-control py-4" id="inputPassword" name="Password" type="password" placeholder="Enter password" required/>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                        <input class="form-control py-4" id="inputConfirmPassword" name="Password1" type="password" placeholder="Confirm password" required/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPicture">Select image to upload:</label>
                                                <input class="form-control" id="inputPicture" type="file" name="upload" value="<?php echo $Email; ?>" aria-describedby="emailHelp" placeholder="Enter email address" required/>
                                           
                                            </div> 
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Changes</button> 
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- MAIN WEBSITE CONTENT START  -->          
 <?php
                }
              } else {
                  echo "0 results";
       
                  
              }
          
              ?>