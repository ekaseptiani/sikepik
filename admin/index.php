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
	
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-default">
						<div class="panel-heading logo">
							<img src="">
						</div>
						<div class="panel-body">
							<form name="login" action="cek_login.php" method="POST" onSubmit="return validasi(this)" role="form">
								<fieldset>
									<div class="form-group input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input placeholder="Username" type="text" class="form-control" name="username" onBlur="if (jQuery(this).val() == &quot;&quot;) { jQuery(this).val(&quot;username&quot;); }" onClick="jQuery(this).val(&quot;&quot;);" autofocus/>
									</div>
									<div class="form-group input-group">
										<span class="input-group-addon"><i class="fa fa-sign-in"></i></span>
										<input type="password" name="password" class="form-control" onBlur="if (jQuery(this).val() == &quot;&quot;) { jQuery(this).val(&quot;asdf1234&quot;); }" onClick="jQuery(this).val(&quot;&quot;);" placeholder="Password">
									</div>
									<input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
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
