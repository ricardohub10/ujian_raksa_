<div class="content-header">
<div class="header-section">
<h1>
<i class="fa fa-table"></i>Edit Soal Pilihan Ganda
</h1>
</div>
</div>
<?php 
include "koneksi.php";
$idgroup = $_GET['idgroup'];
$idsoal = $_GET['idsoal'];
?>
<div class="block full">
<form action="detailsoal/soalpilihanganda/prosesedit.php" method="post" >
<input type="hidden" name="idgroup" value="<?php echo $idgroup; ?>">
<input type="hidden" name="idsoal" value="<?php echo $idsoal; ?>">
<?php $hasil = mysqli_query($mysqli,"select * from soal where idsoal='$idsoal'");
while($tampil = mysqli_fetch_array($hasil)){
    ?>
    <div class="form-group">
    <label>Soal</label>
    <div>
    <textarea id="textarea-ckeditor" name="soal"  class="ckeditor"><?php echo $tampil['soal']; ?></textarea></div>
    </div>
    <div class="form-group">
    <label>Pilihan A</label>
    <div>
    <textarea id="textarea-ckeditor" rows="2" name="pilihana"  class="ckeditor"><?php echo $tampil['pilihana']; ?></textarea></div>
    </div>
    <div class="form-group">
    <label>Pilihan B</label>
    <div>
    <textarea id="textarea-ckeditor" rows="2" name="pilihanb"  class="ckeditor"><?php echo $tampil['pilihanb']; ?></textarea></div>
    </div>
    <div class="form-group">
    <label>Pilihan C</label>
    <div>
    <textarea id="textarea-ckeditor" rows="2" name="pilihanc"  class="ckeditor"><?php echo $tampil['pilihanc']; ?></textarea></div>
    </div>
    <div class="form-group">
    <label>Pilihan D</label>
    <div>
    <textarea id="textarea-ckeditor" rows="2" name="pilihand"  class="ckeditor"><?php echo $tampil['pilihand']; ?></textarea></div>
    </div>
    <div class="form-group">
    <label>Pilihan E</label>
    <div>
    <textarea id="textarea-ckeditor" rows="2" name="pilihane"  class="ckeditor"><?php echo $tampil['pilihane']; ?></textarea></div>
    </div>
    <div class="form-group">
    <label>Jawaban Benar</label>
    <div>
    <select name="pilihanbenar" class="form-control">
    <option <?php if($tampil['pilihanbenar']=='a'){echo "selected"; } ?> value="a">pilihan A</option>
    <option <?php if($tampil['pilihanbenar']=='b'){echo "selected"; } ?> value="b">Pilihan B</option>
    <option <?php if($tampil['pilihanbenar']=='c'){echo "selected"; } ?> value="c">Pilihan C</option>
    <option <?php if($tampil['pilihanbenar']=='d'){echo "selected"; } ?> value="d">Pilihan D</option>
    <option <?php if($tampil['pilihanbenar']=='e'){echo "selected"; } ?> value="e">Pilihan E</option>
    </select>
    </div>
    </div>
    <div class="form-group">
    <label>Pembahasan</label>
    <div>
    <textarea id="textarea-ckeditor" rows="2" name="pembahasan"  class="ckeditor"><?php echo $tampil['pembahasan']; ?></textarea></div>
    </div>
    <div class="form-group form-actions">
    <div >
    <button type="submit" name="submit" class="btn btn-sm btn-primary">Edit Soal</button>
    </div>
    </div>
    </form>
    <?php } ?>
    </div>
    <script src="js/helpers/ckeditor/ckeditor.js"></script>