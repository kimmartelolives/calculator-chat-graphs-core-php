<?php
session_start();
include("../settings-db/config.php");
$session = $_SESSION['user'];
if(session_destroy())
{           
                        echo "<script>
                        window.location.href='../index.php ';
                        </script>";
                   
}
?>
