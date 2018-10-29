<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            
            <div class="pull-left info">
                <p><?php echo $this->session->userdata('nama_admin') ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="">
                <a href="<?php echo site_url('mahasiswa/home'); ?>">
                    Mahasiswa
                </a>  
            </li>
            <li class="">
                <a href="<?php echo site_url('mahasiswa/dosen_m') ?>">
                    Dosen
                </a>  
            </li>
            <li class="">
                <a href="<?php echo site_url('mahasiswa/matkul_m') ?>">
                    Mata Kuliah
                </a>  
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">