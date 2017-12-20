
<section id="inner-title" class="inner-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-6"><h2>Berita</h2></div>
      <div class="col-md-6 col-lg-6">
        <div class="breadcrumbs">
          <ul>
            <li>Current Page:</li>
            <li><a href="<?=base_url()?>">Beranda</a></li>
            <li><a href="<?=base_url()?>pengumuman">Berita</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section> 
<section id="section14" class="section-margine blog-list" style="margin-bottom:30px">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-lg-9">
	  
			  <?php foreach($pengumuman->result_array() as $row){?>
				<div class="section-14-box">
				  <img src="<?=base_url()?>assets/media/pengumuman/<?=$row['pengumuman_gambar']?>" class="img-responsive" alt="<?=$row['pengumuman_judul']?>">
				  <h3><a href="<?=base_url()?>pengumuman/<?=$row['pengumuman_alias']?>"><?=$row['pengumuman_judul']?></a></h3>
				  <div class="row">
					<div class="col-md-12 col-lg-12">
					  <div class="comments">
						<a class=""><i class="fa fa-calendar"></i> <?=tgl_indo2($row['pengumuman_tanggal'])?></a> 
						<a class=""><i class="fa fa-user"></i> <?=$row['pengumuman_penulis']?></a>
					  </div>
					</div>
				  </div>
				  <?=$row['pengumuman_isi']?>
				  <?php if($this->uri->segment(2) == ''){ ?>
					  <div class="row">
						<div class="col-md-12 col-lg-12">
						  <div class="text-left"><a href="<?=base_url()?>pengumuman/<?=$row['pengumuman_alias']?>" class="btn btn-primary">Read More</a></div>
						</div>
					  </div>
				  <?php } ?>
				</div>
			  <?php } ?>
	  
      </div>
      <div class="col-md-3 col-lg-3">
        <div class="section-14-box"> 
          <h4 class="underline">Cari Berita</h4>
          <form class="search-form" action="#" method="post">
                <input type="search" class="blog-search-field" placeholder="Search..." value="" name="s" title="Search for:"> 
                <button type="submit">
                    <i class="fa fa-search"></i>
                </button> 
            </form>
        </div>
        <div class="section-14-box"> 
          <h4 class="underline">Berita Terbaru</h4>
          <ul>
			<?php foreach($pengumuman_terbaru->result_array() as $row){?>
             <li><a href="<?=base_url()?>pengumuman/<?=$row['pengumuman_alias']?>"><?=$row['pengumuman_judul']?></a></li>
			<?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>