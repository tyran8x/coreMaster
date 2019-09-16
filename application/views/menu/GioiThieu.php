<?php
$data = $this->GioiThieu_model->detail($this->input->get('id'));
$value = $data[0];
?>
<div class="gioithieu_content container-fluid">
    <div class="container gioithieu">
		<h2 class="text-capitalize font-18 title-tham text-main pd-30px"> <?php echo $value['title']  ?></h2>
		<div class="info">
				<?php  echo   $value['content']  ?>
		</div>
    </div>
</div>