<?php
    if(defined("TIKET") === false)
    {
        die("Anda tidak boleh membuka halaman ini secara langsung");
    }
?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Tour Guide</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="?page=guide" class="btn btn-sm btn-outline-secondary">Kembali</a>
          </div>
        </div>
    </div>
    

    <table class="table table-striped">
        <tr>
            <th>Nama Tour Guide</th>
            <th>Deskripsi</th>
            <th>Nomor HP</th>
            <th>Foto</th>
            <th width="10%">Action</th>
        </tr>

        <?php
        
        $id_guide = clean_data($_GET['id_guide']);
        $sql = "select * from tour_guide where id_guide=".$id_guide;
    
        $result = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_assoc($result);
        
            
            echo "<tr>
                <td>".$row['nama_guide']."</td>
                <td>".$row['deskripsi']."</td>
                <td>".$row['no_hp']."</td>
                <td><img src='images/".$row['foto']."' class='img-responsive'></td>
                <td><a href='?page=guide_edit&id_guide=".$row['id_guide']."' class='btn btn-sm btn-info'>Edit</a></td>
            </tr>";
        

        ?>

    </table>