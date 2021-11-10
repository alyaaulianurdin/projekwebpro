<?php
    if(defined("TIKET") === false)
    {
        die("Anda tidak boleh membuka halaman ini secara langsung");
    }

    $data = [
        'username' => clean_data($_POST['username']),
        'email' => clean_data($_POST['email']),
        'password' => clean_data($_POST['password']),
        'nama' => clean_data($_POST['nama']),
        'no_hp' => clean_data($_POST['no_hp']),
        'alamat' => clean_data($_POST['alamat']),
    ];

    $username = clean_data($_POST['username']);


    update_data($koneksi, "user", $data, $username, "username");

    #redirect
    redirect("?page=kelola_user");