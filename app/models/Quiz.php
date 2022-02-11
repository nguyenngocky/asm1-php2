<?php

namespace App\Models;

class Quiz extends BaseModel
{
    protected $tableName = 'quizs';
    public function subject()
    {
        $subject = Subject::where(['id', '=', $this->subject_id])->first();
        if ($subject) {
            return $subject;
        }
        return null;
    }
}
