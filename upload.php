<?php
include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $filename = 'uploads/' . basename($_FILES['image']['name']);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $filename)) {
        $stmt = $pdo->prepare("INSERT INTO images (user_id, filename) VALUES (?, ?)");
        $stmt->execute([$_SESSION['user_id'], $filename]);
        echo "Image uploaded successfully!";
    } else {
        echo "Error uploading image.";
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="image" required />
    <button type="submit">Upload Image</button>
</form>
