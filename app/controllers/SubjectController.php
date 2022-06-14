<?php

namespace App\Controllers;

use App\Models\Quiz;
use App\Models\Subject;

class SubjectController
{
    public function index()
    {
        $subjects = Subject::all();

        include_once "./app/views/mon-hoc/index.php";
    }

    public function addForm()
    {
        include_once "./app/views/mon-hoc/add-form.php";
    }

    public function saveAdd()
    {
        if (isset($_POST['add-subject'])) {
            $subject = new Subject();

            $subject->name = $_POST['name'];
            $subject->save();
            header('location: ' . BASE_URL . 'mon-hoc');
            die;
        }
    }

    public function remove($id)
    {
        Subject::destroy($id);
        header('location: ' . BASE_URL . 'mon-hoc');
        die;
    }

    public function updateForm($id)
    {

        $subject = Subject::find($id);
        include_once "./app/views/mon-hoc/update-form.php";
    }

    public function saveUpdate($id)
    {
        $subject = Subject::find($id);
        $subject->name = $_POST['name'];

        $subject->save();
        header('location: ' . BASE_URL . 'mon-hoc');
        die;
    }

    public function detail($id)
    {
        $quizs = Subject::rawQuery("
        SELECT student_quizs.quiz_id,quizs.`name`,COUNT(student_quizs.student_id) as so_hs, ROUND(AVG(student_quizs.score),1) as diem_tb  FROM student_quizs 
        INNER JOIN quizs ON quizs.id = student_quizs.quiz_id AND quizs.subject_id = $id
        GROUP BY student_quizs.quiz_id
        ")->get();

        include_once "./app/views/mon-hoc/detail.php";
    }
}

?>