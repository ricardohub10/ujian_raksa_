<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Edit Soal Multiple Answer
        </h1>
    </div>
</div>
<?php
include "koneksi.php";
$idgroup = $_GET['idgroup'];
$idsoal = $_GET['idsoal'];
?>
<div class="block full">
<form action="detailsoal/soalmultipleanswer/prosesedit.php" method="post" >
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
            <label>pilihan a</label>
            <div>
            <textarea id="textarea-ckeditor" name="pilihana"  class="ckeditor"><?php echo $tampil['pilihana']; ?></textarea></div>
        </div>
        <div class="form-group">
            <label>pilihan b</label>
            <div>
            <textarea id="textarea-ckeditor" name="pilihanb"  class="ckeditor"><?php echo $tampil['pilihanb']; ?></textarea></div>
        </div>
        <div class="form-group">
            <label>pilihan c</label>
            <div>
            <textarea id="textarea-ckeditor" name="pilihanc"  class="ckeditor"><?php echo $tampil['pilihanc']; ?></textarea></div>
        </div>
        <div class="form-group">
            <label>pilihan d</label>
            <div>
            <textarea id="textarea-ckeditor" name="pilihand"  class="ckeditor"><?php echo $tampil['pilihand'];?></textarea></div>
        </div>
        <div class="form-group">
            <label>pilihan e</label>
            <div>
            <textarea id="textarea-ckeditor" name="pilihane"  class="ckeditor"><?php echo $tampil['pilihane']; ?></textarea></div>
        </div>
        <div class="form-group">
            <label>Jawaban Benar</label>
            <?php $checked = explode(', ', $tampil['pilihanbenar']); ?>
            <div>
                <label class="checkbox-inline" for="example-inline-checkbox1">
                    <input type="checkbox" <?php in_array ('a', $checked) ? print "checked" : ""; ?> name="jawabanbenar[]" value="a"> Pilihan A
                </label>
                <label class="checkbox-inline" for="example-inline-checkbox2">
                    <input type="checkbox" <?php in_array ('b', $checked) ? print "checked" : ""; ?> name="jawabanbenar[]" value="b"> Pilihan B
                </label>
                <label class="checkbox-inline" for="example-inline-checkbox3">
                    <input type="checkbox" <?php in_array ('c', $checked) ? print "checked" : ""; ?> name="jawabanbenar[]" value="c"> Pilihan C
                </label>
                <label class="checkbox-inline" for="example-inline-checkbox3">
                    <input type="checkbox" <?php in_array ('d', $checked) ? print "checked" : ""; ?> name="jawabanbenar[]" value="d"> Pilihan D
                </label>
                <label class="checkbox-inline" for="example-inline-checkbox3">
                    <input type="checkbox" <?php in_array ('e', $checked) ? print "checked" : ""; ?> name="jawabanbenar[]" value="e"> Pilihan E
                </label>
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