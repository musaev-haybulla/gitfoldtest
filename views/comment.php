// views/comments.php
<!DOCTYPE html>
<html>
<body>
<h1>Comments</h1>
<?php foreach($comments as $comment): ?>
    <div><?php echo $comment['text']; ?></div>
<?php endforeach; ?>
</body>
</html>