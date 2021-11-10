<?php
    if(defined("TIKET") === false)
    {
        die("Anda tidak boleh membuka halaman ini secara langsung");
    }
?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kelola Data Users</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="#" class="btn btn-sm btn-outline-secondary">Tambah Baru</a>
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
    </div>

    <?php
        $sql = "select * from user";

        $result = mysqli_query($koneksi,$sql);
    ?>

    <table class="table table-striped">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Nama</th>
            <th>Nomor HP</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>
                <td>".$row['username']."</td>
                <td>".$row['email']."</td>
                <td>".$row['password']."</td>
                <td>".$row['nama']."</td>
                <td>".$row['no_hp']."</td>
                <td>".$row['alamat']."</td>
                <td><a href='?page=kelola_user_edit&username=".$row['username']."' class='btn btn-sm btn-info'>Edit</a>
                <a href='#".$row['username']."' class='btn btn-sm btn-danger'>Hapus</a></td>
            </tr>";
        }

        ?>

    </table>
