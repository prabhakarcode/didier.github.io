<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'head_links.php'; ?>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <?php include 'navigation.php'; ?>

    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/notify-bg.jpg')">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-7">
            <h2 class="mb-0">
              Swami Vivekananda Jnana Kendra
            </h2>
            <p>Sub Heading</p>
          </div>
        </div>
      </div>
    </div> 
    
           <section class="whysection">
             <div class="container">
               <div class="row">
                 <div class="col-md-12 whotitle"> <h3>Who we are</h3></div>
                 <div class="col-md-6">
                 <img src="images/why.png" alt="Image" class="whyimage">

                 </div>
                 <div class="col-md-6">
                 <p>
                ‘Swami Vivekananda Jnana Kendra’ brain child of an Engineer by qualification, but teacher by Passion. An Educational & Training Services organization catering to needs of youngsters in Hennur Cross and adjacent localities, with ‘Quality @ Affordable Price’— an idea that itself is Philanthropic, isn’t it?Though we are not NGO, The assurance of quality teaching with utmost care to supplement knowledge transformation in true form <span id="dots">...</span><span id="more">by catering to all sections of society ranging from school dropouts to professionals in various disciplines in it is a service.The only thing that interferes with my learning is my education. (Albert Einstein) “All who have meditated on the art of governing mankind have been convinced that the fate of empires depends on the education of youth.” (Aristotle)..</span></p>
<button onclick="myFunction()" id="myBtn">Read more</button>
              </p>

                 </div>

               </div>

             </div>
           </section>
    


        <section class="section misssectioN">
          <div class="conrtainer ">

        <div class="row">          
            <div class="col-md-12 ">
              <div class="text-center misstit">
                <h2 class="">
                  <span>Our Mission</span>
                </h2>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-5 misstext" >
                  
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  
                </div>
                <div class="col-md-6">
                  <div class="img-container">
                    <img src="images/miss.png" alt="Image" class="img-fluid">
                  </div>
                </div>
              </div></div>
            </div>
            <!--end mission col-md-12-->
            <div class="container">
            <div class="col-md-12">
              <div class="text-center misstit">
                <h2 class="">
                  <span>Our Vision</span>
                </h2>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="img-container">
                    <img src="images/mi.png" alt="Image" style="width:400px;">
                  </div>
                </div>
                <div class="col-md-6">
                  <div>
                    <p class="vistext">
                    conbine  the best of east and the best of west to fine tune the skill-sets and improve efficiency of students and overall quality education.
                    </p>
                  </div>
                </div>
              </div>
            </div> </div><!--end vision col-md-12-->

          </div>
        </section>

      </div><!--col-md-12-->
    </div><!--container-->

    <?php 
    include 'subscribe_form.php';
    include 'footer.php';
    ?>   
    

  </div>
  <!-- .site-wrap -->

  <?php include 'script_links.php'; ?>

<script>
  
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
</body>

</html>