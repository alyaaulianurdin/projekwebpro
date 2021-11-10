<?php
    if(defined("TIKET") === false)
    {
        die("Anda tidak boleh membuka halaman ini secara langsung");
    }
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Tambah Data Tour Guide</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="?page=guide" class="btn btn-sm btn-outline-secondary">Kembali</a>
          </div>
        </div>
    </div>

<form action="?page=guide_save" method="post">
    <table class="table">
        <tr>
            <td width="15%">Nama Tour Guide</td>
            <td width="10px">:</td>
            <td><input type="text" name="nama_guide" class="form-control" /></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Simpan Data" class="btn btn-primary" /></td>
        </tr>
    </table>
</form>
