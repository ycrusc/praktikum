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
            <!-- <div class="row">
                <div class="col-12">
                    <h5 class="transaction-title">Income</h5>
                    <h2 class="transaction-value">Rp 4.518.000</h2>
                </div>
            </div> -->

            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs d-flex justify-content-start align-items-center" id="tableTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">Wisata</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="success-tab" data-bs-toggle="tab" data-bs-target="#success" type="button" role="tab" aria-controls="success" aria-selected="false">Events</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending" type="button" role="tab" aria-controls="pending" aria-selected="false">Users</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="failed-tab" data-bs-toggle="tab" data-bs-target="#failed" type="button" role="tab" aria-controls="failed" aria-selected="false">Messages</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="tableTabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <div class="table-responsive">
                                <table class="table table-borderless transaction-table w-100 active" id="table-all">
                                    <thead>
                                        <tr>
                                            <th>Wisata</th>
                                            <th>Kapasitas Pengunjung</th>
                                            <th>Tiket Masuk</th>
                                            <th class="status-header">Status</th>
                                            <th class="action-header">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($wisata as $w) : ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                                        <!-- <img class="transaction-img" src="./assets/img/home/tehsariwangi.jpg" alt="" /> -->
                                                        <div class="d-flex flex-column justify-content-center align-items-start mt-2">
                                                            <h5 class="transaction-game"><?= $w['NAME'] ?></h5>
                                                            <!-- <h5 class="transaction-type">Sembako</h5> -->
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?= $w['QUOTA'] ?></td>
                                                <td><?= $w['TICKET_PRICE'] ?></td>
                                                <td class="status">
                                                    <span class="pending w-auto d-flex justify-content-center align-self-center"><?= $w['STATUS'] ?></span>
                                                </td>
                                                <td class="action"><button class="btn-transaction mx-auto">Details</button></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="success" role="tabpanel" aria-labelledby="success-tab">
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

                        <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                            <div class="table-responsive">
                                <table class="table table-borderless transaction-table w-100" id="table-pending">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th class="status-header">Status</th>
                                            <th class="action-header">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($user as $usr) : ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                                        <!-- <img class="transaction-img" src="./assets/img/home/indomie_aceh.jpg" alt="" /> -->
                                                        <div class="d-flex flex-column justify-content-center align-items-start mt-2">
                                                            <h5 class="transaction-game"><?= $usr['FULL_NAME'] ?></h5>
                                                            <h5 class="transaction-type"><?= $usr['DESCRIPTION'] ?></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?= $usr['USER_NAME'] ?></td>
                                                <td><?= $usr['E_MAIL'] ?></td>
                                                <td class="status">
                                                    <span class="failed w-auto d-flex justify-content-center align-self-center"><?= $usr['STATUS'] ?></span>
                                                </td>
                                                <td class="action"><button class="btn-transaction mx-auto">Details</button></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="failed" role="tabpanel" aria-labelledby="failed-tab">
                            <div class="table-responsive-sm">
                                <table class="table table-borderless transaction-table w-100" id="table-failed">
                                    <thead>
                                        <tr>
                                            <th>Pesan</th>
                                            <th>Tanggal Input</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th class="action-header">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($pesan as $psn) : ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                                        <!-- <img class="transaction-img" src="./assets/img/home/indomie_aceh.jpg" alt="" /> -->
                                                        <div class="d-flex flex-column justify-content-center align-items-start mt-2">
                                                            <h5 class="transaction-game"><?= $psn['PESAN'] ?></h5>
                                                            <!-- <h5 class="transaction-type">Makanan Instan</h5> -->
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?= $psn['CREATE_AT'] ?></td>
                                                <td><?= $psn['USER_NAME'] ?></td>
                                                <td><?= $psn['E_MAIL'] ?></td>
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