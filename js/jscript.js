// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()



  function myFunction(g) {
    document.getElementById("r").value = "green";
}
function myFunction(r) {
    document.getElementById("g").value = "red";
}
function myFunction(o) {
    document.getElementById("myText").value = "orange";
}
function myFunction(b) {
    document.getElementById("myText").value = "black";
}

$(document).ready(function(){
  $('#category').change(function(){
    var gategory_id = $(this).val();
    $.ajax({
      url:"fetch_subject.php",
      method: "POST",
      data:{categoryid:category_id},
      dataType:"text",
      success:function(data)
      {
        $('#subject').html(data);
      }
    })
  })
})