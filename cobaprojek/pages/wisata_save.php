<?php
    if(defined("TIKET") === false)
    {
        die("Anda tidak boleh membuka halaman ini secara langsung");
    }

    $data = [
        'nama_wisata' => clean_data($_POST['nama_wisata']),
    ];

    #insert into <nama_tabel> (col1, col2, col3, ...) values (val1, val2, val3, ...)
    save_data($koneksi, "tempat_wisata", $data);

    #redirect
    redirect("?page=wisata");