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
                <li class="active"><?= $side ?></li>
            </ul>
            <!-- END BREADCRUMB -->



            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="col-md-9">
                    <div class="panel panel-default" style="max-height:250px; overflow-y:auto;">
                        <div class="panel-heading">
                            <div class="panel-title-box">
                                <h3>Skid Tank</h3>
                                <span>Progres Skid Tank</span>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row stackde">
                                <div class="col-md-12">
                                    <div id="progres"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- START WIDGET CLOCK -->
                    <div class="widget widget-info widget-padding-sm">
                        <div class="widget-big-int plugin-clock">00:00</div>
                        <div class="widget-subtitle plugin-date">Loading...</div>
                        <div class="widget-controls">
                            <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                        </div>
                        <div class="widget-buttons widget-c3">
                            <div class="col">
                                <a href="#"><span class="fa fa-clock-o"></span></a>
                            </div>
                            <div class="col">
                                <a href="#"><span class="fa fa-bell"></span></a>
                            </div>
                            <div class="col">
                                <a href="#"><span class="fa fa-calendar"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- START WIDGET REGISTRED -->
                    <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
                        <div class="widget-item-left">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="widget-data">
                            <div class="widget-int num-count">375</div>
                            <div class="widget-title">User Pengguna Aplikasi </div>
                            <div class="widget-subtitle">blum active</div>
                        </div>
                        <div class="widget-controls">
                            <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title-box">
                            <h3>Aktivitas Truk</h3>
                        </div>
                        <ul class="panel-controls" style="margin-top: 2px;">
                            <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body padding-0">
                        <div class="chart-holder" id="dashboard-bar-1" style="height: 300px;"></div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title-box">
                            <h3>Aktifitas SPBE</h3>
                        </div>
                        <ul class="panel-controls" style="margin-top: 2px;">
                            <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body padding-0">
                        <div class="chart-holder" id="dashboard-bar-2" style="height: 300px;"></div>
                    </div>
                </div>
            </div> -->
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
                    <h2 class="modal-title" id="exampleModalLabel"> Yakin Ingin Memverifikasi ?</h2>
                    <br>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="margin: 0 10% 0 0;">NO</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin: 0 0 0 10%;" onclick="verifikasi()">YES</button>
                </div>
            </div>
        </div>
    </div>
    <!-- tolak -->
    <div class="modal fade" id="tolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body" style="text-align: center;">
                    <h2 class="modal-title" id="exampleModalLabel"> Yakin Ingin Menolak ?</h2>
                    <br>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="margin: 0 10% 0 0;">NO</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin: 0 0 0 10%;" onclick="tolak()">YES</button>
                </div>
            </div>
        </div>
    </div>

    <!-- percepatan -->
    <div class="modal fade" id="percepatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body" style="text-align: center;">
                    <h2 class="modal-title" id="exampleModalLabel"> Yakin Ingin Melakukan Percepatan ?</h2>
                    <br>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="margin: 0 10% 0 0;">NO</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin: 0 0 0 10%;" onclick="percepatan()">YES</button>
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
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    <script type="text/javascript">
        var kode_permintaan;
        var jarak;
        var kode_skid_tank;

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
                    // document.getElementById('namatimeline').innerHTML = response.data[0].nama_spbe;
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

        function data_permintaan() {
            var time;
            $.ajax({
                type: 'GET',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                url: " <?= base_url() ?>Rest_API/permintaan?KEY-SPBE=SPBE",
                contentType: "application/json",
                dataType: 'json',
                success: function(response) {
                    // console.log(response);
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
                                        if (moment(response.data[i].tgl_sampai_tujuan) < times && moment(response.data[i].tgl_berangkat_tujuan) < moment(response.data[i].tgl_sampai_tujuan)) {
                                            if (moment(response.data[i].tgl_kembali) < times) {
                                                if (moment(response.data[i].tgl_sampai_kembali) < times) {
                                                    console.log('nesxt3');
                                                    percepatan2(response.data[i].kode_permintaan, response.data[i].jarak, response.data[i].kode_skid_tank);
                                                    // document.getElementById('progres').innerHTML += '<div class="progress-list"><button class="btn btn-info btn-rounded pull-right" data-toggle="modal" data-target="#percepatan" onclick="kode2(' + response.data[i].kode_permintaan + ',' + response.data[i].jarak + ',' + response.data[i].kode_skid_tank + ')">Percepat</button><button class="btn btn-primary btn-rounded pull-right" data-toggle="modal" data-target="#timeline" onclick="kode3(' + response.data[i].kode_permintaan + ',6)">Time Line</button><div class="pull-left"><strong>' + response.data[i].nama_spbe + '</strong></div><br><div class="pull"><span class="text-info">Proses Skid Tank Kembali </span></div><div class="pull-right">95%</div><div class="progress progress-small progress-striped active"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div></div></div>'
                                                } else {
                                                    document.getElementById('progres').innerHTML += '<div class="progress-list"><button class="btn btn-info btn-rounded pull-right" data-toggle="modal" data-target="#percepatan" onclick="kode2(' + response.data[i].kode_permintaan + ',' + response.data[i].jarak + ',' + response.data[i].kode_skid_tank + ')">Percepat</button><button class="btn btn-primary btn-rounded pull-right" data-toggle="modal" data-target="#timeline" onclick="kode3(' + response.data[i].kode_permintaan + ',6)">Time Line</button><div class="pull-left"><strong>' + response.data[i].nama_spbe + '</strong></div><br><div class="pull"><span class="text-info">Proses Skid Tank Kembali </span></div><div class="pull-right">80%</div><div class="progress progress-small progress-striped active"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div></div></div>'
                                                }
                                            } else {
                                                console.log(times)
                                                document.getElementById('progres').innerHTML += '<div class="progress-list"><button class="btn btn-info btn-rounded pull-right" data-toggle="modal" data-target="#percepatan" onclick="kode2(' + response.data[i].kode_permintaan + ',' + response.data[i].jarak + ',' + response.data[i].kode_skid_tank + ')" >Percepat</button><button class="btn btn-primary btn-rounded pull-right" data-toggle="modal" data-target="#timeline" onclick="kode3(' + response.data[i].kode_permintaan + ',5)  ">Time Line</button><div class="pull-left"><strong>' + response.data[i].nama_spbe + '</strong></div><br><div class="pull"><span class="text-info">Proses Penyaluran Gas Di SPBE </span></div><div class="pull-right">60%</div><div class="progress progress-small progress-striped active"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">60%</div></div></div>'
                                            }
                                        } else {
                                            document.getElementById('progres').innerHTML += '<div class="progress-list"><button class="btn btn-info btn-rounded pull-right" data-toggle="modal" data-target="#percepatan" onclick="kode2(' + response.data[i].kode_permintaan + ',' + response.data[i].jarak + ',' + response.data[i].kode_skid_tank + ')">Percepat</button><button class="btn btn-primary btn-rounded pull-right" data-toggle="modal" data-target="#timeline" onclick="kode3(' + response.data[i].kode_permintaan + ',4)">Time Line</button><div class="pull-left"><strong>' + response.data[i].nama_spbe + '</strong></div><br><div class="pull"><span class="text-info">Proses Perjalan Menuju Tujuan</span></div><div class="pull-right">40%</div><div class="progress progress-small progress-striped active"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">40%</div></div></div>'
                                        }
                                    } else {
                                        document.getElementById('progres').innerHTML += '<div class="progress-list"><button class="btn btn-info btn-rounded pull-right" data-toggle="modal" data-target="#percepatan" onclick="kode2(' + response.data[i].kode_permintaan + ',' + response.data[i].jarak + ',' + response.data[i].kode_skid_tank + ')">Percepat</button><button class="btn btn-primary btn-rounded pull-right" data-toggle="modal" data-target="#timeline" onclick="kode3(' + response.data[i].kode_permintaan + ',3)">Time Line</button><div class="pull-left"><strong>' + response.data[i].nama_spbe + '</strong></div><br><div class="pull"><span class="text-info">Proses Berangakt Menuju Tujuan</span></div><div class="pull-right">20%</div><div class="progress progress-small progress-striped active"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">20%</div></div></div>'
                                    }
                                } else if (response.data[i].status_patra_niaga == '1') {
                                    document.getElementById('progres').innerHTML += '<div class="progress-list"><button class="btn btn-info btn-rounded pull-right" data-toggle="modal" data-target="#percepatan" onclick="kode2(' + response.data[i].kode_permintaan + ',' + response.data[i].jarak + ',' + response.data[i].kode_skid_tank + ')" disabled>Percepat</button><button class="btn btn-primary btn-rounded pull-right" data-toggle="modal" data-target="#timeline" onclick="kode3(' + response.data[i].kode_permintaan + ',2)">Time Line</button><div class="pull-left"><strong>' + response.data[i].nama_spbe + '</strong></div><br><div class="pull"><span class="text-info">Permintaan Verifikasi Patra Niaga</span></div><div class="pull-right">10%</div><div class="progress progress-small progress-striped active"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">10%</div></div></div>'
                                }
                            }
                        });
                    }
                }
            })
        }
        data_permintaan()

        function kode(data, data2, data3) {
            kode_permintaan = data;
            jarak = data2;
            kode_skid_tank = data3;
            console.log(kode_permintaan);
        }

        function kode2(data, data2, data3) {
            kode_permintaan = data;
            jarak = data2;
            kode_skid_tank = data3;
        }

        function verifikasi() {
            const value_data = {
                'kode_permintaan': kode_permintaan,
                'status_terminal': '2',
                'KEY-SPBE': 'SPBE'
            }
            $.ajax({
                type: 'PUT',
                url: " <?= base_url() ?>Rest_API/permintaan_terminal",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                dataType: 'json',
                data: value_data,
                success: function(response) {
                    console.log(response);
                    data_permintaan()
                }
            });
        }

        function tolak() {
            console.log('put');
            const value_data = {
                'kode_permintaan': kode_permintaan,
                'status_terminal': '3',
                'KEY-SPBE': 'SPBE'
            }
            $.ajax({
                type: 'PUT',
                url: " <?= base_url() ?>Rest_API/permintaan_terminal",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                dataType: 'json',
                data: value_data,
                success: function(response) {
                    // console.log(response);
                    data_permintaan()
                }
            });
        }

        function percepatan2(kode_permintaan, jarak, kode_skid_tank) {
            const value_data = {
                'kode_permintaan': kode_permintaan,
                'jarak': jarak,
                'kode_skid_tank': kode_skid_tank,
                'KEY-SPBE': 'SPBE'
            }
            $.ajax({
                type: 'PUT',
                url: " <?= base_url() ?>Rest_API/Aktifitas/Percepatan",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                dataType: 'json',
                data: value_data,
                success: function(response) {
                    // console.log(response);
                    data_permintaan()
                    // chart()
                }
            });
        }

        function percepatan() {
            console.log('put');
            const value_data = {
                'kode_permintaan': kode_permintaan,
                'jarak': jarak,
                'kode_skid_tank': kode_skid_tank,
                'KEY-SPBE': 'SPBE'
            }

            console.log(value_data);
            $.ajax({
                type: 'PUT',
                url: " <?= base_url() ?>Rest_API/aktifitas/percepatan",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                dataType: 'json',
                data: value_data,
                success: function(response) {
                    console.log(response);
                    data_permintaan()
                    // chart()
                }
            });
        }

        $.ajax({
            type: 'GET',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
                'Authorization': "Basic " + btoa("gas:gas")
            },
            url: " <?= base_url() ?>Rest_API/aktifitas/skid_tank?KEY-SPBE=SPBE",
            contentType: "application/json",
            dataType: 'json',
            success: function(response) {
                Morris.Bar({
                    element: 'dashboard-bar-1',
                    data: response.data,
                    xkey: 'nopol',
                    ykeys: ['jarak'],
                    labels: ['Jarak Yang Ditepuh'],
                    barColors: ['#33414E', '#1caf9a'],
                    gridTextSize: '12px',
                    hideHover: true,
                    resize: true,
                    gridLineColor: '#E5E5E5'
                });
            }
        })
        // $.ajax({
        //     type: 'GET',
        //     headers: {
        //         'Content-Type': 'application/x-www-form-urlencoded',
        //         'Authorization': "Basic " + btoa("gas:gas")
        //     },
        //     url: " <?= base_url() ?>Rest_API/aktifitas/spbe?KEY-SPBE=SPBE",
        //     contentType: "application/json",
        //     dataType: 'json',
        //     success: function(response) {
        //         Morris.Bar({
        //             element: 'dashboard-bar-2',
        //             data: response.data,
        //             xkey: 'nama_spbe',
        //             ykeys: ['jumlah_diterima', 'jumlah_ditolak'],
        //             labels: ['Jumlah Permintaan Diterima', 'Jumlah Permintaan Ditolak'],
        //             barColors: ['#33414E', '#1caf9a'],
        //             gridTextSize: '10px',
        //             hideHover: true,
        //             resize: true,
        //             gridLineColor: '#E5E5E5'
        //         });
        //     }
        // })
    </script>
</body>

</html>