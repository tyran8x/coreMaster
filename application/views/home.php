<?php
    $catId=1;
	$dataTinTuc = (object) $this->Content_model->listAllTinTucLimit($catId,0,4);
	
?>

<div class="slidecontent container-fluid">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">

		      <div class="item active">
		        <img src="../assets/dist/images/slide1.jpg" alt="Thẩm định giá Bất động sản" style="width:100%;">
		        <div class="carousel-caption">
		          <h3>Thẩm định giá Bất động sản</h3>
		        </div>
		      </div>

		      <div class="item">
		        <img src="../assets/dist/images/slide1.jpg" alt="Thẩm định dự án đầu tư" style="width:100%;">
		        <div class="carousel-caption">
		          <h3>Thẩm định dự án đầu tư</h3>
		        </div>
		      </div>
		    
		      <div class="item">
		        <img src="../assets/dist/images/slide1.jpg" alt="Thẩm định tài sản vô hình" style="width:100%;">
		        <div class="carousel-caption">
		          <h3>Thẩm định tài sản vô hình</h3>
		        </div>
		      </div>
  
    		</div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
  		</div>
	</div>

	<?php //cho $form1->open(); ?>
	              <?php //echo $form->bs3_text('Username', 'username'); ?>
				<?php //echo $form1->close(); ?> 

	<div class="maincontent container-fluid">
		<div class="container">
			<div class="leftmain">
				<div class="module danhsachtin">
					<div class="headermodule">
						<h3 class="title-header"><a href=""><span>Tin tức - Sự kiện</span></a></h3>
					</div>
					<div class="contentmodule">
						<div class="listnews">

							<?php
								foreach ($dataTinTuc as $key => $value){
							?>
							<div class="news">
								<div class="imgnew">
									<img src="<?php  echo $value['smallimage']== ''?'../assets/dist/images/new1.jpg':'../assets/uploads/files/tintuc/'.$value['smallimage'] ?>">
								</div>
								<div class="contentnew">
									<div class="titlenew"><span> <?php echo $value['title']  ?></span></div>
									<div class="infonew"><p><?php echo $value['info']  ?></p></div>
								</div>
							</div>
							<?php
								}
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="rightmain">
				<div class="module danhsachtieude">
					<div class="headermodule">
						<h3 class="title-header"><a href=""><span>Tiêu điểm</span></a></h3>
					</div>
					<div class="contentmodule">
						<ul class="ul-news">
							<li class="li-news"><span>THÔNG BÁO: Chào bán cạnh tranh cổ phần</span></li>
							<li class="li-news"><span>THÔNG BÁO: Chào bán cạnh tranh cổ phần</span></li>
							<li class="li-news"><span>THÔNG BÁO: Chào bán cạnh tranh cổ phần</span></li>
							<li class="li-news"><span>THÔNG BÁO: Chào bán cạnh tranh cổ phần</span></li>
						</ul>
					</div>
				</div>
				<div class="module lienhe">
					<div class="headermodule">
						<h3 class="title-header"><span>Liên hệ</span></h3>
					</div>
					<div class="contentmodule">
						<div class="box-support">
							<div class="item">
								<div class="box">
									<div class="title-box">Trụ sở chính</div>
									<a href="" class="phone">090222222</a>
								</div>
								<a href="" class="mail_to"><img src="../assets/dist/images/ic-mail.png" alt="Mail"></a>
								<a href="" class="skype"><img src="../assets/dist/images/ic-skype.png" alt="Skype"></a>
								<a href="" class="zalo"><img src="../assets/dist/images/ic-zalo.png" alt="Zalo"></a>
							</div>	
							<div class="item">
								<div class="box">
									<div class="title-box">ABC</div>
									<a href="" class="phone">090222222</a>
								</div>
								<a href="" class="mail_to"><img src="../assets/dist/images/ic-mail.png" alt="Mail"></a>
								<a href="" class="skype"><img src="../assets/dist/images/ic-skype.png" alt="Skype"></a>
								<a href="" class="zalo"><img src="../assets/dist/images/ic-zalo.png" alt="Zalo"></a>
							</div>	
							<div class="item">
								<div class="box">
									<div class="title-box">ABC</div>
									<a href="" class="phone">090222222</a>
								</div>
								<a href="" class="mail_to"><img src="../assets/dist/images/ic-mail.png" alt="Mail"></a>
								<a href="" class="skype"><img src="../assets/dist/images/ic-skype.png" alt="Skype"></a>
								<a href="" class="zalo"><img src="../assets/dist/images/ic-zalo.png" alt="Zalo"></a>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="promocontent container-fluid">
		<div class="container">
			<div class="module slidedichvu">
				<div class="headermodule">
					<h3 class="title-header"><a href=""><span>Dịch vụ của chúng tôi</span></a></h3>
				</div>
				<div class="contentmodule">
					<div id="carousel" class="carousel myslide" data-ride="mycarousel" data-type="multi" data-interval="5000">
						<div class="carousel-inner">
							<div class="item active">
								<div class="carousel-col">
									<div class="block red img-responsive">
										<div class="thumbnail">
											<img src="../assets/dist/images/dv1.jpg" alt="">
											<div class="caption">
												<h3>Thẩm định giá bất động sản</h3>
												<p> là số tiền ước tính về giá trị của quyền sử dụng đất, quyền sở hữu nhà, công trình vật kiến trúc gắn liền với đất ...</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="carousel-col">
									<div class="block green img-responsive">
										<div class="thumbnail">
											<img src="../assets/dist/images/dv2.jpg" alt="">
											<div class="caption">
												<h3>Thẩm định dự án đầu tư</h3>
												<p>Thẩm định dự án đầu tư là việc nghiên cứu, phân tích khách quan, khoa học, toàn diện tất cả nội dung kinh tế ...</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="carousel-col">
									<div class="block blue img-responsive">
										<div class="thumbnail">
											<img src="../assets/dist/images/dv3.jpg" alt="">
											<div class="caption">
												<h3>Thẩm định tài sản vô hình</h3>
												<p>Thẩm định tài sản vô hình được thẩm định giá trong trường hợp: mua bán, chuyển nhượng, góp vốn liên doanh ...</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="carousel-col">
									<div class="block yellow img-responsive">
										<div class="thumbnail">
											<img src="../assets/dist/images/dv4.jpg" alt="">
											<div class="caption">
												<h3>Thẩm định doanh nghiệp</h3>
												<p>Nhìn chung doanh nghiệp là một đơn vị kinh tế quy tụ các phương tiện tài chính, vật chất và con người ...</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Controls -->
						<div class="left carousel-control">
							<a href="#carousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
						</div>
						<div class="right carousel-control">
							<a href="#carousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="blockcontent container-fluid">
		<div class="container">
			<div class="module doitac">
				<div class="headermodule">
					<h3 class="title-header"><a href=""><span>Đối tác của chúng tôi</span></a></h3>
				</div>
				<div class="contentmodule">

				</div>
			</div>
		</div>
	</div>

<script type="text/javascript">
	$('.carousel[data-type="multi"] .item').each(function() {
	var next = $(this).next();
	if (!next.length) {
		next = $(this).siblings(':first');
	}
	next.children(':first-child').clone().appendTo($(this));

	for (var i = 0; i < 2; i++) {
		next = next.next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}

		next.children(':first-child').clone().appendTo($(this));
	}
});
</script>	