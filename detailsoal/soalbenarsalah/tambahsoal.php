<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Tambah Soal Benar salah
        </h1>
    </div>
</div>
<div class="block full">
<form action="detailsoal/soalbenarsalah/prosestambah.php" method="post" >
    <input type="hidden" name="idgroup" value="<?php echo $_GET['idgroup']; ?>">
    <input type="hidden" name="jenissoal" value="truefalse">
        <div class="form-group">
            <label>Soal</label>
            <div>
            <textarea id="textarea-ckeditor" name="soal"  class="ckeditor"></textarea></div>
        </div>                 
        <div class="form-group">
            <label>Jawaban Benar</label>
            <div>
                <select name="jawabanbenar" class="form-control">
                    <option value="true">TRUE</option>
                    <option value="false">FALSE</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label>Pembahasan</label>
            <div>
            <textarea id="textarea-ckeditor" rows="2" name="pembahasan"  class="ckeditor"></textarea></div>
        </div>
        <div class="form-group form-actions">
            <div >
                <button type="submit" name="submit" class="btn btn-sm btn-primary">Tambah Soal</button>
            </div>
        </div>
    </form>
</div>
<script src="js/helpers/ckeditor/ckeditor.js"></script>