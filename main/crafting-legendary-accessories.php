<?php 
include("header-title.php");
include("header.php");
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crafting Accessories [Legendary]</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Accessories</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              Input materials you owned.
            </div>
<form action="insert-crafting-legendary-accessories-process.php" method="POST">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Project Name</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <input type="text" class="form-control" placeholder="Project Name" name="project_name" maxlength="50" required>
                  </div>
                  
                </div>
              </div>
              <!-- /.card-body -->
            </div>

            <div class="card card-light">
              <div class="card-header">
                <h3 class="card-title">Resources</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-4">
                  <label for="exampleInputBorderWidth2">Glittering</label>
                    <input type="number" class="form-control" placeholder="Glittering Powder" name="glittering" min="0" max="999999999" value="0" required>
                  </div>
                  <div class="col-4">
                  <label for="exampleInputBorderWidth2">Darksteel</label>
                    <input type="number" class="form-control" placeholder="Darksteel" name="darksteel" min="0" max="999999999" value="0" required>
                  </div>
                  <div class="col-4">
                  <label for="exampleInputBorderWidth2">Copper</label>
                    <input type="number" class="form-control" placeholder="Copper" name="copper" min="0" max="999999999" value="0" required>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>


        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
    
              
            <!-- /.card -->

            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">UNCOMMON</h3><br>
                <img src="image/uc-for-accessories.png" alt="uc" style="width:auto;">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
           
                <div class="form-group">
                  <label for="exampleInputBorder">Platinum</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="uc_platinum" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Anima Stone</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="uc_anima" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputRounded0">Illuminating Fragment</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="uc_illuminating" min="0" max="999999999" value="0" required>
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

             <!-- general form elements -->
             <div class="card card-danger">
             <div class="card-header">
                <h3 class="card-title">EPIC</h3><br>
                <img src="image/epic-for-accessories.png" alt="epic" style="width:auto;">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
           
                <div class="form-group">
                  <label for="exampleInputBorder">Platinum</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="epic_platinum" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Anima Stone</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="epic_anima" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputRounded0">Illuminating Fragment</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="epic_illuminating" min="0" max="999999999" value="0" required>
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
         

          </div>

          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Form Element sizes -->
             <!-- general form elements -->
             <div class="card card-primary">
             <div class="card-header">
                <h3 class="card-title">RARE</h3><br>
                <img src="image/rare-for-accessories.png" alt="rare" style="width:auto;">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
           
                <div class="form-group">
                  <label for="exampleInputBorder">Platinum</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="rare_platinum" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Anima Stone</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="rare_anima" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputRounded0">Illuminating Fragment</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="rare_illuminating" min="0" max="999999999" value="0" required>
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
           
            <!-- /.card -->

             <!-- general form elements -->
             <div class="card card-warning">
             <div class="card-header">
                <h3 class="card-title">LEGENDARY</h3><br>
                <img src="image/legendary-for-accessories.png" alt="legendary" style="width:auto;">
    
              </div>
              <!-- /.card-header -->
              <div class="card-body">
           
                <div class="form-group">
                  <label for="exampleInputBorder">Platinum</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="legendary_platinum" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Anima Stone</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="legendary_anima" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputRounded0">Illuminating Fragment</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="legendary_illuminating" min="0" max="999999999" value="0" required>
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>

        

            <!-- /.card -->  
            <div class="row no-print">
                <div class="col-12">
             
                  <button type="submit" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Save Project
                  </button>
                </div>
      </div><!-- /.container-fluid -->
</form>
      
    </section>
    <!-- /.content -->
    
  </div>
  
<?php 

include("footer.php");
?>    