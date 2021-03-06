<?php
session_start();
if($_SESSION['User_type_id']!=2)
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


    </head>


    <body data-spy="scroll" data-target=".navbar" data-offset="80">
        <div class="background"></div>


        <!-- Delete Car Popup -->
            <?php include '../Views/deletecar.php';?>
        <!-- Delete Car Popup -->

            <!-- Delete user Popup -->
            <?php include '../Views/deleteuser.php';?>
            <!-- Delete user Popup -->

        <div id="wrap">

<?php include '../layouts/nav2.php'; ?>


            <!--   -------------------------------------------------------------->
             <section class="user-profile text-center admin">
                <div class="container">
                    <div class="board">
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
                                    <a href="#Add" data-toggle="tab" title="Add">
                                        <span class="round-tabs" data-toggle="tooltip" data-replacement="top" title="Add">
                          <i class="glyphicon glyphicon-plus"></i>
                     </span> </a>
                                </li>
                                <li>
                                    <a href="#Search" data-toggle="tab" title="Search">
                                        <span class="round-tabs" data-toggle="tooltip" data-replacement="top" title="Search">
                              <i class="glyphicon glyphicon-search"></i>
                         </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#Users" data-toggle="tab" title="Users">
                                        <span class="round-tabs" data-toggle="tooltip" data-replacement="top" title="Users">
                              <i class="glyphicon fa fa-users"></i>
                         </span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#Feedback" data-toggle="tab" title="Feedback">
                                        <span class="round-tabs" data-toggle="tooltip" data-replacement="top" title="Feedback">
                              <i class="glyphicon glyphicon-heart-empty"></i>
                         </span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#Reports" data-toggle="tab" title="View Reservations">
                                        <span class="round-tabs" data-toggle="tooltip" data-replacement="top" title="View Reservations">
                              <i class="glyphicon glyphicon-list-alt"></i>
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
                                    <?php include '../Views/updateuser.php'; ?>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="Add">
                                <h1 class="title">Add Car</h1>
                                <div class="content text-left">
                                    <?php include '../Views/addcar.php'; ?>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="Search">
                                <h1 class="title">Search Car</h1>

                                <div class="content text-left">
                                <div class="col-xs-6 text-center" style="margin-left:25%;z-index:9">

                                    <?php include '../Views/searchcar.php'; ?>
                                </div>
                                    <div class="search-result">
                                   <?php include '../Views/searchresults.php'; ?>
                                        </div>
                                </div>
                            </div>



                                <div class="tab-pane fade" id="Users">
                                <h1 class="title">Clients Info</h1>
                                <div class="content text-center">
                                    <div class="users-result">
                                    <?php include '../layouts/users.php'; ?>
                                        </div>
                                </div>
                            </div>
                                <div class="tab-pane fade" id="Reservations">
                                <h1 class="title">Search Reservation</h1>
                                <div class="content text-left">
                                    <?php include '../Views/CloseReservation.php' ?>
                                <div class="col-xs-6 text-center" style="margin-left:25%;z-index:9;margin-bottom:20px">

                                    <?php include '../Views/searchreservation.php'; ?>
                                </div>
                                    <div class="clearfix"></div>
                                    <div class="search-result">
                                    <?php include '../Views/reservationresults.php'; ?>
                                        </div>
                                </div>
                            </div>

                                <div class="tab-pane fade" id="Feedback">
                                <h1 class="title">Feedback</h1>
                                <div class="content text-center">
                                    <div class="feedback-result">
                                    <?php include '../Controllers/feedback-list.php'; ?>
                                    </div>
                                </div>
                            </div>
                               <div class="tab-pane fade" id="Reports">
                                <h1 class="title">Manage Reservations</h1>
                                <div class="content text-center">
                                    <div class="reports-result">
                                        <?php include '../Models/Report.php'; ?>
                                    </div>
                                </div>
                            </div>
                            </div>
                    </div>

                </div>

            </section>




        </div>
        <!-- Loading -->
        <?php include '../layouts/copyrights.php'; ?>
        <?php include '../layouts/loading.php'; ?>


        <!-- Loading -->

        <!-- Js Files -->
<script src="../Js/jquery-1.11.2.min.js"></script>
        <script src="../Js/bootstrap.js"></script>
        <script src="../Js/jquery.easing.1.3.js"></script>
        <script src="../Js/wow.min.js"></script>
        <script src="../Js/file_upload.js"></script>
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
