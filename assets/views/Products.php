<div class="menu-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Sản phẩm</h2>
					<p>Click vào tên sản phẩm để biết thêm chi tiết!</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="special-menu text-center">
					<?php 
						$query = "select * from producttype";
						$result = $connect -> query($query);
					?>
					<div class="button-group filter-button-group">
						<button class="active" data-filter="*">All</button>
						<?php foreach($result as $item): ?>
							<button data-filter=".<?=$item['id']?>"><?=$item['name']?></button>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row special-list">
			<?php 
				$query = "select * from products where status=1";
				$result = $connect -> query($query);
			?>
			<?php foreach($result as $item): ?>
				<div class="col-lg-4 col-md-6 special-grid <?=$item['typeId']?>">
					<div class="gallery-single fix">
						<img src="../assets/images/<?=$item['image']?>" class="img-fluid" alt="Image">
						<div class="why-text">
							<center>
								<a href="Detail/?id=<?=$item['id']?>">
									<h4>
										<i><?=$item['name']?></i>
									</h4>
								</a>
								<p><?=$item['shortDes']?></p>
								<h5><?=number_format($item['price'],0,',','.')?> ₫</h5>
							</center>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>