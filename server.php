<?php 
	session_start();

	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	include('dbConnection.php');

	// Regisztráció
	if (isset($_POST['reg_user'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$checkUser = "SELECT * FROM users WHERE username='$username'";
		$checkEmail = "SELECT * FROM users WHERE email='$email'";

		$results1 = mysqli_query($db, $checkUser);
		$results2 = mysqli_query($db, $checkEmail);
		
		if (mysqli_num_rows($results1) >= 1) {
			array_push($errors, "Fehasználónév már foglalt!");
		}else if (mysqli_num_rows($results2) >= 1) {
			array_push($errors, "Email cím már foglalt!");
		}else{

		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		if (empty($username)) { array_push($errors, "Felhasználónév kötelező!"); }
		if (empty($email)) { array_push($errors, "Email kötelező!"); }
		if (empty($password_1)) { array_push($errors, "Jelszó kötelező!"); }

		if ($password_1 != $password_2) {
			array_push($errors, "A kettő jelszó nem eggyezik!");
		}

		// regisztráció ha nincs error
		if (count($errors) == 0) {
			$password_2 = md5($password_1);
			$password_3 = base64_encode($password_2);
			$password_4 = md5($password_3);

			$hash = md5( rand(0,10000));
			$date_join = date('Y-m-d H:i:s');

			$query = "INSERT INTO users (username, email, password, date_join, hash) 
					  VALUES('$username', '$email', '$password_4', '$date_join', '$hash')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Bejelentkezve";
			header('location: index.php');
		}
		}
		

	}else{
		header("location: index.php");
	}

	// Login
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Felhasználónév kötelező!");
		}
		if (empty($password)) {
			array_push($errors, "Jelszó kötelező!");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$password_1 = base64_encode($password);
			$password_2 = md5($password_1);
			
			
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password_2'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Bejelentkezve";
				header('location: index.php');
			}else {
				array_push($errors, "Rossz felhasználó/jelszó kombináció!");
			}
		}
	}else{
		header("location: index.php");
	}


	/*Jelszó emlékeztető
	if(isset($_POST['pw_forget'])){
		$email = $_POST['email'];
		
		$query = "SELECT * FROM users WHERE email='$email'";
		$results = mysqli_query($db, $query);
		if(mysqli_num_rows($results) == 1){
			if ($stmt = $db->prepare("SELECT hash FROM users where email=?")) {
				$stmt->bind_param("s", $email);
				$stmt->execute();
				$stmt->bind_result($hash_user);
				$stmt->fetch();
				//printf("%s", $hash_user);
				$stmt->close();
			}
			//email küldés
			
            $msgContent = "somnia.nhely.hu/changepw.php?hash=$hash_user";
			mail($email, 'Jelszó emlékeztető', $msgContent, 'From: info@somnia.nhely.hu');
			
		}else{
			array_push($errors, "Nincs ilyen felhasználó $email email címmel.");
		}
	}
	//Jelszó változtatás
	if(isset($_POST['pw_new'])){
		if(isset($_GET['hash'])){
			$password_0_new = $_POST['password_new'];
			$password_1_new = $_POST['password_new_1'];

			if ($password_0_new != $password_1_new) {
				array_push($errors, "A kettő jelszó nem eggyezik!");
			}else{
				$hash_new = $_GET['hash'];

				$password_1_new_sec = md5($password_0_new);
				$password_2_new_sec = base64_encode($password_1_new_sec);
				$password_3_new_sec = md5($password_2_new_sec);
				$password_4_new_sec_end = "SOMNIASECURITY".$password_3_new_sec;

				$update_pw = "UPDATE users SET password='$password_4_new_sec_end' WHERE hash='$hash_new'";
				mysqli_query($db, $update_pw);
				$hash_reset = md5( rand(0,10000));
				$update_hash = "UPDATE users SET hash='$hash_reset' WHERE hash='$hash_new'";
				mysqli_query($db, $update_hash);
				header("location: login.php");
			}
		}else{
			header("location: index.php");
		}
	}*/
?>