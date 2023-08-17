<?php
session_start(); 

if(!isset($_SESSION['user']))
{
   
   echo "<script>						
   window.location.href='../index.php ';
   </script>";
}
$session = $_SESSION['user'];
include("../settings-db/config.php");

$project_name = $_POST['project_name'];

$owned_glittering = $_POST['glittering'];
$owned_darksteel = $_POST['darksteel'];
$owned_copper = $_POST['copper'];

$uc_steel = $_POST['uc_steel'];
$uc_evil = $_POST['uc_evil'];
$uc_moon = $_POST['uc_moon'];

$rare_steel = $_POST['rare_steel'];
$rare_evil = $_POST['rare_evil'];
$rare_moon = $_POST['rare_moon'];

$epic_steel = $_POST['epic_steel'];
$epic_evil = $_POST['epic_evil'];
$epic_moon = $_POST['epic_moon'];

$legendary_steel = $_POST['legendary_steel'];
$legendary_evil = $_POST['legendary_evil'];
$legendary_moon = $_POST['legendary_moon'];



// UNCOMMON UNCOMMON UNCOMMON UNCOMMON UNCOMMON
// UC TO RARE UC TO RARE UC TO RARE UC TO RARE 
// glit: 2 darksteel: 1000 copper: 2000

$uc_ds = 1000;
$uc_copper = 2000;
$uc_glit = 2;
$uc_to_rare = 10;


//Computation UC STEEL

//total_rare_steel
$total_uc_to_rare_steel = $uc_steel / $uc_to_rare;
//total_glit uc to rare
$total_uc_to_rare_glit_steel = $total_uc_to_rare_steel * $uc_glit;
//total_copper uc to rare
$total_uc_to_rare_copper_steel = $total_uc_to_rare_steel * $uc_copper;
//total_darksteel uc to rare
$total_uc_to_rare_darksteel_steel = $total_uc_to_rare_steel * $uc_ds;


//Computation UC EVIL

//total_rare_evil
$total_uc_to_rare_evil = $uc_evil / $uc_to_rare;
//total_glit to rare
$total_uc_to_rare_glit_evil = $total_uc_to_rare_evil * $uc_glit;
//total_copper to rare
$total_uc_to_rare_copper_evil = $total_uc_to_rare_evil * $uc_copper;
//total_darksteel to rare
$total_uc_to_rare_darksteel_evil = $total_uc_to_rare_evil * $uc_ds;


//Computation UC MOON

//total_rare_moon
$total_uc_to_rare_moon = $uc_moon / $uc_to_rare;
//total_glit to rare
$total_uc_to_rare_glit_moon = $total_uc_to_rare_moon * $uc_glit;
//total_copper to rare
$total_uc_to_rare_copper_moon = $total_uc_to_rare_moon * $uc_copper;
//total_darksteel to rare
$total_uc_to_rare_darksteel_moon = $total_uc_to_rare_moon * $uc_ds;



// RARE RARE RARE RARE RARE RARE RARE RARE
// RARE TO EPIC RARE TO EPIC RARE TO EPIC RARE TO EPIC
// glit: 25 darksteel: 5000 copper: 20000

$rare_ds = 5000;
$rare_copper = 20000;
$rare_glit = 25;
$rare_to_epic = 10;

//Computation RARE STEEL

//total_epic_steel
$total_rare_to_epic_steel = $rare_steel / $rare_to_epic;
//total_glit rare to epic
$total_rare_to_epic_glit_steel = $total_rare_to_epic_steel * $rare_glit;
//total_copper rare to epic
$total_rare_to_epic_copper_steel = $total_rare_to_epic_steel * $rare_copper;
//total_darksteel rare to epic
$total_rare_to_epic_darksteel_steel = $total_rare_to_epic_steel * $rare_ds;


//Computation RARE EVIL

//total_epic_evil
$total_rare_to_epic_evil = $rare_evil / $rare_to_epic;
//total_glit rare to epic
$total_rare_to_epic_glit_evil = $total_rare_to_epic_evil * $rare_glit;
//total_copper rare to epic
$total_rare_to_epic_copper_evil = $total_rare_to_epic_evil * $rare_copper;
//total_darksteel rare to epic
$total_rare_to_epic_darksteel_evil = $total_rare_to_epic_evil * $rare_ds;


//Computation RARE MOON

//total_epic_moon
$total_rare_to_epic_moon = $rare_moon / $rare_to_epic;
//total_glit rare to epic
$total_rare_to_epic_glit_moon = $total_rare_to_epic_moon * $rare_glit;
//total_copper rare to epic
$total_rare_to_epic_copper_moon = $total_rare_to_epic_moon * $rare_copper;
//total_darksteel rare to epic
$total_rare_to_epic_darksteel_moon = $total_rare_to_epic_moon * $rare_ds;



// EPIC EPIC EPIC EPIC EPIC EPIC EPIC EPIC EPIC EPIC
// EPIC TO LEGENDARY EPIC TO LEGENDARY EPIC TO LEGENDARY EPIC TO LEGENDARY
// glit: 125 darksteel: 25000 copper: 100000

$epic_ds = 25000;
$epic_copper = 100000;
$epic_glit = 125;
$epic_to_legendary = 10;

//Computation EPIC STEEL

