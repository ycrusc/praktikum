<div id="layoutSidenav_content">
    <div class="col-20 col-xl-13">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">Selamat Datang</h2>
                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="./assets/img/global/sidebar/profile.png" alt="" />
                    </button>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="tableTabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <div class="table-responsive">
                                <table class="table table-borderless transaction-table w-100" id="table-success">
                                    <thead>
                                        <tr>
                                            <th>Events</th>
                                            <th>Tanggal</th>
                                            <th>Kapasitas Pengunjung</th>
                                            <th class="status-header">Status</th>
                                            <th class="action-header">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($event as $ev) : ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                                        <!-- <img class="transaction-img" src="./assets/img/home/indomie_aceh.jpg" alt="" /> -->
                                                        <div class="d-flex flex-column justify-content-center align-items-start mt-2">
                                                            <h5 class="transaction-game"><?= $ev['EVENT_TITLE'] ?></h5>
                                                            <!-- <h5 class="transaction-type">Makanan Instan</h5> -->
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?= date('d F Y', $ev['EVENT_DATE']) ?></td>
                                                <td><?= $ev['QUOTA'] ?></td>
                                                <td class="status">
                                                    <span class="failed w-auto d-flex justify-content-center align-self-center"><?= $ev['STATUS'] ?></span>
                                                </td>
                                                <td class="action"><button class="btn-transaction mx-auto">Details</button></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>asset/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>asset/js/datatables-simple-demo.js"></script>
<script>
    const navbar = document.querySelector('.col-navbar');
    const cover = document.querySelector('.screen-cover');

    const sidebar_items = document.querySelectorAll('.sidebar-item');

    function toggleNavbar() {
        navbar.classList.toggle('appear');
        cover.classList.toggle('d-none');
    }

    function toggleActive(e) {
        sidebar_items.forEach(function(v, k) {
            v.classList.remove('active');
        });
        e.closest('.sidebar-item').classList.add('active');
    }
</script>
</body>

</html>