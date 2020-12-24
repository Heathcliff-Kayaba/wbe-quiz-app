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
                    <a class="nav-item nav-link active" href="vid-quiz.php">Videos & Quizzes</a>
                    <a class="nav-item nav-link" href="leaderboard.php">Leaderboard</a>
                    <a class="nav-item nav-link" href="about-us.php">About us</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <br>
        <div style="text-align: center">
            <a class="a-hover" href="video-quiz/video1.php"><h1>Quiz 1</h1></a>
        </div>
        <br><hr>
        <div style="text-align: center">
            <a class="a-hover" href="video-quiz/video2.php"><h1>Quiz 2</h1></a>
        </div>
        <br><hr>
        <div style="text-align: center"">
            <a class="a-hover" href="video-quiz/video3.php"><h1>Quiz 3</h1></a>
        </div>
        <br><hr>
        <div style="text-align: center"">
            <a class="a-hover" href="video-quiz/video4.php"><h1>Quiz 4</h1></a>
        </div>
        <br><hr>
        <div style="text-align: center"">
            <a class="a-hover" href="video-quiz/video5.php"><h1>Quiz 5</h1></a>
        </div>
    </main> 
    <footer>
        <div class="card text-center">
            <div class="card-header">
                Link
            </div>
            <div class="card-body">
                <h5 class="card-title">Check out the Leaderboard!</h5>
                <p class="card-text">See the current ranking of Quizzes.</p>
                <a href="leaderboard.php" class="btn btn-primary">Leaderboard</a>
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