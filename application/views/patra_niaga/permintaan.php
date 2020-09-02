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
                <li class="active">Terminal</li>
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
                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#inputdata">Input Data</button>
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
                                            <th>Nama supir</th>
                                            <th>Telepone supir</th>
                                            <th>Alamat supir</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Nama </td>
                                            <td>0988</td>
                                            <td>Alamat supir</td>
                                            <td>
                                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#inputdata">View</button>
                                                <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#inputdata">Update</button>
                                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deletedata">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
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
                            <h3 class="modal-title" id="exampleModalLabel">View Data</h3>
                        </div>
                        <div class="modal-body col-md-12" style="background-color: white;">

                            <div class="form-group col-md-6 border border-primary">
                                <label for="exampleInputEmail1">Nama Patra Niaga</label>
                                <br>
                                <span id="view_nama_patra_niaga"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-6 border border-primary">
                                <label for="exampleInputEmail1">Telepon Patra Niaga</label>
                                <br>
                                <span id="view_telepon_patra_niaga"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-12 border border-primary">
                                <label for="exampleInputEmail1">Alamat Patra Niaga</label>
                                <br>
                                <span id="view_alamat_patra_niaga"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-6 border border-primary">
                                <label for="exampleInputEmail1 ">Username</label>
                                <br>
                                <span id="view_username"></span>
                                <hr>
                            </div>
                            <div class="form-group col-md-6 border border-primary">
                                <label for="exampleInputEmail1">Password</label>
                                <br>
                                <span id="view_password"></span>
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
                            <h3 class="modal-title" id="exampleModalLabel">Input Data</h3>
                        </div>
                        <div class="modal-body col-md-12">

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Nama Supir</label>
                                <input type="" class="form-control" id="post_nama_patra_niaga" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Telepone Supir</label>
                                <input type="" class="form-control" id="post_telepon_patra_niaga" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Alamat Supir</label>
                                <textarea class="form-control" id="post_alamat_patra_niaga"></textarea>
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
                            <h3 class="modal-title" id="exampleModalLabel">Update Data</h3>
                        </div>
                        <div class="modal-body col-md-12">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Nama Patra Niaga</label>
                                <input type="" class="form-control" id="put_nama_patra_niaga" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Telepone Terminal</label>
                                <input type="" class="form-control" id="put_telepon_patra_niaga" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Alamat Terminal</label>
                                <textarea class="form-control" id="put_alamat_patra_niaga"></textarea>
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
                var kode_patra_niaga;
                $('#datatable').DataTable({
                    distroy: true,
                    ajax: {
                        "method": "GET",
                        "url": "<?= base_url() ?>/Rest_api/patra_niaga"
                    },
                    columns: [{
                            data: null
                        }, {
                            data: "nama_patra_niaga"
                        },
                        {
                            data: "telepon_patra_niaga"
                        },
                        {
                            data: "alamat_patra_niaga"
                        },
                        {
                            data: "kode_patra_niaga",
                            className: "center",
                            render: function(data, type, row, meta) {
                                return '<div class="btn-group"><button class="btn btn-success" data-toggle="modal" data-target="#viewdata" onclick="view_data(' + data + ')">View</button><button class="btn btn-info" data-toggle="modal" data-target="#updatedata" onclick="view_data(' + data + ')">Update</button><button class="btn btn-danger" data-toggle="modal" data-target="#deletedata" onclick="delete_data(' + data + ')">Delete</button></div>';
                            }
                        },
                    ],
                    "fnCreatedRow": function(row, data, index) {
                        $('td', row).eq(0).html(index + 1);
                    },
                });


                function post_data() {
                    console.log('post');
                    const value_data = {
                        'nama_patra_niaga': $("#post_nama_patra_niaga").val(),
                        'telepon_patra_niaga': $("#post_telepon_patra_niaga").val(),
                        'alamat_patra_niaga': $("#post_alamat_patra_niaga").val(),
                        'username': $("#post_username").val(),
                        'password': $("#post_password").val()
                    }
                    console.log(value_data);
                    $.ajax({
                        type: 'POST',
                        url: " <?= base_url() ?>Rest_API/patra_niaga",
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                        dataType: 'json',
                        data: value_data,
                        success: function(response) {
                            console.log(response.message);
                            $(".tambah").show();
                            $("#datatable").DataTable().ajax.reload();
                        }
                    });
                }

                function view_data(id) {
                    console.log('view' + ' ' + id);
                    $.ajax({
                        type: 'GET',
                        url: " <?= base_url() ?>Rest_API/patra_niaga?id=" + id,
                        contentType: "application/json",
                        dataType: 'json',
                        success: function(response) {
                            $("#view_nama_patra_niaga").text(response.data[0].nama_patra_niaga);
                            $("#view_telepon_patra_niaga").text(response.data[0].telepon_patra_niaga);
                            $("#view_alamat_patra_niaga").text(response.data[0].alamat_patra_niaga);
                            $("#view_username").text(response.data[0].username);
                            $("#view_password").text(response.data[0].password);

                            kode_patra_niaga = response.data[0].kode_patra_niaga;
                            $("#put_nama_patra_niaga").val(response.data[0].nama_patra_niaga);
                            $("#put_telepon_patra_niaga").val(response.data[0].telepon_patra_niaga);
                            $("#put_alamat_patra_niaga").val(response.data[0].alamat_patra_niaga);
                            $("#put_username").val(response.data[0].username);
                            $("#put_password").val(response.data[0].password);

                        }
                    });
                }

                function put_data() {
                    console.log('put');
                    const value_data = {
                        'kode_patra_niaga': kode_patra_niaga,
                        'nama_patra_niaga': $("#put_nama_patra_niaga").val(),
                        'telepon_patra_niaga': $("#put_telepon_patra_niaga").val(),
                        'alamat_patra_niaga': $("#put_alamat_patra_niaga").val(),
                        'username': $("#put_username").val(),
                        'password': $("#put_password").val()
                    }
                    $.ajax({
                        type: 'PUT',
                        url: " <?= base_url() ?>Rest_API/patra_niaga",
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
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

                function delete_data(id) {
                    kode_patra_niaga = id;
                }

                function delete_fix() {
                    console.log('delete');
                    const value_data = {
                        'kode_patra_niaga': kode_patra_niaga,
                    }
                    console.log(value_data);
                    $.ajax({
                        type: 'DELETE',
                        url: " <?= base_url() ?>Rest_API/patra_niaga",
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                        dataType: 'json',
                        data: value_data,
                        success: function(response) {
                            console.log(response.message);
                            $(".delete").show();
                            $("#datatable").DataTable().ajax.reload();
                        }
                    });
                }
            </script>

</body>

</html>