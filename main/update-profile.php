<?php
include("../settings-db/config.php");
session_start();
$session = $_SESSION['user'];

$Password = $_POST['Password'];
$Password1 = $_POST['Password1'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$upload = basename( $_FILES["upload"]["name"]);

$target_dir = "dp_image/";
$target_file = $target_dir . basename($_FILES["upload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($Password == $Password1){
	
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["upload"]["tmp_name"]);
    if($check !== false) {
    
            echo "<script>
            alert('File is an image - " . $check["mime"] . "');
            window.location.href='dashboard.php ';
            </script>";
            
        
            $uploadOk = 1;
        } else {
            echo "<script>
            alert('File is not an image');
            window.location.href='dashboard.php ';
            </script>";
            $uploadOk = 0;
        }
    }

    /*/
    if (file_exists($target_file)) {
        echo "<script>
            alert('Sorry image already exist!');
            window.location.href='index.php ';
            </script>";
        $uploadOk = 0;
    }
    /*/
    if ($_FILES["upload"]["size"] > 500000000) {
        echo "<script>
            alert('Sorry your file is too large!');
            window.location.href='dashboard.php ';
            </script>";
        $uploadOk = 0;
    }
    
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "<script>
            alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed');
            window.location.href='dashboard.php ';
            </script>";
        
        $uploadOk = 0;
    }
    
    if ($uploadOk == 0) {
        echo "<script>
            alert('Failed to Upload');
            window.location.href='dashboard.php ';
            </script>";
    
    } 
    
    else {
    
    
            $hashed_password = password_hash($Password1, PASSWORD_DEFAULT);

            
            $UpdateProfileQuery = "UPDATE user_account SET Pass= '$hashed_password', FirstName = '$FirstName', LastName = '$LastName', ProfilePicture = '$upload' WHERE id = '$session'";

                if ($conn->query($UpdateProfileQuery) === TRUE) 
                {
                
                    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) 
                     {
                    
           
                    echo "<script>
                    alert('Update Successfully: The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.');
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
                
                } 
                else 
                
                {
                    echo "<script>
                    alert('Something went wrong!');
                    window.location.href='dashboard.php ';
                    </script>";
                }

                $conn->close();
        }
        
    }
        
        elseif($Password != $Password1){
        
                    echo "<script>
                    alert('Pssword does not match!');
                    window.location.href='dashboard.php ';
                    </script>";
        
        }
        
        else{
        
                    echo "<script>
                    alert('Could not be reach!');
                    window.location.href='dashboard.php ';
                    </script>";
        
        }


?>