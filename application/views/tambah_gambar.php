<?php $this->load->view('header')?>
<?php $this->load->view('navbar.php')?>    
<div id="page-wrapper">
	<div class="row">
		<div class="col-sm-12">
			<h3>Tambah Gambar</h3>
			<hr>
			<form class="form-horizontal" action="<?=base_url('Shopdrawing/addGambar')?>" method="POST">
				<input type="hidden" name="id" value="<?=$id?>">
				<div class="form-group">
					<label class="control-label col-sm-3" for="judul_gambar">Judul Gambar:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="judul_gambar" placeholder="Masukkan Judul Gambar" name="judul_gambar">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="nomor_shop_drawing">Nomor Shop Drawing:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="nomor_shop_drawing" placeholder="Masukkan Nomor Gambar" name="nomor_shop_drawing">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="tanggal_gambar">Tanggal:</label>
					<div class="col-sm-9">
						<input type="date" class="form-control" id="tanggal_gambar" placeholder="Masukkan Tanggal" name="tanggal">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="judul_gambar">Status Gambar:</label>
					<div class="col-sm-9">
						<div class="radio">
							<label><input type="radio" name="status_gambar" value="Cons" checked>Cons</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="status_gambar" value="Inf">Inf</label>
						</div>
					</div>
				</div>
				<hr>
				<div class="form-group">        
					<div class="col-sm-offset-3 col-sm-9">
						<button type="submit" class="btn btn-primary">Simpan</button>
						<a href="<?=base_url('Shopdrawing/detailDokumen/'.$id)?>" class="btn btn-default">Kembali</a>
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