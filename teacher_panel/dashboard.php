<?php include('partials/_header.php') ?>

<!-- Sidebar -->
<?php include('partials/_sidebar.php') ?>
<input type="hidden" value="1" id="checkFileName">
<!-- End of Sidebar -->



<div class="modal fade" id="reminder-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Reminder</h1>
                <button type="button" class="close mr-2" data-bs-dismiss="modal" aria-label="Close"><i
                        class='bx bx-x'></i></button>
            </div>
            <div class="modal-body">

                <div class="container mr-3 ml-3">
                    <div class="alert alert-warning reminder-error" role="alert" style="min-height: 50px;display: none;">
                    Message can't be empty!
                    </div>
                    <div class="mb-3">
                        <!-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> -->
                        <textarea class="form-control" id="reminder-msg" rows="3"></textarea>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary text-center _flex-container" onclick="addReminder()"> <i
                        class='bx bx-plus'></i>&nbsp;<strong>ADD</strong></button>
            </div>
        </div>
    </div>
</div>


<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <?php include("partials/_navbar.php"); ?>
    <!-- End of Navbar -->

    <main>
        <div class="header">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li><a href="#">
                            Analytics
                        </a></li>

                </ul>
            </div>
            <!-- <a href="#" class="report">
                <i class='bx bxs-file-pdf'></i>
                <span>Worksheet PDF</span>
            </a> -->
        </div>

        <div class="welcome-banner" style="background: linear-gradient(135deg, #0052cc, #00b8d9); border-radius: 20px; padding: 30px; margin-bottom: 30px; color: white; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 15px 30px rgba(0, 82, 204, 0.3); overflow: hidden; position: relative;">
            <div style="z-index: 2;">
                <h2 style="margin: 0; font-size: 32px; font-weight: 700;">Welcome back, Teacher! 👋</h2>
                <p style="margin: 10px 0 0 0; font-size: 16px; opacity: 0.9;">Here's an overview of your classes and tasks today.</p>
            </div>
            <div style="z-index: 2;">
                <img src="../images/children.png" style="height: 140px; margin-bottom: -40px; filter: drop-shadow(0 10px 10px rgba(0,0,0,0.2));">
            </div>
            <!-- Decorative circle -->
            <div style="position: absolute; right: -50px; top: -50px; width: 200px; height: 200px; background: rgba(255,255,255,0.1); border-radius: 50%; z-index: 1;"></div>
        </div>

        <!-- Insights -->
        <ul class="insights">
            <li>
                <!-- <i class='bx bx-calendar-check'></i> -->
                <i class='bx bxs-user'></i>
                <span class="info">
                    <h3 class="text-center" id="teacherCount">_ _ _</h3>
                    <p>Teachers</p>
                </span>
            </li>
            <li onclick="showStudentList()">
                <i class='bx bxs-group'></i>
                <span class="info">
                    <h3  class="text-center" id="studentCount">_ _ _</h3>
                    <p>Students</p>
                </span>
            </li>
            <li onclick="showNotesList()">
                <i class='bx bx-book'></i>
                <span class="info">
                    <h3 class="text-center"  id="classCount">_ _ _</h3>
                    <p>Notes</p>
                </span>
            </li>
            <li onclick="showNoticeList()">
                <i class='bx bxs-bookmark'></i>
                <span class="info">
                    <h3 class="text-center"  id="noticeCount">_ _ _</h3>
                    <p>Notices</p>
                </span>
            </li>
        </ul>
        <!-- End of Insights -->

        <!-- SaaS Analytics Charts -->
        <div class="bottom-data" style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px; margin-top: 24px;">
            <div class="saas-card">
                <div class="header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                    <h3 style="font-size: 18px; font-weight: 600; color: #0F172A;"><i class='fas fa-chart-line' style="color: #4F46E5; margin-right: 8px;"></i> Class Performance</h3>
                </div>
                <canvas id="performanceChart" height="100"></canvas>
            </div>

            <div class="saas-card">
                <div class="header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                    <h3 style="font-size: 18px; font-weight: 600; color: #0F172A;"><i class='fas fa-chart-pie' style="color: #F59E0B; margin-right: 8px;"></i> Today's Attendance</h3>
                </div>
                <canvas id="attendanceChart" height="200"></canvas>
            </div>
        </div>

        <div class="bottom-data" style="margin-top: 24px;">
            <div class="orders saas-card">
                <div class="header">
                    <i class='bx bx-receipt'></i>
                    <h3 id="text-heading">Latest Notices</h3>
                    <i class='bx bx-filter'></i>
                    <a href="noticeboard.php" > <i class='bx bx-plus icon-hover-circle' id="plusIconNotification" style="font-size: 30px;"></i></a>
                </div>



                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Sender</th>
                        </tr>
                    </thead>
                    <tbody id="noticeTableBody">
                    <tr>
                            <td class="user">
                                <img src="../images/green.png">
                                <p>how do they do it</p>
                            </td>
                            <td>14-08-2023</td>
                            <td><span>Arvind verma</span></td>
                        </tr>
                        <tr>
                            <td class="user">
                                <img src="../images/red.png">
                                <p>Yogesh yadav</p>
                            </td>
                            <td>14-08-2023</td>
                            <td><span class="status complain">Complain</span></td>
                        </tr>
                        <tr>
                            <td class="user">
                                <img src="../images/yellow.png">
                                <p>Shubham kumar</p>
                            </td>
                            <td>14-08-2023</td>
                            <td><span class="status notice">Event</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Reminders -->
            <div class="reminders">
                <div class="header">
                    <i class='bx bx-note'></i>
                    <h3>Remiders</h3>
                    <!-- <i class='bx bx-filter'></i> -->
                    <a data-bs-toggle="modal" data-bs-target="#reminder-modal"> <i style="font-size: 30px;" class='bx bx-plus icon-hover-circle'></i></a>
                </div>
                <ul class="task-list" id="all-reminders">
                    
                </ul>
            </div>

            <!-- End of Reminders-->
        </div>
<br>
    </main>
</div>

<!-- SaaS Chart.js Initialization -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    if(document.getElementById('performanceChart')) {
        const ctxGrowth = document.getElementById('performanceChart').getContext('2d');
        new Chart(ctxGrowth, {
            type: 'bar',
            data: {
                labels: ['Midterm', 'Quiz 1', 'Quiz 2', 'Finals'],
                datasets: [{
                    label: 'Average Score',
                    data: [82, 75, 88, 91],
                    backgroundColor: '#4F46E5',
                    borderRadius: 5
                }]
            },
            options: { responsive: true, plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true } } }
        });
    }

    if(document.getElementById('attendanceChart')) {
        const ctxAtt = document.getElementById('attendanceChart').getContext('2d');
        new Chart(ctxAtt, {
            type: 'doughnut',
            data: {
                labels: ['Present', 'Absent', 'Late'],
                datasets: [{
                    data: [45, 5, 2],
                    backgroundColor: ['#10B981', '#EF4444', '#F59E0B'],
                    borderWidth: 0
                }]
            },
            options: { responsive: true, cutout: '75%', plugins: { legend: { position: 'bottom' } } }
        });
    }
});
</script>

<script src="../assets/js/dashboard.js"></script>
<?php include("partials/_footer.php");