<h4>Tambah Data</h4>
<hr>
<form action="index.php?mod=transaksi&page=save" method="POST">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">ID Transaksi</label>
            <input type="number" name="id_trans" required value="<?=(isset($_POST['id_trans']))?$_POST['id_trans']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['id_trans']))?$err['id_trans']:'';?></span>
        </div>
        <div class="form-group">
        <label for="">ID Nota</label>
            <input type="number" name="id_nota" value="<?=(isset($_POST['id_nota']))?$_POST['id_nota']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['id_nota']))?$err['id_nota']:'';?></span>
        </div>
        <div class="form-group">
        <label for="">Tanggal Transaksi</label>
            <input type="date" name="tgl_trans" value="<?=(isset($_POST['tgl_trans']))?$_POST['tgl_trans']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['tgl_trans']))?$err['tgl_trans']:'';?></span>
        </div>
        <div class="form-group">
    <label for="">Jumlah Transaksi</label>
            <input type="number" name="jml_trans" value="<?=(isset($_POST['jml_trans']))?$_POST['jml_trans']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['jml_trans']))?$err['jml_trans']:'';?></span>
    </div>
    </div>
    <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
    </div>
    </div>
</form>
