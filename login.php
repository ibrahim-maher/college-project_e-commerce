<?php
	ob_start();
	session_start();
	$pageTitle = 'Login';
	
	include 'init.php';

	// Check If User Coming From HTTP Post Request

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if (isset($_POST['login'])) {

			$user = $_POST['username'];
			$pass = $_POST['password'];
	

			// Check If The User Exist In Database

			$stmt = $con->prepare("SELECT 
										UserID, Username, Password 
									FROM 
										shop.users 
									WHERE 
										Username = ? 
									AND 
										Password = ?");

			$stmt->execute(array($user, $pass));

			$get = $stmt->fetch();

			$count = $stmt->rowCount();

			// If Count > 0 This Mean The Database Contain Record About This Username

			if ($count > 0) {

				// if he is admin 
				$stmt = $con->prepare("SELECT 
				UserID, Username, Password 
			FROM 
				shop.users 
			WHERE 
				Username = ? 
			AND 
				Password = ?
			AND 
			GroupID = 1
				LIMIT 1
				");

				$stmt->execute(array($user, $pass));

				$get = $stmt->fetch();

				$counter = $stmt->rowCount();
				if ($counter > 0) 
				{
					$_SESSION['Username']=$username;
					$_SESSION['ID']=$row['userID'];
					header('Location: admin/dashboard.php');// Redirect To Dashboard Page
					exit();

				}

				$_SESSION['user'] = $user; // Register Session Name

				$_SESSION['uid'] = $get['UserID']; // Register User ID in Session

				header('Location: index.php'); // Redirect To Dashboard Page

				exit();
			}
            else 
            {
                echo "no data found";
            }

		} 
        
     

	}

?>

<div class="container login-page"  style="height:500px ; padding:50px;">
	<h1 class="text-center">
		<span class="selected" data-class="login">Login</span>

	</h1>
	<!-- Start Login Form -->
	<form class="login text-center" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<div class="input-container m-5">
			<input 
				class="form-control" 
				type="text" 
				name="username" 
				autocomplete="off"
				placeholder="Type your username" 
				required />
		</div>
		<div class="input-container m-5">
			<input 
				class="form-control" 
				type="password" 
				name="password" 
				autocomplete="new-password"
				placeholder="Type your password" 
				required />
		</div>
		<div class="row justify-content-center">
		<input class="btn btn-primary btn-block mr-2 "  style="width:90px; " name="login" type="submit" value="Log in" />
		<a href="register.php" class="btn btn-primary "> sign up</a>
		</div>
	</form>
	<!-- End Login Form -->
	
</div>

<?php 
	include $tpl . 'footer.php';
	ob_end_flush();
?>