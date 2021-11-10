<?php
    if(defined("TIKET") === false)
    {
        die("Anda tidak boleh membuka halaman ini secara langsung");
    }
?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kelola Data Booking</h1>
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
        $sql = "select b.id_booking,b.username,a.nama_wisata,a.harga from booking b,tempat_wisata a where b.id_wisata=a.id_wisata order by b.id_booking asc";

        $result = mysqli_query($koneksi,$sql);
    ?>

    <table class="table table-striped">
        <tr>
            <th>ID Booking</th>
            <th>Username</th>
            <th>Tempat Wisata</th>
            <th>Harga</th>
            <th>Action</th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>
                <td>".$row['id_booking']."</td>
                <td>".$row['username']."</td>
                <td>".$row['nama_wisata']."</td>
                <td>".$row['harga']."</td>
                <td><a href='#".$row['id_booking']."' class='btn btn-sm btn-danger'>Hapus</a></td>
            </tr>";
        }

        ?>

    </table>
