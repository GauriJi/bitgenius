
<div class="sidebar" style="background: #111827; box-shadow: 4px 0 10px rgba(0,0,0,0.1);">
    <a href="dashboard.php" class="logo" style="padding: 20px 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
        <!-- <i class='bx bx-book-bookmark'></i> -->
        <img src="../images/1.png" style="width: 40px; margin-right: 10px;">
          <div class="logo-name" style="color: white; font-weight: 700; font-size: 24px;"><span style="color: #4F46E5;">SaaS</span><span style="color: #F8FAFC;">ERP</span></div>
    </a>
    
      <ul class="side-menu-opener">
        <!-- <li>
            <div class='open-arrow SidebarOpener'><i class='bx bxs-chevron-right'></i></div>
        </li> -->
    </ul>
    
    <ul class="side-menu main-side-board">
        <li><a href="dashboard.php"><i class='fas fa-home'></i>Dashboard</a></li>
        <li><a href="teacher.php"><i class='fas fa-chalkboard-teacher'></i>Teacher</a></li>
        <li><a href="student.php"><i class='fas fa-user-graduate'></i>Student</a></li>
        <li><a href="subjects.php"><i class='fas fa-book'></i>Subjects</a></li>
        <li><a href="attendence.php"><i class='fas fa-clipboard-check'></i>Attendence</a></li>
        <li><a href="noticeboard.php"><i class='fas fa-bullhorn'></i>Notice Board</a></li>
        <li><a href="timetable.php"><i class='fas fa-calendar-alt'></i>Time Table</a></li>
        <li><a href="syllabus.php"><i class='fas fa-file-alt'></i>Syllabus</a></li>
        <li><a href="notes.php"><i class='fas fa-sticky-note'></i>Notes</a></li>
        <li><a href="marks.php"><i class='fas fa-award'></i>Marks</a></li>
        <li><a href="buses.php"><i class='fas fa-bus'></i>Bus Service</a></li>
        <li><a href="settings.php"><i class='fas fa-cog'></i>Settings</a></li>
    </ul>
    <ul class="side-menu">
        <li>
            <a class="logout" data-bs-toggle="modal" data-bs-target="#logout-modal" style="color: #EF4444;">
                <i class='fas fa-sign-out-alt'></i>
                Logout
            </a>
        </li>
    </ul>
</div>

<div class="modal fade" id="logout-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <strong>Do you really want to logout?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" onclick="logout()">Logout</button>
            </div>
        </div>
    </div>
</div>
