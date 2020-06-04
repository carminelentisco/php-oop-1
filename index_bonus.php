<?php 

include_once __DIR__ . '/partials/classes.php';
include_once __DIR__ . '/partials/movies.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonus</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style_bonus.css">
</head>
<body>
    
    
    <header class="header-bg p-20">
        <div class="container header-text">
            <h1>MOVIES</h1>
        </div>
    </header>

    <section class="movies container">
        <div class="movie p-20">
            <h2><?php echo $movie1->print('title');?></h2>
            <ul class="movie-list pt-20 ">
                <li class="movie-item"><span class="strong">Author : </span><?php echo $movie1->print('author');?></li>
                <li class="movie-item"><span class="strong">Genere : </span><?php echo $movie1->print('genere');?></li>
                <li class="movie-item"><span class="strong">Publication date : </span><?php echo $movie1->print('publication_date');?></li>
            </ul>
        </div>

        <div class="movie p-20">
            <h2><?php echo $movie2->print('title');?></h2>
            <ul class="movie-list pt-20 ">
                <li class="movie-item"><span class="strong">Author : </span><?php echo $movie2->print('author');?></li>
                <li class="movie-item"><span class="strong">Genere : </span><?php echo $movie2->print('genere');?></li>
                <li class="movie-item"><span class="strong">Publication date : </span><?php echo $movie2->print('publication_date');?></li>
            </ul>
        </div>
    </section>

</body>
</html>