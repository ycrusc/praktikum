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
                                                            <!-- <h5 class="transaction-type">Sembako</h5> -->
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
                                                    <button type="button" data-toggle="modal" data-target="#modalEdit" class="btn btn-primary">Edit</button>
                                                </td>
                                                <td class="action">
                                                    <button type="button" data-toggle="modal" data-target="#modalDelete" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </td>
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
        <!-- Modal Edit-->
        <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Wisata</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Delete-->
        <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>