<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?= BASE_URL ?>/frontend/public/images/favicon.ico">
    <title><?= $page_title ?></title>
    <link rel="stylesheet" href="<?= CSS_DIR ?>/components/global.css">
</head>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="<?= BASE_URL ?>">
            <i class="bi bi-flower1 fs-3 me-2"></i>
            <span class="d-flex flex-column justify-content-center" style="line-height: 1;">
                <span class="fw-bold"
                    style="font-size: 1.5rem; letter-spacing: 3.5px; font-family: 'Cinzel', serif;">MOSARI</span>
                <span class="fw-light text-white"
                    style="font-size: 0.6rem; letter-spacing: 4px; font-family: 'Montserrat';">RESORT & SPA</span>
            </span>
        </a>
        <!-- Mobile Menu Toggler -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navigation -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center gap-lg-3">
                <li class="nav-item"><a class="nav-link <?= ($current_page == 'home') ? 'active' : '' ?>"
                        href="<?= BASE_URL ?>">Trang chủ</a></li>
                <li class="nav-item"><a class="nav-link <?= ($current_page == 'rooms') ? 'active' : '' ?>"
                        href="<?= BASE_URL ?>/rooms">Phòng & Giá</a></li>
                <li class="nav-item"><a class="nav-link <?= ($current_page == 'booking') ? 'active' : '' ?>"
                        href="<?= BASE_URL ?>/booking">Đặt Phòng</a></li>
                <li class="nav-item"><a class="nav-link <?= ($current_page == 'services') ? 'active' : '' ?>"
                        href="<?= BASE_URL ?>/services">Dịch vụ</a></li>
                <li class="nav-item ms-lg-3 mt-2 mt-lg-0" id="authSection">
                </li>
            </ul>
        </div>
    </div>
</nav>