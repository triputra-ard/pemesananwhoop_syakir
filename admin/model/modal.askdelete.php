<div  id="askdelete<?php echo $view['id_user']; ?>" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg animated--grow-in" role="document">
        <div class="modal-content">
          <div class="modal-body bg-warning">
            <h4 class="text-lg text-white text-center">Anda yakin ingin menghapus <b><?php echo $view['nama_pengguna']; ?></b> ?</h4>
            <br>
            <center>
            <a href="control/script.user?delete&id=<?php echo encrypt($view['id_user']); ?>" class="btn btn-success" >Ya</a>
            <button class="btn btn-dark btn-outline" type="button" data-dismiss="modal">Tidak </button>
          </center>
          </div>
        </div>
    </div>
</div>
