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

$uc_platinum = $_POST['uc_platinum'];
$uc_anima = $_POST['uc_anima'];
$uc_illuminating = $_POST['uc_illuminating'];

$rare_platinum = $_POST['rare_platinum'];
$rare_anima = $_POST['rare_anima'];
$rare_illuminating = $_POST['rare_illuminating'];

$epic_platinum = $_POST['epic_platinum'];
$epic_anima = $_POST['epic_anima'];
$epic_illuminating = $_POST['epic_illuminating'];

$legendary_platinum = $_POST['legendary_platinum'];
$legendary_anima = $_POST['legendary_anima'];
$legendary_illuminating = $_POST['legendary_illuminating'];



// UNCOMMON UNCOMMON UNCOMMON UNCOMMON UNCOMMON
// UC TO RARE UC TO RARE UC TO RARE UC TO RARE 
// glit: 2 darksteel: 1000 copper: 2000

$uc_ds = 1000;
$uc_copper = 2000;
$uc_glit = 2;
$uc_to_rare = 10;


//Computation UC platinum

//total_rare_platinum
$total_uc_to_rare_platinum = $uc_platinum / $uc_to_rare;
//total_glit uc to rare
$total_uc_to_rare_glit_platinum = $total_uc_to_rare_platinum * $uc_glit;
//total_copper uc to rare
$total_uc_to_rare_copper_platinum = $total_uc_to_rare_platinum * $uc_copper;
//total_darksteel uc to rare
$total_uc_to_rare_darksteel_platinum = $total_uc_to_rare_platinum * $uc_ds;


//Computation UC anima

//total_rare_anima
$total_uc_to_rare_anima = $uc_anima / $uc_to_rare;
//total_glit to rare
$total_uc_to_rare_glit_anima = $total_uc_to_rare_anima * $uc_glit;
//total_copper to rare
$total_uc_to_rare_copper_anima = $total_uc_to_rare_anima * $uc_copper;
//total_darksteel to rare
$total_uc_to_rare_darksteel_anima = $total_uc_to_rare_anima * $uc_ds;


//Computation UC illuminating

//total_rare_illuminating
$total_uc_to_rare_illuminating = $uc_illuminating / $uc_to_rare;
//total_glit to rare
$total_uc_to_rare_glit_illuminating = $total_uc_to_rare_illuminating * $uc_glit;
//total_copper to rare
$total_uc_to_rare_copper_illuminating = $total_uc_to_rare_illuminating * $uc_copper;
//total_darksteel to rare
$total_uc_to_rare_darksteel_illuminating = $total_uc_to_rare_illuminating * $uc_ds;



// RARE RARE RARE RARE RARE RARE RARE RARE
// RARE TO EPIC RARE TO EPIC RARE TO EPIC RARE TO EPIC
// glit: 25 darksteel: 5000 copper: 20000

$rare_ds = 5000;
$rare_copper = 20000;
$rare_glit = 25;
$rare_to_epic = 10;

//Computation RARE platinum

//total_epic_platinum
$total_rare_to_epic_platinum = $rare_platinum / $rare_to_epic;
//total_glit rare to epic
$total_rare_to_epic_glit_platinum = $total_rare_to_epic_platinum * $rare_glit;
//total_copper rare to epic
$total_rare_to_epic_copper_platinum = $total_rare_to_epic_platinum * $rare_copper;
//total_darksteel rare to epic
$total_rare_to_epic_darksteel_platinum = $total_rare_to_epic_platinum * $rare_ds;


//Computation RARE anima

//total_epic_anima
$total_rare_to_epic_anima = $rare_anima / $rare_to_epic;
//total_glit rare to epic
$total_rare_to_epic_glit_anima = $total_rare_to_epic_anima * $rare_glit;
//total_copper rare to epic
$total_rare_to_epic_copper_anima = $total_rare_to_epic_anima * $rare_copper;
//total_darksteel rare to epic
$total_rare_to_epic_darksteel_anima = $total_rare_to_epic_anima * $rare_ds;


//Computation RARE illuminating

//total_epic_illuminating
$total_rare_to_epic_illuminating = $rare_illuminating / $rare_to_epic;
//total_glit rare to epic
$total_rare_to_epic_glit_illuminating = $total_rare_to_epic_illuminating * $rare_glit;
//total_copper rare to epic
$total_rare_to_epic_copper_illuminating = $total_rare_to_epic_illuminating * $rare_copper;
//total_darksteel rare to epic
$total_rare_to_epic_darksteel_illuminating = $total_rare_to_epic_illuminating * $rare_ds;



// EPIC EPIC EPIC EPIC EPIC EPIC EPIC EPIC EPIC EPIC
// EPIC TO LEGENDARY EPIC TO LEGENDARY EPIC TO LEGENDARY EPIC TO LEGENDARY
// glit: 125 darksteel: 25000 copper: 100000

$epic_ds = 25000;
$epic_copper = 100000;
$epic_glit = 125;
$epic_to_legendary = 10;

