<!-- <?
        if($board['bo_table'] == 'gallery') {
            $cate_num = 3;
            $page_num = 1;
            $cate_title = '지속가능경영';
            $page_title = '준법경영';
        } else if($board['bo_table'] == 'qa') {
            $cate_num = 4;
            $page_num = 1;
            $cate_title = '인재채용';
            $page_title = '인재상';
        } else if($board['bo_table'] == 'notice') {
            $cate_num = 5;
            $page_num = 1;
            $cate_title = '서비스센터';
            $page_title = '공지사항';
        } 
?> -->

 <!-- { sub01 -->
    <div id="subpage">
        <section class="sub0<?= $cate_num ?>_banner">
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
 