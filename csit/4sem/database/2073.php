<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Database Management System (CSIT.223)</title>

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
                    <a href="#"><button type="button" class="btn paper-year-style">2073</button></a>
                    <a href="2074.php"><button type="button" class="btn">2074</button></a>
                    <a href="2076.php"><button type="button" class="btn">2076</button></a>
                    <a href="2079.php"><button type="button" class="btn">2079</button></a>
                </div>
            </div>

            <div class="col-lg-8 col-11 text-center border shadow mb-4" id="paper-model">
                <h5>FAR-WESTERN UNIVERSITY</h5>
                <p>End-Term Examination-2073</p>
                <p>Database Management System (CSIT.223)</p>
                <div class="row justify-content-between">
                    <div class="col-md-5 text-start mb-4">
                        <b>Faculty:</b>Science and Technology (CSIT) <br>
                        <b>Level:</b> Undergraduate <br>
                        <b>Semester:</b> Fourth <br>
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
                        <li>Define DBMS. What are the advantages of using DBMS over file system.</li>
                        <li>What is transaction? What are the desirable properties of a transaction? Also explain states
                            of
                            transaction.</li>
                        <li>Explain three level architecture of database with examples.</li>
                        <li>Discuss the problem of deadlock and explain Wait-Die and Wound-Wait approaches to dealing
                            deadlock problem. </li>
                        <li>What is view in SQL? Explain how views are implemented with its advantages.</li>
                        <li>What is concurrency control? Explain Timestamp-Ordering(TO) with example.</li>
                        <li>What is serializable schedule? How can you test a schedule for conflict serializability?
                        </li>
                        <li>Write short notes on(any two):
                            <ol type="a">
                                <li>Shadow paging</li>
                                <li>Physical and Logical data independence</li>
                                <li>Primary and secondary indicies.</li>
                            </ol>
                        </li>
                        <h5 class="text-center">Group C</h5>
                        <b>
                            <p class="text-center">Attempt any two questions. (Short questions) (2x16=32)</p>
                        </b>
                        <li>What is normalization? Why it is needed? Explain 1NF,2NF and 3NF with examples.(2+2+12)
                        </li>
                        <li>Define data integrity. List out its importance. Explain domain and referential integrity
                            constraints with examples.(1+3+9+3)</li>
                        <li>a. Explain generalization and specialization with examples.(4+4)<br>
                            b. Write SQL syntax and perform following tasks.(8)
                            <ol type="i">
                                <li>Create a table student(rollno,name,DOB,address)</li>
                                <li>Insert some data into table.</li>
                                <li>Add a new column say "marks" to table</li>
                                <li>Describe the structure of table.</li>
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-3 col-11 shadow mb-4 costume-shadow" id="paper-fourth-sem">
                <h4>Fourth Semester</h4>
                <ol>
                    <li><a href="../sad/2079.php">System Analysis and Design</a></li>
                    <li><a href="../nm/2079.php">Numerical Methods</a></li>
                    <li><a href="#">Database Management System</a></li>
                    <li><a href="../satII/2079.php">Applied Statistics</a></li>
                    <li><a href="../dcn/2079.php">Data Communication and Networks</a></li>
                    <li><a href="../toc/2079.php">Theory Of Computation</a></li>
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