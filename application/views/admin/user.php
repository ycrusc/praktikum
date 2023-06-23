<div id="layoutSidenav_content">
    <div class="col-20 col-xl-13">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">Users</h2>
                    <?= form_error('full_name', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                                            <form method="POST" action="<?= base_url('user/editUser'); ?>">
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="full_name">Full Name</label>
                                                                        <input type="text" class="form-control" name="full_name" value="<?= $usr['FULL_NAME'] ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="user_name">User Name</label>
                                                                        <input type="text" class="form-control" name="user_name" value=<?= $usr['USER_NAME'] ?> readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="email">Email</label>
                                                                        <input type="email" class="form-control" name="email" value=<?= $usr['E_MAIL'] ?> readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="city">City</label>
                                                                        <input type="text" class="form-control" name="city" value=<?= $usr['CITY'] ?>>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="phone">Phone Number</label>
                                                                        <input type="text" class="form-control" name="phone" value=<?= $usr['PHONE_NUMBER'] ?>>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="inputState">Role</label>
                                                                        <select name="role" class="form-control">
                                                                            <option value="<?= $usr['ROLE_ID'] ?>" style="display:none;"><?= $usr['DESCRIPTION'] ?></option>
                                                                            <?php foreach ($allRole as $key) : ?>
                                                                                <option value="<?php echo $key['ID'] ?>"><?php echo $key['DESCRIPTION'] ?></option>
                                                                            <?php endforeach ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="inputState">Status</label>
                                                                    <select name="active" class="form-control">
                                                                        <option value="<?= $usr['IS_ACTIVE'] ?>" style="display:none;"><?= $usr['STATUS'] ?></option>
                                                                        <option value="1">ACTIVE</option>
                                                                        <option value="2">NON ACTIVE</option>
                                                                    </select>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a class="btn btn-secondary" data-dismiss="modal">Close</a>
                                                                    <button class="btn btn-primary" type="submit">Edit User</button>
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
                                                            <a type="button" class="btn btn-danger" href="<?= base_url('user/delete/') ?><?= $usr['ID'] ?>">Delete</a>
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
                        <form method="POST" action="<?= base_url('user/add'); ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="full_name">Full Name</label>
                                    <input type="text" class="form-control" name="full_name" placeholder="full_name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="user_name">User Name</label>
                                    <input type="text" class="form-control" name="user_name" value="user_name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" name="city" placeholder="city">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" name="password1" placeholder="password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Repeat Password</label>
                                    <input type="password" class="form-control" name="password12" placeholder="repeat password">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Role</label>
                                    <select id="inputState" class="form-control">
                                        <?php foreach ($allRole as $key) : ?>
                                            <option value="<?php echo $key['ID'] ?>"><?php echo $key['DESCRIPTION'] ?></option>
                                        <?php endforeach ?>
                                    </select>
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