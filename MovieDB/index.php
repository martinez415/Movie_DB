<?php
    require('database.php');

    $movie_id=$_GET['movie_id'];

    $queryMovie='SELECT MoviePic, Title, ReleaseYear FROM movie WHERE MovieID=:movie_id ;';
    $queryDirector='SELECT FirstName, LastName, DirectorPic FROM movie m INNER JOIN director d ON m.DirectorID=d.DirectorID WHERE MovieID=:movie_id ;';

    $statement=$db->prepare($queryMovie);
    $statement2=$db->prepare($queryDirector);
    $statement->bindValue(':movie_id', $movie_id);
    $statement2->bindValue(':movie_id', $movie_id);
    $statement->execute();
    $statement2->execute();
    $movies=$statement->fetchAll();
    $directors=$statement2->fetchAll();
    $statement->closeCursor();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>MartVid: Streaming Service</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manjari:wght@100;400;700&family=Rubik+Spray+Paint&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="JS/function.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/index.css">
        <link rel="stylesheet" href="CSS/table.css">
        
    </head>
    <body>
        <header>
            <nav class="nav_bar">
                <a href="index.html"><img src="Images/logo_icon.png" id="logo" alt="app_logo"></a>
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="">Series</a>
                    </li>
                    <li>
                        <a href="">Movies</a>
                    </li>   
                </ul>
                <a href="#"><img src="Images/user_icon.png" id="user" alt="user profile"></a>
            </nav>
        </header>
        <?php foreach($movies as $movie): ?>
            <img id="movie_poster"src="<?php echo $movie['MoviePic']?>">
        <?php endforeach ?>
        
        <div class="container">
            <div id="movie_details">
                <?php foreach($movies as $movie): ?>
                    <h1>
                        <?php echo $movie['Title']  ?>
                    </h1>
                    <h2>
                        <?php echo $movie['ReleaseYear']  ?>
                    </h2>
                <?php endforeach ?>
            </div>
            <div id="director_details">
                <?php foreach($directors as $director): ?>
                    <h2 id="director_name"><?php echo $director['FirstName'].' '.$director['LastName'] ?></h2>
                <?php endforeach ?>

                <?php foreach($directors as $director): ?>
                    <img id="director_pic" src="<?php echo $director['DirectorPic']?>">
                <?php endforeach ?>
            </div>
        </div>   
            
            
        <footer>
            <div class="footer">
                <img src="Images/social_media.png" id="social_media_logo">
                <p id="rights">2024 MartTechnologies All Rights Reserved</p>
            </div>
        </footer>    
    </body>
</html>