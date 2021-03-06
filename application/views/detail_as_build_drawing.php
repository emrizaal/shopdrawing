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
				<li class="breadcrumb-item"><a href="<?=base_url('builddrawing')?>">Doc. As Build Drawing</a></li>
				<li class="breadcrumb-item active"><?=$dokumen['nomor_dokumen']?></span></li>
			</ol>
			<?php $id_asbuilddrawing = $dokumen['id_as_build_drawing']?>
			<h3 class="page-header">Nomor Dokumen : <span style="color:steelblue;"><?=$dokumen['nomor_dokumen']?></span></h3>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<?php if($this->session->userdata('is_super')=='1'){?>
        <a class="btn btn-primary disabled" style="margin:10px auto;">Tambah Gambar</a>
      <?php }else{ ?>
        <a href="<?=base_url('builddrawing/tambahGambar/'.$dokumen['id_as_build_drawing'])?>" class="btn btn-primary" style="margin:10px auto;">Tambah Gambar</a>
      <?php } ?>
      <div class="pull-right">
				<a href="<?=base_url('builddrawing/downloadFormRegistrasi/'.$dokumen['id_as_build_drawing'])?>" class="btn btn-success"><span class="fa fa-print"> <b>Form Registrasi Gambar</b></span></a>
				<a href="<?=base_url('builddrawing/downloadTransmital/'.$dokumen['id_as_build_drawing'])?>" class="btn btn-info" style="margin:10px auto;"><span class="fa fa-print"> <b>Form Transmital</b></span></a>
				<a href="<?=base_url('Shopdrawing/downloadTandaTerima/'.$dokumen['id_as_build_drawing'])?>" class="btn btn-warning"><span class="fa fa-print"> <b>Form Tanda Terima Dokumen</b></span></a>
			</div>
			<div style="clear:both"></div>
			<hr>
			<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Nomor As Build Drawing</th>
						<th>Tanggal</th>
						<th>Status Gambar</th>
						<th>Gambar Kembali</th>
						<th>Tanggal Kembali</th>
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
							<td><?=$d['nama_as_build_drawing']?></td>
							<td><?=$d['nomor_as_build_drawing']?></td>
							<td><?=$d['tanggal']?></td>
							<td><?=$d['status_gambar']?></td>
							<td><?=$d['is_kembali']==0 ? "<span class='label label-warning'>Belum Kembali</span>" : "<span class='label label-success'>Telah Kembali</span>"?></td>
							<td><?=$d['tanggal_kembali']?></td>
							<td>
								<?php  if($this->session->userdata('is_super')=='1'){ ?>
                  <a class="btn btn-xs btn-default disabled"><span class="fa fa-pencil"> Edit</span></a>
                  <a class="btn btn-xs btn-default disabled"><span class="fa fa-trash"> Hapus</span></a>
                <?php }else{?>
                  <a href="<?=base_url('builddrawing/editGambar/'.$d['id_detail_as_build_drawing'])?>" class="btn btn-xs btn-default"><span class="fa fa-pencil"> Edit</span></a>
                  <a href="<?=base_url('builddrawing/deleteGambar/'.$d['id_detail_as_build_drawing'].'/'.$id_asbuilddrawing)?>" class="btn btn-xs btn-default" onclick="return confirm('Apakah Anda yakin akan menghapus ?');"><span class="fa fa-trash"> Hapus</span</a>
                <?php } ?>
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
