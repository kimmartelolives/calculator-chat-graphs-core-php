<?php
include("settings-db/config.php");

$email = $_POST['email'];
$first_name = $_POST['first'];
$last_name = $_POST['last'];
$password = $_POST['password'];
$password1 = $_POST['password1'];

if($password == $password1)
{
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      $SelectUserQuery = "SELECT id FROM user_account WHERE UserName = '$email' AND Firstname = '$first_name' AND LastName = '$last_name'";
      $result = $conn->query($SelectUserQuery);

      if ($result->num_rows > 0) 
      {
      
        while($row = $result->fetch_assoc()) 
        {
          echo "<script>
                  alert('It looks like this email address and account's name ($email, $first_name $last_name) are already registered. Please login. Thank you!');
                  window.location.href='sign-up-portal.php ';
                  </script>";
        }
      } 
      else      
      {

        $InsertSignUpQuery = "INSERT INTO user_account(UserName, Pass, FirstName, MiddleName, LastName, UserTypeId, IsDeleted, ProfilePicture, Status, IsBan, CreatedOn) 
        VALUES
        ('$email', '$hashed_password', '$first_name', ' ', '$last_name', 2, 0, 'default.gif', 'Pending', 0, CURRENT_TIMESTAMP())
        ";

            if ($conn->query($InsertSignUpQuery) === TRUE) 
            {

 
                        echo "<script>
                        alert('Registered New Account. Your account will be activated once the ADMIN check your informations. Thank you!');
                        window.location.href='login-portal.php ';
                        </script>";
                   
            }	  
            else 
            {
              echo "Error: " . $InsertSignUpQuery . "<br>" . $conn->error;
            }
        }
        $conn->close();
}

else
{
  echo "<script>
       alert('Those passwords didn’t match. Please Try again.');
       window.location.href='sign-up-portal.php ';
      </script>";
}
?>