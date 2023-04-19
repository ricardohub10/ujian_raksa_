<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Edit Soal Benar salah
        </h1>
    </div>
</div>
<?php
include "koneksi.php";
$idgroup = $_GET['idgroup'];
$idsoal = $_GET['idsoal'];
?>
<div class="block full">
<form action="detailsoal/soalbenarsalah/prosesedit.php" method="post" >
    <input type="hidden" name="idgroup" value="<?php echo $idgroup; ?>">
    <input type="hidden" name="idsoal" value="<?php echo $idsoal; ?>">
    <?php $hasil = mysqli_query($mysqli,"select * from soal where idsoal='$idsoal'");
    $tampil = mysqli_fetch_array($hasil);
?>
        <div class="form-group">
            <label>Soal</label>
            <div>
            <textarea id="textarea-ckeditor" name="soal"  class="ckeditor"><?php echo $tampil['soal']; ?></textarea></div>
        </div>                 
        <div class="form-group">
            <label>Jawaban Benar</label>
            <div>
                <select name="jawabanbenar" class="form-control">
                    <option <?php if($tampil['pilihanbenar']=='true'){echo "selected"; } ?> value="true">TRUE</option>
                    <option <?php if($tampil['pilihanbenar']=='false'){echo "selected"; } ?> value="false">FALSE</option>
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
</div>
<script src="js/helpers/ckeditor/ckeditor.js"></script>