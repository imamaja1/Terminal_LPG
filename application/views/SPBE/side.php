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
                <img src="<?= base_url() ?>assets/assets/images/users/no-image.jpg" alt="John Doe" />
            </div>
            <div class="profile-data">
                <a type="submit" class="btn btn-info" data-toggle="modal" data-target="#Profil">Profil</a>
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