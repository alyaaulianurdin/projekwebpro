<?php
    if(defined("TIKET") === false)
    {
        die("Anda tidak boleh membuka halaman ini secara langsung");
    }
?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List Tempat Wisata</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="?page=wisata_create" class="btn btn-sm btn-outline-secondary">Tambah Baru</a>
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
        $sql = "select * from tempat_wisata";

        $result = mysqli_query($koneksi,$sql);
    ?>

    <table class="table table-striped">
        <tr>
            <th width="50px" class="text-center">No.</th>
            <th>Nama Wisata</th>
            <th width="10%">Action</th>
        </tr>

        <?php
        $no = 0;
        while($row = mysqli_fetch_assoc($result))
        {
            $no++;
            echo "<tr>
                <td class='text-center'>".$no."</td>
                <td>".$row['nama_wisata']."</td>
                <td><a href='?page=wisata_detail&id_wisata=".$row['id_wisata']."' class='btn btn-sm btn-info'>Detail</a></td>
            </tr>";
        }

        ?>

    </table>
