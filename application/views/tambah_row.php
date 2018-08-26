<?php $this->load->view('header')?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style type="text/css">
	.custom-combobox {
    position: relative;
    display: inline-block;
  }
  .custom-combobox-toggle {
    position: absolute;
    top: 0;
    bottom: 0;
    margin-left: -1px;
    padding: 0;
  }
  .custom-combobox-input {
    margin: 0;
    padding-top: 2px;
    padding-bottom: 5px;
    padding-right: 5px;
  }
</style>
<?php $this->load->view('navbar.php')?>    
<div id="page-wrapper">
	<div class="row">
		<div class="col-sm-12">
			<h3>Tambah Request of Work</h3>
			<hr>
			<form class="form-horizontal" action="<?=base_url('Reqwork/addWork')?>" method="POST">
				<div class="form-group">
					<label class="control-label col-sm-3" for="judul_gambar">No:</label>
					<div class="col-sm-9">
						<input type="text" name="no_1" size=4> /bstr/seksi/ <input type="text" name="no_2" size=4> / <input type="text" name="no_3" size=4>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="jenis_pekerjaan">Jenis Pekerjaan:</label>
					<div class="col-sm-9">
						<select class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan">
							<option value="">-- Pilih Jenis Pekerjaan --</option>
							<option value="Pemasangan Bekisting">Pemasangan Bekisting</option>
							<option value="Pekerjaan Bore Pile">Pekerjaan Bore Pile</option>
							<option value="Pekerjaan Chainlink Fence">Pekerjaan Chainlink Fence</option>
							<option value="Pekerjaan Concrete (Pengecoran)">Pekerjaan Concrete (Pengecoran)</option>
							<option value="Pekerjaan Girder">Pekerjaan Girder</option>
							<option value="Pekerjaan Guardrail">Pekerjaan Guardrail</option>
							<option value="Pekerjaan LC Rigid">Pekerjaan LC Rigid</option>
							<option value="Pekerjaan Lapis Pondasi Atas">Pekerjaan Lapis Pondasi Atas</option>
							<option value="Pekerjaan Pembesian">Pekerjaan Pembesian</option>
							<option value="Pekerjaan Rigid Pavement">Pekerjaan Rigid Pavement</option>
							<option value="Pekerjaan Timbunan">Pekerjaan Timbunan</option>
							<option value="Pekerjaan Galian">Pekerjaan Galian</option>
							<option value="Pekerjaan Erection Fullslab">Pekerjaan Erection Fullslab</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="uraian_pekerjaan">Uraian Pekerjaan</label>
					<div class="col-sm-9">
						<textarea name="uraian_pekerjaan" class="form-control" rows="5"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="satuan_pekerjaan">Satuan Pekerjaan</label>
					<div class="col-sm-9">
						<select class="form-control" id="satuan_pekerjaan" name="satuan_pekerjaan">
							<option value="">-- Pilih Satuan Pekerjaan --</option>
							<option value="lumpsum (Ls)">lumpsum (Ls)</option>
							<option value="m'">m'</option>
							<option value="m2">m2</option>
							<option value="m3">m3</option>
							<option value="buah">buah</option>
							<option value="kg">kg</option>
							<option value="ton">ton</option>
							<option value="set">set</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="kuantitas_pekerjaan">Kuantitas Pekerjaan</label>
					<div class="col-sm-9">
						<input type="text" class="" id="kuantitas_pekerjaan" name="kuantitas_pekerjaan"> <span class="satuan_pekerjaan_value"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="lokasi_pekerjaan">Lokasi Pekerjaan</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="lokasi_pekerjaan" name="lokasi_pekerjaan">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="combobox">No Item</label>
					<div class="col-sm-9">
						<!-- <input list="browsers" name="browser" class="form-control"> -->
						<select id="browsers" class="form-control" name="no_item">
							<option value="">-- Pilih No Item --</option>
							<optgroup label="Bab 1 : UMUM">
								<option>1.19 -- Pemeliharaan dan perlindungan lalu lintas</option>
								<option>1.20 (1) -- Laboratorium</option>
								<option>1.20 (2) -- Mobilisasi ( yang tidak tercakup pada 1.20(1)</option>
								<option>1.26 -- Pekerjaan dan Penanganan Aliran Air yang Sudah Ada</option>
							</optgroup>
							<optgroup label="Bab 2 : PEMBERSIHAN TEMPAT KERJA">
								<option>2.01 (01) -- Pembersihan Tempat Kerja</option>
							</optgroup>
							<optgroup label="Bab 3 : PEMBONGKARAN">
								<option>3.01 (1) -- Pembongkaran Pasangan Batu atau Struktur Beton</option>
								<option>3.01 (2) -- Pembongkaran Kerb</option>
								<option>3.01 (3) -- Pembongkaran Perkerasan Jalan Aspal atau Beton | Pembongkaran Rambu Pengatur Dan Peringatan</option>
								<option>3.01 (11) -- Pembongkaran Guardrail</option>
							</optgroup>
							<optgroup label="Bab 4 : PEKERJAAN TANAH">
								<option>4.03 (1) -- Galian Biasa untuk Timbunan</option>
								<option>4.03 (2) -- Galian Biasa untuk Dibuang | Galian Batu | Softsoil / Replacement | Geoteks</option>
								<option>-- Galian untuk dibawa ke paket lain</option>
								<option>4.05 (1) -- Borrow Material</option>
								<option>4.08 (2) -- Urugan Material Berbutir (Granular Backfill) | Timbunan Pilihan (Limestone) | Timbunan Aquiper</option>
							</optgroup>
							<optgroup label="Bab 5 : GALIAN STRUKTUR">
								<option>5.01 (1) -- Penggalian Struktur sampai kedalaman tidak lebih dari 2 m</option>
								<option>5.01 (2) -- Penggalian Struktur sampai kedalaman lebih dari 2 m, tapi tidak lebih dari 4 m</option>
								<option>5.01 (3) -- Penggalian Struktur sampai kedalaman  lebih dari 4 m</option>
							</optgroup>
							<optgroup label="Bab 6 : DRAINASE">
								<option>6.05 (7) -- Pipa Gorong-gorong Beton Bertulang, dia. 60 cm, Tipe B | Pipa Gorong-gorong Beton Bertulang, dia. 60 cm, Tipe C</option>
								<option>6.05 (8) -- Pipa Gorong-gorong Beton Bertulang, dia. 80 cm, Tipe A</option>
								<option>6.05 (9) -- Pipa Gorong-gorong Beton Bertulang, dia. 80 cm, Tipe B</option>
								<option>6.05 (10) -- Pipa Gorong-gorong Beton Bertulang, dia. 100 cm, Tipe A</option>
								<option>6.05 (11) -- Pipa Gorong-gorong Beton Bertulang, dia. 100 cm, Tipe B</option>
								<option>6.05 (16) -- Pipa Gorong-gorong Beton Bertulang, 2 dia. 60 cm, Tipe C</option>
								<option>6.05 (17) -- Pipa Gorong-gorong Beton Bertulang, 2 dia. 60 cm, Tipe D</option>
								<option>6.05 (20) -- Pipa Gorong-gorong Beton Bertulang, 2 dia. 100 cm, Tipe C</option>
								<option>6.05 (21) -- Pipa Gorong-gorong Beton Bertulang, 2 dia. 100 cm, Tipe D</option>
								<option>6.06 (01) -- Saluran, Tipe DS - 1 | Saluran, Tipe DS - 2A</option>
								<option>6.06 (04) -- Saluran, Tipe DS - 3</option>
								<option>6.06 (05) -- Saluran, Tipe DS - 3A</option>
								<option>6.06 (06) -- Saluran, Tipe DS - 4</option>
								<option>6.06 (08) -- Saluran, Tipe DS - 5</option>
								<option>6.06 (09) -- Saluran, Tipe DS - 8</option>
								<option>6.06 (12) -- Saluran, Tipe DS 10</option>
								<option>6.06 (13) -- Inlet Drain. Tipe DI - 1</option>
								<option>6.06 (14) -- Inlet Drain. Tipe DI - 2</option>
								<option>6.06 (15) -- Inlet Drain. Tipe DI - 3 (MH-1)</option>
								<option>6.06 (15) 2 -- Inlet Drain. Tipe D1 - 4</option>
								<option>6.06 (16) -- Outlet Drain. Tipe DO - 1</option>
								<option>6.06 (17) -- Outlet Drain. Tipe DO - 2</option>
								<option>6.06 (18) -- Outlet Drain. Tipe DO - 3</option>
								<option>6.06 (18) 2 -- Outlet Drain. Tipe DO - 4</option>
								<option>6.07 (8) -- Bangunan Terjun Tegak (DV - 10_</option>
								<option>6.08 (1) -- Pipa Drainase, dia 15 cm dengan perlengkapan sambungan dan penyangga.</option>
								<option>6.08 (2) -- Pipa Drainase, dia 20 cm dengan perlengkapan sambungan dan penyangga.</option>
								<option>6.08 (3) -- Deck Drain beserta asessorisnya, tipe 1.</option>
							</optgroup>
						</select>
					</div>
				</div>
				<hr>
				<div class="form-group">        
					<div class="col-sm-offset-3 col-sm-9">
						<button type="submit" class="btn btn-primary">Simpan</button>
						<a href="<?=base_url('Reqwork')?>" class="btn btn-default">Kembali</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /#page-wrapper -->

<?php $this->load->view('footer')?>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
	$( function() {
		$("select[name='satuan_pekerjaan']").change(function(){
			var sat = $("select[name='satuan_pekerjaan'] option:selected").val();
			$('.satuan_pekerjaan_value').text(sat);
		});


		$.widget( "custom.combobox", {
			_create: function() {
				this.wrapper = $( "<span>" )
				.addClass( "custom-combobox" )
				.insertAfter( this.element );

				this.element.hide();
				this._createAutocomplete();
				this._createShowAllButton();
			},

			_createAutocomplete: function() {
				var selected = this.element.children( ":selected" ),
				value = selected.val() ? selected.text() : "";

				this.input = $( "<input>" )
				.appendTo( this.wrapper )
				.val( value )
				.attr( "title", "" )
				.addClass( "custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left" )
				.autocomplete({
					delay: 0,
					minLength: 0,
					source: $.proxy( this, "_source" )
				})
				.tooltip({
					classes: {
						"ui-tooltip": "ui-state-highlight"
					}
				});

				this._on( this.input, {
					autocompleteselect: function( event, ui ) {
						ui.item.option.selected = true;
						this._trigger( "select", event, {
							item: ui.item.option
						});
					},

					autocompletechange: "_removeIfInvalid"
				});
			},

			_createShowAllButton: function() {
				var input = this.input,
				wasOpen = false

				$( "<a>" )
				.attr( "tabIndex", -1 )
				.attr( "title", "Show All Items" )
				.attr( "height", "" )
				.tooltip()
				.appendTo( this.wrapper )
				.button({
					icons: {
						primary: "ui-icon-triangle-1-s"
					},
					text: "false"
				})
				.removeClass( "ui-corner-all" )
				.addClass( "custom-combobox-toggle ui-corner-right" )
				.on( "mousedown", function() {
					wasOpen = input.autocomplete( "widget" ).is( ":visible" );
				})
				.on( "click", function() {
					input.trigger( "focus" );

            // Close if already visible
            if ( wasOpen ) {
            	return;
            }

            // Pass empty string as value to search for, displaying all results
            input.autocomplete( "search", "" );
        });
			},

			_source: function( request, response ) {
				var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
				response( this.element.children( "option" ).map(function() {
					var text = $( this ).text();
					if ( this.value && ( !request.term || matcher.test(text) ) )
						return {
							label: text,
							value: text,
							option: this
						};
					}) );
			},

			_removeIfInvalid: function( event, ui ) {

        // Selected an item, nothing to do
        if ( ui.item ) {
        	return;
        }

        // Search for a match (case-insensitive)
        var value = this.input.val(),
        valueLowerCase = value.toLowerCase(),
        valid = false;
        this.element.children( "option" ).each(function() {
        	if ( $( this ).text().toLowerCase() === valueLowerCase ) {
        		this.selected = valid = true;
        		return false;
        	}
        });

        // Found a match, nothing to do
        if ( valid ) {
        	return;
        }

        // Remove invalid value
        this.input
        .val( "" )
        .attr( "title", value + " didn't match any item" )
        .tooltip( "open" );
        this.element.val( "" );
        this._delay(function() {
        	this.input.tooltip( "close" ).attr( "title", "" );
        }, 2500 );
        this.input.autocomplete( "instance" ).term = "";
    },

    _destroy: function() {
    	this.wrapper.remove();
    	this.element.show();
    }
});

		$( "#combobox" ).combobox();
		$( "#toggle" ).on( "click", function() {
			$( "#combobox" ).toggle();
		});
	} );
</script>