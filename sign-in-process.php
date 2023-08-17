<?php
/* 

03/11/2021 - KM
User Type Id Breakdown:
0 = Alien
1 = Admin
2 = Resident

IsBan Breakdown:
0 = No
1 = Yes

Status:
Pending
Active

*/
session_start();
include("settings-db/config.php");
$email = $_POST['email'];
$password = $_POST['password'];

$id_get = mysqli_query($conn, "SELECT id FROM user_account WHERE UserName='$email' LIMIT 1");
$id = mysqli_fetch_array($id_get);



$query = "SELECT id, Pass, UserTypeId, IsDeleted, Status, IsBan FROM user_account where UserName='$email' ";  
$result = mysqli_query($conn, $query);  

		if($row = mysqli_fetch_array($result))  
			{
               $test = $row['Pass'];
			   $user_id = $row['id'];
             
            if(password_verify($password, $test)) 
            {
				$_SESSION['user']=$id['id'];
                				
				if($row['UserTypeId'] == '1')
				{
                    
				
						if($row['IsBan'] == '1')
						{
						
						echo "<script>
						alert('Account Deactivated! Please Contact Administrator!');
						window.location.href='login-portal.php ';
						</script>";
						
						}  

                        elseif($row['Status'] == 'Pending')
                        {
                        echo "<script>
                        alert('Account Pending! Please wait for confirmation!');
                        window.location.href='login-portal.php ';
                        </script>";
                        }

						elseif($row['IsDeleted'] == '1')
                        {
                        echo "<script>
                        alert('Account Deactivated! Please Contact Administrator!');
                        window.location.href='login-portal.php ';
                        </script>";
                        }


						else
						{

							$UpdatetSignInQuery = "UPDATE user_account SET LastAccessedOn = CURRENT_TIMESTAMP() WHERE id = $user_id";		

							if ($conn->query($UpdatetSignInQuery) === TRUE) 
							{
								

								echo "<script>
								alert('You have successfully Logged in! Admin');
								window.location.href='main/dashboard.php';
								</script>";
							
							}

						}
				
				
				}
				elseif($row['UserTypeId'] == '2')
				{
				
						if($row['IsBan'] == '1')
						{
						
						echo "<script>
						alert('Account Deactivated! Please Contact Administrator!');
						window.location.href='login-portal.php ';
						</script>";
						
						}

                        elseif($row['Status'] == 'Pending')
                        {
                        echo "<script>
                        alert('Account Pending! Please wait for confirmation!');
                        window.location.href='login-portal.php ';
                        </script>";
                        }

						else
						{
						
							$UpdatetSignInQuery = "UPDATE user_account SET LastAccessedOn = CURRENT_TIMESTAMP() WHERE id = $user_id";		

							if ($conn->query($UpdatetSignInQuery) === TRUE) 
							{
								
							
					
								echo "<script>
								alert('You have successfully Logged in!');
								window.location.href='main/dashboard.php';
								</script>";
								
							}	
						}	
				}			
				else
				{
				
				echo "<script>
				alert('Invalid Username or Password!');
				window.location.href='login-portal.php';
				</script>";
				}
				
            }
            else
				{
				
				echo "<script>
				alert('Invalid Username or Password!');
				window.location.href='login-portal.php';
				</script>";
				}
			  }

			  else
				{
				
				echo "<script>
				alert('Invalid Username or Password!');
				window.location.href='login-portal.php';
				</script>";
				}
			  
	
mysqli_close($conn);

?>