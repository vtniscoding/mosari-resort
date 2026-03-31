<body>
    <!-- Hero Slider -->
    <section class="slider-section">
        <?php require_once FRONTEND_PATH . '/views/layouts/hero-slider.php'; ?>

        <!-- Promo Widget -->
         <?php require_once FRONTEND_PATH . '/views/layouts/promo-widget.php'; ?>

    </section>
    
    <!-- Main Content -->
    <main id="explore">

        <!-- Featured Services -->
        <section class="container pt-5 pb-4 mt-2">
            <div class="text-center mb-5">
                <h2 class="luxury-title-1">Dịch Vụ Đẳng Cấp</h2>
                <p class="text-muted mt-3">Tận hưởng những trải nghiệm xứng tầm tại Mosari Resort</p>
            </div>
            <?php require_once FRONTEND_PATH . '/views/layouts/material-slide.php'; ?>
        </section>

        <!-- Room Types Swiper -->
        <section class="container pt-5 pb-4">
            <div class="text-center mb-5">
                <h2 class="luxury-title-1">Không gian nghỉ dưỡng cao cấp</h2>
                <p class="text-muted mt-3">Sự kết hợp hoàn hảo giữa kiến trúc đương đại và nét đẹp bản địa</p>
            </div>
            <?php require_once FRONTEND_PATH . '/views/layouts/swiper.php'; ?>
            <div class="text-center">
                <button class="btn-custom btn-outline-theme px-5 py-3 mb-4 rounded-pill">Xem toàn bộ phòng</button>
            </div>
        </section>

    </main>