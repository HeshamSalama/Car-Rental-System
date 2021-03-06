<?php
session_start();
if($_SESSION['User_type_id']!=1)
    header("Location:404.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <!-- Css Files -->
   <link rel="stylesheet" href="../Css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/font-awesome.min.css">
    <link rel="stylesheet" href="../Css/animate.css">
    <link rel="stylesheet" href="../Css/owl.carousel.css">
    <link rel="stylesheet" href="../Css/owl.theme.css">
    <link rel="stylesheet" href="../Css/main.css">
    <link rel="stylesheet" href="../Css/profile.css">
    <link rel="stylesheet" href="../Css/media.css">
    <!-- Css Files -->
    <title>Profile</title>


    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
   <![endif]-->

    <body data-spy="scroll" data-target=".navbar" data-offset="80">
      
        <div class="background"></div>

        <div id="wrap">


                <?php  include '../layouts/nav2.php' ;?>
            <section class="user-profile text-center">
                <div class="container">
                    <div class="board">
                        <!-- <h2>Welcome to IGHALO!<sup>�</sup></h2>-->
                        <div class="board-inner">
                            <ul class="nav nav-tabs" id="myTab">
                                <div class="liner"></div>


                                <li class="active">
                                    <a href="#Profile" data-toggle="tab" title="Profile">
                                        <span class="round-tabs" data-toggle="tooltip" data-replacement="top" title="Profile">
                         <i class="glyphicon glyphicon-user"></i>
                     </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#Edit" data-toggle="tab" title="Edit Profile">
                                        <span class="round-tabs" data-toggle="tooltip" data-replacement="top" title="Edit">
                          <i class="glyphicon glyphicon-pencil"></i>
                     </span> </a>
                                </li>

                                <li>
                                    <a href="#edit-res" data-toggle="tab" title="Edit Reservation">
                                        <span class="round-tabs" data-toggle="tooltip" data-replacement="top" title="Reservation">
                              <i class="glyphicon glyphicon-registration-mark"></i>
                         </span>
                                    </a>
                                </li>
                                <li>                                   <a href="#Feedback" data-toggle="tab" title="Feedback">
                                        <span class="round-tabs" data-toggle="tooltip" data-replacement="top" title="Feedback">
                              <i class="glyphicon glyphicon-heart-empty"></i>
                         </span>
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="Profile">
                                <h1 class="title">Personal Info</h1>
                                <div class="content text-left">
                                    <table >
                                        <tr>
                                            <td class="text-blue">
                                                FirstName
                                            </td>
                                            <td class="text-dark">

                                                <?php echo $_SESSION['fname']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                LastName
                                            </td>
                                            <td class="text-dark">
                                               <?php echo $_SESSION['lname']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                Phone
                                            </td>
                                            <td class="text-dark">
                                                <?php echo $_SESSION['phone']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                Address
                                            </td>
                                            <td class="text-dark">
                                                <?php echo $_SESSION['address']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                E-mail
                                            </td>
                                            <td class="text-dark">
                                                <?php echo $_SESSION['email']; ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="Edit">
                                <h1 class="title">Update Info</h1>
                                <div class="content text-left">
                                    <?php include '../Views/updateuser.php' ;?>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="edit-res">
                                <h1 class="title">Reservation</h1>
                                <div class="content text-left">
                                    <?php include '../Views/editreservation.php' ;?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Feedback">
                                <h1 class="title">Feedback</h1>
                                <div class="content text-center">
                                    <h2 style="margin-bottom:25px;">Kindly Tell Us What You Think about Our Services</h2>
                                    <form id="FeedbackForm" method="POST">
                                            <div class="col-xs-12" style="margin-bottom:25px;">
                                                <textarea placeholder="Feedback" id="FeedbackContent"></textarea>
                                            </div>
                                            <div class="col-xs-12 text-right">
                                                <button type="submit" class="btn-blue fl-right">
                                                    Send
                                                </button>
                                    <div id="status"></div>
                                            </div>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

            </section>


            <!----------------------------------------------------------------------------------->

            <section class="copyrights">
                <div class="container">
                    <div class="text-center">
                        <h3 class="">All Copyrights Reserved &copy; logo
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    </h3>
                    </div>

                </div>
            </section>


        </div>
        <!-- Loading -->

    <?php include '../layouts/loading.php'; ?>

        <!-- Loading -->

        <!-- Js Files -->

<script src="../Js/jquery-1.11.2.min.js"></script>
        <script src="../Js/bootstrap.js"></script>
        <script src="../Js/jquery.easing.1.3.js"></script>
        <script src="../Js/wow.min.js"></script>
        <script src="../Js/jquery.nicescroll.min.js"></script>
        <script src="../js/smooth-scroll.js"></script>
        <script src="../Js/owl.carousel.min.js"></script>
        <script src="../Js/main.js"></script>
        <script src="../Ajax/action.js"></script>


        <script>
            new WOW().init();
        </script>
        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>

        <!-- Js Files -->


    </body>

</html>
