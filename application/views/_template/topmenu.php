<!-- Logo -->
<a href="<?= base_url(); ?>" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>Q</span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><img style="height: 120px; margin-top:-27px" src="https://i.ibb.co/KX4XZSL/removal-ai-tmp-634a698c25201-2.png" alt="Quizpper"></span>
</a>

<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="<?= base_url('assets/img/user1.png'); ?>" class="user-image" alt="User Image">
          <span class="hidden-xs"><?= $this->session->nama; ?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="<?= base_url('assets/img/user1.png'); ?>" class="img-circle" alt="User Image">

            <p><?= $this->session->nama; ?><br>
              <?= $this->session->nis; ?><br>
              <?= $this->session->kelas; ?></p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div>
              <a href="<?= base_url('logout'); ?>" class="btn btn-default"><i class="fa fa-sign-out"></i> Keluar</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>

</nav>