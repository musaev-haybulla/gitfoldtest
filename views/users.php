// views/users.php
<!DOCTYPE html>
<html>
<body>
<h1>Users</h1>
<?php foreach($users as $user): ?>
    <div><?php echo $user['name']; ?></div>
<?php endforeach; ?>
</body>
</html>