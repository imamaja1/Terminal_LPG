<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>Joli Admin - Responsive Bootstrap Admin Template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="<?= base_url() ?>assets/image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url() ?>assets/css/theme-default.css" />
    <!-- EOF CSS INCLUDE -->
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <div class="page-sidebar">
            <!-- START X-NAVIGATION -->
            <?php $this->load->view('Terminal/side'); ?>
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
                <li class="active">Patra Niaga</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">

                        <div class="alert alert-success tambah" style="display: none" role="tambah">
                            Penambaha Data Telah Berhasil
                        </div>
                        <div class="alert alert-info put" style="display: none" role="put">
                            Pengupdatan Data Telah Berhasil
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
                                        <button type="submit" class="btn btn-info pull-right" onclick="put_patra_niaga()">Update Data</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="alert alert-success tambah2" style="display: none" role="tambah2">
                            Penambaha Data Telah Berhasil
                        </div>
                        <div class="alert alert-info put2" style="display: none" role="put2">
                            Pengupdatan Data Telah Berhasil
                        </div>
                        <div class="alert alert-danger delete2" style="display: none" role="delete2">
                            Penghapusan Data Telah Berhasil
                        </div>
                        <!-- START DEFAULT DATATABLE -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#inputdata">Input Data</button>
                                <ul class="panel-controls">
                                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                </ul>
                            </div>
                            <div class="panel-body table-responsive">
                                <table id="datatable" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NOPOL</th>
                                            <th>Kapasitas (MT)</th>
                                            <th>Odometer</th>
                                            <th>Status</th>
                                            <th style="width: 30px;">Action</th>
                                        </tr>
                                    </thead>
                                </table>
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
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Input Data Skid Tank</h3>
                        </div>
                        <div class="modal-body row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">NOPOL</label>
                                <input type="" class="form-control" id="post_nopol" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Kapasitas</label>
                                <input type="" class="form-control" id="post_kapasitas" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Odometer</label>
                                <input class="form-control" id="post_odometer" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Status</label>
                                <select class="form-control" id="post_status">
                                    <option class="form-control" id="1" value="1">Ready</option>
                                    <option class="form-control" id="3" value="3">Not Ready</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <hr>
                        </div>
                        <div class="modal-body row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Nama Supir 1</label>
                                <input type="" class="form-control" id="post_nama_supir1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">TGL_lahir</label>
                                <input type="date" class="form-control" id="post_tgl_lahir1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">NO HP</label>
                                <input type="" class="form-control" id="post_no_hp1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">NO SIM</label>
                                <input type="" class="form-control" id="post_no_sim1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Tanggal Berlaku</label>
                                <input type="date" class="form-control" id="post_tgl_berlaku1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Nama Supir 2</label>
                                <input type="" class="form-control" id="post_nama_supir2" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">TGL_lahir</label>
                                <input type="date" class="form-control" id="post_tgl_lahir2" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">NO HP</label>
                                <input type="" class="form-control" id="post_no_hp2" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">NO SIM</label>
                                <input type="" class="form-control" id="post_no_sim2" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Tanggal Berlaku</label>
                                <input type="date" class="form-control" id="post_tgl_berlaku2" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="modal-footer">
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
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Input Data Skid Tank</h3>
                        </div>
                        <div class="modal-body row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">NOPOL</label>
                                <input type="" class="form-control" id="put_nopol" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Kapasitas</label>
                                <input type="" class="form-control" id="put_kapasitas" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Odemeter</label>
                                <input class="form-control" id="put_odometer" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Status</label>
                                <select class="form-control" id="put_status">
                                    <option class="form-control" id="1" value="1">Ready</option>
                                    <option class="form-control" id="2" value="2">Waiting</option>
                                    <option class="form-control" id="3" value="3">Not Ready</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <hr>
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
                        <div class="modal-footer">
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
                        }
                    });
                }

                function put_patra_niaga() {
                    console.log('put');
                    const value_data = {
                        'kode_patra_niaga': kode_patra_niaga,
                        'nama_patra_niaga': $("#put_nama_patra_niaga").val(),
                        'telepon_patra_niaga': $("#put_telepon_patra_niaga").val(),
                        'alamat_patra_niaga': $("#put_alamat_patra_niaga").val(),
                        'username': $("#put_username").val(),
                        'password': $("#put_password").val(),
                        'KEY-SPBE': 'SPBE'
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
                            $("#datatable").DataTable().ajax.reload();
                        }
                    });
                }
                $('#datatable').DataTable({
                    distroy: true,
                    ajax: {
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        "method": "GET",
                        "url": "<?= base_url() ?>/Rest_api/skid_tank?KEY-SPBE=SPBE",
                    },
                    columns: [{
                            data: null
                        }, {
                            data: "nopol"
                        },
                        {
                            data: "kapasitas"
                        },
                        {
                            data: "odometer"
                        },
                        {
                            data: "status",
                            render: function(data, type, row, meta) {
                                if (data == '1') {
                                    return '<span class="label label-info">Ready</span>';
                                } else if (data == '2') {
                                    return '<span class="label label-default">Waiting..</span>'
                                } else if (data == '3') {
                                    return '<span class="label label-danger">Not Ready</span>'
                                }
                            }
                        },
                        {
                            data: "kode_skid_tank",
                            className: "center",
                            render: function(data, type, row, meta) {
                                return '<div class="form-group"><div class="col-md-12"><button class="btn btn-success btn-block" data-toggle="modal" data-target="#viewdata" onclick="view_data(' + data + ')"><span class="fa fa-eye"></span></button></div><div class="col-md-12"><button class="btn btn-info btn-block" data-toggle="modal" data-target="#updatedata" onclick="view_data(' + data + ')"><span class="fa fa-cog"></span></button></div><div class="col-md-12"><button class="btn btn-danger btn-block" data-toggle="modal" data-target="#deletedata" onclick="delete_data(' + data + ')"><span class="fa fa-trash-o"></span></button></div></div>'
                            }
                        },
                    ],
                    "fnCreatedRow": function(row, data, index) {
                        $('td', row).eq(0).html(index + 1);
                    },
                });

                function view_data(id) {
                    console.log(id);
                    $.ajax({
                        type: 'GET',
                        url: " <?= base_url() ?>Rest_API/skid_tank?KEY-SPBE=SPBE&id=" + id,
                        contentType: "application/json",
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        dataType: 'json',
                        success: function(response) {
                            console.log(response)
                            $("#view_nopol").text(response.data[0].nopol);
                            $("#view_kapasitas").text(response.data[0].kapasitas);
                            $("#view_odometer").text(response.data[0].odometer);

                            $("#view_nama_supir1").text(response.data[0].nama_supir);
                            $("#view_no_hp1").text(response.data[0].no_hp);
                            $("#view_no_sim1").text(response.data[0].no_sim);
                            $("#view_tgl_berlaku1").text(response.data[0].tahun_berlaku);
                            $("#view_tgl_lahir1").text(response.data[0].tgl_lahir);

                            $("#view_nama_supir2").text(response.data[1].nama_supir);
                            $("#view_no_hp2").text(response.data[1].no_hp);
                            $("#view_no_sim2").text(response.data[1].no_sim);
                            $("#view_tgl_berlaku2").text(response.data[1].tahun_berlaku);
                            $("#view_tgl_lahir2").text(response.data[1].tgl_lahir);


                            kode_skid_tank = response.data[0].kode_skid_tank;
                            $("#put_nopol").val(response.data[0].nopol);
                            $("#put_kapasitas").val(response.data[0].kapasitas);
                            $("#put_odometer").val(response.data[0].odometer);
                            $("#put_status").val(response.data[0].status);

                            kode_supir1 = response.data[0].kode_supir;
                            $("#put_nama_supir1").val(response.data[0].nama_supir);
                            $("#put_no_hp1").val(response.data[0].no_hp);
                            $("#put_no_sim1").val(response.data[0].no_sim);
                            $("#put_tgl_berlaku1").val(response.data[0].tahun_berlaku);
                            $("#put_tgl_lahir1").val(response.data[0].tgl_lahir);

                            kode_supir2 = response.data[1].kode_supir;
                            $("#put_nama_supir2").val(response.data[1].nama_supir);
                            $("#put_no_hp2").val(response.data[1].no_hp);
                            $("#put_no_sim2").val(response.data[1].no_sim);
                            $("#put_tgl_berlaku2").val(response.data[1].tahun_berlaku);
                            $("#put_tgl_lahir2").val(response.data[1].tgl_lahir);
                        }
                    });
                }

                function post_data() {
                    console.log('post');
                    if ($("#post_nopol").val() != '' && $("#post_kapasitas").val() != '' && $("#post_odometer").val() != '' &&
                        $("#post_nama_supir1").val() != '' && $("#post_tgl_lahir1").val() != '' && $("#post_no_hp1").val() != '' &&
                        $("#post_no_sim1").val() != '' && $("#post_tgl_berlaku1").val() != '' && $("#post_nama_supir2").val() != '' && $("#post_tgl_lahir2").val() != '' && $("#post_no_hp2").val() != '' && $("#post_no_sim2").val() != '' && $("#post_tgl_berlaku2").val() != '') {
                        const value_data = {
                            'nopol': $("#post_nopol").val(),
                            'kapasitas': $("#post_kapasitas").val(),
                            'odometer': $("#post_odometer").val(),
                            'status': $('#put_status option:selected').attr('id'),
                            // supir 1
                            'nama_supir1': $("#post_nama_supir1").val(),
                            'tgl_lahir1': $("#post_tgl_lahir1").val(),
                            'no_hp1': $("#post_no_hp1").val(),
                            'no_sim1': $("#post_no_sim1").val(),
                            'tahun_berlaku1': $("#post_tgl_berlaku1").val(),
                            // supir 2
                            'nama_supir2': $("#post_nama_supir2").val(),
                            'tgl_lahir2': $("#post_tgl_lahir2").val(),
                            'no_hp2': $("#post_no_hp2").val(),
                            'no_sim2': $("#post_no_sim2").val(),
                            'tahun_berlaku2': $("#post_tgl_berlaku2").val(),
                            'KEY-SPBE': 'SPBE'
                        }
                        console.log(value_data);
                        $.ajax({
                            type: 'POST',
                            url: " <?= base_url() ?>Rest_API/skid_tank",
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded',
                                'Authorization': "Basic " + btoa("gas:gas")
                            },
                            contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                            dataType: 'json',
                            data: value_data,
                            success: function(response) {
                                console.log(response);
                                $(".delete2").hide();
                                $(".put2").hide();
                                $(".tambah2").show();
                                $("#datatable").DataTable().ajax.reload();
                            }
                        });
                    } else {
                        console.log('data ada yang kosong');
                    }
                }

                function put_data() {
                    console.log('put');
                    const value_data = {
                        'kode_skid_tank': kode_skid_tank,
                        'nopol': $("#put_nopol").val(),
                        'kapasitas': $("#put_kapasitas").val(),
                        'odometer': $("#put_odometer").val(),
                        'status': $('#put_status option:selected').attr('id'),
                        // supir 1
                        'kode_supir1': kode_supir1,
                        'nama_supir1': $("#put_nama_supir1").val(),
                        'tgl_lahir1': $("#put_tgl_lahir1").val(),
                        'no_hp1': $("#put_no_hp1").val(),
                        'no_sim1': $("#put_no_sim1").val(),
                        'tahun_berlaku1': $("#put_tgl_berlaku1").val(),
                        // supir 2
                        'kode_supir2': kode_supir2,
                        'nama_supir2': $("#put_nama_supir2").val(),
                        'tgl_lahir2': $("#put_tgl_lahir2").val(),
                        'no_hp2': $("#put_no_hp2").val(),
                        'no_sim2': $("#put_no_sim2").val(),
                        'tahun_berlaku2': $("#put_tgl_berlaku2").val(),
                        'KEY-SPBE': 'SPBE'
                    }
                    console.log(value_data);

                    $.ajax({
                        type: 'PUT',
                        url: " <?= base_url() ?>Rest_API/skid_tank",
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                        dataType: 'json',
                        data: value_data,
                        success: function(response) {
                            console.log(response);
                            $(".delete2").hide();
                            $(".put2").show();
                            $(".tambah2").hide();
                            $("#datatable").DataTable().ajax.reload();
                        }
                    });
                }

                function delete_data(id) {
                    kode_skid_tank = id;
                }

                function delete_fix() {
                    console.log('delete');
                    const value_data = {
                        'kode_skid_tank': kode_skid_tank,
                        'KEY-SPBE': 'SPBE'
                    }
                    console.log(value_data);
                    $.ajax({
                        type: 'DELETE',
                        url: " <?= base_url() ?>Rest_API/skid_tank",
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                        dataType: 'json',
                        data: value_data,
                        success: function(response) {
                            console.log(response);
                            $(".delete2").show();
                            $(".put2").hide();
                            $(".tambah2").hide();
                            $("#datatable").DataTable().ajax.reload();
                        }
                    });
                }
            </script>

</body>

</html>