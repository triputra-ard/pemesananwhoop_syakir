</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src="<?php echo $framework; ?>jquery/jquery-3.3.1.min.js"></script>
<script src="<?php echo $framework; ?>bootstrap/js/bootstrap.bundle.js"></script>
<script src="<?php echo $framework; ?>slimscroll/jquery.slimscroll.js"></script>
<script src="<?php echo $framework; ?>libs/js/main-js.js"></script>
<script src="<?php echo $framework; ?>summernote/js/summernote-bs4.js"></script>
<!-- Optional Plugin -->
<script src="<?php echo $framework; ?>parsley/parsley.js"></script>
<script src="<?php echo $framework; ?>function-tri.js"></script>
<!--Data table section -->
<script src="<?php echo $framework; ?>datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $framework; ?>datatables/datatables.bootstrap.min.js"></script>

<script>
$('#form').parsley();
$(document).ready(function() {
  $('#Admin_table').DataTable();
});
$(document).ready(function(){
  $('#summernote').summernote({
    height:200,
    placeholder:"Tambahkan deskripsi dari paket",
    toolbar: [
    ['fontsize', ['bold','italic','underline','clear','fontname','fontsize']],
    ['para',['ul','ol','paragraph']],
    ['misc',['undo','redo','help']]
  ]
  });
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
<script>
function previewImg1(event){
  var reader1 = new FileReader();
  reader1.onload = function(){
    var output1 = document.getElementById('preview1');
    output1.src = reader1.result;
  }
  reader1.readAsDataURL(event.target.files[0]);
}
function previewImg2(event){
  var reader2 = new FileReader();
  reader2.onload = function(){
    var output2 = document.getElementById('preview2');
    output2.src = reader2.result;
  }
  reader2.readAsDataURL(event.target.files[0]);
}
function previewImg3(event){
  var reader3 = new FileReader();
  reader3.onload = function(){
    var output3 = document.getElementById('preview3');
    output3.src = reader3.result;
  }
  reader3.readAsDataURL(event.target.files[0]);
}
</script>
</body>
</html>
