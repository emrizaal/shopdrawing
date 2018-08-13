<?php $this->load->view('header')?>
<?php $this->load->view('navbar.php')?>    
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Dokumen Shop Drawing</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">Tambah Dokumen Shop Drawing</div>
				<div class="panel-body">
					<div class="input-group">
						<input placeholder="Masukan Nomor Dokumen" type="text" name="nomor_dokumen" class="form-control">
						<span class="input-group-btn">
							<button class="btn btn-primary">Tambah</button>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th>No</th>
						<th>Nomor Dokumen</th>
						<th>Tanggal Pengajuan</th>
						<th>Tanggal Pembuatan</th>
						<th>Pembuat</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<tr class="odd gradeX">
						<td>1</td>
						<td>SSR-12928238138</td>
						<td>26 Agustus 2018</td>
						<td>12 Agustus 2018</td>
						<td>Fulan</td>
						<td>ok</td>
						<td>edit | delete | view</td>
					</tr>
				</tbody>
			</table>
			<!-- /.table-responsive -->
		</div>
	</div>
</div>
<!-- /#page-wrapper -->

<?php $this->load->view('footer')?>
<script src="<?=base_url()?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>
<script>
	$(document).ready(function() {
		$('#dataTables-example').DataTable({
			responsive: true
		});
	});
</script>
