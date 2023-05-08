<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Tambah Soal Kostick
        </h1>
    </div>
</div>
<div class="block full">
<form action="detailsoal/soalkostick/prosestambah.php" method="post" >
    <input type="hidden" name="idgroup" value="<?php echo $_GET['idgroup']; ?>">
        <div class="form-group">
            <label>pilihan a</label>
        <div>
            <textarea id="textarea-ckeditor" name="pilihana"  class="ckeditor"></textarea>
        </div>
        <div class="form-group">
            <label for="selectkostick">Pilihan A Kostick Score
                <select name="kostickcategory_a">
                    <option value="A">Kebutuhan Akan Keberhasilan</option>
                    <option value="B">Kebutuhan untuk menjadi bagian dari kelompok</option>
                    <option value="C">Keteraturan dan kerapihan</option>
                    <option value="D">Minat pada tugas yang detail</option>
                    <option value="E">Kekuatan menahan emosi</option>
                    <option value="F">Kebutuhan untuk mendukung pemimpin</option>
                    <option value="G">Peran sebagai pekerja keras</option>
                    <option value="I">Kemampuan dalam mengambil keputusan</option>
                    <option value="K">Kebutuhan untuk memaksakan pendapat</option>
                    <option value="L">Peran Kepemimpinan</option>
                    <option value="N">Kebutuhan untuk menyelesaikan tugas</option>
                    <option value="O">Kebutuhan akan kedekatan rasa disukai</option>
                    <option value="P">Kebutuhan akan mengawasi orang lain</option>
                    <option value="R">Tipe teoritis</option>
                    <option value="S">Perluasan lingkup sosial</option>
                    <option value="T">Kecepatan</option>
                    <option value="V">Penuh energy</option>
                    <option value="W">Kebutuhan akan aturan dan pengarahan</option>
                    <option value="X">Kebutuhan untuk diperhatikan</option>
                    <option value="Z">Kebutuhan akan perubahan</option>
              
                </select>
            </label>
        <div>
        </div>
        <div class="form-group">
            <label>pilihan b</label>
        <div>
            <textarea id="textarea-ckeditor" name="pilihanb"  class="ckeditor"></textarea>
        </div>
        <div class="form-group">
            <label for="selectkostick">Pilihan B Kostick Score
                <select name="kostickcategory_b">
                    <option value="A">Kebutuhan Akan Keberhasilan</option>
                    <option value="B">Kebutuhan untuk menjadi bagian dari kelompok</option>
                    <option value="C">Keteraturan dan kerapihan</option>
                    <option value="D">Minat pada tugas yang detail</option>
                    <option value="E">Kekuatan menahan emosi</option>
                    <option value="F">Kebutuhan untuk mendukung pemimpin</option>
                    <option value="G">Peran sebagai pekerja keras</option>
                    <option value="I">Kemampuan dalam mengambil keputusan</option>
                    <option value="K">Kebutuhan untuk memaksakan pendapat</option>
                    <option value="L">Peran Kepemimpinan</option>
                    <option value="N">Kebutuhan untuk menyelesaikan tugas</option>
                    <option value="O">Kebutuhan akan kedekatan rasa disukai</option>
                    <option value="P">Kebutuhan akan mengawasi orang lain</option>
                    <option value="R">Tipe teoritis</option>
                    <option value="S">Perluasan lingkup sosial</option>
                    <option value="T">Kecepatan</option>
                    <option value="V">Penuh energy</option>
                    <option value="W">Kebutuhan akan aturan dan pengarahan</option>
                    <option value="X">Kebutuhan untuk diperhatikan</option>
                    <option value="Z">Kebutuhan akan perubahan</option>
                </select>
            </label>
        <div>
        </div>
        </div>                 
        <!-- <div class="form-group">
            <label>Pembahasan</label>
            <div>
            <textarea id="textarea-ckeditor" rows="2" name="pembahasan"  class="ckeditor"></textarea></div>
        </div> -->
        <div class="form-group form-actions">
            <div>
                <input type="hidden" name="kostick" value="kostickanswer">
                <button type="submit" name="submit" class="btn btn-sm btn-primary">Tambah Soal</button>
            </div>
        </div>
    </form>
</div>
<script src="js/helpers/ckeditor/ckeditor.js"></script>