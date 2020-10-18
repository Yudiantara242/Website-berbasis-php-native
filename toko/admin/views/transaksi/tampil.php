<div class="row">
    <div class="pull-left">
        <h4>Data Transaksi</h4>
    </div>
    <div class="pull-right">
        <a href="index.php?mod=transaksi&page=add">
            <button class="btn btn-primary">Add</button>
        </a>
    </div>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <td>
                    #
                </td>
                <td>ID Transaksi</td><td>ID Nota</td><td>Tanggal</td><td>Jumlah</td><td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php if($transaksi != NULL){ 
                $no=1;
                foreach($transaksi as $row){?>
                    <tr>
                        <td><?=$no;?></td><td><?=$row['id_trans']?></td><td><?=$row['id_nota'];?></td><td><?=$row['tgl_trans']?></td><td><?=$row['jml_trans']?></td>                      
                        <td>
                            <a href="index.php?mod=transaksi&page=edit&id=<?=$row['id_trans']?>"><i class="fa fa-pencil"></i> </a>
                            <a href="index.php?mod=transaksi&page=delete&id=<?=$row['id_trans'])?>"><i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
               <?php $no++; }
            }
            ?>
        </tbody>
    </table>
</div>