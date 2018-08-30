<?php $this->load->view('header')?>
<?php $this->load->view('navbar.php')?>    
<div id="page-wrapper">
	<div class="row">
		<div class="col-sm-12">
			<h3>Edit Gambar</h3>
			<hr>
			<form class="form-horizontal" action="<?=base_url('Builddrawing/updateGambar')?>" method="POST">
				<input type="hidden" name="id_detail_as_build_drawing" value="<?=$data['id_detail_as_build_drawing']?>">
				<input type="hidden" name="id" value="<?=$data['id_as_build_drawing']?>">
				<div class="form-group">
					<label class="control-label col-sm-3" for="judul_gambar">Judul Gambar:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="judul_gambar" placeholder="Masukkan Judul Gambar" name="nama_as_build_drawing" value="<?=$data['nama_as_build_drawing']?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="nomor_as_build_drawing">Nomor Shop Drawing:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="nomor_shop_drawing" placeholder="Masukkan Nomor Gambar" name="nomor_shop_drawing" value="<?=$data['nomor_as_build_drawing']?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="tanggal_gambar">Tanggal:</label>
					<div class="col-sm-9">
						<input type="date" class="form-control" id="tanggal_gambar" placeholder="Masukkan Tanggal" name="tanggal" value="<?=$data['tanggal']?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="judul_gambar">Status Gambar:</label>
					<div class="col-sm-9">
						<div class="radio">
							<label><input type="radio" name="status_gambar" value="Cons" <?=$data['status_gambar']=='Cons' ? 'checked' : ''?>>Cons</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="status_gambar" value="Inf" <?=$data['status_gambar']=='Inf' ? 'checked' : ''?>>Inf</label>
						</div>
					</div>
				</div>
				<hr>
				<div class="form-group">
					<label class="control-label col-sm-3" for="judul_gambar">Gambar Kembali:</label>
					<div class="col-sm-9">
						<div class="radio">
							<label><input type="radio" name="is_kembali" value="0" <?=$data['is_kembali']=='0' ? 'checked' : ''?>>Tidak</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="is_kembali" value="1" <?=$data['is_kembali']=='1' ? 'checked' : ''?>>Ya</label>
						</div>
					</div>
				</div>
				<div class="form-group is_kembali" style="<?=$data['is_kembali']==0 ? 'display:none;' : ''?>">
					<label class="control-label col-sm-3" for="tanggal_gambar">Tanggal Kembali:</label>
					<div class="col-sm-9">
						<input type="date" class="form-control" id="tanggal_gambar" placeholder="Masukkan Tanggal" name="tanggal_kembali" value="<?=$data['tanggal_kembali']?>">
					</div>
				</div>
				<hr>
				<div class="form-group">        
					<div class="col-sm-offset-3 col-sm-9">
						<button type="submit" class="btn btn-primary">Simpan</button>
						<a href="<?=base_url('Builddrawing/detailDokumen/'.$data['id_as_build_drawing'])?>" class="btn btn-default">Kembali</a>
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
		$('input[type=radio][name=is_kembali]').change(function() {
			if (this.value == '0') {
				$('.is_kembali').hide();
			}
			else if (this.value == '1') {
				$('.is_kembali').show();
			}
		});
	});
</script>