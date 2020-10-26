<?php

require __DIR__ . ('/functions.php');
require __DIR__ . ('/data.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Fake News</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Six+Caps&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Asap+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>


<body>
    <div class="topHeader">
        <h1 class="headerTitle"> Real Fake News </h1>
    </div>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="#">Global News</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Sports</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Tech News</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Music</a>
        </li>
    </ul>


    <div class="newsFeedContainer">
        <?php foreach ($articles as $article) : ?>
            <div class="card">
                <img src=<?php echo $article['image']; ?> class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $article['title']; ?></h5>
                    <p class="card-text"><?php echo $article['content']; ?></p>
                    <p><?php echo $article['author']['full_name']; ?></p>
                    <p>Published date</p>
                    <div class="bottom-card-content">
                        <a href="#" class="btn btn-primary">Read more</a>
                        <div class="likeCounter">

                            <p class="like-counter">14</p>
                            <i class="glyphicon glyphicon-thumbs-up"></i>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>