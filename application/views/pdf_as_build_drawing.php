<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PDF Created</title>

	<style type="text/css">
	@page { margin: 5px; }

	body {
		background-color: #fff;
		font-family: "Times New Roman", Times, serif;
		font-size: 14px;
		color: #4F5155;
		margin:5px;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 16px;
		font-weight: bold;
		margin: 24px 0 2px 0;
		padding: 5px 0 6px 0;
	}

	code {
		font-family: Monaco, Verdana, Sans-serif;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	.br-top{
		border-top: 2px solid;
	}

	.br-bot{
		border-bottom: 2px solid;
	}

	.br-all{
		border:2px solid;
	}

	.br-all-td,.br-all-td td{
		border: 2px solid;
	}

	.text-center{
		text-align: center;
	}

	.text-bold{
		font-weight: bold;
	}

	table{
		max-width: 2480px;
		width:100%;
		border-collapse: collapse;
	}
	table td{
		overflow: hidden;
		word-wrap: break-word;
	}

</style>
</head>
<body>
	<table>
		<tbody>
			<tr>
				<td width="33.3%" class="text-center br-all">JasaMarga</td>
				<td width="33.3%" class="text-center br-all">
					<h2>PROYEK</h2>
					<p>Pembangunan Jalan Tol Batsag - Semarang <br>
					(STA, 377+500 - 440+200)</p>
				</td>
				<td width="33.3%" class="text-center br-all">Pengajuan As Build Drawing</td>
			</tr>
		</tbody>
	</table>
	<table>
		<tr class="br-all">
			<td>Kepada</td>
			<td>:</td>
			<td>PT. Virama Karya (Persero)</td>
			<td>No</td>
			<td>:</td>
			<td>22/28373-askadka-232329/2018</td>
		</tr>
		<tr class="br-all">
			<td>Lip</td>
			<td>:</td>
			<td></td>
			<td>Kontraktor</td>
			<td>:</td>
			<td>PT. Waskita Karya (Persero) Tbk.</td>
		</tr>
		<tr class="br-all">
			<td>Tanggal</td>
			<td>:</td>
			<td>04 Juli 2018</td>
			<td>Perihal</td>
			<td>:</td>
			<td>PSD.Kuripan</td>
		</tr>
		<tr class="br-all">
			<td colspan="6">Dengan hormat, <br> Mohon komentar dan persetujuan atas As Build Drawing yang kami ajukan dibawah ini untuk acuan pelaksanaan dilapangan : </td>
		</tr>
	</table>
	<table>
		<tr class="br-all-td text-center text-bold">
			<td>No</td>
			<td>No. As Build Drawing</td>
			<td colspan="2">Nama As Build Drawing</td>
			<td>Status</td>
			<td>Ref.Gambar No.</td>
		</tr>
		<?php
		$no=1; 
		foreach($data as $d){
		?>
		<tr class="br-all-td">
			<td class="text-center"><?=$no;?></td>
			<td><?=$d['nomor_as_build_drawing']?></td>
			<td colspan="2"><?=$d['judul_gambar']?></td>
			<td><?=$d['status_gambar']?></td>
			<td></td>
		</tr>
		<?php 
		$no++;
		}
		$jum=1;
		for($i=1;$i<(26-$jum);$i++){
			?>
			<tr class="br-all-td">
				<td>&nbsp;</td>
				<td></td>
				<td colspan="2"></td>
				<td></td>
				<td></td>
			</tr>
			<?php 
		}
		?>
	</table>
	<table>
		<tr>
			<td colspan="6" class="br-all text-center text-bold">Proses Revisi</td>
		</tr>
		<tr>
			<td width="50%" colspan="3" class="br-all text-center">EVALUASI DARI KONSULTAN PENGAWAS</td>
			<td width="50%" colspan="3" class="br-all text-center">Evaluasi ...</td>
		</tr>
		<tr class="br-all-td text-center">
			<td width="10%">Tgl</td>
			<td width="10%">Paraf</td>
			<td></td>
			<td width="10%">Tgl</td>
			<td width="10%">Paraf</td>
			<td></td>
		</tr>
		<tr class="br-all-td text-center">
			<td>&nbsp;</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="br-all-td text-center">
			<td>&nbsp;</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="br-all-td text-center">
			<td>&nbsp;</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="br-all-td text-center">
			<td>&nbsp;</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="br-all">
			<td colspan="6">
				<input type="checkbox" name=""> A : DISETUJUI
				<input type="checkbox" name=""> B : DISETUJUI DENGAN CATATAN
				<input type="checkbox" name=""> C : TIDAK DISETUJUI / AJUKAN KEMBALI
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>

	</table>

</body>
</html>