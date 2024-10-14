<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <?php
         $aid= $_SESSION['sturecmsaid'];
$sql="SELECT * from tbladmin where ID=:aid";

$query = $dbh -> prepare($sql);
$query->bindParam(':aid',$aid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                  <p class="profile-name"><?php  echo htmlentities($row->AdminName);?></p>
                  <p class="designation"><?php  echo htmlentities($row->Email);?></p><?php $cnt=$cnt+1;}} ?>
                </div>
               
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Trang chủ</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Trang chủ</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Lớp học</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-class.php">Thêm lớp học</a></li>
                  <li class="nav-item"> <a class="nav-link" href="manage-class.php">Quản lí lớp học</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
                <span class="menu-title">Học sinh</span>
                <i class="icon-people menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-students.php">Đăng ký học sinh</a></li>
                  <li class="nav-item"> <a class="nav-link" href="manage-students.php">Quản lí học sinh</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">Thông báo</span>
                <i class="icon-doc menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-notice.php"> Đăng tải thông báo </a></li>
                  <li class="nav-item"> <a class="nav-link" href="manage-notice.php"> Quản lí thông báo </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth1" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">Thông tin đại chúng</span>
                <i class="icon-doc menu-icon"></i>
              </a>
              <div class="collapse" id="auth1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-public-notice.php"> Thêm thông báo công khai </a></li>
                  <li class="nav-item"> <a class="nav-link" href="manage-public-notice.php"> Quản lí thông báo công khai </a></li>
                </ul>
              </div>
              <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth2" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">Trang</span>
                <i class="icon-doc menu-icon"></i>
              </a>
              <div class="collapse" id="auth2">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="about-us.php"> Thông Tin </a></li>
                  <li class="nav-item"> <a class="nav-link" href="contact-us.php"> Liên hệ </a></li>
                </ul>
              </div>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="between-dates-reports.php">
                <span class="menu-title">Nhật kí</span>
                <i class="icon-notebook menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="search.php">
                <span class="menu-title">Tìm kiếm</span>
                <i class="icon-magnifier menu-icon"></i>
              </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="add-test.php">
                <span class="menu-title">Đăng tải đề luyện tập</span>
                <i class="icon-notebook menu-icon"></i>
              </a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="https://studentmanagement.online/login.php" target="_blank">
                <span class="menu-title">Kênh nhắn tin</span>
                <i class="icon-notebook menu-icon"></i>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="https://studentmanagement.online/confessgv.php">
                <span class="menu-title">Confession</span>
                <i class="icon-notebook menu-icon"></i>
              </a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="logout.php">
                <span class="menu-title">Đăng xuất</span>
                <i class="icon-magnifier menu-icon"></i>
              </a>
            </li>
            </li>
          </ul>
        </nav>