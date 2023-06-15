<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Operating System (CSIT.215)</title>

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
                    <a href="#"><button type="button" class="btn paper-year-style">2078</button></a>
                </div>
            </div>

            <div class="col-lg-8 col-11 text-center border shadow mb-4" id="paper-model">
                <h5>FAR-WESTERN UNIVERSITY</h5>
                <p>End-Term Examination-2078</p>
                <p>Operating System (CSIT.215)</p>
                <div class="row justify-content-between">
                    <div class="col-md-5 text-start mb-4">
                        <b>Faculty:</b>Science and Technology (CSIT) <br>
                        <b>Level:</b> Undergraduate <br>
                        <b>Semester:</b> Third <br>
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
                        <li>Explain virtual memory.</li>
                        <li>Explain the terms 'pipes', 'FIFO' and 'message'.</li>
                        <li>Explain in short the command line interface (CLI) and graphical shells.</li>
                        <li>What are the difference between process and program?</li>
                        <li>What is two state process model?</li>
                        <li>Write short notes on symbolic address, relative address and physical address.</li>
                        <li>What is deadlock? Explain with example.</li>
                        <li>Find the internal fragmentation for given page size 3048 bytes and process address space of
                            144489 bytes.</li>
                        <!-- Group B -->
                        <h5 class="text-center">Group B</h5>
                        <b>
                            <p class="text-center">Attempt any five questions. (Short questions) (5x8=40)</p>
                        </b>
                        <li>Explain deadlock prevention process.</li>
                        <li>What are the difference between paging and segmentation?</li>
                        <li>What is thread? Explain different types of threads.</li>
                        <li>Explain different file access mechanisms.</li>
                        <li>What are the major features that differentiate Linux operating system from other operating
                            systems?</li>
                        <li>What is system call? Explain different types of system calls.</li>
                        <!-- Group C -->
                        <h5 class="text-center">Group C</h5>
                        <b>
                            <p class="text-center">Attempt any three questions. (Long questions) (3x12=36)</p>
                        </b>
                        <li>What are the two different views of operating system? Explain different architecture of
                            operating system.</li>
                        <li>Explain FCFS, shortest job next, shortest time remaining and round robins scheduling
                            algorithms.
                            Find the average wait time using FCFS, shortest job next and shortest time remaining
                            algorithm for given data <br>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Process</th>
                                    <th>Arrival time</th>
                                    <th>Execute time</th>
                                    <th>Service time</th>
                                </tr>
                                <tr>
                                    <td>P0</td>
                                    <td>0</td>
                                    <td>5</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>P1</td>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>P2</td>
                                    <td>2</td>
                                    <td>8</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>P3</td>
                                    <td>3</td>
                                    <td>6</td>
                                    <td>16</td>
                                </tr>
                            </table>
                        <li>What are different page replacement algorithms? For the given reference string
                            9,2,3,5,2,5,2,6,4,5,2,5,4,3,4 find non-programmed
                            fault rate using different algorithms.
                        </li>
                        <li>A 99 disk drive 100 cylinders, numbered 0 to 99. Disk requests come to the disk drives for
                            cylinders 12, 26,24,4,42,8 and 50
                            in that order. The driver is currently serving a request at cylinder 24. Find seek time for
                            FCFS,SSTF,SCAN.
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-3 col-11 shadow mb-4 costume-shadow" id="paper-fourth-sem">
                <h4>Third Semester</h4>
                <ol>
                    <li><a href="../coa/2078.php">Computer Architecture</a></li>
                    <li><a href="../ds/2078.php">Discrete Structure</a></li>
                    <li><a href="../management/2078.php">Introduction To Management</a></li>
                    <li><a href="../c++/2078.php">Object Oriented Programming with C++</a></li>
                    <li><a href="#">Operating System</a></li>
                    <li><a href="../statI/2078.php">Statistics and Probability</a></li>
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