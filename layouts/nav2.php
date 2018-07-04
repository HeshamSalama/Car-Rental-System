        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="../Images/logo.png" width="150"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right ">
                        <li class=""><a href="../index.php#Home">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="../index.php#About">About</a></li>
                        <li><a href="../index.php#Services">Services</a></li>
                        <li><a href="../index.php#Contact">Contact</a></li>
                     
                        <?php 
                        if(!isset($_SESSION['fname'])):
                        ?>
                     <li class="login" data-popup="login-popup"><a>Login</a></li>
                <li class="register" data-popup="register-popup"><a>New Client</a></li>
                <?php endif;?>
                        <?php 
                        if(isset($_SESSION['fname'])):
                        ?>
                        <li><a class="text-blue" style="cursor:default;padding: 10px 5px;"><?php echo $_SESSION['fname'];?></a></li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <?php
                                                   
                                if($_SESSION['User_type_id']==2):
                                ?>
                              <li><a style="cursor: default;">Profile</a></li>
                                <?php else:?>
                               
                              <li><a style="cursor: default;">Profile</a></li>
                                <?php endif;?>
                                <li><a href="../functions/logout.php">Logout</a></li>
                                <?php endif;?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->


            </div>
            <!-- /.container-fluid -->
        </nav>
