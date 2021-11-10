<?php
    if(defined("TIKET") === false)
    {
        die("Anda tidak boleh membuka halaman ini secara langsung");
    }

    $data = [
        'id_wisata' => clean_data($_POST['id_wisata']),
        'nama_wisata' => clean_data($_POST['nama_wisata']),
        'deskripsi' => clean_data($_POST['deskripsi']),
        'harga' => clean_data($_POST['harga']),
        'foto' => clean_data($_POST['foto']),
    ];

    $id_wisata = clean_data($_POST['id_wisata']);


    update_data($koneksi, "tempat_wisata", $data, $id_wisata, "id_wisata");

    #redirect
    redirect("?page=wisata");