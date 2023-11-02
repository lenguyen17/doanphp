<div class="container d-flex">

    <?php 
    // ?action=shop&act=shop&sort=sale&order=desc
    // ORDERY BY
    $sort = isset($_GET['sort']) ? $_GET['sort'] : 'all';
    $order = isset($_GET['order']) ? $_GET['order'] : '';
    //GET DATA
    $laptop = new laptop();
    $result = $laptop->getLaptopList($sort, $order);
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $item = $laptop->getLaptopById($row['id_laptop'], '');
?>
    <div class="product-item_wrap">
        <a class="px-2" href="index.php?action=shop&act=detail&idlaptop=<?php echo $row['id_laptop'];?>">
            <div class="text-center">
                <img class="" src="<?php echo $item['url'];?>" width="200px" alt="">
            </div>
            <p class="text-dark"><?php echo $row['ten_laptop']." ". $item['dung_luong'] ."<br>";?></p>
            <?php 
                if($item['giam_gia'] == 0){?>
            <p class="item-product-price"><?php echo number_format($item['don_gia'], 0, ',', '.');?>đ</p>
            <?php } else {?>
            <p class="item-product-price">
                <?php echo number_format($item['don_gia']*(1-$item['giam_gia']/100), 0, ',', '.');?>đ</p>
            <div class="d-flex">
                <p class="item-pro-percent"><?php echo '-'.$item['giam_gia'];?>%</p>
                <p class="item-product-presale "><del><?php echo number_format($item['don_gia'], 0, ',', '.');?>đ</del></p>
            </div>
            <?php }; ?>
        </a>
    </div>
    <?php };?>
</div>