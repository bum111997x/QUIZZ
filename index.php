<?php
require_once './commons/helpers.php';
require_once './vendor/autoload.php';
require_once './commons/db.php';
require_once './commons/routing.php';



$url = isset($_GET['url']) ? $_GET['url'] : "/";
applyRouting($url);
// $url mong muốn của người gửi request
//switch ($url) {
//    case 'login':
//        break;
//    case 'dashboard':
//        break;
//    case 'mon-hoc':
//        $ctr = new SubjectController();
//        $ctr->index();
//        break;
//    case 'mon-hoc/tao-moi':
//        $ctr = new SubjectController();
//        $ctr->addForm();
//        break;
//    case 'mon-hoc/luu-tao-moi':
//        $ctr = new SubjectController();
//        $ctr->saveAdd();
//        break;
//    case 'mon-hoc/cap-nhat':
//        $ctr = new SubjectController();
//        $ctr->updateForm();
//        break;
//    case 'mon-hoc/luu-cap-nhat':
//        $ctr = new SubjectController();
//        $ctr->saveUpdate();
//        break;
//    case 'mon-hoc/xoa':
//        $ctr = new SubjectController();
//        $ctr->remove();
//        break;
//    case 'mon-hoc/chi-tiet':
//        $ctr = new SubjectController();
//        $ctr->detail();
//        break;
//    case 'quiz':
//        $ctr = new QuizController();
//        $ctr->index();
//        break;
//    case 'quiz/chi-tiet':
//        $ctr = new QuizController();
//        $ctr->detail();
//        break;
//    case 'quiz/tao-moi':
//        $ctr = new QuizController();
//        $ctr->addForm();
//        break;
//    case 'quiz/luu-tao-moi':
//        $ctr = new QuizController();
//        $ctr->saveAdd();
//        break;
//    case 'quiz/cap-nhat':
//        $ctr = new QuizController();
//        $ctr->updateForm();
//        break;
//    case 'quiz/luu-cap-nhat':
//        $ctr = new QuizController();
//        $ctr->saveUpdate();
//        break;
//    case 'quiz/xoa':
//        $ctr = new QuizController();
//        $ctr->remove();
//        break;
//    case 'quiz/lam-bai':
//
//        break;
//    case 'quiz/question':
//        $ctr = new QuestionController();
//        $ctr->index();
//        break;
//    default:
////        echo "Đường dẫn bạn đang truy cập chưa được cho phép";
//        break;
//}


?>