//total_legendary_steel
$total_epic_to_legendary_steel = $epic_steel / $epic_to_legendary;
//total_glit rare to epic
$total_epic_to_legendary_glit_steel = $total_epic_to_legendary_steel * $epic_glit;
//total_copper rare to epic
$total_epic_to_legendary_copper_steel = $total_epic_to_legendary_steel * $epic_copper;
//total_darksteel rare to epic
$total_epic_to_legendary_darksteel_steel = $total_epic_to_legendary_steel * $epic_ds;


//Computation EPIC EVIL

//total_legendary_evil
$total_epic_to_legendary_evil = $epic_evil / $epic_to_legendary;
//total_glit rare to epic
$total_epic_to_legendary_glit_evil = $total_epic_to_legendary_evil * $epic_glit;
//total_copper rare to epic
$total_epic_to_legendary_copper_evil = $total_epic_to_legendary_evil * $epic_copper;
//total_darksteel rare to epic
$total_epic_to_legendary_darksteel_evil = $total_epic_to_legendary_evil * $epic_ds;


//Computation EPIC MOON

//total_legendary_moon
$total_epic_to_legendary_moon = $epic_moon / $epic_to_legendary;
//total_glit rare to epic
$total_epic_to_legendary_glit_moon = $total_epic_to_legendary_moon * $epic_glit;
//total_copper rare to epic
$total_epic_to_legendary_copper_moon = $total_epic_to_legendary_moon * $epic_copper;
//total_darksteel rare to epic
$total_epic_to_legendary_darksteel_moon = $total_epic_to_legendary_moon * $epic_ds;


//----------------------------------------------------
//RARE TO LEGENDARY (UC SECTION)


//rare to epic STEEL
$total_rare_to_epic_steelUC = $total_uc_to_rare_steel / $rare_to_epic;
$total_rare_to_epic_glit_steelUC = $total_rare_to_epic_steelUC * $rare_glit;
$total_rare_to_epic_copper_steelUC = $total_rare_to_epic_steelUC * $rare_copper;
$total_rare_to_epic_darksteel_steelUC = $total_rare_to_epic_steelUC * $rare_ds;
//epic to legendary STEEL
//total_legendary_steel
$total_epic_to_legendary_steelUC = $total_rare_to_epic_steelUC / $epic_to_legendary;
$total_epic_to_legendary_glit_steelUC = $total_epic_to_legendary_steelUC * $epic_glit;
$total_epic_to_legendary_copper_steelUC = $total_epic_to_legendary_steelUC * $epic_copper;
$total_epic_to_legendary_darksteel_steelUC = $total_epic_to_legendary_steelUC * $epic_ds;



//rare to epic EVIL
$total_rare_to_epic_evilUC = $total_uc_to_rare_evil / $rare_to_epic;
$total_rare_to_epic_glit_evilUC = $total_rare_to_epic_evilUC * $rare_glit;
$total_rare_to_epic_copper_evilUC = $total_rare_to_epic_evilUC * $rare_copper;
$total_rare_to_epic_darksteel_evilUC = $total_rare_to_epic_evilUC * $rare_ds;
//epic to legendary EVIL
//total_legendary_evil
$total_epic_to_legendary_evilUC = $total_rare_to_epic_evilUC / $epic_to_legendary;
$total_epic_to_legendary_glit_evilUC = $total_epic_to_legendary_evilUC * $epic_glit;
$total_epic_to_legendary_copper_evilUC = $total_epic_to_legendary_evilUC * $epic_copper;
$total_epic_to_legendary_darksteel_evilUC = $total_epic_to_legendary_evilUC * $epic_ds;



//rare to epic moon
$total_rare_to_epic_moonUC = $total_uc_to_rare_moon / $rare_to_epic;
$total_rare_to_epic_glit_moonUC = $total_rare_to_epic_moonUC * $rare_glit;
$total_rare_to_epic_copper_moonUC = $total_rare_to_epic_moonUC * $rare_copper;
$total_rare_to_epic_darksteel_moonUC = $total_rare_to_epic_moonUC * $rare_ds;
//epic to legendary MOON
//total_legendary_moon
$total_epic_to_legendary_moonUC = $total_rare_to_epic_moonUC / $epic_to_legendary;
$total_epic_to_legendary_glit_moonUC = $total_epic_to_legendary_moonUC * $epic_glit;
$total_epic_to_legendary_copper_moonUC = $total_epic_to_legendary_moonUC * $epic_copper;
$total_epic_to_legendary_darksteel_moonUC = $total_epic_to_legendary_moonUC * $epic_ds;


//----------------------------------------------------

//EPIC TO LEGENDARY (RARE SECTION)

//epic to legendary steel
$total_epic_to_legendary_steelR = $total_rare_to_epic_steel / $epic_to_legendary;
$total_epic_to_legendary_glit_steelR = $total_epic_to_legendary_steelR * $epic_glit;
$total_epic_to_legendary_copper_steelR = $total_epic_to_legendary_steelR * $epic_copper;
$total_epic_to_legendary_darksteel_steelR = $total_epic_to_legendary_steelR * $epic_ds;

