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

                <div class="col-md-12">
                    <div class="alert alert-info put" style="display: none" role="put">
                        Pengupdatan Data Telah Berhasil
                    </div>
                    <div class="panel panel-colorful">
                        <div class="panel-body">
                            <h2>Profil</h2>
                            <div class="form-group col-md-4">
                                <label>Nama SPBE</label>
                                <input type="text" class="form-control" id="nama_spbe">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Telepone SPBE</label>
                                <input type="" class="form-control" id="telepon_spbe">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Kapasitas TT</label>
                                <input type="" class="form-control" id="kapasitas_tt">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Alamat</label>
                                <textarea class="form-control" rows="5" id="alamat_spbe"></textarea>
                            </div>

                            <div class="form-group col-md-4">
                                <label>DOT</label>
                                <input type="" class="form-control" id="dot" onchange="mychang()">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Limit</label>
                                <input type="" class="form-control" id="limit" disabled>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Jarak</label>
                                <input type="" class="form-control" id="jarak">
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

        function data_spbe() {
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
                    $.ajax({
                        type: 'GET',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        url: " <?= base_url() ?>Rest_API/spbe?KEY-SPBE=SPBE&id=" + id,
                        contentType: "application/json",
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);

                            document.getElementById('namaspbe').innerHTML = response.data[0].nama_spbe;
                            $("#nama_spbe").val(response.data[0].nama_spbe);
                            $("#alamat_spbe").val(response.data[0].alamat_spbe);
                            $("#telepon_spbe").val(response.data[0].telepon_spbe);
                            $("#kapasitas_tt").val(response.data[0].kapasitas_tt);
                            $("#dot").val(response.data[0].dot);
                            $("#limit").val(response.data[0].limit);
                            $("#jarak").val(response.data[0].jarak);
                            $("#username").val(response.data[0].username);
                            $("#password").val(response.data[0].password);
                        }
                    });
                }
            });
        }
        data_spbe();

        function mychang() {
            $("#limit").val($("#dot").val() * 3);
        }

        function put() {
            console.log('put');
            const value_data = {
                'kode_spbe': id, //sesion
                'nama_spbe': $("#nama_spbe").val(),
                'pemilik_spbe': $("#pemilik_spbe").val(),
                'alamat_spbe': $("#alamat_spbe").val(),
                'telepon_spbe': $("#telepon_spbe").val(),
                'kapasitas_tt': $("#kapasitas_tt").val(),
                'dot': $("#dot").val(),
                'limit': $("#limit").val(),
                'jarak': $("#jarak").val(),
                'KEY-SPBE': 'SPBE'
            }
            console.log(value_data);
            $.ajax({
                type: 'PUT',
                url: " <?= base_url() ?>Rest_API/spbe",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                dataType: 'json',
                data: value_data,
                success: function(response) {
                    console.log(response);
                    data_spbe();
                    $(".put").show();
                }
            });

        }
    </script>
</body>

</html>