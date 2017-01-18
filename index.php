<?php
require 'vendor/autoload.php';


use Faker\Factory as Faker;

$faker = Faker::create();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello World</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<table class="table table-striped">
			<tr>
				<th>SN.</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Company</th>
				<th>Address</th>
				<th>Profile</th>
			</tr>
			<?php for($i = 1; $i <= 10; $i++): ?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $faker->name('female') ?></td>
					<td><?= $faker->email ?></td>
					<td><?= $faker->phoneNumber ?></td>
					<td><?= $faker->company ?></td>
					<td><?= $faker->address ?></td>
					<td><img src="<?= $faker->imageUrl(100, 100) ?>" class="img-rounded" alt=""></td>
				</tr>
			<?php endfor; ?>
		</table>
	</div>
</body>
</html>