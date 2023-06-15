<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compiler Design (CSIT.313)</title>

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
                    <a href="2073.php"><button type="button" class="btn">2073</button></a>
                    <a href="2074.php"><button type="button" class="btn">2074</button></a>
                    <a href="2075.php"><button type="button" class="btn">2075</button></a>
                    <a href="2076.php"><button type="button" class="btn">2076</button></a>
                    <a href="#"><button type="button" class="btn  paper-year-style">2078</button></a>
                    <a href="2079.php"><button type="button" class="btn ">2079</button></a>
                </div>
            </div>

            <div class="col-lg-8 col-11 text-center border shadow mb-4" id="paper-model">
                <h5>FAR-WESTERN UNIVERSITY</h5>
                <p>End-Term Examination-2078</p>
                <p>Compiler Design (CSIT.313)</p>
                <div class="row justify-content-between">
                    <div class="col-md-5 text-start mb-4">
                        <b>Faculty:</b>Science and Technology (CSIT) <br>
                        <b>Level:</b> Undergraduate <br>
                        <b>Semester:</b> Fifth <br>
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
                       <li>Define the terms Language Translator and Compiler.</li>
                       <li>What is DAG? Mention its application in compiler design.</li>
                       <li>What is difference between Parse Tree and Annotated Parse Tree?</li>
                       <li>What is code optimization? Give name of any two optimization techniques.</li>
                       <li>What is do you mean by left factoring in the grammars? Explain.</li>
                       <li>What is handle in bottom up parsing? Explain.</li>
                       <li>What does a semantica analysis do?</li>
                        <h5 class="text-center">Group B</h5>
                        <b>
                            <p class="text-center">Attempt any five questions. (Short questions) (5x8=40)</p>
                        </b>
                        <li>Discuss the issues in design of simple code generator.</li>
                        <li>Define syntax directed definition. Construct annotated parse tree for the input expression (5*3+2)*5 according to the following syntax directed definition. <br>
                        <table class="table table-bordered">
                            <tr>
                                <td><b>Production</b></td>
                                <td><b>Semantic Rule</b></td>
                            </tr>
                            <tr>
                                <td>L->En</td>
                                <td>Print E.val</td>
                            </tr>
                            <tr>
                                <td>E->E + T</td>
                                <td>E.val -> E.val + T.val</td>
                            </tr>
                            <tr>
                                <td>E -> T</td>
                                <td>E.val -> T.val</td>
                            </tr>
                            <tr>
                                <td>T -> T * F</td>
                                <td>T.val -> T.val * F.val</td>
                            </tr>
                            <tr>
                                <td>T -> F</td>
                                <td>T.val -> F.val</td>
                            </tr>
                            <tr>
                                <td>F -> (E)</td>
                                <td>F.val -> (E.val)</td>
                            </tr>
                            <tr>
                                <td>F -> digit</td>
                                <td>F.val -> digit.lexval</td>
                            </tr>
                        </table>
                        </li>
                        <li>Why are regular expressio used in token specification? Write the regular expression to specify the identifier like in C.</li>
                        <li>Describe an Algorithm used for eliminating the left recursion. Eliminate letf recursion from the grammar: S -> Aa|b, A -> Ac|Sd|a.</li>
                        <li>Explain with a neat diagram, the model of a table drive predictive parser.</li>
                        <li>Translate the arithmetic expression: a+ -(b+c) into quadruples, triples and indirect triples.</li>
                        <h5 class="text-center">Group C</h5>
                        <b>
                            <p class="text-center">Attempt any three questions. (Long questions)</p>
                        </b>
                        <li>Discuss the phases of a compiler indicating the inputs and outputs of each phase in translating the statement "amount=principle + rate * 36.0".</li>
                        <li>Given the grammar: <br>
                            S -> aABb <br>
                            A -> c|ε <br>
                            B -> d|ε <br>
                            i) Compute FIRST and FOLLOW sets <br>
                            ii) Construct the predictive parsing table <br>
                            iii) Show the move made by predictive parser on the input: acdb
                        </li>
                        <li>Construct the CLR parsing table for the given Grammar <br>
                            E -> BB <br>
                            B -> cB/d <br>
                        </li>
                        <li>Explain the following code optimization techniques with examples. <br>
                            a) Constant propagation <br>
                            b) Strength reduction <br>
                            c) Code Motion
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-3 col-11 shadow mb-4 costume-shadow" id="paper-fourth-sem">
                <h4>Fifth Semester</h4>
                <ol>
                    <li><a href="../cg/2079.php">Computer Graphics</a></li>
                    <li><a href="../daa/2075.php">Data Analysis and Algorithms</a></li>
                    <li><a href="#">Compiler Design</a></li>
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