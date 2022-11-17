<!DOCTYPE html>

<html lang="en">

<head>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Login | Quizpper</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
        
  ================================================== -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/bower_components/font-awesome/css/font-awesome.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Jquery -->
    <script src="<?= base_url('assets/adminlte/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--[if lt IE 9]>
		<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:100);
        @import url(https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css);

        body {
            background: url(https://img.freepik.com/premium-vector/vector-seamless-pattern-school-doodle-back-school-icon-set-design-elements-poster-banner-vector-illustration_69626-368.jpg?w=740);
            /*bg  1a1a1a  434240  */
            color: white;
            font-family: 'Roboto';
            font-weight: bold;
        }

        input:focus {
            background-color: yellow;
        }

        .flat-form {
            background: #34495e;
            /*tablebg e74c3c #34495e  #88565b ed7271*/
            margin: 25px auto;
            width: 300px;
            height: 720px;
            position: relative;
            font-family: 'Roboto';
        }

        .tabs {
            background: #136899;
            /*topbar #c0392b #88565b*/
            height: 40px;
            margin: 0;
            padding: 0;
            list-style-type: none;
            width: 100%;
            position: relative;
            display: block;
            margin-bottom: 20px;
        }

        .tabs li {
            display: block;
            float: left;
            margin: 0;
            padding: 0;
        }

        .tabs a {
            background: #136899;
            /*topbar c0392b  #88565b */
            display: block;
            float: left;
            text-decoration: none;
            color: white;
            font-size: 16px;
            padding: 12px 22px 12px 22px;
            /*border-right: 1px solid @tab-border;*/

        }

        .tabs li:last-child a {
            border-right: none;
            width: 174px;
            padding-left: 0;
            padding-right: 0;
            text-align: center;
        }

        .tabs a.active {
            background: #1ea0eb;
            /*topbar e74c3c  */
            border-right: none;
            -webkit-transition: all 0.5s linear;
            -moz-transition: all 0.5s linear;
            transition: all 0.5s linear;
        }

        .form-action {
            padding: 0 10px;
            position: relative;
        }

        .form-action h1 {
            font-size: 42px;
            padding-bottom: 10px;
        }

        .form-action p {
            font-size: 16px;
            padding-bottom: 10px;
            line-height: 25px;
        }

        /* form {
            padding-right: 0px !important;
        } */

        form input[type=text],
        form input[type=password],
        form input[type=submit] {
            font-family: 'Roboto';
            font-size: 14px;
        }

        form input[type=text],
        form input[type=password] {
            width: 100%;
            height: 40px;
            margin-bottom: 10px;
            padding-left: 15px;
            background: #fff;
            /* #44454a  */
            border: none;
            color: #000;
            /* e74c3c e9e9e9  */
            outline: none;
        }

        .dark-box {
            background: #5e0400;
            box-shadow: 1px 3px 3px #3d0100 inset;
            height: 40px;
            width: 50px;
        }

        .form-action .dark-box.bottom {
            position: absolute;
            right: 0;
            bottom: -24px;
        }

        .tabs+.dark-box.top {
            position: absolute;
            right: 0;
            top: 0px;
        }

        .show {
            display: block;
        }

        .hide {
            display: none;
        }

        .button {
            border: none;
            display: block;
            background: #136899;
            height: 40px;
            width: 80px;
            color: #ffffff;
            text-align: center;
            border-radius: 5px;
            /*box-shadow: 0px 3px 1px #2075aa;*/
            -webkit-transition: all 0.15s linear;
            -moz-transition: all 0.15s linear;
            transition: all 0.15s linear;
        }

        .button:hover {
            background: #1e75aa;
            /*box-shadow: 0 3px 1px #237bb2;*/
        }

        .button:active {
            background: #136899;
            /*box-shadow: 0 3px 1px #0f608c;*/
        }

        ::-webkit-input-placeholder {
            color: #000000;
            /*  #e74c3c */
        }

        :-moz-placeholder {
            /* Firefox 18- */
            color: #000000;
        }

        ::-moz-placeholder {
            /* Firefox 19+ */
            color: #000000;
        }

        :-ms-input-placeholder {
            color: #000000;
        }
    </style>
</head>

<body>
    <?php if ($this->session->flashdata('flash')) { ?>
        <div class="alert alert-danger">
            <h3><i class="fa fa-warning"></i>
                <?= $this->session->flashdata('flash'); ?>
            </h3>
        </div>
    <?php } ?>

    <div class="container">
        <div class="flat-form">
            <ul class="tabs">
                <li>
                    <a href="#login" class="active">Login</a>
                </li>
                <li style="visibility: hidden;">
                    <a href="#reset">Lupa Password</a>
                </li>
                <a href="<?php $this->load->helper('url'); ?>/quizpper-beta/"><i class="fa-solid fa-xs fa-user"></i></a>
            </ul>
            <div id="login" class="form-action show">
                <center>
                    <h1><img src="https://i.ibb.co/KX4XZSL/removal-ai-tmp-634a698c25201-2.png" style="width: 200px;"></h1>
                </center>
                <!-- <p>
                    Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    Maecenas sed diam eget risus varius bladit sit amet non
                </p> -->
                <form action=" <?= base_url('login/actlogin'); ?>" method="post">

                    <?php if ($this->session->flashdata('gagal') == true) { ?>
                        <div class="alert alert-danger alert-dismissable">
                            <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-warning"></i> Username / Password salah
                        </div>
                    <?php } ?>

                    <ul>
                        <li>
                            <input type="text" name="username" class="form-control" placeholder="Username" />
                        </li>
                        <li>
                            <input type="password" name="password" class="form-control" placeholder="Password" />
                        </li>
                        <li>
                            <div class="form-group">
                                <select name="akses" id="" class="form-control" required>
                                    <option value="">Login sebagai . . .</option>
                                    <option value="admin">Admin</option>
                                    <option value="guru">Guru</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <button type="submit" class="button mt-2"><i class="fa fa-sign-in"></i> Login</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <script>
        var base_url = '<?= base_url(); ?>';
    </script>
    <script src="<?= base_url('assets/js/login.js'); ?>"></script>
    <script>
        $(function() {
            // constants
            var SHOW_CLASS = 'show',
                HIDE_CLASS = 'hide',
                ACTIVE_CLASS = 'active';

            $('.tabs').on('click', 'li a', function(e) {
                e.preventDefault();
                var $tab = $(this),
                    href = $tab.attr('href');

                $('.active').removeClass(ACTIVE_CLASS);
                $tab.addClass(ACTIVE_CLASS);

                $('.show')
                    .removeClass(SHOW_CLASS)
                    .addClass(HIDE_CLASS)
                    .hide();

                $(href)
                    .removeClass(HIDE_CLASS)
                    .addClass(SHOW_CLASS)
                    .hide()
                    .fadeIn(550);
            });
        });
    </script>
</body>

</html>