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
            <a href="<?= BASE_URL . 'mon-hoc'?>" style="color: #1D2231">
                Môn học
            </a>
        </h2>

        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Danh sách môn học</h3>
                    <div class="table-responsive">
                        <table>
                            <thead>
                            <tr>
                                <th>Mã môn</th>
                                <th>Tên môn</th>
                                <th>
                                    <a href="<?= BASE_URL . 'mon-hoc/tao-moi' ?>">Tạo mới</a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($subjects as $sub): ?>
                                <tr>
                                    <td><?= $sub->id ?></td>
                                    <td><?= $sub->name ?></td>
                                    <td>

                                        <a href="<?= BASE_URL . 'mon-hoc/chi-tiet/subject_id/' . $sub->id ?>">
                                            <button style="width: 70px; height: 30px;border-radius: 5px;background-color: royalblue;border: none;color: white; margin: 0 5px">Chi tiết</button>
                                        </a>
                                        <a href="<?= BASE_URL . 'mon-hoc/cap-nhat/' . $sub->id ?>">
                                            <button style="width: 70px; height: 30px;border-radius: 5px;background-color: yellow;border: none;margin: 0 5px">Sửa</button>
                                        </a>
                                        <a href="<?= BASE_URL . 'mon-hoc/xoa/' . $sub->id ?>">
                                            <button style="width: 70px; height: 30px; border-radius: 5px;background-color: red;border: none;color: white;margin: 0 5px">Xóa</button>
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