//Computation EPIC platinum

//total_legendary_platinum
$total_epic_to_legendary_platinum = $epic_platinum / $epic_to_legendary;
//total_glit rare to epic
$total_epic_to_legendary_glit_platinum = $total_epic_to_legendary_platinum * $epic_glit;
//total_copper rare to epic
$total_epic_to_legendary_copper_platinum = $total_epic_to_legendary_platinum * $epic_copper;
//total_darksteel rare to epic
$total_epic_to_legendary_darksteel_platinum = $total_epic_to_legendary_platinum * $epic_ds;


//Computation EPIC anima

//total_legendary_anima
$total_epic_to_legendary_anima = $epic_anima / $epic_to_legendary;
//total_glit rare to epic
$total_epic_to_legendary_glit_anima = $total_epic_to_legendary_anima * $epic_glit;
//total_copper rare to epic
$total_epic_to_legendary_copper_anima = $total_epic_to_legendary_anima * $epic_copper;
//total_darksteel rare to epic
$total_epic_to_legendary_darksteel_anima = $total_epic_to_legendary_anima * $epic_ds;


//Computation EPIC illuminating

//total_legendary_illuminating
$total_epic_to_legendary_illuminating = $epic_illuminating / $epic_to_legendary;
//total_glit rare to epic
$total_epic_to_legendary_glit_illuminating = $total_epic_to_legendary_illuminating * $epic_glit;
//total_copper rare to epic
$total_epic_to_legendary_copper_illuminating = $total_epic_to_legendary_illuminating * $epic_copper;
//total_darksteel rare to epic
$total_epic_to_legendary_darksteel_illuminating = $total_epic_to_legendary_illuminating * $epic_ds;


//----------------------------------------------------
//RARE TO LEGENDARY (UC SECTION)


//rare to epic platinum
$total_rare_to_epic_platinumUC = $total_uc_to_rare_platinum / $rare_to_epic;
$total_rare_to_epic_glit_platinumUC = $total_rare_to_epic_platinumUC * $rare_glit;
$total_rare_to_epic_copper_platinumUC = $total_rare_to_epic_platinumUC * $rare_copper;
$total_rare_to_epic_darksteel_platinumUC = $total_rare_to_epic_platinumUC * $rare_ds;
//epic to legendary platinum
//total_legendary_platinum
$total_epic_to_legendary_platinumUC = $total_rare_to_epic_platinumUC / $epic_to_legendary;
$total_epic_to_legendary_glit_platinumUC = $total_epic_to_legendary_platinumUC * $epic_glit;
$total_epic_to_legendary_copper_platinumUC = $total_epic_to_legendary_platinumUC * $epic_copper;
$total_epic_to_legendary_darksteel_platinumUC = $total_epic_to_legendary_platinumUC * $epic_ds;



//rare to epic anima
$total_rare_to_epic_animaUC = $total_uc_to_rare_anima / $rare_to_epic;
$total_rare_to_epic_glit_animaUC = $total_rare_to_epic_animaUC * $rare_glit;
$total_rare_to_epic_copper_animaUC = $total_rare_to_epic_animaUC * $rare_copper;
$total_rare_to_epic_darksteel_animaUC = $total_rare_to_epic_animaUC * $rare_ds;
//epic to legendary anima
//total_legendary_anima
$total_epic_to_legendary_animaUC = $total_rare_to_epic_animaUC / $epic_to_legendary;
$total_epic_to_legendary_glit_animaUC = $total_epic_to_legendary_animaUC * $epic_glit;
$total_epic_to_legendary_copper_animaUC = $total_epic_to_legendary_animaUC * $epic_copper;
$total_epic_to_legendary_darksteel_animaUC = $total_epic_to_legendary_animaUC * $epic_ds;



//rare to epic illuminating
$total_rare_to_epic_illuminatingUC = $total_uc_to_rare_illuminating / $rare_to_epic;
$total_rare_to_epic_glit_illuminatingUC = $total_rare_to_epic_illuminatingUC * $rare_glit;
$total_rare_to_epic_copper_illuminatingUC = $total_rare_to_epic_illuminatingUC * $rare_copper;
$total_rare_to_epic_darksteel_illuminatingUC = $total_rare_to_epic_illuminatingUC * $rare_ds;
//epic to legendary illuminating
//total_legendary_illuminating
$total_epic_to_legendary_illuminatingUC = $total_rare_to_epic_illuminatingUC / $epic_to_legendary;
$total_epic_to_legendary_glit_illuminatingUC = $total_epic_to_legendary_illuminatingUC * $epic_glit;
$total_epic_to_legendary_copper_illuminatingUC = $total_epic_to_legendary_illuminatingUC * $epic_copper;
$total_epic_to_legendary_darksteel_illuminatingUC = $total_epic_to_legendary_illuminatingUC * $epic_ds;


//----------------------------------------------------

//EPIC TO LEGENDARY (RARE SECTION)

