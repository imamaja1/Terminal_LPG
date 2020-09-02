<ul class="x-navigation">
    <li class="xn-logo">
        <a href="index.html">Terminal</a>
        <a href="#" class="x-navigation-control"></a>
    </li>
    <div class="xn-profile">
        <div class="profile">
            <div class="profile-image">
                <img src="<?= base_url() ?>assets/assets/images/users/no-image.jpg" alt="John Doe" />
            </div>
            <div class="profile-data">
                <a type="submit" class="btn btn-info" onclick="Profil()" data-toggle="modal" data-target="#Profil">Profil</a>
            </div>
        </div>
    </div>
    <li class="xn-title">Dashboard</li>
    <li <?php if ($side == 'Dashboard') {
            echo ' class="active" ';
        } ?>>
        <a href=" <?= base_url() ?>Terminal"><span class="fa fa-dashboard"></span> <span class="xn-text">Dashboard</span></a>
    </li>

    <!-- <li class="xn-title">Aktivitas</li>
    <li <?php if ($side == 'Monitoring') {
            echo ' class="active" ';
        } ?>>
        <a href=" <?= base_url() ?>Terminal/Monitoring"><span class="fa fa-desktop"></span> <span class="xn-text">Monitoring</span></a>
    </li> -->
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
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Edit Photo</h3>
            </div>
            <div class="modal-body col-md-12">

                <div class="form-group col-md-12 text-center">
                    <input type="file" class="form-control" id="post_nama_spbe" aria-describedby="emailHelp">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="post_data()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    function Profil() {
        console.log('profil');
    }
</script>