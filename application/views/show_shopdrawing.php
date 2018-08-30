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
			<ol class="breadcrumb" style="margin-top:20px;">
				<li class="breadcrumb-item"><a href="<?=base_url('Welcome/menu')?>">Menu</a></li>
				<li class="breadcrumb-item active">Doc. Shop Drawing</li>
			</ol>
			<h2 class="page-header">Dokumen Shop Drawing</h2>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">Tambah Dokumen Shop Drawing</div>
				<div class="panel-body">
					<form action="<?=base_url('Shopdrawing/addDokumen')?>" method="POST">
						<div class="input-group">
							<input placeholder="Masukan Nomor Dokumen" type="text" name="nomor_dokumen" class="form-control" required="required">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="submit">Tambah</button>
							</span>
						</div>
					</form>
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
					<?php 
					$no=1;
					foreach($data as $d){
						?>
						<tr class="gradeX">
							<td><?=$no?></td>
							<td><a href="<?=base_url('Shopdrawing/detailDokumen/'.$d['id_shopdrawing'])?>"><?=$d['nomor_dokumen']?></a></td>
							<td><?=$d['tanggal_pengajuan']?></td>
							<td><?=$d['tanggal_pembuatan']?></td>
							<td><?=$d['nama']?></td>
							<td><?=$d['status']=='0' ? "<span class='label label-info'>Draft</span>" : "<span class='label label-success'>Diajukan</span>"?></td>
							<td>
								<a class="btn btn-xs btn-default" href="<?=base_url('Shopdrawing/editDokumen/'.$d['id_shopdrawing'])?>"><span class="fa fa-pencil"> Edit</span></a>
								<?php 
								if($d['status']=='0'){ ?>
									<a class="btn btn-xs btn-default" href="<?=base_url('Shopdrawing/deleteDokumen/'.$d['id_shopdrawing'])?>" onclick="return confirm('Apakah Anda yakin akan menghapus ?');"><span class="fa fa-trash"> Hapus</span></a>
								<?php } ?>
								<a class="btn btn-xs btn-default" href="<?=base_url('Shopdrawing/detailDokumen/'.$d['id_shopdrawing'])?>"><span class="fa fa-info-circle"> Detail</span></a></td>
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
