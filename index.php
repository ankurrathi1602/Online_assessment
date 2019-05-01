 <?php
    include "includes/navigation.php";
 ?>
        <!--This is the page content-->
            <div class="container">
            
                <div class="row">
                    <div class="col-lg-12 well">
                        <a href="index.php"><img height="300" width="100%" src="images/LOGO2.png" alt="LOGO" ></a>  
                    </div>

                <!-- Main page content-->
                <div class="col-lg-8 well no-gutters">
                        <h1 class="page-header">
                        Computer Science
                        <small>(CSE)</small>
                        </h1>
                    <div class="row">
                        
                    <div>
                        <div class="card-deck">
                            <div class="card text-center col-md-3 grid">
                                <img class="card-img-top img-responsive one" src="images/Cprog.jpeg" alt="C Programming">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 18px;">C Programming</h5>
                                        <p class="card-text">Exam going to be held on 25 April 2019
                                                Apply before 18 March 2019...
                                                All the best!!!
                                        </p>
                                        <button type="button" class="btn btn-primary" onclick="location.href='C_prog.php';">Know more</button>
                                    </div>
                            </div>
                        
                            <div class="card text-center col-md-3 grid">
                            <img class="card-img-top img-responsive one" src="images/ds.jpeg" alt="Data Structure">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 18px;">Data Structure</h5>
                                    <p class="card-text">Exam going to be held on 26 April 2019
                                                Apply before 18 March 2019...
                                                All the best!!!</p>
                                    <button type="button" class="btn btn-primary" onclick="location.href='ds.php';">Know more</button>
                                </div>
                            </div>
                            <div class="card text-center col-md-3 grid">
                            <img class="card-img-top img-responsive one" src="images/automata.jpeg" alt="Automata">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 18px;">Automata</h5>
                                    <p class="card-text">Exam going to be held on 27 April 2019
                                                Apply before 18 March 2019...
                                                All the best!!!</p>
                                    <button type="button" class="btn btn-primary" onclick="location.href='automata.php';">Know more</button>
                                </div>
                            </div>
                            </div>
                            </div>
                    </div>
                    <div class="row">
                        
                        <div class="card text-center col-md-3 grid">
                        <img class="card-img-top img-responsive one" src="images/daa.jpg" alt="DAA">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 18px;">DAA</h5>
                                <p class="card-text">Exam going to be held on 29 April 2019
                                                Apply before 18 March 2019...
                                                All the best!!!</p>
                                 <button type="button" class="btn btn-primary" onclick="location.href='daa.php';">Know more</button>
                            </div>
                        </div>
                    
                        <div class="card text-center col-md-3 grid">
                        <img class="card-img-top img-responsive one" src="images/os.jpeg" alt="Operating system">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 18px;">Operating System</h5>
                                <p class="card-text">Exam going to be held on 30 April 2019
                                                Apply before 18 March 2019...
                                                All the best!!!</p>
                                 <button type="button" class="btn btn-primary" onclick="location.href='os.php';">Know more</button>
                            </div>
                        </div>
                        <div class="card text-center col-md-3 grid">
                        <img class="card-img-top img-responsive one" src="images/dbms.jpeg" alt="DBMS">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 18px;">DBMS</h5>
                                <p class="card-text">Exam going to be held on 1 May 2019
                                                Apply before 18 March 2019...
                                                All the best!!!</p>
                                 <button type="button" class="btn btn-primary" onclick="location.href='dbms.php';">Know more</button>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">

                    <div class="card text-center col-md-3 grid">
                        <img class="card-img-top img-responsive one" src="images/cs.png" alt="Compiler Design">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 18px;">Compiler Design</h5>
                                <p class="card-text">Exam going to be held on 2 May 2019
                                                Apply before 18 March 2019...
                                                All the best!!!</p>
                                 <button type="button" class="btn btn-primary" onclick="location.href='cd.php';">Know more</button>
                            </div>
                        </div>
                        <div class="card text-center col-md-3 grid">
                            <img class="card-img-top img-responsive one" src="images/co.jpg" alt="Computer Organization">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 18px;">Computer Organization</h5>
                                    <p class="card-text">Exam going to be held on 28 April 2019
                                                Apply before 18 March 2019...
                                                All the best!!!</p>
                                    <button type="button" class="btn btn-primary" onclick="location.href='co.php';">Know more</button>
                                </div>
                            </div>
                    </div>
                        <button type="submit" class="btn btn-primary" name="up" onclick="location.href='index.php';">Go to top</button>
                    </div>
                     <!-- This is the sidebar section-->
                <?php include "includes/sidebar.php"; ?>

                </div>
         </div>

        <!--This is the footer-->
        <?php include "includes/footer.php";?>