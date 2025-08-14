<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lai Store - Trung tâm mua sắm di động</title>
    <link rel="icon" type="image/png" href="../uploads/logo.png">
    <link rel="stylesheet" href="VIEW/index.css">
    <script src="VIEW/javascript/index.js" defer></script>
</head>

<body>
    <?php
        include("header.php");
    ?>
    <div class="khoitop">
        <div class="banner_container">
            <div id="banner_content">
                <div id="track">
                    <img src="../uploads/bn1.jpg" alt="" class="banner">
                    <img src="../uploads/bn2.jpg" alt="" class="banner">
                    <img src="../uploads/bn3.jpg" alt="" class="banner">
                    <img src="../uploads/bn4.jpg" alt="" class="banner">
                </div>
                <div class="khoi_muiten">
                    <div id="muitentrai"><img src="../uploads/angle-left (1).png" alt=""></div>
                    <div id="muitenphai"><img src="../uploads/angle-right.png" alt=""></div>
                </div>
            </div>
            <div id="banner_item">
                <div><img src="../uploads/bnitem1.jpg" alt="" class="banner_top"></div>
                <div><img src="../uploads/bnitem2.png" alt=""></div>
            </div>
        </div>
    </div>
    </div>

    <?php
    include("MODEL/model.php");
    $model = new Model();
    ?>
    <?php
    $selectdanhmuc = $model->select_danhmuc();
    echo "<div class='danhmuc_container'>";
    echo "  <div class='tieudedanhmuc'>DANH MỤC</div>";
    echo "  <div class='danhmuc_content'>";
    echo "<div class='danhmuc_content_link'>";
    echo "<img src='../uploads/reply-all.png' alt='Ảnh danh mục'  class='anhdanhmuc'>";
     echo "<h3 class='tendanhmuc'>Tất cả</h3>";
    echo "</div>";
    foreach ($selectdanhmuc as $row) {
        echo "<div data-danhmucid='" . $row['danhmuc_id'] . "' class='danhmuc_content_link'>";
        echo "<img src='../uploads/" . $row['anhdanhmuc'] . "' alt='Ảnh danh mục'  class='anhdanhmuc'>";
        echo "<h3 class='tendanhmuc'>" . $row['tendanhmuc'] . "</h3>";
        echo "</div>";
    }
    echo "  </div>";
    echo "</div>";
    ?>

    <br>
    
    <div class="tieude_goiyhomnay">
        <h3>GỢI Ý HÔM NAY</h3>
    </div>

    <div id="dsspid"></div>
    
    <div id="khoi_muiten">
        <img src="../uploads/arrow-up.png" alt="">
    </div>
    <?php
    include("View/footer.html");
    ?>
    <div class="chat" id="chat">
        <img src="../uploads/messages.png" alt="">
        <p>Chat</p>

    </div>
    <div class="box">
        <div class="khoitieudechat">
            <h3>Chat</h3>
            <img src="../uploads/circle-xmark.png" id="close" type="button" width="20px" title="Đóng đoạn chát">
        </div>

        <!--Hiển thị đoạn chat bằng id view-->
        <div class="view"></div>

        <form method="post" action="" class="myForm">
            <input type="text" placeholder="Nhập nội dung tin nhắn" name="tinnhan" class="input_tinnhan">
            <div class="thaotac">
                <div>input</div>
                <button type="submit" name="btnsendmessage" style="border: 0;" id="btngui"><img id="send"
                        src="../uploads/paper-plane-top.png" width="20px"></button>
            </div>
        </form>

    </div>

</body>

</html>