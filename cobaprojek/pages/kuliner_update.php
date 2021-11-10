<?php
    if(defined("TIKET") === false)
    {
        die("Anda tidak boleh membuka halaman ini secara langsung");
    }

    $data = [
        'id_kuliner' => clean_data($_POST['id_kuliner']),
        'nama_kuliner' => clean_data($_POST['nama_kuliner']),
        'deskripsi' => clean_data($_POST['deskripsi']),
        'alamat' => clean_data($_POST['alamat']),
        'foto' => clean_data($_POST['foto']),
    ];

    $id_kuliner = clean_data($_POST['id_kuliner']);


    update_data($koneksi, "kuliner", $data, $id_kuliner, "id_kuliner");

    #redirect
    redirect("?page=kuliner");