<!DOCTYPE HTML>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="application/src/css/bootstrap.css" />
	<style type="text/css">
		#centerer{
			width:15%;
			margin: 100px auto;
		}

		#main_wrapper{
			width: 100%;
		}
	</style>

	<script type="text/javascript" src="application/src/js/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$("#send_login").click(function(e) {
				var ajaxdata = {},
				regForm = $(e.target).parent().parent("form");

				ajaxdata.username = $(loginForm).children().children("input[type='text']").val();
				if ($(loginForm).children().children("#pass").val() == $(loginForm).children().children("#confirm").val()) {

					ajaxdata.password = $(loginForm).children().children("input[type='password']").val();
					console.log(ajaxdata);
					$.ajax({
						url:"index.php/ajax/reg_user", 
						data: ajaxdata,
						type: "POST",
						error: function (mes) {
								alert(mes);
							}
						});
				}
			});			
		})
	</script>
</head>
<body>
	<div id="main_wrapper">
		<div id="centerer">
			<form>
				<div>
					<label for="text">E-mail</label>
					<input type="text"/>
				</div>
				<div>
					<label for="password">Password</label>
					<input type="password" id="pass" />
				</div>
				<div>
					<label for="password">Password again</label>
					<input type="password" id="confirm" />
				</div>
				<div>
					<button type="button" id="send_reg" class="btn btn-primary">Register</button>
					<button type="button" id="cancel_clear" class="btn">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
