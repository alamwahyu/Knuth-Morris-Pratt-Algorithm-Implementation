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
                <li class="nav-item">
                    <a class="nav-link" href="indexuser.php">Home </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Artikel <span class="sr-only">(current)</span></a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>-->
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" disabled="">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" disabled="">Search</button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout <span class="sr-only"></span></a>
                </li>
            </ul>
        </div>
    </nav>

    <br>

    <?php
    include "koneksi.php";

    //$id = $_GET['id'];
    //$id = mysqli_real_escape_string($mysqli, $id);
    session_start();
    if (isset($_SESSION['nama']))
        $nama = $_SESSION['nama'];
    $hasil = $mysqli->query("select*from tb_artikel where nama = '$nama'");
    ?>

    <button type="button" class="btn btn-primary ml-5" data-toggle="modal" data-target="#exampleModal">
        Tambah Artikel
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                include "koneksi.php";
                    $carikode = $mysqli->query("select max(id) from tb_artikel");
                    $datakode = mysqli_fetch_array($carikode);
                    if($datakode) {
                        $nilaikode = substr($datakode[0], 3);
                        $kode = (int) $nilaikode;
                        $kode = $kode + 1;
                        $hasilkode = "ART".str_pad($kode, 3, "0", STR_PAD_LEFT);
                    }
                    else{
                        $hasilkode = "ART001";
                    }
                ?>

                <div class="modal-body">
                    <form action="artikelproc.php" method="POST">
                        <label for="">ID</label>
                        <input class="form-control" type="text" value="<?php echo $hasilkode; ?>"  name="artikel_id">
                        <label for="">Judul</label>
                        <input class="form-control" type="text" placeholder="Masukkan judul" name="judul">
                        <label for="">Isi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Masukkan artikel" name="isi"></textarea>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="insertdata" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ################################################################################################### -->
    <!-- EDIT -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Artikel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="updateproc.php" method="POST">
                        <input type="hidden" name="update_id" id="update_id">
                        <label for="">Nama</label>
                        <input class="form-control" id="nama" type="text" placeholder="Masukkan nama" name="nama" disabled="">
                        <label for="">Judul</label>
                        <input class="form-control" id="judul" type="text" placeholder="Masukkan judul" name="judul">
                        <label for="">Isi</label>
                        <textarea class="form-control" id="isi" rows="5" placeholder="Masukkan artikel" name="isi"></textarea>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="updatedata" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <?php
    if (isset($_SESSION['nama']))
        ?>
        <br>
        <br>

        <div class="col-md-11">

            <table class="table table-hover ml-4" >
                <thead class="" style="background-color: #e3f2fd;" >
                    <tr>
                        <!--<th style="text-align:center;" scope="col">NO</th> -->
                        <th style="text-align:center;" scope="col">ID ARTIKEL</th>
                        <th style="text-align:center;" scope="col">NAMA</th>
                        <th style="text-align:center;" scope="col">JUDUL</th>
                        <th style="text-align:center;" scope="col" >ISI</th>
                        <th style="text-align:center;" scope="col">AKSI</th>
                    </tr>
                </thead>
                <?php
                //$i=0;
                while ($buff = mysqli_fetch_array($hasil)) {
                    //$i++;
                    ?>
                    <tbody>
                        <tr>
                            <!--<td><?php echo $i; ?></td> -->
                            <td><?php echo $buff['id']; ?></td>
                            <td scope="row"><?php echo $_SESSION['nama']; ?></td>
                            <td><?php echo $buff['judul']; ?></td>
                            <td><?php echo $buff['isi']; ?></td>
                            <td>
                                <input type="submit" class="btn btn-warning editbtn" value="Edit">
                            <form action="deleteproc.php" method="POST">
                                <br>
                                <input type="hidden" name="id" value="<?php echo $buff['id']; ?>">
                                <input type="submit" name="deletedata" class="btn btn-danger" value="Delete">
                            </td>    
                            </form>
                        </tr>
                    </tbody>
                <?php
                }; ?>
            </table>
    </div>


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
    <!-- <div style="width:600px;">
                <form method="get" action="">
                    Cari Kata :
                    <input type="text" name="kata" value="<?php echo $kata; ?>" />
                    <input type="submit" value="Cari">
                </form>
            </div> -->

    <!-- <?php
            // $KMP = new KMP();

            // $art = $mysqli->query("select * from tb_jurnal");
            // while ($teks = mysqli_fetch_array($art)) {

            //     if ($kata != '') {
            //         $hasil = $KMP->KMPSearch($kata, $teks['isi']);
            //         echo "Kata yang dicari adalah : " . $kata . "<br/>";
            //         echo "Jumlah kata yang ditemukan : " . count($hasil) . "<br/>";
            //         echo "Yaitu pada posisi string ke : ";
            //         foreach ($hasil as $h) echo $h . " ";
            //         echo "<br/>";
            //     }
            //     echo "<div style='width:1300px; padding-left:30px;'>";
            //     echo "<h3>" . $teks['judul'] . "</h3><hr/>";
            //     echo nl2br(str_replace($kata, "<font color='red'>" . $kata . "</font>", $teks['isi']));
            //     echo "</div>";
            // }
            ?> -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('.editbtn').on('click', function() {
            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#nama').val(data[1]);
            $('#judul').val(data[2]);
            $('#isi').val(data[3]);

        });
    });
</script>


</body>

</html>