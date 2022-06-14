<?php
namespace App\Controllers;
use App\Models\Quiz;
use App\Models\StudentQuiz;

class QuizController{

    public function index()
    {
        $id = $_GET['subject_id'];
        $quizs = Quiz::where(['subject_id' , '=' , $id])->get();
        include_once "./app/views/quiz/index.php";
    }

    public function addForm()
    {
        include_once "./app/views/quiz/add-form.php";
    }

    public function saveAdd()
    {
        $model = new Quiz();
        $data = [
            'name' => $_POST['name'],
            'subject_id' => $_POST['id'],
            'duration_minutes' => $_POST['duration_minutes'],
            'start_time' => $_POST['start_time'],
            'end_time' => $_POST['end_time'],
            'status' => $_POST['status'],
            'is_shuffle' => $_POST['shuffle']
        ];
        $model->insert($data);
        header('location: ' . BASE_URL . 'quiz?subject_id=' . $_POST['id']);
        die;
    }

    public function remove()
    {
        $quiz_id = $_GET['quiz_id'];
        $subject_id = $_GET['subject_id'];
        Quiz::destroy($quiz_id);
        header('location: ' . BASE_URL . 'quiz?subject_id=' . $subject_id);
        die;
    }

    public function updateForm()
    {
        $id = $_GET['quiz_id'];
        $quiz = Quiz::where([
            'id', '=', $id
        ])->get();
        include_once "./app/views/quiz/update-form.php";
    }

    public function saveUpdate()
    {
        $model = new Quiz();
        $quiz_id = $_POST['quiz_id'];
        $name = $_POST['name'];
        $duration_minutes = $_POST['duration_minutes'];
        $start_time = $_POST['start_time'];
        $end_time = $_POST['end_time'];
        $status = !empty($_POST['status']) ? $_POST['status'] : 0;
        $is_shuffle = $_POST['shuffle'];
        $data = [
            'name' => $_POST['name'],
            'duration_minutes' => $_POST['duration_minutes'],
            'start_time' => $_POST['start_time'],
            'end_time' => $_POST['end_time'],
            'status' => !empty($_POST['status']) ? $_POST['status'] : 0,
            'is_shuffle' => $_POST['shuffle']
        ];
        $model::rawQuery("UPDATE quizs SET 
        name = '$name', duration_minutes = '$duration_minutes', start_time = '$start_time', end_time = '$end_time', 
        status = '$status', is_shuffle = '$is_shuffle'
        WHERE id = '$quiz_id'
        ")->execute();

        header('location: ' . BASE_URL . 'quiz?subject_id=' . $_POST['subject_id'] );
    }

    public function detail()
    {
        $subject_id = $_GET['subject_id'];
        $quiz_id = $_GET['quiz_id'];
        $student_list = StudentQuiz::rawQuery("
        SELECT users.`name`,student_quizs.start_time,student_quizs.end_time,student_quizs.score FROM student_quizs 
        INNER JOIN users ON users.id = student_quizs.student_id AND student_quizs.quiz_id = $quiz_id
        INNER JOIN quizs ON quizs.id = student_quizs.quiz_id
        INNER JOIN subjects ON subjects.id = quizs.subject_id AND quizs.subject_id = $subject_id
        ")->get();
        var_dump($student_list);
        include_once "./app/views/quiz/detail.php";
    }
}
?>