//epic to legendary EVIL
$total_epic_to_legendary_evilR = $total_rare_to_epic_evil / $epic_to_legendary;
$total_epic_to_legendaryc_glit_evilR = $total_epic_to_legendary_evilR * $epic_glit;
$total_epic_to_legendary_copper_evilR = $total_epic_to_legendary_evilR * $epic_copper;
$total_epic_to_legendary_darksteel_evilR = $total_epic_to_legendary_evilR * $epic_ds;


//epic to legendary moon
$total_epic_to_legendary_moonR = $total_rare_to_epic_moon / $epic_to_legendary;
$total_epic_to_legendary_glit_moonR = $total_epic_to_legendary_moonR * $epic_glit;
$total_epic_to_legendary_copper_moonR = $total_epic_to_legendary_moonR * $epic_copper;
$total_epic_to_legendary_darksteel_moonR = $total_epic_to_legendary_moonR * $epic_ds;


//----------------------------------------------------
// TOTAL MATERIALS OWNED LEGENDARY
//STEEL
$overall_total_legendary_steel_round = $total_epic_to_legendary_steel + $total_epic_to_legendary_steelUC + $total_epic_to_legendary_steelR + $legendary_steel; 
$overall_total_legendary_evil_round = $total_epic_to_legendary_evil + $total_epic_to_legendary_evilUC + $total_epic_to_legendary_evilR + $legendary_evil;
$overall_total_legendary_moon_round = $total_epic_to_legendary_moon + $total_epic_to_legendary_moonUC + $total_epic_to_legendary_moonR + $legendary_moon;

$overall_total_legendary_steel = (int)$overall_total_legendary_steel_round;
$overall_total_legendary_evil = (int)$overall_total_legendary_evil_round;
$overall_total_legendary_moon = (int)$overall_total_legendary_moon_round;


$legendary_steel_percentage1 = $overall_total_legendary_steel / 300;
$legendary_steel_percentage = round($legendary_steel_percentage1, 2);

$legendary_evil_percentage1 = $overall_total_legendary_evil / 100;
$legendary_evil_percentage = round($legendary_evil_percentage1, 2);

$legendary_moon_percentage1 = $overall_total_legendary_moon / 100;
$legendary_moon_percentage = round($legendary_moon_percentage1, 2);

//overall progress percentage
$overall_progress_percentage1 = ($overall_total_legendary_steel + $overall_total_legendary_evil + $overall_total_legendary_moon) / 500;
$overall_progress_percentage = round($overall_progress_percentage1, 2);


$overall_total_expenses_glittering =
$total_uc_to_rare_glit_steel +
$total_uc_to_rare_glit_evil +
$total_uc_to_rare_glit_moon + 
$total_rare_to_epic_glit_steel +
$total_rare_to_epic_glit_evil +
$total_rare_to_epic_glit_moon +
$total_epic_to_legendary_glit_steel +
$total_epic_to_legendary_glit_evil +
$total_epic_to_legendary_glit_moon +
$total_rare_to_epic_glit_steelUC +
$total_epic_to_legendary_glit_steelUC +
$total_rare_to_epic_glit_evilUC +
$total_epic_to_legendary_glit_evilUC +
$total_rare_to_epic_glit_moonUC +
$total_epic_to_legendary_glit_moonUC +
$total_epic_to_legendary_glit_steelR +
$total_epic_to_legendaryc_glit_evilR +
$total_epic_to_legendary_glit_moonR;

//$overall_total_expenses_glittering_1 = (int)$overall_total_expenses_glittering;

$overall_total_expenses_copper =
$total_uc_to_rare_copper_steel +
$total_uc_to_rare_copper_evil +
$total_uc_to_rare_copper_moon +
$total_rare_to_epic_copper_steel +
$total_rare_to_epic_copper_evil +
$total_rare_to_epic_copper_moon +
$total_epic_to_legendary_copper_steel +
$total_epic_to_legendary_copper_evil +
$total_epic_to_legendary_copper_moon +
$total_rare_to_epic_copper_steelUC +
$total_epic_to_legendary_copper_steelUC +
$total_rare_to_epic_copper_evilUC +
$total_epic_to_legendary_copper_evilUC +
$total_rare_to_epic_copper_moonUC +
$total_epic_to_legendary_copper_moonUC +
$total_epic_to_legendary_copper_steelR +
$total_epic_to_legendary_copper_evilR +
$total_epic_to_legendary_copper_moonR;

//$overall_total_expenses_copper_1 = (int)$overall_total_expenses_copper;

$overall_total_expenses_darksteel =
$total_uc_to_rare_darksteel_steel +
$total_uc_to_rare_darksteel_evil +
$total_uc_to_rare_darksteel_moon +
$total_rare_to_epic_darksteel_steel +
$total_rare_to_epic_darksteel_evil +
$total_rare_to_epic_darksteel_moon +
$total_epic_to_legendary_darksteel_steel +
$total_epic_to_legendary_darksteel_evil +
$total_epic_to_legendary_darksteel_moon  +
$total_rare_to_epic_darksteel_moonUC +
$total_rare_to_epic_darksteel_steelUC +
$total_epic_to_legendary_darksteel_evilUC +
$total_rare_to_epic_darksteel_evilUC +
$total_epic_to_legendary_darksteel_steelUC +
$total_epic_to_legendary_darksteel_moonUC +
$total_epic_to_legendary_darksteel_steelR +
$total_epic_to_legendary_darksteel_evilR +
$total_epic_to_legendary_darksteel_moonR;

