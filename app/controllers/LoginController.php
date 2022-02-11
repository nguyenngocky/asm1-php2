<?php

namespace App\Controllers;

use App\Models\User;



class LoginController
{
    public function index()
    {
        $users = User::all();

        include_once "./app/admin/tai-khoan/index.php";
    }

    public function login()
    {
        include_once "./app/views/tai-khoan/login.php";
    }
    public function addAccount()
    {
        include_once "./app/views/tai-khoan/dang-ki.php";
    }
    public function saveAccount()
    {
        $model = new User();
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];
        $model->insert($data);
        header('location: ' . BASE_URL . 'tai-khoan/dang-nhap');
        die;
    }
    public function saveEditAccount()
    {
        $id = $_GET['id'];
        $model = User::where(['id', '=', $id])->first();
        if (!$model) {
            header('location: ' . BASE_URL . 'dashboard/tai-khoan');
            die;
        }

        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'avatar' => $_POST['avatar']
        ];
        $model->update($data);
        header('location: ' . BASE_URL . 'dashboard/tai-khoan');
        die;
    }
    public function saveEditAccountView()
    {
        $id = $_GET['id'];
        $model = User::where(['id', '=', $id])->first();
        if (!$model) {
            header('location: ' . BASE_URL . 'mon-hoc');
            die;
        }

        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'avatar' => $_POST['avatar']
        ];
        $model->update($data);
        header('location: ' . BASE_URL . 'mon-hoc');
        die;
    }
    public function removeAccount()
    {
        $id = $_GET['id'];
        User::destroy($id);
        header('location: ' . BASE_URL . 'dashboard/tai-khoan');
        die;
    }
    public function editAccount()
    {
        $id = $_GET['id'];
        $model = User::where(['id', '=', $id])->first();
        if (!$model) {
            header('location: ' . BASE_URL . 'dashboard/tai-khoan');
            die;
        }
        include_once './app/admin/tai-khoan/edit-account.php';
    }
    public function editAccountView()
    {
        $id = $_SESSION['user'];
        $model = User::where(['id', '=', $id])->first();
        if (!$model) {
            header('location: ' . BASE_URL . 'mon-hoc');
            die;
        }
        include_once './app/views/tai-khoan/edit-account.php';
    }
    public function checkLogin()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $model = User::where(['email', '=', $email])->andWhere(['password', '=', $password])->first();
        if (!$model) {
            $_SESSION['error'] = 'Tài Khảon hơacj mật khảu không chính xác hoặc cả hai';
            header('location: ' . BASE_URL . 'tai-khoan/dang-nhap');
            die;
        } else if ($email == "" || $password == "") {
            header('location: ' . $_SERVER['HTTP_REFERER']);
            die;
        } else {
            if ($model->role_id == 1) {
                header('location: ' . BASE_URL . 'dashboard/tai-khoan');
                $_SESSION['user'] = $model->id;
                die;
            } else {
                header('location: ' . BASE_URL . 'mon-hoc');
                $_SESSION['user'] = $model->id;
                die;
            }
        }
    }
    public function exit()
    {
        session_unset();
        header('location: ' . BASE_URL . 'tai-khoan/dang-nhap');
        die;
    }
}
