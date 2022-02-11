<?php

namespace App\Controllers;

use App\Models\Subject;

use App\Models\Quiz;

use App\Models\Question;

class SubjectController
{
    public function index()
    {
        $subjects = Subject::all();
        include_once "./app/views/mon-hoc/index.php";
    }
    public function dashoardSubject()
    {
        $subjects = Subject::all();
        include_once "./app/admin/mon-hoc/index.php";
    }
    public function subject_id()
    {
        $subjects = Subject::all();
        include_once "./app/admin/mon-hoc/edit-form.php";
    }

    public function addForm()
    {
        include_once "./app/admin/mon-hoc/add-form.php";
    }
    public function editForm()
    {
        $id = $_GET['id'];
        $model = Subject::where(['id', '=', $id])->first();
        if (!$model) {
            header('location: ' . BASE_URL . 'dashboard/mon-hoc');
            die;
        }
        include_once './app/admin/mon-hoc/edit-form.php';
    }

    public function saveAdd()
    {
        $model = new Subject();
        $data = [
            'name' => $_POST['name']
        ];
        $model->insert($data);
        header('location: ' . BASE_URL . 'dashboard/mon-hoc');
        die;
    }

    public function saveEdit()
    {
        $id = $_GET['id'];
        $model = Subject::where(['id', '=', $id])->first();
        if (!$model) {
            header('location: ' . BASE_URL . 'dashboard/mon-hoc');
            die;
        }

        $data = [
            'name' => $_POST['name']
        ];
        $model->update($data);
        header('location: ' . BASE_URL . 'dashboard/mon-hoc');
        die;
    }

    public function remove()
    {
        $id = $_GET['id'];
        $subject_id = $_GET['id'];
        Subject::destroy($id);
        Quiz::destroyquiz($subject_id);
        header('location: ' . $_SERVER['HTTP_REFERER']);
        die;
    }
}
