<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Patra Niaga</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets2/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets2/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets2/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets2/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets2/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets2/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets2/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets2/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets2/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets2/css/main.css">
    <!--===============================================================================================-->
</head>

<body style="background-color: #666666; ">
    <div class="limiter" id="app" display:none;>
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form validate-form">
                    <span class="login100-form-title p-b-43">
                        Patra Niaga
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" id="username">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Username</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="pass" id="password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" onclick="post_data()">
                            Login
                        </button>
                    </div>
                    <br>
                    <div class=" validate-input">
                        <select class="custom-select col-md-12" id="select" onchange="nilai()">
                            <option value="0">-- Pilih --</option>
                            <option value="1">Teminal</option>
                            <option value="2">Patra Niaga</option>
                            <option value="3">SPBE</option>
                        </select>
                    </div>
                    <div class="text-center p-t-46 p-b-20">
                    </div>
                </div>
                <div class="login100-more" style="background-image: url('<?= base_url() ?>assets2/images/004.jpg');">
                </div>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets2/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets2/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets2/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url() ?>assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets2/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets2/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url() ?>assets2/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets2/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets2/js/main.js"></script>
    <script>
        function nilai() {
            console.log($("#select").val());
            if ($("#select").val() == 1) {
                location.href = '<?= base_url() ?>';
            } else if ($("#select").val() == 3) {
                location.href = '<?= base_url() ?>Auth/SPBE';
            }

        }

        function post_data() {
            const value_data = {
                'username': $("#username").val(),
                'password': $("#password").val(),
                'KEY-SPBE': 'SPBE'
            }
            var user = 'gas';
            var pass = 'gas';
            console.log(value_data);
            $.ajax({
                type: 'POST',
                url: " <?= base_url() ?>Rest_API/Auth/Patra_niaga",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa(user + ":" + pass)
                },
                contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                dataType: 'json',
                data: value_data,
                success: function(response) {
                    console.log(response.status);
                    if (response.status == 200) {
                        location.reload();
                        console.log('benar')
                    } else {
                        console.log('salah');
                    }

                }
            });
        }
    </script>


</body>