<?php 
include("header-title.php");
include("header.php");

include("../settings-db/config.php");

$id = $_GET['id'];

$category = $_GET['category'];

    
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">View Crafting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="item-project.php">Item Projects </a></li>
              <li class="breadcrumb-item active">View Crafting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">ITEM PROGRESS</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
          
<?php

            if($category == 'Weapon')
            {
                $SelectWeaponQuery = "SELECT * FROM craft_weapon_legendary WHERE id = '$id'";
                $ResultWeaponQuery = $conn->query($SelectWeaponQuery);
                
                if($ResultWeaponQuery->num_rows > 0)
                {

                    while($row = $ResultWeaponQuery->fetch_assoc())
                    {

                    $project_name = $row['project_name'];
                    $glittering = $row['glittering'];
                    $darksteel = $row['darksteel'];
                    $copper = $row['copper'];

                    $total_legendary_steel = $row['total_legendary_steel'];
                    $total_legendary_evil = $row['total_legendary_evil'];
                    $total_legendary_moon = $row['total_legendary_moon'];



                    $total_glittering_needed_for_materials_you_have = $row['total_glittering_needed_for_materials_you_have'];
                    $a3 = number_format(abs($total_glittering_needed_for_materials_you_have));
                    if($total_glittering_needed_for_materials_you_have >= 0)
                    {
                        $total_glittering_needed_for_materials_you_have2 = 0;
                        $total_glittering_needed_for_materials_you_have1 = "<font style='color:green;''>$total_glittering_needed_for_materials_you_have2</font>";     
                    
                        
                    }
                    else
                    {
                        $total_glittering_needed_for_materials_you_have1 = "<font style='color:red;''>$a3</font>";     
                    
                    }


                    $total_darksteel_needed_for_materials_you_have = $row['total_darksteel_needed_for_materials_you_have'];
                    $a2 = number_format(abs($total_darksteel_needed_for_materials_you_have));
                    if($total_darksteel_needed_for_materials_you_have >= 0)
                    {
                        $total_darksteel_needed_for_materials_you_have1 = 0;
                    }
                    else
                    {
                        $total_darksteel_needed_for_materials_you_have1 = "<font style='color:red;''>$a2</font>";

                    }

                    $total_copper_needed_for_materials_you_have = $row['total_copper_needed_for_materials_you_have'];
                    $a1 = number_format(abs($total_copper_needed_for_materials_you_have));
                    if($total_copper_needed_for_materials_you_have >= 0)
                    {
                        $total_copper_needed_for_materials_you_have1 = 0;
                    }
                    else
                    {
                        $total_copper_needed_for_materials_you_have1 = "<font style='color:red;''>$a1</font>";     
                    }


                    $overall_percentage = $row['overall_percentage'] * 100;
                    if($overall_percentage >= 100)
                    {
                        $overall_percentage1 = 100;
                    }
                    elseif($overall_percentage <= 99.99)
                    {
                        $overall_percentage1 = $row['overall_percentage'] * 100;
                    }
                    else
                    {
                        echo'null';
                    }
                   
                    
                 

                    $legendary_steel_percentage = $row['legendary_steel_percentage'] * 100;
                    if($legendary_steel_percentage >= 100)
                    {
                        $legendary_steel_percentage1 = 100;
                    }
                    else
                    {
                        $legendary_steel_percentage1 = $row['legendary_steel_percentage'] * 100;
                    }

                    $legendary_evil_percentage = $row['legendary_evil_percentage'] * 100;
                    if($legendary_evil_percentage >= 100)
                    {
                        $legendary_evil_percentage1 = 100;
                    }
                    else
                    {
                        $legendary_evil_percentage1 = $row['legendary_evil_percentage'] * 100;
                    }

                    $legendary_moon_percentage = $row['legendary_moon_percentage'] * 100;
                    if($legendary_moon_percentage >= 100)
                    {
                        $legendary_moon_percentage1 = 100;
                    }
                    else
                    {
                        $legendary_moon_percentage1 = $row['legendary_moon_percentage'] * 100;
                    }
                    
                    $total_legendary_steel1 = $row['total_legendary_steel'] - 300;    
                    $needed1 = number_format(abs($total_legendary_steel1));
                    if($total_legendary_steel1 >= 0)
                    {
                        $needed_legend_steel = 0;
                    }
                    else
                    {
                        $needed_legend_steel = $needed1;     
                    }


                    $total_legendary_evil1 = $row['total_legendary_evil'] - 100;
                    $needed2 = number_format(abs($total_legendary_evil1));
                    if($total_legendary_evil1 >= 0)
                    {
                        $needed_legend_evil = 0;
                    }
                    else
                    {
                        $needed_legend_evil = $needed2;     
                    }


                    $total_legendary_moon1 = $row['total_legendary_moon'] - 100;
                    $needed3 = number_format(abs($total_legendary_moon1));
                    if($total_legendary_moon1 >= 0)
                    {
                        $needed_legend_moon = 0;
                    }
                    else
                    {
                        $needed_legend_moon = $needed3;     
                    }



                    $epic_steel_needed1 = number_format($row['epic_steel_needed']);
                    if($epic_steel_needed1 >= 0)
                    {
                        $epic_steel_needed = "<font style='color:red;''>$epic_steel_needed1</font>";   
                    
                        
                    }
                    else
                    {   
                        $epic_steel_needed2 = 0;
                        $epic_steel_needed = "<font style='color:green;''>$epic_steel_needed2</font>";    
                       
                    
                    }

                    $epic_evil_needed1 = number_format($row['epic_evil_needed']);
                    if($epic_evil_needed1 >= 0)
                    {
                        $epic_evil_needed = "<font style='color:red;''>$epic_evil_needed1</font>";   
                    
                        
                    }
                    else
                    {   
                        $epic_evil_needed2 = 0;
                        $epic_evil_needed = "<font style='color:green;''>$epic_evil_needed2</font>";    
                       
                    
                    }

                    $epic_moon_needed1 = number_format($row['epic_moon_needed']);
                    if($epic_moon_needed1 >= 0)
                    {
                        $epic_moon_needed = "<font style='color:red;''>$epic_moon_needed1</font>";   
                    
                        
                    }
                    else
                    {   
                        $epic_moon_needed2 = 0;
                        $epic_moon_needed = "<font style='color:green;''>$epic_moon_needed2</font>";    
                       
                    
                    }


                    $if_epic_total_glittering_needed1 = number_format($row['if_epic_total_glittering_needed']);
                    if($if_epic_total_glittering_needed1 >= 0)
                    {
                        $if_epic_total_glittering_needed = "<font style='color:red;''>$if_epic_total_glittering_needed1</font>";   
                    
                        
                    }
                    else
                    {   
                        $if_epic_total_glittering_needed2 = 0;
                        $if_epic_total_glittering_needed = "<font style='color:green;''>$if_epic_total_glittering_needed2</font>";    
                       
                    }

                    $if_epic_total_darksteel_needed1 = number_format($row['if_epic_total_darksteel_needed']);
                    if($if_epic_total_darksteel_needed1 >= 0)
                    {
                        $if_epic_total_darksteel_needed = "<font style='color:red;''>$if_epic_total_darksteel_needed1</font>";   
                    
                        
                    }
                    else
                    {   
                        $if_epic_total_darksteel_needed2 = 0;
                        $if_epic_total_darksteel_needed = "<font style='color:green;''>$if_epic_total_darksteel_needed2</font>";    
                       
                    }

                    $if_epic_total_copper_needed1 = number_format($row['if_epic_total_copper_needed']);
                    if($if_epic_total_copper_needed1 >= 0)
                    {
                        $if_epic_total_copper_needed = "<font style='color:red;''>$if_epic_total_copper_needed1</font>";   
                    
                        
                    }
                    else
                    {   
                        $if_epic_total_copper_needed2 = 0;
                        $if_epic_total_copper_needed = "<font style='color:green;''>$if_epic_total_copper_needed2</font>";    
                       
                    }


                    echo'

                                    <div class="col-md-12">
                                <p class="text-center">
                                <strong>'.$project_name.'</strong><br>
                                <small>MATERIALS OWNED IF CRAFTED</small>
                                </p>

                                <div class="progress-group">
                                Legendary Steel
                                <span class="float-right"><b>'.$total_legendary_steel.'</b>/300</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" style="width: '.$legendary_steel_percentage1.'%"></div>
                                </div>
                                </div>
                                <!-- /.progress-group -->

                                <div class="progress-group">
                                Legendary Evil Minded Orb
                                <span class="float-right"><b>'.$total_legendary_evil.'</b>/100</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger" style="width: '.$legendary_evil_percentage1.'%"></div>
                                </div>
                                </div>

                                <!-- /.progress-group -->
                                <div class="progress-group">
                                <span class="progress-text">Legendary Moon Shadow Stone</span>
                                <span class="float-right"><b>'.$total_legendary_moon.'</b>/100</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success" style="width: '.$legendary_moon_percentage1.'%"></div>
                                </div>
                                </div>
                            </div>
                            <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./card-body -->
                        <div class="card-footer">

                        <p class="text-center">
                        <strong>TOTAL RESOURCES NEEDED FOR MATERIALS YOU HAVE</strong>
                        <br>
                        <small>MATERIALS YOU OWNED</small>
                        </p>
                            <div class="row">
                            <div class="col-sm-3 col-6">
                            
                                <div class="description-block border-right">
                                <img src="image/silver.png" alt="silver" style="width:90px;border-radius:50%;">
                                <h5 class="description-header">'.$total_copper_needed_for_materials_you_have1.'</h5>
                                <span class="description-text">TOTAL Copper Needed</span><br>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-3 col-6">
                                <div class="description-block border-right">
                                <img src="image/ds.png" alt="ds" style="width:90px;border-radius:50%;">
                                <h5 class="description-header">'.$total_darksteel_needed_for_materials_you_have1.'</h5>
                                <span class="description-text">TOTAL Dark Steel Needed</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-3 col-6">
                                <div class="description-block border-right">
                                <img src="image/glittering.png" alt="glit" style="width:90px;border-radius:50%;">
                                <h5 class="description-header">'.$total_glittering_needed_for_materials_you_have1.'</h5>
                                <span class="description-text">TOTAL Glittering Needed</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-3 col-6">
                                <div class="description-block">
                                <img src="image/scale.png" alt="silver" style="width:90px;border-radius:50%;">
                                <h5 class="description-header">'.$overall_percentage1.'%</h5>
                                <span class="description-text">GOAL COMPLETIONS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            </div>

                            
                        <br>
                            <div class="card-footer">

                            <p class="text-center">
                            <strong>TOTAL MATERIALS NEEDED</strong>
                            <br>
                            <small>FROM EPIC</small>
                            </p>
                                <div class="row">
                                <div class="col-sm-4 col-6">
                                
                                    <div class="description-block border-right">
                                    <img src="image/steel.png" alt="steel" style="width:90px;border-radius:50%;">
                                    <h5 class="description-header">'.$epic_steel_needed.'</h5>
                                    <span class="description-text">TOTAL Epic Steel NEEDED</span><br>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 col-6">
                                    <div class="description-block border-right">
                                    <img src="image/evil.png" alt="evil" style="width:90px;border-radius:50%;">
                                    <h5 class="description-header">'.$epic_evil_needed.'</h5>
                                    <span class="description-text">TOTAL EPIC EVIL Needed</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 col-6">
                                    <div class="description-block">
                                    <img src="image/moon.png" alt="moon" style="width:90px;border-radius:50%;">
                                    <h5 class="description-header">'.$epic_moon_needed.'</h5>
                                    <span class="description-text">TOTAL EPIC MOON Needed</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            
                                
                                </div>


                                <br>
                            <div class="card-footer">

                            <p class="text-center">
                            <strong>TOTAL RESOURCES NEEDED</strong>
                            <br>
                            <small>FROM EPIC</small>
                            </p>
                                <div class="row">
                                <div class="col-sm-4 col-6">
                                
                                    <div class="description-block border-right">
                                    <img src="image/silver.png" alt="silver" style="width:90px;border-radius:50%;">
                                    <h5 class="description-header">'.$if_epic_total_copper_needed.'</h5>
                                    <span class="description-text">TOTAL COPPER NEEDED</span><br>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 col-6">
                                    <div class="description-block border-right">
                                    <img src="image/ds.png" alt="ds" style="width:90px;border-radius:50%;">
                                    <h5 class="description-header">'.$if_epic_total_darksteel_needed.'</h5>
                                    <span class="description-text">TOTAL DARKSTEEL Needed</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 col-6">
                                    <div class="description-block">
                                    <img src="image/glittering.png" alt="glit" style="width:90px;border-radius:50%;">
                                    <h5 class="description-header">'.$if_epic_total_glittering_needed.'</h5>
                                    <span class="description-text">TOTAL GLITTERING Needed</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            
                                
                                </div>
                                <!-- /.row -->
                                </div>
                                <!-- /.card-footer -->
                              </div>
                              <!-- /.card -->
                            </div>
                            <!-- /.col -->
                            
                          </div>
                          <!-- /.row -->
                  

                                <!-- Main content -->

                                <div class="row">
                                         <div class="col-md-12">
                                           <div class="card">
                                             <div class="card-header">
                                               <h5 class="card-title">ITEM SUMMARY</h5>
                               
                                               <div class="card-tools">
                                                 <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                   <i class="fas fa-minus"></i>
                                                 </button>
                                               </div>
                                             </div>
                                             <!-- /.card-header -->
                                             <div class="card-body">
                                               <div class="row">
                                                   
                                <section class="content col-md-12">
                                     <div class="container-fluid">  
                                     <div class="card">
                                     <br>
                                        <p class="text-center">
                                <strong>ITEM COMPARISON</strong>
                                <br>
                                <small>OWNED vs NEEDED</small>
                                </p>                                                                  
                                             <!-- /.card-header -->
                                             <div class="card-body">
                                               <div class="row">
                                                 <div class="col-md-12" style="background-color: white;">
                                         
                                                   <canvas id="myChart_steel"></canvas>
                                                   <canvas id="myChart_steel1"></canvas>
                                  
                                                   <!-- ./chart-responsive -->
                                                 </div>
                                               </div>
                                               <!-- /.row -->
                                             </div>
                                             <!-- /.card-body -->
                                           </div>
                               
                                       </div>
                                       <!-- /.row -->
                               
                                     </div>
                                     <!-- /.container-fluid -->
                                   </section>

                            
    
                            
                       '; 
                    }

                }
            }
            elseif($category == 'Accessories')
            {
                $SelectAccessoriesQuery = "SELECT * FROM craft_accessories_legendary WHERE id = '$id'";
                $ResultAccessoriesQuery = $conn->query($SelectAccessoriesQuery);
                
                if($ResultAccessoriesQuery->num_rows > 0)
                {

                    while($row = $ResultAccessoriesQuery->fetch_assoc())
                    {
                        
                    
                        $project_name = $row['project_name'];
                        $glittering = $row['glittering'];
                        $darksteel = $row['darksteel'];
                        $copper = $row['copper'];
    
                        $total_legendary_platinum = $row['total_legendary_platinum'];
                        $total_legendary_anima = $row['total_legendary_anima'];
                        $total_legendary_illuminating = $row['total_legendary_illuminating'];
    
    
    
                        $total_glittering_needed_for_materials_you_have = $row['total_glittering_needed_for_materials_you_have'];
                        $a3 = number_format(abs($total_glittering_needed_for_materials_you_have));
                        if($total_glittering_needed_for_materials_you_have >= 0)
                        {
                            $total_glittering_needed_for_materials_you_have2 = 0;
                            $total_glittering_needed_for_materials_you_have1 = "<font style='color:green;''>$total_glittering_needed_for_materials_you_have2</font>";     
                        
                            
                        }
                        else
                        {
                            $total_glittering_needed_for_materials_you_have1 = "<font style='color:red;''>$a3</font>";     
                        
                        }
    
    
                        $total_darksteel_needed_for_materials_you_have = $row['total_darksteel_needed_for_materials_you_have'];
                        $a2 = number_format(abs($total_darksteel_needed_for_materials_you_have));
                        if($total_darksteel_needed_for_materials_you_have >= 0)
                        {
                            $total_darksteel_needed_for_materials_you_have1 = 0;
                        }
                        else
                        {
                            $total_darksteel_needed_for_materials_you_have1 = "<font style='color:red;''>$a2</font>";
    
                        }
    
                        $total_copper_needed_for_materials_you_have = $row['total_copper_needed_for_materials_you_have'];
                        $a1 = number_format(abs($total_copper_needed_for_materials_you_have));
                        if($total_copper_needed_for_materials_you_have >= 0)
                        {
                            $total_copper_needed_for_materials_you_have1 = 0;
                        }
                        else
                        {
                            $total_copper_needed_for_materials_you_have1 = "<font style='color:red;''>$a1</font>";     
                        }
    
    
                        $overall_percentage = $row['overall_percentage'] * 100;
                        if($overall_percentage >= 100)
                        {
                            $overall_percentage1 = 100;
                        }
                        elseif($overall_percentage <= 99.99)
                        {
                            $overall_percentage1 = $row['overall_percentage'] * 100;
                        }
                        else
                        {
                            echo'null';
                        }
                       
                        
                     
    
                        $legendary_platinum_percentage = $row['legendary_platinum_percentage'] * 100;
                        if($legendary_platinum_percentage >= 100)
                        {
                            $legendary_platinum_percentage1 = 100;
                        }
                        else
                        {
                            $legendary_platinum_percentage1 = $row['legendary_platinum_percentage'] * 100;
                        }
    
                        $legendary_anima_percentage = $row['legendary_anima_percentage'] * 100;
                        if($legendary_anima_percentage >= 100)
                        {
                            $legendary_anima_percentage1 = 100;
                        }
                        else
                        {
                            $legendary_anima_percentage1 = $row['legendary_anima_percentage'] * 100;
                        }
    
                        $legendary_illuminating_percentage = $row['legendary_illuminating_percentage'] * 100;
                        if($legendary_illuminating_percentage >= 100)
                        {
                            $legendary_illuminating_percentage1 = 100;
                        }
                        else
                        {
                            $legendary_illuminating_percentage1 = $row['legendary_illuminating_percentage'] * 100;
                        }
                        
                        $total_legendary_platinum1 = $row['total_legendary_platinum'] - 300;    
                        $needed1 = number_format(abs($total_legendary_platinum1));
                        if($total_legendary_platinum1 >= 0)
                        {
                            $needed_legend_platinum = 0;
                        }
                        else
                        {
                            $needed_legend_platinum = $needed1;     
                        }
    
    
                        $total_legendary_anima1 = $row['total_legendary_anima'] - 100;
                        $needed2 = number_format(abs($total_legendary_anima1));
                        if($total_legendary_anima1 >= 0)
                        {
                            $needed_legend_anima = 0;
                        }
                        else
                        {
                            $needed_legend_anima = $needed2;     
                        }
    
    
                        $total_legendary_illuminating1 = $row['total_legendary_illuminating'] - 100;
                        $needed3 = number_format(abs($total_legendary_illuminating1));
                        if($total_legendary_illuminating1 >= 0)
                        {
                            $needed_legend_illuminating = 0;
                        }
                        else
                        {
                            $needed_legend_illuminating = $needed3;     
                        }
    
    
    
                        $epic_platinum_needed1 = number_format($row['epic_platinum_needed']);
                        if($epic_platinum_needed1 >= 0)
                        {
                            $epic_platinum_needed = "<font style='color:red;''>$epic_platinum_needed1</font>";   
                        
                            
                        }
                        else
                        {   
                            $epic_platinum_needed2 = 0;
                            $epic_platinum_needed = "<font style='color:green;''>$epic_platinum_needed2</font>";    
                           
                        
                        }
    
                        $epic_anima_needed1 = number_format($row['epic_anima_needed']);
                        if($epic_anima_needed1 >= 0)
                        {
                            $epic_anima_needed = "<font style='color:red;''>$epic_anima_needed1</font>";   
                        
                            
                        }
                        else
                        {   
                            $epic_anima_needed2 = 0;
                            $epic_anima_needed = "<font style='color:green;''>$epic_anima_needed2</font>";    
                           
                        
                        }
    
                        $epic_illuminating_needed1 = number_format($row['epic_illuminating_needed']);
                        if($epic_illuminating_needed1 >= 0)
                        {
                            $epic_illuminating_needed = "<font style='color:red;''>$epic_illuminating_needed1</font>";   
                        
                            
                        }
                        else
                        {   
                            $epic_illuminating_needed2 = 0;
                            $epic_illuminating_needed = "<font style='color:green;''>$epic_illuminating_needed2</font>";    
                           
                        
                        }
    
    
                        $if_epic_total_glittering_needed1 = number_format($row['if_epic_total_glittering_needed']);
                        if($if_epic_total_glittering_needed1 >= 0)
                        {
                            $if_epic_total_glittering_needed = "<font style='color:red;''>$if_epic_total_glittering_needed1</font>";   
                        
                            
                        }
                        else
                        {   
                            $if_epic_total_glittering_needed2 = 0;
                            $if_epic_total_glittering_needed = "<font style='color:green;''>$if_epic_total_glittering_needed2</font>";    
                           
                        }
    
                        $if_epic_total_darksteel_needed1 = number_format($row['if_epic_total_darksteel_needed']);
                        if($if_epic_total_darksteel_needed1 >= 0)
                        {
                            $if_epic_total_darksteel_needed = "<font style='color:red;''>$if_epic_total_darksteel_needed1</font>";   
                        
                            
                        }
                        else
                        {   
                            $if_epic_total_darksteel_needed2 = 0;
                            $if_epic_total_darksteel_needed = "<font style='color:green;''>$if_epic_total_darksteel_needed2</font>";    
                           
                        }
    
                        $if_epic_total_copper_needed1 = number_format($row['if_epic_total_copper_needed']);
                        if($if_epic_total_copper_needed1 >= 0)
                        {
                            $if_epic_total_copper_needed = "<font style='color:red;''>$if_epic_total_copper_needed1</font>";   
                        
                            
                        }
                        else
                        {   
                            $if_epic_total_copper_needed2 = 0;
                            $if_epic_total_copper_needed = "<font style='color:green;''>$if_epic_total_copper_needed2</font>";    
                           
                        }
    
    
                        echo'
    
                                        <div class="col-md-12">
                                    <p class="text-center">
                                    <strong>'.$project_name.'</strong><br>
                                    <small>MATERIALS OWNED IF CRAFTED</small>
                                    </p>
    
                                    <div class="progress-group">
                                    Legendary Platinum
                                    <span class="float-right"><b>'.$total_legendary_platinum.'</b>/300</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-primary" style="width: '.$legendary_platinum_percentage1.'%"></div>
                                    </div>
                                    </div>
                                    <!-- /.progress-group -->
    
                                    <div class="progress-group">
                                    Legendary Anima Stone
                                    <span class="float-right"><b>'.$total_legendary_anima.'</b>/100</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger" style="width: '.$legendary_anima_percentage1.'%"></div>
                                    </div>
                                    </div>
    
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                    <span class="progress-text">Legendary Illuminating Fragment</span>
                                    <span class="float-right"><b>'.$total_legendary_illuminating.'</b>/100</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success" style="width: '.$legendary_illuminating_percentage1.'%"></div>
                                    </div>
                                    </div>
                                </div>
                                <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./card-body -->
                            <div class="card-footer">
    
                            <p class="text-center">
                            <strong>TOTAL RESOURCES NEEDED FOR MATERIALS YOU HAVE</strong>
                            <br>
                            <small>MATERIALS YOU OWNED</small>
                            </p>
                                <div class="row">
                                <div class="col-sm-3 col-6">
                                
                                    <div class="description-block border-right">
                                    <img src="image/silver.png" alt="silver" style="width:90px;border-radius:50%;">
                                    <h5 class="description-header">'.$total_copper_needed_for_materials_you_have1.'</h5>
                                    <span class="description-text">TOTAL Copper Needed</span><br>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                    <img src="image/ds.png" alt="ds" style="width:90px;border-radius:50%;">
                                    <h5 class="description-header">'.$total_darksteel_needed_for_materials_you_have1.'</h5>
                                    <span class="description-text">TOTAL Dark Steel Needed</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                    <img src="image/glittering.png" alt="glit" style="width:90px;border-radius:50%;">
                                    <h5 class="description-header">'.$total_glittering_needed_for_materials_you_have1.'</h5>
                                    <span class="description-text">TOTAL Glittering Needed</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block">
                                    <img src="image/horn.png" alt="horn" style="width:90px;border-radius:50%;">
                                    <h5 class="description-header">'.$overall_percentage1.'%</h5>
                                    <span class="description-text">GOAL COMPLETIONS</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                </div>
    
                                
                            <br>
                                <div class="card-footer">
    
                                <p class="text-center">
                                <strong>TOTAL MATERIALS NEEDED</strong>
                                <br>
                                <small>FROM EPIC</small>
                                </p>
                                    <div class="row">
                                    <div class="col-sm-4 col-6">
                                    
                                        <div class="description-block border-right">
                                        <img src="image/epic-platinum.png" alt="platinum" style="width:90px;border-radius:50%;">
                                        <h5 class="description-header">'.$epic_platinum_needed.'</h5>
                                        <span class="description-text">TOTAL Epic PLATINUM NEEDED</span><br>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 col-6">
                                        <div class="description-block border-right">
                                        <img src="image/epic-anima.png" alt="anima" style="width:90px;border-radius:50%;">
                                        <h5 class="description-header">'.$epic_anima_needed.'</h5>
                                        <span class="description-text">TOTAL EPIC ANIMA Needed</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 col-6">
                                        <div class="description-block">
                                        <img src="image/epic-illuminating.png" alt="illuminating" style="width:90px;border-radius:50%;">
                                        <h5 class="description-header">'.$epic_illuminating_needed.'</h5>
                                        <span class="description-text">TOTAL EPIC ILLUMINATING Needed</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                
                                    
                                    </div>
    
    
                                    <br>
                                <div class="card-footer">
    
                                <p class="text-center">
                                <strong>TOTAL RESOURCES NEEDED</strong>
                                <br>
                                <small>FROM EPIC</small>
                                </p>
                                    <div class="row">
                                    <div class="col-sm-4 col-6">
                                    
                                        <div class="description-block border-right">
                                        <img src="image/silver.png" alt="silver" style="width:90px;border-radius:50%;">
                                        <h5 class="description-header">'.$if_epic_total_copper_needed.'</h5>
                                        <span class="description-text">TOTAL COPPER NEEDED</span><br>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 col-6">
                                        <div class="description-block border-right">
                                        <img src="image/ds.png" alt="ds" style="width:90px;border-radius:50%;">
                                        <h5 class="description-header">'.$if_epic_total_darksteel_needed.'</h5>
                                        <span class="description-text">TOTAL DARKSTEEL Needed</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 col-6">
                                        <div class="description-block">
                                        <img src="image/glittering.png" alt="glit" style="width:90px;border-radius:50%;">
                                        <h5 class="description-header">'.$if_epic_total_glittering_needed.'</h5>
                                        <span class="description-text">TOTAL GLITTERING Needed</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                
                                    
                                    </div>
                                    <!-- /.row -->
                                    </div>
                                    <!-- /.card-footer -->
                                  </div>
                                  <!-- /.card -->
                                </div>
                                <!-- /.col -->
                                
                              </div>
                              <!-- /.row -->
                      
    
                                    <!-- Main content -->
    
                                    <div class="row">
                                             <div class="col-md-12">
                                               <div class="card">
                                                 <div class="card-header">
                                                   <h5 class="card-title">ITEM SUMMARY</h5>
                                   
                                                   <div class="card-tools">
                                                     <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                       <i class="fas fa-minus"></i>
                                                     </button>
                                                   </div>
                                                 </div>
                                                 <!-- /.card-header -->
                                                 <div class="card-body">
                                                   <div class="row">
                                                       
                                    <section class="content col-md-12">
                                         <div class="container-fluid">  
                                         <div class="card">
                                         <br>
                                            <p class="text-center">
                                    <strong>ITEM COMPARISON</strong>
                                    <br>
                                    <small>OWNED vs NEEDED</small>
                                    </p>                                                                  
                                                 <!-- /.card-header -->
                                                 <div class="card-body">
                                                   <div class="row">
                                                     <div class="col-md-12" style="background-color: white;">
                                             
                                                       <canvas id="myChart_platinum"></canvas>
                                                       <canvas id="myChart_platinum1"></canvas>
                                      
                                                       <!-- ./chart-responsive -->
                                                     </div>
                                                   </div>
                                                   <!-- /.row -->
                                                 </div>
                                                 <!-- /.card-body -->
                                               </div>
                                   
                                           </div>
                                           <!-- /.row -->
                                   
                                         </div>
                                         <!-- /.container-fluid -->
                                       </section>
    
                                
        
                                
                           '; 
                        }
    
                    }
                }
                  

                ?>
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart_steel").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ["[L] STEEL", "[L] EVIL", "[L] MOON"],
        datasets: [{
            label: 'OWNED',
            data: [<?php echo $total_legendary_steel; ?>, <?php echo $total_legendary_evil; ?>, <?php echo $total_legendary_moon; ?>],
            backgroundColor: 'rgba(0, 0, 255, 0.3)',
            borderColor: [
                'rgba(0, 0, 255, 1)',
            ],
            borderWidth: 1
        },
        {
            label: 'NEEDED',
            data: [<?php echo $needed_legend_steel; ?>, <?php echo $needed_legend_evil; ?>, <?php echo $needed_legend_moon; ?>],
            backgroundColor: 'rgba(255, 0, 0, 0.3)',
            borderColor: [
                'rgba(255, 0, 0, 1)',
            ],
            borderWidth: 1
        }]
    },   
});
</script>

