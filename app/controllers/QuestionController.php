<?php

namespace App\Controllers;

use App\Models\Question;

use App\Models\Quiz;

use App\Models\Answer;

class QuestionController
{
    public function addQuest()
    {
        $quizs = Quiz::all();
        include_once "./app/admin/question/add-form.php";
    }
    public function editQuest()
    {
        $id = $_GET['id'];
        $model = Question::where(['id', '=', $id])->first();
        $quizs = Quiz::all();
        if (!$model) {
            header('location: ' . BASE_URL . 'question');
            die;
        }
        include_once './app/admin/question/edit-form.php';
    }
    public function QuestDetail()
    {
        $id = $_GET['id'];
        $quest = Question::where(['quiz_id', '=', $id])->get();
        if (!$quest) {
            header('location: ' . $_SERVER['HTTP_REFERER']);
            die;
        }
        include_once './app/views/quiz/quizDetail.php';
    }

    public function saveQuest()
    {
        $model = new Question();
        $data = [
            'name' => $_POST['name'],
            'quiz_id' => $_POST['quiz_id'],
        ];
        $model->insert($data);
        header('Location:' .$_SERVER['HTTP_REFERER']);
        die;
    }

    public function saveEditQuest()
    {
        $id = $_GET['id'];
        $model = Quiz::where(['id', '=', $id])->first();
        if (!$model) {
            header('Location:' .$_SERVER['HTTP_REFERER']);
            die;
        }

        $data = [
            'name' => $_POST['name'],
            'quiz_id' => $_POST['quiz_id']
        ];
        $model->update($data);
        header('Location:' .$_SERVER['HTTP_REFERER']);
        die;
    }

    public function remove()
    {
        $id = $_GET['id'];
        Question::destroy($id);
        header('location: ' . $_SERVER['HTTP_REFERER']);
        die;
    }
}
