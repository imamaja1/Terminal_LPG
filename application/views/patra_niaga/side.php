<ul class="x-navigation">
    <li class="xn-logo">
        <a href="index.html">Patra Niaga</a>
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
    <li <?php if ($side == 'dashboard') {
            echo ' class="active" ';
        } ?>>
        <a href=" <?= base_url() ?>patra_niaga"><span class="fa fa-dashboard"></span> <span class="xn-text">Dashboard</span></a>
    </li>
    <!-- <li class="xn-title">Aktivitas</li>
    <li <?php if ($side == 'permintaan') {
            echo ' class="active" ';
        } ?>>
        <a href=" <?= base_url() ?>patra_niaga/permintaan"><span class="fa fa-desktop"></span> <span class="xn-text">Monitoring</span></a>
    </li> -->
    <li class="xn-title">Data</li>
    <li <?php if ($side == 'truk') {
            echo ' class="active" ';
        } ?>>
        <a href=" <?= base_url() ?>patra_niaga/truk"><span class="fa fa-square-o"></span> <span class="xn-text">Skid Tank</span></a>
    </li>
    <li <?php if ($side == 'profil') {
            echo ' class="active" ';
        } ?>>
        <a href="<?= base_url() ?>Patra_niaga/profil"><span class="fa fa-user"></span> <span class="xn-text">Profil</span></a>
    </li>
    <li class="xn-title">Data</li>
    <li <?php if ($side == 'log_out') {
            echo ' class="active" ';
        } ?>>
        <a href=" <?= base_url() ?>patra_niaga/log_out"><span class="fa fa-power-off"></span> <span class="xn-text">Log out</span></a>
    </li>
</ul>