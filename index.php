<?php 
    session_start();
    spl_autoload_register('myModelClassLoader');
    function myModelClassLoader($className){
        $path = 'Model/';
        include $path . $className . '.php';
    };
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GearVN</title>
    <!-- BOOSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- FONT -->
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/1cdfb7be00.js" crossorigin="anonymous"></script>


    <!-- OWL CAROUSEL -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> -->
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="Content/CSS/style1.css">

</head>

<body>
    <?php 
        $flag = true;
        if(isset($_SESSION['ten_quyen'])){
            if($_SESSION['ten_quyen'] === 'Admin'){
                $flag = false;
            }
        }
        if($flag){
    ?>
    <!-- IMPORT HEADER -->
    <?php include('View/layout/header.php') ?>

    <div class="">
        <?php
          $ctr = 'home';
          if (isset($_GET['action'])) {
            $ctr = $_GET['action'];
          }
          include('./Controller/' . $ctr . '.php');
        ?>
    </div>

    
    

    <!-- IMPORT FOOTER -->
    <?php include('View/layout/footer.php') ?>
<?php }else {?>
    
    <?php include('View/admin/adminheader.php') ?>
    <?php include('View/admin/home.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<?php }?>
</body>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>