<div id="layoutSidenav_content">
    <div class="col-12 col-xl-9">
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
                            <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All Trx</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="success-tab" data-bs-toggle="tab" data-bs-target="#success" type="button" role="tab" aria-controls="success" aria-selected="false">Success</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending" type="button" role="tab" aria-controls="pending" aria-selected="false">Pending</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="failed-tab" data-bs-toggle="tab" data-bs-target="#failed" type="button" role="tab" aria-controls="failed" aria-selected="false">Failed</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="tableTabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <div class="table-responsive">
                                <table class="table table-borderless transaction-table w-100 active" id="table-all">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Total</th>
                                            <th>Price</th>
                                            <th class="status-header">Status</th>
                                            <th class="action-header">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                                    <img class="transaction-img" src="./assets/img/home/tehsariwangi.jpg" alt="" />

                                                    <div class="d-flex flex-column justify-content-center align-items-start mt-2">
                                                        <h5 class="transaction-game">Teh Sariwangi</h5>
                                                        <h5 class="transaction-type">Sembako</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>1 pcs</td>
                                            <td>Rp 6.900</td>
                                            <td class="status">
                                                <span class="pending w-auto d-flex justify-content-center align-self-center">Pending</span>
                                            </td>
                                            <td class="action"><button class="btn-transaction mx-auto">Details</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="failed" role="tabpanel" aria-labelledby="failed-tab">
                            <div class="table-responsive">
                                <table class="table table-borderless transaction-table w-100" id="table-failed">
                                    <thead>
                                        <tr>
                                            <th>Game</th>
                                            <th>Item</th>
                                            <th>Price</th>
                                            <th class="status-header">Status</th>
                                            <th class="action-header">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                                    <img class="transaction-img" src="./assets/img/home/indomie_aceh.jpg" alt="" />

                                                    <div class="d-flex flex-column justify-content-center align-items-start mt-2">
                                                        <h5 class="transaction-game">Indomie Goreng Aceh</h5>
                                                        <h5 class="transaction-type">Makanan Instan</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>5 pcs</td>
                                            <td>Rp 15.000</td>
                                            <td class="status">
                                                <span class="failed w-auto d-flex justify-content-center align-self-center">Failed</span>
                                            </td>
                                            <td class="action"><button class="btn-transaction mx-auto">Details</button></td>
                                        </tr>
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