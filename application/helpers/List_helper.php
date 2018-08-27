<?php 

function listJenisPekerjaan(){
	$list=array(
		'Pemasangan Bekisting',
		'Pekerjaan Bore Pile',
		'Pekerjaan Chainlink Fence',
		'Pekerjaan Concrete (Pengecoran)',
		'Pekerjaan Girder',
		'Pekerjaan Guardrail',
		'Pekerjaan LC Rigid',
		'Pekerjaan Lapis Pondasi Atas',
		'Pekerjaan Pembesian',
		'Pekerjaan Rigid Pavement',
		'Pekerjaan Timbunan',
		'Pekerjaan Galian',
		'Pekerjaan Erection Fullslab'
	);
	return $list;
}

function listSatuanPekerjaan(){
	$list=array(
		"lumpsum (Ls)",
		"m'",
		"m2",
		"m3",
		"buah",
		"kg",
		"ton",
		"set"
	);
	return $list;
}

function listNoItem(){
	$list=array(
		'0'=>array(
			'group'=>'Bab 1 : UMUM',
			'member'=>array(
				'1.19 -- Pemeliharaan dan perlindungan lalu lintas',
				'1.20 (1) -- Laboratorium',
				'1.20 (2) -- Mobilisasi ( yang tidak tercakup pada 1.20(1)',
				'1.26 -- Pekerjaan dan Penanganan Aliran Air yang Sudah Ada'
			)
		),
		'1'=>array(
			'group'=>'Bab 2 : PEMBERSIHAN TEMPAT KERJA',
			'member'=>array(
				'2.01 (01) -- Pembersihan Tempat Kerja'
			)
		),
		'2'=>array(
			'group'=>'Bab 3 : PEMBONGKARAN',
			'member'=>array(
				'3.01 (1) -- Pembongkaran Pasangan Batu atau Struktur Beton',
				'3.01 (2) -- Pembongkaran Kerb',
				'3.01 (3) -- Pembongkaran Perkerasan Jalan Aspal atau Beton',
				'-- Pembongkaran Rambu Pengatur Dan Peringatan',
				'3.01 (11) -- Pembongkaran Guardrail'
			)
		),
		'3'=>array(
			'group'=>'Bab 4 : PEKERJAAN TANAH',
			'member'=>array(
				'4.03 (1) -- Galian Biasa untuk Timbunan',
				'4.03 (2) -- Galian Biasa untuk Dibuang',
				'-- Galian untuk dibawa ke paket lain',
				'-- Galian Batu',
				'-- Softsoil / Replacement',
				'-- Geoteks',
				'4.05 (1) -- Borrow Material',
				'4.08 (2) -- Urugan Material Berbutir (Granular Backfill)',
				'-- Timbunan Pilihan (Limestone)',
				'-- Timbunan Aquiper'
			)
		),
		'4'=>array(
			'group'=>'Bab 5 : GALIAN STRUKTUR',
			'member'=>array(
				'5.01 (1) -- Penggalian Struktur sampai kedalaman tidak lebih dari 2 m',
				'5.01 (2) -- Penggalian Struktur sampai kedalaman lebih dari 2 m, tapi tidak lebih dari 4 m',
				'5.01 (3) -- Penggalian Struktur sampai kedalaman  lebih dari 4 m'
			)
		),
		'5'=>array(
			'group'=>'Bab 6 : DRAINASE',
			'member'=>array(
				'6.05 (7) -- Pipa Gorong-gorong Beton Bertulang, dia. 60 cm, Tipe B',
				'-- Pipa Gorong-gorong Beton Bertulang, dia. 60 cm, Tipe C',
				'6.05 (8) -- Pipa Gorong-gorong Beton Bertulang, dia. 80 cm, Tipe A',
				'6.05 (9) -- Pipa Gorong-gorong Beton Bertulang, dia. 80 cm, Tipe B',
				'6.05 (10) -- Pipa Gorong-gorong Beton Bertulang, dia. 100 cm, Tipe A',
				'6.05 (11) -- Pipa Gorong-gorong Beton Bertulang, dia. 100 cm, Tipe B',
				'6.05 (16) -- Pipa Gorong-gorong Beton Bertulang, 2 dia. 60 cm, Tipe C',
				'6.05 (17) -- Pipa Gorong-gorong Beton Bertulang, 2 dia. 60 cm, Tipe D',
				'6.05 (20) -- Pipa Gorong-gorong Beton Bertulang, 2 dia. 100 cm, Tipe C',
				'6.05 (21) -- Pipa Gorong-gorong Beton Bertulang, 2 dia. 100 cm, Tipe D',
				'6.06 (01) -- Saluran, Tipe DS - 1 | Saluran, Tipe DS - 2A',
				'6.06 (04) -- Saluran, Tipe DS - 3',
				'6.06 (05) -- Saluran, Tipe DS - 3A',
				'6.06 (06) -- Saluran, Tipe DS - 4',
				'6.06 (08) -- Saluran, Tipe DS - 5',
				'6.06 (09) -- Saluran, Tipe DS - 8',
				'6.06 (12) -- Saluran, Tipe DS 10',
				'6.06 (13) -- Inlet Drain. Tipe DI - 1',
				'6.06 (14) -- Inlet Drain. Tipe DI - 2',
				'6.06 (15) -- Inlet Drain. Tipe DI - 3 (MH-1)',
				'6.06 (15) 2 -- Inlet Drain. Tipe D1 - 4',
				'6.06 (16) -- Outlet Drain. Tipe DO - 1',
				'6.06 (17) -- Outlet Drain. Tipe DO - 2',
				'6.06 (18) -- Outlet Drain. Tipe DO - 3',
				'6.06 (18) 2 -- Outlet Drain. Tipe DO - 4',
				'6.07 (8) -- Bangunan Terjun Tegak (DV - 10_',
				'6.08 (1) -- Pipa Drainase, dia 15 cm dengan perlengkapan sambungan dan penyangga.',
				'6.08 (2) -- Pipa Drainase, dia 20 cm dengan perlengkapan sambungan dan penyangga.',
				'6.08 (3) -- Deck Drain beserta asessorisnya, tipe 1.'
			)
		),
		'6'=>array(
			'group'=>'Bab 7 : SUBGRADE',
			'member'=>array(
				'7.01 -- Persiapan Tanah Dasar'
			)
		),
		'7'=>array(
			'group'=>'Bab 8 : LAPIS PONDASI AGREGAT (SUBBASE)',
			'member'=>array(
				'8.01 (1) -- Lapis Pondasi Agregat Kelas A',
				'8.01 (2) -- Lapis Pondasi Agregat Kelas B'
			)
		),
		'8'=>array(
			'group'=>'Bab 9 : PERKERASAN',
			'member'=>array(
				'9.04 -- Bitumen Lapis Resap Pengikat ( Prime Coat )',
				'9.05 -- Bitumen Lapis Pengikat (Tack Coat )',
				'9.07 (1) -- Asphalt Treated Base Course',
				'9.07 (2) -- Asphalt Concrete Binder Course',
				'9.07 (3) -- Asphalt Concrete Wearing Course',
				'9.07 (4) -- Semen Aspal ',
				'9.08 (1) -- Perkerasan Beton ( t = 32 cm )',
				'9.08 (2) -- Perkerasan Beton ( t = 32cm ), Double Wire Mesh',
				'9.08 (3) -- Perkerasan Beton ( t = 32cm ), Single Wire Mesh',
				'9.09 (1) -- Lean Concrete ( t = 10 cm )'
			)	
		),
		'9'=>array(
			'group'=>'Bab 10 : STRUKTUR BETON',
			'member'=>array(
				'10.01 (4) -- Beton Kelas B - 1 - 1 (Reinforced Concrete Deck Slabs)',
				'10.01 (5) -- Beton Kelas B - 1 - 2 (Diapraghma )',
				'10.01 (6) -- Beton Kelas B - 1 - 3 (Concrete Parapet)',
				'10.01 (7) -- Beton Kelas B - 1- 4',
				'-- Beton Kelas B - 4 - 1 (Reinforced Concrete  Pier Head)',
				'-- Beton Kelas B - 4 - 2 (Reinforced Concrete Pier Columns & Wall Pier)',
				'10.01 (8) -- Beton Keias B - 2',
				'10.01 (9) -- Beton Kelas B - 3',
				'10.01 (10) -- Beton Kelas C - 1',
				'10.01 (16) -- Beton Kelas D',
				'10.01 (17) -- Beton Kelas E',
				'10.02 (2) -- Batang Baja Tulangan Ulir',
				'10.03 (1) -- P.C.! Girder span L = 16 m',
				'10.03 (2) -- P.C.I Girder span L = 20 m',
				'10.03 (3) -- P.C.I Girder span L = 25 m',
				'10.03 (4) -- P.C.I Girder span L = 30 m',
				'10.03 (5) -- P.C.I Girder span L = 40 m',
				'-- P.C.I Girder span L = 50 m',
				'-- RC Plank L = 8.95 m',
				'10.03 (8) -- Plat Pracetak (Concrete Plate)',
				'10.05 (4) -- Penyediaan tiang pancang beton bulat pretensioned, dia. 60 cm',
				'10.05 (5) -- Pemancangan tiang pancang beton bulat pretensioned, dia. 60 cm',
				'-- Tiang bor beton cast-in-place, dia. 80 cm',
				'-- Tiang bor beton cast-in-place, dia. 100 cm',
				'10.07 (10) -- PDA test',
				'10.09 (3)a -- Sambungan Ekspansi (Expansion Joint). type C',
				'10.10 (2) -- Bearing Pad dengan asesori ukuran (300 x 350 x 36 mm)',
				'10.10 (4)a -- Bearing Pad dengan asesori ukuran (350 x 400 x 40 mm)',
				'10.10 (9)a -- Bearing Pad dengan asesori ukuran (450 x 500 x 60 mm)',
				'10.11 (1) -- Sheet Pile / Turap Beton (6 m, Lengkap sampai pemancangan',
				'-- Beronjong'
			)
		),
		'10'=>array(
			'group'=>'Bab 11 : PEKERJAAN BAJA STRUKTURAL',
			'member'=>array()
		),
		'11'=>array(
			'group'=>'Bab 12 : PEKERJAAN LAIN-LAIN',
			'member'=>array(
				'12.01  (01) -- Pohon',
				'12.01 (03) -- Solid Sodding',
				'12 01 (04) -- Strip Sodding',
				'12.02 (01) -- Pasangan Batu Kali untuk retaining Wall',
				'12.04 (1) -- Delinetor tipe A',
				'12.04 (2) -- Delinetor tipe B',
				'12.05 (01) -- Guardrail, lipe A',
				'12.05 (02) -- End Section Guardrail',
				'12.05 (06) -- Chainlink Fence',
				'12.06 (1) -- Rambu Pengaturan dan Peringatan. Tipe A-1',
				'12.06 (2) -- Rambu Pengaturan dan Peringatan, Tipe A-2',
				'12.06 (3) -- Rambu Pengaturan dan Peringatan, Tipe B-1',
				'12.06 (4) -- Rambu Pengaturan dan Peringatan, Tipe 8-2',
				'12.06 (5) -- Rambu Pengaturan dan Peringatan, Tipe d',
				'12.07 (1) -- Rambu Petunjuk, Peringatan dan Larangan Tipe A - 1',
				'12,07 (2) -- Rambu Petunjuk, Peringatan dan Larangan Tipe A - 2',
				'12.07 (3) -- Rambu Petunjuk, Peringatan dan Larangan Tipe A - 3',
				'12.07 (4) -- Rambu Petunjuk, Peringatan dan Larangan Tipe A - 5',
				'12.07 (4)a -- Rambu Petunjuk. Peringatan dan Larangan Tipe A - 4',
				'12.07 (5) -- Rambu Petunjuk, Peringatan dan Larangan Tipe B - 1',
				'12.07 (6) -- Rambu Petunjuk, Peringatan dan Larangan Tipe B - 2',
				'12.07 (7) -- Rambu Petunjuk, Peringatan dan Larangan Tipe C',
				'12.08 (1) -- Marka jalan, Tipe-A',
				'12.08 (2) -- Marka Jalan, Tipe-B',
				'12.09 (1) -- Guide Post. Tipe A',
				'12.09 (2) -- Guide Post, Tipe B',
				'12.09 (2)a -- Guide Post, Tipe C',
				'12.09 (3) -- Patok Damija, Tipe A',
				'12.09 (5) -- Kilometer Post',
				'12.10 (1) -- Concrete Barrier, tipe - A',
				'12.10 (2) -- Concrete Bamer, tipe - B',
				'12.11 (01) -- Kerb Beton. Tipe-A',
				'12.12 (01) -- Pagar ROW. Tipe 1 (Panel Beton)',
				'12.12 (02) -- Pagar ROW. Tipe 2 (Kawat Berdur)',
				'12.12 (03) -- Pagar ROW. Tipe 3 (BRC, FS 3)',
				'12.13 (1) -- Blok Beton Perlindungan lereng/talud',
				'-- Hand railing'
			)
		),
		'12'=>array(
			'group'=>'Bab 13 : PENCAHAYAAN LAMPU LALU LINTAS  DAN PEKERJAAN LISTRIK',
			'member'=>array(
				'-- Lampu PJU Cabang 1, T : 13 M (LED Essensial 1 x 185 W Dimming System)',
				'Lampu PJU Cabang 2, T : 13 M (LED Essensial 2 x 185 W Dimming System)',
				'13.01 (3) -- Lampu Penerangan Jalan, Tinggi 13 m (2 x HPS 250 watt)',
				'13 01 (4) -- Lampu Penerangan Jalan. Tinggi 13 m (2 x HPS-T 400 watt)',
				'13 01 (5) -- Lampu Penerangan Jalan, Tinggi 20 m (3 x HPS-T 1000 watt)',
				'-- Lampu Pengendali Lalu lintas Type 1',
				'-- Lampu Pengendali Lalu lintas Type 2',
				'-- Panel Lampu Pengendali Lalu Lintas',
				'-- Lampu Hight Mast, Tinggi 30 m (4 x HPS-T 1000 watt), Rumah Lampu Type MVP 057',
				'-- Lampu Hight Mast, Tinggi 35 m (4 x HPS-T 1000 watt) Rumah Lampu Type MVP 057',
				'-- Lampu Menara (High Mast), Tinggi 30 m (3 x 1000 Watt)',
				'13.01(11) -- Kabel NYFGBY 3C - 16 mm2',
				'13.01 (14) -- Kabei NYFGBY 4C - 16 mm2',
				'13.01 (17)a -- Kabel NYY/NYM 3x2,5 mm3',
				'13.01)21) -- Panel PJU I',
				'-- Instaiasi Penangkal Petir Gerbang Tol',
				'-- Penangkal Petir Lampu High Mast, Grounding  & Asesoris',
				'-- Penyambungan daya Ke PLN 82, Jalan Utama',
				'13.02.(1) -- Pelindung Kabel',
				'13.02.(2) -- Rak kabel (Kabel Try)',
				'13.02.(3) -- Galian Kabel'
			)
		),
		'13'=>array(
			'group'=>'Bab 14 : PLAZA TOL',
			'member'=>array(
				'14.01(1) -- Pulau Tol Tipe A',
				'14.01(2) -- Pulau Tol Tipe B',
				'14.01(3) -- Pulau Tol Tipe C',
				'14.01(4) -- Pulau Tol Tipe D',
				'14.01(5)a -- Atap Gerbang Tol untuk Gerbang 3 Lajur lengkap pemipaan & listrik',
				'14.01(5)b -- Atap Gerbang Tot untuk Gerbang 6 Lajur lengkap pemipaan & listrik',
				'14.01(5)c -- Atap Gerbang 101 untuk Gerbang 10 Lajur lengkap pemipaan & listrik',
				'14.01(6) -- Gardu Tel (pengumpul tiket)'
			)
		),
		'14'=>array(
			'group'=>'Bab 15 : PENGALIHAN DAN PERLINDUNGAN UTILITAS YANG ADA',
			'member'=>array(
				'15.1 -- Provisional Sum untuk pengalihan dan Perlindungan Utilitas Yang Ada'
			)
		),
		'15'=>array(
			'group'=>'Bab 16 : PEKERJAAN FASILITAS TOL DAN KANTOR GERBANG TOL',
			'member'=>array(
				'16.01 (1) -- Kantor Gerbang Tol',
				'16.01 (1) -- Kantor Cabang',
				'16.01 (1) -- Tempat istirahat tipe B',
				'-- Tempat Istirahat Tipe A (Timbunan Borrow Material)'
			)
		),
		'16'=>array(
			'group'=>'Bab 17 : PEKERJAAN PERUBAHAN / REVIEW DESIGN',
			'member'=>array(
				'17.1 -- Slab On Pile Ponowareng',
				'17.2 -- Slab On Pile Kali Boyo Kali Urang',
				'17.3 -- UB. Kali Kuto (Pekerjaan Struktur Beton)'
			)
		)
	);
	return $list;
}

?>