//epic to legendary platinum
$total_epic_to_legendary_platinumR = $total_rare_to_epic_platinum / $epic_to_legendary;
$total_epic_to_legendary_glit_platinumR = $total_epic_to_legendary_platinumR * $epic_glit;
$total_epic_to_legendary_copper_platinumR = $total_epic_to_legendary_platinumR * $epic_copper;
$total_epic_to_legendary_darksteel_platinumR = $total_epic_to_legendary_platinumR * $epic_ds;

//epic to legendary anima
$total_epic_to_legendary_animaR = $total_rare_to_epic_anima / $epic_to_legendary;
$total_epic_to_legendaryc_glit_animaR = $total_epic_to_legendary_animaR * $epic_glit;
$total_epic_to_legendary_copper_animaR = $total_epic_to_legendary_animaR * $epic_copper;
$total_epic_to_legendary_darksteel_animaR = $total_epic_to_legendary_animaR * $epic_ds;


//epic to legendary illuminating
$total_epic_to_legendary_illuminatingR = $total_rare_to_epic_illuminating / $epic_to_legendary;
$total_epic_to_legendary_glit_illuminatingR = $total_epic_to_legendary_illuminatingR * $epic_glit;
$total_epic_to_legendary_copper_illuminatingR = $total_epic_to_legendary_illuminatingR * $epic_copper;
$total_epic_to_legendary_darksteel_illuminatingR = $total_epic_to_legendary_illuminatingR * $epic_ds;


//----------------------------------------------------
// TOTAL MATERIALS OWNED LEGENDARY
//platinum
$overall_total_legendary_platinum_round = $total_epic_to_legendary_platinum + $total_epic_to_legendary_platinumUC + $total_epic_to_legendary_platinumR + $legendary_platinum; 
$overall_total_legendary_anima_round = $total_epic_to_legendary_anima + $total_epic_to_legendary_animaUC + $total_epic_to_legendary_animaR + $legendary_anima;
$overall_total_legendary_illuminating_round = $total_epic_to_legendary_illuminating + $total_epic_to_legendary_illuminatingUC + $total_epic_to_legendary_illuminatingR + $legendary_illuminating;

$overall_total_legendary_platinum = (int)$overall_total_legendary_platinum_round;
$overall_total_legendary_anima = (int)$overall_total_legendary_anima_round;
$overall_total_legendary_illuminating = (int)$overall_total_legendary_illuminating_round;


$legendary_platinum_percentage1 = $overall_total_legendary_platinum / 300;
$legendary_platinum_percentage = round($legendary_platinum_percentage1, 2);

$legendary_anima_percentage1 = $overall_total_legendary_anima / 100;
$legendary_anima_percentage = round($legendary_anima_percentage1, 2);

$legendary_illuminating_percentage1 = $overall_total_legendary_illuminating / 100;
$legendary_illuminating_percentage = round($legendary_illuminating_percentage1, 2);

//overall progress percentage
$overall_progress_percentage1 = ($overall_total_legendary_platinum + $overall_total_legendary_anima + $overall_total_legendary_illuminating) / 500;
$overall_progress_percentage = round($overall_progress_percentage1, 2);


$overall_total_expenses_glittering =
$total_uc_to_rare_glit_platinum +
$total_uc_to_rare_glit_anima +
$total_uc_to_rare_glit_illuminating + 
$total_rare_to_epic_glit_platinum +
$total_rare_to_epic_glit_anima +
$total_rare_to_epic_glit_illuminating +
$total_epic_to_legendary_glit_platinum +
$total_epic_to_legendary_glit_anima +
$total_epic_to_legendary_glit_illuminating +
$total_rare_to_epic_glit_platinumUC +
$total_epic_to_legendary_glit_platinumUC +
$total_rare_to_epic_glit_animaUC +
$total_epic_to_legendary_glit_animaUC +
$total_rare_to_epic_glit_illuminatingUC +
$total_epic_to_legendary_glit_illuminatingUC +
$total_epic_to_legendary_glit_platinumR +
$total_epic_to_legendaryc_glit_animaR +
$total_epic_to_legendary_glit_illuminatingR;

//$overall_total_expenses_glittering_1 = (int)$overall_total_expenses_glittering;

$overall_total_expenses_copper =
$total_uc_to_rare_copper_platinum +
$total_uc_to_rare_copper_anima +
$total_uc_to_rare_copper_illuminating +
$total_rare_to_epic_copper_platinum +
$total_rare_to_epic_copper_anima +
$total_rare_to_epic_copper_illuminating +
$total_epic_to_legendary_copper_platinum +
$total_epic_to_legendary_copper_anima +
$total_epic_to_legendary_copper_illuminating +
$total_rare_to_epic_copper_platinumUC +
$total_epic_to_legendary_copper_platinumUC +
$total_rare_to_epic_copper_animaUC +
$total_epic_to_legendary_copper_animaUC +
$total_rare_to_epic_copper_illuminatingUC +
$total_epic_to_legendary_copper_illuminatingUC +
$total_epic_to_legendary_copper_platinumR +
$total_epic_to_legendary_copper_animaR +
$total_epic_to_legendary_copper_illuminatingR;

