<ul class="x-navigation">
    <li class="xn-logo">
        <a href="index.html">Terminal</a>
        <a href="#" class="x-navigation-control"></a>
    </li>
    <div class="xn-profile">
        <div class="profile">
            <div class="profile-image">
                <img src="<?= base_url() ?>assets/assets/images/users/no-image.jpg" alt="John Doe" width="100" height="100" />
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
        <a href=" <?= base_url() ?>Terminal"><span class="fa fa-dashboard"></span> <span class="xn-text">Dashboard</span></a>
    </li>
    <li class="xn-title">DATA</li>
    <li <?php if ($side == 'spbe') {
            echo ' class="active" ';
        } ?>>
        <a href=" <?= base_url() ?>Terminal/spbe"><span class="fa fa-square-o"></span> <span class="xn-text">SPBE</span></a>
    </li>
    <li <?php if ($side == 'patra_niaga') {
            echo ' class="active" ';
        } ?>>
        <a href=" <?= base_url() ?>Terminal/patra_niaga"><span class="fa fa-square-o"></span> <span class="xn-text">Patra Niaga</span></a>
    </li>
    <li <?php if ($side == 'profil') {
            echo ' class="active" ';
        } ?>>
        <a href="<?= base_url() ?>Terminal/profil"><span class="fa fa-user"></span> <span class="xn-text">Profil</span></a>
    </li>
    <li class="xn-title">Log Out</li>
    <li <?php if ($side == 'log_out') {
            echo ' class="active" ';
        } ?>>
        <a href=" <?= base_url() ?>Terminal/log_out"><span class="fa fa-power-off"></span> <span class="xn-text">Log Out</span></a>
    </li>
</ul>



<div class="modal fade" id="Profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-body col-md-12">
                <div class="form-group col-md-12 text-center">
                    <div class="profile" style="background-color: white;">
                        <div class="profile-image">
                            <!-- <img id="blah" src="#" alt="your image" /> -->
                            <div id="images"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-12 text-center" onload="SavePhoto()">
                    <input type="file" class="form-control" aria-describedby="emailHelp" id="foto" onchange="readURL(this)" multiple>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="profil()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('images').innerHTML = ' <img src="<?= base_url() ?>assets/assets/images/users/no-image.jpg" alt="John Doe" onchange="SavePhoto()" id="blah"  width="100" height="100"/>';

    var data_profil;

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
            data_profil = input.files;
        }
    }

    function profil() {
        var form_data = new FormData();
        form_data.append('file', data_profil);
        console.log(form_data)
    }
</script>