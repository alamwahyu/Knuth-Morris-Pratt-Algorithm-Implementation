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
            ArtikelOnline
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">About Us</a>
                </li>
            </ul>

            <form method="GET" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="kata" value="">
                <input type="submit" name="" class="btn btn-outline-success my-2 my-sm-0" value="Search">
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="regist.php">Register <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <br><br>



    <div class="card-deck ml-5" style="width: 70rem;">
        <div class="card">
            <img src="image/alamw.jpg" width="341" height="250">
            <div class="card-body">
                <h5 class="card-title">Alam Wahyu Hutomo</h5>
                <h5 class="card-title">11170910000023</h5>
                <p class="card-text">Fullstack Developer & Project Manager</p>
            </div>
        </div>
        <div class="card">
            <img src="https://instagram.fcgk15-1.fna.fbcdn.net/vp/48ff888a45828fa45ce9759abbe3ebc1/5DA7DE05/t51.2885-15/e35/25025623_1503220099727149_8712920383520505856_n.jpg?_nc_ht=instagram.fcgk15-1.fna.fbcdn.net" width="341" height="250">
            <div class="card-body">
                <h5 class="card-title">Andria Farhan</h5>
                <h5 class="card-title">11170910000021</h5>
                <p class="card-text">Fullstack Developer</p>
            </div>
        </div>
        <div class="card">
            <img src="https://instagram.fcgk15-1.fna.fbcdn.net/vp/0874527bf460c8251591ca825515340a/5DB1BB90/t51.2885-15/sh0.08/e35/s750x750/53480719_125680661907688_7761150176517832754_n.jpg?_nc_ht=instagram.fcgk15-1.fna.fbcdn.net" width="341" height="250">
            <div class="card-body">
                <h5 class="card-title">Lianto Nur Ahmad Syahputra</h5>
                <h5 class="card-title">11170910000006</h5>
                <p class="card-text">Frontend Developer</p>
            </div>
        </div>
    </div>
    <br>
    <div class="card-deck ml-5" style="width: 70rem;">
        <div class="card">
            <img src="https://instagram.fcgk15-1.fna.fbcdn.net/vp/97224f1134ebd6181d2e92ba14e567a0/5DBB3237/t51.2885-15/sh0.08/e35/s750x750/53347713_349671135887954_5417852910399694546_n.jpg?_nc_ht=instagram.fcgk15-1.fna.fbcdn.net" width="341" height="250">
            <div class="card-body">
                <h5 class="card-title">Eghar Shafiera</h5>
                <h5 class="card-title">11170910000011</h5>
                <p class="card-text">Database Engineer</p>
            </div>
        </div>
        <div class="card">
            <img src="https://instagram.fcgk15-1.fna.fbcdn.net/vp/c28944856083bdf109aa6a9d12b7dc46/5DB179F7/t51.2885-15/e35/p1080x1080/57775457_2256372727786814_1833776269143128908_n.jpg?_nc_ht=instagram.fcgk15-1.fna.fbcdn.net" width="341" height="250">
            <div class="card-body">
                <h5 class="card-title">Ramadani</h5>
                <h5 class="card-title">11170910000001</h5>
                <p class="card-text">Database Engineer</p>
            </div>
        </div>
        <div class="card">
            <img src="image/daffa.jpeg" width="341" height="250">
            <div class="card-body">
                <h5 class="card-title">M. Daffa Alhakim</h5>
                <h5 class="card-title">11170910000019</h5>
                <p class="card-text">Frontend Developer</p>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>