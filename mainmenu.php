<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tốc Độ & Đam Mê - Global Auto Auction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Rajdhani:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="mainmenu.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid px-5">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <div class="logo-box"><i class="fa-solid fa-gauge-high"></i></div>
                <div class="logo-text"><h1 class="m-0">TỐC ĐỘ & ĐAM MÊ</h1><span>GLOBAL AUTO AUCTION</span></div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-center gap-4">
                    <li class="nav-item"><a class="nav-link active" href="#">Trang Chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#auction">Phòng Đấu Giá</a></li>
                    <li class="nav-item"><a class="nav-link" href="#collections">Bộ Sưu Tập</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experts">Về Chúng Tôi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#news">Tin Tức</a></li>
                    <li class="nav-item"><a href="#" class="btn-account">Đăng Nhập</a></li>
                    <li class="nav-item position-relative">
                        <a class="nav-link cursor-pointer" onclick="toggleCart()">
                            <i class="fa-solid fa-cart-shopping fa-lg"></i>
                            <span id="cart-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 10px;">0</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="cart-sidebar" id="cartSidebar">
        <div class="cart-header">
            <h5><i class="fa-solid fa-basket-shopping text-warning"></i> GIỎ CỌC</h5>
            <button class="btn-close-cart" onclick="toggleCart()"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="cart-body" id="cartItems"><div class="text-center text-secondary mt-5"><i>Chưa có xe nào</i></div></div>
        <div class="cart-footer">
            <div class="d-flex justify-content-between mb-2"><span>Tổng cọc:</span><strong class="text-warning fs-5" id="cartTotal">0₫</strong></div>
            <button class="btn btn-warning w-100 fw-bold" onclick="alert('Đang kết nối cổng thanh toán...')">THANH TOÁN</button>
        </div>
    </div>
    <div class="cart-overlay" id="cartOverlay" onclick="toggleCart()"></div>

    <div class="news-ticker-bar">
        <div class="ticker-label">NEWS</div>
        <div class="ticker-content">
            <marquee scrollamount="8">
                <span class="ticker-item"><i class="fa-solid fa-trophy text-warning"></i> Chúc mừng <b>Minh Nhựa</b> thắng đấu giá McLaren Senna (28 Tỷ)</span>
                <span class="ticker-item"><i class="fa-solid fa-calendar-check text-warning"></i> <b>Bugatti Chiron</b> sẽ lên sàn vào 20:00 tối mai</span>
            </marquee>
        </div>
    </div>

    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="car-left"><img src="https://purepng.com/public/uploads/large/purepng.com-grey-ferrari-458-italia-carcarferrarivehicletransport-961524660879img0n.png"></div>
        <div class="hero-content container">
            <div class="hero-badge">PHIÊN ĐẤU GIÁ ĐẶC BIỆT</div>
            <h2 class="hero-title">Ducati Panigale V4 S</h2>
            <p class="hero-subtitle">Bản độ Full Carbon - Duy nhất 1 chiếc tại Việt Nam</p>
            <div class="countdown-box">
                <div class="time-item"><span id="d">00</span><label>Ngày</label></div><div class="colon">:</div>
                <div class="time-item"><span id="h">02</span><label>Giờ</label></div><div class="colon">:</div>
                <div class="time-item"><span id="m">15</span><label>Phút</label></div><div class="colon">:</div>
                <div class="time-item"><span id="s">40</span><label>Giây</label></div>
            </div>
            <div class="d-flex justify-content-center gap-3">
                <button class="btn-hero-cta" onclick="addToCart('Ducati Panigale V4 S', '950 Tr', 'https://purepng.com/public/uploads/large/purepng.com-ducati-1199-superbike-motorcyclemotorcyclemotorbikebikevehiclesducati-981525175902w2l2h.png')">ĐẶT CỌC NGAY</button>
            </div>
        </div>
        <div class="bike-right"><img src="https://purepng.com/public/uploads/large/purepng.com-ducati-1199-superbike-motorcyclemotorcyclemotorbikebikevehiclesducati-981525175902w2l2h.png"></div>
    </section>

    <section class="stats-bar">
        <div class="container">
            <div class="row text-center divide-cols">
                <div class="col-md-3 col-6"><h3 class="counter" data-target="1250">1,250</h3><p>Xe Đã Giao Dịch</p></div>
                <div class="col-md-3 col-6"><h3 class="counter" data-target="9800">9,800</h3><p>Thành Viên VIP</p></div>
                <div class="col-md-3 col-6"><h3 class="counter" data-target="150">150</h3><p>Phiên Đấu Giá / Tháng</p></div>
                <div class="col-md-3 col-6"><h3>100%</h3><p>Kiểm Định Chính Hãng</p></div>
            </div>
        </div>
    </section>

    <div id="auction" class="container-fluid px-4 main-body">
        <div class="row g-4">
            <div class="col-xxl-10 col-xl-9 col-lg-8">
                <div class="section-header d-flex justify-content-between align-items-center mb-4">
                    <h3 class="m-0"><i class="fa-solid fa-layer-group text-warning"></i> SÀN ĐẤU GIÁ LIVE</h3>
                    <span class="live-blink">LIVE</span>
                </div>
                <div class="row g-3">
                    <?php
                    $cars = [
                        ["Ferrari 488 GTB", "9.0 Tỷ", "https://images.unsplash.com/photo-1592198084033-aade902d1aae?auto=format&fit=crop&w=600&q=80"],
                        ["Lamborghini Huracan", "12.5 Tỷ", "https://images.unsplash.com/photo-1544636331-e26879cd4d9b?auto=format&fit=crop&w=600&q=80"],
                        ["Mercedes G63 AMG", "10.8 Tỷ", "https://images.unsplash.com/photo-1520031441872-265e4ff70366?auto=format&fit=crop&w=600&q=80"],
                        ["Porsche 911 GT3", "8.5 Tỷ", "https://images.unsplash.com/photo-1614162692292-7ac56d7f7f1e?auto=format&fit=crop&w=600&q=80"],
                        ["Rolls-Royce Ghost", "29.0 Tỷ", "https://images.unsplash.com/photo-1631295868223-6326585131f4?auto=format&fit=crop&w=600&q=80"],
                        ["McLaren 720S", "18.2 Tỷ", "https://images.unsplash.com/photo-1621135802920-133df287f89c?auto=format&fit=crop&w=600&q=80"],
                        ["BMW S1000RR", "680 Tr", "https://images.unsplash.com/photo-1599819811279-d5ad9cccf838?auto=format&fit=crop&w=600&q=80"],
                        ["Ducati Panigale V4", "950 Tr", "https://images.unsplash.com/photo-1568772585407-9361f9bf3a87?auto=format&fit=crop&w=600&q=80"],
                        ["Audi R8 V10", "7.5 Tỷ", "https://images.unsplash.com/photo-1605515298946-d062f2e9da53?auto=format&fit=crop&w=600&q=80"],
                        ["Aston Martin DB11", "15.0 Tỷ", "https://images.unsplash.com/photo-1600712243809-7a3dd4e68fff?auto=format&fit=crop&w=600&q=80"],
                        ["Bentley Continental", "21.0 Tỷ", "https://images.unsplash.com/photo-1580274455191-1c62238fa333?auto=format&fit=crop&w=600&q=80"],
                        ["Kawasaki H2R", "1.2 Tỷ", "https://images.unsplash.com/photo-1558981852-426c6c22a060?auto=format&fit=crop&w=600&q=80"]
                    ];
                    foreach($cars as $car) {
                        echo '
                        <div class="col-xxl-3 col-xl-4 col-md-4 col-sm-6">
                            <div class="product-card">
                                <div class="card-img">
                                    <img src="'.$car[2].'" alt="'.$car[0].'">
                                    <span class="badge-live">LIVE</span>
                                </div>
                                <div class="card-content">
                                    <h5 class="text-truncate">'.$car[0].'</h5>
                                    <div class="price-row"><span>Hiện tại:</span><strong class="text-warning">'.$car[1].'</strong></div>
                                    <div class="progress my-2" style="height: 4px; background:#333"><div class="progress-bar bg-warning" style="width: '.rand(30,90).'%"></div></div>
                                    <button class="btn btn-bid w-100 fw-bold" onclick="addToCart(\''.$car[0].'\', \''.$car[1].'\', \''.$car[2].'\')">ĐẶT CỌC</button>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4">
                <div class="sidebar-wrapper">
                    <div class="chat-panel mb-4">
                        <div class="panel-header"><i class="fa-regular fa-comments"></i> BÌNH LUẬN</div>
                        <div class="chat-body" id="chatBox"></div>
                        <div class="chat-footer"><input type="text" placeholder="..." class="form-control"><button class="btn btn-warning"><i class="fa-solid fa-paper-plane"></i></button></div>
                    </div>
                    <div class="top-bidders-panel">
                        <div class="panel-header bg-warning text-dark"><i class="fa-solid fa-trophy"></i> TOP ĐẠI GIA</div>
                        <ul class="bidder-list">
                            <li><span class="rank rank-1">1</span><img src="https://i.pravatar.cc/100?img=11"><div class="info"><strong>Minh Nhựa</strong><small>50 Tỷ</small></div></li>
                            <li><span class="rank rank-2">2</span><img src="https://i.pravatar.cc/100?img=3"><div class="info"><strong>Cường Dollar</strong><small>32 Tỷ</small></div></li>
                            <li><span class="rank rank-3">3</span><img src="https://i.pravatar.cc/100?img=59"><div class="info"><strong>Shark Hưng</strong><small>15 Tỷ</small></div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="vip-section mb-5">
        <div class="container">
            <div class="vip-banner">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h2><i class="fa-solid fa-crown text-warning"></i> VIP LOUNGE</h2>
                        <p>Đặc quyền dành riêng cho thành viên VIP: Truy cập phòng đấu giá bí mật.</p>
                        <button class="btn btn-outline-warning px-4 mt-2">THAM GIA NGAY</button>
                    </div>
                    <div class="col-md-5 text-center"><i class="fa-solid fa-gem fa-5x text-warning opacity-50"></i></div>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming-section py-5 bg-darker">
        <div class="container">
            <h3 class="section-title mb-4"><i class="fa-regular fa-calendar-check text-warning"></i> SẮP LÊN SÀN</h3>
            <div class="row g-4">
                <div class="col-md-3 col-sm-6"><div class="upcoming-card"><div class="uc-img"><img src="https://images.unsplash.com/photo-1617788138017-80ad40651399?auto=format&fit=crop&w=600&q=80"><div class="uc-date">25/01</div></div><div class="uc-body"><h6>Lamborghini SVJ</h6><p class="small text-muted">TP.HCM</p></div></div></div>
                <div class="col-md-3 col-sm-6"><div class="upcoming-card"><div class="uc-img"><img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?auto=format&fit=crop&w=600&q=80"><div class="uc-date">26/01</div></div><div class="uc-body"><h6>Audi R8 V10</h6><p class="small text-muted">Hà Nội</p></div></div></div>
                <div class="col-md-3 col-sm-6"><div class="upcoming-card"><div class="uc-img"><img src="https://images.unsplash.com/photo-1503376763036-066120622c74?auto=format&fit=crop&w=600&q=80"><div class="uc-date">27/01</div></div><div class="uc-body"><h6>McLaren P1 GTR</h6><p class="small text-muted">Đà Nẵng</p></div></div></div>
                <div class="col-md-3 col-sm-6"><div class="upcoming-card"><div class="uc-img"><img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?auto=format&fit=crop&w=600&q=80"><div class="uc-date">28/01</div></div><div class="uc-body"><h6>Porsche 918 Spyder</h6><p class="small text-muted">Online</p></div></div></div>
            </div>
        </div>
    </section>

    <section id="collections" class="collection-section py-5">
        <div class="container">
            <h3 class="section-title text-center mb-5">BỘ SƯU TẬP</h3>
            <div class="row g-4">
                <div class="col-md-4"><div class="collection-item h-100 position-relative rounded overflow-hidden"><img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?auto=format&fit=crop&w=800&q=80" class="w-100 h-100 object-fit-cover" style="filter: brightness(0.6);"><div class="position-absolute top-50 start-50 translate-middle text-center w-100"><h4 class="text-white fw-bold">JDM LEGENDS</h4></div></div></div>
                <div class="col-md-4"><div class="collection-item h-100 position-relative rounded overflow-hidden"><img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?auto=format&fit=crop&w=800&q=80" class="w-100 h-100 object-fit-cover" style="filter: brightness(0.6);"><div class="position-absolute top-50 start-50 translate-middle text-center w-100"><h4 class="text-white fw-bold">ITALIAN HORSES</h4></div></div></div>
                <div class="col-md-4"><div class="collection-item h-100 position-relative rounded overflow-hidden"><img src="https://images.unsplash.com/photo-1566008885218-90abf9200ddb?auto=format&fit=crop&w=800&q=80" class="w-100 h-100 object-fit-cover" style="filter: brightness(0.6);"><div class="position-absolute top-50 start-50 translate-middle text-center w-100"><h4 class="text-white fw-bold">CLASSIC</h4></div></div></div>
            </div>
        </div>
    </section>

    <section id="experts" class="expert-section py-5 bg-darker">
        <div class="container text-center">
            <h3 class="section-title mb-5">ĐỘI NGŨ CHUYÊN GIA</h3>
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-4"><img src="https://i.pravatar.cc/300?img=13" class="rounded-circle mb-3 border border-3 border-warning" style="width:120px"><h5>Trần Minh</h5><p class="small text-muted">Thẩm định viên</p></div>
                <div class="col-md-3 col-6 mb-4"><img src="https://i.pravatar.cc/300?img=68" class="rounded-circle mb-3 border border-3 border-warning" style="width:120px"><h5>Lê Tuấn</h5><p class="small text-muted">Kỹ thuật Ferrari</p></div>
                <div class="col-md-3 col-6 mb-4"><img src="https://i.pravatar.cc/300?img=52" class="rounded-circle mb-3 border border-3 border-warning" style="width:120px"><h5>Hoàng Nam</h5><p class="small text-muted">Giám đốc sàn</p></div>
                <div class="col-md-3 col-6 mb-4"><img src="https://i.pravatar.cc/300?img=44" class="rounded-circle mb-3 border border-3 border-warning" style="width:120px"><h5>Hương Giang</h5><p class="small text-muted">Pháp lý</p></div>
            </div>
        </div>
    </section>

    <section class="faq-section py-5">
        <div class="container">
            <h3 class="section-title text-center mb-5">CÂU HỎI THƯỜNG GẶP</h3>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="p-3 mb-3 bg-dark rounded border border-secondary"><h6 class="m-0 text-warning">Làm thế nào để đăng ký?</h6><p class="small text-muted mt-2 m-0">Tạo tài khoản và xác minh danh tính (KYC).</p></div>
                        <div class="p-3 mb-3 bg-dark rounded border border-secondary"><h6 class="m-0 text-warning">Phí sàn là bao nhiêu?</h6><p class="small text-muted mt-2 m-0">Phí 2% trên giá trị xe trúng đấu giá.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="news" class="news-section py-5 bg-darker">
        <div class="container">
            <h3 class="section-title mb-4">TIN TỨC</h3>
            <div class="row g-4">
                <div class="col-md-4"><div class="news-card border border-secondary rounded overflow-hidden h-100"><img src="https://images.unsplash.com/photo-1519641471654-76ce0107ad1b?auto=format&fit=crop&w=600&q=80" class="w-100" style="height: 200px; object-fit: cover;"><div class="p-3 bg-dark-2"><small class="text-warning">24/01/2026</small><h5 class="my-2">Thị trường siêu xe Việt Nam 2026</h5></div></div></div>
                <div class="col-md-4"><div class="news-card border border-secondary rounded overflow-hidden h-100"><img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=600&q=80" class="w-100" style="height: 200px; object-fit: cover;"><div class="p-3 bg-dark-2"><small class="text-warning">22/01/2026</small><h5 class="my-2">Kinh nghiệm kiểm tra xe cũ</h5></div></div></div>
                <div class="col-md-4"><div class="news-card border border-secondary rounded overflow-hidden h-100"><img src="https://images.unsplash.com/photo-1563720223185-11003d516935?auto=format&fit=crop&w=600&q=80" class="w-100" style="height: 200px; object-fit: cover;"><div class="p-3 bg-dark-2"><small class="text-warning">20/01/2026</small><h5 class="my-2">Bàn giao Rolls-Royce Phantom VIII</h5></div></div></div>
            </div>
        </div>
    </section>

    <section class="brand-section py-4 border-top border-secondary">
        <div class="container text-center">
            <p class="text-white small text-uppercase mb-3">Đối tác chiến lược</p>
            <div class="d-flex justify-content-center gap-5 flex-wrap opacity-50">
                <i class="fa-brands fa-cc-visa fa-3x text-light"></i>
                <i class="fa-brands fa-cc-mastercard fa-3x text-light"></i>
                <i class="fa-brands fa-aws fa-3x text-light"></i>
                <i class="fa-brands fa-google fa-3x text-light"></i>
            </div>
        </div>
    </section>

    <footer class="footer mt-0 pt-5 bg-black">
        <div class="container px-5">
            <div class="row pb-5">
                <div class="col-lg-4">
                    <h4 class="text-white mb-3 fw-bold">TỐC ĐỘ & ĐAM MÊ</h4>
                    <p class="text-secondary small">Sàn đấu giá xe sang uy tín hàng đầu Châu Á. Cam kết minh bạch và đẳng cấp.</p>
                    <div class="mt-3">
                        <a href="#" class="text-white me-3"><i class="fa-brands fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fa-brands fa-youtube fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fa-brands fa-tiktok fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h6 class="text-warning mb-3">VỀ CHÚNG TÔI</h6>
                    <ul class="list-unstyled text-secondary small">
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Giới thiệu</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Tuyển dụng</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h6 class="text-warning mb-3">HỖ TRỢ</h6>
                    <ul class="list-unstyled text-secondary small">
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Quy chế</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Bảo mật</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h6 class="text-warning mb-3">HỆ THỐNG SHOWROOM</h6>
                    <ul class="list-unstyled text-secondary small">
                        <li class="mb-2"><i class="fa-solid fa-location-dot text-warning me-2"></i> <strong>Sài Gòn:</strong> Landmark 81, Vinhomes Central Park</li>
                        <li class="mb-2"><i class="fa-solid fa-location-dot text-warning me-2"></i> <strong>Hà Nội:</strong> Keangnam Landmark 72, Nam Từ Liêm</li>
                        <li class="mb-2"><i class="fa-solid fa-location-dot text-warning me-2"></i> <strong>Đà Nẵng:</strong> Indochina Riverside, Hải Châu</li>
                        <li class="mt-3"><i class="fa-solid fa-phone text-warning me-2"></i> Hotline: 1900 9999 (24/7)</li>
                    </ul>
                </div>
            </div>
            <div class="border-top border-secondary py-3 text-center text-secondary small">
                © 2026 Tốc Độ & Đam Mê. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="mainmenu.js"></script>
</body>
</html>