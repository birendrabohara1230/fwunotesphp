<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Numerical Methods (CSIT.224)</title>

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
            <a class="navbar-brand text-white" href="../../../index.php"><img src="../../../images/logo.png" width="70px" alt="" class="img-fluid rounded"></a>
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
                    <a href="#"><button type="button" class="btn  paper-year-style">2079</button></a>
                </div>
            </div>

            <div class="col-lg-8 col-11 text-center border shadow mb-4" id="paper-model">
                <h5>FAR-WESTERN UNIVERSITY</h5>
                <p>End-Term Examination-2079</p>
                <p>Numerical Methods (CSIT.224)</p>
                <div class="row justify-content-between">
                    <div class="col-md-5 text-start mb-4">
                        <b>Faculty:</b>Science and Technology (CSIT) <br>
                        <b>Level:</b> Undergraduate <br>
                        <b>Semester:</b> Fourth <br>
                    </div>
                    <div class="col-md-3 text-end">
                        <b>Full Marks:</b> 100 <br>
                        <b>Time:</b> 3hrs
                    </div>
                </div>
                <p><i>Candidates are required to give their answers in their own words as far as practicable.
                        The figures in the margin indicate full marks.</i></p>
                <h5>Group A</h5>
                <b>
                    <p>Attempt all questions.(8x3=24)</p>
                </b>
                <div class="text-start">
                    <ol>
                        <li>What is error? Write various types of errors in numerical methods?</li>
                        <li>What do you mean by interpolation problem? Write the Lagrange second order interpolation
                            formula.</li>
                        <li>Write down the composite formula for the trapezoidal rule?</li>
                        <li>Write a difference equation to solve Poisson's equation.</li>
                        <li>What do you mean by significant number? Give an example of three significant numbers.</li>
                        <li>What is numerical method? Why it is used to solve mathematical problem?</li>
                        <li>Give the name of iterative methods for solveing linear systems of equations?</li>
                        <li>What is difference between Euler's and modified Euler's method?</li>


                        <h5 class="text-center">Group B</h5>
                        <b>
                            <p class="text-center">Attempt any five questions. (Short questions) (5x8=40)</p>
                        </b>


                        <li>Estimate a real root of the following nonlinear equation using Netwon's method correct up to
                            two decimal places sinx-x<su>2</su>-x+3=0.</li>
                        <li>Find the value of f(x) at x = 1 for the following data points using Lagrange's interpolation
                            polynomial <br>
                            <table class="table table-bordered">
                                <tr>
                                    <td>X</td>
                                    <td>-1</td>
                                    <td>-2</td>
                                    <td>2</td>
                                    <td>4</td>
                                </tr>

                                <tr>
                                    <td>f(x)</td>
                                    <td>-1</td>
                                    <td>-9 </td>
                                    <td>11</td>
                                    <td>69</td>
                                </tr>
                            </table>
                        </li>
                        <li>Evaluate the following numerical integration by using Simpson's 1/3 rule. <br>
                            <img src="../../../images/nm11.png" alt="" class="img-fluid">
                        </li>

                        <li>Obtain y(1,5) from the given differential equation using Runge Kutta 2<sup>nd</sup> order method. <br>
                            
                            <img src="../../../images/nm12.png" alt="" class="img-fluid">

                        </li>

                        <li>Construct netwon's forward difference table for the given data points and approximate the value of f(x) at x = 15. <br>
                            <table class="table table-bordered">
                                <tr>
                                    <td>x</td> <td>10</td> <td>20</td> <td>30</td> <td>40</td> <td>50</td>
                                </tr>
                                <tr>
                                    <td>f(x)</td> <td>0.173</td> <td>0.342</td> <td>0.5</td> <td>0.643</td> <td>0.766</td>
                                </tr>
                            </table>
                        </li>

                        <li>
                            Use Guess Elimination method to solve the following system of linear equations. <br>
                            2x+3y+4z=5 <br>
                            3x+4y+5z=6 <br>
                            4x+5y+6z= 7 <br>
                        </li>

                        <h5 class="text-center">Group C</h5>
                        <b>
                            <p class="text-center">Attempt any three questions. (Long questions)</p>
                        </b>

                        <li>Evaluate <img src="../../../images/nm15.png" alt="" class="img-fluid"> using trapezoidal rule taking h=0.1 and h=0.2. What happenns when the value of h is decrease?</li>
                        <li>Compare and constrast between Jocobi iterative method and Seidel method. Solve the following set of equations using Gausss Seidel method. <br>
                        x+2y+3z=4 <br>
                        6x-4y+5z=10 <br>
                        5x+2y+2z=25 <br>
                        </li>
                        <li>A plate of steel of dimension 18cm X 18cm is subjected to temperature as follows: left side at 100<sup>0</sup>C, rigth side at 200<sup>0</sup>C, upper part at 50<sup>0</sup>C and lower part at 150<sup>0</sup>C. If the temperature at the interior nodes? 
                        </li>
                        <li>Write an algorithm and C or C++ program for secant method to find the root of non-linear equation.</li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-3 col-11 shadow mb-4 costume-shadow" id="paper-fourth-sem">
                <h4>Fourth Semester</h4>
                <ol>
                    <li><a href="../sad/2079.php">System Analysis and Design</a></li>
                    <li><a href="#">Numerical Methods</a></li>
                    <li><a href="../database/2073.php">Database Management System</a></li>
                    <li><a href="../satII/2079.php">Applied Statistics</a></li>
                    <li><a href="../dcn/2079.php">Data Communication and Networks</a></li>
                    <li><a href="">Theory Of Computation</a></li>
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
            <a href="csit.php">CSIT</a> <br>
            <a href="#">General Bsc</a> <br>
            <a href="#">Engineering</a> <br>
            <a href="bba.php">BBA</a> <br>
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