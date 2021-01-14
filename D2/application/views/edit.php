<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CodeIgniter Kelas Atas</title>
</head>
<body>
	<form action="<?php echo base_url('index.php/home/edit_user'); ?>" method="post">
		<h3>Tambah Data</h3>
		<input name="usr_id" value="<?= $user['0']->usr_id ?>" type="hidden">
		Nama : <input name="usr_name" value="<?= $user['0']->usr_name ?>" type="text"><br>
		Username : <input name="usr_username" value="<?= $user['0']->usr_username ?>" type="text"><br>
		Password : <input name="usr_password" value="<?= $user['0']->usr_password ?>" type="password"><br>
		<input type="submit" value="Tambah">
	</form>
	<hr>
</body>
</html>	