<?php
    include_once '../connect.php';

    $name = $_POST['name'];
    $a1 = $_POST['answer-one'];
    $a2 = $_POST['answer-two'];
    $a3 = $_POST['answer-three'];
    $a4 = $_POST['answer-four'];
    $a5 = $_POST['answer-five'];
    $score = 0;


    $sql =  "SELECT answer_answer FROM answer WHERE answer_answer='KASING-IKSI NG BUKAS';";
    $result1 = mysqli_query($conn, $sql);
    $result_one = mysqli_fetch_assoc($result1);

    if ($result_one['answer_answer'] == $a1){
        $score = $score + 200;
    }
    
    $sql =  "SELECT answer_answer FROM answer WHERE answer_answer='SANTIAGO 4:13';";
    $result2 = mysqli_query($conn, $sql);
    $result_two = mysqli_fetch_assoc($result2);

    if ($result_two['answer_answer'] == $a2){
        $score = $score + 200;
    }

    $sql =  "SELECT answer_answer FROM answer WHERE answer_answer='TOMMOROW';";
    $result3 = mysqli_query($conn, $sql);
    $result_three = mysqli_fetch_assoc($result3);

    if ($result_three['answer_answer'] == $a3){
        $score = $score + 200;
    }

    $sql =  "SELECT answer_answer FROM answer WHERE answer_answer='KINABUKASAN';";
    $result4 = mysqli_query($conn, $sql);
    $result_four = mysqli_fetch_assoc($result4);

    if ($result_four['answer_answer'] == $a4){
        $score = $score + 200;
    }

    $sql =  "SELECT answer_answer FROM answer WHERE answer_answer='MASASAMA';";
    $result5 = mysqli_query($conn, $sql);
    $result_five = mysqli_fetch_assoc($result5);

    if ($result_five['answer_answer'] == $a5){
        $score = $score + 200;
    }

    $sql = "INSERT INTO record (record_name, record_score) VALUES 
    ('$name', '$score');";
    mysqli_query($conn, $sql);

    header("Location: ../leaderboard.php");