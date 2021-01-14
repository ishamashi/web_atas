<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CodeIgniter Kelas Atas</title>
</head>
<body>
	<form action="<?php echo base_url('index.php/home/add_user'); ?>" method="post">
		<h3>Tambah Data</h3>
		Nama : <input name="usr_name" type="text"><br>
		Username : <input name="usr_username" type="text"><br>
		Password : <input name="usr_password" type="password"><br>
		<input type="submit" value="Tambah">
	</form>
	<hr>
	<h3>Tampil Data</h3>
	<table width="500" border="1">
		<tr>
			<th>Username</th>
			<th>Nama</th>
			<th>Password</th>
			<th>Action</th>
		</tr>

		<?php 
		foreach ($user as $key) { ?>
		<tr>
			<td><?= $key->usr_username ?></td>
			<td><?= $key->usr_name ?></td>
			<td><?= $key->usr_password ?></td>
			<td>
				<a href="<?php echo base_url('index.php/Home/edit/'.$key->usr_id); ?>">Edit</a> 
				<?php echo anchor('index.php/Home/delete_user/'.$key->usr_id,'Hapus'); ?>		
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>	