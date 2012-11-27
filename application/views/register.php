<!DOCTYPE HTML>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/ci_comet/application/src/css/bootstrap.css" />
	<style type="text/css">
		#centerer{
			width:15%;
			margin: 100px auto;
		}

		#main_wrapper{
			width: 100%;
		}
	</style>

	<script type="text/javascript" src="http://localhost/ci_comet/application/src/js/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$("#send_reg").click(function(e) {
				var ajaxdata = {},
				regForm = $(e.target).parent().parent("form");

				ajaxdata.username = $(regForm).children().children("input[type='text']").val();
				if ($(regForm).children().children("#pass").val() == $(regForm).children().children("#confirm").val()) {

					ajaxdata.password = $(regForm).children().children("input[type='password']").val();
					console.log(ajaxdata);
					$.ajax({
						url:"http://localhost/ci_comet/index.php/ajax/reg_user", 
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
