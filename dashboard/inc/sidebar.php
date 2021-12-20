<?php 

$admin_name = $_SESSION['first_name'].' '.$_SESSION['last_name'];

?>

<div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-3.jpg">
      
      <div class="logo"><a target="_blank" href="../index.php" class="simple-text logo-normal" title="Jhenaidah Technical School and college">
           JTSC
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php if($page == 'bashboard'){ echo 'active';}?>">
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php if($page == 'user'){ echo 'active';}?>">
            <a class="nav-link" href="user.php">
              <i class="material-icons">person</i>
              <p><?php echo $admin_name?></p>
            </a>
          </li>
          <li class="nav-item <?php if($page == 'top-note'){ echo 'active';}?>">
            <a class="nav-link" href="top_note.php">
              <i class="material-icons">notifications_active</i>
              <p>Top Notice</p>
            </a>
          </li>
          <li class="nav-item <?php if($page == 'allnote'){ echo 'active';}?>">
            <a class="nav-link" href="allnote.php">
              <i class="material-icons">notifications</i>
              <p>All Notices</p>
            </a>
          </li>
          <li class="nav-item <?php if($page == 'slide'){ echo 'active';}?>">
            <a class="nav-link" href="slide.php">
              <i class="material-icons">slideshow</i>
              <p>Sliders</p>
            </a>
          </li>
          <li class="nav-item <?php if($page == 'message'){ echo 'active';}?>">
            <a class="nav-link" href="principal-message.php">
              <i class="material-icons">message</i>
              <p>Principal Message</p>
            </a>
          </li>
          <li class="nav-item <?php if($page == 'student'){ echo 'active';}?>">
            <a class="nav-link" href="student.php">
              <i class="material-icons">people_alt</i>
              <p>Students</p>
            </a>
          </li>
          <li class="nav-item <?php if($page == 'teacher'){ echo 'active';}?>">
            <a class="nav-link" href="teacher.php">
              <i class="material-icons">emoji_people</i>
              <p>Teachers</p>
            </a>
          </li>
          <li class="nav-item <?php if($page == 'subject'){ echo 'active';}?>">
            <a class="nav-link" href="subject.php">
              <i class="material-icons">dynamic_feed</i>
              <p>Department Subject</p>
            </a>
          </li>
          <li class="nav-item <?php if($page == 'result'){ echo 'active';}?>">
            <a class="nav-link" href="result.php">
              <i class="material-icons">bubble_chart</i>
              <p>Results</p>
            </a>
          </li>
          <li class="nav-item <?php if($page == 'routine'){ echo 'active';}?>">
            <a class="nav-link" href="routine.php">
              <i class="material-icons">class</i>
              <p>Routine</p>
            </a>
          </li>
          <li class="nav-item <?php if($page == 'video'){ echo 'active';}?>">
            <a class="nav-link" href="video.php">
              <i class="material-icons">switch_video</i>
              <p>Videos</p>
            </a>
          </li>
          <li class="nav-item <?php if($page == 'gallery'){ echo 'active';}?>">
            <a class="nav-link" href="gallery.php">
              <i class="material-icons">photo_library</i>
              <p>Gallery</p>
            </a>
          </li>
          <li class="nav-item <?php if($page == 'banner'){ echo 'active';}?>">
            <a class="nav-link" href="banner.php">
              <i class="material-icons">person</i>
              <p>Top Banner/Logo</p>
            </a>
          </li>
           <li class="nav-item <?php if($page == 'short'){ echo 'active';}?>">
            <a class="nav-link" href="short_course.php">
              <i class="material-icons">person</i>
              <p>Short Course</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
