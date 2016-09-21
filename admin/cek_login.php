<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Admin S i k e p i k</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- MetisMenu CSS -->
		<link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/sb-admin.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	</head>
<body OnLoad="document.login.username.focus();">
	<?php
		include "../system/koneksi.php";
		function anti_injection($data){
		
		$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
		return $filter;
		}

		$username = anti_injection($_POST['username']);
		$pass     = anti_injection(md5($_POST['password']));

		// pastikan username dan password adalah berupa huruf atau angka.
		if (!ctype_alnum($username) OR !ctype_alnum($pass)){
			echo "
								<div class='container'>
									<div class='row'>
										<div class='col-md-4 col-md-offset-4'>
											<div class='login-panel panel panel-default'>
												
												<div class='alert alert-danger'>
													Username atau Password Anda tidak benar !!!
												</div>
												
												<div class='panel-heading logo'>
													<img src='img/logo.png'>
												</div>
												<div class='panel-body'>
													<form name='login' action='cek_login.php' method='POST' onSubmit='return validasi(this)' role='form'>
														<fieldset>
															<div class='form-group input-group'>
																<span class='input-group-addon'><i class='fa fa-user'></i></span>
																<input placeholder='Username' type='text' class='form-control' name='username' onBlur='if (jQuery(this).val() == &quot;&quot;) { jQuery(this).val(&quot;username&quot;); }' onClick='jQuery(this).val(&quot;&quot;);' autofocus/>
															</div>
															<div class='form-group input-group'>
																<span class='input-group-addon'><i class='fa fa-sign-in'></i></span>
																<input type='password' name='password' class='form-control' onBlur='if (jQuery(this).val() == &quot;&quot;) { jQuery(this).val(&quot;asdf1234&quot;); }' onClick='jQuery(this).val(&quot;&quot;);' placeholder='Password'>
															</div>
															<input class='btn btn-lg btn-primary btn-block' type='submit' value='Login'>
														</fieldset>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>";
		}
		else{
			$login=mysql_query("SELECT * FROM users WHERE username='$username' AND password='$pass'");
			$ketemu=mysql_num_rows($login);
			$r=mysql_fetch_array($login);

			// Apabila username dan password ditemukan
			if ($ketemu > 0){
			session_start();

			$_SESSION[namauser]     = $r['username'];
			$_SESSION[passuser]     = $r['password'];
			$_SESSION[leveluser]    = $r['level'];

			$sid_lama = session_id();
			
			session_regenerate_id();

			$sid_baru = session_id();

			mysql_query("UPDATE users SET id_session='$sid_baru' WHERE username='$username'");
			header('location:media.php?module=home');
			
			}
		
		else{
				echo "
					<div class='container'>
						<div class='row'>
							<div class='col-md-4 col-md-offset-4'>
								<div class='login-panel panel panel-default'>
									
									<div class='alert alert-danger'>
										Username atau Password Anda tidak benar !!!
									</div>
									
									<div class='panel-heading logo'>
										<img src='img/logo.png'>
									</div>
									<div class='panel-body'>
										<form name='login' action='cek_login.php' method='POST' onSubmit='return validasi(this)' role='form'>
											<fieldset>
												<div class='form-group input-group'>
													<span class='input-group-addon'><i class='fa fa-user'></i></span>
													<input placeholder='Username' type='text' class='form-control' name='username' onBlur='if (jQuery(this).val() == &quot;&quot;) { jQuery(this).val(&quot;username&quot;); }' onClick='jQuery(this).val(&quot;&quot;);' autofocus/>
												</div>
												<div class='form-group input-group'>
													<span class='input-group-addon'><i class='fa fa-sign-in'></i></span>
													<input type='password' name='password' class='form-control' onBlur='if (jQuery(this).val() == &quot;&quot;) { jQuery(this).val(&quot;asdf1234&quot;); }' onClick='jQuery(this).val(&quot;&quot;);' placeholder='Password'>
												</div>
												<input class='btn btn-lg btn-primary btn-block' type='submit' value='Login'>
											</fieldset>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>";
				
			}}
			?>
<!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
		
	</body>
</html>