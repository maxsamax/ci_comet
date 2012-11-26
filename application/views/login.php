<!DOCTYPE HTML>
<html>
<head>
	<title>Login in..</title>
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
				loginForm = $(e.target).parent("form");
debugger;
				ajaxdata.username = $(loginForm).children("input[type=text]");
				ajaxdata.password = $(loginForm).children("input[type=password]");
				
				console.log(ajaxdata);
				
				$.post("application/ajax/check_user", ajaxdata).error(function () {
					alert("Server error");
				});
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
					<input type="password"/>
				</div>
				<div>
					<button id="send_login" class="btn btn-primary">Login</button>
					<button id="cancel_clear" class="btn">Cancel</button>
				</div>
				<div>
					<a href="ci_comet/register"><i>Register form</i></a>
				</div>

			</form>
		</div>
	</div>
</body>
</html>
