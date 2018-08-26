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
<?php 
$no = explode('/', $data['no_request_of_work']);
?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-sm-12">
			<h3>Tambah Request of Work</h3>
			<hr>
			<form class="form-horizontal" action="<?=base_url('Reqwork/editWork')?>" method="POST">
				<div class="form-group">
					<label class="control-label col-sm-3" for="judul_gambar">No:</label>
					<div class="col-sm-9">
						<input type="text" name="no_1" size=4 value="<?=$no[0]?>"> /bstr/seksi/ <input type="text" name="no_2" size=4 value="<?=$no[3]?>"> / <input type="text" name="no_3" size=4 value="<?=$no[4]?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="jenis_pekerjaan">Jenis Pekerjaan:</label>
					<div class="col-sm-9">
						<select class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan">
							<option value="">-- Pilih Jenis Pekerjaan --</option>
							<?php 
							$jenis_pekerjaan=listJenisPekerjaan();
							foreach($jenis_pekerjaan as $j){
								?>
								<option value="<?=$j?>" <?=$j==$data['jenis_pekerjaan'] ? 'selected' : ''?>><?=$j?></option>
								<?php 
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="uraian_pekerjaan">Uraian Pekerjaan</label>
					<div class="col-sm-9">
						<textarea name="uraian_pekerjaan" class="form-control" rows="5"><?=$data['uraian_pekerjaan']?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="satuan_pekerjaan">Satuan Pekerjaan</label>
					<div class="col-sm-9">
						<select class="form-control" id="satuan_pekerjaan" name="satuan_pekerjaan">
							<option value="">-- Pilih Satuan Pekerjaan --</option>
							<?php
							$satuan=listSatuanPekerjaan();
							foreach($satuan as $s){
								?>
								<option value="<?=$s?>" <?=$s==$data['satuan_pekerjaan'] ? 'selected' : ''?>><?=$s?></option>
								<?php 
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="kuantitas_pekerjaan">Kuantitas Pekerjaan</label>
					<div class="col-sm-9">
						<input type="text" class="" id="kuantitas_pekerjaan" name="kuantitas_pekerjaan" value="<?=$data['kuantitas_pekerjaan']?>"> <span class="satuan_pekerjaan_value"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="lokasi_pekerjaan">Lokasi Pekerjaan</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="lokasi_pekerjaan" name="lokasi_pekerjaan" value="<?=$data['lokasi_pekerjaan']?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="combobox">No Item</label>
					<div class="col-sm-9">
						<!-- <input list="browsers" name="browser" class="form-control"> -->
						<select id="browsers" class="form-control" name="no_item">
							<option value="">-- Pilih No Item --</option>
							<?php 
							// $no_item=listNoItem();
							// foreach($no_item $no){
							?>
							
							<optgroup label="Bab 1 : UMUM">
								<option></option>
								<option></option>
								<option></option>
								<option></option>
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