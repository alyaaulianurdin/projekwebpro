<?php
    if(defined("TIKET") === false)
    {
        die("Anda tidak boleh membuka halaman ini secara langsung");
    }

    $data = [
        'nama_kuliner' => clean_data($_POST['nama_kuliner']),
    ];

    #insert into <nama_tabel> (col1, col2, col3, ...) values (val1, val2, val3, ...)
    save_data($koneksi, "kuliner", $data);

    #redirect
    redirect("?page=kuliner");