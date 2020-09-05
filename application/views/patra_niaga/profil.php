<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('SPBE/head'); ?>
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <div class="page-sidebar">
            <!-- START X-NAVIGATION -->
            <?php $this->load->view('patra_niaga/side'); ?>
            <!-- END X-NAVIGATION -->
        </div>
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel">

            </ul>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Profil</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">

                        <div class="alert alert-success tambah" style="display: none" role="tambah">
                            Penambahan Data Telah Berhasil
                        </div>
                        <div class="alert alert-info put" style="display: none" role="put">
                            Pembaruan Data Telah Berhasil
                        </div>
                        <div class="alert alert-danger delete" style="display: none" role="delete">
                            Penghapusan Data Telah Berhasil
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <ul class="panel-controls">
                                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                </ul>
                                <h2>Data Patra Niaga</h2>
                            </div>
                            <div class="panel-body">
                                <div class="modal-body col-md-12 ">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Nama </label>
                                        <input type="" class="form-control" id="put_nama_patra_niaga" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">No Telepon </label>
                                        <input type="" class="form-control" id="put_telepon_patra_niaga" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Alamat </label>
                                        <textarea class="form-control" id="put_alamat_patra_niaga"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="" class="form-control" id="put_username" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="password" class="form-control" id="put_password" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-info pull-right" onclick="put_patra_niaga()">Update</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END PAGE CONTENT WRAPPER -->
                </div>
                <!-- END PAGE CONTENT -->
            </div>
            <!-- END PAGE CONTAINER -->

            <!-- view Data-->
            <div class="modal fade" id="viewdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: white;">
                            <h3 class="modal-title" id="exampleModalLabel">View Skid Tank</h3>
                        </div>
                        <div class="modal-body col-md-12" style="background-color: white;">
                            <div class="form-group col-md-4 border border-primary">
                                <label for="exampleInputEmail1">NOPOL</label>
                                <br>
                                <span id="view_nopol"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-4 border border-primary">
                                <label for="exampleInputEmail1">Kapasitas</label>
                                <br>
                                <span id="view_kapasitas"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-4 border border-primary">
                                <label for="exampleInputEmail1">Odometer</label>
                                <br>
                                <span id="view_odometer"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-4 border border-primary">
                                <label for="exampleInputEmail1">Nama Supir 1</label>
                                <br>
                                <span id="view_nama_supir1"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-4 border border-primary">
                                <label for="exampleInputEmail1">Tanggal Lahir </label>
                                <br>
                                <span id="view_tgl_lahir1"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-4 border border-primary">
                                <label for="exampleInputEmail1">NO HP</label>
                                <br>
                                <span id="view_no_hp1"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-6 border border-primary">
                                <label for="exampleInputEmail1">NO SIM</label>
                                <br>
                                <span id="view_no_sim1"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-6 border border-primary">
                                <label for="exampleInputEmail1">Tangal Berlaku</label>
                                <br>
                                <span id="view_tgl_berlaku1"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-4 border border-primary">
                                <label for="exampleInputEmail1">Nama Supir 2</label>
                                <br>
                                <span id="view_nama_supir2"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-4 border border-primary">
                                <label for="exampleInputEmail1">Tanggal Lahir</label>
                                <br>
                                <span id="view_tgl_lahir2"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-4 border border-primary">
                                <label for="exampleInputEmail2">NO HP</label>
                                <br>
                                <span id="view_no_hp2"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-6 border border-primary">
                                <label for="exampleInputEmail2">NO SIM</label>
                                <br>
                                <span id="view_no_sim2"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-6 border border-primary">
                                <label for="exampleInputEmail2">Tangal Berlaku</label>
                                <br>
                                <span id="view_tgl_berlaku2"></span>
                                <hr>
                            </div>
                        </div>
                        <div class="modal-footer" style="background-color: white;">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END-->
            <!-- Input Data-->
            <div class="modal fade" id="inputdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:darkgray">
                            <h3 class="modal-title" id="exampleModalLabel">Input Data Skid Tank</h3>
                        </div>
                        <div class="modal-body row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">NOPOL</label>
                                <input type="" class="form-control" id="post_nopol" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Kapasitas</label>
                                <input type="" class="form-control" id="post_kapasitas" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Odemeter</label>
                                <input class="form-control" id="post_odometer" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Status</label>
                                <input type="" class="form-control" id="post_status" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="modal-body" style="background-color:darkgray">
                            <h3 class="modal-title" id="exampleModalLabel">Input Data Supir</h3>
                        </div>
                        <div class="modal-body row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Nama Supir 1</label>
                                <input type="" class="form-control" id="post_nama_supir1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">TGL_lahir</label>
                                <input type="date" class="form-control" id="post_tgl_lahir1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">NO HP</label>
                                <input type="" class="form-control" id="post_no_hp1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">NO SIM</label>
                                <input type="" class="form-control" id="post_no_sim1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Tanggal Berlaku</label>
                                <input type="date" class="form-control" id="post_tgl_berlaku1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Nama Supir 2</label>
                                <input type="" class="form-control" id="post_nama_supir2" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">TGL_lahir</label>
                                <input type="date" class="form-control" id="post_tgl_lahir2" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">NO HP</label>
                                <input type="" class="form-control" id="post_no_hp2" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">NO SIM</label>
                                <input type="" class="form-control" id="post_no_sim2" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Tanggal Berlaku</label>
                                <input type="date" class="form-control" id="post_tgl_berlaku2" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="modal-footer" style="background-color:darkgray">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="post_data()">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END -->
            <!-- Update Data-->
            <div class="modal fade" id="updatedata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:darkgray">
                            <h3 class="modal-title" id="exampleModalLabel">Input Data Skid Tank</h3>
                        </div>
                        <div class="modal-body row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">NOPOL</label>
                                <input type="" class="form-control" id="put_nopol" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Kapasitas</label>
                                <input type="" class="form-control" id="put_kapasitas" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Odemeter</label>
                                <input class="form-control" id="put_odometer" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Status</label>
                                <input type="" class="form-control" id="put_status" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="modal-body" style="background-color:darkgray">
                            <h3 class="modal-title" id="exampleModalLabel">Input Data Supir</h3>
                        </div>
                        <div class="modal-body row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Nama Supir 1</label>
                                <input type="" class="form-control" id="put_nama_supir1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">TGL_lahir</label>
                                <input type="date" class="form-control" id="put_tgl_lahir1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">NO HP</label>
                                <input type="" class="form-control" id="put_no_hp1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">NO SIM</label>
                                <input type="" class="form-control" id="put_no_sim1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Tanggal Berlaku</label>
                                <input type="date" class="form-control" id="put_tgl_berlaku1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Nama Supir 2</label>
                                <input type="" class="form-control" id="put_nama_supir2" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">TGL_lahir</label>
                                <input type="date" class="form-control" id="put_tgl_lahir2" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">NO HP</label>
                                <input type="" class="form-control" id="put_no_hp2" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">NO SIM</label>
                                <input type="" class="form-control" id="put_no_sim2" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Tanggal Berlaku</label>
                                <input type="date" class="form-control" id="put_tgl_berlaku2" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="modal-footer" style="background-color:darkgray">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="put_data()">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END -->
            <!-- Delete Data-->
            <div class="modal fade" id="deletedata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                            <h2 class="modal-title" id="exampleModalLabel"> Yakin Ingin Menghapus ?</h2>
                            <br>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" style="margin: 0 10% 0 0;">NO</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin: 0 0 0 10%;" onclick="delete_fix()">YES</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END -->







            <!-- START PRELOADS -->
            <audio id="audio-alert" src="<?= base_url() ?>assets/audio/alert.mp3" preload="auto"></audio>
            <audio id="audio-fail" src="<?= base_url() ?>assets/audio/fail.mp3" preload="auto"></audio>
            <script type="text/javascript" src="<?= base_url() ?>preload/code.js"></script>
            <!-- END PRELOADS -->
            <!-- START SCRIPTS -->
            <!-- START PLUGINS -->
            <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/jquery/jquery.min.js"></script>
            <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
            <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>
            <!-- END PLUGINS -->
            <!-- THIS PAGE PLUGINS -->
            <script type='text/javascript' src='<?= base_url() ?>assets/js/plugins/icheck/icheck.min.js'></script>
            <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
            <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
            <!-- END PAGE PLUGINS -->
            <!-- START TEMPLATE -->
            <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins.js"></script>
            <script type="text/javascript" src="<?= base_url() ?>assets/js/actions.js"></script>
            <!-- END TEMPLATE -->
            <!-- END SCRIPTS -->
            <script>
                view_patra_niaga();
                var kode_patra_niaga;
                var kode_skid_tank;
                var kode_supir1;
                var kode_supir2;
                var password;

                function view_patra_niaga() {
                    $.ajax({
                        type: 'GET',
                        url: " <?= base_url() ?>Rest_API/patra_niaga?KEY-SPBE=SPBE",
                        contentType: "application/json",
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        dataType: 'json',
                        success: function(response) {
                            console.log();
                            kode_patra_niaga = response.data[0].kode_patra_niaga;
                            $("#put_nama_patra_niaga").val(response.data[0].nama_patra_niaga);
                            $("#put_telepon_patra_niaga").val(response.data[0].telepon_patra_niaga);
                            $("#put_alamat_patra_niaga").val(response.data[0].alamat_patra_niaga);
                            $("#put_username").val(response.data[0].username);
                            $("#put_password").val(response.data[0].password);
                            password = response.data[0].password;
                        }
                    });
                }

                function put_patra_niaga() {
                    console.log('put');
                    var value_data;
                    if ($("#put_password").val() == password) {
                        value_data = {
                            'kode_patra_niaga': kode_patra_niaga,
                            'nama_patra_niaga': $("#put_nama_patra_niaga").val(),
                            'telepon_patra_niaga': $("#put_telepon_patra_niaga").val(),
                            'alamat_patra_niaga': $("#put_alamat_patra_niaga").val(),
                            'username': $("#put_username").val(),
                            'password': false,
                            'KEY-SPBE': 'SPBE'
                        }
                    } else {
                        value_data = {
                            'kode_patra_niaga': kode_patra_niaga,
                            'nama_patra_niaga': $("#put_nama_patra_niaga").val(),
                            'telepon_patra_niaga': $("#put_telepon_patra_niaga").val(),
                            'alamat_patra_niaga': $("#put_alamat_patra_niaga").val(),
                            'username': $("#put_username").val(),
                            'password': $("#put_password").val(),
                            'KEY-SPBE': 'SPBE'
                        }
                    }

                    $.ajax({
                        type: 'PUT',
                        url: " <?= base_url() ?>Rest_API/patra_niaga",
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                        dataType: 'json',
                        data: value_data,
                        success: function(response) {
                            console.log(response.message);
                            $(".put").show();
                        }
                    });
                }
            </script>

</body>

</html>