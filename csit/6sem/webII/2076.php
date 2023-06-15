

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Techonology II (CSIT.325)</title>

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
                    <a href="2074.php"><button type="button" class="btn">2074</button></a>
                    <a href="2075.php"><button type="button" class="btn">2075</button></a>
                    <a href="#"><button type="button" class="btn paper-year-style">2076</button></a>
                </div>
            </div>

            <div class="col-lg-8 col-11 text-center border shadow mb-4" id="paper-model">
                <h5>FAR-WESTERN UNIVERSITY</h5>
                <p>End-Term Examination-2076</p>
                <p> Web Techonology II (CSIT.325)</p>
                <div class="row justify-content-between">
                    <div class="col-md-5 text-start mb-4">
                        <b>Faculty:</b>Science and Technology (CSIT) <br>
                        <b>Level:</b> Undergraduate <br>
                        <b>Semester:</b> sixth <br>
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
                        <li>Explain basic syntax and different output statements in PHP.</li>
                        <li>Write short notes on Filter input, XSS, Escape output.</li>
                        <li>What are different logical operators used in PHP, explain with examples.</li>
                        <li>Explain session and cookie with example.</li>
                        <li>Write a program in PHP to print table of 9 in the following pattern <br>
                            9 x 1 = 9 <br>
                            9 x 2 = 18
                        </li>
                        <li>Write a program in PHP to print the name, temporary name, size and type of upload file.</li>
                        <li>What are different types of arrays in PHP?</li>
                        <li>Explain foreach loop in PHP with suitable example.</li>

                        <h5 class="text-center">Group C</h5>
                        <b>
                            <p class="text-center">Attempt any two questions. (2x16=32)</p>
                        </b>
                        <li>Explain class,objects and class method in PHP with explain and also explain inheritance in
                            PHP.</li>
                        <li>Explain different types of joins and write output of different join queries on the following
                            two tables. <br>
                            Books
                            <table class="table table-bordered">
                                <tr>
                                    <td>Book_id</td>
                                    <td>Book_name</td>
                                </tr>
                                <tr>
                                    <td>1</td> <td>.phpL Basic</td>
                                </tr>
                                <tr>
                                    <td>2</td> <td>Learn CSS basics</td>
                                </tr>
                                <tr>
                                    <td>3</td> <td>PHP Professional from novice to professional</td>
                                </tr>
                                <tr>
                                    <td>4</td> <td>Everything you know about javascript is wrong.</td>
                                </tr>
                            </table>
                            <br>
                            Student
                            <table class="table table-bordered">
                                <tr>
                                    <td>Studentid</td> <td>Student_name</td> <td>Book_id</td>
                                </tr>
                                <tr>
                                    <td>1</td> <td>Ram</td> <td>1</td>
                                </tr>
                                <tr>
                                    <td>2</td> <td>Shyam</td> <td>2</td>
                                </tr>
                                <tr>
                                    <td>3</td> <td>Hari</td> <td> </td>
                                </tr>
                                <tr>
                                    <td>4</td> <td>rishna</td> <td>4</td>
                                </tr>
                            </table>
                            <li>Explain database connection process in PHP. Write program in PHP to login and logout, consider all required table, database names yourself.</li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-3 col-11 shadow mb-4 costume-shadow" id="paper-fourth-sem">
                <h4>Sixth Semester</h4>
                <ol>
                    <li><a href="../crypto/2074.php">Introduction to Cryptography</a></li>
                    <li><a href="../java/2074.php">Java Progamming I</a></li>
                    <li><a href="../research/2074.php">Research Methodology for CS</a></li>
                    <li><a href="../se/2074.php">Software Engineering</a></li>
                    <li><a href="#" href="">Web Tech II</a></li>
                    <li><a href="#" href="">Minor Project I</a></li>
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

</.phpl>