<?php
    $row = $db->get_row("SELECT * FROM tb_kriteria WHERE kode_kriteria='$_GET[ID]'"); 
?>
<div class="panel" style="width: 50%;">
<div class="panel-heading">
<div class="row">
    <div class="col-sm-11">
<div class="page-header">
    <h1>Ubah kriteria</h1>
</div>

        <?php if($_POST) include'aksi.php'?>
        <form method="post" action="?m=kriteria_ubah&ID=<?=$row->kode_kriteria?>">
            <div class="form-group">
                <label>Kode <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="kode" readonly="readonly" value="<?=$row->kode_kriteria?>"/>
            </div>
            <div class="form-group">
                <label>Nama kriteria <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama" value="<?=$row->nama_kriteria?>"/>
            </div>
            <div class="form-group">
                <label>Atribut <span class="text-danger">*</span></label>
                <select class="form-control" name="atribut">
                    <option></option>
                    <?=get_atribut_option($row->atribut)?>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                <a class="btn btn-danger" href="?m=kriteria"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            </div>
        </form>
    </div>
</div>
</div>
</div>