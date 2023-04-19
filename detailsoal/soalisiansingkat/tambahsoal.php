<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Tambah Soal Isian Singkat
        </h1>
    </div>
</div>
<div class="block full">
<form action="detailsoal/soalisiansingkat/prosestambah.php" method="post" >
    <input type="hidden" name="idgroup" value="<?php echo $_GET['idgroup']; ?>">
    <input type="hidden" name="jenissoal" value="shortanswer">
        <div class="form-group">
            <label>Soal</label>
            <div>
            <textarea id="textarea-ckeditor" name="soal"  class="ckeditor"></textarea></div>
        </div>
        <div class="form-group">
            <label>Jawaban Benar</label>
            <div>
            <textarea class="form-control" placeholder="isian singkat hanya berisi 1 kata" name="jawabanbenar"></textarea></div>
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