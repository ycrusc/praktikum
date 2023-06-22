<div id="layoutSidenav_content">
    <div class="col-20 col-xl-13">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">Users</h2>
                    <?= $this->session->flashdata('delete'); ?>
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
                            <?= form_error('full_name', '<small class="text-danger pl-3">', '</small>'); ?>
                            <button type="button" data-toggle="modal" data-target="#modalAdd" class="btn btn-primary">ADD USER</button>
                            <div class="table-responsive">
                                <table class="table table-borderless transaction-table w-100 active" id="table-all">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th class="status-header">Status</th>
                                            <th class="action-header" colspan="2">Action</th>
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
                                                <td class="action">
                                                    <button type="button" data-toggle="modal" data-target="#modalEdit<?= $usr['ID'] ?>" class="btn btn-primary">Edit</button>
                                                </td>
                                                <td class="action">
                                                    <button type="button" data-toggle="modal" data-target="#modalDelete<?= $usr['ID'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <!-- Modal Edit-->
                                            <div class="modal fade" id="modalEdit<?= $usr['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Wisata</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" action="<?= base_url('auth/addUser'); ?>">
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Full Name</label>
                                                                        <input type="text" class="form-control" id="inputEmail4" placeholder=<?= $usr['FULL_NAME'] ?>>
                                                                        <?= form_error('full_name', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputPassword4">User Name</label>
                                                                        <input type="text" class="form-control" id="inputPassword4" placeholder=<?= $usr['USER_NAME'] ?>>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Email</label>
                                                                        <input type="email" class="form-control" id="inputEmail4" placeholder=<?= $usr['E_MAIL'] ?>>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputPassword4">City</label>
                                                                        <input type="text" class="form-control" id="inputPassword4" placeholder=<?= $usr['CITY'] ?>>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputPassword4">Password</label>
                                                                        <input type="password" class="form-control" id="inputPassword4" placeholder="password1">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputPassword4">Repeat Password</label>
                                                                        <input type="password" class="form-control" id="inputPassword4" placeholder="<?= $usr['DESCRIPTION'] ?>">
                                                                    </div>
                                                                </div> -->
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Phone Number</label>
                                                                        <input type="text" class="form-control" id="inputEmail4" placeholder=<?= $usr['PHONE_NUMBER'] ?>>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="inputState">Role</label>
                                                                        <select id="inputState" class="form-control">
                                                                            <option selected><?= $usr['DESCRIPTION'] ?></option>
                                                                            <option>ADMIN</option>
                                                                            <option>WISATAN</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="inputState">Status</label>
                                                                    <select id="inputState" class="form-control">
                                                                        <option value="" disabled selected hidden><?= $usr['STATUS'] ?></option>
                                                                        <option>ACTIVE</option>
                                                                        <option>NON ACTIVE</option>
                                                                    </select>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a class="btn btn-secondary" data-dismiss="modal">Close</a>
                                                                    <button class="btn btn-primary" type="submit">Add User</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Delete-->
                                            <div class="modal fade" id="modalDelete<?= $usr['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Delete User</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4>Delete User <?= $usr['FULL_NAME'] ?> ??</h4>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <a type="button" class="btn btn-danger" href="<?= base_url('auth/delete/') ?><?= $usr['ID'] ?>">Delete</a>
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
                        <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?= base_url('auth/add'); ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Full Name</label>
                                    <input type="text" class="form-control" name="full_name" placeholder="full_name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">User Name</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="user-name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">City</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="City">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="password1">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Repeat Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="password2">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Phone Number</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Phone Number">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Role</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Admin</option>
                                        <option>Wisatawan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Is Actice?
                                    </label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-secondary" data-dismiss="modal">Close</a>
                                <button class="btn btn-primary" type="submit">Add User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>