<script>
      var ctx = document.getElementById("myChart_steel1").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["[L] EVIL", "[L] MOON"],
        datasets: [{
            label: 'OWNED',
            data: [<?php echo $total_legendary_evil; ?>, <?php echo $total_legendary_moon; ?>],
            backgroundColor: 'rgba(0, 0, 255, 0.3)',
            borderColor: [
                'rgba(0, 0, 255, 1)',
            ],
            borderWidth: 1
        },
        {
            label: 'NEEDED',
            data: [<?php echo $needed_legend_evil; ?>, <?php echo $needed_legend_moon; ?>],
            backgroundColor: 'rgba(255, 0, 0, 0.3)',
            borderColor: [
                'rgba(255, 0, 0, 1)',
            ],
            borderWidth: 1
        }]
    },   
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true,
                    min: 0,
                    max: 100,
                    stepSize: 10,
                }
            }]
        }
    }
});
</script>


<script>
var ctx = document.getElementById("myChart_platinum").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ["[L] PLATINUM", "[L] ANIMA", "[L] ILLUMINATING"],
        datasets: [{
            label: 'OWNED',
            data: [<?php echo $total_legendary_platinum; ?>, <?php echo $total_legendary_anima; ?>, <?php echo $total_legendary_illuminating; ?>],
            backgroundColor: 'rgba(0, 0, 255, 0.3)',
            borderColor: [
                'rgba(0, 0, 255, 1)',
            ],
            borderWidth: 1
        },
        {
            label: 'NEEDED',
            data: [<?php echo $needed_legend_platinum; ?>, <?php echo $needed_legend_anima; ?>, <?php echo $needed_legend_illuminating; ?>],
            backgroundColor: 'rgba(255, 0, 0, 0.3)',
            borderColor: [
                'rgba(255, 0, 0, 1)',
            ],
            borderWidth: 1
        }]
    },   
});
</script>

<script>
      var ctx = document.getElementById("myChart_platinum1").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["[L] ANIMA", "[L] ILLUMINATING"],
        datasets: [{
            label: 'OWNED',
            data: [<?php echo $total_legendary_anima; ?>, <?php echo $total_legendary_illuminating; ?>],
            backgroundColor: 'rgba(0, 0, 255, 0.3)',
            borderColor: [
                'rgba(0, 0, 255, 1)',
            ],
            borderWidth: 1
        },
        {
            label: 'NEEDED',
            data: [<?php echo $needed_legend_anima; ?>, <?php echo $needed_legend_illuminating; ?>],
            backgroundColor: 'rgba(255, 0, 0, 0.3)',
            borderColor: [
                'rgba(255, 0, 0, 1)',
            ],
            borderWidth: 1
        }]
    },   
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true,
                    min: 0,
                    max: 100,
                    stepSize: 10,
                }
            }]
        }
    }
});
</script>
   

<?php 
include("footer.php");
?>   