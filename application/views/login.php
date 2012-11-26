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
				loginForm = $(e.target).parent().parent("form");

				ajaxdata.username = $(loginForm).children().children("input[type='text']").val();
				ajaxdata.password = $(loginForm).children().children("input[type='password']").val();
				console.log(ajaxdata);
				$.ajax({
					url:"index.php/ajax/check_user", 
					data: ajaxdata,
					type: "POST",
					success: function(res){
							alert(res);
						}/*,
					error: function () {
						alert("Server error");
						}*/
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
					<button type="button" id="send_login" class="btn btn-primary">Login</button>
					<button type="button" id="cancel_clear" class="btn">Cancel</button>
				</div>
				<div>
					<a href="ci_comet/register"><i>Register form</i></a>
				</div>

			</form>
		</div>
	</div>
</body>
</html>
