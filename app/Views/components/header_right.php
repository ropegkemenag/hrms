<ul class="list-unstyled">
  <li class="dropdown pc-h-item d-none d-md-inline-flex">
    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
      aria-haspopup="false" aria-expanded="false">
      <i class="ph-duotone ph-circles-four"></i>
    </a>
    <div class="dropdown-menu dropdown-qta dropdown-menu-end pc-h-dropdown">
      <div class="overflow-hidden">
        <div class="qta-links m-n1">
          <a href="<?= site_url()?>" class="dropdown-item">
            <i class="ph-duotone ph-books"></i>
            <span>Beranda</span>
          </a>
          <a href="<?= site_url('simpeg')?>" class="dropdown-item">
            <i class="ph-duotone ph-lifebuoy"></i>
            <span>Data Simpeg</span>
          </a>
          <a href="<?= site_url('kgb')?>" class="dropdown-item">
            <i class="ph-duotone ph-scroll"></i>
            <span>KGB</span>
          </a>
          <a href="<?= site_url('tubel')?>" class="dropdown-item">
            <i class="ph-duotone ph-books"></i>
            <span>Tugas Belajar</span>
          </a>
          <a href="#!" class="dropdown-item">
            <i class="ph-duotone ph-envelope-open"></i>
            <span>Mail</span>
          </a>
          <a href="#!" class="dropdown-item">
            <i class="ph-duotone ph-identification-badge"></i>
            <span>Membership</span>
          </a>
          <a href="#!" class="dropdown-item">
            <i class="ph-duotone ph-chats-circle"></i>
            <span>Chat</span>
          </a>
          <a href="#!" class="dropdown-item">
            <i class="ph-duotone ph-currency-circle-dollar"></i>
            <span>Plans</span>
          </a>
          <a href="#!" class="dropdown-item">
            <i class="ph-duotone ph-user-circle"></i>
            <span>Users</span>
          </a>
        </div>
      </div>
    </div>
  </li>
  <li class="dropdown pc-h-item">
    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
      aria-haspopup="false" aria-expanded="false">
      <i class="ph-duotone ph-sun-dim"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
      <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
        <i class="ph-duotone ph-moon"></i>
        <span>Dark</span>
      </a>
      <a href="#!" class="dropdown-item" onclick="layout_change('light')">
        <i class="ph-duotone ph-sun-dim"></i>
        <span>Light</span>
      </a>
      <a href="#!" class="dropdown-item" onclick="layout_change_default()">
        <i class="ph-duotone ph-cpu"></i>
        <span>Default</span>
      </a>
    </div>
  </li>
</ul>
