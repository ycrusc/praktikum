<!-- Judul Artikel   -->

<div class="container mt-5">
    <div class="sticky-top t-t">
        <h2 class="mb-5">Event dan Acara Kebudayaan di Kab. Klaten</h2>
    </div>
</div>
<!-- /Judul Artikel   -->
<div class="container badan">
    <div class="col peding-30">
        <div class="row">
            <div class="col-sm-12 col-md-8">


                <!-- Konten -->
                <?php foreach ($event as $evnt) : ?>
                    <a href="">
                        <h3 class="mb-0"><?= $evnt['EVENT_TITLE'] ?></h3>
                    </a>
                    <div class="meta"><img class="img-baseline" src="<?= base_url() ?>asset/img/calendar.png" height="12" alt="posted-at"> <?= $evnt['EVENT_DATE'] ?></div>
                    <p class="text-justify"><?= $evnt['DESCRIPTION'] ?></p>
                    <div class="meta"><img class="img-baseline" src="<?= base_url() ?>asset/img/place.png" height="15" alt="wisata"><em><a href="#"> Lokasi Wisata</a>,
                            <img class="img-baseline img-ml" src="<?= base_url() ?>asset/img/calendar.png" height="15" alt="pengirim"><em><a href="#"> Create at </a>,
                                <img class="img-baseline img-ml" src="<?= base_url() ?>asset/img/user.png" height="15" alt="pengirim"><em><a href="#"> By </a>
                    </div>
                    <hr>
                    <br>
                <?php endforeach; ?>
            </div>
            <!-- /Konten -->
        </div>
    </div>
</div>