<?php include "includes/header.php"; ?>

        <nav class="navbar navbar-inverse navbar-fixed-top navb1" role="navigation">
            <div class="container">
            <!-- for mobile devices-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Online Assessment</a>
                </div>
                
            <!--navigations -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right side-nav">
                        <li><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
                        <li><a href="contact.php"><i class="fa fa-fw fa-user"></i>Contact</a></li>
                        <li><a href="#">Help<i class="fa fa-fw fa-question"></i></a></li>
                        <li><a href="register.php">Register<i class="fa fa-fw fa-login"></i></a></li>
                        <li class="active"><a href="#">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row well">
                <h2 style="text-align: center; text-decoration: underline;">Student Login</h2>
                <div class="col-sm-12">
                    <div class="form1">
                    <img class="rounded float-right img-thumbnail center" src="images/photopng.png" alt="icon">
                    <hr>
                        <form action="includes/login_user.php" method="POST">
                        <div class="form-group">
                            <label for="login_id">Login ID</label>
                            <input class="form-control" type="email" name="login_id" placeholder="Email">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" placeholder="password">
                        </div>
                        <input class="btn btn-danger" type="submit" name="login" value="Login" style="text-align: center; width: 50%;">
                        
                        <button class="btn btn-success" type="button" name="register" style="float:right; text-align: center;" onclick="location.href='register.php'" ><img src="images/icon-register.png" style="border-radius: 50%;" width="20"> &nbsp;Register</button>
                        <p><a href="register.php">Forgot Password<i class="fa fa-fw fa-question"></i></a></p>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>


<?php include "includes/footer.php" ?>
