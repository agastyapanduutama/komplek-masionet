    <div class="hero-wrap" style="background-image:url(<?= base_url() ?>assets/templates/images/custom/content/header.jpeg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center p-5">
                    <div class="card" style="display: none">
                        <div class="card-body text-dark">
                            <img src="<?= base_url('assets/templates/images/custom/logo/logo.png') ?>" width="100">
                            <h1>Maisonet</h1>
                            <p>Maisonet adalah rumah tapak bertingkat rendah mengakomodasi luas kavling yang lebih kecil dari 60meter. Luas minimal Rumah maisonet berkisar 30 - 40 meter.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-12 ftco-animate">
                            <div class="single-slider owl-carousel">
                                <div class="item">
                                    <div class="properties-img" style="background-image: url(<?= base_url('assets/uploads/'. $data->gambar)?>);"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
                            <h2><?= $data->judul ?></h2>
                            <p>
                                <?= $data->teks?>
                            </p>
                        </div>
                       

                      
                    </div>
                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar ftco-animate">
                  
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Kategori</h3>
                            <?php foreach ($kategori->result() as $kat):?>
                            <li><a href="#"><?= $kat->nama_kategori?> <span></span></a></li>
                            <?php endforeach?>
                        </div>
                    </div>

                    

                    
                  
                </div>
            </div>
        </div>
    </section> <!-- .section -->

   