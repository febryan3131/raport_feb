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

         <!--  <li class="nav-item  ">
           <a class="nav-link" href="<?php echo site_url('C_user');?>">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li> -->

          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url('C_guru');?>">
              <i class="material-icons">person</i>
              <p>Guru</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url('C_siswa');?>"> 
              <i class="material-icons">group</i>
              <p>Siswa</p>
            </a>
          </li>
<!-- ///////////////dropdown akademik//////////////// -->
           <li>
             <div class="bd-example">   
                         <div class="btn-group dropright show">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                       <a class="icon-next" href="#">
                                         <i class="material-icons">school</i>
                                       <p>Akademik</p>
                                       </a>
                                   </button>
                                <div class="dropdown-menu show" x-placement="right-start" style="position: absolute; transform: translate3d(112px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item" href="<?php echo site_url('akademik/C_mapel');?>">
                                        <i class="material-icons">library_books</i>
                                         Mapel</a>

                                         <!-- kelas -->
                                        <a class="dropdown-item" href="<?php echo site_url('akademik/C_kelas');?>">
                                          <i class="material-icons">account_balance</i>
                                          Kelas
                                        </a>
                                        <a class="dropdown-item" href="<?php echo site_url('akademik/C_nilai');?>">
                                         <i class="material-icons">star</i>
                                          Nilai
                                        </a> 
                               </div>
                         </div>   
              </div>                             
            </li>
  <!-- /////////////// akhir dropdown akademik//////////////// -->

            <li>
                 <div class="bd-example">
                      <div class="btn-group dropright show">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <a class="icon-next" href="#">
                                 <i class="material-icons">print</i>
                                  <p>Cetak</p>
                               </a>
                             </button>
                           <div class="dropdown-menu show" x-placement="right-start" style="position: absolute; transform: translate3d(112px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="<?php echo site_url('cetak/C_laporan_guru');?>">
                                 <i class="material-icons"> ballot</i>
                                 Laporan Guru</a>

                                <a class="dropdown-item" href="<?php echo site_url('cetak/C_laporan_nilai');?>">
                                 <i class="material-icons" > ballot</i>
                                 Laporan Nilai</a>

                                 <a class="dropdown-item" href="<?php echo site_url('cetak/C_laporan_kelas');?>">
                                  <i class="material-icons" > ballot</i>
                                  Laporan Kelas</a>

                           </div>
                     </div>
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