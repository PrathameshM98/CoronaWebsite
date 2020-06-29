<!DOCTYPE html>
<html>

<head>
    <title></title>
    <?php include 'links/links.php';
	require_once("dbbb.php");
	?>
    <?php include 'css/style.php'; ?>
</head>


<body>
    <?php
	if (isset($_GET['msg']) && ($_GET['msg'] == 1)) {
		echo "We will Contact You soon !! Thank You ";
	}
	?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 nav_style">
        <a class="navbar-brand pl-5 " href="#">COVID-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutid">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Symid">Symptoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#preventionid">Prevention</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactid">Contact Us</a>
                </li>



            </ul>

        </div>
    </nav>


    <!-- ***********Grid************* -->
    <div class=" container-fluid ">
        <div class="row ">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="left_side w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="images/unity.jpeg" width="300" height="300">
                </div>

            </div>

            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                <div class="right_side w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1>Let's Stay Safe & Fight Together Against Cor<span class="img_rotate">
                            <img src="images/corosym.png" width="80" height="80"></span>na Virus</h1>

                </div>

            </div>
        </div>
    </div>

    <!-- *********** Corona Updates ******** -->

    <section class=" container-fluid corona_updates ">
        <div class="my-5">
            <h3 class="text-uppercase text-center"> covid-19 live updates in India</h3>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center " id="tval">
                <tr>
                    <th class="text-capitalize">Last Updated Time</th>
                    <th class="text-capitalize">State</th>
                    <th class="text-capitalize">Confirmed</th>
                    <th class="text-capitalize">Active</th>
                    <th class="text-capitalize">Recovered</th>
                    <th class="text-capitalize">Deaths</th>
                </tr>



                <?php

				$data = file_get_contents('https://api.covid19india.org/data.json');
				$coronadata = json_decode($data, true);


				$statescount = count($coronadata['statewise']);

				$i = 1;
				while ($i < $statescount) {

				?>

                <tr>
                    <td><?php echo $coronadata['statewise'][$i]['lastupdatedtime'] ?></td>
                    <td><?php echo $coronadata['statewise'][$i]['state'] ?></td>
                    <td><?php echo $coronadata['statewise'][$i]['confirmed'] ?></td>
                    <td><?php echo $coronadata['statewise'][$i]['active'] ?></td>
                    <td><?php echo $coronadata['statewise'][$i]['recovered'] ?></td>
                    <td><?php echo $coronadata['statewise'][$i]['deaths'] ?></td>

                </tr>


                <!--


	echo $coronadata['statewise'][$i]['lastupdatedtime'] . "<br>";
	echo $coronadata['statewise'][$i]['state'] . "<br>";
	echo $coronadata['statewise'][$i]['confirmed'] . "<br>";
	echo $coronadata['statewise'][$i]['active'] . "<br>";
	echo $coronadata['statewise'][$i]['recovered'] . "<br>";
	echo $coronadata['statewise'][$i]['deaths'] . "<br>"; -->


                <?php
					$i++;
				}
				?>










            </table>

        </div>
        </div>
    </section>


    <!-- **************** About section ********-->

    <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>About COVID-19</h1>
        </div>

        <div class="row mt-5">
            <div class="col-lg-5 col-md-6 col-12 ml-5">
                <img src="images/coronadesc.jpg" class="img-fluid">

            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <h3>What is COVID-19 (Corona Virus)</h3>
                <p>Coronavirus disease 2019 (COVID-19) is an infectious disease caused by severe acute respiratory
                    syndrome coronavirus 2 (SARS-CoV-2). It was first identified in December 2019 in Wuhan, China, and
                    since spread globally, resulting in an ongoing pandemic. The first case may be traced back to 17
                    November 2019</p>
                <p>Corona Virus are a large family of viruses which may cause illness in animals or humans. In humans,
                    several coronaviruses are known to cause respiratory infections ranging from the common cold to more
                    severe diseases such as Middle East Respiratory Syndrome(MERS) and Severe Acute Respiratory
                    Syndrome(SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19.</p>



            </div>


        </div>



    </div>

    <!--  ***********Corona Symptoms************-->

    <div class="container-fluid pt-5 pb-5" id="Symid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>Corona Virus Symptoms</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/coughing.jpeg" height="150">
                        <br>
                        <figcaption>Cough</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/RunningNose.jpg" height="150">
                        <br>
                        <figcaption>Runny Nose</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/fever.jpg" height="150">
                        <br>
                        <figcaption>Fever</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/cold.png" height="150">
                        <br>
                        <figcaption>Cold</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/tired.jpeg" height="150">
                        <br>
                        <figcaption>Tiredness</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/Breathing.jpg" height="150">
                        <br>
                        <figcaption>Difficulty Breathing</figcaption>
                    </figure>
                </div>


            </div>
        </div>

    </div>
    <!--  ***********Corona Prevention************-->

    <div class="container-fluid sub_section pt-5 pb-5" id="preventionid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>6 Step Prevention Against Coronavirus </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <figure>
                                <img src="images/washhand.png" height="100" width="100">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Wash your hand regularly for 20 seconds with soup and water or alcohol based hand rub.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <figure>
                                <img src="images/wearmask.jpg" height="100" width="100">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Cover your mouth eith a disposable tissue or flexed elbow when you cough or sneeze</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <figure>
                                <img src="images/cc2.jpg" height="100" width="100">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Avoid close contact (1 meter or 3 feet) with people who are unwell.</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <figure>
                                <img src="images/quarantine2.jpg" height="100" width="100">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay home and self isolate from others if you feel unwell.</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <figure>
                                <img src="images/news.jpg" height="100" width="100">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay informed by watching news & follow the recommended practices.</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <figure>
                                <img src="images/pain.jpg" height="100" width="100">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>If you have fever, cough and difficulty breathing seek medical care early.</p>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>






    </div>

    <!-- ****************Contact Us************************* -->

    <div class="container-fluid pt-5 pb-5" id="contactid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>Contact Us ASAP </h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">


                    <form action="insert.php" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="Username" autocomplete="off"
                                placeholder="name" required="">
                        </div>


                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="name@example.com"
                                autocomplete="off" required="">
                        </div>


                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="number" class="form-control" name="mobile" autocomplete="off"
                                placeholder="Mobile Number" required="">
                        </div>


                        <div class="form-group">
                            <label>Select Symptoms</label><br>

                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox1"
                                    name="coronasym[]" value="cold">
                                <label class="custom-control-label" for="customcheckbox1">Cold</label>
                            </div>

                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox2"
                                    name="coronasym[]" value="fever">
                                <label class="custom-control-label" for="customcheckbox2">Fever</label>
                            </div>

                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox3"
                                    name="coronasym[]" value="difficulty_breathing">
                                <label class="custom-control-label" for="customcheckbox3">Difficulty in
                                    Breathing</label>
                            </div>

                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox4"
                                    name="coronasym[]" value="Weakness">
                                <label class="custom-control-label" for="customcheckbox4">Feeling Weak</label>
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"><br>Any other details</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    name="msg"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>



    <!-- ****************Scroll Top****************-->


    <div class="container scrolltop float-right pr-5">
        <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"> </i>
    </div>










    <!-- *************************Footer************************ -->


    <footer class="mt-5">
        <div class="footer_style text-white text-center container-fluid">
            <p>Copyright by Prathamesh Matte</p>

        </div>
    </footer>


    </form>
    </div>
    </div>
    </div>
    </div>


    <script type="text/javascript">
    mybutton = document.getElementById("myBtn");

    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            mybutton.style.display = "block";

        } else {
            mybutton.style.display = "none";
        }
    }



    function topFunction() {
        document.body.scrolltop = 0;
        document.documentElement.scrolltop = 0;

    }
    </script>


</body>

</html>






<?php

// include 'dbbcon.php';

// if (isset($_POST['submit'])) {

// 	$username = $_POST['Username'];
// 	$email = $_POST['email'];
// 	$mobile = $_POST['mobile'];
// 	$symp = $_POST['coronasym'];
// 	$msg = $_POST['msg'];




// $chk = "";
// foreach ($symp as $chk1) {
// 	$chk .= $chk1 . ",";
// }

// 	$insertquery = " insert into coronacase( username,email,mobile,symp,message) values('$username','$email','$mobile','$chk','$msg') ";

// 	$query = mysqli_query($con, $insertquery);



// 	if ($query) {
// 
?>
// <script>
// console.log("Insterted successful");
// 
</script>
// <?php

	// 	} else {
	// 	
	?>
// <script>
// console.log("Not inserted");
// 
</script>
// <?php

	// 	}
	// }







	?>