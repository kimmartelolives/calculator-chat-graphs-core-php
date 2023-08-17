<?php 
include("header-title.php");
include("header.php");
include("../settings-db/config.php");

$id = $_GET['id'];

$category = $_GET['category'];

$SelectItemQuery =
"
SELECT * FROM (SELECT * FROM craft_weapon_legendary UNION ALL SELECT * FROM craft_accessories_legendary) as cwca WHERE cwca.id = '$id' AND cwca.category = '$category'

";

$ResultItemQuery = $conn->query($SelectItemQuery);

  if($ResultItemQuery->num_rows > 0)
  {

    while($row = $ResultItemQuery->fetch_assoc())
    {


      $id1 = $row['id'];
      $category1 = $row['category'];

    
      if($category1 == 'Weapon')
      {
        $id = $row['id'];
        $project_name = $row['project_name'];
        $glittering = $row['glittering'];
        $darksteel = $row['darksteel'];
        $copper = $row['copper'];
        $uc_steel = $row['uc_steel'];
        $uc_evil = $row['uc_evil'];
        $uc_moon = $row['uc_moon'];
        $rare_steel = $row['rare_steel'];
        $rare_evil = $row['rare_evil'];
        $rare_moon = $row['rare_moon'];
        $epic_steel = $row['epic_steel'];
        $epic_evil = $row['epic_evil'];

        $epic_moon = $row['epic_moon'];
        $legendary_steel = $row['legendary_steel'];
        $legendary_evil	 = $row['legendary_evil'];
        $legendary_moon = $row['legendary_moon'];

        echo'

        
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
<form action="edit-crafting-legendary-weapon-process.php?id='.$id.'" method="POST">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Project Name</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <input type="text" class="form-control" value="'.$project_name.'" placeholder="Project Name" name="project_name" maxlength="50" required>
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
                    <input type="number" class="form-control" value="'.$glittering.'" placeholder="Glittering Powder" name="glittering" min="0" max="999999999" value="0" required>
                  </div>
                  <div class="col-4">
                  <label for="exampleInputBorderWidth2">Darksteel</label>
                    <input type="number" class="form-control" value="'.$darksteel.'" placeholder="Darksteel" name="darksteel" min="0" max="999999999" value="0" required>
                  </div>
                  <div class="col-4">
                  <label for="exampleInputBorderWidth2">Copper</label>
                    <input type="number" class="form-control" value="'.$copper.'" placeholder="Copper" name="copper" min="0" max="999999999" value="0" required>
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
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$uc_steel.'" placeholder="--" name="uc_steel" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Evil Minded Orb</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$uc_evil.'" placeholder="--" name="uc_evil" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputRounded0">Moon Shadow Stone</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$uc_moon.'" placeholder="--" name="uc_moon" min="0" max="999999999" value="0" required>
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
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$epic_steel.'" placeholder="--" name="epic_steel" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Evil Minded Orb</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$epic_evil.'" placeholder="--" name="epic_evil" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputRounded0">Moon Shadow Stone</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$epic_moon.'" placeholder="--" name="epic_moon" min="0" max="999999999" value="0" required>
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
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$rare_steel.'" placeholder="--" name="rare_steel" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Evil Minded Orb</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$rare_evil.'" placeholder="--" name="rare_evil" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputRounded0">Moon Shadow Stone</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$rare_moon.'" placeholder="--" name="rare_moon" min="0" max="999999999" value="0" required>
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
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$legendary_steel.'" placeholder="--" name="legendary_steel" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Evil Minded Orb</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$legendary_evil.'" placeholder="--" name="legendary_evil" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputRounded0">Moon Shadow Stone</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$legendary_moon.'" placeholder="--" name="legendary_moon" min="0" max="999999999" value="0" required>
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
  

        ';

        

      }
      elseif($category1 == "Accessories") //accessories
      {
        $id = $row['id'];
        $project_name = $row['project_name'];
        $glittering = $row['glittering'];
        $darksteel = $row['darksteel'];
        $copper = $row['copper'];
        $uc_platinum = $row['uc_steel'];
        $uc_anima = $row['uc_evil'];
        $uc_illuminating = $row['uc_moon'];
        $rare_platinum = $row['rare_steel'];
        $rare_anima = $row['rare_evil'];
        $rare_illuminating = $row['rare_moon'];
        $epic_platinum = $row['epic_steel'];
        $epic_anima = $row['epic_evil'];
        $epic_illuminating = $row['epic_moon'];
        $legendary_platinum = $row['legendary_steel'];
        $legendary_anima = $row['legendary_evil'];
        $legendary_illuminating = $row['legendary_moon'];


        echo'

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
<form action="edit-crafting-legendary-accessories-process.php?id='.$id.'" method="POST">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Project Name</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <input type="text" class="form-control" value="'.$project_name.'" placeholder="Project Name" name="project_name" maxlength="50" required>
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
                    <input type="number" class="form-control" value="'.$glittering.'" placeholder="Glittering Powder" name="glittering" min="0" max="999999999" value="0" required>
                  </div>
                  <div class="col-4">
                  <label for="exampleInputBorderWidth2">Darksteel</label>
                    <input type="number" class="form-control" value="'.$darksteel.'" placeholder="Darksteel" name="darksteel" min="0" max="999999999" value="0" required>
                  </div>
                  <div class="col-4">
                  <label for="exampleInputBorderWidth2">Copper</label>
                    <input type="number" class="form-control" value="'.$copper.'" placeholder="Copper" name="copper" min="0" max="999999999" value="0" required>
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
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$uc_platinum.'" placeholder="--" name="uc_platinum" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Anima Stone</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$uc_anima.'" placeholder="--" name="uc_anima" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputRounded0">Illuminating Fragment</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$uc_illuminating.'" placeholder="--" name="uc_illuminating" min="0" max="999999999" value="0" required>
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
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$epic_platinum.'" placeholder="--" name="epic_platinum" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Anima Stone</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$epic_anima.'" placeholder="--" name="epic_anima" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputRounded0">Illuminating Fragment</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$epic_illuminating.'" placeholder="--" name="epic_illuminating" min="0" max="999999999" value="0" required>
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
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$rare_platinum.'" placeholder="--" name="rare_platinum" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Anima Stone</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$rare_anima.'" placeholder="--" name="rare_anima" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputRounded0">Illuminating Fragment</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$rare_illuminating.'" placeholder="--" name="rare_illuminating" min="0" max="999999999" value="0" required>
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
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$legendary_platinum.'" placeholder="--" name="legendary_platinum" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Anima Stone</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$legendary_anima.'" placeholder="--" name="legendary_anima" min="0" max="999999999" value="0" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputRounded0">Illuminating Fragment</label>
                  <input type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" value="'.$legendary_illuminating.'" placeholder="--" name="legendary_illuminating" min="0" max="999999999" value="0" required>
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
        ';

      }
      else
      {
        
      }

      
    }
  }
?>

<?php 

include("footer.php");
?>    