<?php $this->load->view('header')?>
<?php $this->load->view('navbar.php')?>    
<div id="page-wrapper">
	<div class="row">
		<div class="col-sm-12">
			<h3>Edit As Build Drawing</h3>
			<hr>
      <?php
        $id = $dokumen['id_as_build_drawing'];
      ?>
      <form class="form-horizontal" action="<?=base_url('Builddrawing/prosesEditDokumen')?>" method="POST">
        <input type="hidden" name="id" value="<?=$id;?>">
        <div class="form-group">
          <label class="control-label col-sm-3" for="judul_gambar">Nomor Dokumen:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="nomor_dokumen" name="nomor_dokumen" value="<?php echo $dokumen['nomor_dokumen'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="tanggal_pengajuan">Tanggal Pengajuan:</label>
          <div class="col-sm-9">
            <input type="date" class="form-control" id="tanggal_pengajuan" name="tanggal_pengajuan" value="<?php echo $dokumen['tanggal_pengajuan']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="tanggal_pembuatan">Tanggal Pembuatan:</label>
          <div class="col-sm-9">
            <input type="date" class="form-control" id="tanggal_pembuatan" name="tanggal_pembuatan" value="<?php echo $dokumen['tanggal_pembuatan']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="pembuat">Pembuat:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="pembuat" name="pembuat" value="<?php echo $dokumen['nama']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="status">Status:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="status" name="status" value="<?php echo $dokumen['status']?>">
          </div>
        </div>
				<hr>
				<div class="form-group">        
					<div class="col-sm-offset-3 col-sm-9">
						<button type="submit" class="btn btn-primary">Simpan</button>
						<a href="<?=base_url('Builddrawing/index/')?>" class="btn btn-default">Kembali</a>
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