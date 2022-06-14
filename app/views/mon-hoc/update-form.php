<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>app/views/css/style.css">
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
            <a href="<?php BASE_URL . 'mon-hoc' ?>" style="color: #1D2231">
                Môn học
            </a>
        </h2>

        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Tạo mới môn học</h3>
                    <form action="" method="post">
                        <div style="margin: 16px">
                            <label for="" style="margin: 0 20px 0 0">Tên môn học: </label>
                                <input type="text" name="id" value="<?=$subject->id?>" hidden style="width:200px">
                                <input type="text" name="name" value="<?=$subject->name ?>">
                        </div>
                        <div style="margin: 16px">
                            <button type="submit" name="update-subject"
                                    style="border-radius: 5px;border: none;background-color: royalblue;color: white;width: 70px;height: 30px">
                                Lưu
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </main>

</div>
</body>
</html>