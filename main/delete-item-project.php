<?php

session_start();
if(!isset($_SESSION['user']))
{   
    echo "<script>						
    window.location.href='404.php ';
    </script>";
}
$session = $_SESSION['user'];

include("../settings-db/config.php");

$id = $_GET['id'];
$category = $_GET['category'];

$SelectItemQuery =
"
SELECT * FROM (SELECT * FROM craft_weapon_legendary UNION SELECT * FROM craft_accessories_legendary) as cwca WHERE cwca.id = '$id' AND cwca.category = '$category'

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

        $DeleteItemQuery =
        "
        DELETE FROM craft_weapon_legendary WHERE id = '$id1' AND category = '$category1';
        ";
            
        if ($conn->query($DeleteItemQuery) === TRUE) 
        {
            echo "<script>
            alert('Successfully Delete Data!');
            window.location.href='item-project.php ';
            </script>"; 
        } 
        
        else 
        {
            echo "<script>
            alert('Something went wrong!');
            window.location.href='item-project.php ';
            </script>"; 
        }


      }
      else
      {
        $DeleteItemQuery1 =
        "
        DELETE FROM craft_accessories_legendary WHERE id = '$id1' AND category = '$category1';
        ";
            
        if ($conn->query($DeleteItemQuery1) === TRUE) 
        {
            echo "<script>
            alert('Successfully Delete Data!');
            window.location.href='item-project.php ';
            </script>"; 
        } 
        
        else 
        {
            echo "<script>
            alert('Something went wrong!');
            window.location.href='item-project.php ';
            </script>"; 
        }


      }

      
    }
  }





?>