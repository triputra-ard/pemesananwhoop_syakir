<div  id="askcancel-<?php echo $list['id_reservasi']; ?>" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-sm animated--grow-in" role="document">
        <div class="modal-content">
          <div class="modal-body bg-danger">
            <h4 class="text-lg text-white text-center">Apa anda akan membatalkan reservasi ini?</h4>
            <br>
            <center>
            <a href="control/script.reservation?cancel=<?php echo encrypt($list['id_reservasi']); ?>" class="btn btn-primary" >Ya</a>
            <button class="btn btn-dark btn-outline" type="button" data-dismiss="modal">Tutup </button>
          </center>
          </div>
        </div>
    </div>
</div>
