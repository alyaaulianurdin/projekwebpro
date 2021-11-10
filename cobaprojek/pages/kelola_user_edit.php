<?php
    if(defined("TIKET") === false)
    {
        die("Anda tidak boleh membuka halaman ini secara langsung");
    }
?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Edit User</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="?page=kelola_user" class="btn btn-sm btn-outline-secondary">Kembali</a>
          </div>
        </div>
    </div>

<?php
    $username = clean_data($_GET['username']);
    $sql = "select * from user where username='$username'";

    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
?>


<form action="?page=kelola_user_update" method="post">
    <input type="hidden" name="username" value="<?php echo $row['username'];?>" />
    <table class="table">
        <tr>
            <td width="15%">Username</td>
            <td width="10px">:</td>
            <td><input type="text" name="username" value="<?php echo $row['username'];?>" class="form-control" /></td>
        </tr>
        <tr>
            <td width="15%">Email</td>
            <td width="10px">:</td>
            <td><input type="text" name="email" value="<?php echo $row['email'];?>" class="form-control" /></td>
        </tr>
        <tr>
            <td width="15%">Password</td>
            <td width="10px">:</td>
            <td><input type="password" name="password" value="<?php echo $row['password'];?>" class="form-control" /></td>
        </tr>
        <tr>
            <td width="15%">Nama</td>
            <td width="10px">:</td>
            <td><input type="text" name="nama" value="<?php echo $row['nama'];?>" class="form-control" /></td>
        </tr>
        <tr>
            <td width="15%">Nomor HP</td>
            <td width="10px">:</td>
            <td><input type="text" name="no_hp" value="<?php echo $row['no_hp'];?>" class="form-control" /></td>
        </tr>
        <tr>
            <td width="15%">Alamat</td>
            <td width="10px">:</td>
            <td><input type="text" name="alamat" value="<?php echo $row['alamat'];?>" class="form-control" /></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Update Data" class="btn btn-primary" /></td>
        </tr>
    </table>
</form>
