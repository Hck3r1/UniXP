<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Admin Panel</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="admin.php">Admin Panel</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <section id="add-post">
            <h2>Add New Post</h2>
            <form action="process_post.php" method="POST">
                <input type="text" name="title" placeholder="Title" required>
                <textarea name="content" placeholder="Content" required></textarea>
                <input type="text" name="author" placeholder="Author" required>
                <input type="date" name="date" required>
                <input type="submit" value="Add Post">
            </form>
        </section>
    </div>
</body>
</html>
