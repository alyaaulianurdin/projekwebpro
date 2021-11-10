<?php
    if(defined("TIKET") === false)
    {
        die("Anda tidak boleh membuka halaman ini secara langsung");
    }
?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Kuliner</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="?page=kuliner" class="btn btn-sm btn-outline-secondary">Kembali</a>
          </div>
        </div>
    </div>
    

    <table class="table table-striped">
        <tr>
            <th>Nama Kuliner</th>
            <th>Deskripsi</th>
            <th>Alamat</th>
            <th>Foto</th>
            <th width="10%">Action</th>
        </tr>

        <?php
        
        $id_kuliner = clean_data($_GET['id_kuliner']);
        $sql = "select * from kuliner where id_kuliner=".$id_kuliner;
    
        $result = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_assoc($result);
        
            
            echo "<tr>
                <td>".$row['nama_kuliner']."</td>
                <td>".$row['deskripsi']."</td>
                <td>".$row['alamat']."</td>
                <td><img src='images/".$row['foto']."' class='img-responsive'></td>
                <td><a href='?page=kuliner_edit&id_kuliner=".$row['id_kuliner']."' class='btn btn-sm btn-info'>Edit</a></td>
            </tr>";
        

        ?>

    </table>