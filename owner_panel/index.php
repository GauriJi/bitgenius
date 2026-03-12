<?php
include("../assets/noSessionRedirect.php"); 
include('./fetch-data/verfyRoleRedirect.php');

error_reporting(0);
?>
<?php
   session_start();
   $uid=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../images/1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <title>SaaS ERP - Owner Dashboard</title>
    <link rel="stylesheet" href="../css/oranbyte-google-translator.css">
    <script src="../js/oranbyte-google-translator.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body style="background-color: #F8FAFC; font-family: 'Inter', sans-serif;">
    <div class="header">
        <nav class="navbar navbar-expand-lg" style="background: white; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); padding: 15px 24px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" style="font-weight: 700; font-size: 24px;"><span style="color: #4F46E5;">SaaS</span><span style="color: #0F172A;">ERP</span> <span style="font-size: 14px; color: #64748B; font-weight: 400; margin-left: 8px;">| Owner Portal</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 30px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: #4F46E5; font-weight: 600;"><i class="fas fa-home me-1"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="notices.php" style="color: #475569; font-weight: 500;"><i class="fas fa-bullhorn me-1"></i> Notice</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #475569; font-weight: 500;">
            <i class="fas fa-wallet me-1"></i> Fee Pay
          </a>
          <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="navbarDropdown" style="border-radius: 12px;">
            <li><a class="dropdown-item" href="make-payment.php">Make Payment</a></li>
            <li><a class="dropdown-item" href="see-payment.php">Payment History</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="change-password.php" style="color: #475569; font-weight: 500;"><i class="fas fa-key me-1"></i> Password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="color: #EF4444; font-weight: 500;"><i class="fas fa-sign-out-alt me-1"></i> Logout</a>
        </li>
      </ul>
      <form class="d-flex align-items-center">
            <div id="oranbyte-google-translator" class="me-2"
              data-default-lang="en"
              data-lang-root-style="code-flag"
              data-lang-list-style="code-flag"
              ></div>

        <div class="input-group" style="background: #F1F5F9; border-radius: 8px; border: 1px solid #E2E8F0; padding: 4px;">
            <input class="form-control border-0 bg-transparent shadow-none" type="search" placeholder="Search..." aria-label="Search">
            <button class="btn border-0 text-secondary" type="submit"><i class="fas fa-search"></i></button>
        </div>
      </form>
    </div>
  </div>
</nav>
    </div>
    <?php
     $sql = "SELECT COUNT(*) as total_rows FROM users WHERE role='teacher'";
     $result = mysqli_query($conn, $sql);
     if(mysqli_num_rows($result) > 0) {
         $row = mysqli_fetch_assoc($result);
    ?>
    <div class="main container mt-5" style="display: flex; gap: 30px; flex-wrap: wrap; justify-content: center;">
        <div class="card1" style="flex: 1; min-width: 300px; max-width: 400px;">
            <div class="card border-0" style="border-radius: 20px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); overflow: hidden; transition: transform 0.3s ease;">
             <div style="background: linear-gradient(135deg, #4F46E5, #3b82f6); padding: 40px 0; text-align: center;">
                 <i class="fas fa-chalkboard-teacher" style="font-size: 60px; color: white;"></i>
             </div>
             <div class="card-body text-center" style="padding: 30px;">
                <?php
                echo "<h5 class='card-title' style='font-size: 24px; font-weight: 700; color: #0F172A; margin-bottom: 5px;'>".$row['total_rows']."</h5>
               <p class='card-text' style='color: #64748B; font-size: 16px; margin-bottom: 25px;'>Total Active Teachers</p>
               <a href='teacher-list.php' class='btn w-100' style='background: #EEF2FF; color: #4F46E5; font-weight: 600; padding: 12px; border-radius: 10px;'>Manage Teachers</a>";
               }
               ?>
             </div>
           </div>
        </div>
        <?php
     $sql_1 = "SELECT COUNT(*) as total_row FROM users WHERE role='student'";
     $result1 = mysqli_query($conn, $sql_1);
     if(mysqli_num_rows($result1) > 0) {
         $rows = mysqli_fetch_assoc($result1);
    ?>
        <div class="card2" style="flex: 1; min-width: 300px; max-width: 400px;">
            <div class="card border-0" style="border-radius: 20px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); overflow: hidden; transition: transform 0.3s ease;">
             <div style="background: linear-gradient(135deg, #22C55E, #10B981); padding: 40px 0; text-align: center;">
                 <i class="fas fa-user-graduate" style="font-size: 60px; color: white;"></i>
             </div>
             <div class="card-body text-center" style="padding: 30px;">
               <h5 class="card-title" style="font-size: 24px; font-weight: 700; color: #0F172A; margin-bottom: 5px;"><?php echo $rows['total_row'];} ?></h5>
               <p class="card-text" style="color: #64748B; font-size: 16px; margin-bottom: 25px;">Total Active Students</p>
               <a href="student-list.php" class="btn w-100" style="background: #F0FDF4; color: #22C55E; font-weight: 600; padding: 12px; border-radius: 10px;">Manage Students</a>
             </div>
           </div>
        </div>
    </div>
   <footer class="text-center bg-body-tertiary mt-5" style="border-top: 1px solid #E2E8F0;">
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © <?php echo date('Y'); ?> Copyright:
    <a class="text-body" target="_blank" href="https://www.github.com/ProjectsAndPrograms">ProjectsAndPrograms</a>
  </div>
  <!-- Copyright -->
</footer>
<script type="text/javascript">
        import { Ripple, initMDB } from "mdb-ui-kit";

        initMDB({ Ripple });
    </script>
</body>
</html>