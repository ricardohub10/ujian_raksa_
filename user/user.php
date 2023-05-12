<!-- Datatables Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Data user
        </h1>
    </div>
</div>
<!-- END Datatables Header -->

<!-- Datatables Content -->
<a href="user/tambahdummyuser.php" class="btn btn-danger">Input user dummy</a>

<div class="block full">
    <a class="btn btn-sm btn-info" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings').modal('show');">Tambah User</a>
    <div class="modal fade" id="modal-user-settings" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title"></i>Tambah User</h3>
                </div>
                <!-- END Modal Header -->

                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="user/prosestambah.php" method="post" >
                        <div class="form-group">
                            <label >Nama user</label>
                            <div >
                                <input type="text" name="namauser" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div >
                                <select name="jk" class="form-control">
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <label>Tempat/TGL Lahir</label>
                        <div class="form-group">
                            <div class="form-inline">
                                <input style="width:300px;" name="tempatlahir" type="text" class="form-control">
                                <input style="width:254px;" name="tgllahir" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div >
                                <select name="status" class="form-control">
                                    <option value="admin">admin</option>
                                    <option value="guru">guru</option>
                                    <option value="siswa">siswa</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tipe Karyawan</label>
                            <div >
                                <select name="tipe_karyawan" class="form-control">
                                    <option value="non_karyawan">Non Karyawan</option>
                                    <option value="karyawan">Karyawan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label >username</label>
                            <div >
                                <input type="text" name="username" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label >password</label>
                            <div >
                                <input type="text" name="password" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div >
                                <button type="submit" name="submit" class="btn btn-sm btn-primary">Tambah user</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Modal Body -->
            </div>
        </div>
    </div>
    <button type="reset" class="btn btn-sm btn-success" onclick="$('#modal-user-import').modal('show');">Import dari Excel</button>
        <div class="modal fade" id="modal-user-import" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h3 class="modal-title"></i>Import User</h3>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="user/import.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="example-hf-email">Import User</label>
                            <div class="col-md-9">
                                <input type="file" name="import"> 
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-md-9 col-md-offset-3">
                                <button type="submit" name="upload" value="import" class="btn btn-sm btn-primary">Import Data</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
    <button type="reset" class="btn btn-sm btn-success">Export ke Excel</button>
    <br>
    <br>
    <div class="table-responsive">
        <table id="example-datatable" class="table table-striped">
            <thead>
                <tr>
                    <th width="20px" class="text-center">No</th>
                    <th class="text-center">Nama user</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Tempat/TGL Lahir</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Tipe Karyawan</th>
                    <th class="text-center">Username</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include ('koneksi.php');
                $tampil = mysqli_query($mysqli, "select * from user");
                $no = 1;
                while ($hasil = mysqli_fetch_array($tampil)) {
                    ?>
                    <tr>
                        <td width="20px" class="text-center"><?php echo $no++; ?></td>
                        <td class="text-center"><?php echo $hasil['namauser'];?></td>
                        <td class="text-center"><?php echo $hasil['jk'] == 'laki-laki' ? 'Laki-laki' : 'Perempuan'; ?></td>
                        <td class="text-center"><?php echo $hasil['tempatlahir'].', '.date('d F Y', strtotime($hasil['tgllahir']));?></td>
                        <td class="text-center"><?php echo $hasil['status']; ?></td>
                        <td class="text-center">
                        <?php if($hasil['tipe_karyawan']=='karyawan'){ echo '<span class="label label-success">Karyawan</span>' ;} else { echo '<span class="label label-danger">Non Karyawan</span>';} ?>
                        </td>
                        <td class="text-center"><?php echo $hasil['username']; ?></td>
                        <!--<td class="text-center"></td>-->
                        <td class="text-center">
                            <a class="btn btn-sm btn-info" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings<?php echo $hasil['iduser'];?>').modal('show');"><i class="fa fa-edit"></i></a>

                            <a onclick="return confirm('apakah anda yakin ingin menghapus data? ');" href="user/proseshapus.php?id=<?php echo $hasil['iduser']; ?>" title="Delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a

                        </td>
                    </tr>
                <div class="modal fade" id="modal-user-settings<?php echo $hasil['iduser'];?>" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h3 class="modal-title"></i>Edit user</h3>
                            </div>
                            <!-- END Modal Header -->

                            <!-- Modal Body -->
                            <br>
                            <div class="modal-body">
                                <form action="user/prosesedit.php" method="post" class="form-bordered">
                                    <input type="hidden" name="iduser" value="<?php echo $hasil['iduser']; ?>">
                                    <div class="form-group">
                                        <label >Nama user</label>
                                        <div >
                                            <input type="text" name="namauser" value="<?php echo $hasil['namauser']; ?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <div >
                                            <select name="jk" class="form-control">
                                                <option <?php if($hasil['jk']=='laki-laki'){echo "selected"; } ?> value="laki-laki">Laki-laki</option>
                                                <option <?php if($hasil['jk']=='perempuan'){echo "selected"; } ?> value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label>Tempat/TGL Lahir</label>
                                    <div class="form-group">
                                        <div class="form-inline">
                                            <input style="width:300px;" type="text" name="tempatlahir" value="<?php echo $hasil['tempatlahir']; ?>" class="form-control">
                                            <input style="width:254px;" type="date" name="tgllahir"    value="<?php echo $hasil['tgllahir']; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>status</label>
                                        <div >
                                            <select name="status" class="form-control">
                                                <option <?php if($hasil['status']=='admin'){echo "selected"; } ?> value="admin">admin</option>
                                                <option <?php if($hasil['status']=='guru'){echo "selected"; } ?> value="guru">guru</option>
                                                <option <?php if($hasil['status']=='siswa'){echo "selected"; } ?> value="siswa">siswa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tipe Karyawan</label>
                                        <div >
                                            <select name="tipe_karyawan" class="form-control">
                                                <option <?php if($hasil['tipe_karyawan']==NULL || $hasil['tipe_karyawan'] == 'non_karyawan'){echo "selected"; } ?> value="non_karyawan">Non Karyawan</option>
                                                <option <?php if($hasil['tipe_karyawan']=='karyawan' || $hasil['status'] == 'guru'){echo "selected"; } ?> value="karyawan">Karyawan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label >Username</label>
                                        <div >
                                            <input type="text" name="username" value="<?php echo $hasil['username']; ?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label >password</label>
                                        <div >
                                            <!-- <input type="text" name="password" value="<?php echo base64_decode($hasil['password']); ?>" class="form-control" required> -->
                                            <input type="text" name="password" value="<?php $hasil['password']; ?>" class="form-control" required>

                                        </div>
                                    </div>
                                    <div class="form-group form-actions">
                                        <div >
                                            <button type="submit" name="submit" class="btn btn-sm btn-primary">Edit user</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- END Modal Body -->
                        </div>
                    </div>
                </div>
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



