<?php

namespace App\Controllers;

use App\Models\Quiz;
use App\Models\Subject;
use App\Models\Question;

class QuizController
{
    public function index()
    {
        $quizs = Quiz::all();
        include_once "./app/views/quiz/index.php";
    }
    public function dashboardQuiz()
    {
        $sid = $_GET['subjectId'];
        $subject = Subject::where(['id', '=', $sid])->first();
        if (empty($subject)) {
            header("location: " . BASE_URL);
            die;
        }

        // 2. lấy danh sách quiz của môn học đó ra
        $subjectQuizs = Quiz::where(['subject_id', '=', $subject->id])->get();

        include_once "./app/admin/quiz/index.php";
    }
    public function addQuiz()
    {
        $subjectId = $_GET['subjectId'];
        include_once "./app/admin/quiz/add-quiz.php";
    }
    public function editQuiz()
    {
        $quizId = $_GET['id'];
        $quiz = Quiz::where(['id', '=', $quizId])->first();

        $questions = Question::where(['quiz_id', '=', $quiz->id])->get();
        include_once './app/admin/quiz/edit-quiz.php';
    }
    public function subjectDetail()
    {
        $id = $_GET['id'];
        $model = Quiz::where(['subject_id', '=', $id])->get();
        if (!$model) {
            header('location: ' . BASE_URL . 'mon-hoc');
            die;
        }
        include_once './app/views/quiz/subjectDetail.php';
    }



    public function saveQuiz()
    {
        $subjectId = $_GET['subjectId'];
        $data = [
            'name' => $_POST['name'],
            'start_time' => $_POST['start_time'],
            'end_time' => $_POST['end_time'],
            'duration_minutes' => $_POST['duration_minutes'],
            'status' => isset($_POST['status']) ? 1 : 0,
            'is_shuffle' => isset($_POST['is_shuffle']) ? 1 : 0,
            'subject_id' => $subjectId
        ];
        $model = new Quiz();
        $quiz = $model->insert($data);
        header('location: ' . BASE_URL . 'quiz/cap-nhat?id=' . $quiz->id);
        die;
    }

    public function saveEditQuiz()
    {
        $id = $_GET['id'];
        $model = Quiz::where(['id', '=', $id])->first();
        if (!$model) {
            header('location: ' . BASE_URL . 'dashboard/quiz');
            die;
        }

        $data = [
            'name' => $_POST['name'],
            'subject_id' => $_POST['subject_id']
        ];
        $model->update($data);
        header('location: ' . BASE_URL . 'dashboard/quiz');
        die;
    }

    public function remove()
    {
        $id = $_GET['id'];
        $quiz_id = $_GET['id'];
        Quiz::destroy($id);
        Question::destroyquest($quiz_id);
        header('location: ' . $_SERVER['HTTP_REFERER']);
        die;
    }
}
