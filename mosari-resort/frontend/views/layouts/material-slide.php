<div class="material-slider-container">
    <!-- Slide 1: -->
    <div class="material-slide-item active"
        style="background-image: url('https://images.unsplash.com/photo-1712746785126-e9f28b5b3cc0?q=80&w=1171&auto=format&fit=crop');">
        <div class="slide-content">
            <div class="slide-text">
                <h6 class="slide-title">"Trải nghiệm nhà hàng chất lượng 5 sao"</h6>
            </div>
        </div>
    </div>

    <!-- Slide 2: -->
    <div class="material-slide-item"
        style="background-image: url('https://images.unsplash.com/photo-1598095511385-216a40c514fc?q=80&w=1074&auto=format&fit=crop');">
        <div class="slide-content">
            <div class="slide-text">
                <h5 class="slide-title">"Hồ bơi được thiết kế hiện đại"</h5>
            </div>
        </div>
    </div>

    <!-- Slide 3: -->
    <div class="material-slide-item"
        style="background-image: url('https://images.unsplash.com/photo-1600334129128-685c5582fd35?q=80&w=1170&auto=format&fit=crop');">
        <div class="slide-content">
            <div class="slide-text">
                <h5 class="slide-title">"Dịch vụ Spa & Massage trị liệu"</h5>
            </div>
        </div>
    </div>
</div>

<div class="row text-center g-4 mt-2">
    <div class="col-md-4">
        <h5 class="luxury-title-2">Ẩm Thực Tinh Hoa</h5>
        <p class="text-muted small px-3">Thưởng thức thực đơn đa dạng được chuẩn bị bởi các đầu bếp sao Michelin.</p>
    </div>
    <div class="col-md-4">
        <h5 class="luxury-title-2">Hồ Bơi Vô Cực</h5>
        <p class="text-muted small px-3">Thư giãn tuyệt đối tại hồ bơi tràn viền với tầm nhìn panorama ôm trọn đại
            dương.</p>
    </div>
    <div class="col-md-4">
        <h5 class="luxury-title-2">Spa & Wellness</h5>
        <p class="text-muted small px-3">Tái tạo năng lượng với các liệu pháp massage truyền thống và hiện đại.</p>
    </div>
</div>

<script>
    // Click event handler
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelectorAll('.material-slide-item');

        slides.forEach(slide => {
            slide.addEventListener('click', () => {
                slides.forEach(s => s.classList.remove('active'));
                slide.classList.add('active');
            });
        });
    });
</script>