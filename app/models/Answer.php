<?php
namespace App\Models;
class Answer extends BaseModel{
    protected $tableName = 'answers';
    public function question()
    {
        $question = Question::where(['id', '=', $this->question_id])->first();
        if ($question) {
            return $question;
        }
        return null;
    }
}
