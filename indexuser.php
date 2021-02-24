<!DOCTYPE html>
<html>

<head>
    <title>KMP</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="image/article.png" width="50" height="50" class="d-inline-block align-top" alt="">
            Artikel Online
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="indexuser.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="artikel.php">Artikel</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </li> -->
            </ul>
            <?php
              include "koneksi.php";
              if (!$mysqli) {
                echo "Purcase DB! :p";
                exit();
              }

              include_once("kmp.php");
              $kata = '';
              if (isset($_GET['kata']))
                $kata = $_GET['kata'];

              ?>
            <form method="GET" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="kata" value="<?php echo $kata; ?>">
                <input type="submit" name="" class="btn btn-outline-success my-2 my-sm-0" value="Search">
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout <span class="sr-only"></span></a>
                </li>
            </ul>
        </div>
    </nav>


    <?php
    $KMP = new KMP();

    $art = $mysqli->query("select * from tb_artikel");
    while ($teks = mysqli_fetch_array($art)) {

        if ($kata != '') {
      echo "<div style='margin:30px; width:400px; height:115px; border:1px solid rgb(255, 247, 96); padding:15px; background-color:rgb(255, 247, 96);'>";
      $hasil = $KMP->KMPSearch($kata, $teks['isi']);
      echo "<h6>Kata yang dicari adalah : <b>" . $kata . "</b></h6>";
      echo "<h6>Jumlah kata yang ditemukan : <b>" . count($hasil) . "</b></h6>";
      echo "Yaitu pada posisi string ke : ";
      foreach ($hasil as $h) echo $h . ", ";
  echo "</div>";
    }
    echo "<div style='width:1345px;  padding-left:30px; padding-right:30px; padding-bottom:20px; margin-top:20px;'>";
    echo "<div style='color:black; font-family:serif; border-bottom:2px solid gray;'><h3>" . $teks['judul'] . "</h3></div>";
    echo "<div style='padding:5px; margin-top:5px; border-left:6px solid red; background-color:rgb(240, 240, 240);'><h6>Diposting oleh : " .$teks['nama'] . "</h6><h6>Pada tanggal : " .$teks['tanggal']. "</h6></div>";
    echo nl2br(str_replace($kata, "<font style='background-color:tomato; color:black;' >" . $kata . "</font>","<div style='padding-top:20px;padding-left:20px;'><p>" .$teks['isi']. "</p></div>"));
    echo "<div style='border-bottom:6px solid rgb(60, 60, 60); margin-top:50px; box-shadow:4px 4px 5px gray;'></div>";
    echo "</div>";
  }
    ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>