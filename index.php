<?php
session_start();
if(isset($_SESSION['check'])){
if($_SESSION['check']==1){
    session_destroy();
}
}
?>
<!doctype html>
<html>

<head>
   <?php include 'head.php'; ?>
       <title>Thrifty Home Page</title>

</head>


<body data-spy="scroll" data-target=".navbar" data-offset="80">
    <div class="background"></div>
    
    <!-- EditLayout Popup -->
    <?php include 'Views/EditLayout.php'; ?>
    <!-- EditLayout Popup -->
    
    <!-- Register Popup -->

    <?php include 'Views/registration.php'; ?>

    <!-- Register Popup -->

    <!-- Login Popup -->
    <?php include 'Views/login.php'; ?>
    <!-- Login Popup -->

    <!-- Forget Popup -->
    <?php include 'Views/forget.php'; ?>
    <!-- Forget Popup -->
    
   <!-- Reservation Popup -->
    <?php include "Views/reservation.php"; ?>
    <!-- Reservation Popup -->

    <div id="wrap">


    <?php include 'layouts/nav.php'; ?>
        <!-- Header -->
    <?php include 'layouts/header.php'; ?>

        <!-- Header -->

        <!-- About -->

    <?php include 'layouts/about.php'; ?>

        <!-- About -->
        
        <!-- Services -->
        
        <?php include './layouts/services.php'; ?>
        <!-- Services -->

        <!-- Footer Us -->
    <?php include 'layouts/footer.php'; ?>

    <?php include 'layouts/copyrights.php'; ?>
        
        <!-- Footer Us -->
        
        <!-- Loading --> 
        
    <?php include 'layouts/loading.php'; ?>
        
        <!-- Loading --> 
        
        <!-- Js Files -->

    <?php include 'layouts/js.php'; ?>

        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
        <script>
        $(function () {
        $('a[href*=#]:not([href=#]):not(.carousel-control ,.tab)').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top-20
                    }, 1000);
                    return false;
                }
            }
        });

    });
        </script>

        <!-- Js Files -->

        <!------------------------------------------------------------------------------------------------------------------->
    </div>
</body>

</html>