<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<!-- { main -->
    <main>
            <section class="main_visual">
                <div class="main_slide">
                    <div class="main_itm main_itm01">
                        <figure>
                            <div class="inner on">
                                <h2 class="mz">정성이 담긴 본죽</h2>
                                <p class="mz"><b>본죽</b>으로 <b>따뜻한 마음</b>을 전하세요</p>
                            </div>
                        </figure>
                    </div>
                    <div class="main_itm main_itm02">
                        <figure>
                            <div class="inner">
                                <h2 class="mz">나만의 맞춤죽</h2>
                                <p class="mz"><b>본죽</b>의 <b>죽 전문가</b>에게 지금 문의하세요!</p>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="arrows">
                    <i class="xi-angle-left-thin"></i>
                    <i class="xi-angle-right-thin"></i>
                </div>
                <ul class="menu_bar">
                    <li>
                        <a href="">
                            <strong>
                                <i class="bi bi-basket3"></i>주문하기
                            </strong>
                            <span>간편한 결제와 신속한 배달</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <strong><i class="bi bi-gift"></i>선물하기
                            </strong>
                            <span>본죽으로 전하는 따뜻한 마음</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <strong><i class="bi bi-truck"></i>단체주문
                            </strong>
                            <span>1644-6288 (100개 이상 주문 시)</span>
                        </a>
                    </li>
                </ul>
            </section>

            <section class="main_brand sec">
                <div class="inner">
                    <div class="text">
                        <h2 class="mz">독보적 1위 본죽</h2>
                        <p class="mz">본죽과 함께 새로운 푸드 라이프스타일을 시작하세요.</p>
                    </div>
                    <div class="main_brand_con">
                        <figure>
                            <img src="<?= G5_THEME_URL ?>/img/main_brand01.jpg" alt="">
                        </figure>
                        <div class="main_brand_con_tit">
                            <strong class="mz">브랜드 소개</strong>
                            <span>행복과 건강은 기본에서 시작하기에 ‘본’(本)을 지키고 키워가는 죽을 만듭니다.
                                몸을 채우는 건강한 든든함. 마음을 데우는 따뜻한 온기.
                                정성을 다하는 삶, 더 나은 하루를 만듭니다.</span>
                            <div class="more">
                                <a href="">자세히 보기<i class="bi bi-plus-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="main_menu">
                <div class="inner">
                    <div class="text_left">
                        <strong class="mz">메뉴 소개</strong>
                        <span>정성을 다하는 삶, 더 나은 하루를 만듭니다.
                            정성과 프리미엄이 담긴 본죽의 메뉴를 만나보세요.</span>
                        <p>- 온라인 주문을 통해서도 주문이 가능합니다.</p>
                        <div class="more">
                            <a href="">자세히 보기<i class="bi bi-plus-lg"></i></a>
                        </div>
                    </div>
                    <div class="img_right">
                        <figure class="img01" data-aos="fade-left">
                            <img src="<?= G5_THEME_URL ?>/img/main_banner01.png" alt="">
                        </figure>
                        <figure class="img02" data-aos="fade-left" data-aos-delay="300">
                            <img src="<?= G5_THEME_URL ?>/img/main_banner02.png" alt="">
                        </figure>
                    </div>
                </div>
            </section>

            <section class="main_store sec">
                <div class="inner">
                    <div class="text">
                        <h2 class="mz">속 편한 행복 본죽 매장 찾기</h2>
                        <p class="mz">매장, 포장 &amp; 배달 등 다양한 경로로 본죽을 만나보세요.</p>
                    </div>
                    <div class="main_store_con">
                        <div class="main_store_con_tit">
                            <strong class="mz">매장 찾기</strong>
                            <span>본죽은 전국 곳곳에서 만날 수 있습니다. 편안함이 느껴지는 공간, 고객님과 가장 가까운 본죽 매장을 찾아보세요.</span>
                            <div class="more">
                                <a href="">자세히 보기<i class="bi bi-plus-lg"></i></a>
                            </div>
                            <div class="i_store"><i class="bi bi-geo-alt-fill"></i></div>
                        </div>

                        <figure>
                            <img src="<?= G5_THEME_URL ?>/img/main_store01.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </section>

            <section class="main_content">
                <div class="main_conslide">
                    <figure class="main_con_itm01"></figure>
                    <figure class="main_con_itm02"></figure>
                    <figure class="main_con_itm03"></figure>
                </div>
                <ul class="con_dots">
                    <li class="con_dot01">
                        <a href="">
                            <i class="bi bi-truck"></i>
                            <strong>온라인 단체 주문</strong>
                            <span>더욱 간편하게 본죽을 즐기는 방법</span>
                        </a>
                    </li>
                    <li class="con_dot01">
                        <a href="">
                            <i class="bi bi-clipboard-data"></i>
                            <strong>창업 상담 신청</strong>
                            <span>BON 행복창업연구소를 통한 손쉬운 창업 상담</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bi bi-shop"></i>
                            <strong>창업 성공 스토리</strong>
                            <span>새로운 성공 스토리의 주인공이 되어주세요!</span>
                        </a>
                    </li>
                </ul>
            </section>
        </main>
        <!--  main } -->









<?php
include_once(G5_THEME_PATH.'/tail.php');