//$overall_total_expenses_darksteel_1 = (int)$overall_total_expenses_darksteel;



$total_glittering_needed_for_materials_you_have = $owned_glittering - $overall_total_expenses_glittering;
$total_darksteel_needed_for_materials_you_have = $owned_darksteel  - $overall_total_expenses_darksteel;
$total_copper_needed_for_materials_you_have = $owned_copper - $overall_total_expenses_copper;


$st = 300 - $overall_total_legendary_steel;  
$ev = 100 - $overall_total_legendary_evil;  
$mo = 100 - $overall_total_legendary_moon;  
 

if($st <= 0 && $ev <= 0 && $mo <= 0) 
{

    $if_epic_total_glittering_needed_steel = 0;
    $if_epic_total_darksteel_needed_steel = 0;
    $if_epic_total_copper_needed_steel = 0;

    $InsertLegendaryWeapQuery = "INSERT INTO craft_weapon_legendary(project_name, glittering, darksteel, copper, uc_steel, uc_evil, uc_moon, rare_steel, rare_evil, rare_moon, epic_steel, epic_evil, epic_moon, legendary_steel, legendary_evil, legendary_moon, total_glittering_needed_for_materials_you_have, total_darksteel_needed_for_materials_you_have, total_copper_needed_for_materials_you_have, if_epic_total_glittering_needed, if_epic_total_darksteel_needed, if_epic_total_copper_needed, date_created, created_by_user, status1, overall_percentage, legendary_steel_percentage, legendary_evil_percentage, legendary_moon_percentage, total_legendary_steel, total_legendary_evil, total_legendary_moon, epic_steel_needed, epic_evil_needed, epic_moon_needed, IsDeleted, IsModified, category)
VALUES
('$project_name', '$owned_glittering', '$owned_darksteel', '$owned_copper', '$uc_steel', '$uc_evil', '$uc_moon', '$rare_steel', '$rare_evil', '$rare_moon', '$epic_steel', '$epic_evil', '$epic_moon', 
'$legendary_steel', '$legendary_evil', '$legendary_moon', '$total_glittering_needed_for_materials_you_have', '$total_darksteel_needed_for_materials_you_have', '$total_copper_needed_for_materials_you_have', '$if_epic_total_glittering_needed_steel', '$if_epic_total_darksteel_needed_steel', 
'$if_epic_total_copper_needed_steel', CURRENT_TIMESTAMP(), '$session', 'Done', '$overall_progress_percentage', '$legendary_steel_percentage', '$legendary_evil_percentage', '$legendary_moon_percentage', '$overall_total_legendary_steel', 
'$overall_total_legendary_evil', '$overall_total_legendary_moon', 0, 0, 0, 0, 0, 'Weapon')
";

    if ($conn->query($InsertLegendaryWeapQuery) === TRUE) 
    {
        echo "<script>
        alert('Successfully Saved!');
        window.location.href='item-project.php ';
        </script>";
    }
    {
        echo "Error: " . $InsertLegendaryWeapQuery . "<br>" . $conn->error;
    }

}

elseif($st <= 0 && $ev <= 0 && $mo >= 0) 
{

     $epic_moon_needed = $mo * 10;

     $if_epic_total_glittering_needed = ($epic_moon_needed / 10) * 125;
     $if_epic_total_darksteel_needed = ($epic_moon_needed / 10) * 25000;
     $if_epic_total_copper_needed = ($epic_moon_needed / 10) * 100000;

     $InsertLegendaryWeapQuery = "INSERT INTO craft_weapon_legendary(project_name, glittering, darksteel, copper, uc_steel, uc_evil, uc_moon, rare_steel, rare_evil, rare_moon, epic_steel, epic_evil, epic_moon, legendary_steel, legendary_evil, legendary_moon, total_glittering_needed_for_materials_you_have, total_darksteel_needed_for_materials_you_have, total_copper_needed_for_materials_you_have, if_epic_total_glittering_needed, if_epic_total_darksteel_needed, if_epic_total_copper_needed, date_created, created_by_user, status1, overall_percentage, legendary_steel_percentage, legendary_evil_percentage, legendary_moon_percentage, total_legendary_steel, total_legendary_evil, total_legendary_moon, epic_steel_needed, epic_evil_needed, epic_moon_needed, IsDeleted, IsModified, category)
VALUES
('$project_name', '$owned_glittering', '$owned_darksteel', '$owned_copper', '$uc_steel', '$uc_evil', '$uc_moon', '$rare_steel', '$rare_evil', '$rare_moon', '$epic_steel', '$epic_evil', '$epic_moon', 
'$legendary_steel', '$legendary_evil', '$legendary_moon', '$total_glittering_needed_for_materials_you_have', '$total_darksteel_needed_for_materials_you_have', '$total_copper_needed_for_materials_you_have', '$if_epic_total_glittering_needed', '$if_epic_total_darksteel_needed', 
'$if_epic_total_copper_needed', CURRENT_TIMESTAMP(), '$session', 'Ongoing', '$overall_progress_percentage', '$legendary_steel_percentage', '$legendary_evil_percentage', '$legendary_moon_percentage', '$overall_total_legendary_steel', 
'$overall_total_legendary_evil', '$overall_total_legendary_moon', 0, 0, '$epic_moon_needed', 0, 0, 'Weapon')
";

    if ($conn->query($InsertLegendaryWeapQuery) === TRUE) 
    {
        echo "<script>
        alert('Successfully Saved!');
        window.location.href='item-project.php ';
        </script>";
    }
    {
        echo "Error: " . $InsertLegendaryWeapQuery . "<br>" . $conn->error;
    }


}

