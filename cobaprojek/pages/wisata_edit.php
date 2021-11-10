<?php
    if(defined("TIKET") === false)
    {
        die("Anda tidak boleh membuka halaman ini secara langsung");
    }
?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Edit Wisata</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="?page=wisata" class="btn btn-sm btn-outline-secondary">Kembali</a>
          </div>
        </div>
    </div>

<?php
    $id_wisata = clean_data($_GET['id_wisata']);
    $sql = "select * from tempat_wisata where id_wisata=".$id_wisata;

    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
?>


<form action="?page=wisata_update" method="post">
    <input type="hidden" name="id_wisata" value="<?php echo $row['id_wisata'];?>" />
    <table class="table">
        <tr>
            <td width="15%">Nama Wisata</td>
            <td width="10px">:</td>
            <td><input type="text" name="nama_wisata" value="<?php echo $row['nama_wisata'];?>" class="form-control" /></td>
        </tr>
        <tr>
            <td width="15%">Deskripsi</td>
            <td width="10px">:</td>
            <td><input type="text" name="deskripsi" value="<?php echo $row['deskripsi'];?>" class="form-control" /></td>
        </tr>
        <tr>
            <td width="15%">Harga Tiket Masuk</td>
            <td width="10px">:</td>
            <td><input type="text" name="harga" value="<?php echo $row['harga'];?>" class="form-control" /></td>
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
