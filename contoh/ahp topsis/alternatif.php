
<div class="panel panel-default">
<div class="panel-heading">
    <div class="page-header">
    <h1>Alternatif</h1>
</div>
    <form class="form-inline">
        <input type="hidden" name="m" value="alternatif" />
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?=$_GET['q']?>" />
        </div>
        <div class="form-group">
            <button class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span> Refresh</a>
        </div>
        <div class="form-group">
            <a class="btn btn-primary" href="?m=alternatif_tambah"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
        </div>
        <div class="form-group">
            <a class="btn btn-default" target="_blank" href="cetak.php?m=alternatif"><span class="glyphicon glyphicon-print"></span> Cetak</a>
        </div>
    </form>
</div>

<table class="table table-bordered table-hover table-striped" style="border: 2px;">
<thead>
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama Alternatif</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>
</thead>
<?php
$q = esc_field($_GET['q']);
$rows = $db->get_results("SELECT * FROM tb_alternatif WHERE nama_alternatif LIKE '%$q%' ORDER BY kode_alternatif");
$no=0;

foreach($rows as $row):?>
<tr>
    <td><?=++$no ?></td>
    <td><?=$row->kode_alternatif?></td>
    <td><?=$row->nama_alternatif?></td>
    <td><?=$row->keterangan?></td>
    <td>
        <a class="btn btn-xs btn-warning" href="?m=alternatif_ubah&ID=<?=$row->kode_alternatif?>"><span class="glyphicon glyphicon-edit"></span></a>
        <a class="btn btn-xs btn-danger" href="aksi.php?act=alternatif_hapus&ID=<?=$row->kode_alternatif?>" onclick="return confirm('Hapus data?')"><span class="glyphicon glyphicon-trash"></span></a>
    </td>
</tr>
<?php endforeach;
?>
</table>
</div>