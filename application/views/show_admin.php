<?php $this->load->view('header')?>
<?php $this->load->view('navbar.php')?>    
<div id="page-wrapper">
	<div class="row">
		<?php 
		if($this->session->flashdata('success')!=''){
			?>
			<div class="alert alert-success">
				<?=$this->session->flashdata('success');?>
			</div>
		<?php } ?>
		<?php 
		if($this->session->flashdata('failed')!=''){
			?>
			<div class="alert alert-danger">
				<?=$this->session->flashdata('failed');?>
			</div>
		<?php } ?>
		<div class="col-lg-12">
			<h2 class="page-header">Admin </h2>    
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-sm-6">
			<a href="<?=base_url('Admin/tambahAdmin')?>" class="btn btn-primary">Tambah Admin</a>
		</div>
	</div>

	<div class="row" style="margin-top:30px;">
		<div class="col-lg-12">
			<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Username</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no=1;
					foreach($data as $d){
						?>
						<tr class="gradeX">
							<td><?=$no?></td>
							<td><?=$d['nama']?></td>
							<td><?=$d['username']?></td>
							<td>
								<a class="btn btn-xs btn-warning" href="<?=base_url('Admin/editAdmin/'.$d['id_admin'])?>">Edit</a> |
								<a class="btn btn-xs btn-danger" href="<?=base_url('Admin/deleteAdmin/'.$d['id_admin'])?>" onclick="return confirm('Apakah Anda yakin akan menghapus ?');">Hapus</a>
							</td>
						</tr>
						<?php $no++;} ?>
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
