<?php

namespace App\Controllers;

use App\Models\Question;


use App\Models\Answer;

class AnswerController
{

    public function dashboardAnswer()
    {
        $answer = Answer::all();
        include_once "./app/admin/answer/index.php";
    }
    public function addAnswer()
    {
        $question = Question::all();
        include_once "./app/admin/answer/add-form.php";
    }
    public function editAnswer()
    {
        $id = $_GET['id'];
        $question = Question::all();
        $model = Answer::where(['id', '=', $id])->first();
        if (!$model) {
            header('location: ' . BASE_URL . 'answer');
            die;
        }
        include_once './app/admin/answer/edit-form.php';
    }
    public function AnswerDetail()
    {
        $id = $_GET['id'];
        $answer = Answer::where(['Answer_id', '=', $id])->get();
        if (!$answer) {
            header('location: ' . $_SERVER['HTTP_REFERER']);
            die;
        }
        include_once './app/views/answer/answerDetail.php';
    }
    public function answer()
    {
        $id = $_GET['id'];
        $model = Answer::where(['Answer_id', '=', $id])->get();
        if (!$model) {
            header('location: ' . $_SERVER['HTTP_REFERER']);
            die;
        }
        include_once './app/views/answer/answerDetail.php';
    }


    public function saveAnswer()
    {
        $models = new Answer();
        $data = [
            'content' => $_POST['answer'],
            'question_id' => $_POST['question_id'],
            'is_correct' => $_POST['is_correct']
        ];
        $models->insert($data);
        header('location: ' . $_SERVER['HTTP_REFERER']);
        die;
    }

    public function saveEditAnswer()
    {
        $id = $_GET['id'];
        $models = Answer::where(['id', '=', $id])->first();
        if (!$models) {
            header('location: ' . BASE_URL . 'dashboard/answer');
            die;
        }
        $data = [
            'content' => $_POST['content'],
            'question_id' => $_POST['question_id'],
        ];
        $models->update($data);
        header('location: ' . BASE_URL . 'dashboard/answer');
        die;
    }

    public function remove()
    {
        $id = $_GET['id'];
        Answer::destroy($id);
        header('location: ' . $_SERVER['HTTP_REFERER']);
        die;
    }
}
