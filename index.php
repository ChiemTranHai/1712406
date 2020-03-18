<!DOCTYPE html>
<html>

<head>
    <title>TMĐT-1712406</title>
    <meta charset="utf-8">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="jquery.slim.js">
    <link rel="stylesheet" href="bootstrap.bundle.min.js">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src='https://code.jquery.com/jquery-3.3.1.js'></script>
    <script src='https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js'></script>
    <script src='https://mdbootstrap.com/docs/jquery/components/buttons-social/'></script>
    <link rel="stylesheet" href="css/1712406.css">
</head>

<body>
    <!--header-->
    <header class="container">
        <nav class="navbar navbar-expand-sm navbar-light px-0">
            <a class="navbar-brand" href="index.php">HOME</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="menu">
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Giới thiệu</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="https://vi.wikipedia.org/wiki/Gundam" target="_blank">Lịch sử</a>
                            <a class="dropdown-item" href="https://vi.wikipedia.org/wiki/Gunpla#Ch%E1%BB%A7ng_lo%E1%BA%A1i_Gunpla" target="_blank">Tên gọi</a>
                            <a class="dropdown-item" href="http://gamek.vn/gundam-noi-tieng-va-co-anh-huong-lon-nhu-the-nao-o-nhat-ban-20180720181014085.chn" target="_blank">Văn hóa</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" id="txtSearch" name="txtSearch" />
                    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Tìm kiếm" onclick="search()" />
                    <script>
                        function search() {
                            tukhoa = document.getElementById("txtSearch").value;
                            if (tukhoa == "") {
                                alert("Nhập từ khóa để tìm kiếm");
                                return false;
                            }
                        }
                    </script>
                </form>
                <div>
                    <a href="#" target="_blank" class="fa fa-facebook"></a>
                    <a href="#" target="_blank" class="fa fa-twitter"></a>
                </div>
            </div>
        </nav>
    </header>

    <!--Products-->
    <div class="col-md-3 col-sm-6">
        <div class="body  bg-dark text-warning" id="product">
            <h2 class="title">Sản phẩm</h2>
            <?php
            include_once("connect.php");
            $result = mysqli_query($conn, "select * from nhomhanghoa a where (select count(*) from hanghoa b
                    where a.MaNhom = b.MaNhom)>0");
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            ?>
                <div>
                    <a class='text-warning' href="index.php?khoatrang=dssp&maloai=<?php echo $row['MaNhom']; ?>">
                        <?php echo $row['TenNhom']; ?>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!--/Products-->
    <?php
    if (isset($_GET['txtSearch'])) include_once('timkiem.php');
    elseif (isset($_GET['khoatrang'])) {
        $khoatrang = $_GET['khoatrang'];
        if ($khoatrang == 'quanly_chitiet_sp') {
            include_once('quanly_chitiet_sp.php');
        } else if ($khoatrang == 'timkiem') {
            include_once('timkiem.php');
        } elseif ($khoatrang == 'dssp') {
            include_once('dssp.php');
        }
    } else {
        include_once('noidungtrangchu.php');
    }
    ?>
    <!--footer-->
    <footer class="bg-dark">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-sm-3">
                    <div class="copyright color">
                        <p>&copy; 2020. </p>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="contact">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +84 914773943 </a></li>
                            <li><a href="#" style="position:relative; left:70px; top:1px;">
                                    <i class="fa fa-envelope"></i> ctranhai@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/footer-->
</body>
</html>