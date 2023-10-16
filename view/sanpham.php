<div id="content">
    <div class="page-heading">
        <div class="text-heading">
            <p style="margin-top: 400px;"><?= $tendm ?></p>
        </div>
        <div class="img-heading">
            <img src="/assets/img/Opera Snapshot_2023-02-11_163927_phuclong.com.vn.png" alt="">
        </div>
    </div>
</div>
<div id="big-container">
    <div class="container">
        <div class="left">
            <?php
            $i = 0;
            echo '<div class="item mt-5">';
            foreach ($dssp as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $hinh = $img_path . $img;

                if ($i == 0) {
                    echo '<div class="big-item">
                         <span class="new">Món Mới</span>
                         <a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a>
                         <div class="item-infor">
                             <div class="name">
                             <a style="text-decoration:none;" href="' . $linksp . '"><p>' . $name . '</p></a>
                             </div>
                             <div class="price">
                                 <p>' . $price . '</p>
                             </div>
                             <div class="btn">
                                 <a href="' . $linksp . '">Đặt hàng</a>
                             </div>
                         </div>
                       </div>';
                } else {
                    echo '<div class="small-item">
                             <a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a>
                         <div style="text-align: center;" class="item-infor">
                             <div class="name">
                             <a style="text-decoration:none;" href="' . $linksp . '"><p style="color: #000; font-size: 16px;">' . $name . '</p></a>
                             </div>
                             <div class="price">
                                 <p>' . $price . '</p>
                             </div>
                             <div class="btn">
                                 <a href="' . $linksp . '">Đặt hàng</a>
                             </div>
                         </div>
                       </div>';
                }

                $i += 1;

                if ($i == 2 || $i == 5 || $i == 8 || $i == 11) {
                    echo '</div><div class="item mt-5">';
                }
            }
            echo '</div>';
            ?>
        </div>
    </div>

    <?php include "boxright.php"; ?>