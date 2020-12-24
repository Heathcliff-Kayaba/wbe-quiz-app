<?php
    include_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bible Quiz App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">
                <img src="images/wbe-logo.png" width="150" alt="WBE Logo"> 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="vid-quiz.php">Videos & Quizzes</a>
                    <a class="nav-item nav-link active" href="leaderboard.php">Leaderboard</a>
                    <a class="nav-item nav-link" href="about-us.php">About us</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="pad">
            <h1>Leaderboard</h1>
            <hr>
            <h3>Quiz 1</h3>
            <table class="table leaderboard">
                <tr>
                    <th scope="col">Rank</th>
                    <th scope="col">Name</th>
                    <th scope="col">Score</th>
                </tr>
                <?php

                $result = mysqli_query($conn, "SELECT record_name, record_score FROM record ORDER BY record_score DESC");
                $rank = 1;

                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>{$rank}</td>
                            <td>{$row['record_name']}</td>
                            <td>{$row['record_score']}</td>
                            </tr>";
                        
                        $rank++;
                    }
                }
                ?>
            </table>
            <hr>
            <h3>Quiz 2</h3>
            <table class="table leaderboard">
                <tr>
                    <th scope="col">Rank</th>
                    <th scope="col">Name</th>
                    <th scope="col">Score</th>
                </tr>
                <?php

                $result = mysqli_query($conn, "SELECT record_name, record_score FROM record_2 ORDER BY record_score DESC");
                $rank = 1;

                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>{$rank}</td>
                            <td>{$row['record_name']}</td>
                            <td>{$row['record_score']}</td>
                            </tr>";
                        
                        $rank++;
                    }
                }
                ?>
            </table>
            <hr>
            <h3>Quiz 3</h3>
            <table class="table leaderboard">
                <tr>
                    <th scope="col">Rank</th>
                    <th scope="col">Name</th>
                    <th scope="col">Score</th>
                </tr>
                <?php

                $result = mysqli_query($conn, "SELECT record_name, record_score FROM record_3 ORDER BY record_score DESC");
                $rank = 1;

                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>{$rank}</td>
                            <td>{$row['record_name']}</td>
                            <td>{$row['record_score']}</td>
                            </tr>";
                        
                        $rank++;
                    }
                }
                ?>
            </table>
            <hr>
            <h3>Quiz 4</h3>
            <table class="table leaderboard">
                <tr>
                    <th scope="col">Rank</th>
                    <th scope="col">Name</th>
                    <th scope="col">Score</th>
                </tr>
                <?php

                $result = mysqli_query($conn, "SELECT record_name, record_score FROM record_4 ORDER BY record_score DESC");
                $rank = 1;

                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>{$rank}</td>
                            <td>{$row['record_name']}</td>
                            <td>{$row['record_score']}</td>
                            </tr>";
                        
                        $rank++;
                    }
                }
                ?>
            </table>
            <hr>
            <h3>Quiz 5</h3>
            <table class="table leaderboard">
                <tr>
                    <th scope="col">Rank</th>
                    <th scope="col">Name</th>
                    <th scope="col">Score</th>
                </tr>
                <?php

                $result = mysqli_query($conn, "SELECT record_name, record_score FROM record_5 ORDER BY record_score DESC");
                $rank = 1;

                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>{$rank}</td>
                            <td>{$row['record_name']}</td>
                            <td>{$row['record_score']}</td>
                            </tr>";
                        
                        $rank++;
                    }
                }
                ?>
            </table>
        </div>
    </main> 
    <footer>
        <div class="card text-center">
            <div class="card-header">
                Videos & Quizzes
            </div>
            <div class="card-body">
                <h5 class="card-title">Watch and Take the Quiz</h5>
                <p class="card-text">After watching the video you can take the quiz or you can directly take the quiz.</p>
                <a href="video-quiz/video1.php" class="btn btn-primary">Video 1</a>
                <a href="video-quiz/video2.php" class="btn btn-primary">Video 2</a>
                <a href="video-quiz/video3.php" class="btn btn-primary">Video 3</a>
                <a href="video-quiz/video4.php" class="btn btn-primary">Video 4</a>
                <a href="video-quiz/video5.php" class="btn btn-primary">Video 5</a>
            </div>
            <div class="card-footer text-muted">
                &copy WebDevStudents 2020
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>