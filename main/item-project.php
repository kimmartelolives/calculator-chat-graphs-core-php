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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Item Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Item Projects</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">#</th>
                      <th style="width: 20%"> Project Name</th>
                      <th style="width: 30%">Type</th>
                      <th>Project Progress</th>
                      <th style="width: 8%" class="text-center"> Status</th>
                      <th style="width: 20%"></th>
                  </tr>
              </thead>
              <tbody>

              <?php
              include("../settings-db/config.php");
              $SelectItemQuery =
              "
              SELECT * FROM (SELECT * FROM craft_weapon_legendary UNION SELECT * FROM craft_accessories_legendary) as cwca WHERE cwca.created_by_user = '$session' ORDER by id ASC
              ";

              $ResultItemQuery = $conn->query($SelectItemQuery);

                if($ResultItemQuery->num_rows > 0)
                {

                  while($row = $ResultItemQuery->fetch_assoc())
                  {

                    $project_name = $row['project_name'];
                    $category = $row['category'];
                    $overall_percentage = $row['overall_percentage'];
                    $status1 = $row['status1'];
                    $date_created = $row['date_created'];

                    $id = $row['id'];

                   $percent = $overall_percentage * 100;

                  
                    echo'
                
                      <tr>
                          <td>#</td>
                          <td><a href="view-crafting.php?id='.$id.'&category='.$category.'">'.$project_name.'</a>
                              <br/>
                              <small>
                                  Created '.$date_created.'
                              </small>
                          </td>

                          <td>
                              <ul class="list-inline">
                              '.$category.'
                                  
                              </ul>
                          </td>
                          <td class="project_progress">
                              <div class="progress progress-sm">
                                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="'.$percent.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$percent.'%">
                                  </div>
                              </div>
                              <small>
                                  '.$percent.'% Complete
                              </small>
                          </td>
                          <td class="project-state">
                          ';

                          if($status1 == 'Ongoing')
                          {
                             echo'<span class="badge badge-warning">'.$status1.'</span>';
                          }
                          else
                          {
                             echo'<span class="badge badge-success">'.$status1.'</span>';
                          }
                           
                          echo'
                          </td>
                          <td class="project-actions text-right">
                              <a class="btn btn-primary btn-sm" href="view-crafting.php?id='.$id.'&category='.$category.'">
                                  <i class="fas fa-folder">
                                  </i>
                                  View
                              </a>
                              <a class="btn btn-info btn-sm" href="edit-crafting-item.php?id='.$id.'&category='.$category.'">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  Edit
                              </a>
                              <a class="btn btn-danger btn-sm" href="delete-item-project.php?id='.$id.'&category='.$category.'">
                                  <i class="fas fa-trash">
                                  </i>
                                  Delete
                              </a>
                          </td>
                      </tr>
                      ';
                    }
                 }
                 else 
                                {
                                
                                }
                  ?>    
              
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<?php 
include("footer.php");
?>    