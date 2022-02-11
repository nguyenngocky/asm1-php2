<?php

namespace App\Models;

class Question extends BaseModel
{
    protected $tableName = 'questions';
    public function quiz()
    {
        $quiz = Quiz::where(['id', '=', $this->quiz_id])->first();
        if ($quiz) {
            return $quiz;
        }
        return null;
    }
    public function getAnswers()
    {
        return Answer::where(['question_id', '=', $this->id])->get();
    }
}
