<?php
    if(defined("TIKET") === false)
    {
        die("Anda tidak boleh membuka halaman ini secara langsung");
    }

    $data = [
        'id_guide' => clean_data($_POST['id_guide']),
        'nama_guide' => clean_data($_POST['nama_guide']),
        'deskripsi' => clean_data($_POST['deskripsi']),
        'no_hp' => clean_data($_POST['no_hp']),
        'foto' => clean_data($_POST['foto']),
    ];

    $id_guide = clean_data($_POST['id_guide']);


    update_data($koneksi, "tour_guide", $data, $id_guide, "id_guide");

    #redirect
    redirect("?page=guide");