

<?php
$catId = 7;
$dataTinTuc = (object) $this->Content_model->listallTinTuc($catId);
?>
<div class="dichvu container-fluid">
	<div class="container dichvu">
		<div class="module danhsachtin">
			<div class="headermodule">
				<h3 class="title-header"><a href="duan"><span>Dịch vụ</span></a></h3>
			</div>
			<div class="contentmodule">
				<div class="listnews">
					<table id="table_id">
						<thead>
							<tr>
								<th> </th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($dataTinTuc as $key => $value) {
								?>
								<tr>
									<td>
										<div class="news">
											<div class="imgnew">
												<img src="<?php echo $value['smallimage'] == '' ? '../assets/dist/images/new1.jpg' : '../assets/uploads/files/tintuc/' . $value['smallimage'] ?>">
											</div>
											<div class="contentnew">
												<div class="titlenew"><span> <?php echo $value['title']  ?></span></div>
												<div class="infonew">
													<p><?php echo $value['info']  ?></p>
												</div>
											</div>
										</div>
									</td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#table_id').DataTable();
	});
</script>
<style>
#table_id_wrapper .dataTables_length label {
        display: none;
    }

    table.dataTable thead th,
    table.dataTable thead td {
        padding: 10px 18px;
        border-bottom: 1px solid #fff;
    }

    table.dataTable.no-footer {
        border-bottom: 1px solid #fff;
    }

    .lazy-new {
        width: 100%;
        height: 110px;
    }
</style>

