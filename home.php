<?php include "koneksi.php"; ?>
<div class="row">
<div class="col-sm-6 col-lg-12">
    <!-- Widget -->
    <div class="widget">
        <div class="widget-simple">
            <h1>Hai <?php echo $_SESSION['namauser']; ?> </h3>
            <h3>Selamat Datang Kembali di Aplikasi Ujian Asuransi Raksa</h3>
        </div>

        <?php if($_SESSION['status'] == 'siswa') { ?>
        <div class="block full">
            <div class="table-responsive">
                <table id="example-datatable" class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Group</th>
                            <!-- <th class="text-center">Edisi</th> -->
                            <th class="text-center">Waktu</th>
                            <th class="text-center">Periode Ujian</th>
                            <th class="text-center">Jumlah Soal</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $datasemen = $_SESSION['iduser'];
                        $tampil = mysqli_query($mysqli, 


                        "select su.*, gs.*, m.*,uj.*,u.*
                        from user_ujian as uj
                        inner join setujian as su
                        on uj.idujian = su.idujian
                        inner join user as u 
                        on uj.iduser = u.iduser
                        inner join groupsoal as gs
                        on su.idgroup = gs.idgroup 
                        inner join gurumapel as gm
                        on gm.idgurumapel = gs.idgurumapel
                        inner join mapel as m
                        on m.idmapel = gm.idmapel where su.status = 'aktif' and uj.iduser = u.iduser and uj.idujian = su.idujian and u.iduser = $datasemen");
                
                        
                    //     $tampil = mysqli_query($mysqli, 
                    //     "select su.*, gs.*, m.*
                    //     from setujian as su 
                    //     inner join groupsoal as gs
                    //     on su.idgroup = gs.idgroup 
                    //     inner join gurumapel as gm
                    //     on gm.idgurumapel = gs.idgurumapel
                    //     inner join mapel as m
                    //     on m.idmapel = gm.idmapel where su.status = 'aktif'
                    //     "
                    
                    // );

                        // $tampil = mysqli_query($mysqli, 
                        // "select su.*, gs.*, m.*
                        // from setujian as su, groupsoal as gs, mapel as m 
                        // Where su.idgroup = gs.idgroup,
                        // gm.idgurumapel = gs.idgurumapel,
                        // m.idmapel = gm.idmapel And su.status = 'aktif'
                        // inner join gs
                        // on su.idgroup = gs.idgroup 
                        // inner join gm
                        // on gm.idgurumapel = gs.idgurumapel
                        // inner join m
                        // on m.idmapel = gm.idmapel where su.status = 'aktif' 
                        // ");
                        $no = 1;
                        while ($hasil = mysqli_fetch_array($tampil)) {
                            ?>
                            <tr>
                                <form action="ujian/prosesujian.php" method="post" >
                                <input type="hidden" name="idujian" value="<?php echo $hasil['idujian']; ?>">
                                <td class="text-center"><?php echo $no++; ?></td>
                                
                                <td class="text-center"><?php echo $hasil['namagroup'];?></td>
                                <!-- <td class="text-center"><?php //echo $hasil['mapel']; ?></td> -->
                                <td class="text-center"><?php echo $hasil['waktu'].' menit';?></td>
                                <td class="text-center"><?php echo $hasil['periodeujian']?></td>
                                <td class="text-center"><?php echo $hasil['rangesoal']; ?> Soal</td>
                                <!--<td class="text-center"></td>-->
                                <td class="text-center">
                                    <?php
                                    $n = mysqli_query($mysqli,"select * from nilai where iduser='".$_SESSION['iduser']."' and idujian='".$hasil['idujian']."'");
                                    $nilai = mysqli_num_rows($n);
                                    if($nilai>0){ ?>
                                        <button type="submit" name="submit" class="btn btn-sm btn-success"><i class="gi gi-stopwatch"></i> Lihat Nilai</button>
                                    <?php } else { ?>
                                        <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="gi gi-stopwatch"></i> Ambil Ujian</button>
                                        <input type="hidden" name="statusujian" value="sudah">
                                    <?php }?>
                                    
                                    <!-- <a onclick="$('#modal-user-settings<?php // echo $hasil['idujian']; ?>').modal('show');" title="Delete" class="btn btn-sm btn-default"><i class="gi gi-stopwatch"></i> Ambil Ujian</a> -->
                                </td>
                                </form>
                            </tr>
                                
                                <!-- <div class="modal fade" id="modal-user-settings<?php //echo $hasil['idujian']; ?>" role="dialog">
                                <div class="modal-dialog">
                                     Modal content-->
                                    <!-- <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                            <h3 class="modal-title"></i>Masukan Password Anda</h3>
                                        </div> -->
                                        <!-- END Modal Header -->

                                        <!-- Modal Body -->
                                        <!-- <div class="modal-body">
                                            <form action="ujian/prosesujian.php" method="post" >
                                            <input type="hidden" name="idujian" value="<?php //echo $hasil['idujian']; ?>">
                                                <div class="form-group">
                                                    <label>Token Soal</label>
                                                    <div>
                                                        <input placeholder="Token Soal"  value="" name="token" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group form-actions">
                                                    <div >
                                                        <button type="submit" name="submit" class="btn btn-sm btn-primary">Masuk</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> -->
                                        <!-- END Modal Body -->
                                    <!-- </div>
                                </div>
                            </div> --> 
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } ?>
    </div>
    </div>
    <?php
    if($_SESSION['status'] == 'admin'){
    ?>
    <div class="col-sm-6 col-lg-3">
        <!-- Widget -->
        <div class="widget widget-hover-effect1">
            <div class="widget-simple">
                <div class="widget-icon pull-left themed-background-default animation-fadeIn">
                    <i class="fa fa-file-text"></i>
                </div>
                <h2 class="widget-content text-right">
                    <strong><?php $tampil = mysqli_query($mysqli, "select count(namagroup) as jumlah from groupsoal");
                    $hasil = mysqli_fetch_array($tampil);
                    echo $hasil = $hasil['jumlah'];?></strong><br>
                    <small>Group Soal</small>
                </h2>
            </div>
        </div>
        <!-- END Widget -->
    </div>
    <div class="col-sm-6 col-lg-3">
        <!-- Widget -->
        <div class="widget widget-hover-effect1">
            <div class="widget-simple">
                <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                    <i class="fa fa-user"></i>
                </div>
                <h3 class="widget-content text-right animation-pullDown">
                    <strong><?php $tampil = mysqli_query($mysqli, "select count(namauser) as jumlah from user where status = 'guru' ");
                    $hasil = mysqli_fetch_array($tampil);
                    echo $hasil = $hasil['jumlah'];?></strong><br>
                    <small>Guru</small>
                </h3>
            </div>
        </div>
        <!-- END Widget -->
    </div>
    <div class="col-sm-6 col-lg-3">
        <!-- Widget -->
        <div class="widget widget-hover-effect1">
            <div class="widget-simple">
                <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                    <i class="fa fa-user"></i>
                </div>
                <h3 class="widget-content text-right animation-pullDown">
                    <strong><?php $tampil = mysqli_query($mysqli, "select count(namauser) as jumlah from user where status = 'siswa' ");
                    $hasil = mysqli_fetch_array($tampil);
                    echo $hasil = $hasil['jumlah'];?></strong><br>
                    <small>Siswa</small>
                </h3>
            </div>
        </div>
        <!-- END Widget -->
    </div>
    <div class="col-sm-6 col-lg-3">
        <!-- Widget -->
        <div class="widget widget-hover-effect1">
            <div class="widget-simple">
                <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                    <i class="fa fa-file-text"></i>
                </div>
                <h3 class="widget-content text-right animation-pullDown">
                    <strong><?php $tampil = mysqli_query($mysqli, "select count(idujian) as jumlah from setujian where status = 'aktif' ");
                    $hasil = mysqli_fetch_array($tampil);
                    echo $hasil = $hasil['jumlah'];?></strong><br>
                    <small>Ujian Aktif</small>
                </h3>
            </div>
        </div>
        <!-- END Widget -->
    </div>
    <?php
    }
    ?>
</div>
