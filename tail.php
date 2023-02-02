<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

<?php
if(!defined('_INDEX_')) { // index가 아닐 떄...
    include G5_THEME_PATH.'/tail.subpage.php'; // 서버페이지 푸터...
}
?>




        <!-- { footer -->
            <footer class="footer">
            <div class="footer_top">
                <div class="inner">
                    <a href="" class="footer_logo"><img src="<?= G5_THEME_URL ?>/img/logo.png" alt=""></a>
                    <ul>
                        <li><a href="">대표번호 : <?= $as_tel?></a></li>
                        <li><a href="">창업문의 : <?= $as_qa_tel?></a></li>
                    </ul>
                    <div class="form_box">
                        <form action="" class="form">
                            <select id="f_link">
                                <option value="">FAMILY SITE</option>
                                <option value="http://naver.com">본아이에프</option>
                                <option value="http://daum.net">본죽</option>
                                <option value="http://google.com">본죽&비빔밥</option>
                                <option value="http://google.com">본도시락</option>
                                <option value="http://google.com">본설렁탕</option>
                                <option value="http://google.com">본우리반상</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="inner">
                    <ul class="footer_list01">
                        <li><a href="">회사소개</a></li>
                        <li><a href="">이용약관</a></li>
                        <li><a href="">개인정보처리방침</a></li>
                        <li><a href="">이메일</a></li>
                        <li><a href="">무단수집거부</a></li>
                        <li><a href="">법적고지</a></li>
                        <li><a href="">협력업체 모집</a></li>
                        <li><a href="">고객센터</a></li>
                    </ul>
                    <ul class="footer_list02">
                        <li><?= $as_big_company?></li>
                        <li><?= $as_address?></li>
                        <li>대표자명: <?= $as_name?></li>
                        <li>사업자등록번호 <?= $as_num?></li>
                        <li>통신판매신고번호:2019-서울영등포-1230호</li>
                    </ul>
                    <div class="copy">
                        COPYRIGHT 2018 BONIF CO. LTD. ALL RIGHTS RESERVED.
                    </div>
                </div>
            </div>

        </footer>
        <!-- footer } -->

        <div class="call mz">
            <a href="">창업문의 <?= $as_qa_tel?></a>
        </div>

        <div class="to_top">
            <i class="xi-arrow-up"></i>
        </div>


        <button class="mopen">
            <i class="xi-bars"></i>
        </button>

    </div>



<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");