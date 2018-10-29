</head>
<body class="skin-blue">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <a href="#" class="logo"><b>CodeIgniter Project</b></a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li >
                           <a href="<?php echo site_url('pages/home') ?>"> Home </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('pages/about') ?>"> About</a>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url('uploads/profil/'. $this->session->userdata('foto_admin')); ?>" class="user-image" alt="User Image"/>
                                <span class="hidden-xs"><?php echo $this->session->userdata('nama_admin') ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo base_url('uploads/profil/'. $this->session->userdata('foto_admin')); ?>" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $this->session->userdata('nama_admin');?>
                                        <small>Succes is Imposible without hardwork</small>
                                    </p>
                                </li>
                                
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo site_url('pages/profil'); ?>" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo site_url('auth/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->