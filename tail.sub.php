<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<?php if ($is_admin == 'super') {  ?><!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime()-$begin_time; ?><br></div> --><?php }  ?>

<?php run_event('tail_sub'); ?>




    <script src="<?php echo G5_THEME_URL; ?>/js/slick.min.js"></script>
    <script src="<?php echo G5_THEME_URL; ?>/js/aos.js"></script>
    <script src="<?php echo G5_THEME_URL; ?>/js/main.js"></script>

    <script>
    AOS.init();
    </script>

</body>
</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다.
