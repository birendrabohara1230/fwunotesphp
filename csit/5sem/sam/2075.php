<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>System Simulation and Modeling (CSIT. 314)</title>

    <!-- BootStrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!--Custome Style -->
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/paperstyle.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar  navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="../../../index.php"><img src="../../../images/logo.png"
                width="70px" alt="" class="img-fluid rounded"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active  text-white" aria-current="page" href="../../../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#about-us">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Departments
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#bsccsit">Science & Technology</a></li>
                            <li><a class="dropdown-item" href="#">Engineering</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Management</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Paper Design Model -->

    <div class="container" id="paper-container">
        <div class="row justify-content-center">
            <!-- Paper years -->
            <div class="row text-center" id="paper-year">
                <div class="col-8">
                    <a href="2074.php"><button type="button" class="btn">2074</button></a>
                    <a href="#"><button type="button" class="btn  paper-year-style">2075</button></a>
                    <a href="2076.php"><button type="button" class="btn">2076</button></a>
                    <a href="2079.php"><button type="button" class="btn ">2079</button></a>
                </div>
            </div>

            <div class="col-lg-8 col-11 text-center border shadow mb-4" id="paper-model">
                <h5>FAR-WESTERN UNIVERSITY</h5>
                <p>End-Term Examination-2075</p>
                <p> System Simulation And Modeling (CSIT.314)</p>
                <div class="row justify-content-between">
                    <div class="col-md-5 text-start mb-4">
                        <b>Faculty:</b>Science and Technology (CSIT) <br>
                        <b>Level:</b> Undergraduate <br>
                        <b>Semester:</b> Fifth <br>
                    </div>
                    <div class="col-md-3 text-start">
                        <b>Full Marks:</b> 80 <br>
                        <b>Time:</b> 2hrs 40 minutes
                    </div>
                </div>
                <p><i>Candidates are required to give their answers in their own words as far as practicable.
                        The figures in the margin indicate full marks.</i></p>
                <h5>Group B</h5>
                <b>
                    <p>Attempt any six questions.(6x8=48)</p>
                </b>
                <div class="text-start">
                    <ol>
                        <li>What is simulation? Describe any six application areas of simulation.</li>
                        <li>Define system modeling and explain principle used in system modeling.</li>
                        <li>What do you mean by queuing system? Describe characteristics of queuing system.</li>
                        <li>Explain GPSS and describe any five symbols used in GPSS.</li>
                        <li>Describe the linear congruential method for random number generation. Use the multiplicative
                            congruential method to generate a sequence of four- three digit random integers, with
                            speed=117,
                            constant multiplier=43 and modulus=1000.</li>
                        <li>Consider a machine tool in a manufacturing shop is turning out parts at the rate if one
                            every
                            sminutes. As they are finished, the parts go to an inspector, who takes < &plusmn; 3 minutes
                                to examine each one and rejects about 10% of the parts, Now, develope a block diagram
                                and write the code for simulating the above problem using GPSS, and also explain the
                                function of each block used in the block diagram in detail.</li>
                        <li>What is server utilization? Why server utilizationn is not preferred 100% or 1, explain?
                        </li>
                        <li>The sequence of number 0.54, 0.73, 0.97, 0.10, and 0.67 has been generated. Use the
                            Kolmogorov-Smirnov test &#x0251;=-0.05 to determine if the hypothesis that the numbers are
                            uniformly distributed on the interval [0,1]can be rejected.(Note that critical value of D
                            for
                            &#x0251;=0.05 and &#xb5;=5 is 0.565</li>
                        <li> Describe inverse transformation techniques of random number generation for exponential
                            uniform
                            distribution. The following is the set of single digit numbers from random number generator.
                            <br>
                            <table class="table table-bordered">
                                <tr>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>0</td>
                                    <td>6</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>6</td>
                                    <td>4</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>6</td>
                                    <td>8</td>
                                    <td>2</td>
                                    <td>6</td>
                                    <td>6</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>6</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>6</td>
                                    <td>0</td>
                                    <td>4</td>
                                    <td>7</td>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td>0</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>4</td>
                                    <td>9</td>
                                    <td>8</td>
                                    <td>6</td>
                                    <td>0</td>
                                    <td>9</td>
                                    <td>6</td>
                                    <td>6</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>4</td>
                                    <td>7</td>
                                    <td>9</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>4</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>9</td>
                                    <td>7</td>
                                    <td>7</td>
                                    <td>5</td>
                                    <td>4</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>0</td>
                                    <td>5</td>
                                    <td>8</td>
                                    <td>2</td>
                                    <td>5</td>
                                    <td>8</td>
                                    <td>8</td>
                                    <td>3</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>0</td>
                                    <td>8</td>
                                    <td>1</td>
                                    <td>7</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>6</td>
                                    <td>2</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>6</td>
                                    <td>0</td>
                                    <td>8</td>
                                    <td>0</td>
                                    <td>6</td>
                                    <td>9</td>
                                    <td>7</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>5</td>
                                    <td>4</td>
                                    <td>3</td>
                                    <td>8</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>4</td>
                                </tr>
                            </table>
                            Using appropriate test, check whether the numbers are uniformly distributed.
                        </li>
                        <li>Write short notes on (any four): <br>
                            a) characterisstics of system <br>
                            b) Queuing notation <br>
                            c) Queuing discipline <br>
                            d) Pseudo random numbers <br>
                            e) Verification of simulation model
                        </li>




                    </ol>
                </div>
            </div>
            <div class="col-lg-3 col-11 shadow mb-4 costume-shadow" id="paper-fourth-sem">
                <h4>Fifth Semester</h4>
                <ol>
                    <li><a href="../cg/2079.php">Computer Graphics</a></li>
                    <li><a href="../daa/2075.php">Data Analysis and Algorithms</a></li>
                    <li><a href="../cd/2079.php">Compiler Design</a></li>
                    <li><a href="#">Simulation and Modeling</a></li>
                    <li><a href="../ai/2079.php">Artificial Intelligence</a></li>
                    <li><a href="../web/2073.php">Web Technology I</a></li>
                </ol>
            </div>
        </div>
    </div>




    <!-- Footer Section -->
    <div class="container-fluid">
        <div class="row justify-content-center rounded" id="footer-section">
            <div class="col-md-6 text-center">Get connected with us on social networks:</div>
            <div class="col-md-5 text-center">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""> <i class="bi bi-instagram"></i></i></a>
                <a href=""><i class="bi bi-github"></i></i></a>
                <a href=""> <i class="bi bi-twitter"></i></i></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""> <i class="bi bi-instagram"></i></i></a>
            </div>
        </div>

        <div class="row justify-content-center" id="footer-section-2">
            <div class="col-lg-3 mb-3">
                <h4>FWUNOTES</h4>
                <hr class="mb-4">
                Here we provide the old question paper of different faculties of Far Western University.
                Along this we also provide the notes of different subject.
            </div>
            <div class="col-lg-2 mb-3" id="footer-useful-link">
                <h4>USEFUL LINKS</h4>
                <hr class="lg-4">
                <a href="../../../csit.php">CSIT</a> <br>
                <a href="#">General Bsc</a> <br>
                <a href="#">Engineering</a> <br>
                <a href="../../../bba.php">BBA</a> <br>
                <a href="#">BBS</a> <br>
            </div>
            <div class="col-lg-3 mb-3" id="footer-contact">
                <h4>CONTACT</h4>
                <hr class="mb-4">
                <div><i class="bi bi-house-door p-2"></i>Mahendranagar, New Katan </div>
                <div><i class="bi bi-envelope-at-fill p-2"></i>birendrabohara2074@gmail.com</div>
                <div><i class="bi bi-telephone-forward p-2"></i>+9779867315959</div>
            </div>
        </div>

        <div class="row text-center" id="footer-copyright-section">
            <div class="col-12 text-white">© 2022 Copyright: fwunotes.xyz</div>
        </div>
    </div>

    <!-- BootStrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>