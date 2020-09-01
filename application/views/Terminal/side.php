<ul class="x-navigation">
    <li class="xn-logo">
        <a href="index.html">Terminal</a>
        <a href="#" class="x-navigation-control"></a>
    </li>
    <li class="xn-profile">
        <a href="#" class="profile-mini">
            <img src="<?= base_url() ?>assets/assets/images/users/avatar.jpg" alt="John Doe" />
        </a>
        <div class="profile">
            <div class="profile-image">
                <img src="<?= base_url() ?>assets/assets/images/users/no-image.jpg" alt="John Doe" />
            </div>
        </div>
    </li>
    <li class="xn-title">Dashboard</li>
    <li <?php if ($side == 'dashboard') {
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