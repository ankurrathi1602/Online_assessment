<?php include "includes/db.php" ?>
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
                        <li class="active"><a href="register.php">Register<i class="fa fa-fw fa-login"></i></a></li>
                        <li><a href="Login.php">Login</a></li>

                    </ul>
                </div>
            </div>
        </nav>

<!-- Main section-->
        <div class="container">
            <div class="row well">
                <h2 style="text-align: center; text-decoration: underline;">Student Login</h2>
                <div class="col-sm-12">
                    <div class="form1">
                    <img class="rounded float-right img-thumbnail center" src="images/photopng.png" alt="icon">
                    <hr>

                    <?php

                    if(isset($_POST["submit"])){
                        $f_name = $_POST["f_name"];
                        $s_name = $_POST["s_name"];
                        $email = $_POST["email"];
                        $password1 = $_POST["password1"];
                        $m_number = $_POST["m_number"];
                        $c_address = $_POST["c_address"];
                        $city = $_POST["city"];
                        $dob = $_POST["dob"];
                        $gender = $_POST["gender"];
                        #$c_file = $_file("");
                        $insert_query= mysqli_query("SELECT * FROM register WHERE email='$email'");
                        if (mysqli_num_rows($insert_query)>0)
                        {
                            echo "<div class='center'><p style='color: red;'>User already Exist!!!</p></div>";
                            exit;
                        }
                        $query = "INSERT INTO register(f_name, s_name, email, password1, m_number, c_address, city, dob, gender) Values('$f_name', '$s_name', '$email', '$password1', '$m_number', '$c_address', '$city', '$dob', '$gender')";
                        $insert_query = mysqli_query($connection, $query)
                        or die("Could not perform the query");
                        echo "<p style='color: green;' align='center';>Registered Successfuly!! <br> Please! login for proceed &nbsp;&nbsp;<a href='login.php' class='btn btn-primary'>Login</a></p>";

                    }
                    
                    
                    ?>
                        <form action="" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label for="f_name" style="font-size: 20px;">Firstname</label>
                                <input class="form-control" type="text" placeholder="firstname" name="f_name" required> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="s_name" style="font-size: 20px;">Secondname</label>
                                <input class="form-control" type="text" placeholder="secondname" name="s_name" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="email" style="font-size: 20px;">Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" required>

                            </div>
                            <div class="form-group col-md-12">
                                <label for="password" style="font-size: 20px;">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" required>

                            </div>
                            <div class="form-group col-md-12">
                                <label for="password1" style="font-size: 20px;">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm Password" name="password1" required>

                            </div>
                            <div class="form-group col-md-12">
                                <label for="m_number" style="font-size: 20px;">Mobile No.</label>
                                <input type="number" class="form-control" placeholder="Mobile No." name="m_number" required>

                            </div>
                            <div class="form-group col-md-12">
                                <label for="c_address" style="font-size: 20px;">Address</label>
                                <textarea type="text" class="form-control" placeholder="Address" name="c_address" required row="8" column="8"></textarea>

                            </div>
                            <div class="form-group col-md-12">
                                <label for="city" style="font-size: 20px;">Town/City</label>
                                <input type="text" class="form-control" placeholder="Town/City" name="city" required>

                            </div>
                            <div class="form-group col-md-12">
                                <label for="dob" style="font-size: 20px;">Date Of Birth</label>
                                <input type="date" class="form-control" name="dob" required>

                            </div>
                            <div class="form-group col-md-12">
                                <label for="gender" style="font-size: 20px;">Gender</label>
                                <div>
                                <input type="radio" name="gender" value="male" checked> &nbsp; Male &nbsp;
                                <input type="radio" name="gender" value="female">  &nbsp;Female&nbsp;
                                <input type="radio" name="gender" value="other">  &nbsp;Other
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="file" name="c_file">
                            </div>
                            <div class="button1">
                                <input class="btn btn-success" type="submit" name="submit" value="Register" style="text-align: center; width:50%;">
                                <button class="btn btn-danger" type="button" name="login" style="float: right; text-align: center;" onclick="window.location='login.php'"><img src="images/user_login.png" style="border-radius: 50%;" width="25"> Login</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="up" onclick="location.href='register.php';">Go to top</button>
            </div>
        </div>


<?php include "includes/footer.php"; ?>

