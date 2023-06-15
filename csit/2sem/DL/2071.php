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
        require '../../../header.php';
    ?>

    <!-- Paper Design Model -->

    <div class="container" id="paper-container">
        <div class="row justify-content-center">
            <!-- Paper years -->
            <div class="row text-center" id="paper-year">
                <div class="col-8">
                    <a href="#"><button type="button" class="btn  paper-year-style">2071</button></a>
                    <a href="2072.php"><button type="button" class="btn">2072</button></a>
                </div>
            </div>

            <div class="col-lg-8 col-11 text-center border shadow mb-4" id="paper-model">
                <h5>FAR-WESTERN UNIVERSITY</h5>
                <p>End-Term Examination-2071</p>
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
                         <li>What are the features of digital system? Subtract 1001110001 from 1000110010 by using 2's complement. (4+4)</li>
                         <li>State and prove DE Morgan's first and second law.</li>
                         <li>What is universal gate? Show NOR gate as universal gate. (2+6)</li>
                         <li>Explain NAND implementation of logic circuit.</li>
                         <li>What is counter? Explain ripple counter.</li>
                         <li>Differentiate between synchronous and asynchronous sequential circuit with example.</li>
                         <li>What is full address? Explain it.</li>
                         <li>Defie multiplexer. Draw circuit diagram of multiplexer.</li>
                        <h5 class="text-center">Group C</h5>
                        <b>
                            <p class="text-center">Attempt any two questions. (long questions) (2x16=32)</p>
                        </b>
                        <li>What is flip-flop? Explain SR, JK maser-slave flip-flop. (2+4+6)</li>
                        <li>What is decoder? Describe it with blick diagram. Construct a 5-line to 32-line decoder with 3-line to 8-line decoder and 2-line to 4-line decoder.</li>
                        <li>Define POS and SOP term. Simplify and draw the logic diagram for the following Boolean expression: F(A, B, C, D) = Σ(0,2,4,5,8,14,15) and d(A,B,C,D) = Σ(7,10,13). (3+13)</li>
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
        require '../../../footer.php';
    ?>
</div>
    <!-- BootStrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>