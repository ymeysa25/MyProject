<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('uploads/profil/'. $this->session->userdata('foto_admin')); ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata('nama_admin') ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="">
                <a href="<?php echo site_url('pages/mahasiswa'); ?>">
                    Mahasiswa
                </a>  
            </li>
            <li class="">
                <a href="<?php echo site_url('pages/dosen') ?>">
                    Dosen
                </a>  
            </li>
            <li class="">
                <a href="<?php echo site_url('pages/matakuliah') ?>">
                    Mata Kuliah
                </a>  
            </li>
            <li class="header">Bonus</li>
            <li class="">
                <a href="<?php echo site_url('pages/penilaian') ?>">
                   Nilai Mata Kuliah
                </a>  
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">