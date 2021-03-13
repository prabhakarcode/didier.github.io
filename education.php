<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/cutom.css">
  
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css5/bootstrap.min.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">
   
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
  <title>Document</title>
</head>

  
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<?php include 'head_links.php'; ?>
<?php include 'navigation.php'; ?>

    
       <div class="container" >
           <div class="row">
               <div class="col-md-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-coaching-tab" data-toggle="pill" href="#pills-coaching" role="tab" aria-controls="pills-coaching" aria-selected="true">Coaching Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-graduation-tab" data-toggle="pill" href="#pills-graduation" role="tab" aria-controls="pills-graduation" aria-selected="true">Graduation</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-technical-tab" data-toggle="pill" href="#pills-technical" role="tab" aria-controls="pills-technical" aria-selected="true">Technical Courses</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-english-tab" data-toggle="pill" href="#pills-english" role="tab" aria-controls="pills-english" aria-selected="false">English Certification Courses</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-entrance-tab" data-toggle="pill" href="#pills-entrance" role="tab" aria-controls="pills-entrance" aria-selected="false">Entrance Exams</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-coaching" role="tabpanel" aria-labelledby="pills-coaching-tab">
                    <div class="panel-body">
					                1st to 12th Standards ICSE/CBSE/STATE/ISC/IGSE BOARDS: COMMERCE, SCIENCE and ARTS STREAMS
					            </div>
                    </div>
                    <div class="tab-pane fade" id="pills-graduation" role="tabpanel" aria-labelledby="pills-graduation-tab">
                    <div class="panel-body">
					                B.Sc, B.Com, BCA, BBA, MBA, B.E (All Branches & All subjects) M.Tech
					            </div>
                    </div>
                    <div class="tab-pane fade" id="pills-technical" role="tabpanel" aria-labelledby="pills-technical-tab">
                    <div class="panel-body">
					                	<ul>
					                    <li>Basic Computers & Internet Skills</li>
										<li>OPERATING SYSTEMS : LINUX, WINDOWS</li>
										<li>Languages: C, C++ , JAVA, C#, VB.NET</li>
										<li>WEB/MOBILE APPS: Web, Android/iOS Applications Development</li>
										<li>SCRIPTING: SHELL, PERL, POWER-SHELL, PYTHON, RUBY ON RAILS</li>
										<li>Accounting Software : Tally, Quick Books</li>
										<li>Advanced Technologies: Big Data, Hadoop, Cloud Computing</li>
										  <li>VERTICALS: .NET, JAVA</li>
										<li>EMBEDDED: MICROCONTROLLER ARM7, ARM9, 8051, POWER PC, DEVICE DRIVER ON LINUX</li>
										<li>LINUX COMMANDS, SHELL SCRIPTS, SYSTEMS PROGRAMMING, KERNEL PROGRAMMING, DEVICE DRIVERS</li>
									</ul>
					                </div>
                    </div>
                    <div class="tab-pane fade" id="pills-english" role="tabpanel" aria-labelledby="pills-english-tab">
                    <div class="panel-body">
					                	<ul>
					                    <li>TOEFL</li>
										 <li>IELTS</li>
										 <li>Foundation English Module</li>
										 <li>Intermediate Conversation Module</li>
										 <li>Advanced Or Business English Module</li>
									</ul>
					                </div>
                    </div>
                    <div class="tab-pane fade" id="pills-entrance" role="tabpanel" aria-labelledby="pills-entrance-tab">
                    <div class="panel-body">
					                	<p>We are the hub of state and national level Engineering and Medical Entrance education in HENNUR – BENGALURU. We provide the “Daily Practice Problem (DPP) Sheets” for ENTRANCE EXAMS is precise, apt and tuned to all the requirements of standard state level entrance exams and JEE Mains / Advanced aspirant as we believe that student should prepare for these entrance exams regularly day in and day out.</p>
					                	<ul>
					                    <li>CET</li>
										 <li>AIMS</li>
										 <li>NEET </li>
										 <li>AIEEE</li>
										 <li>IIT-JEE MAINS & ADVANCED</li>
									</ul>
					                </div>
                    </div>
                    
                  </div>

               </div>

           </div>

       </div>



    <?php 
    include 'subscribe_form.php';
    include 'footer.php';
    ?>   
  </div>
  <!-- .site-wrap -->
  <?php include 'script_links.php'; ?>
  <script src="js/jquery.animateNumber.min.js"></script>


<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBM_uULzojkkhIew706uqwf8KG75oEVuDQ  &callback=initMap">
</script><script>function initMap() {
  var bangalore = {lat: 12.9833, lng: 77.5833};
  var mark2 = {lat: 12.9933, lng: 77.6033};

  var map = new google.maps.Map(
    document.getElementById('map'), {zoom: 13, center: bangalore});

  var marker = new google.maps.Marker({position: bangalore, label: 'B', map: map});
  var marker2 = new google.maps.Marker({position: mark2, label: 'A',map: map});
}</script>
<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js5/bootstrap.min.js"></script>
            <script src="js/bootstrap.min.js"></script>	
      <script src="js5/bootstrap.bundle.min.js"></script>		
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>						
			<script src="js/jquery.nice-select.mi
</body>
</html>