
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Tamasya Travel Database</title>

   
    <!-- Bootstrap core CSS -->
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/css/cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
  
    <div>
      <h3 class="float-md-start mb-0">Tamasya Travel</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="index.php?page=home">Home</a>
        <a class="nav-link" href="index.php?page=features">Features</a>
        <a class="nav-link" href="index.php?page=contact">Contact</a>
      </nav>
    </div>
  </header>

  <main class="px-3">

    <?php
            ini_set("display_error",1);

            require_once "libraries/koneksi.php";

            define("GELANG", true); //variabel konstan, kelebihannya bisa diakses di manapun asalkan masih satu rangkaian request

            if(isset($_GET['page']) == false)
            {
                //tidak ada variabel GET "page"
                $halaman = "home";
            }
            else
            {
                //ada "page"
                $halaman = $_GET['page'];

                //cek apakah ada halaman yang diminta
                if(file_exists("pages/".$halaman.".php") == false )
                {
                    //tidak ada file ini
                    $halaman = "404";
                }
            }

            require_once "pages/".$halaman.".php";
        ?>
  </main>

  <footer class="mt-auto text-white-50">
    <p>Tamasya Travel 2021</p>
  </footer>
</div>


    
  </body>
</html>
