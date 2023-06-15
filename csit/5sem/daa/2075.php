<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Analysis of Algorithm and Design (CSIT.311)</title>

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
                    <a href="#"><button type="button" class="btn  paper-year-style">2075</button></a>
                    <a href="2076.php"><button type="button" class="btn ">2076</button></a>
                    <a href="2078.php"><button type="button" class="btn">2078</button></a>
                    <a href="2079.php"><button type="button" class="btn">2079</button></a>
                </div>
            </div>

            <div class="col-lg-8 col-11 text-center border shadow mb-4" id="paper-model">
                <h5>FAR-WESTERN UNIVERSITY</h5>
                <p>End-Term Examination-2075</p>
                <p>Analysis of Algorithm and Design (CSIT.311)</p>
                <div class="row justify-content-between">
                    <div class="col-md-5 text-start mb-4">
                        <b>Faculty:</b>Science and Technology (CSIT) <br>
                        <b>Level:</b> Undergraduate <br>
                        <b>Semester:</b> Fifth <br>
                    </div>
                    <div class="col-md-3 text-end">
                        <b>Full Marks:</b> 80 <br>
                        <b>Time:</b> 2.4hrs
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
                        <li>Define algorithm and RAM model. Explain the properties of an algorithm.</li>
                        <li>What is asymptotic notation? Write down the formal definition of big-oh, big-omega and
                            big-theta notation with example.</li>
                        <li>Define master method for recurrence relation. Solve following recurrence relation using
                            master method. <br>
                            a) T(n) = 3T(n/2) + n <br> b) T(n) = 2T(n/4) + &#8730; n;
                        </li>
                        <li>Write down the binary search algorithm. Trace the binary search algorithm on the basis of
                            following data <br>
                            a[] = {2, 5, 7, 9, 18, 45, 53, 59, 67, 72, 88, 95, 101, 104} search keys are 103 and 67.
                        </li>
                        <li>What is divide and conquer algorithm? Using this technique. Write algorithm of quick sort
                            then analyze it.</li>
                        <li>Define graph. Explain different types of graph representation with example.</li>
                        <li>Give the job sequencing algorithm with deadlines. You have given 5 jobs with profit pi and
                            deadline di as <br>
                            job i = {1, 2, 3, 4, 5} <br>
                            pi = {20, 10, 5, 15, 1} <br>
                            di = {2, 1, 3, 2, 3} <br>
                            Find the potimal job lists that can be executed in sequence within their deadlines so as to
                            maximize the profits.
                        </li>
                        <li>Consider 5 items along their respective weights and values <br>
                            I = {I<sub>1</sub>, I<sub>2</sub>, I<sub>3</sub>, I<sub>4</sub>, I<sub>5</sub>} <br>
                            W = {5, 10, 20, 30, 40} <br>
                            V = {30, 20, 100, 90, 160} <br>
                            The capacity of knapsack W = 60. Find the solution to the fractional knapsack problem.
                        </li>
                        <h5 class="text-center">Group C</h5>
                        <b>
                            <p class="text-center">Attempt any two questions. (Short questions) (2x16=32)</p>
                        </b>
                        <li> Write a dynamic program for matrix chain multiplication problem. Your are give the following matrices with their sizes:
                            A1 (10x20), A2 (20x15), A3 (15x30), A4(30x5) using dynamic programming fully parenthesize the product A1, A2, A3, A4
                            such that the number of scalar multiplications are minimum.
                       </li>
                       <li>Explain heap sort algorithm. Sort following data using heap sort <br>
                           A[] = {10, 12, 53, 34, 23, 77, 50, 66, 66, 5, 8}.
                       </li>
                       <li>Solve the all pair shortest path problem for the following graph using Flyod's Warshall algorithm <br>
                           <img src="../../../images/graph10.png" alt="" class="img-fluid">
                       </li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-3 col-11 shadow mb-4 costume-shadow" id="paper-fourth-sem">
                <h4>Fifth Semester</h4>
                <ol>
                    <li><a href="../cg/2079.php">Computer Graphics</a></li>
                    <li><a href="#">Data Analysis and Algorithms</a></li>
                    <li><a href="../cd/2079.php">Compiler Design</a></li>
                    <li><a href="../sam/2079.php">Simulation and Modeling</a></li>
                    <li><a href="../ai/2079.php">Artificial Intelligence</a></li>
                    <li><a href="../web/2079.php">Web Technology I</a></li>
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