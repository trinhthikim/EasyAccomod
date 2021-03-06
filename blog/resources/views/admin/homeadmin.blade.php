@extends('admin.topHeader') 
@section('section') 
    <!-- <div class="menuHeader uk-sticky" uk-sticky>
        <div class="uk-container uk-padding-remove">
            <nav class="uk-navbar-container uk-navbar-transparent uk-navbar" uk-navbar="">
                <div class="uk-navbar-left">
                    <a href="#my-id" class="uk-navbar-toggle menuHeader__navItem uk-hidden@m" uk-toggle="">
                        <div id="m_nav_menu" class="m_nav menu">
                            <span class="m_nav_ham_button_closed uk-icon-button" uk-icon="icon: menu; ratio: 1.5;"
                                style="color: black;"></span>
                        </div>
                    </a>
                    <a href="http://ql.xephinh.xyz/" class="uk-navbar-item uk-padding-remove uk-logo">
                        <img src="{{asset('asset/image/EasyAccomod.png')}}" alt="logo">
                    </a>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li>
                            <a href="./index.html" style="font-size: small;">TRANG CHỦ</a>
                        </li>
                        <li>
                            <a href="#tracuu" style="font-size: small">TRA CỨU</a>
                        </li>
                        <li>
                            <a href="#" style="font-size: small;">DỊCH VỤ</a>
                            <div
                                class="uk-navbar-dropdown menuHeader__navbarDropdown menuHeader__navbarDropdown--oneMenu">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="">Cho thuê phòng trọ</a></li>
                                    <li><a href="">Cho thuê chung cư mini</a></li>
                                    <li><a href="">Cho thuê nhà nguyên căn</a></li>
                                    <li><a href="">Cho thuê chung cư nguyên căn</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="" style="font-size: small;">BẢNG GIÁ QUẢNG CÁO</a>
                        </li>
                        <li>
                            <a href="#" style="font-size: small;">TIN TỨC</a>
                            <div
                                class="uk-navbar-dropdown uk-navbar-dropdown-width-3 menuHeader__navbarDropdown menuHeader__navbarDropdown--gridMenu">
                                <div class="uk-navbar-dropdown-grid uk-child-width-1-3" uk-grid="">
                                    <div>
                                        <a href="#">
                                            <div class="menuHeader__navbarDropdown__title">TIN TỨC GIÁ NHÀ ĐẤT</div>
                                        </a>
                                        <ul class="uk-list menuHeader__navbarDropdown__list1" style="margin-top: 15px">
                                            <li><a href="#">Kinh nghiệm mua nhà</a></li>
                                            <li><a href="#">Tư vấn mua nhà</a></li>
                                            <li><a href="#">Bảng giá nhà đất</a></li>
                                            <li><a href="#">Danh sách bán nhà đất</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <div class="menuHeader__navbarDropdown__title">TIN TỨC BÁN NHÀ</div>
                                        </a>
                                        <ul class="uk-list menuHeader__navbarDropdown__list1" style="margin-top: 15px">
                                            <li><a href="#">Bảng giá nhà</a></li>
                                            <li><a href="#">Thủ tục mua nhà</a></li>
                                            <li><a href="#">Kinh nghiệm mua nhà</a></li>
                                            <li><a href="#">Danh sách nhà cần bán</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <div class="menuHeader__navbarDropdown__title">CẨM NANG CHUYỂN NHÀ</div>
                                        </a>
                                        <ul class="uk-list menuHeader__navbarDropdown__list1" style="margin-top: 15px">
                                            <li><a href="#">Cẩm nang cho khách hàng mới</a></li>
                                            <li><a href="#">Tài liệu vận chuyển nhà</a></li>
                                            <li><a href="#">Hướng dẫn vận chuyển nhà</a></li>
                                            <li><a href="#">Bảng giá cước hôm nay</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <div class="menuHeader__navbarDropdown__title">TIN TỨC Ô TÔ</div>
                                        </a>
                                        <ul class="uk-list menuHeader__navbarDropdown__list1" style="margin-top: 15px">
                                            <li><a href="#">Tư vấn ô tô</a></li>
                                            <li><a href="#">Kinh nghiệm ô tô</a></li>
                                            <li><a href="#">Danh sách hãng xe</a></li>
                                            <li><a href="#">Bảng giá ô tô</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <div class="menuHeader__navbarDropdown__title">BLOG EasyAccomod</div>
                                        </a>
                                        <ul class="uk-list menuHeader__navbarDropdown__list1" style="margin-top: 15px">
                                            <li><a href="#">Giới thiệu về chúng tôi</a></li>
                                            <li><a href="#">Thành viên HĐQT</a></li>
                                            <li><a href="#">Blog EasyAccomod</a></li>
                                            <li><a href="#">Khám phá</a></li>
                                            <li><a href="#">Hồ sơ năng lực</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div>
                                            <ul class="uk-list menuHeader__navbarDropdown__list1">
                                                <li><a href="#">Bảng giá xăng dầu hôm nay</a></li>
                                                <li><a href="#">Danh sách xe vận chuyển</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" style="font-size: small;">LIÊN HỆ</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div> -->
    <!-- Khi thu nhỏ màn hình, sẽ hiện menu ẩn -->
    <div id="my-id" class="uk-offcanvas" uk-offcanvas="mode: reveal; overlay:true">
        <div class="uk-overflow-auto uk-offcanvas-bar uk-padding-remove uk-flex uk-flex-column">
            <div class="uk-flex-auto">
                <div class="uk-padding-small uk-margin-remove">
                    <a href=""><img src="{{asset('asset/image/EasyAccomod-1.png')}}" alt=""></a>
                </div>

                <ul class="uk-nav-default uk-nav uk-nav-parent-icon nav__menu" uk-nav>
                    <li class="nav__menu__item"><a href="./index.html">TRANG CHỦ</a></li>
                    <li class="nav__menu__item">
                        <a href="#" class="nav__menu__link">TRA CỨU NHANH</a>
                    </li>
                    <li class="uk-parent nav__menu__item">
                        <a href="#" class="nav__menu__link">DỊCH VỤ</a>
                        <ul class="uk-nav-sub" hidden="" style="padding-left: 20px;">
                            <li><a href="#" class="uk-text-small">Cho thuê phòng trọ</a></li>
                            <li><a href="#" class="uk-text-small">Cho thuê chung cư mini</a></li>
                            <li><a href="#" class="uk-text-small">Cho thuê nhà nguyên căn</a></li>
                            <li><a href="#" class="uk-text-small">Cho thuê chung cư nguyên căn</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent nav__menu__item">
                        <a href="#" class="nav__menu__link">TIN TỨC</a>
                        <ul class="uk-nav-sub" hidden="" style="padding-left: 20px;">
                            <li><a href="#" class="uk-text-small">Tin tức giá nhà đất</a></li>
                            <li><a href="#" class="uk-text-small">Tin tức bán nhà</a></li>
                            <li><a href="#" class="uk-text-small">Cẩm nang chuyển nhà</a></li>
                            <li><a href="#" class="uk-text-small">Tin tức ô tô</a></li>
                        </ul>
                    </li>
                    <li class="nav__menu__item">
                        <a href="#" class="nav__menu__link">BẢNG GIÁ QUẢNG CÁO</a>
                    </li>
                    <li class="nav__menu__item">
                        <a href="#" class="nav__menu__link">LIÊN HỆ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Ảnh chính của trang mà hiện giờ chưa tìm đc ảnh đủ kích thước. dể trắng tạm -->
    <div class="uk-position-relative uk-visible-toggle uk-light uk-slideshow" tabindex="-1"
        uk-slideshow="ratio: 16:9; autoplay: true; autoplay-interval: 4000">
        <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom: 0"
            style="min-height: calc(100vh - 120px);">
            <li tabindex="-1" class="">
                <img src="{{asset('asset/image/banner-1.JPG')}}" alt="" uk-cover="" class="uk-cover"
                    style="height: 650px; width: 1306px;">
            </li>
            <!-- <li tabindex="-1" class="uk-active uk-transition-active">
                    <img src="./asset/image/banner-2.JPG" alt="" uk-cover="" class="uk-cover" style="height: 650px; width: 1306px;">
                </li> -->
            <li tabindex="-1" class="">
                <img src="{{asset('asset/image/banner-3.JPG')}}" alt="" uk-cover="" class="uk-cover"
                    style="height: 650px; width: 1306px;">
            </li>
            <li tabindex="-1" class="">
                <img src="{{asset('asset/image/banner-4.JPG')}}" alt="" uk-cover="" class="uk-cover"
                    style="height: 650px; width: 1306px;">
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-icon uk-slidenav-previous uk-slidenav"
            href="http://ql.xephinh.xyz/#" uk-slidenav-previous="" uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-icon uk-slidenav-next uk-slidenav"
            href="http://ql.xephinh.xyz/#" uk-slidenav-next="" uk-slideshow-item="next"></a>

    </div>
    <!-- Phần tra cứu. Phần code hơi xấu và dài do chưa có thời gian chỉnh sửa -->
    <div class="home__block__tracuu" id="tracuu">
        <div class="home__block__tracuu__bg uk-background-norepeat uk-section uk-background-center-center" data-src=""
            uk-img="">
            <div class="uk-container">
                <div class="home__title uk-text-center uk-text-uppercase uk-margin-medium"><span>TRA CỨU BẢN TIN TẠI
                        ĐÂY</span></div>
                <div class="uk-flex-center@m uk-grid" uk-grid="">
                    <div class="uk-width-5-6@m uk-flex-last@m">
                        <ul class="uk-switcher" style="touch-action: pan-y pinch-zoom;">
                            <li class="uk-active">
                                <div class="uk-card uk-card-default tracuu__card1">
                                    <div class="uk-card-body uk-padding-small">
                                        <form action="#" method="post" class="uk-grid-small uk-grid" uk-grid="">
                                            <div class="uk-width-1-5 uk-grid-margin">
                                                <label class="uk-form-label tracuu__card1__label"
                                                    for="form-stacked-text">Chọn tin</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-width-1-1 uk-form-custom"
                                                        uk-form-custom="target: &gt; * &gt; span:first-child">
                                                        <select name="loaidichvu">
                                                            <option>Thuê phòng trọ</option>
                                                            <option>Thuê chung cư mini</option>
                                                            <option>Thuê nhà nguyên căn</option>
                                                            <option>Thuê chung cư nguyên căn</option>
                                                        </select>
                                                        <button
                                                            class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                            type="button" tabindex="-1">
                                                            <span></span>
                                                            <span uk-icon="icon: menu" class="uk-icon"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-5 uk-first-column">
                                                <label class="uk-form-label tracuu__card1__label"
                                                    for="form-stacked-text">Chọn Tỉnh/TP</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-child-width-1-1 uk-grid-10 uk-grid uk-grid-stack"
                                                        uk-grid="">
                                                        <div class="uk-first-column">
                                                            <div class="tinhnhan uk-form-custom" id="558"
                                                                style="display: block"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="tinh_nhan[]" onchange="resetHuyen1(this)">
                                                                    <option value="1">An Giang</option>
                                                                    <option value="2">Bà Rịa - Vũng Tàu</option>
                                                                    <option value="5">Bắc Kạn</option>
                                                                    <option value="4">Bắc Giang</option>
                                                                    <option value="3">Bạc Liêu</option>
                                                                    <option value="6">Bắc Ninh</option>
                                                                    <option value="7">Bến Tre</option>
                                                                    <option value="9">Bình Định</option>
                                                                    <option value="8">Bình Dương</option>
                                                                    <option value="10">Bình Phước</option>
                                                                    <option value="11">Bình Thuận</option>
                                                                    <option value="12">Cà Mau</option>
                                                                    <option value="14">Cần Thơ</option>
                                                                    <option value="13">Cao Bằng</option>
                                                                    <option value="15">Đà Nẵng</option>
                                                                    <option value="16">Đắk Lắk</option>
                                                                    <option value="17">Đắk Nông</option>
                                                                    <option value="18">Điện Biên</option>
                                                                    <option value="19">Đồng Nai</option>
                                                                    <option value="20">Đồng Tháp</option>
                                                                    <option value="21">Gia Lai</option>
                                                                    <option value="22">Hà Giang</option>
                                                                    <option value="23">Hà Nam</option>
                                                                    <option value="24">Hà Nội</option>
                                                                    <option value="25">Hà Tĩnh</option>
                                                                    <option value="26">Hải Dương</option>
                                                                    <option value="27">Hải Phòng</option>
                                                                    <option value="28">Hậu Giang</option>
                                                                    <option value="58">Hồ Chí Minh</option>
                                                                    <option value="29">Hòa Bình</option>
                                                                    <option value="30">Hưng Yên</option>
                                                                    <option value="31">Khánh Hòa</option>
                                                                    <option value="32">Kiên Giang</option>
                                                                    <option value="0">Kiên Giang - Phú Quốc</option>
                                                                    <option value="33">Kon Tum</option>
                                                                    <option value="37">Lâm Đồng</option>
                                                                    <option value="35">Lạng Sơn</option>
                                                                    <option value="34">Lai Châu</option>
                                                                    <option value="36">Lào Cai</option>
                                                                    <option value="38">Long An</option>
                                                                    <option value="39">Nam Định</option>
                                                                    <option value="40">Nghệ An</option>
                                                                    <option value="41">Ninh Bình</option>
                                                                    <option value="42">Ninh Thuận</option>
                                                                    <option value="43">Phú Thọ</option>
                                                                    <option value="44">Phú Yên</option>
                                                                    <option value="45">Quảng Bình</option>
                                                                    <option value="46">Quảng Nam</option>
                                                                    <option value="47">Quảng Ngãi</option>
                                                                    <option value="48">Quảng Ninh</option>
                                                                    <option value="49">Quảng Trị</option>
                                                                    <option value="50">Sóc Trăng</option>
                                                                    <option value="51">Sơn La</option>
                                                                    <option value="52">Tây Ninh</option>
                                                                    <option value="53">Thái Bình</option>
                                                                    <option value="54">Thái Nguyên</option>
                                                                    <option value="55">Thanh Hóa</option>
                                                                    <option value="56">Thừa Thiên Huế</option>
                                                                    <option value="57">Tiền Giang</option>
                                                                    <option value="59">Trà Vinh</option>
                                                                    <option value="60">Tuyên Quang</option>
                                                                    <option value="61">Vĩnh Long</option>
                                                                    <option value="62">Vĩnh Phúc</option>
                                                                    <option value="63">Yên Bãi</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>An Giang</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-5 uk-grid-margin">
                                                <label class="uk-form-label tracuu__card1__label"
                                                    for="form-stacked-text">Chọn Quận/Huyện</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-width-1-1 uk-form-custom"
                                                        uk-form-custom="target: &gt; * &gt; span:first-child">
                                                        <div class="uk-grid-margin uk-first-column">
                                                            <div id="tmp2" class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="kk">
                                                                    <option>Chọn Quận/Huyện</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Chọn Quận/Huyện</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="601" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">An Phú</option>
                                                                    <option value="2">Châu Đốc</option>
                                                                    <option value="3">Châu Phú</option>
                                                                    <option value="4">Châu Thành</option>
                                                                    <option value="5">Chợ Mới</option>
                                                                    <option value="6">Long Xuyên</option>
                                                                    <option value="7">Phú Tân</option>
                                                                    <option value="8">Tân Châu</option>
                                                                    <option value="9">Thoại Sơn</option>
                                                                    <option value="10">Tịnh Biên</option>
                                                                    <option value="11">Tri Tôn</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>An Phú</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="602" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bà Rịa</option>
                                                                    <option value="2">Châu Đức</option>
                                                                    <option value="3">Côn Đảo</option>
                                                                    <option value="4">Đất Đỏ</option>
                                                                    <option value="5">Long Điền</option>
                                                                    <option value="6">Phú Mỹ</option>
                                                                    <option value="7">Vũng Tàu</option>
                                                                    <option value="8">Xuyên Mộc</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bà Rịa</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="603" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bạc Liêu</option>
                                                                    <option value="2">Đông Hải</option>
                                                                    <option value="3">Giá Rai</option>
                                                                    <option value="4">Hoà Bình</option>
                                                                    <option value="5">Hồng Dân</option>
                                                                    <option value="6">Phước Long</option>
                                                                    <option value="7">Vĩnh Lợi</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bạc Liêu</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="604" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bắc Giang</option>
                                                                    <option value="2">Hiệp Hòa</option>
                                                                    <option value="3">Lạng Giang</option>
                                                                    <option value="4">Lục Nam</option>
                                                                    <option value="5">Lục Ngạn</option>
                                                                    <option value="6">Sơn Động</option>
                                                                    <option value="7">Tân Yên</option>
                                                                    <option value="8">Việt Yên</option>
                                                                    <option value="9">Yên Dũng</option>
                                                                    <option value="10">Yên Thế</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bắc Giang</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="605" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Ba Bể</option>
                                                                    <option value="2">Bạch Thông</option>
                                                                    <option value="3">Bắc Kạn</option>
                                                                    <option value="4">Chợ Đồn</option>
                                                                    <option value="5">Chợ Mới</option>
                                                                    <option value="6">Na Rì</option>
                                                                    <option value="7">Ngân Sơn</option>
                                                                    <option value="8">Pác Nặm</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Ba Bể</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="606" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bắc Ninh</option>
                                                                    <option value="2">Gia Bình</option>
                                                                    <option value="3">Lương Tài</option>
                                                                    <option value="4">Quế Võ</option>
                                                                    <option value="5">Thuận Thành</option>
                                                                    <option value="6">Tiên Du</option>
                                                                    <option value="7">Từ Sơn</option>
                                                                    <option value="8">Yên Phong</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bắc Ninh</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="607" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Ba Tri</option>
                                                                    <option value="2">Bến Tre</option>
                                                                    <option value="3">Bình Đại</option>
                                                                    <option value="4">Châu Thành</option>
                                                                    <option value="5">Chợ Lách</option>
                                                                    <option value="6">Giồng Trôm</option>
                                                                    <option value="7">Mỏ Cày Bắc</option>
                                                                    <option value="8">Mỏ Cày Nam</option>
                                                                    <option value="9">Thạnh Phú</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Ba Tri</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="608" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bàu Bàng</option>
                                                                    <option value="2">Bắc Tân Uyên</option>
                                                                    <option value="3">Bến Cát</option>
                                                                    <option value="4">Dầu Tiếng</option>
                                                                    <option value="5">Dĩ An</option>
                                                                    <option value="6">Phú Giáo</option>
                                                                    <option value="7">Tân Uyên</option>
                                                                    <option value="8">Thủ Dầu Một</option>
                                                                    <option value="9">Thuận An</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bàu Bàng</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="609" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">An Lão</option>
                                                                    <option value="2">An Nhơn</option>
                                                                    <option value="3">Hoài Ân</option>
                                                                    <option value="4">Hoài Nhơn</option>
                                                                    <option value="5">Phù Cát</option>
                                                                    <option value="6">Phù Mỹ</option>
                                                                    <option value="7">Quy Nhơn</option>
                                                                    <option value="8">Tây Sơn</option>
                                                                    <option value="9">Tuy Phước</option>
                                                                    <option value="10">Vân Canh</option>
                                                                    <option value="11">Vĩnh Thạnh</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>An Lão</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="610" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bình Long</option>
                                                                    <option value="2">Bù Đăng</option>
                                                                    <option value="3">Bù Đốp</option>
                                                                    <option value="4">Bù Gia Mập</option>
                                                                    <option value="5">Chơn Thành</option>
                                                                    <option value="6">Đồng Phú</option>
                                                                    <option value="7">Đồng Xoài</option>
                                                                    <option value="8">Hớn Quản</option>
                                                                    <option value="9">Lộc Ninh</option>
                                                                    <option value="10">Phú Riềng</option>
                                                                    <option value="11">Phước Long</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bình Long</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="611" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bắc Bình</option>
                                                                    <option value="2">Đức Linh</option>
                                                                    <option value="3">Hàm Tân</option>
                                                                    <option value="4">Hàm Thuận Bắc</option>
                                                                    <option value="5">Hàm Thuận Nam</option>
                                                                    <option value="6">La Gi</option>
                                                                    <option value="7">Phan Thiết</option>
                                                                    <option value="8">Phú Quý</option>
                                                                    <option value="9">Tánh Linh</option>
                                                                    <option value="10">Tuy Phong</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bắc Bình</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="612" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Cà Mau</option>
                                                                    <option value="2">Cái Nước</option>
                                                                    <option value="3">Đầm Dơi</option>
                                                                    <option value="4">Năm Căn</option>
                                                                    <option value="5">Ngọc Hiển</option>
                                                                    <option value="6">Phú Tân</option>
                                                                    <option value="7">Thới Bình</option>
                                                                    <option value="8">Trần Văn Thời</option>
                                                                    <option value="9">U Minh</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Cà Mau</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="613" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bảo Lạc</option>
                                                                    <option value="2">Bảo Lâm</option>
                                                                    <option value="3">Cao Bằng</option>
                                                                    <option value="4">Hà Quảng</option>
                                                                    <option value="5">Hạ Lang</option>
                                                                    <option value="6">Hòa An</option>
                                                                    <option value="7">Nguyên Bình</option>
                                                                    <option value="8">Quảng Hòa</option>
                                                                    <option value="9">Thạch An</option>
                                                                    <option value="10">Trùng Khánh</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bảo Lạc</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="614" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bình Thủy</option>
                                                                    <option value="2">Cái Răng</option>
                                                                    <option value="3">Cờ Đỏ</option>
                                                                    <option value="4">Ninh Kiều</option>
                                                                    <option value="5">Ô Môn</option>
                                                                    <option value="6">Phong Điền</option>
                                                                    <option value="7">Thốt Nốt</option>
                                                                    <option value="8">Thới Lai</option>
                                                                    <option value="9">Vĩnh Thạnh</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bình Thủy</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="615" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Cẩm Lệ</option>
                                                                    <option value="2">Hải Châu</option>
                                                                    <option value="3">Hòa Vang</option>
                                                                    <option value="4">Hoàng Sa</option>
                                                                    <option value="5">Liên Chiểu</option>
                                                                    <option value="6">Ngũ Hành Sơn</option>
                                                                    <option value="7">Sơn Trà</option>
                                                                    <option value="8">Thanh Khê</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Cẩm Lệ</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="616" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Buôn Đôn</option>
                                                                    <option value="2">Buôn Hồ</option>
                                                                    <option value="3">Buôn Ma Thuột</option>
                                                                    <option value="4">Cư Kuin</option>
                                                                    <option value="5">Cư M'gar</option>
                                                                    <option value="6">Ea H'leo</option>
                                                                    <option value="7">Ea Kar</option>
                                                                    <option value="8">Ea Súp</option>
                                                                    <option value="9">Krông Ana</option>
                                                                    <option value="10">Krông Bông</option>
                                                                    <option value="11">Krông Búk</option>
                                                                    <option value="12">Krông Năng</option>
                                                                    <option value="13">Krông Pắk</option>
                                                                    <option value="14">Lắk</option>
                                                                    <option value="15">M'Đrăk</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Buôn Đôn</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="617" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Cư Jút</option>
                                                                    <option value="2">Đắk Glong</option>
                                                                    <option value="3">Đắk Mil</option>
                                                                    <option value="4">Đắk R'lấp</option>
                                                                    <option value="5">Đắk Song</option>
                                                                    <option value="6">Gia Nghĩa</option>
                                                                    <option value="7">Krông Nô</option>
                                                                    <option value="8">Tuy Đức</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Cư Jút</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="618" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Điện Biên</option>
                                                                    <option value="2">Điện Biên Đông</option>
                                                                    <option value="3">Điện Biên Phủ</option>
                                                                    <option value="4">Mường Ảng</option>
                                                                    <option value="5">Mường Chà</option>
                                                                    <option value="6">Mường Lay</option>
                                                                    <option value="7">Mường Nhé</option>
                                                                    <option value="8">Nậm Pồ</option>
                                                                    <option value="9">Tủa Chùa</option>
                                                                    <option value="10">Tuần Giáo</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Điện Biên</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="619" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Biên Hòa</option>
                                                                    <option value="2">Cẩm Mỹ</option>
                                                                    <option value="3">Định Quán</option>
                                                                    <option value="4">Long Khánh</option>
                                                                    <option value="5">Long Thành</option>
                                                                    <option value="6">Nhơn Trạch</option>
                                                                    <option value="7">Tân Phú</option>
                                                                    <option value="8">Thống Nhất</option>
                                                                    <option value="9">Trảng Bom</option>
                                                                    <option value="10">Vĩnh Cửu</option>
                                                                    <option value="11">Xuân Lộc</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Biên Hòa</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="620" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Cao Lãnh</option>
                                                                    <option value="2">Cao Lãnh</option>
                                                                    <option value="3">Châu Thành</option>
                                                                    <option value="4">Hồng Ngự</option>
                                                                    <option value="5">Hồng Ngự</option>
                                                                    <option value="6">Lai Vung</option>
                                                                    <option value="7">Lấp Vò</option>
                                                                    <option value="8">Sa Đéc</option>
                                                                    <option value="9">Tam Nông</option>
                                                                    <option value="10">Tân Hồng</option>
                                                                    <option value="11">Thanh Bình</option>
                                                                    <option value="12">Tháp Mười</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Cao Lãnh</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="621" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">An Khê</option>
                                                                    <option value="2">Ayun Pa</option>
                                                                    <option value="3">Chư Păh</option>
                                                                    <option value="4">Chư Prông</option>
                                                                    <option value="5">Chư Pưh</option>
                                                                    <option value="6">Chư Sê</option>
                                                                    <option value="7">Đắk Đoa</option>
                                                                    <option value="8">Đak Pơ</option>
                                                                    <option value="9">Đức Cơ</option>
                                                                    <option value="10">Ia Grai</option>
                                                                    <option value="11">Ia Pa</option>
                                                                    <option value="12">K'Bang</option>
                                                                    <option value="13">Kông Chro</option>
                                                                    <option value="14">Krông Pa</option>
                                                                    <option value="15">Mang Yang</option>
                                                                    <option value="16">Phú Thiện</option>
                                                                    <option value="17">Pleiku</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>An Khê</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="622" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bắc Mê</option>
                                                                    <option value="2">Bắc Quang</option>
                                                                    <option value="3">Đồng Văn</option>
                                                                    <option value="4">Hà Giang</option>
                                                                    <option value="5">Hoàng Su Phì</option>
                                                                    <option value="6">Mèo Vạc</option>
                                                                    <option value="7">Quản Bạ</option>
                                                                    <option value="8">Quang Bình</option>
                                                                    <option value="9">Vị Xuyên</option>
                                                                    <option value="10">Xín Mần</option>
                                                                    <option value="11">Yên Minh</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bắc Mê</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="623" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bình Lục</option>
                                                                    <option value="2">Duy Tiên</option>
                                                                    <option value="3">Kim Bảng</option>
                                                                    <option value="4">Lý Nhân</option>
                                                                    <option value="5">Phủ Lý</option>
                                                                    <option value="6">Thanh Liêm</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bình Lục</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="624" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Ba Đình</option>
                                                                    <option value="2">Ba Vì</option>
                                                                    <option value="3">Bắc Từ Liêm</option>
                                                                    <option value="4">Cầu Giấy</option>
                                                                    <option value="5">Chương Mỹ</option>
                                                                    <option value="6">Đan Phượng</option>
                                                                    <option value="7">Đông Anh</option>
                                                                    <option value="8">Đống Đa</option>
                                                                    <option value="9">Gia Lâm</option>
                                                                    <option value="10">Hà Đông</option>
                                                                    <option value="11">Hai Bà Trưng</option>
                                                                    <option value="12">Hoài Đức</option>
                                                                    <option value="13">Hoàn Kiếm</option>
                                                                    <option value="14">Hoàng Mai</option>
                                                                    <option value="15">Long Biên</option>
                                                                    <option value="16">Mê Linh</option>
                                                                    <option value="17">Mỹ Đức</option>
                                                                    <option value="18">Nam Từ Liêm</option>
                                                                    <option value="19">Phú Xuyên</option>
                                                                    <option value="20">Phúc Thọ</option>
                                                                    <option value="21">Quốc Oai</option>
                                                                    <option value="22">Sóc Sơn</option>
                                                                    <option value="23">Sơn Tây</option>
                                                                    <option value="24">Tây Hồ</option>
                                                                    <option value="25">Thạch Thất</option>
                                                                    <option value="26">Thanh Oai</option>
                                                                    <option value="27">Thanh Trì</option>
                                                                    <option value="28">Thanh Xuân</option>
                                                                    <option value="29">Thường Tín</option>
                                                                    <option value="30">Ứng Hòa</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Ba Đình</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="625" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Can Lộc</option>
                                                                    <option value="2">Cẩm Xuyên</option>
                                                                    <option value="3">Đức Thọ</option>
                                                                    <option value="4">Hà Tĩnh</option>
                                                                    <option value="5">Hồng Lĩnh</option>
                                                                    <option value="6">Hương Khê</option>
                                                                    <option value="7">Hương Sơn</option>
                                                                    <option value="8">Kỳ Anh</option>
                                                                    <option value="9">Kỳ Anh</option>
                                                                    <option value="10">Lộc Hà</option>
                                                                    <option value="11">Nghi Xuân</option>
                                                                    <option value="12">Thạch Hà</option>
                                                                    <option value="13">Vũ Quang</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Can Lộc</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="626" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bình Giang</option>
                                                                    <option value="2">Cẩm Giàng</option>
                                                                    <option value="3">Chí Linh</option>
                                                                    <option value="4">Gia Lộc</option>
                                                                    <option value="5">Hải Dương</option>
                                                                    <option value="6">Kim Thành</option>
                                                                    <option value="7">Kinh Môn</option>
                                                                    <option value="8">Nam Sách</option>
                                                                    <option value="9">Ninh Giang</option>
                                                                    <option value="10">Thanh Hà</option>
                                                                    <option value="11">Thanh Miện</option>
                                                                    <option value="12">Tứ Kỳ</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bình Giang</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="627" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">An Dương</option>
                                                                    <option value="2">An Lão</option>
                                                                    <option value="3">Bạch Long Vĩ</option>
                                                                    <option value="4">Cát Hải</option>
                                                                    <option value="5">Dương Kinh</option>
                                                                    <option value="6">Đồ Sơn</option>
                                                                    <option value="7">Hải An</option>
                                                                    <option value="8">Hồng Bàng</option>
                                                                    <option value="9">Kiến An</option>
                                                                    <option value="10">Kiến Thụy</option>
                                                                    <option value="11">Lê Chân</option>
                                                                    <option value="12">Ngô Quyền</option>
                                                                    <option value="13">Thủy Nguyên</option>
                                                                    <option value="14">Tiên Lãng</option>
                                                                    <option value="15">Vĩnh Bảo</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>An Dương</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="628" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Châu Thành</option>
                                                                    <option value="2">Châu Thành A</option>
                                                                    <option value="3">Long Mỹ</option>
                                                                    <option value="4">Long Mỹ</option>
                                                                    <option value="5">Ngã Bảy</option>
                                                                    <option value="6">Phụng Hiệp</option>
                                                                    <option value="7">Vị Thanh</option>
                                                                    <option value="8">Vị Thủy</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Châu Thành</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="629" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Cao Phong</option>
                                                                    <option value="2">Đà Bắc</option>
                                                                    <option value="3">Hoà Bình</option>
                                                                    <option value="4">Kim Bôi</option>
                                                                    <option value="5">Lạc Sơn</option>
                                                                    <option value="6">Lạc Thủy</option>
                                                                    <option value="7">Lương Sơn</option>
                                                                    <option value="8">Mai Châu</option>
                                                                    <option value="9">Tân Lạc</option>
                                                                    <option value="10">Yên Thủy</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Cao Phong</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="630" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Ân Thi</option>
                                                                    <option value="2">Hưng Yên</option>
                                                                    <option value="3">Khoái Châu</option>
                                                                    <option value="4">Kim Động</option>
                                                                    <option value="5">Mỹ Hào</option>
                                                                    <option value="6">Phù Cừ</option>
                                                                    <option value="7">Tiên Lữ</option>
                                                                    <option value="8">Văn Giang</option>
                                                                    <option value="9">Văn Lâm</option>
                                                                    <option value="10">Yên Mỹ</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Ân Thi</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="631" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Cam Lâm</option>
                                                                    <option value="2">Cam Ranh</option>
                                                                    <option value="3">Diên Khánh</option>
                                                                    <option value="4">Khánh Sơn</option>
                                                                    <option value="5">Khánh Vĩnh</option>
                                                                    <option value="6">Nha Trang</option>
                                                                    <option value="7">Ninh Hòa</option>
                                                                    <option value="8">Trường Sa</option>
                                                                    <option value="9">Vạn Ninh</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Cam Lâm</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="632" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">An Biên</option>
                                                                    <option value="2">An Minh</option>
                                                                    <option value="3">Châu Thành</option>
                                                                    <option value="4">Giang Thành</option>
                                                                    <option value="5">Giồng Riềng</option>
                                                                    <option value="6">Gò Quao</option>
                                                                    <option value="7">Hà Tiên</option>
                                                                    <option value="8">Hòn Đất</option>
                                                                    <option value="9">Kiên Hải</option>
                                                                    <option value="10">Kiên Lương</option>
                                                                    <option value="11">Phú Quốc</option>
                                                                    <option value="12">Rạch Giá</option>
                                                                    <option value="13">Tân Hiệp</option>
                                                                    <option value="14">U Minh Thượng</option>
                                                                    <option value="15">Vĩnh Thuận</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>An Biên</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="633" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Đắk Glei</option>
                                                                    <option value="2">Đắk Hà</option>
                                                                    <option value="3">Đắk Tô</option>
                                                                    <option value="4">Ia H'Drai</option>
                                                                    <option value="5">Kon Plông</option>
                                                                    <option value="6">Kon Rẫy</option>
                                                                    <option value="7">Kon Tum</option>
                                                                    <option value="8">Ngọc Hồi</option>
                                                                    <option value="9">Sa Thầy</option>
                                                                    <option value="10">Tu Mơ Rông</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Đắk Glei</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="634" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Lai Châu</option>
                                                                    <option value="2">Mường Tè</option>
                                                                    <option value="3">Nậm Nhùn</option>
                                                                    <option value="4">Phong Thổ</option>
                                                                    <option value="5">Sìn Hồ</option>
                                                                    <option value="6">Tam Đường</option>
                                                                    <option value="7">Tân Uyên</option>
                                                                    <option value="8">Than Uyên</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Lai Châu</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="635" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bắc Sơn</option>
                                                                    <option value="2">Bình Gia</option>
                                                                    <option value="3">Cao Lộc</option>
                                                                    <option value="4">Chi Lăng</option>
                                                                    <option value="5">Đình Lập</option>
                                                                    <option value="6">Hữu Lũng</option>
                                                                    <option value="7">Lạng Sơn</option>
                                                                    <option value="8">Lộc Bình</option>
                                                                    <option value="9">Tràng Định</option>
                                                                    <option value="10">Văn Lãng</option>
                                                                    <option value="11">Văn Quan</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bắc Sơn</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="636" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bảo Thắng</option>
                                                                    <option value="2">Bảo Yên</option>
                                                                    <option value="3">Bát Xát</option>
                                                                    <option value="4">Bắc Hà</option>
                                                                    <option value="5">Lào Cai</option>
                                                                    <option value="6">Mường Khương</option>
                                                                    <option value="7">Sa Pa</option>
                                                                    <option value="8">Si Ma Cai</option>
                                                                    <option value="9">Văn Bàn</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bảo Thắng</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="637" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bảo Lâm</option>
                                                                    <option value="2">Bảo Lộc</option>
                                                                    <option value="3">Cát Tiên</option>
                                                                    <option value="4">Di Linh</option>
                                                                    <option value="5">Đà Lạt</option>
                                                                    <option value="6">Đạ Huoai</option>
                                                                    <option value="7">Đạ Tẻh</option>
                                                                    <option value="8">Đam Rông</option>
                                                                    <option value="9">Đơn Dương</option>
                                                                    <option value="10">Đức Trọng</option>
                                                                    <option value="11">Lạc Dương</option>
                                                                    <option value="12">Lâm Hà</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bảo Lâm</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="638" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bến Lức</option>
                                                                    <option value="2">Cần Đước</option>
                                                                    <option value="3">Cần Giuộc</option>
                                                                    <option value="4">Châu Thành</option>
                                                                    <option value="5">Đức Hòa</option>
                                                                    <option value="6">Đức Huệ</option>
                                                                    <option value="7">Kiến Tường</option>
                                                                    <option value="8">Mộc Hóa</option>
                                                                    <option value="9">Tân An</option>
                                                                    <option value="10">Tân Hưng</option>
                                                                    <option value="11">Tân Thạnh</option>
                                                                    <option value="12">Tân Trụ</option>
                                                                    <option value="13">Thạnh Hóa</option>
                                                                    <option value="14">Thủ Thừa</option>
                                                                    <option value="15">Vĩnh Hưng</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bến Lức</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="639" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Giao Thủy</option>
                                                                    <option value="2">Hải Hậu</option>
                                                                    <option value="3">Mỹ Lộc</option>
                                                                    <option value="4">Nam Định</option>
                                                                    <option value="5">Nam Trực</option>
                                                                    <option value="6">Nghĩa Hưng</option>
                                                                    <option value="7">Trực Ninh</option>
                                                                    <option value="8">Vụ Bản</option>
                                                                    <option value="9">Xuân Trường</option>
                                                                    <option value="10">Ý Yên</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Giao Thủy</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="640" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Anh Sơn</option>
                                                                    <option value="2">Con Cuông</option>
                                                                    <option value="3">Cửa Lò</option>
                                                                    <option value="4">Diễn Châu</option>
                                                                    <option value="5">Đô Lương</option>
                                                                    <option value="6">Hoàng Mai</option>
                                                                    <option value="7">Hưng Nguyên</option>
                                                                    <option value="8">Kỳ Sơn</option>
                                                                    <option value="9">Nam Đàn</option>
                                                                    <option value="10">Nghi Lộc</option>
                                                                    <option value="11">Nghĩa Đàn</option>
                                                                    <option value="12">Quế Phong</option>
                                                                    <option value="13">Quỳ Châu</option>
                                                                    <option value="14">Quỳ Hợp</option>
                                                                    <option value="15">Quỳnh Lưu</option>
                                                                    <option value="16">Tân Kỳ</option>
                                                                    <option value="17">Thái Hòa</option>
                                                                    <option value="18">Thanh Chương</option>
                                                                    <option value="19">Tương Dương</option>
                                                                    <option value="20">Vinh</option>
                                                                    <option value="21">Yên Thành</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Anh Sơn</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="641" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Gia Viễn</option>
                                                                    <option value="2">Hoa Lư</option>
                                                                    <option value="3">Kim Sơn</option>
                                                                    <option value="4">Nho Quan</option>
                                                                    <option value="5">Ninh Bình</option>
                                                                    <option value="6">Tam Điệp</option>
                                                                    <option value="7">Yên Khánh</option>
                                                                    <option value="8">Yên Mô</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Gia Viễn</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="642" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bác Ái</option>
                                                                    <option value="2">Ninh Hải</option>
                                                                    <option value="3">Ninh Phước</option>
                                                                    <option value="4">Ninh Sơn</option>
                                                                    <option value="5">Phan Rang-Tháp Chàm</option>
                                                                    <option value="6">Thuận Bắc</option>
                                                                    <option value="7">Thuận Nam</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bác Ái</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="643" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Cẩm Khê</option>
                                                                    <option value="2">Đoan Hùng</option>
                                                                    <option value="3">Hạ Hòa</option>
                                                                    <option value="4">Lâm Thao</option>
                                                                    <option value="5">Phú Thọ</option>
                                                                    <option value="6">Phù Ninh</option>
                                                                    <option value="7">Tam Nông</option>
                                                                    <option value="8">Tân Sơn</option>
                                                                    <option value="9">Thanh Ba</option>
                                                                    <option value="10">Thanh Sơn</option>
                                                                    <option value="11">Thanh Thủy</option>
                                                                    <option value="12">Việt Trì</option>
                                                                    <option value="13">Yên Lập</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Cẩm Khê</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="644" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Đông Hòa</option>
                                                                    <option value="2">Đồng Xuân</option>
                                                                    <option value="3">Phú Hòa</option>
                                                                    <option value="4">Sông Cầu</option>
                                                                    <option value="5">Sông Hinh</option>
                                                                    <option value="6">Sơn Hòa</option>
                                                                    <option value="7">Tây Hòa</option>
                                                                    <option value="8">Tuy An</option>
                                                                    <option value="9">Tuy Hòa</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Đông Hòa</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="645" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Ba Đồn</option>
                                                                    <option value="2">Bố Trạch</option>
                                                                    <option value="3">Đồng Hới</option>
                                                                    <option value="4">Lệ Thủy</option>
                                                                    <option value="5">Minh Hóa</option>
                                                                    <option value="6">Quảng Ninh</option>
                                                                    <option value="7">Quảng Trạch</option>
                                                                    <option value="8">Tuyên Hóa</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Ba Đồn</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="646" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bắc Trà My</option>
                                                                    <option value="2">Duy Xuyên</option>
                                                                    <option value="3">Đại Lộc</option>
                                                                    <option value="4">Điện Bàn</option>
                                                                    <option value="5">Đông Giang</option>
                                                                    <option value="6">Hiệp Đức</option>
                                                                    <option value="7">Hội An</option>
                                                                    <option value="8">Nam Giang</option>
                                                                    <option value="9">Nam Trà My</option>
                                                                    <option value="10">Nông Sơn</option>
                                                                    <option value="11">Núi Thành</option>
                                                                    <option value="12">Phú Ninh</option>
                                                                    <option value="13">Phước Sơn</option>
                                                                    <option value="14">Quế Sơn</option>
                                                                    <option value="15">Tam Kỳ</option>
                                                                    <option value="16">Tây Giang</option>
                                                                    <option value="17">Thăng Bình</option>
                                                                    <option value="18">Tiên Phước</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bắc Trà My</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="647" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Ba Tơ</option>
                                                                    <option value="2">Bình Sơn</option>
                                                                    <option value="3">Đức Phổ</option>
                                                                    <option value="4">Lý Sơn</option>
                                                                    <option value="5">Minh Long</option>
                                                                    <option value="6">Mộ Đức</option>
                                                                    <option value="7">Nghĩa Hành</option>
                                                                    <option value="8">Quảng Ngãi</option>
                                                                    <option value="9">Sơn Hà</option>
                                                                    <option value="10">Sơn Tây</option>
                                                                    <option value="11">Sơn Tịnh</option>
                                                                    <option value="12">Trà Bồng</option>
                                                                    <option value="13">Tư Nghĩa</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Ba Tơ</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="648" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Ba Chẽ</option>
                                                                    <option value="2">Bình Liêu</option>
                                                                    <option value="3">Cẩm Phả</option>
                                                                    <option value="4">Cô Tô</option>
                                                                    <option value="5">Đầm Hà</option>
                                                                    <option value="6">Đông Triều</option>
                                                                    <option value="7">Hạ Long</option>
                                                                    <option value="8">Hải Hà</option>
                                                                    <option value="9">Móng Cái</option>
                                                                    <option value="10">Quảng Yên</option>
                                                                    <option value="11">Tiên Yên</option>
                                                                    <option value="12">Uông Bí</option>
                                                                    <option value="13">Vân Đồn</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Ba Chẽ</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="649" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Cam Lộ</option>
                                                                    <option value="2">Cồn Cỏ</option>
                                                                    <option value="3">Đa Krông</option>
                                                                    <option value="4">Đông Hà</option>
                                                                    <option value="5">Gio Linh</option>
                                                                    <option value="6">Hải Lăng</option>
                                                                    <option value="7">Hướng Hóa</option>
                                                                    <option value="8">Quảng Trị</option>
                                                                    <option value="9">Triệu Phong</option>
                                                                    <option value="10">Vĩnh Linh</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Cam Lộ</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="650" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Châu Thành</option>
                                                                    <option value="2">Cù Lao Dung</option>
                                                                    <option value="3">Kế Sách</option>
                                                                    <option value="4">Long Phú</option>
                                                                    <option value="5">Mỹ Tú</option>
                                                                    <option value="6">Mỹ Xuyên</option>
                                                                    <option value="7">Ngã Năm</option>
                                                                    <option value="8">Sóc Trăng</option>
                                                                    <option value="9">Thạnh Trị</option>
                                                                    <option value="10">Trần Đề</option>
                                                                    <option value="11">Vĩnh Châu</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Châu Thành</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="651" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bắc Yên</option>
                                                                    <option value="2">Mai Sơn</option>
                                                                    <option value="3">Mộc Châu</option>
                                                                    <option value="4">Mường La</option>
                                                                    <option value="5">Phù Yên</option>
                                                                    <option value="6">Quỳnh Nhai</option>
                                                                    <option value="7">Sông Mã</option>
                                                                    <option value="8">Sốp Cộp</option>
                                                                    <option value="9">Sơn La</option>
                                                                    <option value="10">Thuận Châu</option>
                                                                    <option value="11">Vân Hồ</option>
                                                                    <option value="12">Yên Châu</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bắc Yên</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="652" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bến Cầu</option>
                                                                    <option value="2">Châu Thành</option>
                                                                    <option value="3">Dương Minh Châu</option>
                                                                    <option value="4">Gò Dầu</option>
                                                                    <option value="5">Hòa Thành</option>
                                                                    <option value="6">Tân Biên</option>
                                                                    <option value="7">Tân Châu</option>
                                                                    <option value="8">Tây Ninh</option>
                                                                    <option value="9">Trảng Bàng</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bến Cầu</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="653" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Đông Hưng</option>
                                                                    <option value="2">Hưng Hà</option>
                                                                    <option value="3">Kiến Xương</option>
                                                                    <option value="4">Quỳnh Phụ</option>
                                                                    <option value="5">Thái Bình</option>
                                                                    <option value="6">Thái Thụy</option>
                                                                    <option value="7">Tiền Hải</option>
                                                                    <option value="8">Vũ Thư</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Đông Hưng</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="654" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Đại Từ</option>
                                                                    <option value="2">Định Hóa</option>
                                                                    <option value="3">Đồng Hỷ</option>
                                                                    <option value="4">Phổ Yên</option>
                                                                    <option value="5">Phú Bình</option>
                                                                    <option value="6">Phú Lương</option>
                                                                    <option value="7">Sông Công</option>
                                                                    <option value="8">Thái Nguyên</option>
                                                                    <option value="9">Võ Nhai</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Đại Từ</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="655" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bá Thước</option>
                                                                    <option value="2">Bỉm Sơn</option>
                                                                    <option value="3">Cẩm Thủy</option>
                                                                    <option value="4">Đông Sơn</option>
                                                                    <option value="5">Hà Trung</option>
                                                                    <option value="6">Hậu Lộc</option>
                                                                    <option value="7">Hoằng Hóa</option>
                                                                    <option value="8">Lang Chánh</option>
                                                                    <option value="9">Mường Lát</option>
                                                                    <option value="10">Nga Sơn</option>
                                                                    <option value="11">Nghi Sơn</option>
                                                                    <option value="12">Ngọc Lặc</option>
                                                                    <option value="13">Như Thanh</option>
                                                                    <option value="14">Như Xuân</option>
                                                                    <option value="15">Nông Cống</option>
                                                                    <option value="16">Quan Hóa</option>
                                                                    <option value="17">Quan Sơn</option>
                                                                    <option value="18">Quảng Xương</option>
                                                                    <option value="19">Sầm Sơn</option>
                                                                    <option value="20">Thạch Thành</option>
                                                                    <option value="21">Thanh Hóa</option>
                                                                    <option value="22">Thiệu Hóa</option>
                                                                    <option value="23">Thọ Xuân</option>
                                                                    <option value="24">Thường Xuân</option>
                                                                    <option value="25">Triệu Sơn</option>
                                                                    <option value="26">Vĩnh Lộc</option>
                                                                    <option value="27">Yên Định</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bá Thước</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="656" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">A Lưới</option>
                                                                    <option value="2">Huế</option>
                                                                    <option value="3">Hương Thủy</option>
                                                                    <option value="4">Hương Trà</option>
                                                                    <option value="5">Nam Đông</option>
                                                                    <option value="6">Phong Điền</option>
                                                                    <option value="7">Phú Lộc</option>
                                                                    <option value="8">Phú Vang</option>
                                                                    <option value="9">Quảng Điền</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>A Lưới</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="657" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Cai Lậy</option>
                                                                    <option value="2">Cai Lậy</option>
                                                                    <option value="3">Cái Bè</option>
                                                                    <option value="4">Châu Thành</option>
                                                                    <option value="5">Chợ Gạo</option>
                                                                    <option value="6">Gò Công</option>
                                                                    <option value="7">Gò Công Đông</option>
                                                                    <option value="8">Gò Công Tây</option>
                                                                    <option value="9">Mỹ Tho</option>
                                                                    <option value="10">Tân Phú Đông</option>
                                                                    <option value="11">Tân Phước</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Cai Lậy</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="658" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bình Chánh</option>
                                                                    <option value="2">Bình Tân</option>
                                                                    <option value="3">Bình Thạnh</option>
                                                                    <option value="4">Cần Giờ</option>
                                                                    <option value="5">Củ Chi</option>
                                                                    <option value="6">Gò Vấp</option>
                                                                    <option value="7">Hóc Môn</option>
                                                                    <option value="8">Nhà Bè</option>
                                                                    <option value="9">Phú Nhuận</option>
                                                                    <option value="10">Quận 1</option>
                                                                    <option value="11">Quận 2</option>
                                                                    <option value="12">Quận 3</option>
                                                                    <option value="13">Quận 4</option>
                                                                    <option value="14">Quận 5</option>
                                                                    <option value="15">Quận 6</option>
                                                                    <option value="16">Quận 7</option>
                                                                    <option value="17">Quận 8</option>
                                                                    <option value="18">Quận 9</option>
                                                                    <option value="19">Quận 10</option>
                                                                    <option value="20">Quận 11</option>
                                                                    <option value="21">Quận 12</option>
                                                                    <option value="22">Tân Bình</option>
                                                                    <option value="23">Tân Phú</option>
                                                                    <option value="24">Thủ Đức</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bình Chánh</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="659" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Càng Long</option>
                                                                    <option value="2">Cầu Kè</option>
                                                                    <option value="3">Cầu Ngang</option>
                                                                    <option value="4">Châu Thành</option>
                                                                    <option value="5">Duyên Hải</option>
                                                                    <option value="6">Duyên Hải</option>
                                                                    <option value="7">Tiểu Cần</option>
                                                                    <option value="8">Trà Cú</option>
                                                                    <option value="9">Trà Vinh</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Càng Long</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="660" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Chiêm Hóa</option>
                                                                    <option value="2">Hàm Yên</option>
                                                                    <option value="3">Lâm Bình</option>
                                                                    <option value="4">Na Hang</option>
                                                                    <option value="5">Sơn Dương</option>
                                                                    <option value="6">Tuyên Quang</option>
                                                                    <option value="7">Yên Sơn</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Chiêm Hóa</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="661" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bình Minh</option>
                                                                    <option value="2">Bình Tân</option>
                                                                    <option value="3">Long Hồ</option>
                                                                    <option value="4">Mang Thít</option>
                                                                    <option value="5">Tam Bình</option>
                                                                    <option value="6">Trà Ôn</option>
                                                                    <option value="7">Vĩnh Long</option>
                                                                    <option value="8">Vũng Liêm</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bình Minh</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="662" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Bình Xuyên</option>
                                                                    <option value="2">Lập Thạch</option>
                                                                    <option value="3">Phúc Yên</option>
                                                                    <option value="4">Sông Lô</option>
                                                                    <option value="5">Tam Dương</option>
                                                                    <option value="6">Tam Đảo</option>
                                                                    <option value="7">Vĩnh Tường</option>
                                                                    <option value="8">Vĩnh Yên</option>
                                                                    <option value="9">Yên Lạc</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Bình Xuyên</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <div id="663" style="display: none"
                                                                class="uk-width-1-1 uk-form-custom"
                                                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                                                <select name="huyen_nhan[]">
                                                                    <option value="1">Lục Yên</option>
                                                                    <option value="2">Mù Cang Chải</option>
                                                                    <option value="3">Nghĩa Lộ</option>
                                                                    <option value="4">Trạm Tấu</option>
                                                                    <option value="5">Trấn Yên</option>
                                                                    <option value="6">Văn Chấn</option>
                                                                    <option value="7">Văn Yên</option>
                                                                    <option value="8">Yên Bái</option>
                                                                    <option value="9">Yên Bình</option>
                                                                </select>
                                                                <button
                                                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                                    type="button" tabindex="-1">
                                                                    <span>Lục Yên</span>
                                                                    <span uk-icon="icon: menu" class="uk-icon"><svg
                                                                            width="20" height="20" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-svg="menu">
                                                                            <rect x="2" y="4" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="9" width="16" height="1">
                                                                            </rect>
                                                                            <rect x="2" y="14" width="16" height="1">
                                                                            </rect>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <script type="text/javascript">
                                                            function resetHuyen1(obj) {
                                                                let options = obj.value;
                                                                for (let i = 1; i <= 63; i++)
                                                                    document.getElementById(600 + i).style.display = "none";
                                                                document.getElementById('tmp2').style.display = "none";
                                                                document.getElementById(600 + parseInt(obj.value)).style.display = "block";
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <script type="text/javascript">
                                                    function resetHuyen1(obj) {
                                                        let options = obj.value;
                                                        for (let i = 1; i <= 63; i++)
                                                            document.getElementById(600 + i).style.display = "none";
                                                        document.getElementById('tmp2').style.display = "none";
                                                        document.getElementById(600 + parseInt(obj.value)).style.display = "block";
                                                    }
                                                </script> -->
                                            <div class="uk-width-1-5 uk-grid-margin">
                                                <label class="uk-form-label tracuu__card1__label"
                                                    for="form-stacked-text">GIá cả</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-width-1-1 uk-form-custom"
                                                        uk-form-custom="target: &gt; * &gt; span:first-child">
                                                        <select name="loaidichvu">
                                                            <option>Chọnn mức giá</option>
                                                            <option>Dưới 1 triệu</option>
                                                            <option>1 triệu - 2 triệu</option>
                                                            <option>2 triệu - 3 triệu</option>
                                                            <option>3 triệu - 5 triệu</option>
                                                            <option>5 triệu - 10 triệu</option>
                                                            <option>10 triệu - 50 triệu</option>
                                                            <option> Trên 50 triệu</option>
                                                        </select>
                                                        <button
                                                            class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                            type="button" tabindex="-1">
                                                            <span></span>
                                                            <span uk-icon="icon: menu" class="uk-icon"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-5 uk-grid-margin">
                                                <label class="uk-form-label tracuu__card1__label"
                                                    for="form-stacked-text">Diện tích</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-width-1-1 uk-form-custom"
                                                        uk-form-custom="target: &gt; * &gt; span:first-child">
                                                        <select name="loaidichvu">
                                                            <option>Chọn diện tích (m2)</option>
                                                            <option>Dưới 20 m2</option>
                                                            <option>20 m2 - 30 m2</option>
                                                            <option>30 m2 - 50 m2</option>
                                                            <option>50 m2 - 100 m2</option>
                                                            <option>Trên 100 m2</option>>
                                                        </select>
                                                        <button
                                                            class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                                            type="button" tabindex="-1">
                                                            <span></span>
                                                            <span uk-icon="icon: menu" class="uk-icon"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-1 uk-grid-margin">
                                                <label class="uk-form-label tracuu__card1__label"
                                                    for="form-stacked-text">ĐIỀU KIỆN CƠ SỞ VẬT CHẤT</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-width-1-1 uk-form-custom"
                                                        uk-form-custom="target: &gt; * &gt; span:first-child">

                                                        <div class="uk-form-label tracuu__card1__label uk-margin-small">
                                                            <label for="" style="float: left; width: 80px;">Phòng
                                                                tắm:</label>
                                                            <label><input class="uk-radio" type="radio" name="radio1"
                                                                    style="width: 10px;height: 10px; margin-left: 20px;">
                                                                khép kín</label>
                                                            <label><input class="uk-radio" type="radio" name="radio1"
                                                                    style="width: 10px;height: 10px; margin-left: 20px;">
                                                                chung</label>
                                                            <br>
                                                            <label><input class="uk-radio" type="radio" name="radio2"
                                                                    style="margin-left: 100px;width: 10px;height: 10px;">
                                                                có nóng lạnh</label>
                                                            <label><input class="uk-radio" type="radio" name="radio2"
                                                                    style="width: 10px;height: 10px; margin-left: 20px;">
                                                                không có nống lạnh</label>
                                                        </div>
                                                        <div class="uk-form-label tracuu__card1__label uk-margin-small">
                                                            <label for="" style="float: left; width: 80px;">Phòng
                                                                bếp:</label>
                                                            <label><input class="uk-radio" type="radio" name="radio"
                                                                    style="width: 10px;height: 10px; margin-left: 20px;">
                                                                có khu bếp riêng</label>
                                                            <label><input class="uk-radio" type="radio" name="radio"
                                                                    style="width: 10px;height: 10px; margin-left: 20px;">
                                                                có khu bếp chung</label>
                                                            <label><input class="uk-radio" type="radio" name="radio"
                                                                    style="width: 10px;height: 10px; margin-left: 20px;">
                                                                không được nấu ăn</label>
                                                        </div>
                                                        <div class="uk-form-label tracuu__card1__label uk-margin-small">
                                                            <label for="" style="float: left; width: 80px;">Điều
                                                                hòa:</label>
                                                            <label><input class="uk-radio" type="radio" name="radio"
                                                                    style="width: 10px;height: 10px; margin-left: 20px;">
                                                                có</label>
                                                            <label><input class="uk-radio" type="radio" name="radio"
                                                                    style="width: 10px;height: 10px; margin-left: 20px;">
                                                                không</label>
                                                        </div>
                                                        <div class="uk-form-label tracuu__card1__label uk-margin-small">
                                                            <label for="" style="float: left; width: 80px;">Ban
                                                                công:</label>
                                                            <label><input class="uk-radio" type="radio" name="radio"
                                                                    style="width: 10px;height: 10px; margin-left: 20px;">
                                                                có</label>
                                                            <label><input class="uk-radio" type="radio" name="radio"
                                                                    style="width: 10px;height: 10px; margin-left: 20px;">
                                                                không</label>
                                                        </div>
                                                        <div class="uk-form-label tracuu__card1__label uk-margin-small">
                                                            <label for="" style="float: left; width: 80px;">Chung
                                                                chủ:</label>
                                                            <label><input class="uk-radio" type="radio" name="radio"
                                                                    style="width: 10px;height: 10px; margin-left: 20px;">
                                                                có</label>
                                                            <label><input class="uk-radio" type="radio" name="radio"
                                                                    style="width: 10px;height: 10px; margin-left: 20px;">
                                                                không</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-1 uk-grid-margin ">
                                                <div class="uk-form-controls ">
                                                    <div class="uk-width-1-1 uk-form-custom "
                                                        uk-form-custom="target: &gt; * &gt; span:first-child ">
                                                        <button type="submit "
                                                            class="uk-width-1-1 uk-button uk-button-default home__btn ">Tra
                                                            cứu ngay</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Phần chữ giới thiệu các bài báo. Không quan trọng và cũng chẳng liên quan phần khác => Để đẹp thôi -->
    <div class="uk-section " style="padding: 5px 0 10px 0; ">
        <div class="uk-container ">
            <div class="home__title uk-text-center uk-text-uppercase ">
                <span>CÁC BÀI BÁO CHO THUÊ</span>
            </div>
            <div class="uk-margin home__block__lienhe__desc uk-text-center "
                style="color: #b8b6b6; padding-top: 10px; ">
                Tổng hợp các bài đăng cho thuê phòng
            </div>
        </div>
    </div>
    <div class="uk-section ">
        <div class="uk-container ">
            <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid " uk-grid=" "> 
            @foreach($data as $row) 
                    <div>
                        <div class="uk-card uk-card-default home__block__tintuc__card uk-card-hover ">
                            <div class="uk-cover-container "> <a
                                    href="http://ql.xephinh.xyz/dich-vu/gia-cuoc-van-chuyen-nhanh "> <img
                                        src="{{ asset('anhphongtro/'.$row->anh1) }}" class="uk-cover " uk-cover=" "> <Canvas width="600 "
                                        height="400 "></Canvas> </a> </div>
                            <div class="uk-card-body uk-padding-small ">
                                <div class="home__block__tintuc__card__dm uk-text-large uk-text-uppercase "> {{$row->diachi}},
                                    {{$row->quan}}, {{$row->thanhpho}} </div>
                                <div class="home__block__tintuc__card__title " stype="color: #727171 "> Giá Thuê:
                                    {{$row->giaca}} Đ
                                    
                                </div>
                                <div class="home__block__tintuc__card__time "> <span class="uk-icon "
                                        uk-icon="icon: clock; ratio:0.7 "></span> 2020-07-18 20:51:07 </div>
                                <div class="uk-text-right "> <a href=" " class="home__block__tintuc__card__readMore uk-icon "
                                        uk-icon="icon: chevron-right ">Xem thêm</a> </div>
                            </div>
                        </div>
                    </div> 
                @endforeach </div>
        </div>
    </div> 
@stop
