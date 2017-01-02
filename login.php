<?php
    session_start();
    $error=' ';
    if (isset($_POST['submit']))
    {
            if (empty($_POST['username']) || empty($_POST['password']))
              {
		              $error = "Nezadali ste meno alebo heslo.";
	            }
            else
              {
                  $login = $_POST['username'];
                  $heslo = $_POST['password'];
                  include "connect.php";
                  $login = stripslashes($login);
		              $heslo = stripslashes($heslo);
		              $login = mysql_real_escape_string($login);
		              $heslo = mysql_real_escape_string($heslo);
                  $query = mysql_query("SELECT * FROM login WHERE password='$heslo' AND username='$login'");
                  $rows = mysql_num_rows($query);
                      if ($rows == 1)
                            {
		                        $_SESSION['login_user'] = $login;
                                header("location: cms.php");
                                exit() ;
		                        }
                      else
                      {
                         $error = "Zadali ste nesprávne meno alebo heslo.";                      
                      }
              }
    }
?>