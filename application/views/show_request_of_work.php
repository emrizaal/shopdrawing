<?php $this->load->view('header')?>
<style type="text/css">
	.btn{
		margin:5px;
	}
</style>
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
			<h2 class="page-header">Dokumen Request of Work</h2>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-sm-6">
			<a href="<?=base_url('Reqwork/tambahRow')?>" class="btn btn-primary">Tambah Request</a>
		</div>
	</div>
	<div class="row" style="margin-top:30px;">
		<div class="col-lg-12">
			<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th>No</th>
						<th>Nomor RoW</th>
						<th>Jenis</th>
						<th>Uraian</th>
						<th>Tanggal Dibuat</th>
						<th>No Item</th>
						<th>Download</th>
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
							<td><?=$d['no_request_of_work']?></td>
							<td><?=$d['jenis_pekerjaan']?></td>
							<td><?=$d['uraian_pekerjaan']?></td>
							<td><?=$d['date_created']?></td>
							<td><?=$d['no_item']?></td>
							<td><a class="btn btn-xs btn-success" href="<?=base_url('Reqwork/formRequest/'.$d['id_request_of_work'])?>"><span class="fa fa-send"></span> Form Request</a>
								<a class="btn btn-xs btn-info" href="<?=base_url('Reqwork/download/'.$d['id_request_of_work'])?>"><span class="fa fa-th-list"></span> Check List</a></td>
							<td>
								<a class="btn btn-warning btn-xs" href="<?=base_url('Reqwork/editRow/'.$d['id_request_of_work'])?>">edit</a> 
								<a class="btn btn-danger btn-xs" href="<?=base_url('Reqwork/deleteRow/'.$d['id_request_of_work'])?>" onclick="return confirm('Apakah Anda yakin akan menghapus ?');">delete</a> 
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
