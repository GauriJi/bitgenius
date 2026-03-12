<?php
$hash = '$2y$10$2MrhbQa30mll8mKG6LPyjuI7CQPC4abCvqrSvczxXVRu4RVueRfoe';
$passwords = ['admin', '12345', '123456', 'password', 'teacher', 'owner', 'testing'];
foreach ($passwords as $p) {
    if (password_verify($p, $hash)) {
        echo "Found: $p";
        exit;
    }
}
echo "Not found";
?>
