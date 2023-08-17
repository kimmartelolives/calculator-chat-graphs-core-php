<?php 
include("header-title.php");
include("header.php");
?>

<style>
  .anyClass {
  height:300px;
  overflow-y: scroll;
}

  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

         <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
            <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eQcBTm3zeuU" allowfullscreen></iframe>
        </div>
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-fist-raised"></i></span>


              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
            <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tJSrPjJmQp4" allowfullscreen></iframe>
        </div>
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

       
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
            <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LGIKQmD_3hA" allowfullscreen></iframe>
        </div>
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-award"></i></span>

              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
            <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TmqUNmuUdqM" allowfullscreen></iframe>
        </div>
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-hand-middle-finger"></i></span>


              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          
            <!-- /.card -->
           
              <div class="col-md-12">
                <!-- DIRECT CHAT -->
                <div class="card direct-chat direct-chat-warning">
                  <div class="card-header">
                    <h3 class="card-title">World Chat</h3>
                  </div>
                  <div class="card-body">
                    
                  <div class="direct-chat-messages anyClass" id='messageBody'>

                <?php
                include("../settings-db/config.php");
                $SelectMessageQuery = 
                "
                SELECT cm.id,
                cm.user_id,
                CONCAT(ua.FirstName,' ', ua.LastName) AS FullName, 
                cm.message,
                ua.ProfilePicture,
                ua.UserTypeId,
                DATE_FORMAT(cm.date_created, '%d %M %Y %h:%i %p') AS date_created 
                FROM 
                chat_messages cm 
                INNER JOIN 
                user_account ua 
                ON 
                cm.user_id = ua.id 
                WHERE 
                Status = 'Active'
                ORDER BY
                id

                ";

                $ResultMessageQuery = $conn->query($SelectMessageQuery);

                  if ($ResultMessageQuery->num_rows > 0)
                  {

                    while($row = $ResultMessageQuery->fetch_assoc()) 
                    {

                        $id = $row['id'];
                        $user_id = $row['user_id'];
                        $name = $row['FullName'];
                        $message = $row['message'];
                        $date = $row['date_created'];
                        $profile = $row['ProfilePicture'];
                        $UserTypeId = $row['UserTypeId'];

                      echo'

                          <!-- Message. Default to the left -->
                          <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix"><br>
                              <span class="direct-chat-name float-left">';        
                   if($UserTypeId == 1)
                   {
                    echo'<font style="color:yellow">'.$name.'</font>';
                   }
                   elseif($UserTypeId == 2)
                   {
                    echo '<font style="color:white">'.$name.'</font>';
                   }
                   else
                   {}                   
                      echo' :
                              </span>
                              <span class="direct-chat-timestamp float-right">'.$date.'</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="dp_image/'.$profile.'" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                             '.$message.'
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->
                      ';


                    }
                  }
                ?>
                           </div>
                       </div>
                <div class="card-footer">
                        <form action="insert-chat-messages.php" method="post">
                          <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                            <span class="input-group-append">
                              <button type="submit" class="btn btn-warning">Send</button>
                            </span>
                          </div>
                        </form>
                      </div>
                

<script>
  var messageBody = document.querySelector('#messageBody');
messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;
</script>
<?php 

include("footer.php");
?>    