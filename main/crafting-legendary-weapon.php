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
            <h1>Crafting Weapon [Legendary]</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Weapon</li>
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
<form action="insert-crafting-legendary-weapon-process.php" method="POST">
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
                <img src="image/uc-for-weap.png" alt="uc" style="width:auto;">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
           
                <div class="form-group">
                  <label for="exampleInputBorder">Steel</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="uc_steel" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Evil Minded Orb</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="uc_evil" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputRounded0">Moon Shadow Stone</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="uc_moon" min="0" max="999999999" value="0" required>
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

             <!-- general form elements -->
             <div class="card card-danger">
             <div class="card-header">
                <h3 class="card-title">EPIC</h3><br>
                <img src="image/epic-for-weap.png" alt="epic" style="width:auto;">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
           
                <div class="form-group">
                  <label for="exampleInputBorder">Steel</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="epic_steel" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Evil Minded Orb</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="epic_evil" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputRounded0">Moon Shadow Stone</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="epic_moon" min="0" max="999999999" value="0" required>
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
                <img src="image/rare-for-weap.png" alt="rare" style="width:auto;">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
           
                <div class="form-group">
                  <label for="exampleInputBorder">Steel</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="rare_steel" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Evil Minded Orb</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="rare_evil" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputRounded0">Moon Shadow Stone</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="rare_moon" min="0" max="999999999" value="0" required>
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
           
            <!-- /.card -->

             <!-- general form elements -->
             <div class="card card-warning">
             <div class="card-header">
                <h3 class="card-title">LEGENDARY</h3><br>
                <img src="image/legendary-for-weap.png" alt="legendary" style="width:auto;">
    
              </div>
              <!-- /.card-header -->
              <div class="card-body">
           
                <div class="form-group">
                  <label for="exampleInputBorder">Steel</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="legendary_steel" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Evil Minded Orb</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="legendary_evil" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputRounded0">Moon Shadow Stone</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="--" name="legendary_moon" min="0" max="999999999" value="0" required>
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