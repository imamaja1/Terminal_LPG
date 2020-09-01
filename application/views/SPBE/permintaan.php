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
            <?php $this->load->view('SPBE/side'); ?>
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
                <li class="active"><?= $side ?></li>
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


                        <!-- START DEFAULT DATATABLE -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#inputdata" onclick="cek()">Input Data</button>
                                <ul class="panel-controls">
                                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <table id="datatable" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NO SPA</th>
                                            <th>Tanggal SPA</th>
                                            <th>Stock</th>
                                            <th>NOPOL</th>
                                            <th>Status Patra Niaga</th>
                                            <th>Ket</th>
                                            <th>Action</th>
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
                            <h3 class="modal-title" id="exampleModalLabel">Input Permintaan</h3>
                        </div>
                        <div class="modal-body col-md-12">

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Nomor SPA</label>
                                <input type="" class="form-control" id="post_no_spa" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">TGL SPA</label>
                                <input type="date" class="form-control" id="post_tgl_spa" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Sisa Stock</label>
                                <input type="" class="form-control" id="post_stock">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">NOPOL</label>
                                <input type="" class="form-control" id="post_nopol" aria-describedby="emailHelp" value="Patra Niaga" disabled>
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

            <!-- Delete Data-->
            <div class="modal fade" id="deletedata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                        </div>
                        <div class="modal-body" style="text-align: center;">
                            <h2 class="modal-title" id="exampleModalLabel"> Yakin Ingin Menghapus ?</h2>
                            <br>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin: 0 10% 0 0;">NO</button>
                            <button type="button" class="btn btn-info" data-dismiss="modal" style="margin: 0 0 0 10%;" onclick="delete_fix()">YES</button>
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
                var id;
                var kode_permintaan;
                var limit;
                $.ajax({
                    type: 'GET',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'Authorization': "Basic " + btoa("gas:gas")
                    },
                    url: " <?= base_url() ?>Rest_API/auth?KEY-SPBE=SPBE",
                    contentType: "application/json",
                    dataType: 'json',
                    success: function(response) {
                        id = response.kode_spbe
                        limit = response.limit
                        document.getElementById('namaspbe').innerHTML = response.nama_spbe;
                    }
                })
                $('#datatable').DataTable({
                    distroy: true,
                    ajax: {
                        "method": "GET",
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        "url": "<?= base_url() ?>/Rest_API/permintaan?KEY-SPBE=SPBE"
                    },
                    columns: [{
                        data: null
                    }, {
                        data: "no_spa"
                    }, {
                        data: "tgl_spa"
                    }, {
                        data: "stock"
                    }, {
                        data: "nopol"
                    }, {
                        data: "status_patra_niaga",
                        className: "center",
                        render: function(data, type, row, meta) {
                            if (data == '1') {
                                return '<span class="label label-default">Waiting ..</span>';
                            } else if (data == '2') {
                                return '<span class="label label-info">Diverifikasi</span>'
                            } else if (data == '3') {
                                return '<span class="label label-danger">Ditolak</span>'
                            }
                        }
                    }, {
                        data: null,
                        className: "center",
                        render: function(data, type, row, meta) {
                            if (row['status_patra_niaga'] == 2) {
                                if (row['status_permintaan'] == 1) {
                                    return '<span class="label label-default">Skid Tank diperjalanan </span>'
                                } else {
                                    return '<span class="label label-info">Skid Tank Telah Sampai</span>'
                                }
                            } else if (row['status_patra_niaga'] == 1) {
                                return '<span class="label label-default">Waiting ..</span>';
                            } else {
                                return '<span class="label label-danger">Permintaan Ditolak</span>'
                            }
                        }
                    }, {
                        data: null,
                        className: "center",
                        render: function(data, type, row, meta) {
                            if (row['kode_skid_tank'] == 0) {
                                return '<div class="btn-group"><button class="btn btn-info" data-toggle="modal" data-target="#viewdata" onclick="view_data(' + data + ')" disabled><span class="fa fa-eye"></span></button><button class="btn btn-danger" data-toggle="modal" data-target="#deletedata" onclick="delete_data(' + row['kode_permintaan'] + ')"><span class="fa fa-trash-o"></span></button></div>'
                            } else {
                                return '<div class="btn-group"><button class="btn btn-info" data-toggle="modal" data-target="#viewdata" onclick="view_data(' + row['kode_skid_tank'] + ')"><span class="fa fa-eye"></span></button><button class="btn btn-danger" data-toggle="modal" data-target="#deletedata" onclick="delete_data(' + row['kode_permintaan'] + ')" disabled><span class="fa fa-trash-o"></span></button></div>'
                            }
                        }
                    }, ],
                    "fnCreatedRow": function(row, data, index) {
                        $('td', row).eq(0).html(index + 1);
                    },
                });

                function cek() {
                    $.ajax({
                        type: 'GET',
                        url: " <?= base_url() ?>Rest_API/cek_permintaan?KEY-SPBE=SPBE&id" + id,
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        dataType: 'json',
                        success: function(response) {
                            if (response.data * 13 > limit) {
                                $("#post_no_spa").prop('disabled', true);
                                $("#post_tgl_spa").prop('disabled', true);
                                $("#post_stock").prop('disabled', true);
                                $("#post_nopol").prop('disabled', true);
                            }
                        }
                    });
                }

                function post_data() {
                    console.log('post');
                    const value_data = {
                        'no_spa': $("#post_no_spa").val(),
                        'tgl_spa': $("#post_tgl_spa").val(),
                        'stock': $("#post_stock").val(),
                        'nopol': $("#post_nopol").val(),
                        'kode_spbe': id,
                        'KEY-SPBE': 'SPBE'
                    }
                    console.log(value_data);
                    $.ajax({
                        type: 'POST',
                        url: " <?= base_url() ?>Rest_API/permintaan",
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        dataType: 'json',
                        data: value_data,
                        success: function(response) {
                            console.log(response);
                            $(".delete").hide();
                            $(".tambah").show();
                            $(".put").hide();
                            $("#datatable").DataTable().ajax.reload();
                        }
                    });
                }

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
                        }
                    });
                }

                function delete_data(id) {
                    console.log(id);
                    kode_permintaan = id;
                }

                function delete_fix() {
                    console.log('delete');
                    const value_data = {
                        'kode_permintaan': kode_permintaan,
                        'KEY-SPBE': 'SPBE'
                    }
                    console.log(value_data);
                    $.ajax({
                        type: 'DELETE',
                        url: " <?= base_url() ?>Rest_API/permintaan",
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                        dataType: 'json',
                        data: value_data,
                        success: function(response) {
                            console.log(response);
                            $(".delete").show();
                            $(".tambah").hide();
                            $(".put").hide();
                            $("#datatable").DataTable().ajax.reload();
                        }
                    });
                }
            </script>

</body>

</html>