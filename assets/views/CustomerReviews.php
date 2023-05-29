<div class="customer-reviews-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Đánh giá của khách hàng</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 mr-auto ml-auto text-center">
				<div id="reviews" class="carousel slide" data-ride="carousel">
					<?php 
						$query = "select * from customerrv";
						$result = $connect -> query($query);
					?>
					<div class="carousel-inner mt-4">
						<div class="carousel-item text-center active">
							<div class="img-box p-1 border rounded-circle m-auto">
								<img class="d-block w-100 rounded-circle" src="../assets/images/profile-1.jpg" alt="">
							</div>
							<h5 class="mt-4 mb-0">
									<strong class="text-warning text-uppercase">Tên khách hàng</strong>
							</h5>
							<h6 class="text-dark m-0">Nghề nghiệp</h6>
							<p class="m-0 pt-3">Đánh giá của khách hàng</p>
						</div>
						<?php foreach($result as $item): ?>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="../assets/images/<?=$item['image']?>" alt="">
								</div>
								<h5 class="mt-4 mb-0">
									<strong class="text-warning text-uppercase"><?=$item['name']?></strong>
								</h5>
								<h6 class="text-dark m-0"><?=$item['job']?></h6>
								<p class="m-0 pt-3"><?=$item['review']?></p>
							</div>
						<?php endforeach ?>
					</div>
					<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
						<i class="fas fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
						<i class="fas fa-angle-right" aria-hidden="true"></i>
						<span class="sr-only">Next</span>
					</a>
      			</div>
			</div>
		</div>
	</div>
</div>