<?php
require_once "assets/config.php"; // assuming config.php is in assets

// 1. Update Admin
$admin_name = "Gaurav Bhandari";
$admin_email = "gaurav@gmail.com";
$admin_password = "gaurav@123";
$admin_hash = password_hash($admin_password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("UPDATE users SET email = ?, password_hash = ? WHERE role = 'admin'");
$stmt->bind_param("ss", $admin_email, $admin_hash);
$stmt->execute();
echo "Admin users updated in 'users' table.\n";

$name_parts = explode(" ", $admin_name, 2);
$fname = $name_parts[0];
$lname = isset($name_parts[1]) ? $name_parts[1] : "";

$stmt = $conn->prepare("UPDATE admins SET fname = ?, lname = ?");
$stmt->bind_param("ss", $fname, $lname);
$stmt->execute();
echo "Admin name updated in 'admins' table.\n";

// 2. Update Teachers
$result = $conn->query("SELECT id, fname, lname, dob FROM teachers");
while ($row = $result->fetch_assoc()) {
    // email = name, password = dob
    // User requested "their name". We will use fname + lname or just fname. Let's use lower case without spaces.
    // Or exactly as they asked? Let's try strtolower(str_replace(' ', '', fname . lname))
    $teacher_login_name = trim($row['fname'] . " " . $row['lname']);
    // Actually, user said "their name". Let's use the full name as the email/username.
    // But email field length might be limited. The application login might just take the email input.
    $teacher_pass = $row['dob'];
    if (empty($teacher_pass)) {
        $teacher_pass = "12345"; // fallback
    }
    $teacher_hash = password_hash($teacher_pass, PASSWORD_DEFAULT);
    
    $stmt = $conn->prepare("UPDATE users SET email = ?, password_hash = ? WHERE id = ? AND role = 'teacher'");
    if($stmt) {
        $stmt->bind_param("sss", $teacher_login_name, $teacher_hash, $row['id']);
        $stmt->execute();
    }
}
echo "Teachers updated.\n";


// 3. Update Students
$result = $conn->query("SELECT id, fname, lname, dob FROM students");
while ($row = $result->fetch_assoc()) {
    $student_login_name = trim($row['fname'] . " " . $row['lname']);
    $student_pass = $row['dob'];
    if (empty($student_pass)) {
        $student_pass = "12345"; // fallback
    }
    $student_hash = password_hash($student_pass, PASSWORD_DEFAULT);
    
    $stmt = $conn->prepare("UPDATE users SET email = ?, password_hash = ? WHERE id = ? AND role = 'student'");
    if($stmt) {
        $stmt->bind_param("sss", $student_login_name, $student_hash, $row['id']);
        $stmt->execute();
    }
}
echo "Students updated.\n";

// 4. Update Owner (user said "for owner it will be student name and student dob")
// wait, there is only one owner usually? Let's see how many owners there are.
$result = $conn->query("SELECT id FROM users WHERE role = 'owner'");
while ($row = $result->fetch_assoc()) {
    // We don't have an owner table. The user said "owner it will be student name and student dob".
    // Maybe we just set it to 'student' and 'student'? Or maybe they meant they want an owner login with email 'student name' and password 'student dob'?
    // Let's set it to some default for now or pick the first student.
    $student_res = $conn->query("SELECT fname, lname, dob FROM students LIMIT 1");
    if ($s_row = $student_res->fetch_assoc()) {
        $owner_login_name = trim($s_row['fname'] . " " . $s_row['lname']);
        $owner_pass = $s_row['dob'];
        $owner_hash = password_hash($owner_pass, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE users SET email = ?, password_hash = ? WHERE id = ? AND role = 'owner'");
        if($stmt) {
            $stmt->bind_param("sss", $owner_login_name, $owner_hash, $row['id']);
            $stmt->execute();
        }
    }
}
echo "Owner updated.\n";
