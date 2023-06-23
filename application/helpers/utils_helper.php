<?php

function is_logged_in()
{
    $ci = get_instance();

    if ($ci->session->userdata('e_mail')) {
        redirect('auth');
    } else {
        redirect('admin/user');
    }
}
