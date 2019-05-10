 <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?=base_url();?>assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          KOLAK PISANG
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="<?php echo site_url('C_dashboard');?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item  ">
           <a class="nav-link" href="<?php echo site_url('C_user');?>">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url('C_guru');?>">
              <i class="material-icons">content_paste</i>
              <p>Guru</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url('C_siswa');?>">
              <i class="material-icons">content_paste</i>
              <p>Siswa</p>
            </a>
          </li>

           <li>
              <div class="btn-group dropright">
                  <a class="nav-link " id="cetak" data-toggle="dropdown">
                 <div class="row">
                       <div class="col-sm-2"><i class="material-icons">content_paste</i></div>
                       <div class="col-sm-8"><p class=""> Cetak </p></div>
                       <div class="col-sm-2"><i class="dropdown-toggle"></i></div>
                </div>      
            </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Mapel</a>
                        <a class="dropdown-item" href="#">Kelas</a>
                        <a class="dropdown-item" href="#">Nilai</a>                
                      </div>
            </div>
            </li>
            <!-- Dropdown menu links -->

       
         

   

      <li>
            <a class="nav-link " id="cetak" data-toggle="dropdown">
                 <div class="row">
                       <div class="col-sm-2"><i class="material-icons">content_paste</i></div>
                       <div class="col-sm-8"><p class=""> Cetak </p></div>
                       <div class="col-sm-2"><i class="dropdown-toggle"></i></div>
                </div>      
            </a>

           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton ">
                  <a class="dropdown-item" href="<?php echo site_url('cetak/C_laporan_guru');?>">Laporan Guru</a>
                 <a class="dropdown-item" href="<?php echo site_url('cetak/C_laporan_nilai');?>">Laporan Nilai</a>
                  <a class="dropdown-item" href="<?php echo site_url('cetak/C_laporan_kelas');?>">Laporan Kelas</a>
             </div>

    </li>
         <!--  <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li> -->
          
        <!--   <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./rtl.html">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li> -->
          <!-- <li class="nav-item active-pro ">
            <a class="nav-link" href="./upgrade.html">
              <i class="material-icons">unarchive</i>
              <p>Upgrade to PRO</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">