//$overall_total_expenses_copper_1 = (int)$overall_total_expenses_copper;

$overall_total_expenses_darksteel =
$total_uc_to_rare_darksteel_platinum +
$total_uc_to_rare_darksteel_anima +
$total_uc_to_rare_darksteel_illuminating +
$total_rare_to_epic_darksteel_platinum +
$total_rare_to_epic_darksteel_anima +
$total_rare_to_epic_darksteel_illuminating +
$total_epic_to_legendary_darksteel_platinum +
$total_epic_to_legendary_darksteel_anima +
$total_epic_to_legendary_darksteel_illuminating  +
$total_rare_to_epic_darksteel_illuminatingUC +
$total_rare_to_epic_darksteel_platinumUC +
$total_epic_to_legendary_darksteel_animaUC +
$total_rare_to_epic_darksteel_animaUC +
$total_epic_to_legendary_darksteel_platinumUC +
$total_epic_to_legendary_darksteel_illuminatingUC +
$total_epic_to_legendary_darksteel_platinumR +
$total_epic_to_legendary_darksteel_animaR +
$total_epic_to_legendary_darksteel_illuminatingR;

//$overall_total_expenses_darksteel_1 = (int)$overall_total_expenses_darksteel;



$total_glittering_needed_for_materials_you_have = $owned_glittering - $overall_total_expenses_glittering;
$total_darksteel_needed_for_materials_you_have = $owned_darksteel  - $overall_total_expenses_darksteel;
$total_copper_needed_for_materials_you_have = $owned_copper - $overall_total_expenses_copper;


$st = 300 - $overall_total_legendary_platinum;  
$ev = 100 - $overall_total_legendary_anima;  
$mo = 100 - $overall_total_legendary_illuminating;  
 

