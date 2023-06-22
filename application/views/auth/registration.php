<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title><?= $judul; ?></title>

    <!-- Icons font CSS-->
    <link href="<?= base_url("asset/assetregister/") ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url("asset/assetregister/") ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?= base_url("asset/assetregister/") ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url("asset/assetregister/") ?>vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url("asset/assetregister/") ?>css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST" action="<?= base_url('auth/registration'); ?>">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">full name</label>
                                    <input class="input--style-4" type="text" name="full_name" value="<?= set_value('full_name'); ?>">
                                    <?= form_error('full_name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">user name</label>
                                    <input class="input--style-4" type="text" name="user_name" value="<?= set_value('user_name'); ?>">
                                    <?= form_error('user_name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="text" name="email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone" value="<?= set_value('phone'); ?>">
                                    <?= form_error('phone', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="text" name="password1">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Repeat Password</label>
                                    <input class="input--style-4" type="text" name="password2">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15 ">
                            <button class="btn btn--radius-2 btn--blue mx-auto" type="submit">Submit</button>
                            <a class="btn btn--radius-2 btn--green mx-auto" href="<?= base_url() ?>auth/">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url("asset/assetregister/") ?>vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?= base_url("asset/assetregister/") ?>vendor/select2/select2.min.js"></script>
    <script src="<?= base_url("asset/assetregister/") ?>vendor/datepicker/moment.min.js"></script>
    <script src="<?= base_url("asset/assetregister/") ?>vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?= base_url("asset/assetregister/") ?>js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->