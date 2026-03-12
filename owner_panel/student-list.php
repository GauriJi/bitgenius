
<?php
include("../assets/noSessionRedirect.php"); 
include('./fetch-data/verfyRoleRedirect.php');

error_reporting(0);
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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>SaaS ERP - Owner Student List</title>
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
          <a class="nav-link" aria-current="page" href="index.php" style="color: #475569; font-weight: 500;"><i class="fas fa-home me-1"></i> Home</a>
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
            <input class="form-control border-0 bg-transparent shadow-none" type="search" placeholder="Search Students..." id="search-student" aria-label="Search">
            <button class="btn border-0 text-secondary" type="submit"><i class="fas fa-search"></i></button>
        </div>
      </form>
    </div>
  </div>
</nav>
    </div>
    </div>
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="select">
                  <select class="form-select" aria-label="Default select example" id="form-select" style="border-radius: 10px; border: 1px solid #E2E8F0; padding: 12px; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05); font-weight: 500; color: #475569;">
              <option value="" selected>Filter by Class</option>
              <option value="12m">12 (Math)</option>
            <option value="12b">12 (Bio)</option>
            <option value="12c">12 (Commerce)</option>
            <option value="11m">11 (Math)</option>
            <option value="11b">11 (Bio)</option>
            <option value="11c">11 (Commerce)</option>
            <option value="10">10</option>
            <option value="9">9</option>
            <option value="8">8</option>
            <option value="7">7</option>
            <option value="6">6</option>
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
            <option value="pg">pg</option>
            <option value="lkg">lkg</option>
            <option value="ukg">ukg</option>
            
            </select>
                </div>
            </div>
        </div>

        <div class="teacher-list card border-0" style="border-radius: 20px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); overflow: hidden;">
            <div class="card-header bg-white" style="padding: 24px; border-bottom: 1px solid #E2E8F0;">
                <h3 style="margin: 0; font-size: 20px; font-weight: 700; color: #0F172A;"><i class="fas fa-user-graduate" style="color: #22C55E; margin-right: 10px;"></i> Student Directory</h3>
            </div>
            <div class="card-body p-0">
              <table class="table table-hover mb-0" style="border-collapse: separate; border-spacing: 0;">
          <thead style="background-color: #F8FAFC;">
            <tr>
              <th scope="col" style="padding: 16px 24px; color: #64748B; font-weight: 600; font-size: 13px; text-transform: uppercase;">Sr_NO</th>
              <th scope="col" style="padding: 16px 24px; color: #64748B; font-weight: 600; font-size: 13px; text-transform: uppercase;">NAME</th>
              <th scope="col" style="padding: 16px 24px; color: #64748B; font-weight: 600; font-size: 13px; text-transform: uppercase;">Class & Section</th>
              <th scope="col" style="padding: 16px 24px; color: #64748B; font-weight: 600; font-size: 13px; text-transform: uppercase;">MORE DETAILS</th>
            </tr>
          </thead>
          <tbody id="tb" style="background: white;">
            
          </tbody>
        </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function(){
        function load_table(){$.ajax({
          url: "fetch-data/fetch-student.php",
          method: "POST",
          success: function(data){
             $("#tb").html(data);
          }
        });
      }
      load_table();

        $("#form-select").change(function(){
          var select=$(this).val();
          $.ajax({
              url: "fetch-data/select-students.php",
              type: "POST",
              data: {select: select},
              success: function(data){
                  $("#tb").html(data);
              }
        });
        });

        $("#search-student").on("keyup",function(){
          var search=$(this).val();
          $.ajax({
              url: "fetch-data/search-student.php",
              type: "POST",
              data: {search: search},
              success: function(data){
                  $("#tb").html(data);
              }
        });
        });
        
      
      });

     


    </script>
  </body>
  </html>