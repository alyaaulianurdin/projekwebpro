<?php
    if(defined("TIKET") === false)
    {
        die("Anda tidak boleh membuka halaman ini secara langsung");
    }
?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Edit Kuliner</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="?page=kuliner" class="btn btn-sm btn-outline-secondary">Kembali</a>
          </div>
        </div>
    </div>

<?php
    $id_kuliner = clean_data($_GET['id_kuliner']);
    $sql = "select * from kuliner where id_kuliner=".$id_kuliner;

    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
?>


<form action="?page=kuliner_update" method="post">
    <input type="hidden" name="id_kuliner" value="<?php echo $row['id_kuliner'];?>" />
    <table class="table">
        <tr>
            <td width="15%">Nama Kuliner</td>
            <td width="10px">:</td>
            <td><input type="text" name="nama_kuliner" value="<?php echo $row['nama_kuliner'];?>" class="form-control" /></td>
        </tr>
        <tr>
            <td width="15%">Deskripsi</td>
            <td width="10px">:</td>
            <td><input type="text" name="deskripsi" value="<?php echo $row['deskripsi'];?>" class="form-control" /></td>
        </tr>
        <tr>
            <td width="15%">Alamat</td>
            <td width="10px">:</td>
            <td><input type="text" name="alamat" value="<?php echo $row['alamat'];?>" class="form-control" /></td>
        </tr>
        <tr>
            <td width="15%">Foto</td>
            <td width="10px">:</td>
            <td><input type="text" name="foto" value="<?php echo $row['foto'];?>" class="form-control" /></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Update Data" class="btn btn-primary" /></td>
        </tr>
    </table>
</form>
