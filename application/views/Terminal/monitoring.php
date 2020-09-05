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
                <li class="active">Monitoring</li>
            </ul>
            <!-- END BREADCRUMB -->



            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <!-- START DEFAULT WIZARD -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Progressbars</h3>
                            </div>
                            <div class="panel-body">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">10%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">100%</div>
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
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/actions.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>preload/code.js"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    <script type="text/javascript">
        // $.ajax({
        //     type: 'GET',
        //     headers: {
        //         'Content-Type': 'application/x-www-form-urlencoded',
        //         'Authorization': "Basic " + btoa("gas:gas")
        //     },
        //     url: " <?= base_url() ?>Rest_API/permintaan_terminal?KEY-SPBE=SPBE",
        //     contentType: "application/json",
        //     dataType: 'json',
        //     success: function(response) {
        //         $.each(response.data, function(i) {
        //             document.getElementById('Ferivikasi').innerHTML += '<div class="alert alert-info push-down-20">data ' + response.data[i].no_spa + '</div>';
        //         });
        //     }
        // })
    </script>
</body>

</html>