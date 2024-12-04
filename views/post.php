// views/posts.php
<!DOCTYPE html>
<html>
<body>
<h1>Posts</h1>
<?php foreach($posts as $post): ?>
    <div><?php echo $post['title']; ?></div>
<?php endforeach; ?>
</body>
</html>