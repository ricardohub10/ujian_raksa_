<?php include('koneksi.php');
?>
<!-- Datatables Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i> User Access
        </h1>
    </div>
</div>
<!-- END Datatables Header -->

<!-- Datatables Content -->
<div class="block full">
    <?php if ($_SESSION['status'] == 'guru') { ?>
        <a class="btn btn-sm btn-info" data-placement="bottom" title="Tambah Soal" onclick="$('#modal-user-settings').modal('show');">Tambah Akses</a>
        <div class="modal fade" id="modal-user-settings" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h3 class="modal-title"></i>Tambah Akses</h3>
                    </div>
                    <!-- END Modal Header -->
                    <?php
                    $t = mysqli_query($mysqli,
                    "select uj.idujian
                    from user_ujian as uj
                    inner join setujian as sj
                    on sj.id_ujian = uj.idujian
                    and u.iduser = '$_SESSION[iduser]'
                    ")
                    ?>
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="ujian/prosestambahuserujian.php" method="post">
                            <input type="hidden" value="<?php echo $_SESSION['iduser']; ?>" name="iduser">
                            <div class="form-group">
                                <label>Group Soal</label>
                                <div>
                                    <select name="listgrupmapel" class="form-control">
                                        <option disabled selected>Pilih Grup Soal</option>
                                        <?php
                                        $sql = mysqli_query($mysqli, "SELECT gs.namagroup, sj.idgroup, sj.idujian
                                        from setujian as sj
                                        inner join groupsoal as gs
                                        on gs.idgroup = sj.idgroup");
                                        while($data = mysqli_fetch_array($sql)){
                                        ?>
                                       <option value="<?php echo $data['idujian']?>"><?php echo $data['namagroup']?></option>
                                       <?php
                                        }
                                       ?>
                                    </select>
                                    <!-- <input type="text" name="namagroup" value="" class="form-control" required> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label>List Peserta</label>
                                <select name="listpesertaujian" class="form-control" tabindex="1">
                                    <option disabled selected>Pilih List Peserta</option>
                                    <?php 
                                    $sql2 = mysqli_query($mysqli, "SELECT * FROM user");
                                    while($data2 = mysqli_fetch_array($sql2)){
                                    ?>
                                        <option value="<?php echo $data2['iduser']?>"><?php echo $data2['namauser']?></option>
                                       <?php
                                        }
                                       ?>
                                    </select>
                            </div>
                            <div class="form-group form-actions">
                                <div>
                                    <button type="submit" name="submit" class="btn btn-sm btn-primary">Tambah Group Soal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
    <?php } ?>
    <br>
    <br>
    <div class="table-responsive">
        <table id="example-datatable" class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Pembuat Soal</th>
                    <th class="text-center">Tahun Soal</th>
                    <th class="text-center">Jenis Soal</th>
                    <th class="text-center">Group Soal</th>
                    <th class="text-center">Soal</th>
                    <th class="text-center">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $tampil = mysqli_query(
                    $mysqli,
                    "select gs.*, u.*, t.tahun, m.mapel, m.idmapel
                from groupsoal as gs
                inner join gurumapel as gm
                on gs.idgurumapel = gm.idgurumapel
                inner join mapel as m
                on gm.idmapel = m.idmapel
                inner join user as u
                on gm.iduser = u.iduser
                inner join tahunajaran as t
                on gm.idtahun = t.idtahun"
                );
                $no = 1;
                while ($hasil = mysqli_fetch_array($tampil)) {
                ?>
                    <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td class="text-center"><?php echo $hasil['namauser']; ?></td>
                        <td class="text-center"><?php echo $hasil['tahun']; ?></td>
                        <td class="text-center"><?php echo $hasil['namagroup']; ?></td>
                        <td class="text-center"><?php echo $hasil['mapel']; ?></td>
                        <td class="text-center">
                            <?php

                            $j = mysqli_query($mysqli, "select * from soal where idgroup = '$hasil[idgroup]'");
                            $jumlah = mysqli_num_rows($j);
                            echo $jumlah;
                            ?> Soal
                        </td>
                        <td class="text-center">
                            <?php if ($hasil['statusgrup'] == "Y") { ?>
                                <span class="label label-success">Verified</span>
                            <?php } else { ?>
                                <span class="label label-danger">Not Verified</span>
                            <?php } ?>
                        </td>
                        <!--<td class="text-center"></td>-->
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- END Datatables Content -->
<!-- END Page Wrapper -->

<!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
<a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- END User Settings -->