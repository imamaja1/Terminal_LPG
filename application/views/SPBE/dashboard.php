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
                <div class="col-md-6">
                    <div class="panel panel-default" style="max-height:250px; overflow-y:auto;">
                        <div class="panel-heading">
                            <h3 class="panel-title">Konfirmasi Skid Tank</h3>
                        </div>

                        <div class="panel-body">
                            <div class="row stacked">
                                <div id="Ferivikasi"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default" style="max-height:250px; overflow-y:auto;">
                        <div class="panel-heading">
                            <div class="panel-title-box">
                                <h3>Permintaan</h3>
                                <span>Progres Permintaan</span>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row stacked">
                                <div class="col-md-12">
                                    <div id="progres"></div>

                                </div>
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

    <!-- verifikasi -->
    <div class="modal fade" id="verifikasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body" style="text-align: center;">
                    <h2 class="modal-title" id="exampleModalLabel"> Yakin Ingin Mengkonfirmasi ?</h2>
                    <br>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="margin: 0 10% 0 0;">NO</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin: 0 0 0 10%;" onclick="verifikasi()">YES</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="timeline" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="timeline2">
                                <div class="line text-muted"></div>
                                <article class="panel panel-info panel-outline"></article>
                                <div id="datatimeline"></div>
                                <div class="separator text-muted"><time>.</time></div>
                                <div class="separator text-muted"><time></time></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary pull-right" data-dismiss="modal" style="margin: 0 0 0 0;">close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- START PRELOADS -->
    <audio id="audio-alert" src="<?= base_url() ?>assets/audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="<?= base_url() ?>assets/audio/fail.mp3" preload="auto"></audio>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/moment.min.js"></script>
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
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/morris/raphael-min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/morris/morris.min.js"></script>
    <!-- END PAGE PLUGINS -->
    <!-- START TEMPLATE -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/actions.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>preload/code.js"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    <script type="text/javascript">
        var kode_permintaan;
        var tgl;
        var id;

        function kode3(kode, jum) {
            document.getElementById('datatimeline').innerHTML = null;
            $.ajax({
                type: 'GET',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                url: " <?= base_url() ?>Rest_API/permintaan?KEY-SPBE=SPBE&id=" + kode,
                contentType: "application/json",
                dataType: 'json',
                success: function(response) {
                    if (jum > 1) {
                        document.getElementById('datatimeline').innerHTML += ' <article class="panel panel-info panel-outline"><div class="panel-heading icon"><i class="glyphicon glyphicon-info-sign"></i></div><div class="panel-body">' + response.data[0].tgl + '<br><strong>Pemintaan Skid Tank</strong> dari <strong>SPBE</strong>.</div></article>';
                        if (jum > 2) {
                            document.getElementById('datatimeline').innerHTML += ' <article class="panel panel-info panel-outline"><div class="panel-heading icon"><i class="glyphicon glyphicon-info-sign"></i></div><div class="panel-body">' + response.data[0].tgl_berangkat_tujuan + '<br><strong>Verifikasi Perminaan Skid Tank</strong> <br>oleh <strong>Patra Niaga</strong>.</div></article>';
                            if (jum > 3) {
                                document.getElementById('datatimeline').innerHTML += '<article class="panel panel-info panel-outline"><div class="panel-heading icon"><i class="glyphicon glyphicon-info-sign"></i></div><div class="panel-body">' + response.data[0].tgl_berangkat_tujuan + '<br> Proses <strong>Skid Tank Berangkat</strong>.</div></article>';
                                if (jum > 4) {
                                    document.getElementById('datatimeline').innerHTML += '<article class="panel panel-info panel-outline"><div class="panel-heading icon"><i class="glyphicon glyphicon-info-sign"></i></div><div class="panel-body">' + response.data[0].tgl_sampai_tujuan + '<br> Proses <strong>Skid Tank Berangkat</strong>.</div></article>'
                                    if (jum > 5) {
                                        document.getElementById('datatimeline').innerHTML += '<article class="panel panel-info panel-outline"><div class="panel-heading icon"><i class="glyphicon glyphicon-info-sign"></i></div><div class="panel-body">' + response.data[0].tgl_kembali + '<br> Proses <strong>Skid Tank Berangkat</strong>.</div></article>'
                                    }
                                }
                            }
                        }
                    }
                }

            })


        }

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
                data_permintaan(id)
                data_permintaan2(id)
                document.getElementById('namaspbe').innerHTML = response.nama_spbe;
            }
        })

        function data_permintaan(id) {
            $.ajax({
                type: 'GET',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                url: " <?= base_url() ?>Rest_API/permintaan_spbe?KEY-SPBE=SPBE&id=" + id,
                contentType: "application/json",
                dataType: 'json',
                success: function(response) {
                    document.getElementById('Ferivikasi').innerHTML = null;
                    if (response.status) {
                        $.each(response.data, function(i) {
                            if (response.data[i].status_permintaan != '2') {
                                document.getElementById('Ferivikasi').innerHTML += '<div class="panel-body list-group list-group-contacts"><a href="#" class="list-group-item"><span class="contacts-title">Skid Tank Dengan Nomer Polisi ' + response.data[i].nopol + '</span><table><tr><td style="padding: 2px;"> No SPA </td><td style="padding: 2px;"> : </td><td style="padding: 2px;"> ' + response.data[i].no_spa + ' </td></tr><tr><td style="padding: 2px;">Tanggal SPA </td><td style="padding: 2px;"> : </td><td style="padding: 2px;">' + response.data[i].tgl_spa + '</td></tr><tr><td style="padding: 2px;">Kapasitas TT </td><td style="padding: 2px;"> : </td><td style="padding: 2px;">' + response.data[i].kapasitas + '</td></tr></table><div class="list-group-controls"><button class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#verifikasi" onclick="kode(' + response.data[i].kode_permintaan + ')">Konfirmasi</button></div></a></div>';
                            }
                        });
                    }
                }
            });
        }

        function data_permintaan2(id) {
            var time;
            $.ajax({
                type: 'GET',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                url: " <?= base_url() ?>Rest_API/permintaan_spbe/permintaan?KEY-SPBE=SPBE&id=" + id,
                contentType: "application/json",
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    document.getElementById('progres').innerHTML = null;
                    if (response.status) {
                        var x = new Date(new Date().toLocaleString('en-US', {
                            timeZone: 'Asia/Jakarta'
                        }));
                        var times = moment(x.getFullYear() + '-' + (x.getMonth() + 1) + '-' + x.getDate() + ' ' + x.getHours() + ':' + x.getMinutes() + ':' + x.getSeconds());
                        $.each(response.data, function(i) {
                            if (response.data[i].status_permintaan != '2') {
                                if (response.data[i].status_patra_niaga == '2') {
                                    if (moment(response.data[i].tgl_berangkat_tujuan) < times) {
                                        if (moment(response.data[i].tgl_berangkat_tujuan) < moment(response.data[i].tgl_sampai_tujuan)) {
                                            document.getElementById('progres').innerHTML += '<div class="progress-list"><button class="btn btn-primary btn-rounded pull-right" data-toggle="modal" data-target="#timeline" onclick="kode3(' + response.data[i].kode_permintaan + ',5)">Time Line</button><div class="pull-left"><strong>' + response.data[i].nama_spbe + '</strong></div><br><div class="pull"><span class="text-info">Skdi Tank di Tujuan</span></div><div class="pull-right">100%</div><div class="progress progress-small progress-striped active"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div></div></div>'
                                        } else {
                                            document.getElementById('progres').innerHTML += '<div class="progress-list"><button class="btn btn-primary btn-rounded pull-right" data-toggle="modal" data-target="#timeline" onclick="kode3(' + response.data[i].kode_permintaan + ',4)">Time Line</button><div class="pull-left"><strong>' + response.data[i].nama_spbe + '</strong></div><br><div class="pull"><span class="text-info">Proses Perjalan Menuju Tujuan</span></div><div class="pull-right">70%</div><div class="progress progress-small progress-striped active"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">70%</div></div></div>'
                                        }
                                    } else {
                                        document.getElementById('progres').innerHTML += '<div class="progress-list"><button class="btn btn-primary btn-rounded pull-right" data-toggle="modal" data-target="#timeline" onclick="kode3(' + response.data[i].kode_permintaan + ',3)">Time Line</button><div class="pull-left"><strong>' + response.data[i].nama_spbe + '</strong></div><br><div class="pull"><span class="text-info">Proses Berangakt Menuju Tujuan</span></div><div class="pull-right">20%</div><div class="progress progress-small progress-striped active"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div></div></div>'
                                    }
                                } else if (response.data[i].status_patra_niaga == '1') {
                                    document.getElementById('progres').innerHTML += '<div class="progress-list"><button class="btn btn-primary btn-rounded pull-right" data-toggle="modal" data-target="#timeline" onclick="kode3(' + response.data[i].kode_permintaan + ',2)">Time Line</button><div class="pull-left"><strong>' + response.data[i].nama_spbe + '</strong></div><br><div class="pull"><span class="text-info">Permintaan Verifikasi Patra Niaga</span></div><div class="pull-right">30%</div><div class="progress progress-small progress-striped active"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">30%</div></div></div>'
                                }
                            }
                        });
                    }
                }
            })
        }

        function kode(data) {
            kode_permintaan = data;
        }

        function verifikasi() {
            const value_data = {
                'kode_permintaan': kode_permintaan,
                'KEY-SPBE': 'SPBE'
            }
            $.ajax({
                type: 'put',
                url: " <?= base_url() ?>Rest_API/permintaan_spbe",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                dataType: 'json',
                data: value_data,
                success: function(response) {
                    data_permintaan(id);
                    data_permintaan2(id);
                }
            });
        }
    </script>
</body>

</html>