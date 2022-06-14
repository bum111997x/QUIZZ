<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="./app/views/css/style.css">
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
                <a href="<?= BASE_URL . 'mon-hoc' ?>" style="color: yellow">
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
            <a href="<?= BASE_URL . 'mon-hoc' ?>" style="color: #1D2231">
                Quiz
            </a>
        </h2>

        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Danh sách Quiz</h3>
                    <div class="table-responsive">
                        <table>
                            <thead>
                            <tr>
                                <th>Tên quiz</th>
                                <th>Hạn bắt đầu</th>
                                <th>Hạn kết thúc</th>
                                <th>Thời gian</th>
                                <th>Trạng thái</th>
                                <th>Trộn</th>
                                <th>
                                    <a href="<?= BASE_URL . 'quiz/tao-moi?subject_id=' . $_GET['subject_id'] ?>">Tạo
                                        mới</a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($quizs as $quiz): ?>
                                <tr>
                                    <td> <?= $quiz->name ?></td>
                                    <td><?= $quiz->start_time ?></td>
                                    <td><?= $quiz->end_time ?></td>
                                    <td><?= $quiz->duration_minutes ?></td>
                                    <td><?= $quiz->status ?></td>
                                    <td><?= $quiz->is_shuffle ?></td>
                                    <td>
                                        <a href="<?= BASE_URL . 'quiz/question?quiz_id=' . $quiz->id ?>">
                                            <button style="width: 70px; height: 30px;border-radius: 5px;background-color: royalblue;border: none;color: white; margin: 0 5px">
                                                Chi tiết
                                            </button>
                                        </a>
                                        <a href="<?= BASE_URL . 'quiz/cap-nhat?quiz_id=' . $quiz->id . '&subject_id=' . $_GET['subject_id'] ?>">
                                            <button class="btn-blue"
                                                    style="width: 70px; height: 30px;border-radius: 5px;background-color: yellow;border: none;margin: 0 5px">
                                                Sửa
                                            </button>
                                        </a>
                                        <a href="<?= BASE_URL . 'quiz/xoa?quiz_id=' . $quiz->id . '&subject_id=' . $_GET['subject_id'] ?>">
                                            <button class="btn-delete"
                                                    style="width: 70px; height: 30px; border-radius: 5px;background-color: red;border: none;color: white;margin: 0 5px">
                                                Xóa
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
</body>
</html>