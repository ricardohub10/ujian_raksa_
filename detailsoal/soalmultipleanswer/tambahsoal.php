<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Tambah Soal Multiple Answer
        </h1>
    </div>
</div>
<div class="block full">
<form action="detailsoal/soalmultipleanswer/prosestambah.php" method="post" >
    <input type="hidden" name="idgroup" value="<?php echo $_GET['idgroup']; ?>">
        <div class="form-group">
            <label>Soal</label>
            <div>
            <textarea id="textarea-ckeditor" name="soal"  class="ckeditor"></textarea></div>
        </div>
        <div class="form-group">
            <label>pilihan a</label>
            <div>
            <textarea id="textarea-ckeditor" name="pilihana"  class="ckeditor"></textarea></div>
        </div>
        <div class="form-group">
            <label>pilihan b</label>
            <div>
            <textarea id="textarea-ckeditor" name="pilihanb"  class="ckeditor"></textarea></div>
        </div>
        <div class="form-group">
            <label>pilihan c</label>
            <div>
            <textarea id="textarea-ckeditor" name="pilihanc"  class="ckeditor"></textarea></div>
        </div>
        <div class="form-group">
            <label>pilihan d</label>
            <div>
            <textarea id="textarea-ckeditor" name="pilihand"  class="ckeditor"></textarea></div>
        </div>
        <div class="form-group">
            <label>pilihan e</label>
            <div>
            <textarea id="textarea-ckeditor" name="pilihane"  class="ckeditor"></textarea></div>
        </div>
        <div class="form-group">
            <label>Jawaban Benar</label>
            <div>
                <label class="checkbox-inline" for="example-inline-checkbox1">
                    <input type="checkbox" name="jawabanbenar[]" value="a"> Pilihan A
                </label>
                <label class="checkbox-inline" for="example-inline-checkbox2">
                    <input type="checkbox" name="jawabanbenar[]" value="b"> Pilihan B
                </label>
                <label class="checkbox-inline" for="example-inline-checkbox3">
                    <input type="checkbox" name="jawabanbenar[]" value="c"> Pilihan C
                </label>
                <label class="checkbox-inline" for="example-inline-checkbox3">
                    <input type="checkbox" name="jawabanbenar[]" value="d"> Pilihan D
                </label>
                <label class="checkbox-inline" for="example-inline-checkbox3">
                    <input type="checkbox" name="jawabanbenar[]" value="e"> Pilihan E
                </label>
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