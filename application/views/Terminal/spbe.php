<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('Terminal/head'); ?>
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
                <li class="active">SPBE</li>
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
                            <div class="panel-body table-responsive push-up-10">
                                <table id="datatable" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama SPBE</th>
                                            <th>No Telepon</th>
                                            <th>DOT</th>
                                            <th>Kapasitas TT</th>
                                            <th style="width: 20px;">Action </th>
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
                            <h3 class="modal-title" id="exampleModalLabel">Data SPBE</h3>
                        </div>
                        <div class="modal-body col-md-12" style="background-color: white;">

                            <div class="form-group col-md-6 border border-primary">
                                <label for="exampleInputEmail1">Nama SPBE</label>
                                <br>
                                <span id="view_nama_spbe"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-6 border border-primary">
                                <label for="exampleInputEmail1">No Telepon</label>
                                <br>
                                <span id="view_telepon_spbe"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-6 border border-primary">
                                <label for="exampleInputEmail1">Kapasitas TT</label>
                                <br>
                                <span id="view_kapasitas_tt"></span>
                                <hr>
                            </div>

                            <div class="form-group col-md-4 border border-primary">
                                <label for="exampleInputEmail1">Jarak SPBE</label>
                                <br>
                                <span id="view_jarak"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-12 border border-primary">
                                <label for="exampleInputEmail1">Alamat SPBE</label>
                                <br>
                                <span id="view_alamat_spbe"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-6 border border-primary">
                                <label for="exampleInputEmail1">DOT</label>
                                <br>
                                <span id="view_dot"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-6 border border-primary">
                                <label for="exampleInputEmail1">Limit</label>
                                <br>
                                <span id="view_limit"></span>
                                <hr>
                            </div>
                        </div>
                        <div class="modal-footer" style="background-color: white;">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
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
                            <h3 class="modal-title" id="exampleModalLabel">Input Data SPBE</h3>
                        </div>
                        <div class="modal-body col-md-12">

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Nama SPBE</label>
                                <input type="" class="form-control" id="post_name_spbe" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">No Telepon</label>
                                <input type="" class="form-control" id="post_telepon_spbe" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Kapasitas TT</label>
                                <input type="" class="form-control" id="post_kapasitas_tt" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Jarak SPBE</label>
                                <input type="" class="form-control" id="post_jarak" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Alamat SPBE</label>
                                <textarea class="form-control" id="post_alamat_spbe"></textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">DOT</label>
                                <input type="" class="form-control" onchange="myFunction()" id="post_dot" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Kali DOT</label>
                                <input type="" class="form-control" onchange="myFunction()" id="post_kali_dot" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Limit</label>
                                <input type="" class="form-control" id="post_limit" aria-describedby="emailHelp" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="" class="form-control" id="post_username" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" id="post_password" aria-describedby="emailHelp">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-info" data-dismiss="modal" onclick="post_data()">Simpan</button>
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
                            <h3 class="modal-title" id="exampleModalLabel">Update Data SPBE</h3>
                        </div>
                        <div class="modal-body col-md-12">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Nama SPBE</label>
                                <input type="" class="form-control" id="put_nama_spbe" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Telepone SPBE</label>
                                <input type="" class="form-control" id="put_telepon_spbe" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Kapasitas TT</label>
                                <input type="" class="form-control" id="put_kapasitas_tt" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Jarak SPBE</label>
                                <input type="" class="form-control" id="put_jarak" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Alamat SPBE</label>
                                <textarea class="form-control" id="put_alamat_spbe"></textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">DOT</label>
                                <input type="" class="form-control" onchange="myFunction()" id="put_dot" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">DOT</label>
                                <input type="" class="form-control" onchange="myFunction()" id="put_kali_dot" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Limit</label>
                                <input type="" class="form-control" id="put_limit" aria-describedby="emailHelp" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="" class="form-control" id="put_username" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">password</label>
                                <input type="password" class="form-control" id="put_password" aria-describedby="emailHelp">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-info" data-dismiss="modal" onclick="put_data()">Update</button>
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
            <script type="text/javascript" src="<?= base_url() ?>preload/code.js"></script>
            <!-- END TEMPLATE -->
            <!-- END SCRIPTS -->
            <script>
                var kode_spbe;
                var password;
                $('#datatable').DataTable({
                    distroy: true,
                    ajax: {
                        "method": "GET",
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        "url": "<?= base_url() ?>/Rest_API/spbe?KEY-SPBE=SPBE"
                    },
                    columns: [{
                        data: null
                    }, {
                        data: "nama_spbe"
                    }, {
                        data: "telepon_spbe"
                    }, {
                        data: "dot"
                    }, {
                        data: "kapasitas_tt"
                    }, {
                        data: "kode_spbe",
                        className: "center",
                        render: function(data, type, row, meta) {
                            return '<div class="form-group"><div class="col-md-12"><button class="btn btn-success btn-block" data-toggle="modal" data-target="#viewdata" onclick="view_data(' + data + ')"><span class="fa fa-eye"></span></button></div><div class="col-md-12"><button class="btn btn-info btn-block" data-toggle="modal" data-target="#updatedata" onclick="view_data(' + data + ')"><span class="fa fa-cog"></span></button></div><div class="col-md-12"><button class="btn btn-danger btn-block" data-toggle="modal" data-target="#deletedata" onclick="delete_data(' + data + ')"><span class="fa fa-trash-o"></span></button></div></div>'
                        }
                    }, ],
                    "fnCreatedRow": function(row, data, index) {
                        $('td', row).eq(0).html(index + 1);
                    },
                });

                function myFunction() {
                    $("#post_limit").val($("#post_dot").val() * $("#post_kali_dot").val());
                    $("#put_limit").val($("#put_dot").val() * $("#put_kali_dot").val());
                }

                function post_data() {
                    console.log('post');
                    const value_data = {
                        'nama_spbe': $("#post_name_spbe").val(),
                        'telepon_spbe': $("#post_telepon_spbe").val(),
                        'alamat_spbe': $("#post_alamat_spbe").val(),
                        'kapasitas_tt': $("#post_kapasitas_tt").val(),
                        'dot': $("#post_dot").val(),
                        'jarak': $("#post_jarak").val(),
                        'limit': $("#post_limit").val(),
                        'username': $("#post_username").val(),
                        'password': $("#post_password").val(),
                        'KEY-SPBE': 'SPBE'
                    }
                    console.log(value_data);
                    $.ajax({
                        type: 'POST',
                        url: " <?= base_url() ?>Rest_API/SPBE",
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        dataType: 'json',
                        data: value_data,
                        success: function(response) {
                            console.log(response);
                            $(".put").hide();
                            $(".delete").hide();
                            $(".tambah").show();
                            $("#datatable").DataTable().ajax.reload();
                        }
                    });
                }

                function view_data(id) {
                    $.ajax({
                        type: 'GET',
                        url: " <?= base_url() ?>Rest_API/spbe?KEY-SPBE=SPBE&id=" + id,
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        contentType: "application/json",
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            $("#view_nama_spbe").text(response.data[0].nama_spbe);
                            $("#view_telepon_spbe").text(response.data[0].telepon_spbe);
                            $("#view_alamat_spbe").text(response.data[0].alamat_spbe);
                            $("#view_kapasitas_tt").text(response.data[0].kapasitas_tt);
                            $("#view_jarak").text(response.data[0].jarak);
                            $("#view_dot").text(response.data[0].dot);
                            $("#view_limit").text(response.data[0].limit);
                            kode_spbe = response.data[0].kode_spbe;

                            $("#put_nama_spbe").val(response.data[0].nama_spbe);
                            $("#put_telepon_spbe").val(response.data[0].telepon_spbe);
                            $("#put_alamat_spbe").val(response.data[0].alamat_spbe);
                            $("#put_kapasitas_tt").val(response.data[0].kapasitas_tt);
                            $("#put_jarak").val(response.data[0].jarak);
                            $("#put_dot").val(response.data[0].dot);
                            $("#put_kali_dot").val(response.data[0].limit / response.data[0].dot);
                            $("#put_limit").val(response.data[0].limit);
                            $("#put_username").val(response.data[0].username);
                            $("#put_password").val(response.data[0].password);
                            password = response.data[0].password;
                        }
                    });
                }

                function put_data() {
                    console.log('put');
                    var value_data;
                    if ($("#put_password").val() == password) {
                        value_data = {
                            'kode_spbe': kode_spbe,
                            'nama_spbe': $("#put_nama_spbe").val(),
                            'telepon_spbe': $("#put_telepon_spbe").val(),
                            'alamat_spbe': $("#put_alamat_spbe").val(),
                            'kapasitas_tt': $("#put_kapasitas_tt").val(),
                            'dot': $("#put_dot").val(),
                            'jarak': $("#put_jarak").val(),
                            'limit': $("#put_limit").val(),
                            'username': $("#put_username").val(),
                            'password': 'false',
                            'KEY-SPBE': 'SPBE'
                        }
                    } else {
                        value_data = {
                            'kode_spbe': kode_spbe,
                            'nama_spbe': $("#put_nama_spbe").val(),
                            'telepon_spbe': $("#put_telepon_spbe").val(),
                            'alamat_spbe': $("#put_alamat_spbe").val(),
                            'kapasitas_tt': $("#put_kapasitas_tt").val(),
                            'dot': $("#put_dot").val(),
                            'jarak': $("#put_jarak").val(),
                            'limit': $("#put_limit").val(),
                            'username': $("#put_username").val(),
                            'password': $("#put_password").val(),
                            'KEY-SPBE': 'SPBE'
                        }
                    }
                    $.ajax({
                        type: 'PUT',
                        url: " <?= base_url() ?>Rest_API/SPBE",
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        dataType: 'json',
                        data: value_data,
                        success: function(response) {
                            console.log(response);
                            $(".put").show();
                            $(".delete").hide();
                            $(".tambah").hide();
                            $("#datatable").DataTable().ajax.reload();
                        }
                    });
                }

                function delete_data(id) {
                    kode_SPBE = id;
                }

                function delete_fix() {
                    console.log('delete');
                    const value_data = {
                        'kode_SPBE': kode_SPBE,
                        'KEY-SPBE': 'SPBE'
                    }
                    console.log(value_data);
                    $.ajax({
                        type: 'DELETE',
                        url: " <?= base_url() ?>Rest_API/spbe",
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        dataType: 'json',
                        data: value_data,
                        success: function(response) {
                            console.log(response.message);
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