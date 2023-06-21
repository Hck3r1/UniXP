<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>My Blog</h1>
            <nav>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <section id="blog-posts">
            <?php
            // Retrieve blog posts from database and display them dynamically
            $posts = [
                [
                    'title' => 'Post Title 1',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id tortor at justo blandit condimentum. Duis faucibus arcu eget felis commodo, et semper dolor lacinia.',
                    'author' => 'John Doe',
                    'date' => '2023-05-09'
                ],
                [
                    'title' => 'Post Title 2',
                    'content' => 'Vivamus feugiat, tortor sit amet tempor varius, tellus lectus finibus dui, et condimentum justo nisl a arcu. Curabitur mollis odio elit, non iaculis lectus aliquet non.',
                    'author' => 'Jane Smith',
                    'date' => '2023-05-10'
                ],
            ];

            foreach ($posts as $post) {
                echo "<article class='blog-post'>
                        <h2>{$post['title']}</h2>
                        <p>{$post['content']}</p>
                        <div class='post-meta'>
                            <span class='author'>By {$post['author']}</span>
                            <span class='date'>{$post['date']}</span>
                        </div>
                    </article>";
            }
            ?>
        </section>
    </div>
</body>
</html>
