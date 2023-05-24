<div class="container mt-5">
    <h1>Daftar Wisata Di Kabupaten Klaten</h1>
    <!-- <div class="row mt-3">
		<div class="col-md-6">
			
			<ul class="list-group">
				<?php foreach ($wisata as $wst) : ?>
					<li class="list-group-item"><?= $wst['NAME'] ?></li>
					<li class="list-group-item">Rp.<?= $wst['TICKET_PRICE'] ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div> -->
    <div class="card-columns mt-3">
        <?php foreach ($wisata as $wst) : ?>
            <div class="card mt-1" style="width:300px">
                <img class="card-img-top" src="<?= base_url() ?>asset/img/wisata/<?= $wst['ID'] ?>.jpg" style="height:200px" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $wst['NAME'] ?></h5>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>