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
      <?php
        $idBuilddrawing = $dokumen['id_as_build_drawing'];
      ?>
			<h3 class="page-header">Nomor Dokumen : <span style="color:steelblue;"><?=$dokumen['nomor_dokumen']?></span></h3>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<a href="<?=base_url('Builddrawing/tambahGambar/'.$dokumen['id_as_build_drawing'])?>" class="btn btn-primary">Tambah Gambar</a>
			<div class="pull-right">
				<a href="<?=base_url('Builddrawing/preview/'.$dokumen['id_as_build_drawing'])?>" class="btn btn-success">Preview</a>
				<a href="<?=base_url('Builddrawing/print_preview/'.$dokumen['id_as_build_drawing'])?>" class="btn btn-warning"><span class="fa fa-print"> Print</span></a>
			</div>
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
							<td><?=$d['judul_gambar']?></td>
							<td><?=$d['nomor_as_build_drawing']?></td>
							<td><?=$d['tanggal']?></td>
							<td><?=$d['status_gambar']?></td>
							<td><?=$d['is_kembali']==0 ? 'Belum Kembali' : 'Telah Kembali'?></td>
							<td><?=$d['tanggal_kembali']?></td>
							<td>
                <a href="">Edit |</a>
                <a href="<?=base_url('Buildrawing/deleteGambar/'.$d['id_detail_as_build_drawing'].'/'.$idBuilddrawing)?>">Hapus</a>
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
