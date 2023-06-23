<div id="layoutSidenav_content">
    <div class="col-20 col-xl-13">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">Wisata Kab. Klaten</h2>
                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="./assets/img/global/sidebar/profile.png" alt="" />
                    </button>
                </div>
            </div>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <?= $this->session->flashdata('delete'); ?>
        <?= $this->session->flashdata('edit'); ?>
        <?= $this->session->flashdata('failled'); ?>
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="tableTabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <button type="button" data-toggle="modal" data-target="#modalAdd" class="btn btn-primary">ADD WISATA</button>
                            <div class="table-responsive">
                                <table class="table table-borderless transaction-table w-100 active" id="table-all">
                                    <thead>
                                        <tr>
                                            <th>Wisata</th>
                                            <th>Kapasitas Pengunjung</th>
                                            <th>Tiket Masuk</th>
                                            <th class="status-header">Status</th>
                                            <th class="action-header" colspan="2">Action</th>
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
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?= $w['QUOTA'] ?></td>
                                                <td><?= $w['TICKET_PRICE'] ?></td>
                                                <td class="status">
                                                    <span class="pending w-auto d-flex justify-content-center align-self-center"><?= $w['STATUS'] ?></span>
                                                </td>
                                                </td>
                                                <td class="action">
                                                    <button type="button" data-toggle="modal" data-target="#modalEdit<?= $w['ID'] ?>" class="btn btn-primary">Edit</button>
                                                </td>
                                                <td class="action">
                                                    <button type="button" data-toggle="modal" data-target="#modalDelete<?= $w['ID'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <!-- Modal Edit-->
                                            <div class="modal fade" id="modalEdit<?= $w['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Wisata</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" action="<?= base_url('wisata/editWisata'); ?>">
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="name">Full Name</label>
                                                                        <input type="text" class="form-control" id="name" name="name" value="<?= $w['NAME'] ?>">

                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="ticket">Ticket</label>
                                                                        <input type="text" class="form-control" name="ticket" value=<?= $w['TICKET_PRICE'] ?>>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="quota">Kapasitas</label>
                                                                        <input type="text" class="form-control" name="quota" value=<?= $w['QUOTA'] ?>>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputState">Status</label>
                                                                        <select name="active" class="form-control">
                                                                            <option value="<?= $w['IS_ACTIVE'] ?>" style="display:none;"><?= $w['STATUS'] ?></option>
                                                                            <option value="1">OPEN</option>
                                                                            <option value="2">CLOSED</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="id">Id</label>
                                                                        <input type="text" class="form-control" name="id" value=<?= $w['ID'] ?> readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button class="btn btn-primary" type="submit">Edit Wisata</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Delete-->
                                            <div class="modal fade" id="modalDelete<?= $w['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Delete Wisata</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Add-->
        <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Wisata</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?= base_url('wisata/add'); ?>">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Wisata">

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="ticket">Ticket</label>
                                    <input type="text" class="form-control" name="ticket" placeholder="Ticket">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="quota">Kapasitas</label>
                                    <input type="text" class="form-control" name="quota" placeholder="Kapasitas">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputState">Status</label>
                                    <select name="active" class="form-control">
                                        <option value="1" selected>OPEN</option>
                                        <option value="2">CLOSED</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="submit">Add Wisata</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>