<?php $this->load->view('header')?>
<?php $this->load->view('navbar.php')?>    
<div id="page-wrapper">
	<div class="row">
		<div class="col-sm-12">
			<h3>Tambah Admin</h3>
			<hr>
			<form class="form-horizontal" action="<?=base_url('Admin/addAdmin')?>" method="POST">
				<div class="form-group">
					<label class="control-label col-sm-3" for="judul_gambar">Nama:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="judul_gambar" placeholder="Masukkan Nama" name="nama" autofocus>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="nomor_shop_drawing">Username:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="nomor_shop_drawing" placeholder="Masukkan Username" name="username">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="tanggal_gambar">Password:</label>
					<div class="col-sm-9">
						<input type="password" class="form-control" id="tanggal_gambar" placeholder="Masukkan Password" name="password">
					</div>
				</div>
				<hr>
				<div class="form-group">        
					<div class="col-sm-offset-3 col-sm-9">
						<button type="submit" class="btn btn-primary">Simpan</button>
						<a href="<?=base_url('Admin')?>" class="btn btn-default">Kembali</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /#page-wrapper -->

<?php $this->load->view('footer')?>
<script type="text/javascript">
	$(function(){
		//$('#tanggal_gambar').datepicker();
	});
</script>