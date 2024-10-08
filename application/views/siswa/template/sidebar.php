

  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="" >
        <span class="ms-1 font-weight-bold text-white">E-Learning Offline</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <?php 
            if($title == 'Home Siswa'){
                echo '<a class="nav-link active text-white bg-gradient-primary" href="' . base_url('siswa') . '">';

               
            }else{
               echo '<a class="nav-link text-white " href="' . base_url('siswa') . '">';


            }
            ?>
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Home Siswa</span>
          </a>
        </li>
        <li class="nav-item">
          <?php 
            if($title == 'Materi'){
                echo '<a class="nav-link active text-white bg-gradient-primary" href="' . base_url('materi') . '">';

               
            }else{
               echo '<a class="nav-link text-white " href="' . base_url('materi') . '">';


            }
            ?>            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Materi & Tugas</span>
          </a>
        </li>
       
       
        </li>
     
      
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
<?php 
            if($title == 'Profile'){
                echo '<a class="nav-link active text-white bg-gradient-primary" href="' . base_url('profile') . '">';

               
            }else{
               echo '<a class="nav-link text-white " href="' . base_url('profile') . '">';


            }
            ?>                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('auth/logout');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Log Out</span>
          </a>
        </li>
        
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><?php echo $title; ?></li>
          </ol>
          <h6 class="font-weight-bolder mb-0"><?php echo $title; ?> </h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
           <span id="timer2"></span>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            
          
                
                
              </ul>
            </li>


            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
           
            <li class="nav-item d-flex align-items-center">
              <a href="<?php echo base_url('profile');?>" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"><?php echo $user['nama'] ;?> </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
