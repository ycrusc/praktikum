<div id="layoutSidenav_content">
    <div class="col-20 col-xl-13">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">My Profile</h2>
                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="./assets/img/global/sidebar/profile.png" alt="" />
                    </button>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="./assets/img/global/sidebar/profile.png" class="card-img" alt="" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $login['FULL_NAME'] ?></h5>
                                    <p class="card-text"><?= $login['E_MAIL'] ?></p>
                                    <p class="card-text"><small class="text-muted">As <?= $role['DESCRIPTION'] ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>