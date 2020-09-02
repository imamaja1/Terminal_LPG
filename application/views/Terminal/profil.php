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
                <li class="active">Profil</li>
            </ul>
            <!-- END BREADCRUMB -->



            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="col-md-12">
                    <div class="alert alert-info put" style="display: none" role="put">
                        Pengupdatan Data Telah Berhasil
                    </div>
                    <div class="panel panel-colorful">
                        <div class="panel-body">
                            <h2>Profil</h2>
                            <div class="form-group col-md-6">
                                <label>Nama Terminal</label>
                                <input type="text" class="form-control" id="nama_terminal">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Telepone Terminal</label>
                                <input type="" class="form-control" id="telepon_terminal">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Alamat Terminal</label>
                                <textarea class="form-control" rows="5" id="alamat_terminal"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Username</label>
                                <input type="" class="form-control" id="username">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Password</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary pull-right" onclick="put()">Submit</button>
                        </div>
                    </div>

                </div>


            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->





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
    <!-- END PAGE PLUGINS -->
    <!-- START TEMPLATE -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/actions.js"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    <script type="text/javascript">
        var id;
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
                console.log(response);
                id = response.kode_terminal;
                $.ajax({
                    type: 'GET',
                    url: " <?= base_url() ?>Rest_API/Terminal_lpg?id=" + id + "&KEY-SPBE=SPBE",
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'Authorization': "Basic " + btoa("gas:gas")
                    },
                    contentType: "application/json",
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        $("#nama_terminal").val(response.data[0].nama_terminal);
                        $("#telepon_terminal").val(response.data[0].telepon_terminal);
                        $("#alamat_terminal").val(response.data[0].alamat_terminal);
                        $("#username").val(response.data[0].username);
                        $("#password").val(response.data[0].password);
                    }
                });
            }
        })


        function put() {
            console.log('put');
            const value_data = {
                'kode_terminal': id, //sesion
                'nama_terminal': $("#nama_terminal").val(),
                'telepon_terminal': $("#telepon_terminal").val(),
                'alamat_terminal': $("#alamat_terminal").val(),
                'username': $("#username").val(), //sesion
                'password': $("#password").val(), //sesion
                'KEY-SPBE': 'SPBE'
            }

            console.log(value_data);
            $.ajax({
                type: 'PUT',
                url: " <?= base_url() ?>Rest_API/Terminal_lpg",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                dataType: 'json',
                data: value_data,
                success: function(response) {
                    console.log(response);
                    $(".put").show();
                    $.ajax({
                        type: 'GET',
                        url: " <?= base_url() ?>Rest_API/Terminal_lpg?id=" + id + "&KEY-SPBE=SPBE",
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        contentType: "application/json",
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            $("#nama_terminal").val(response.data[0].nama_terminal);
                            $("#telepon_terminal").val(response.data[0].telepon_terminal);
                            $("#alamat_terminal").val(response.data[0].alamat_terminal);
                            $("#username").val(response.data[0].username);
                            $("#password").val(response.data[0].password);
                        }
                    });
                }
            });

        }
    </script>
</body>

</html>