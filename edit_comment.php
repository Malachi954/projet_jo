<?php
include 'bdd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment_id = $_POST['comment_id'];
    $username = $_POST['username'];
    $comment = $_POST['comment'];

    $sql = "UPDATE comments SET username = :username, comment = :comment WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $comment_id);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':comment', $comment);
    $stmt->execute();

    header("Location: news.php?id=" . $_POST['news_id']);
} else {
    $comment_id = $_GET['id'];

    $sql = "SELECT * FROM comments WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $comment_id);
    $stmt->execute();
    $comment = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier le commentaire</title>
</head>
<body>
    <h1>Modifier le commentaire</h1>
    <form action="edit_comment.php" method="post">
        <input type="hidden" name="comment_id" value="<?php echo $comment['id']; ?>">
        <input type="hidden" name="news_id" value="<?php echo $comment['news_id']; ?>">
        <p>Nom: <input type="text" name="username" value="<?php echo htmlspecialchars($comment['username']); ?>"></p>
        <p>Commentaire: <textarea name="comment"><?php echo htmlspecialchars($comment['comment']); ?></textarea></p>
        <p><input type="submit" value="Modifier"></p>
    </form>
</body>
</html>
