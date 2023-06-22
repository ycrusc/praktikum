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
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })

    function toggleActive(e) {
        sidebar_items.forEach(function(v, k) {
            v.classList.remove('active');
        });
        e.closest('.sidebar-item').classList.add('active');
    }

    $.ajax({
        type: 'POST',
        url: <?= base_url('auth/addUser'); ?>,
        success: function(response) {
            if (response == "Success") {
                $('#thankyouModal').modal('show');
            } else {
                alert("Something just went wrong, Please try again later...");
            }
        },
        error: function() {
            alert("Something just went wrong, Please try again later...");
        }
    });

    $(function() {

        $('#form_id').submit(function(event) {
            event.preventDefault();
            var custemail = $('#email_id').val();
            var custname = $('#full_name').val();

            $.ajax({
                type: 'POST',
                url: "<?= base_url('auth/addUser'); ?>",
                data: {
                    'name': custname,
                    'email': custemail

                },
                dataType: 'html',
                success: function(results) {
                    if (custname == 0) {
                        $('.error_msg').html('error msg');
                        return false;
                    }
                }
            });


        });

    });
</script>
</body>

</html>