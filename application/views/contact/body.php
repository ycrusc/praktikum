<div class="container badan">
    <div class="row">
        <div class="col peding-100">
            <h1>Kontak Kami</h1>
            <p>
                Silahkan tinggalkan pesan anda, pada kolom yang tersedia.
            </p>
        </div>

        <div class="col peding-30">
            <form method="POST" action="<?= base_url('contact'); ?>">
                <?= $this->session->flashdata('message'); ?>
                <div class="form-group">
                    <label for="">Nama Anda:</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="<?= set_value('nama'); ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="">E-mail Anda:</label>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email" value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="">Pesan Anda:</label>
                    <textarea name="pesan" class="form-control" name="pesan" cols="30" rows="7"></textarea>
                </div>
                <button class="btn btn--radius-2 btn--blue mx-auto" type="submit">POST</button>
            </form>
        </div>
    </div>
</div>