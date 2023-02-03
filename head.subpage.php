<?
        if($board['bo_table'] == 'gallery') {
            $cate_num = 4;
            $page_num = 4;
            $cate_title = '본죽 이벤트';
            $page_title = '이벤트';
            $page_slogan = '본죽의 이벤트를 참여해보세요.';
        } 
?>

 <!-- { sub01 -->
    <div id="subpage">
        <section class="sub_banner">
            <div class="sub_banner" style="background: url(<?= G5_THEME_URL ?>/img/sub_title_0<?= $cate_num ?>.jpg)no-repeat center center/cover;
            background-repeat: no-repeat;">
                <div class="inner">
                    <article>
                        <h2 class="mz"><?= $cate_title ?></h2>
                        <p class="mz"><?= $page_slogan ?></p>
                        <h3><a href=""><?= $page_title ?></a></h3>
                    </article>
                </div>

            </section>
            <section class="sub0<?= $cate_num ?>_container">
                <div class="inner">
                    <div class="content sec">
 