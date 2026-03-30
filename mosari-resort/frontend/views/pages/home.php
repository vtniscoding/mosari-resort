<link rel="stylesheet" href="<?= CSS_DIR ?>/components/hero-slider.css">
<link rel="stylesheet" href="<?= CSS_DIR ?>/components/promo-widget.css">

<body>
    <!-- Hero Slider (Carousel)-->
    <section class="slider-section">
        <div class="slider-overlay"></div>
        <div id="hotelSlider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">

            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#hotelSlider" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#hotelSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#hotelSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Carousel Items -->
            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1445019980597-93fa8acb246c?q=80&w=2000&auto=format&fit=crop"
                        alt="Luxury Hotel">
                    <div class="carousel-caption">
                        <p class="slider-slogan">Chào mừng đến với sự hoàn mỹ</p>
                        <h1 class="slider-title">Định Nghĩa Lại<br>Sự Sang Trọng</h1>
                        <div class="slider-btn-wrap">
                            <a href="#explore" class="btn-slider">Khám Phá Ngay</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=2000&auto=format&fit=crop"
                        alt="Ocean View Room">
                    <div class="carousel-caption">
                        <p class="slider-slogan">Tầm nhìn hướng biển tuyệt đẹp</p>
                        <h1 class="slider-title">Trải Nghiệm<br>Không Gian Vô Tận</h1>
                        <div class="slider-btn-wrap">
                            <a href="rooms.php" class="btn-slider">Xem Phòng</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?auto=format&fit=crop&w=2000&q=80"
                        alt="Fine Dining">
                    <div class="carousel-caption">
                        <p class="slider-slogan">Ẩm thực tinh hoa</p>
                        <h1 class="slider-title">Đánh Thức<br>Mọi Giác Quan</h1>
                        <div class="slider-btn-wrap">
                            <a href="services.php" class="btn-slider">Đặt Bàn Ngay</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls-->
            <button class="carousel-control-prev" type="button" data-bs-target="#hotelSlider" data-bs-slide="prev">
                <i class="bi bi-chevron-left control-icon"></i>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hotelSlider" data-bs-slide="next">
                <i class="bi bi-chevron-right control-icon"></i>
            </button>
        </div>

        <!-- Promo Widget -->
        <div class="promo-widget-container">
            <div class="promo-widget">
                <div class="promo-content">
                    <div class="promo-badge">
                        <span class="small text-uppercase fw-bold" style="letter-spacing: 2px;">Mùa Hè</span>
                        <h2 class="mb-0 fw-bold" style="font-family: 'Playfair Display', serif;">-20%</h2>
                    </div>
                    <div class="promo-divider d-none d-md-block"></div>
                    <div class="promo-text">
                        <h4 class="mb-1" style="font-family: 'Playfair Display', serif; color: var(--secondary-color);">
                            Kỳ Nghỉ Trọn Vẹn</h4>
                        <p class="mb-0 text-muted small pe-3">Tận hưởng ưu đãi độc quyền khi đặt phòng Suite. Miễn phí
                            Spa và đưa đón sân bay.</p>
                    </div>
                </div>
                <div class="promo-action">
                    <a href="#" class="btn-custom btn-primary-theme px-4 py-3 rounded-pill shadow-sm fs-6 text-nowrap">
                        Đặt phòng ngay <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main id="explore">

        <!-- Featured Services -->
        <section class="container pt-5 pb-4 mt-2">
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <i class="bi bi-cup-hot badge-featured-service"></i>
                    <h5 class="fw-bold" style="color: var(--secondary-color);">Ẩm Thực Tinh Hoa</h5>
                    <p class="text-muted small px-3">Thưởng thức thực đơn đa dạng được chuẩn bị bởi các đầu bếp sao
                        Michelin.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-water badge-featured-service"></i>
                    <h5 class="fw-bold" style="color: var(--secondary-color);">Hồ Bơi Vô Cực</h5>
                    <p class="text-muted small px-3">Thư giãn tuyệt đối tại hồ bơi tràn viền với tầm nhìn panorama ôm
                        trọn đại dương.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-leaf badge-featured-service"></i>
                    <h5 class="fw-bold" style="color: var(--secondary-color);">Spa & Wellness</h5>
                    <p class="text-muted small px-3">Tái tạo năng lượng với các liệu pháp massage truyền thống và hiện
                        đại.</p>
                </div>
            </div>
        </section>

        <!-- Room Types Swiper -->
        <section class="container pt-5 pb-4">
            <div class="text-center">
                <h2 class="luxury-title-1">Không gian nghỉ dưỡng cao cấp</h2>
                <p class="text-muted mt-4">Sự kết hợp hoàn hảo giữa kiến trúc đương đại và nét đẹp bản địa</p>
            </div>
            <?php require_once FRONTEND_PATH . '/views/layouts/swiper.php'; ?>
            <div class="text-center">
                <button class="btn-custom btn-outline-theme px-5 py-3 mb-4 rounded-pill">Xem toàn bộ phòng</button>
            </div>
        </section>

    </main>

    <script src="<?= JS_DIR ?>/swiper.js"></script>