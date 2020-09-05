    <!-- META SECTION -->
    <title>Sistem Pendistribusian LPG</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="<?= base_url() ?>assets/image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url() ?>assets/css/theme-default.css" />
    <!-- EOF CSS INCLUDE -->
    <style>
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #FFF;
            /* change if the mask should have another color then white */
            z-index: 99999;
            /* makes sure it stays on top */
        }

        #status {
            width: 200px;
            height: 200px;
            position: absolute;
            left: 43%;
            /* centers the loading animation horizontally one the screen */
            top: 30%;
            /* centers the loading animation vertically one the screen */
            background-image: url("<?= base_url() ?>uploads/preloading/Curve-Loading.gif");
            z-index: 9999;
            /* path to your loading animation */
            background-repeat: repeat;
            background-position: center;
            /* is width and height divided by two */
        }

        .timeline2 {
            position: relative;
            padding: 21px 0px 10px;
            margin-top: 4px;
            margin-bottom: 30px;
        }

        .timeline2 .line {
            position: absolute;
            width: 4px;
            display: block;
            background: currentColor;
            top: 0px;
            bottom: 0px;
            margin-left: 30px;
        }

        .timeline2 .separator {
            border-top: 1px solid currentColor;
            padding: 5px;
            padding-left: 40px;
            font-style: italic;
            font-size: .9em;
            margin-left: 30px;
        }

        .timeline2 .line::before {
            top: -4px;
        }

        .timeline .line::after {
            bottom: -4px;
        }

        .timeline2 .line::before,
        .timeline2 .line::after {
            content: '';
            position: absolute;
            left: -4px;
            width: 12px;
            height: 12px;
            display: block;
            border-radius: 50%;
            background: currentColor;
        }

        .timeline2 .panel {
            position: relative;
            margin: 10px 0px 21px 70px;
            clear: both;
        }

        .timeline2 .panel::before {
            position: absolute;
            display: block;
            top: 8px;
            left: -24px;
            content: '';
            width: 0px;
            height: 0px;
            border: inherit;
            border-width: 12px;
            border-top-color: transparent;
            border-bottom-color: transparent;
            border-left-color: transparent;
        }

        .timeline2 .panel .panel-heading.icon * {
            font-size: 20px;
            vertical-align: middle;
            line-height: 40px;
        }

        .timeline2 .panel .panel-heading.icon {
            position: absolute;
            left: -59px;
            display: block;
            width: 40px;
            height: 40px;
            padding: 0px;
            border-radius: 50%;
            text-align: center;
            float: left;
        }

        .timeline2 .panel-outline {
            border-color: transparent;
            background: transparent;
            box-shadow: none;
        }

        .timeline2 .panel-outline .panel-body {
            padding: 10px 0px;
        }

        .timeline2 .panel-outline .panel-heading:not(.icon),
        .timeline2.panel-outline .panel-footer {
            display: none;
        }
    </style>