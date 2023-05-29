<a class="navbar-brand" href="">
	<?php 
		$query = "select * from images where typeId = 1 limit 1";
		$result = $connect -> query($query);
	?>
	<?php foreach ($result as $item): ?>
		<img src="../assets/images/<?=$item['name']?>" alt="Logo Song Phương Food" />
	<?php endforeach ?>
</a>