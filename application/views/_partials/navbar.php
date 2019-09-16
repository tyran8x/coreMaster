<?php
 $dataGioiThieu = (object) $this->GioiThieu_model->listall();
 $nameUrl=$this->router->fetch_class();
?>


<div class="bodycontent">
	<div class="headercontent container-fluid">
		<div class="container">
			<div class="leftheader col-md-10 col-lg-10">
				<img src="../assets/dist/images/logo.png" href="/trang-chu" />
			</div>
			<div class="rightheader col-md-2 col-lg-2">
				<img src="../assets/dist/images/hotline.png" />
			</div>
		</div>
	</div>
	<div class="navigation container-fluid">
		<div class="container">
			<div class="leftnav">
				<div id="hor_nav">
					<ul>
						<li class="<?php echo $nameUrl =='home'?'active':'' ?> " ><a href="#"><span>Trang chủ</span></a></li>
						<li class="hassub <?php echo $nameUrl =='gioithieu'?'active':'' ?> "><a href=""><span>Giới thiệu</span></a>
							<ul>
							<?php
								foreach ($dataGioiThieu as $key => $value){
							?>
								<li><a href="gioithieu?id=<?php echo $value['id'] ?> "><span> <?php echo $value['title'] ?> </span></a></li>
								<?php
								}
								?>
							</ul>
						</li>
						<li class="<?php echo $nameUrl =='dichvu'?'active':'' ?> "><a href="dichvu"><span>Dịch vụ</span></a></li>
						<li class="<?php echo $nameUrl =='tintuc'?'active':'' ?> "><a href="tintuc"><span>Tin tức</span></a></li>
						<li class="<?php echo $nameUrl =='duan'?'active':'' ?> "><a href="duan"><span>Dự án</span></a></li>
						<li class="<?php echo $nameUrl =='nhanluc'?'active':'' ?> "><a href="nhanluc"><span>Nhân lực</span></a></li>
						<li class="<?php echo $nameUrl =='tuyendung'?'active':'' ?> "><a href="tuyendung"><span>Tuyển dụng</span></a></li>
						<li class="<?php echo $nameUrl =='lienhe'?'active':'' ?> "><a href="lienhe"><span>Liên hệ</span></a></li>
					</ul>
				</div>
			</div>
			<div class="rightnav">
				<div class="searchform">
					<input type="text" name="search">
					<a href="" class="btn-search">Tìm kiếm</a>
				</div>
			</div>
		</div>
	</div>
</div>