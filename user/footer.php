<!-- Optional JavaScript -->
<script src="<?php echo $framework; ?>jquery/jquery-3.3.1.min.js"></script>
<script src="<?php echo $framework; ?>bootstrap/js/bootstrap.bundle.js"></script>
<script src="<?php echo $framework; ?>slimscroll/jquery.slimscroll.js"></script>
<script src="<?php echo $framework; ?>libs/js/main-js.js"></script>
<!-- Optional Plugin -->
<script src="<?php echo $framework; ?>parsley/parsley.js"></script>
<script src="<?php echo $framework; ?>function-tri.js"></script>
<script src="<?php echo $framework; ?>datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $framework; ?>datatables/datatables.bootstrap.min.js"></script>


<script>
$('#form').parsley();
$(document).ready(function() {
  $('#whoop').DataTable();
});
function OnlyNumber(evt){
  var codeChar = (evt.which) ? evt.which : event.keyCode
  if (codeChar > 31 && (codeChar < 48 || codeChar > 57))
  return false;
  return true;
}
function OnlyAlphabetic (alp){
  var AlphaChar = (alp.which) ? alp.which : event.keyCode
  if (AlphaChar > 31 && (AlphaChar < 65 || AlphaChar > 90) && (AlphaChar < 97 || AlphaChar > 122) && AlphaChar > 32)
  return false;
  return true;
}
</script>
<script>

$(document).ready(function() {
  $('#whoop').DataTable();
});
function previewImg(event){
  var reader1 = new FileReader();
  reader1.onload = function(){
    var output1 = document.getElementById('preview1');
    output1.src = reader1.result;
  }
  reader1.readAsDataURL(event.target.files[0]);
}

</script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
</script>
<script type="text/javascript">
  function checkAddress(){

    alamat1 = document.getElementById('alamat1');
    alamat2 = document.getElementById('alamat2');
    value1 = document.getElementById('value1');
    value2 = document.getElementById('value2');

    if (alamat1.checked == true) {
      alamat1.value = value1.value;
    }else if (alamat2.checked == true) {
      alamat2.value = value2.value;
    }
  }
</script>
</body>
</html>