if($st <= 0 && $ev <= 0 && $mo <= 0) 
{

    $if_epic_total_glittering_needed_platinum = 0;
    $if_epic_total_darksteel_needed_platinum = 0;
    $if_epic_total_copper_needed_platinum = 0;

    $InsertLegendaryWeapQuery = "INSERT INTO craft_accessories_legendary(project_name, glittering, darksteel, copper, uc_platinum, uc_anima, uc_illuminating, rare_platinum, rare_anima, rare_illuminating, epic_platinum, epic_anima, epic_illuminating, legendary_platinum, legendary_anima, legendary_illuminating, total_glittering_needed_for_materials_you_have, total_darksteel_needed_for_materials_you_have, total_copper_needed_for_materials_you_have, if_epic_total_glittering_needed, if_epic_total_darksteel_needed, if_epic_total_copper_needed, date_created, created_by_user, status1, overall_percentage, legendary_platinum_percentage, legendary_anima_percentage, legendary_illuminating_percentage, total_legendary_platinum, total_legendary_anima, total_legendary_illuminating, epic_platinum_needed, epic_anima_needed, epic_illuminating_needed, IsDeleted, IsModified, category)
VALUES
('$project_name', '$owned_glittering', '$owned_darksteel', '$owned_copper', '$uc_platinum', '$uc_anima', '$uc_illuminating', '$rare_platinum', '$rare_anima', '$rare_illuminating', '$epic_platinum', '$epic_anima', '$epic_illuminating', 
'$legendary_platinum', '$legendary_anima', '$legendary_illuminating', '$total_glittering_needed_for_materials_you_have', '$total_darksteel_needed_for_materials_you_have', '$total_copper_needed_for_materials_you_have', '$if_epic_total_glittering_needed_platinum', '$if_epic_total_darksteel_needed_platinum', 
'$if_epic_total_copper_needed_platinum', CURRENT_TIMESTAMP(), '$session', 'Done', '$overall_progress_percentage', '$legendary_platinum_percentage', '$legendary_anima_percentage', '$legendary_illuminating_percentage', '$overall_total_legendary_platinum', 
'$overall_total_legendary_anima', '$overall_total_legendary_illuminating', 0, 0, 0, 0, 0, 'Accessories')
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

     $epic_illuminating_needed = $mo * 10;

     $if_epic_total_glittering_needed = ($epic_illuminating_needed / 10) * 125;
     $if_epic_total_darksteel_needed = ($epic_illuminating_needed / 10) * 25000;
     $if_epic_total_copper_needed = ($epic_illuminating_needed / 10) * 100000;

     $InsertLegendaryWeapQuery = "INSERT INTO craft_accessories_legendary(project_name, glittering, darksteel, copper, uc_platinum, uc_anima, uc_illuminating, rare_platinum, rare_anima, rare_illuminating, epic_platinum, epic_anima, epic_illuminating, legendary_platinum, legendary_anima, legendary_illuminating, total_glittering_needed_for_materials_you_have, total_darksteel_needed_for_materials_you_have, total_copper_needed_for_materials_you_have, if_epic_total_glittering_needed, if_epic_total_darksteel_needed, if_epic_total_copper_needed, date_created, created_by_user, status1, overall_percentage, legendary_platinum_percentage, legendary_anima_percentage, legendary_illuminating_percentage, total_legendary_platinum, total_legendary_anima, total_legendary_illuminating, epic_platinum_needed, epic_anima_needed, epic_illuminating_needed, IsDeleted, IsModified, category)
VALUES
('$project_name', '$owned_glittering', '$owned_darksteel', '$owned_copper', '$uc_platinum', '$uc_anima', '$uc_illuminating', '$rare_platinum', '$rare_anima', '$rare_illuminating', '$epic_platinum', '$epic_anima', '$epic_illuminating', 
'$legendary_platinum', '$legendary_anima', '$legendary_illuminating', '$total_glittering_needed_for_materials_you_have', '$total_darksteel_needed_for_materials_you_have', '$total_copper_needed_for_materials_you_have', '$if_epic_total_glittering_needed', '$if_epic_total_darksteel_needed', 
'$if_epic_total_copper_needed', CURRENT_TIMESTAMP(), '$session', 'Ongoing', '$overall_progress_percentage', '$legendary_platinum_percentage', '$legendary_anima_percentage', '$legendary_illuminating_percentage', '$overall_total_legendary_platinum', 
'$overall_total_legendary_anima', '$overall_total_legendary_illuminating', 0, 0, '$epic_illuminating_needed', 0, 0, 'Accessories')
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
     //if from epic mats illuminating
     $epic_anima_needed = $ev * 10;

     $if_epic_total_glittering_needed = ($epic_anima_needed / 10) * 125;
     $if_epic_total_darksteel_needed = ($epic_anima_needed / 10) * 25000;
     $if_epic_total_copper_needed = ($epic_anima_needed / 10) * 100000;

     $InsertLegendaryWeapQuery = "INSERT INTO craft_accessories_legendary(project_name, glittering, darksteel, copper, uc_platinum, uc_anima, uc_illuminating, rare_platinum, rare_anima, rare_illuminating, epic_platinum, epic_anima, epic_illuminating, legendary_platinum, legendary_anima, legendary_illuminating, total_glittering_needed_for_materials_you_have, total_darksteel_needed_for_materials_you_have, total_copper_needed_for_materials_you_have, if_epic_total_glittering_needed, if_epic_total_darksteel_needed, if_epic_total_copper_needed, date_created, created_by_user, status1, overall_percentage, legendary_platinum_percentage, legendary_anima_percentage, legendary_illuminating_percentage, total_legendary_platinum, total_legendary_anima, total_legendary_illuminating, epic_platinum_needed, epic_anima_needed, epic_illuminating_needed, IsDeleted, IsModified, category)
     VALUES
     ('$project_name', '$owned_glittering', '$owned_darksteel', '$owned_copper', '$uc_platinum', '$uc_anima', '$uc_illuminating', '$rare_platinum', '$rare_anima', '$rare_illuminating', '$epic_platinum', '$epic_anima', '$epic_illuminating', 
     '$legendary_platinum', '$legendary_anima', '$legendary_illuminating', '$total_glittering_needed_for_materials_you_have', '$total_darksteel_needed_for_materials_you_have', '$total_copper_needed_for_materials_you_have', '$if_epic_total_glittering_needed', '$if_epic_total_darksteel_needed', 
     '$if_epic_total_copper_needed', CURRENT_TIMESTAMP(), '$session', 'Ongoing', '$overall_progress_percentage', '$legendary_platinum_percentage', '$legendary_anima_percentage', '$legendary_illuminating_percentage', '$overall_total_legendary_platinum', 
     '$overall_total_legendary_anima', '$overall_total_legendary_illuminating', 0, '$epic_anima_needed', 0, 0, 0, 'Accessories')
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
     //if from epic mats illuminating
     $epic_platinum_needed = $st * 10;

     $if_epic_total_glittering_needed = ($epic_platinum_needed / 10) * 125;
     $if_epic_total_darksteel_needed = ($epic_platinum_needed / 10) * 25000;
     $if_epic_total_copper_needed = ($epic_platinum_needed / 10) * 100000;

     $InsertLegendaryWeapQuery = "INSERT INTO craft_accessories_legendary(project_name, glittering, darksteel, copper, uc_platinum, uc_anima, uc_illuminating, rare_platinum, rare_anima, rare_illuminating, epic_platinum, epic_anima, epic_illuminating, legendary_platinum, legendary_anima, legendary_illuminating, total_glittering_needed_for_materials_you_have, total_darksteel_needed_for_materials_you_have, total_copper_needed_for_materials_you_have, if_epic_total_glittering_needed, if_epic_total_darksteel_needed, if_epic_total_copper_needed, date_created, created_by_user, status1, overall_percentage, legendary_platinum_percentage, legendary_anima_percentage, legendary_illuminating_percentage, total_legendary_platinum, total_legendary_anima, total_legendary_illuminating, epic_platinum_needed, epic_anima_needed, epic_illuminating_needed, IsDeleted, IsModified, category)
     VALUES
     ('$project_name', '$owned_glittering', '$owned_darksteel', '$owned_copper', '$uc_platinum', '$uc_anima', '$uc_illuminating', '$rare_platinum', '$rare_anima', '$rare_illuminating', '$epic_platinum', '$epic_anima', '$epic_illuminating', 
     '$legendary_platinum', '$legendary_anima', '$legendary_illuminating', '$total_glittering_needed_for_materials_you_have', '$total_darksteel_needed_for_materials_you_have', '$total_copper_needed_for_materials_you_have', '$if_epic_total_glittering_needed', '$if_epic_total_darksteel_needed', 
     '$if_epic_total_copper_needed', CURRENT_TIMESTAMP(), '$session', 'Ongoing', '$overall_progress_percentage', '$legendary_platinum_percentage', '$legendary_anima_percentage', '$legendary_illuminating_percentage', '$overall_total_legendary_platinum', 
     '$overall_total_legendary_anima', '$overall_total_legendary_illuminating', '$epic_platinum_needed', 0, 0, 0, 0, 'Accessories')
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
     $epic_platinum_needed = $st * 10;

     $if_epic_total_glittering_needed1 = ($epic_platinum_needed / 10) * 125;
     $if_epic_total_darksteel_needed1 = ($epic_platinum_needed / 10) * 25000;
     $if_epic_total_copper_needed1 = ($epic_platinum_needed / 10) * 100000;

     $epic_anima_needed = $ev * 10;

     $if_epic_total_glittering_needed2 = ($epic_anima_needed / 10) * 125;
     $if_epic_total_darksteel_needed2 = ($epic_anima_needed / 10) * 25000;
     $if_epic_total_copper_needed2 = ($epic_anima_needed / 10) * 100000;

     $epic_glittering_needed = $if_epic_total_glittering_needed1 + $if_epic_total_glittering_needed2;
     $epic_darksteel_needed =  $if_epic_total_darksteel_needed1 + $if_epic_total_darksteel_needed2;
     $epic_copper_needed = $if_epic_total_copper_needed1 + $if_epic_total_copper_needed2;

     $InsertLegendaryWeapQuery = "INSERT INTO craft_accessories_legendary(project_name, glittering, darksteel, copper, uc_platinum, uc_anima, uc_illuminating, rare_platinum, rare_anima, rare_illuminating, epic_platinum, epic_anima, epic_illuminating, legendary_platinum, legendary_anima, legendary_illuminating, total_glittering_needed_for_materials_you_have, total_darksteel_needed_for_materials_you_have, total_copper_needed_for_materials_you_have, if_epic_total_glittering_needed, if_epic_total_darksteel_needed, if_epic_total_copper_needed, date_created, created_by_user, status1, overall_percentage, legendary_platinum_percentage, legendary_anima_percentage, legendary_illuminating_percentage, total_legendary_platinum, total_legendary_anima, total_legendary_illuminating, epic_platinum_needed, epic_anima_needed, epic_illuminating_needed, IsDeleted, IsModified, category)
     VALUES
     ('$project_name', '$owned_glittering', '$owned_darksteel', '$owned_copper', '$uc_platinum', '$uc_anima', '$uc_illuminating', '$rare_platinum', '$rare_anima', '$rare_illuminating', '$epic_platinum', '$epic_anima', '$epic_illuminating', 
     '$legendary_platinum', '$legendary_anima', '$legendary_illuminating', '$total_glittering_needed_for_materials_you_have', '$total_darksteel_needed_for_materials_you_have', '$total_copper_needed_for_materials_you_have', '$epic_glittering_needed', '$epic_darksteel_needed', 
     '$epic_copper_needed', CURRENT_TIMESTAMP(), '$session', 'Ongoing', '$overall_progress_percentage', '$legendary_platinum_percentage', '$legendary_anima_percentage', '$legendary_illuminating_percentage', '$overall_total_legendary_platinum', 
     '$overall_total_legendary_anima', '$overall_total_legendary_illuminating', '$epic_platinum_needed', '$epic_anima_needed', 0, 0, 0, 'Accessories')
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
     $epic_platinum_needed = $st * 10;

     $if_epic_total_glittering_needed1 = ($epic_platinum_needed / 10) * 125;
     $if_epic_total_darksteel_needed1 = ($epic_platinum_needed / 10) * 25000;
     $if_epic_total_copper_needed1 = ($epic_platinum_needed / 10) * 100000;

     $epic_illuminating_needed = $mo * 10;

     $if_epic_total_glittering_needed2 = ($epic_illuminating_needed / 10) * 125;
     $if_epic_total_darksteel_needed2 = ($epic_illuminating_needed / 10) * 25000;
     $if_epic_total_copper_needed2 = ($epic_illuminating_needed / 10) * 100000;

     $epic_glittering_needed = $if_epic_total_glittering_needed1 + $if_epic_total_glittering_needed2;
     $epic_darksteel_needed =  $if_epic_total_darksteel_needed1 + $if_epic_total_darksteel_needed2;
     $epic_copper_needed = $if_epic_total_copper_needed1 + $if_epic_total_copper_needed2;

     $InsertLegendaryWeapQuery = "INSERT INTO craft_accessories_legendary(project_name, glittering, darksteel, copper, uc_platinum, uc_anima, uc_illuminating, rare_platinum, rare_anima, rare_illuminating, epic_platinum, epic_anima, epic_illuminating, legendary_platinum, legendary_anima, legendary_illuminating, total_glittering_needed_for_materials_you_have, total_darksteel_needed_for_materials_you_have, total_copper_needed_for_materials_you_have, if_epic_total_glittering_needed, if_epic_total_darksteel_needed, if_epic_total_copper_needed, date_created, created_by_user, status1, overall_percentage, legendary_platinum_percentage, legendary_anima_percentage, legendary_illuminating_percentage, total_legendary_platinum, total_legendary_anima, total_legendary_illuminating, epic_platinum_needed, epic_anima_needed, epic_illuminating_needed, IsDeleted, IsModified, category)
     VALUES
     ('$project_name', '$owned_glittering', '$owned_darksteel', '$owned_copper', '$uc_platinum', '$uc_anima', '$uc_illuminating', '$rare_platinum', '$rare_anima', '$rare_illuminating', '$epic_platinum', '$epic_anima', '$epic_illuminating', 
     '$legendary_platinum', '$legendary_anima', '$legendary_illuminating', '$total_glittering_needed_for_materials_you_have', '$total_darksteel_needed_for_materials_you_have', '$total_copper_needed_for_materials_you_have', '$epic_glittering_needed', '$epic_darksteel_needed', 
     '$epic_copper_needed', CURRENT_TIMESTAMP(), '$session', 'Ongoing', '$overall_progress_percentage', '$legendary_platinum_percentage', '$legendary_anima_percentage', '$legendary_illuminating_percentage', '$overall_total_legendary_platinum', 
     '$overall_total_legendary_anima', '$overall_total_legendary_illuminating', '$epic_platinum_needed', 0, '$epic_illuminating_needed', 0, 0, 'Accessories')
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
     $epic_illuminating_needed = $mo * 10;

     $if_epic_total_glittering_needed1 = ($epic_illuminating_needed / 10) * 125;
     $if_epic_total_darksteel_needed1 = ($epic_illuminating_needed / 10) * 25000;
     $if_epic_total_copper_needed1 = ($epic_illuminating_needed / 10) * 100000;

     $epic_anima_needed = $ev * 10;

     $if_epic_total_glittering_needed2 = ($epic_anima_needed / 10) * 125;
     $if_epic_total_darksteel_needed2 = ($epic_anima_needed / 10) * 25000;
     $if_epic_total_copper_needed2 = ($epic_anima_needed / 10) * 100000;

     $epic_glittering_needed = $if_epic_total_glittering_needed1 + $if_epic_total_glittering_needed2;
     $epic_darksteel_needed =  $if_epic_total_darksteel_needed1 + $if_epic_total_darksteel_needed2;
     $epic_copper_needed = $if_epic_total_copper_needed1 + $if_epic_total_copper_needed2;

     $InsertLegendaryWeapQuery = "INSERT INTO craft_accessories_legendary(project_name, glittering, darksteel, copper, uc_platinum, uc_anima, uc_illuminating, rare_platinum, rare_anima, rare_illuminating, epic_platinum, epic_anima, epic_illuminating, legendary_platinum, legendary_anima, legendary_illuminating, total_glittering_needed_for_materials_you_have, total_darksteel_needed_for_materials_you_have, total_copper_needed_for_materials_you_have, if_epic_total_glittering_needed, if_epic_total_darksteel_needed, if_epic_total_copper_needed, date_created, created_by_user, status1, overall_percentage, legendary_platinum_percentage, legendary_anima_percentage, legendary_illuminating_percentage, total_legendary_platinum, total_legendary_anima, total_legendary_illuminating, epic_platinum_needed, epic_anima_needed, epic_illuminating_needed, IsDeleted, IsModified, category)
     VALUES
     ('$project_name', '$owned_glittering', '$owned_darksteel', '$owned_copper', '$uc_platinum', '$uc_anima', '$uc_illuminating', '$rare_platinum', '$rare_anima', '$rare_illuminating', '$epic_platinum', '$epic_anima', '$epic_illuminating', 
     '$legendary_platinum', '$legendary_anima', '$legendary_illuminating', '$total_glittering_needed_for_materials_you_have', '$total_darksteel_needed_for_materials_you_have', '$total_copper_needed_for_materials_you_have', '$epic_glittering_needed', '$epic_darksteel_needed', 
     '$if_epic_total_copper_needed2', CURRENT_TIMESTAMP(), '$session', 'Ongoing', '$overall_progress_percentage', '$legendary_platinum_percentage', '$legendary_anima_percentage', '$legendary_illuminating_percentage', '$overall_total_legendary_platinum', 
     '$overall_total_legendary_anima', '$overall_total_legendary_illuminating', 0, '$epic_anima_needed', '$epic_illuminating_needed', 0, 0, 'Accessories')
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
     $epic_platinum_needed = $st * 10;

     $if_epic_total_glittering_needed1 = ($epic_platinum_needed / 10) * 125;
     $if_epic_total_darksteel_needed1 = ($epic_platinum_needed / 10) * 25000;
     $if_epic_total_copper_needed1 = ($epic_platinum_needed / 10) * 100000;

     $epic_illuminating_needed = $mo * 10;

     $if_epic_total_glittering_needed2 = ($epic_illuminating_needed / 10) * 125;
     $if_epic_total_darksteel_needed2 = ($epic_illuminating_needed / 10) * 25000;
     $if_epic_total_copper_needed2 = ($epic_illuminating_needed / 10) * 100000;

     $epic_anima_needed = $ev * 10;

     $if_epic_total_glittering_needed3 = ($epic_anima_needed / 10) * 125;
     $if_epic_total_darksteel_needed3 = ($epic_anima_needed / 10) * 25000;
     $if_epic_total_copper_needed3 = ($epic_anima_needed / 10) * 100000;

     $epic_glittering_needed = $if_epic_total_glittering_needed1 + $if_epic_total_glittering_needed2 + $if_epic_total_glittering_needed3;
     $epic_darksteel_needed =  $if_epic_total_darksteel_needed1 + $if_epic_total_darksteel_needed2 + $if_epic_total_darksteel_needed3;
     $epic_copper_needed = $if_epic_total_copper_needed1 + $if_epic_total_copper_needed2 + $if_epic_total_copper_needed3;

     $InsertLegendaryWeapQuery = "INSERT INTO craft_accessories_legendary(project_name, glittering, darksteel, copper, uc_platinum, uc_anima, uc_illuminating, rare_platinum, rare_anima, rare_illuminating, epic_platinum, epic_anima, epic_illuminating, legendary_platinum, legendary_anima, legendary_illuminating, total_glittering_needed_for_materials_you_have, total_darksteel_needed_for_materials_you_have, total_copper_needed_for_materials_you_have, if_epic_total_glittering_needed, if_epic_total_darksteel_needed, if_epic_total_copper_needed, date_created, created_by_user, status1, overall_percentage, legendary_platinum_percentage, legendary_anima_percentage, legendary_illuminating_percentage, total_legendary_platinum, total_legendary_anima, total_legendary_illuminating, epic_platinum_needed, epic_anima_needed, epic_illuminating_needed, IsDeleted, IsModified, category)
     VALUES
     ('$project_name', '$owned_glittering', '$owned_darksteel', '$owned_copper', '$uc_platinum', '$uc_anima', '$uc_illuminating', '$rare_platinum', '$rare_anima', '$rare_illuminating', '$epic_platinum', '$epic_anima', '$epic_illuminating', 
     '$legendary_platinum', '$legendary_anima', '$legendary_illuminating', '$total_glittering_needed_for_materials_you_have', '$total_darksteel_needed_for_materials_you_have', '$total_copper_needed_for_materials_you_have', '$epic_glittering_needed', '$epic_darksteel_needed', 
     '$epic_copper_needed', CURRENT_TIMESTAMP(), '$session', 'Ongoing', '$overall_progress_percentage', '$legendary_platinum_percentage', '$legendary_anima_percentage', '$legendary_illuminating_percentage', '$overall_total_legendary_platinum', 
     '$overall_total_legendary_anima', '$overall_total_legendary_illuminating', '$epic_platinum_needed', '$epic_anima_needed', '$epic_illuminating_needed', 0, 0, 'Accessories')
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


/*$InsertLegendaryWeapQuery = "INSERT INTO craft_accessories_legendary(project_name, glittering, darksteel, copper, uc_platinum, uc_anima, uc_illuminating, rare_platinum, rare_anima, rare_illuminating, epic_platinum, epic_anima, epic_illuminating, legendary_platinum, legendary_anima, legendary,illuminating, uc_to_rare_platinum, rare_to_epic_platinum, epic_to_legendary_platinum, uc_to_rare_anima, rare_to_epic_anima, epic_to_legendary_anima, uc_to_rare_illuminating, rare_to_epic_illuminating, epic_to_legendary_illuminating, total_glittering_needed, total_darksteel_needed, total_copper_needed, date_created, created_by_user, status, overall_percentage, legendary_platinum_percentage, legendary_anima_percentage, legendary_illuminating_percentage, isDeleted, IsModified)
VALUES
()
";
*/
?>