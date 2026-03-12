<nav style="background: white; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); padding: 10px 24px;">
  <i class='fas fa-bars SidebarOpener' style="cursor: pointer; font-size: 20px; color: #475569;"></i>
  <form id="unknowingForm" style="margin-left: 20px;">
    <div class="form-input" style="background: #F8FAFC; border-radius: 8px; border: 1px solid #E2E8F0; padding: 5px 15px; display: flex; align-items: center;">
      <input type="search" placeholder="Search..." id="topMostSearchBar" style="border: none; background: transparent; outline: none; width: 250px;">
      <button class="search-btn" type="button" id="topMostSearchBarBtn" style="background: transparent; border: none; color: #64748B;"><i class='fas fa-search'></i></button>
    </div>
  </form>


  <div id="oranbyte-google-translator" 
        data-default-lang="en"
        data-lang-root-style="code-flag"
        data-lang-list-style="code-flag"
        ></div>


  <input type="checkbox" id="theme-toggle" hidden>
  <label for="theme-toggle" class="theme-toggle" onload="checkAndChangeTheme()"></label>

  <div class="dropdown dropdown-center" style="margin-left: auto;">
                <a href="#" class="notif"  href="#"  data-bs-toggle="dropdown" aria-expanded="false" style="position: relative; color: #64748B; font-size: 20px; margin-right: 20px;">
                    <i class='fas fa-bell'></i>
                    <span class="count" style="position: absolute; top: -5px; right: -8px; background: #EF4444; color: white; border-radius: 50%; width: 18px; height: 18px; font-size: 10px; display: flex; justify-content: center; align-items: center;">3</span>
                </a>
              
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item">Server restart scheduled</a></li>
                  <li><a class="dropdown-item">New teacher joined</a></li>
                  <li><a class="dropdown-item">Payment received</a></li>
                </ul>
              </div>


  <a href="settings.php" class="profile" id="navbar_profile_pic" style="margin-right: 15px;">
    <img src="../images/user.png" style="width: 36px; height: 36px; border-radius: 50%; object-fit: cover; border: 2px solid #E2E8F0;">
  </a>

  <div class="dropdown dropdown-center">
    <a class=" menu" href="#" data-bs-toggle="dropdown" aria-expanded="false" style="color: #64748B;">
      <i class='fas fa-ellipsis-v icon-hover-circle'></i>
    </a>

    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="settings.php">Settings</a></li>
      <!-- <li><a class="dropdown-item" href="#"></a></li> -->
      <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logout-modal">Logout</a></li>
    </ul>
  </div>
</nav>

<?php
// session_start();
$theme = "";

if (isset($_SESSION['theme'])) {
  $theme = $_SESSION['theme'];
} else {
  $theme = 'light';
}

?>