<?php 
include("includes/header.php");
include("includes/topnav.php");
?>
   <!-- Wrapper Start -->
   <div class="wrapper">
      <!-- Sidebar  -->
      <div class="iq-sidebar">
         <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="index.php" class="header-logo">
               <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
               <div class="logo-title">
                  <span class="text-primary text-uppercase">SOUND</span> 
               </div>
            </a>
            <div class="iq-menu-bt-sidebar">
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="las la-bars"></i></div>
                  </div>
               </div>
            </div>
         </div>
         <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
               <ul id="iq-sidebar-toggle" class="iq-menu">
                  <li class="active active-menu">
                     <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                        <li><a href="index.php"><i class="las la-house-damage"></i>Home</a></li>
                        <li><a href="latest.php"><i class="las la-headphones"></i>Latest</a></li>
                        <li class="active"><a href="albums.php"><i class="lar la-file-audio"></i>Albums</a></li>
                        <li><a href="../index.php"><i class="las fa-home"></i>Our Website</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="ri-admin-line iq-arrow-left"></i><span>Admin</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="admin" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <!-- <li><a href="admin-dashboard.php"><i class="las la-house-damage"></i>Dashboard</a></li> -->
                        <li><a href="profile-edit.php"><i class="las la-edit"></i>Admin Edit Profile</a></li>
                        <li><a href="admin-category.php"><i class="ri-function-line"></i>Category</a></li>
                        <li><a href="admin-video.php"><i class="las la-video"></i>Video</a></li>
                        <li><a href="admin-music.php"><i class="las la-play-circle"></i>Music</a></li>
                     </ul>
                  </li>
               
                  <li>
                     <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                        <li><a href="profile.php"><i class="las la-id-card-alt"></i>User Profile</a></li>
                        <!-- <li><a href="add-user.php"><i class="las la-plus-circle"></i>User Add</a></li> -->
                        <li><a href="user-list.php"><i class="las la-th-list"></i>User List</a></li>
                        <li><a href="user-reviews-ratings.php"><i class="las la-th-list"></i>Reviews & Ratings</a></li>
                     </ul>
                  </li>
               
       
               </ul>
            </nav>
         </div>
      </div>

      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-7">
                  <div class="iq-card iq-card-transparent  iq-song-back">
                     <div class="iq-card-body">
                        <div class="iq-music-img1">
                           <div class="equalizer1">
                              <span class="bar1 bar-1"></span>
                              <span class="bar1 bar-2"></span>
                              <span class="bar1 bar-3"></span>
                              <span class="bar1 bar-4"></span>
                              <span class="bar1 bar-5"></span>
                           </div>
                        </div>
                        <div class="player1 row">
                           <div class="details1 col-6 col-sm-6 col-lg-6">
                              <div class="now-playing1"></div>
                              <div class="track-art1"></div>
                              <div>
                                 <div class="track-name1">Pop Smoke</div>
                                 <div class="track-artist1">Cascada</div>
                              </div>
                           </div>
                           <div class="slider_container1 col-sm-5 col-lg-5">
                              <div class="current-time1">00:00</div>
                              <input type="range" min="1" max="100" value="0" class="seek_slider1" onchange="seekTo1()">
                              <div class="total-duration1">00:00</div>
                           </div>
                           <div class="buttons1 col-6 col-sm-2 col-lg-3">
                              <div class="prev-track1" onclick="prevTrack1()"><i class="fa fa-step-backward fa-2x"></i></div>
                              <div class="playpause-track1" onclick="playpauseTrack1()"><i class="fa fa-play-circle fa-3x"></i></div>
                              <div class="next-track1" onclick="nextTrack1()"><i class="fa fa-step-forward fa-2x"></i></div>
                           </div>
                           <div class="slider_container1 col-sm-4 col-lg-4">
                              <i class="fa fa-volume-down"></i>
                              <input type="range" min="1" max="100" value="99" class="volume_slider1" onchange="setVolume1()">
                              <i class="fa fa-volume-up"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="iq-card iq-card-transparent">
                     <div class="iq-card-body p-0">
                        <ul class="list-unstyled row mb-0">
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.php"><img src="images/dashboard/album-song/01.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.php">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0">Girls Like You</h6>
                                          <small>Juice WRLD</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.php"><img src="images/dashboard/album-song/02.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.php">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 iq-song-title">Lucid Dreams</h6>
                                          <small>Lady Gaga</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.php"><img src="images/dashboard/album-song/03.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.php">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0">Better Now</h6>
                                          <small>Beyonce</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.php"><img src="images/dashboard/album-song/04.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.php">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 iq-song-title">No Tears Left To Cry</h6>
                                          <small>Ariana Grande</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.php"><img src="images/dashboard/album-song/05.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.php">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 iq-song-title">I Like Me Better</h6>
                                          <small>Lauv</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.php"><img src="images/dashboard/album-song/06.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.php">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 iq-song-title">Whatever It Takes</h6>
                                          <small>George Michael</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.php"><img src="images/dashboard/album-song/07.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.php">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 iq-song-title">In My Blood</h6>
                                          <small>Lil Pump</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.php"><img src="images/dashboard/album-song/08.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.php">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 iq-song-title">Too Good At Goodbyes</h6>
                                          <small>Stevie Wonder</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent mb-md-0">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.php"><img src="images/dashboard/album-song/09.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.php">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 iq-song-title">This Is America</h6>
                                          <small>Drake</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent mb-md-0 mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.php"><img src="images/dashboard/album-song/10.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.php">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 iq-song-title">What Lovers Do</h6>
                                          <small>Dolly Parton</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Top Songs</h4>
                        </div>
                        <div class="d-flex align-items-center iq-view">
                           <b class="mb-0 text-primary"><a href="latest.php">View More <i class="las la-angle-right"></i></a></b>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <ul class="list-unstyled row iq-box-hover mb-0">
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/01.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Enjoy Yourself</h6>
                                       <p class="mb-0">cupcakKe </p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/02.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Pretty Heart</h6>
                                       <p class="mb-0">Niki</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/03.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">The Climb Back</h6>
                                       <p class="mb-0">King Princess</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/04.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Got It On Me</h6>
                                       <p class="mb-0">Bulow</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/05.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Stuck With U</h6>
                                       <p class="mb-0">Tierra Whack</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/06.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Be Like That</h6>
                                       <p class="mb-0">Ravyn Lenae</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/07.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">God Whispered </h6>
                                       <p class="mb-0">Amber Mark</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/08.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">One Of Them Girls</h6>
                                       <p class="mb-0">Rina</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/09.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Mood Swings</h6>
                                       <p class="mb-0">Yaeji</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/10.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Supalonely</h6>
                                       <p class="mb-0">Morgan</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/11.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Tell Me U Luv</h6>
                                       <p class="mb-0">BbyMutha</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/12.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Up Up And Away</h6>
                                       <p class="mb-0">Britney</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/13.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Fighting Demons</h6>
                                       <p class="mb-0">Kylie</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/14.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">More Than My Ho</h6>
                                       <p class="mb-0">Fiona Apple</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/15.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Girl Of My Dreams</h6>
                                       <p class="mb-0">Frank</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/16.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0"> In My Feelings</h6>
                                       <p class="mb-0">Drake</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/17.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Does To Me</h6>
                                       <p class="mb-0">Elvis Presley</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/18.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Man Of The Year</h6>
                                       <p class="mb-0">Juice WRLD</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/19.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Dollaz On</h6>
                                       <p class="mb-0">Celine Dion</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/20.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Enjoy Yourself</h6>
                                       <p class="mb-0">Prince</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/21.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">The Climb Back</h6>
                                       <p class="mb-0">Elton John</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/22.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">More Than My </h6>
                                       <p class="mb-0">Morgan Wallen</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/23.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Girl Of My Dreams</h6>
                                       <p class="mb-0">Rod Wave</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/24.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">3 Headed Goat</h6>
                                       <p class="mb-0">Mariah Carey</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/25.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Something..</h6>
                                       <p class="mb-0">Pop Smoke</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/26.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">I Love My Country</h6>
                                       <p class="mb-0">Florida Georgia</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/27.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Girls Like You</h6>
                                       <p class="mb-0">DaBaby</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card  mb-md-0 mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/28.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">I Like It</h6>
                                       <p class="mb-0">Post Malone</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-sm-0 mb-md-0 mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/29.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">Meant To Be</h6>
                                       <p class="mb-0">Luke Combs</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-0 mb-sm-0 mb-md-0 mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/top-song/30.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0">God's Plan</h6>
                                       <p class="mb-0">Drake</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Popular Hindi Songs</h4>
                        </div>
                        <div class="d-flex align-items-center iq-view">
                           <b class="mb-0 text-primary"><a href="latest.php">View More <i class="las la-angle-right"></i></a></b>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <ul class="list-unstyled row  iq-box-hover mb-0">
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card ">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/01.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Said Sum</h6>
                                       <p class="mb-0">Moneybagg Yo</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/02.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Toosie Slide</h6>
                                       <p class="mb-0">Drake</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/03.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Girls In The Hood</h6>
                                       <p class="mb-0">Megan Thee </p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/04.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Supalonely</h6>
                                       <p class="mb-0">BENEE Featuring</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/05.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Walk Em Down</h6>
                                       <p class="mb-0">NLE Choppa</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/06.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Blood On</h6>
                                       <p class="mb-0">Juice WRLD</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/07.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">One Big Country</h6>
                                       <p class="mb-0">LOCASH</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/08.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Righteous</h6>
                                       <p class="mb-0">Juice WRLD</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-sm-0  mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/09.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Got What I Got</h6>
                                       <p class="mb-0">Jason Aldean</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-md-0 mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/10.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">I Love My Country</h6>
                                       <p class="mb-0">Florida Georgia</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-sm-0 mb-md-0 mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/11.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Got It On Me</h6>
                                       <p class="mb-0">Summer Walker</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-0 mb-sm-0 mb-md-0 mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.php">
                                          <img src="images/dashboard/popular-hindi-song/12.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.php">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Like That</h6>
                                       <p class="mb-0">Stefflon Don</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Wrapper END -->
   <!-- Footer -->

   <?php 
   include("includes/footer.php");
   ?>