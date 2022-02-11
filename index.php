<?php

session_start();
require_once './commons/helpers.php';
require_once './vendor/autoload.php';

use App\Controllers\SubjectController;
use App\Controllers\LoginController;
use App\Controllers\QuizController;
use App\Controllers\QuestionController;
use App\Controllers\AnswerController;


$url = isset($_GET['url']) ? $_GET['url'] : "/";
// $url mong muốn của người gửi request

switch ($url) {
    case '/':
        $ctr = new LoginController();
        $ctr->login();
        break;
    case 'dashboard/tai-khoan':
        $ctr = new LoginController();
        $ctr->index();
        break;
    case 'thoat':
        $ctr = new LoginController();
        $ctr->exit();
        break;
    case 'tai-khoan/dang-nhap':
        $ctr = new LoginController();
        $ctr->login();
        break;
    case 'tai-khoan/check-dang-nhap':
        $ctr = new LoginController();
        $ctr->checklogin();
        break;
    case 'tai-khoan/dang-ki':
        $ctr = new LoginController();
        $ctr->addAccount();
        break;
    case 'tai-khoan/luu-tao-moi':
        $ctr = new LoginController();
        $ctr->saveAccount();
        break;
    case 'dashboard/tai-khoan/cap-nhat':
        $ctr = new LoginController();
        $ctr->editAccount();
        break;
    case 'tai-khoan/xoa':
        $ctr = new LoginController();
        $ctr->removeAccount();
        break;
    case 'dashboard/tai-khoan/luu-cap-nhat':
        $ctr = new LoginController();
        $ctr->saveEditAccount();
        break;
    case 'tai-khoan/cap-nhat':
        $ctr = new LoginController();
        $ctr->editAccountView();
        break;
    case 'tai-khoan/luu-cap-nhat':
        $ctr = new LoginController();
        $ctr->saveEditAccountView();
        break;


    case 'dashboard/mon-hoc':
        $ctr = new SubjectController();
        $ctr->dashoardSubject();
        break;
    case 'mon-hoc':
        $ctr = new SubjectController();
        $ctr->index();
        break;
    case 'mon-hoc/tao-moi':
        $ctr = new SubjectController();
        $ctr->addForm();
        break;
    case 'mon-hoc/luu-tao-moi':
        $ctr = new SubjectController();
        $ctr->saveAdd();
        break;
    case 'mon-hoc/cap-nhat':
        $ctr = new SubjectController();
        $ctr->editForm();
        break;
    case 'mon-hoc/luu-cap-nhat':
        $ctr = new SubjectController();
        $ctr->saveEdit();
        break;
    case 'mon-hoc/xoa':
        $ctr = new SubjectController();
        $ctr->remove();
        break;

    case 'dashboard/answer':
        $ctr = new AnswerController();
        $ctr->dashboardAnswer();
        break;
    case 'answer/tao-moi':
        $ctr = new AnswerController();
        $ctr->addAnswer();
        break;
    case 'answer/luu-tao-moi':
        $ctr = new AnswerController();
        $ctr->saveAnswer();
        break;
    case 'answer/cap-nhat':
        $ctr = new AnswerController();
        $ctr->editAnswer();
        break;
    case 'answer/luu-cap-nhat':
        $ctr = new AnswerController();
        $ctr->saveEditAnswer();
        break;
    case 'answer/xoa':
        $ctr = new AnswerController();
        $ctr->remove();
        break;



    case 'mon-hoc/chi-tiet':
        $ctr = new QuizController();
        $ctr->subjectDetail();
        break;
    case 'quiz/chi-tiet':
        $ctr = new QuestionController();
        $ctr->questDetail();
        break;
    case 'quiz':
        $ctr = new QuizController();
        $ctr->index();
        break;
    case 'dashboard/quiz':
        $ctr = new QuizController();
        $ctr->dashboardQuiz();
        break;
    case 'quiz/tao-moi':
        $ctr = new QuizController();
        $ctr->addQuiz();
        break;
    case 'quiz/luu-tao-moi':
        $ctr = new QuizController();
        $ctr->saveQuiz();
        break;
    case 'quiz/cap-nhat':
        $ctr = new QuizController();
        $ctr->editQuiz();
        break;
    case 'quiz/luu-cap-nhat':
        $ctr = new QuizController();
        $ctr->saveEditQuiz();
        break;
    case 'quiz/xoa':
        $ctr = new QuizController();
        $ctr->remove();
        break;

    case 'dashboard/question':
        $ctr = new QuestionController();
        $ctr->dashboardQuest();
        break;
    case 'question':
        $ctr = new QuestionController();
        $ctr->index();
        break;
    case 'question/tao-moi':
        $ctr = new QuestionController();
        $ctr->addQuest();
        break;
    case 'question/luu-tao-moi':
        $ctr = new QuestionController();
        $ctr->saveQuest();
        break;
    case 'question/cap-nhat':
        $ctr = new QuestionController();
        $ctr->editQuest();
        break;
    case 'question/luu-cap-nhat':
        $ctr = new QuestionController();
        $ctr->saveEditQuest();
        break;
    case 'question/xoa':
        $ctr = new QuestionController();
        $ctr->remove();
        break;

    case 'save-dap-an':
        $ctr = new AnswerController();
        $ctr->saveAnswer();
        break;
    case 'quiz/lam-bai':
        break;

    default:
        echo "Đường dẫn bạn đang truy cập chưa được cho phép";
        break;
}

ob_end_flush();
