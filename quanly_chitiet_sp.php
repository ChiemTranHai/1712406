<?php
include_once("connect.php");
if (isset($_GET["ma"])) {
    //Lay ma san pham
    $ma = $_GET["ma"];
    //Lay thong tin chi tiet san pham
    // join nhasanxuat c on a.nsx_ma=c.nsx_ma
    $sanpham = mysqli_query($conn, "select a.MSHH, TenHH, Gia,SoLuongHang, b.TenNhom, MoTaHH ,(select d.hsp_tentaptin from hinhanh d
                                    where d.MSHH = a.MSHH limit 0,1) as hsp_tentaptin
                                    from hanghoa a join nhomhanghoa b on a.MaNhom = b.MaNhom
                                    WHERE MSHH=" . $ma) or die(mysqli_error($conn));
    while ($row = mysqli_fetch_array($sanpham)) {
        $ten = $row['TenHH'];
        $loai = $row['TenNhom'];
        //$nsx = $row['nsx_ten'];
        $gia = $row['Gia'];
        //$giacu = $row['sp_giacu'];
        $mota = $row['MoTaHH'];
        //$motangan = $row['sp_mota_ngan'];
        //$motachitiet = $row['sp_mota_chitiet'];
        $soluong = $row['SoLuongHang'];
        //$ngaydang = date_create($row['sp_ngaycapnhat']);
        if ($row['hsp_tentaptin'] != "") {
            $hinhlon = $row['hsp_tentaptin'];
        } else {
            //$hinhlon = "no_image.gif";
        }
    }
    //Lay hinh san pham
    $hinhs = mysqli_query($conn, "select * FROM hinhanh WHERE MSHH=" . $ma);
    $hinh2s = mysqli_query($conn, "select * FROM hinhanh WHERE MSHH=" . $ma);
}
?>

<!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

<script src='https://code.jquery.com/jquery-3.3.1.js'></script> -->
<script>
    var currentImage;
    var currentIndex = -1;
    var interval;

    function showImage(index) {
        if (index < $('#bigPic img').length) {
            var indexImage = $('#bigPic img')[index]
            if (currentImage) {
                if (currentImage != indexImage) {
                    $(currentImage).css('z-index', 2);
                    clearTimeout(myTimer);
                    $(currentImage).fadeOut(250, function() {
                        myTimer = setTimeout("showNext()", 3000);
                        $(this).css({
                            'display': 'none',
                            'z-index': 1
                        })
                    });
                }
            }
            $(indexImage).css({
                'display': 'block',
                'opacity': 1
            });
            currentImage = indexImage;
            currentIndex = index;
            $('#thumbs li').removeClass('active');
            $($('#thumbs li')[index]).addClass('active');

        }
    }

    function showNext() {
        var len = $('#bigPic img').length;
        var next = currentIndex < (len - 1) ? currentIndex + 1 : 0;
        showImage(next);
    }
    var myTimer;
    $(document).ready(function() {
        myTimer = setTimeout("showNext()", 3000);
        showNext(); //loads first image
        $('#thumbs li').bind('click', function(e) {
            var count = $(this).attr('rel');
            showImage(parseInt(count) - 1);
        });
    });
</script>
<h4 align='center' style="color:#c59459;">CHI TIẾT SẢN PHẨM</h4>
<div class="container">
    <div class="row">
        <div class="col-sm-3" align="center">
            <div>
                <?php
                while ($hinh = mysqli_fetch_array($hinhs)) {
                    echo "<a><img src='feature/img/" . $hinh['hsp_tentaptin'] . "' width='250px'/></a>";
                }
                ?>
            </div>
        </div>
        <div class="col-sm-5">
            <h2 style="color:#009"><?php echo $ten; ?> </h2>
            <p><strong>Giá</strong>: <span class="Gia">
                    <?php echo number_format($gia, 0, ',', '.'); ?></span> VND</p>
            </p>
            <p><strong>Số lượng trong kho</strong>: <?php echo $soluong; ?></p>
            <p><strong>Loại sản phẩm</strong>:
                <span><?php echo $loai; ?></span></p>
            <p>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="input" value="1" size="3" style="text-align:center;" maxlength="3"/>    
                    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Quay lại"/>
                </form>
            </p>
            <p><strong>Mô tả</strong>: <?php echo $mota; ?></p>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        $('#bigPic a').lightBox();

    });
</script>