<table border='1' class='table'>
<tr>
<th>Nim</th><th>Mahasiswa</th><th>Email</th><th>Aksi</th>
</tr>
<?php
foreach($data['mhs'] as $mhs): ?>
<tr>
<td><?=$mhs['nim']; ?></td><td><?=$mhs['nama']; ?>
<br/>
<?php 
$sMhs = $this -> state('homeSt') -> testState($mhs['nim']); 
?>
Alamat : <?=$sMhs['alamat']; ?><br/>
Hp : <?=$sMhs['hp']; ?><br/>
Kelas : <?=$sMhs['kelas']; ?>
</td>
<td><?=$mhs['email']; ?></td>
<td><a href="<?=HOMEBASE; ?>home/editData/<?=$mhs['nim']; ?>">Edit</a></td>
</tr>

<?php endforeach;?>
</table>
Contoh tampilan
