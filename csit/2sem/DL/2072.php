<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Logic Design (Com.Sc.DLG.121)</title>

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
    <?php
        include '../../../header.php';
    ?>

    <!-- Paper Design Model -->

    <div class="container" id="paper-container">
        <div class="row justify-content-center">
            <!-- Paper years -->
            <div class="row text-center" id="paper-year">
                <div class="col-8">
                    <a href="2071.php"><button type="button" class="btn">2071</button></a>
                    <a href="#"><button type="button" class="btn  paper-year-style">2072</button></a>
                </div>
            </div>

            <div class="col-lg-8 col-11 text-center border shadow mb-4" id="paper-model">
                <h5>FAR-WESTERN UNIVERSITY</h5>
                <p>End-Term Examination-2072</p>
                <p>Digital Logic Design (Com.Sc.DLG.121)</p>
                <div class="row justify-content-between">
                    <div class="col-md-5 text-start mb-4">
                        <b>Faculty:</b>Science and Technology (CSIT) <br>
                        <b>Level:</b> Undergraduate <br>
                        <b>Semester:</b> Second <br>
                    </div>
                    <div class="col-md-3 text-end">
                        <b>Full Marks:</b> 80 <br>
                        <b>Time:</b> 2.40hrs
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
                        <li>Explain error detecting and error correcting codes.</li>
                        <li>Simplify the following:-<br>
                            a. (462.123)<sub>2</sub>=(?)<sub>2</sub><br>
                            b. (1272)<sub>10</sub>=(?)<sub>16</sub><br>
                            c. Subtract 10011001 from 10110010 by using 1's complement.<br>
                            d. Subtract 1100110010 from 1000111011 by using 2's complement.</li>
                        <li>Define universal gate. Show NOR gate as universal gate.</li>
                        <li>State and prove de-Morgan's laws.</li>
                        <li>Reduce Y=(A+B) (A+B') (A'+B) by using the laws and theorems of Boolean algebra and draw
                            circuits of simplified expression.</li>
                        <li>What is full subtractor?Explain full subtractor with logic circuits & truth table.</li>
                        <li>Differentiate between combinational and sequential circuits. Explain multiplexer.</li>
                        <li>Explain RAM with block diagram and logic circuits.</li>
                        <h5 class="text-center">Group C</h5>
                        <b>
                            <p class="text-center">Attempt any two questions. (long questions) (2x16=32)</p>
                        </b>
                        <li>What is flip-flop? Explain different types of flip-flops with circuit diagrams.</li>
                        <li>Define K-map for four variables. Simplify the following expression by using K-map and draw
                            logic circuit for simplified expression. F(w,x,y,z)=Σ(0,1,2,3,7,8,10) and
                            d(w,x,y,z)=Σ(5,6,11,15)</li>
                        <li>Define encoder and decoder. Explain BCD to decimal decoder with logic circuit and truth
                            table.</li><br>
                    </ol>
                </div>
            </div>
            <div class="col-lg-3 col-11 shadow mb-4 costume-shadow" id="paper-fourth-sem">
                <h4>Second Semester</h4>
                <ol>
                    <li><a href="../la/2071.php">Linear Algebra</a></li>
                    <li><a href="../mc/2071.php">Mechanics And Electrodynamics</a></li>
                    <li><a href="#">Digital Logic Design</a></li>
                    <li><a href="../mp/2072.php">Microprocessor System</a></li>
                    <li><a href="../DSA/2072.php">Data Structure And Algorithms</a></li>
                </ol>
            </div>
        </div>
    </div>



 <!-- Footer Section -->
    <?php
        include '../../../footer.php';
    ?>

    <!-- BootStrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>