<?php
$id = '';
$judul = '';
$tanggal = '';
$isi = '';
$gambar = '';
$act = 'add_pengumuman';
foreach($edit->result_array() as $row){
	$id = $row['pengumuman_id'];
	$judul = $row['pengumuman_judul'];
	$tanggal = $row['pengumuman_tanggal'];
	$isi = $row['pengumuman_isi'];
	$gambar = $row['pengumuman_gambar'];
	$act = 'edit_pengumuman';
}

?>

<div class="page">
	<div class="page-header">
      <h1 class="page-title"><?=$title?></h1>
      <ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?=base_url()?>dashboard">Dashboard</a></li>
		<li class="breadcrumb-item active">Master</li>
	  </ol>
      <div class="page-header-actions">
		<a type="button" class="btn btn-warning" href="<?=base_url()?>front/pengumuman">
			<i class="icon wb-arrow-left" aria-hidden="true"></i> Back
		</a>
      </div>
    </div>
	
	
    <div class="page-content container-fluid">
      <div class="row">
	  
			<div class="col-lg-12">
			  <!-- Panel Summary Mode -->
			  <div class="panel">
				<div class="panel-heading">
				  <h3 class="panel-title">Add <?=$title?></h3>
				</div>
				<div class="panel-body">
				  <form class="form-horizontal" id="FrmAjax">
				  <input type="hidden" name="id" value="<?=$id?>"/>
					<div class="Errors"></div>
					<div class="form-group row">
					  <label class="col-md-3 form-control-label">Judul</label>
					  <div class="col-md-6">
						<input type="text" class="form-control" name="judul" value="<?=$judul?>"/>
					  </div>
					  <div class="col-md-3">
						<input type="text" class="form-control" name="tanggal" value="<?=$tanggal?>" placeholder="Tanggal"/>
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-md-3 form-control-label">Isi</label>
					  <div class="col-md-9">
						<?php echo $this->ckeditor->editor('isi',''.$isi.'',@$default_value);?>
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-md-3 form-control-label">Gambar</label>
					  <div class="col-md-6">
						<input type="file" class="form-control" name="fileupload"/>
						<input type="hidden" class="form-control" name="gambar" value="<?=$gambar?>"/>
					  </div>
					  <?php if($gambar != ''){ ?>
					  <div class="col-md-3">
						<img src="<?=base_url()?>assets/media/pengumuman/<?=$gambar?>" width="100">
					  </div>
					  <?php } ?>
					</div>
					<div class="text-right">
					  <button type="submit" class="btn btn-primary">Submit</button>
					</div>
				  </form>
				</div>
			  </div>
			  
			  
			  <!-- End Panel Summary Mode -->
			</div>
		
      </div>
    </div>
	
	
  </div>
  
  
  
  
  
<script>
			// action save
			$("#FrmAjax").on('submit',(function(e) {
				for ( instance in CKEDITOR.instances ) {
					CKEDITOR.instances[instance].updateElement();
				}
				
				e.preventDefault();
				$.ajax({
				url: "<?=base_url()?>act_front/<?=$act?>", 
				type: "POST",             // Type of request to be send, called as method
				data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
				success: function(data)   // A function to be called if request succeeds
				{
					if(data == '1'){
						alert('Data Berhasil Disimpan');
						location.href="<?=base_url()?>front/pengumuman"
					}else{
						  $('.alert').show();
						  $('.Errors').html('<div class="errors alert alert-danger alert-dismissible"><button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">×</span></button><p>Errors : </p>'+data+'</div>');
					}
				}
				});
			}));
			
</script>