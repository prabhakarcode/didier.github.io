<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'head_links.php'; ?>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<?php include 'navigation.php'; ?>
  <div class="site-wrap">
    
    
    
<div class="container-fluid"> 
    <div class="row firstsec" style="background-image: url(images/notify-bg.jpg); ">
        <div class="col-md-12" style="background: rgba(0, 0, 0, 0.6);">
            <h4>Swami Vivekananda Jnana Kendra</h4>

        </div>

    </div>

</div>
       <div class="container">
           <div class="row">
               <div class="col-md-6 mapcontact" style="background: url(images/course-1.jpg); " >
                   <div class="col-md-12 contatdet">
                       <div ><a href="tel://+91 9731263208"><span class="icon-phone2 mr-2"></span> <span class="onsmall">+91 9731263208</span></a></div>
                       <div ><span class="icon-envelope-o mr-2"></span> <span class="onsmall">svj.kendra@gmail.com</span></div>
                       <div>
                           <span class="fa fa-map-marker"></span>
              184, Hennuru Village Rd, HBR Layout 4th Block, Hennur Gardens, Bengaluru, Karnataka 560043
                     </div>

                   </div>

               </div>
               <div class="col-md-6 " style="background-color:rgb(255, 110, 27);">
                <form class="formainstyle">
                    <div class="form-row formstyle">
                        <div class="form-group col-md-6">
                            
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                          </div>
                        <div class="form-group col-md-6">
                            
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Second Name">
                          </div>
                      <div class="form-group col-md-6">
                        
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                      </div>
                      <div class="form-group col-md-6">
                        
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Mobile Number">
                      </div>
                          
                      <div class="form-group col-md-6">
                        <label for="inputState">Profil</label>
                        <select id="inputState" class="form-control">
                          <option selected>Choose...</option>
                          <option>Parent</option>
                          <option>student</option>
                          <option>teacher</option>
                        </select>
                      </div>
                      
                      <div class="form-group col-md-6">
                        <label for="inputState">gender</label>
                        <select id="inputState" class="form-control">
                          <option selected>Choose...</option>
                          <option>male</option>
                          <option>female</option>
                          <option>other</option>
                        </select>
                      </div>
                    
                    <div class="form-group col-md-12">
                      <label for="inputAddress">Address</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                          <option selected>Choose...</option>
                          <option>...</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputZip">Pin Code</label>
                        <input type="text" class="form-control" id="inputZip">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          i agree to terms and condions
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="subbtn">Sign in</button>
                  </form>

               </div>

           </div>
           <div class="row">
               <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.057805314907!2d77.63338661430491!3d13.031990917077492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae173eaf359285%3A0x140885b5b85ee969!2sSwami%20Vivekananda%20Jnana%20Kendra!5e0!3m2!1sen!2sin!4v1578248375212!5m2!1sen!2sin" width="100%" height="100" frameborder="0" style="border:0;border-radius: 15px;" allowfullscreen=""></iframe>

               </div>

           </div></div>
           

       </div> 
    

    <?php 
    include 'subscribe_form.php';
    include 'footer.php';
    ?>   
    

  </div>
  <!-- .site-wrap -->
  <?php include 'script_links.php'; ?>
  <script src="js/jquery.animateNumber.min.js"></script>
</body>

</html>

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