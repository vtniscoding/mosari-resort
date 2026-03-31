<div class="swiper roomSwiper pb-5">
    <div class="swiper-wrapper mt-5">
        <?php if (!empty($room_types)): ?>
            <?php foreach ($room_types as $room): ?>
                <?php
                $images = json_decode($room['images'], true);
                $thumbnail = !empty($images) ? $images[0] : 'https://placehold.co/800x500?text=No+Image';
                ?>
                <div class="swiper-slide h-auto">
                    <div class="room-card">
                        <div class="room-card-img-wrapper">
                            <img src="<?= $thumbnail ?>" class="room-card-img" alt="<?= $room['name'] ?>">
                            <div class="badge-floating badge-status badge-available">
                                <i class="bi bi-check-circle me-1"></i> Có sẵn
                            </div>
                        </div>
                        <div class="room-card-body">
                            <h3 class="room-title"><?= $room['name'] ?></h3>
                            <div class="room-card-meta">
                                <span><i class="bi bi-arrows-fullscreen"></i> <?= $room['area'] ?> m²</span>
                                <span><i class="bi bi-people"></i> Tối đa <?= $room['capacity'] ?> khách</span>
                            </div>
                            <p class="text-muted small mb-4"><?= $room['description'] ?></p>

                            <div class="mt-auto d-flex justify-content-between align-items-center border-top pt-3">
                                <div class="fw-bold fs-5" style="color: var(--primary-color);">
                                    <?= number_format($room['base_price'], 0, ',', '.') ?>đ
                                    <span class="text-muted fw-normal fs-6">/ đêm</span>
                                </div>
                                <a href="<?= BASE_URL ?>/rooms/detail/<?= $room['id'] ?>" class="btn-secondary-theme px-3 py-2"
                                    style="margin-top: 0;">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="text-center w-100 py-5">
                <p class="text-muted">Chưa có dữ liệu phòng.</p>
            </div>
        <?php endif; ?>
    </div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <div class="swiper-pagination mt-4 position-static"></div>
</div>

<script>
    // Initialize Swiper
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.roomSwiper', {
            slidesPerView: 1,
            spaceBetween: 25, /* Giảm khoảng cách một chút cho thẻ gọn hơn */
            loop: false,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 25,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                }
            }
        });
    });
</script>