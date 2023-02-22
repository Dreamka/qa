<?php

namespace classes;

class Question
{
    public $id;
    private $text;
    private $answers = [];

    public function __construct($id, $text) {
        if ($text) {
            $this->id = $id;
            $this->set($text);
        }
    }

    public function set($text) {
        $this->text = $text;
    }

    public function addAnswer(Answer $answer) {
        $this->answers []= $answer;
    }

    public function removeAnswer(Answer $answer) {
        foreach ($this->answers as $a => $answerRow) {
            if ($answerRow->id == $answer->id) {
                unset($this->answers[$a]);
            }
        }
    }

    public function printQuestion() {
        if ($this->text) {
            echo $this->text . "\n";
            foreach ($this->answers as $answer) {
                $answer->printAnswer();
            }
        }
    }
}