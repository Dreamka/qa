<?php
require_once __DIR__ . "/load.php";
use classes\Question;
use classes\Answer;

$q = [
    ["id" => 1, "text" => "Какой сегодня день?",],
    ["id" => 2, "text" => "Какой сегодня год?",],
    ["id" => 3, "text" => "Где я?"],
];

$a = [
    ["id" => 1, "text" => "Понедельник", "ok" => false, "question_id" => 1],
    ["id" => 2, "text" => "Вторник", "ok" => false, "question_id" => 1],
    ["id" => 3, "text" => "Среда", "ok" => true, "question_id" => 1],
    ["id" => 4, "text" => "Пятница", "ok" => false, "question_id" => 1],

    ["id" => 5, "text" => "1990", "ok" => false, "question_id" => 2],
    ["id" => 6, "text" => "2000", "ok" => false, "question_id" => 2],
    ["id" => 7, "text" => "2020", "ok" => false, "question_id" => 2],
    ["id" => 8, "text" => "2023", "ok" => true, "question_id" => 2],

    ["id" => 9, "text" => "В военкомате", "ok" => false, "question_id" => 3],
    ["id" => 10, "text" => "На СВО в Украине", "ok" => false, "question_id" => 3],
    ["id" => 11, "text" => "В Москве", "ok" => false, "question_id" => 3],
    ["id" => 12, "text" => "В Египте", "ok" => true, "question_id" => 3],
];

$questions = [];

// Заполняем вопросы
foreach ($q as $row) {
    $question = new Question($row["id"], $row["text"]);
    foreach ($a as $a_row) {
        if ($question->id == $a_row["question_id"]) {
            $answer = new Answer($a_row["id"], $a_row["text"], $a_row["ok"], $a_row["question_id"]);
            $question->addAnswer($answer);
        }
    }
    $questions []= $question;
}

// Выводим вопросы
foreach ($questions as $question){
    $question->printQuestion();
}