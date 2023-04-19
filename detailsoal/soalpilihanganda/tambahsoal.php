<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Tambah Soal Pilihan Ganda
        </h1>
    </div>
</div>
<div class="block full">
<form action="detailsoal/soalpilihanganda/prosestambah.php" method="post" >
    <input type="hidden" name="idgroup" value="<?php echo $_GET['idgroup']; ?>">
        <div class="form-group">
            <label>Soal</label>
            <div>
            <textarea id="textarea-ckeditor" name="soal"  class="ckeditor"></textarea></div>
        </div>
        <div class="form-group">
            <label>Pilihan A</label>
            <div>
            <textarea id="textarea-ckeditor" rows="2" name="pilihana"  class="ckeditor"></textarea></div>
        </div>
        <div class="form-group">
            <label>Pilihan B</label>
            <div>
            <textarea id="textarea-ckeditor" rows="2" name="pilihanb"  class="ckeditor"></textarea></div>
        </div>
        <div class="form-group">
            <label>Pilihan C</label>
            <div>
            <textarea id="textarea-ckeditor" rows="2" name="pilihanc"  class="ckeditor"></textarea></div>
        </div>
        <div class="form-group">
            <label>Pilihan D</label>
            <div>
            <textarea id="textarea-ckeditor" rows="2" name="pilihand"  class="ckeditor"></textarea></div>
        </div>
        <div class="form-group">
            <label>Pilihan E</label>
            <div>
            <textarea id="textarea-ckeditor" rows="2" name="pilihane"  class="ckeditor"></textarea></div>
        </div>
        <!-- Untuk ujian rekrutmen  -->
        <!-- <div class="form-group">
            <label>Pilihan F</label>
            <div>
            <textarea id="textarea-ckeditor" rows="2" name="pilihanf"  class="ckeditor"></textarea></div>
        </div> -->
        <!-- sampe sini -->
        <div class="form-group">
            <label>Jawaban Benar</label>
            <div>
                <select name="jawabanbenar" class="form-control">
                    <option value="a">pilihan A</option>
                    <option value="b">Pilihan B</option>
                    <option value="c">Pilihan C</option>
                    <option value="d">Pilihan D</option>
                    <option value="e">Pilihan E</option>
                    <!-- <option value="f">Pilihan F</option> -->
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