elseif($st <= 0 && $ev >= 0 && $mo <= 0) 
{
     //if from epic mats moon
     $epic_evil_needed = $ev * 10;

     $if_epic_total_glittering_needed = ($epic_evil_needed / 10) * 125;
     $if_epic_total_darksteel_needed = ($epic_evil_needed / 10) * 25000;
     $if_epic_total_copper_needed = ($epic_evil_needed / 10) * 100000;

     $InsertLegendaryWeapQuery = "INSERT INTO craft_weapon_legendary(project_name, glittering, darksteel, copper, uc_steel, uc_evil, uc_moon, rare_steel, rare_evil, rare_moon, epic_steel, epic_evil, epic_moon, legendary_steel, legendary_evil, legendary_moon, total_glittering_needed_for_materials_you_have, total_darksteel_needed_for_materials_you_have, total_copper_needed_for_materials_you_have, if_epic_total_glittering_needed, if_epic_total_darksteel_needed, if_epic_total_copper_needed, date_created, created_by_user, status1, overall_percentage, legendary_steel_percentage, legendary_evil_percentage, legendary_moon_percentage, total_legendary_steel, total_legendary_evil, total_legendary_moon, epic_steel_needed, epic_evil_needed, epic_moon_needed, IsDeleted, IsModified, category)
     VALUES
     ('$project_name', '$owned_glittering', '$owned_darksteel', '$owned_copper', '$uc_steel', '$uc_evil', '$uc_moon', '$rare_steel', '$rare_evil', '$rare_moon', '$epic_steel', '$epic_evil', '$epic_moon', 
     '$legendary_steel', '$legendary_evil', '$legendary_moon', '$total_glittering_needed_for_materials_you_have', '$total_darksteel_needed_for_materials_you_have', '$total_copper_needed_for_materials_you_have', '$if_epic_total_glittering_needed', '$if_epic_total_darksteel_needed', 
     '$if_epic_total_copper_needed', CURRENT_TIMESTAMP(), '$session', 'Ongoing', '$overall_progress_percentage', '$legendary_steel_percentage', '$legendary_evil_percentage', '$legendary_moon_percentage', '$overall_total_legendary_steel', 
     '$overall_total_legendary_evil', '$overall_total_legendary_moon', 0, '$epic_evil_needed', 0, 0, 0, 'Weapon')
     ";
     
         if ($conn->query($InsertLegendaryWeapQuery) === TRUE) 
         {
             echo "<script>
             alert('Successfully Saved!');
             window.location.href='item-project.php ';
             </script>";
         }
         {
             echo "Error: " . $InsertLegendaryWeapQuery . "<br>" . $conn->error;
         }
}

elseif($st >= 0 && $ev <= 0 && $mo <= 0) 
{
  /* echo "<script>
    alert('kulang ".$st." done ".$ev." done".$mo."');
     </script>";
*/
     //if from epic mats moon
     $epic_steel_needed = $st * 10;

     $if_epic_total_glittering_needed = ($epic_steel_needed / 10) * 125;
     $if_epic_total_darksteel_needed = ($epic_steel_needed / 10) * 25000;
     $if_epic_total_copper_needed = ($epic_steel_needed / 10) * 100000;

     $InsertLegendaryWeapQuery = "INSERT INTO craft_weapon_legendary(project_name, glittering, darksteel, copper, uc_steel, uc_evil, uc_moon, rare_steel, rare_evil, rare_moon, epic_steel, epic_evil, epic_moon, legendary_steel, legendary_evil, legendary_moon, total_glittering_needed_for_materials_you_have, total_darksteel_needed_for_materials_you_have, total_copper_needed_for_materials_you_have, if_epic_total_glittering_needed, if_epic_total_darksteel_needed, if_epic_total_copper_needed, date_created, created_by_user, status1, overall_percentage, legendary_steel_percentage, legendary_evil_percentage, legendary_moon_percentage, total_legendary_steel, total_legendary_evil, total_legendary_moon, epic_steel_needed, epic_evil_needed, epic_moon_needed, IsDeleted, IsModified, category)
     VALUES
     ('$project_name', '$owned_glittering', '$owned_darksteel', '$owned_copper', '$uc_steel', '$uc_evil', '$uc_moon', '$rare_steel', '$rare_evil', '$rare_moon', '$epic_steel', '$epic_evil', '$epic_moon', 
     '$legendary_steel', '$legendary_evil', '$legendary_moon', '$total_glittering_needed_for_materials_you_have', '$total_darksteel_needed_for_materials_you_have', '$total_copper_needed_for_materials_you_have', '$if_epic_total_glittering_needed', '$if_epic_total_darksteel_needed', 
     '$if_epic_total_copper_needed', CURRENT_TIMESTAMP(), '$session', 'Ongoing', '$overall_progress_percentage', '$legendary_steel_percentage', '$legendary_evil_percentage', '$legendary_moon_percentage', '$overall_total_legendary_steel', 
     '$overall_total_legendary_evil', '$overall_total_legendary_moon', '$epic_steel_needed', 0, 0, 0, 0, 'Weapon')
     ";
     
         if ($conn->query($InsertLegendaryWeapQuery) === TRUE) 
         {
             echo "<script>
             alert('Successfully Saved!');
             window.location.href='item-project.php ';
             </script>";
         }
         {
             echo "Error: " . $InsertLegendaryWeapQuery . "<br>" . $conn->error;
         }
}

