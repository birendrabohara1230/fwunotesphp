<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Applied Statistics(CSIT.221)</title>

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
                <p>Applied Statistics(CSIT.221)</p>
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
                        <li>What is rank correlation? Define kendall Tau correlation coefficient.</li>
                    <li>What are the steps used in testing of hypothesis?</li>
                    <li>The rank given by two judges to four individuals <br>
                        <table  class="table table-bordered">
                            <tr>
                                <td>individuals</td>
                                <td>P</td>
                                <td>Q</td>
                                <td>R</td>
                                <td>S</td>
                            </tr>
                            <tr>
                                <td>Judge A(R<sub>1</sub>)</td>
                                <td>3</td>
                                <td>4</td>
                                <td>2</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Judge B(R<sub>2</sub>)</td>
                                <td>3</td>
                                <td>1</td>
                                <td>4</td>
                                <td>2</td>
                            </tr>
                        </table>
                        Find Sprearmans rank correlation coefficient.
                    </li>
                    <li>What are the principles of design of experiment? Describe any one.</li>
                    <li>If R <sub>1.23</sub>=0.8 then find the coefficient of multiple determination and interpret if.
                    </li>
                    <li>Complete the following ANOVA table. <br>
                        <table  class="table table-bordered">
                            <tr>
                                <td>Source of Variation</td>
                                <td>Degree of Freedom</td>
                                <td>Sum of squares(SS)</td>
                                <td>Mean squares(MS)</td>
                                <td>F</td>
                            </tr>
                            <tr>
                                <td>Treatment</td>
                                <td>2</td>
                                <td> </td>
                                <td>7.75</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Error</td>
                                <td> </td>
                                <td> </td>
                                <td>3.95</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>11</td>
                                <td> </td>
                                <td> </td>
                                <td></td>
                            </tr>
                        </table>
                    </li>
                    <li>If &#8721;X=125, &#8721;X <sup>2</sup>= 650, &#8721;Y=100, &#8721;Y <sup>2</sup>=436,
                        &#8721;XY=520 and n = 30 then find
                        Karl Pearson correlation coefficient between X and Y.
                    </li>
                    <li>
                        Find the value of Chi square from following table. <br>
                            <table  class="table table-bordered">
                                <tr>
                                    <td></td>
                                    <td>Skilled</td>
                                    <td>Unskilled</td>
                                    <td>Total</td>
                                </tr>
                                <tr>
                                    <td>Male</td>
                                    <td>150</td>
                                    <td>20</td>
                                    <td>170</td>
                                </tr>
                                <tr>
                                    <td>Female</td>
                                    <td>105</td>
                                    <td>45</td>
                                    <td>150</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>255</td>
                                    <td>65</td>
                                    <td>320</td>
                                </tr>
                            </table>
                    </li>
                        <h5 class="text-center">Group B</h5>
                        <b>
                            <p class="text-center">Attempt any five questions. (Short questions) (5x8=40)</p>
                        </b>
                        <li>Following is a sequence of head (H) and tail (T) in tossing of a coin 14 times. <br>
                            H T T H H H T H T T H H T H <br>
                            Test whether the heads and tails occur in random order use Run test.
                        </li>
                        <li> Following are the ranks awarded to six dancers in dance competition by two judges X and Y. <br>
                            <table  class="table table-bordered">
                                <tr>
                                    <td>Dancers</td>
                                    <td>B</td>
                                    <TD>C</TD>
                                    <TD>D</TD>
                                    <TD>E</TD>
                                    <TD>F</TD>
                                    <TD>G</TD>
                                </tr>
                                <TR>
                                    <TD>Ranked by judge X</TD>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>1</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>2</td>
                                </TR>
                                <tr>
                                    <td>Ranked by judge Y</td>
                                    <td>4</td>
                                    <td>1</td>
                                    <td>6</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td>2</td>
                                </tr>
                            </table>
                            Calculate Kendall Tau Rank Correlation coefficient.
                        </li>
                        <li>Systolic blood pressure of sample of 400 males was taken. Sample mean of blood pressure was
                            found to 128mm and standard deviation 13.05nnn, find
                            95% and 98% confidence limits of blood pressure within which the population mean would lie?
                        </li>
                        <li>If 60 MA economics students are fond to have mean height of 63.60 inches and a 50 MBS students
                            have mean height of 69.51 inches. Would you conclude that management students are taller than
                            economics students? Assume that standard deviation of post graduate students to be 2.24 inches.
                        </li>
                        <li>
                            Two Independent random sample drawn from two populations are as follows. <br>
                            <table  class="table table-bordered">
                                <tr>
                                    <td>Sample 1</td>
                                    <td>4</td>
                                    <td>6</td>
                                    <td>8</td>
                                    <td>10</td>
                                    <td>12</td>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>19</td>
                                </tr>
                                <tr>
                                    <td>Sample 2</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td>7</td>
                                    <td>9</td>
                                    <td>11</td>
                                    <td>18</td>
                                    <td></td>
                                </tr>
                            </table>
                            Apply Mann-Whitney Untest with &#x0251;=0.05, Test whether the two samples have come from same
                            population or from populations with equal mean.
                        </li>
                        <li>Fit a gegression line of Y on X. The observed data values are given in the following table. <br>
                            <table  class="table table-bordered">
                                <tr>
                                    <td>X</td>
                                    <td>-1</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td>-2</td>
                                    <td>5</td>
                                    <td>8</td>
                                    <td>11</td>
                                    <td>12 </td>
                                    <td>-3</td>
                                </tr>
                                <tr>
                                    <td>Y</td>
                                    <td>-5</td>
                                    <td>-4</td>
                                    <td>2</td>
                                    <td>-7</td>
                                    <td>6</td>
                                    <td>13</td>
                                    <td>21</td>
                                    <td>20</td>
                                    <td>-9</td>
                                </tr>
                            </table>
                            <ol type="a">
                                <li>Estimate the value of Y when X = 10.</li>
                                <li>Calculate the sum squares of error(SSE)</li>
                            </ol>
                        </li>
                        <h5 class="text-center">Group C</h5>
                        <b>
                            <p class="text-center">Attempt any three questions. (Long questions)</p>
                        </b>
                        <li>Find the Maximum likelyhood estimator (MLE) of <br>
                            <ol type="a">
                                <li>Parameter &#x3BB; of a poisson distribution on the basis of a sample size n.</li>
                                <li>Parameter p of a binomial distribution on the basis of a sample size n.</li>
                            </ol>
                        </li>
                        <li>The layout and yield of four treatments in shown in the following table. Analyse the data. <br>
                            <table  class="table table-bordered">
                                <tr>
                                    <td>D 20</td>
                                    <td>B 17</td>
                                    <td>A 20</td>
                                    <td>C 19</td>
                                </tr>
                                <tr>
                                    <td>B 21</td>
                                    <td>A 18</td>
                                    <td>C 18</td>
                                    <td>D 17</td>
                                </tr>
                                <tr>
                                    <td>A 18</td>
                                    <td>C 21</td>
                                    <td>D 17</td>
                                    <td>B 17</td>
                                </tr>
                                <tr>
                                    <td>C 20</td>
                                    <td>D 19</td>
                                    <td>B 17</td>
                                    <td>A 18</td>
                                </tr>
                            </table>
                        </li>
                        <li>The distribution of 105 individuals by hair colour and eye colour is given below. Is there any
                            association between
                            these two attribute? <br>
                            <table  class="table table-bordered">
                                <tr>
                                    <td rowspan="2"> <b>Eye colour</b> </td>
                                    <td colspan="4"> <b>Hair colour</b></td>
                                </tr>
                                <tr>
                                    <td>Black</td>
                                    <td>Fair</td>
                                    <td>Brown</td>
                                    <td>Total</td>
                                </tr>
                                <tr>
                                    <td>Blue</td>
                                    <td>25</td>
                                    <td>12</td>
                                    <td>9</td>
                                    <td>46</td>
                                </tr>
                                <tr>
                                    <td>Grey</td>
                                    <td>20</td>
                                    <td>5</td>
                                    <td>7</td>
                                    <td>32</td>
                                </tr>
                                <tr>
                                    <td>Brown</td>
                                    <td>15</td>
                                    <td>5</td>
                                    <td>7</td>
                                    <td>27</td>
                                </tr>
                            </table>
                        </li>
                        <li>A sample 10 values of three variables X <sub>1</sub>,X <sub>2</sub> and X <sub>3</sub> were
                            obtained as
                            &#8721;X<sub>1</sub> = 10, &#8721; X <sub>2</sub> = 20, &#8721; X<sub>3</sub>= 30, &#8721;
                            X<sub>1</sub> <sup>2</sup> = 20,
                            &#8721; X<sub>2</sub> <sup>2</sup> = 68, &#8721; X<sub>3</sub> <sup>2</sup> = 170, &#8721;
                            X<sub>1</sub>X<sub>2</sub> = 10,
                            &#8721; X<sub>1</sub>X<sub>3</sub> = 15, &#8721; X<sub>2</sub>X<sub>3</sub> = 64 <br>
                            Find (a) Multiple correlation between X <sub>1</sub>, X <sub>2</sub> and X <sub>3</sub> assuming
                            X <sub>1</sub> as
                            dependent variable. <br>
                            (b)Partial correlation between X <sub>1</sub> and X <sub>3</sub> taking X <sub>2</sub> as
                            constant.
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-3 col-11 shadow mb-4 costume-shadow" id="paper-fourth-sem">
                <h4>Fourth Semester</h4>
                <ol>
                    <li><a href="../sad/2079.php">System Analysis and Design</a></li>
                    <li><a href="">Numerical Methods</a></li>
                    <li><a href="../database/2073.php">Database Management System</a></li>
                    <li><a href="#">Applied Statistics</a></li>
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