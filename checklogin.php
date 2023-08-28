<?php

ob_start();
include 'db.php';
$username = '';
$userpwd = '';

if (isset($_REQUEST['username'])):
    if (!empty($_REQUEST['username'])):
        $username = htmlspecialchars($_POST['username']);
    else:
        header("Location: index.php?login=failed");
    //die();
    endif;
else:
    header("Location: index.php?login=failed");
// die();
endif;

if (isset($_REQUEST['userpwd'])):
    if (!empty($_REQUEST['userpwd'])):
        $userpwd = htmlspecialchars($_POST['userpwd']);

    else:
        header("Location: index.php?login=failed");
    // die();
    endif;
else:
    header("Location: index.php?login=failed");
//die();
endif;


$db_uname = '';
$db_pwd = '';
$db_role = '';


$result = mysqli_query($conn, "SELECT * FROM user where username='$username' and password='$userpwd'");
$row = mysqli_fetch_row($result);

$db_uname = $row['username'];
$db_pwd = $row['password'];
$db_role = $row['user_type'];

if ($db_uname == $username):
    if ($db_pwd == $userpwd):
        session_start();
        $_SESSION['usr'] = $db_uname;
	header("Location:dashboard.php");
        if ($_SESSION['usr']) {
           
			$_SESSION['loginsuccess'] = 'success';
						
        
        } else
            header("Location: index.php?login=failed");

    else:
        header("Location: index.php?login=failed");

    endif;
else:
    header("Location: index.php?login=failed");
        
    endif;