elseif($st >= 0 && $ev >= 0 && $mo <= 0) 
{
  /*  echo "<script>
    alert('kulang  ".$st." kulang ".$ev." done".$mo."');
     </script>";
*/
     $epic_steel_needed = $st * 10;

     $if_epic_total_glittering_needed1 = ($epic_steel_needed / 10) * 125;
     $if_epic_total_darksteel_needed1 = ($epic_steel_needed / 10) * 25000;
     $if_epic_total_copper_needed1 = ($epic_steel_needed / 10) * 100000;

     $epic_evil_needed = $ev * 10;

     $if_epic_total_glittering_needed2 = ($epic_evil_needed / 10) * 125;
     $if_epic_total_darksteel_needed2 = ($epic_evil_needed / 10) * 25000;
     $if_epic_total_copper_needed2 = ($epic_evil_needed / 10) * 100000;

     $epic_glittering_needed = $if_epic_total_glittering_needed1 + $if_epic_total_glittering_needed2;
     $epic_darksteel_needed =  $if_epic_total_darksteel_needed1 + $if_epic_total_darksteel_needed2;
     $epic_copper_needed = $if_epic_total_copper_needed1 + $if_epic_total_copper_needed2;

     $InsertLegendaryWeapQuery = "INSERT INTO craft_weapon_legendary(project_name, glittering, darksteel, copper, uc_steel, uc_evil, uc_moon, rare_steel, rare_evil, rare_moon, epic_steel, epic_evil, epic_moon, legendary_steel, legendary_evil, legendary_moon, total_glittering_needed_for_materials_you_have, total_darksteel_needed_for_materials_you_have, total_copper_needed_for_materials_you_have, if_epic_total_glittering_needed, if_epic_total_darksteel_needed, if_epic_total_copper_needed, date_created, created_by_user, status1, overall_percentage, legendary_steel_percentage, legendary_evil_percentage, legendary_moon_percentage, total_legendary_steel, total_legendary_evil, total_legendary_moon, epic_steel_needed, epic_evil_needed, epic_moon_needed, IsDeleted, IsModified, category)
     VALUES
     ('$project_name', '$owned_glittering', '$owned_darksteel', '$owned_copper', '$uc_steel', '$uc_evil', '$uc_moon', '$rare_steel', '$rare_evil', '$rare_moon', '$epic_steel', '$epic_evil', '$epic_moon', 
     '$legendary_steel', '$legendary_evil', '$legendary_moon', '$total_glittering_needed_for_materials_you_have', '$total_darksteel_needed_for_materials_you_have', '$total_copper_needed_for_materials_you_have', '$epic_glittering_needed', '$epic_darksteel_needed', 
     '$epic_copper_needed', CURRENT_TIMESTAMP(), '$session', 'Ongoing', '$overall_progress_percentage', '$legendary_steel_percentage', '$legendary_evil_percentage', '$legendary_moon_percentage', '$overall_total_legendary_steel', 
     '$overall_total_legendary_evil', '$overall_total_legendary_moon', '$epic_steel_needed', '$epic_evil_needed', 0, 0, 0, 'Weapon')
     ";
     
         if ($conn->query($InsertLegendaryWeapQuery) === TRUE) 
         {
             echo "<script>
             alert('Successfully Saved!');
             window.location.href='item-project.php ';
             </script>";
         }
         {
             echo "Error: " . $InsertLegendaryWeapQuery . "<br>" . $conn->error;
         }
}

