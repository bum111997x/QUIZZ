<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="../app/views/css/style.css">
</head>
<body>

<input type="checkbox" id="sidebar-toggle">
<div class="sidebar">
    <div class="sidebar-header">
        <h3 class="brand">
            <span class="ti-unlink"></span>
            <span>easywire</span>
        </h3>
        <label for="sidebar-toggle" class="ti-menu-alt"></label>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="">
                    <span class="ti-home"></span>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="<?php BASE_URL . 'mon-hoc' ?>" style="color: yellow">
                    <span class="ti-home"></span>
                    <span>Môn học</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="main-content">
    <header>
        <div class="search-wrapper">
            <span class="ti-search"></span>
            <input type="search" placeholder="Search">
        </div>

        <div class="social-icons">
            <span class="ti-bell"></span>
            <span class="ti-comment"></span>
            <div></div>
        </div>
    </header>

    <main>
        <h2 class="dash-title">
            <a href="<?= BASE_URL . 'quiz?subject_id=' . $_GET['subject_id'] ?>" style="color: #1D2231">
                Quiz
            </a>
        </h2>

        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Tạo mới quiz</h3>
                    <form action="<?= BASE_URL . 'quiz/luu-cap-nhat' ?>" method="post">
                        <input type="text" hidden name="subject_id" value="<?= $_GET['subject_id'] ?>">
                        <?php foreach ($quiz as $value): ?>
                        <input type="text" hidden name="quiz_id" value="<?= $value->id ?>">
                        <div style="margin: 16px">
                            <label for="" style="margin: 0 100px 0 0">Tên quiz: </label>
                            <input type="text" name="name" style="width:200px" value="<?= $value->name ?>">
                        </div>
                        <div style="margin: 16px">
                            <label for="" style="margin: 0 20px 0 0">Thời gian làm quiz: </label>
                            <input type="text" type="time" name="duration_minutes" style="width:200px"
                                   value="<?= $value->duration_minutes ?>">
                        </div>
                        <div style="margin: 16px">
                            <label for="" style="margin: 0 70px 0 0">Hạn bắt đầu: </label>
                            <input type="datetime-local" name="start_time" style="width:200px"
                                   value="<?= str_replace(' ', 'T', $value->start_time) ?>">
                        </div>
                        <div style="margin: 16px">
                            <label for="" style="margin: 0 68px 0 0">Hạn kết thúc: </label>
                            <input type="datetime-local" name="end_time" style="width:200px"
                                   value="<?= str_replace(' ', 'T', $value->end_time) ?>">
                        </div>
                        <div style="margin: 16px">
                            <label for="" style="margin: 0 20px 0 0">Status: </label>
                            <select name="status" id="">
                                <option value="<?= $value->status  ?>" selected><?= $value->status == 1 ? "Hiện" : "Ẩn"  ?></option>
                                <option value="0">Ẩn</option>
                                <option value="1">Hiện</option>
                            </select>
                        </div>
                        <div style="margin: 16px">
                            <label for="" style="margin: 0 130px 0 0">Trộn: </label>
                            <input type="text" name="shuffle" style="width:200px" value="<?= $value->is_shuffle ?>">
                        </div>
                        <div style="margin: 16px">
                            <button type="submit" name="add-quiz"
                                    style="border-radius: 5px;border: none;background-color: royalblue;color: white;width: 70px;height: 30px">
                                Lưu
                            </button>
                        </div>
                        <? endforeach;?>
                    </form>
                </div>
            </div>
        </section>

    </main>

</div>

</body>
</html>
<!---->
<!--<form action="--><?//= BASE_URL . 'quiz/luu-cap-nhat' ?><!--" method="post">-->
<!--    <input type="text" hidden name="subject_id" value="--><?//= $_GET['subject_id'] ?><!--">-->
<!--    --><?php //foreach ($quiz as $value): ?>
<!--        <input type="text" hidden name="quiz_id" value="--><?//= $value->id ?><!--">-->
<!--        <div>-->
<!--            <label for="">Tên quiz</label>-->
<!--            <input type="text" name="name" value="--><?//= $value->name ?><!--">-->
<!--        </div>-->
<!--        <div>-->
<!--            <label for="">Thời gian làm quiz</label>-->
<!--            <input type="text" name="duration_minutes" value="--><?//= $value->duration_minutes ?><!--">-->
<!--        </div>-->
<!--        <div>-->
<!--            <label for="">Hạn bắt đầu</label>-->
<!--            <input type="datetime-local" name="start_time" value="--><?//= str_replace(' ', 'T', $value->start_time) ?><!--">-->
<!--        </div>-->
<!--        <div>-->
<!--            <label for="">Hạn kết thúc</label>-->
<!--            <input type="datetime-local" name="end_time" value="--><?//= str_replace(' ', 'T', $value->end_time) ?><!--">-->
<!--        </div>-->
<!--        <div>-->
<!--            <label for="">Status</label>-->
<!--            <input type="checkbox" name="status" value="1" --><?//= $value->status == 1 ? 'checked' : '' ?><!-->-->
<!--        </div>-->
<!--        <div>-->
<!--            <label for="">Trộn</label>-->
<!--            <input type="text" name="shuffle">-->
<!--        </div>-->
<!--        <div>-->
<!--            <button type="submit" name="update-quiz">Lưu</button>-->
<!--        </div>-->
<!--    --><?php //endforeach; ?>
<!--</form>-->