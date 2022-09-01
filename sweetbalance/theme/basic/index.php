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

<h2 class="sound_only">최신글</h2>

<!-- 앱솔 천지 메인 -->
<section id="main" class="section overflow-hidden position-relative">
<?php echo latest('main','main',1, 0);?>
</section>

<?php include_once(G5_THEME_PATH.'/main/submain.php'); ?>

<!-- 드레싱 배경이미지 SVG처리하기 -->
<section id="dressing" class="py-5">
    <?php echo latest('dressing','dressing',1,0);?>
</section>
<!-- 맛보기구독 설명 & 폼태그 -->
<section id="about" class="" >
<?php echo latest('about','about',1,0);?>
</section>

<!-- 이벤트 -->
<section id="event" class="container-md">
<?php echo latest('event','event',1,100);?>
</section>

<!-- 정기구독 리뷰 -->
<section id="review" class="pt-md-5" >
<?php echo latest('review','review',1,100);?>
</section>

<!-- 매장찾기 -->
<section id="store" class="">
<?php echo latest('store','store',1,100);?>


</section>

<?php
include_once(G5_THEME_PATH.'/tail.php');




