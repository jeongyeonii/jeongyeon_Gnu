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

    </div>

</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft"  class='w-auto'>

    <div id="ft_wr" class='w-auto'>
        <!-- <div id="ft_link" class="ft_cnt">
            <a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a>
            <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
            <a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a>
            <a href="<?php echo get_device_change_url(); ?>">모바일버전</a>
        </div> -->
        <div id="ft_company" class="ft_cnt">
        	<h2><a href="#"><img src="/sweetbalance/img/logo.png" alt=""></a></h2>
	        <p class="ft_info">
                주식회사 스윗밸런스<br>
				주소｜경기도 성남시 중원구 둔촌대로388번길 20(상대원동)<br>
				대표자명｜이운성 장지만<br>
				통신판매업 신고번호｜2021 - 성남중원 - 0559 <br>
				사업자등록번호｜397-85-00686<br>
				채팅 sweetbalance.channel.io<br>
                <p class="ft_sns d-flex justify-content-around align-items-center">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-facebook"></i>
                </p>
			</p>
	    </div>
	</div>      
        <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->
        <div id="ft_copy"  class='w-auto'>Copyright &copy; <b>JEONGYEON</b> All rights reserved.</div>
    
    
    <!-- <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button> -->
    <!-- <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script> -->
        <!-- 퀵메뉴 -->
        <!-- <div class="quick_plus"><a href="#"><img src="" alt=""></a></div>
        <div class="quick_1"><a href="#"><img src="/jeongyeon/img/logo3.svg" alt=""></a></div>
        <div class="quick_2" id="MOVE_TOP_BTN"><a href="#"><i class="fa-solid fa-arrow-up"></i></a></div> -->

            <div id="quickmenu">
                <a href="#none"><i class="fa-solid fa-plus"></i></a>
                <ul class="mb-0">
                    <li><a href="#" id="MOVE_TOP_BTN"><i class="fa-solid fa-arrow-up"></i></a></li>
                    <li><a href="https://wjddus749.cafe24.com"><i class="fa-solid fa-house-chimney"></i></a></li>
                    <li><a href=""><i class="fa-solid fa-file"></i></a></li>
                </ul>
            </div>


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