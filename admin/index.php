<?php
	session_start();
	$noNavbar = '';
	$pageTitle = 'Login';

	if (isset($_SESSION['Username'])) {
		header('Location: dashboard.php'); // Redirect To Dashboard Page
	}

	include 'init.php';

	// Check If User Coming From HTTP Post Request

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$username = $_POST['user'];
		$password = $_POST['pass'];
		

		// Check If The User Exist In Database

		$stmt = $con->prepare("SELECT 
									userID, Username, Password 
								FROM 
									shop.users 
								WHERE 
									Username = ? 
								AND 
									Password = ? 
								AND 
									GroupID = 1
								LIMIT 1");

		$stmt->execute(array($username, $password));
		$row = $stmt->fetch();
		$count = $stmt->rowCount();

		// If Count > 0 This Mean The Database Contain Record About This Username
        if($stmt)
        {
            if($count>0)
            {
              $_SESSION['Username']=$username;
              $_SESSION['ID']=$row['userID'];
			  header('Location: dashboard.php');// Redirect To Dashboard Page
              exit();
            }
            else
            {
                echo " no data found";
            }
        }
        else 
        {
            echo "failed to search  ";
        }

	}

?>

	<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<h4 class="text-center">Admin Login</h4>
		<input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off" />
		<input class="form-control" type="password" name="pass" placeholder="Password" autocomplete="new-password" />
		<input class="btn btn-primary btn-block" type="submit" value="Login" />
	</form>

<?php include $tpl . 'footer.php'; ?>