elseif($st >= 0 && $ev <= 0 && $mo >= 0) 
{
  /*  echo "<script>
    alert('kulang ".$st." done".$ev." kulang ".$mo."');
     </script>";
*/
     $epic_steel_needed = $st * 10;

     $if_epic_total_glittering_needed1 = ($epic_steel_needed / 10) * 125;
     $if_epic_total_darksteel_needed1 = ($epic_steel_needed / 10) * 25000;
     $if_epic_total_copper_needed1 = ($epic_steel_needed / 10) * 100000;

     $epic_moon_needed = $mo * 10;

     $if_epic_total_glittering_needed2 = ($epic_moon_needed / 10) * 125;
     $if_epic_total_darksteel_needed2 = ($epic_moon_needed / 10) * 25000;
     $if_epic_total_copper_needed2 = ($epic_moon_needed / 10) * 100000;

     $epic_glittering_needed = $if_epic_total_glittering_needed1 + $if_epic_total_glittering_needed2;
     $epic_darksteel_needed =  $if_epic_total_darksteel_needed1 + $if_epic_total_darksteel_needed2;
     $epic_copper_needed = $if_epic_total_copper_needed1 + $if_epic_total_copper_needed2;

     $InsertLegendaryWeapQuery = "INSERT INTO craft_weapon_legendary(project_name, glittering, darksteel, copper, uc_steel, uc_evil, uc_moon, rare_steel, rare_evil, rare_moon, epic_steel, epic_evil, epic_moon, legendary_steel, legendary_evil, legendary_moon, total_glittering_needed_for_materials_you_have, total_darksteel_needed_for_materials_you_have, total_copper_needed_for_materials_you_have, if_epic_total_glittering_needed, if_epic_total_darksteel_needed, if_epic_total_copper_needed, date_created, created_by_user, status1, overall_percentage, legendary_steel_percentage, legendary_evil_percentage, legendary_moon_percentage, total_legendary_steel, total_legendary_evil, total_legendary_moon, epic_steel_needed, epic_evil_needed, epic_moon_needed, IsDeleted, IsModified, category)
     VALUES
     ('$project_name', '$owned_glittering', '$owned_darksteel', '$owned_copper', '$uc_steel', '$uc_evil', '$uc_moon', '$rare_steel', '$rare_evil', '$rare_moon', '$epic_steel', '$epic_evil', '$epic_moon', 
     '$legendary_steel', '$legendary_evil', '$legendary_moon', '$total_glittering_needed_for_materials_you_have', '$total_darksteel_needed_for_materials_you_have', '$total_copper_needed_for_materials_you_have', '$epic_glittering_needed', '$epic_darksteel_needed', 
     '$epic_copper_needed', CURRENT_TIMESTAMP(), '$session', 'Ongoing', '$overall_progress_percentage', '$legendary_steel_percentage', '$legendary_evil_percentage', '$legendary_moon_percentage', '$overall_total_legendary_steel', 
     '$overall_total_legendary_evil', '$overall_total_legendary_moon', '$epic_steel_needed', 0, '$epic_moon_needed', 0, 0, 'Weapon')
     ";
     
         if ($conn->query($InsertLegendaryWeapQuery) === TRUE) 
         {
             echo "<script>
             alert('Successfully Saved!');
             window.location.href='item-project.php ';
             </script>";
         }
         {
             echo "Error: " . $InsertLegendaryWeapQuery . "<br>" . $conn->error;
         }
}

elseif($st <= 0 && $ev >= 0 && $mo >= 0) 
{
   /* echo "<script>
    alert('done  ".$st." kulang".$ev." kulang".$mo."');
     </script>";
*/
     $epic_moon_needed = $mo * 10;

     $if_epic_total_glittering_needed1 = ($epic_moon_needed / 10) * 125;
     $if_epic_total_darksteel_needed1 = ($epic_moon_needed / 10) * 25000;
     $if_epic_total_copper_needed1 = ($epic_moon_needed / 10) * 100000;

     $epic_evil_needed = $ev * 10;

     $if_epic_total_glittering_needed2 = ($epic_evil_needed / 10) * 125;
     $if_epic_total_darksteel_needed2 = ($epic_evil_needed / 10) * 25000;
     $if_epic_total_copper_needed2 = ($epic_evil_needed / 10) * 100000;

     $epic_glittering_needed = $if_epic_total_glittering_needed1 + $if_epic_total_glittering_needed2;
     $epic_darksteel_needed =  $if_epic_total_darksteel_needed1 + $if_epic_total_darksteel_needed2;
     $epic_copper_needed = $if_epic_total_copper_needed1 + $if_epic_total_copper_needed2;

     $InsertLegendaryWeapQuery = "INSERT INTO craft_weapon_legendary(project_name, glittering, darksteel, copper, uc_steel, uc_evil, uc_moon, rare_steel, rare_evil, rare_moon, epic_steel, epic_evil, epic_moon, legendary_steel, legendary_evil, legendary_moon, total_glittering_needed_for_materials_you_have, total_darksteel_needed_for_materials_you_have, total_copper_needed_for_materials_you_have, if_epic_total_glittering_needed, if_epic_total_darksteel_needed, if_epic_total_copper_needed, date_created, created_by_user, status1, overall_percentage, legendary_steel_percentage, legendary_evil_percentage, legendary_moon_percentage, total_legendary_steel, total_legendary_evil, total_legendary_moon, epic_steel_needed, epic_evil_needed, epic_moon_needed, IsDeleted, IsModified, category)
     VALUES
     ('$project_name', '$owned_glittering', '$owned_darksteel', '$owned_copper', '$uc_steel', '$uc_evil', '$uc_moon', '$rare_steel', '$rare_evil', '$rare_moon', '$epic_steel', '$epic_evil', '$epic_moon', 
     '$legendary_steel', '$legendary_evil', '$legendary_moon', '$total_glittering_needed_for_materials_you_have', '$total_darksteel_needed_for_materials_you_have', '$total_copper_needed_for_materials_you_have', '$epic_glittering_needed', '$epic_darksteel_needed', 
     '$if_epic_total_copper_needed2', CURRENT_TIMESTAMP(), '$session', 'Ongoing', '$overall_progress_percentage', '$legendary_steel_percentage', '$legendary_evil_percentage', '$legendary_moon_percentage', '$overall_total_legendary_steel', 
     '$overall_total_legendary_evil', '$overall_total_legendary_moon', 0, '$epic_evil_needed', '$epic_moon_needed', 0, 0, 'Weapon')
     ";
     
         if ($conn->query($InsertLegendaryWeapQuery) === TRUE) 
         {
             echo "<script>
             alert('Successfully Saved!');
             window.location.href='item-project.php ';
             </script>";
         }
         {
             echo "Error: " . $InsertLegendaryWeapQuery . "<br>" . $conn->error;
         }
}

