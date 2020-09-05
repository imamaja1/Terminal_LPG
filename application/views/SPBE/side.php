<div id="preloader">
    <div id="status">
    </div>
</div>
<ul class="x-navigation">
    <li class="xn-logo">
        <a href="index.html">
            <h4>
                <div id="namaspbe"></div>
                <h4>
        </a>
        <a href="#" class="x-navigation-control"></a>
    </li>
    <div class="xn-profile">
        <div class="profile">
            <div class="profile-image">
                <div id="profil_img"></div>
            </div>
            <div class="profile-image" style="margin: -20px 0 20px 0 ;">
                <a type="file" data-toggle="modal" data-target="#Profil"><span class="fa fa-camera" style="background-color: beige; padding:8px; border-radius:50%; border-color:black"></span></a>
            </div>
        </div>
    </div>
    <li class="xn-title">Dashboard</li>
    <li <?php if ($side == 'Dashboard') {
            echo ' class="active" ';
        } ?>>
        <a href=" <?= base_url() ?>SPBE"><span class="fa fa-dashboard"></span> <span class="xn-text">Dashboard</span></a>
    </li>
    <li class="xn-title">Aktivitas</li>
    <li <?php if ($side == 'permintaan') {
            echo ' class="active" ';
        } ?>>
        <a href=" <?= base_url() ?>SPBE/permintaan"><span class="fa fa-square-o"></span> <span class="xn-text">Permintaan</span></a>
    </li>
    <li class="xn-title">Data</li>
    <li <?php if ($side == 'profil') {
            echo ' class="active" ';
        } ?>>
        <a href="<?= base_url() ?>SPBE/profil"><span class="fa fa-user"></span> <span class="xn-text">Profil</span></a>
    </li>
    <li class="xn-title">Log Out</li>
    <li <?php if ($side == 'log_out') {
            echo ' class="active" ';
        } ?>>
        <a href=" <?= base_url() ?>SPBE/log_out"><span class="fa fa-power-off"></span> <span class="xn-text">Log Out</span></a>
    </li>
</ul>

<div class="modal fade bd-example-modal-sm" id="Profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-body col-md-12">
                <div class="form-group col-md-12 text-center">
                    <div class="profile" style="background-color: white;">
                        <div class="profile-image">
                            <div id="images"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-12 text-center" onload="SavePhoto()">
                    <form id="myform" enctype="multipart/form-data">
                        <input type="file" class="form-control" aria-describedby="emailHelp" id="foto" onchange="readURL(this)" multiple>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="profil()" data-dismiss="modal">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    var data_profil;
    document.getElementById('images').innerHTML = ' <img src="<?= base_url() ?>assets/assets/images/users/no-image.jpg" alt="John Doe" onchange="SavePhoto()" id="blah"  width="100" height="100"/>';
    document.getElementById('profil_img').innerHTML = ' <img src="<?= base_url() ?>assets/assets/images/users/no-image.jpg" alt="John Doe"  width="100" height="100"/>';

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);
            };
            reader.readAsDataURL(input.files[0]);
            data_profil = input.files[0];
        }
    }

    function profil() {
        var nama_profil = new FormData();
        nama_profil.append('file_profil', data_profil);
        $.ajax({
            type: 'POST',
            url: " <?= base_url() ?>Rest_API/Profil/SPBE/" + id,
            headers: {
                'KEY-SPBE': 'SPBE',
                'Authorization': "Basic " + btoa("gas:gas")
            },
            dataType: 'json',
            data: nama_profil,
            enctype: 'multipart/form-data',
            cache: false,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                foto_profil();
            }
        });
    }

    function foto_profil() {
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
                $.ajax({
                    type: 'GET',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'Authorization': "Basic " + btoa("gas:gas")
                    },
                    url: " <?= base_url() ?>Rest_API/Profil/SPBE?KEY-SPBE=SPBE&id=" + response.kode_spbe,
                    contentType: "application/json",
                    dataType: 'json',
                    success: function(response) {
                        document.getElementById('profil_img').innerHTML = ' <img src="<?= base_url() ?>uploads/' + response.data.nama_profil + '" alt="John Doe"  width="100" height="100"/>';
                    }
                })

            }
        })
    }
    setTimeout(foto_profil, 100)
</script>