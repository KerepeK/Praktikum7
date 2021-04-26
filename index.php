<html>
<!-- kepala dan judul -->
    <head>
        <title>LOGIN</title>
    </head>
    <body>
    <!-- haeding -->
    <h3>Halaman Login </h3>
	<form method="post" action="login.php" > 
		<!-- membuat table -->
        <table>
            <!-- membuat box unutk diisi -->
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
            <!-- membuat button -->
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Log In"></td>
			</tr>
		</table>
	</form>
    </body>
</html>