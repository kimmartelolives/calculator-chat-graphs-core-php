<?php
include("../settings-db/config.php");
session_start();
if(!isset($_SESSION['user']))
{
    echo "<script>						
    window.location.href='404.php ';
    </script>";
}
$session = $_SESSION['user'];

$message = $_POST['message'];


    $InsertClearanceNewQuery1 = "INSERT INTO chat_messages(user_id, message, date_created) 
    VALUES
    ('$session', '$message', CURRENT_TIMESTAMP())  
    ";
    
                    if ($conn->query($InsertClearanceNewQuery1) === TRUE) 
                    {
                        
                    
                    echo "<script>
                    window.location.href='dashboard.php ';
                    </script>";
                                        

                    }
                    else 
                    {
                    echo "<script>
                    alert('Something went wrong uploading image!');
                    window.location.href='dashboard.php ';
                    </script>";
                                                        
                    }
                            
                    
               