elseif($st >= 0 && $ev >= 0 && $mo >= 0) 
{
   /* echo "<script>
    alert('kulang ".$st." kulang".$ev." kulang".$mo."');
     </script>";
*/
     $epic_steel_needed = $st * 10;

     $if_epic_total_glittering_needed1 = ($epic_steel_needed / 10) * 125;
     $if_epic_total_darksteel_needed1 = ($epic_steel_needed / 10) * 25000;
     $if_epic_total_copper_needed1 = ($epic_steel_needed / 10) * 100000;

     $epic_moon_needed = $mo * 10;

     $if_epic_total_glittering_needed2 = ($epic_moon_needed / 10) * 125;
     $if_epic_total_darksteel_needed2 = ($epic_moon_needed / 10) * 25000;
     $if_epic_total_copper_needed2 = ($epic_moon_needed / 10) * 100000;

     $epic_evil_needed = $ev * 10;

     $if_epic_total_glittering_needed3 = ($epic_evil_needed / 10) * 125;
     $if_epic_total_darksteel_needed3 = ($epic_evil_needed / 10) * 25000;
     $if_epic_total_copper_needed3 = ($epic_evil_needed / 10) * 100000;

     $epic_glittering_needed = $if_epic_total_glittering_needed1 + $if_epic_total_glittering_needed2 + $if_epic_total_glittering_needed3;
     $epic_darksteel_needed =  $if_epic_total_darksteel_needed1 + $if_epic_total_darksteel_needed2 + $if_epic_total_darksteel_needed3;
     $epic_copper_needed = $if_epic_total_copper_needed1 + $if_epic_total_copper_needed2 + $if_epic_total_copper_needed3;

     $InsertLegendaryWeapQuery = "INSERT INTO craft_weapon_legendary(project_name, glittering, darksteel, copper, uc_steel, uc_evil, uc_moon, rare_steel, rare_evil, rare_moon, epic_steel, epic_evil, epic_moon, legendary_steel, legendary_evil, legendary_moon, total_glittering_needed_for_materials_you_have, total_darksteel_needed_for_materials_you_have, total_copper_needed_for_materials_you_have, if_epic_total_glittering_needed, if_epic_total_darksteel_needed, if_epic_total_copper_needed, date_created, created_by_user, status1, overall_percentage, legendary_steel_percentage, legendary_evil_percentage, legendary_moon_percentage, total_legendary_steel, total_legendary_evil, total_legendary_moon, epic_steel_needed, epic_evil_needed, epic_moon_needed, IsDeleted, IsModified, category)
     VALUES
     ('$project_name', '$owned_glittering', '$owned_darksteel', '$owned_copper', '$uc_steel', '$uc_evil', '$uc_moon', '$rare_steel', '$rare_evil', '$rare_moon', '$epic_steel', '$epic_evil', '$epic_moon', 
     '$legendary_steel', '$legendary_evil', '$legendary_moon', '$total_glittering_needed_for_materials_you_have', '$total_darksteel_needed_for_materials_you_have', '$total_copper_needed_for_materials_you_have', '$epic_glittering_needed', '$epic_darksteel_needed', 
     '$epic_copper_needed', CURRENT_TIMESTAMP(), '$session', 'Ongoing', '$overall_progress_percentage', '$legendary_steel_percentage', '$legendary_evil_percentage', '$legendary_moon_percentage', '$overall_total_legendary_steel', 
     '$overall_total_legendary_evil', '$overall_total_legendary_moon', '$epic_steel_needed', '$epic_evil_needed', '$epic_moon_needed', 0, 0, 'Weapon')
     ";
     
         if ($conn->query($InsertLegendaryWeapQuery) === TRUE) 
         {
             echo "<script>
             alert('Successfully Saved!');
             window.location.href='item-project.php ';
             </script>";
         }
         {
             echo "Error: " . $InsertLegendaryWeapQuery . "<br>" . $conn->error;
         }
}
else
{
    echo "<script>
    alert('something went wrong: st".$st." ev".$ev." mo".$mo."');
     </script>"; 
}


/*$InsertLegendaryWeapQuery = "INSERT INTO craft_weapon_legendary(project_name, glittering, darksteel, copper, uc_steel, uc_evil, uc_moon, rare_steel, rare_evil, rare_moon, epic_steel, epic_evil, epic_moon, legendary_steel, legendary_evil, legendary,moon, uc_to_rare_steel, rare_to_epic_steel, epic_to_legendary_steel, uc_to_rare_evil, rare_to_epic_evil, epic_to_legendary_evil, uc_to_rare_moon, rare_to_epic_moon, epic_to_legendary_moon, total_glittering_needed, total_darksteel_needed, total_copper_needed, date_created, created_by_user, status, overall_percentage, legendary_steel_percentage, legendary_evil_percentage, legendary_moon_percentage, isDeleted, IsModified)
VALUES
()
";
*/
?>