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
            <a class="navbar-brand" href="../index.php">
                <img src="../images/wbe-logo.png" width="150" alt="WBE Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="../vid-quiz.php">Videos & Quizzes</a>
                    <a class="nav-item nav-link" href="../leaderboard.php">Leaderboard</a>
                    <a class="nav-item nav-link" href="../about-us.php">About us</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Y__Grs96VJs"></iframe>
        </div>  
    </main> 
    <footer>
        <div class="card text-center">
            <div class="card-header">
                Quiz Time!
            </div>
            <div class="card-body">
                <h5 class="card-title">Take the Quiz</h5>
                <p class="card-text">Click the button to take the quiz.</p>
                <a class="btn btn-primary" data-toggle="collapse" data-target="#quiz-two">Quiz 2</a>
                <div class="collapse" id="quiz-two">
                    <h5>Answer should be in capital letters. You can use special characters such as -_/*!@#$%^&*.</h5>
                    <form action="../answers/answer-v2.php" method="POST">
                        <input type="text" name="name" placeholder="Enter Name">
                        <br><br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Question</th>
                                    <th scope="col"></th>
                                    <th scope="col">Answer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Sino ang nagpapasya sa kamatayan ng tao?</td>
                                    <td></td>
                                    <td><input type="text" name="answer-one" placeholder="Enter your Answer"></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Ilan ang possibility ng kamatayan ng tao?</td>
                                    <td></td>
                                    <td><input type="text" name="answer-two" placeholder="Enter your Answer"></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Saang talata ng Biblia mababasa ang possibility ng kamatayan ng tao?</td>
                                    <td></td>
                                    <td><input type="text" name="answer-three" placeholder="Enter your Answer"></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Sa isang matuwid, ano ang nagpapalaon o nagpapahaba ng mga kaarawan?</td>
                                    <td></td>
                                    <td><input type="text" name="answer-four" placeholder="Enter your Answer"></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Ano ang nagpapaiksi ng mga kaarawaan?</td>
                                    <td></td>
                                    <td><input type="text" name="answer-five" placeholder="Enter your Answer"></td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-primary" type="submit" name="submit">Submit Answer</button>
                    </form>
                </div>
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