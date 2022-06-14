<?php
namespace App\Controllers;

use App\Models\Question;

class QuestionController{
    public function index(){
        $id = $_GET['quiz_id'];
        $questions = Question::where(['quiz_id','=',$id])->get();
        include_once "./app/views/question/index.php";
    }

    public function addForm(){
        include_once "./app/views/question/add-form.php";
    }
}