<?php

namespace classes;

class Answer
{
    public $id;
    private string $text;
    private bool $ok;

    private $questionId;

    public function __construct($id, $text, $ok, $questionId) {
        $this->id = $id;
        $this->text = $text;
        $this->ok = $ok;
        $this->questionId = $questionId;
    }

    public function printAnswer() {
        if ($this->text) {
            echo $this->text . "\n";
        }
    }
}