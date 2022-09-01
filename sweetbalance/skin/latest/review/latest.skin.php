<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$thumb_width = 1280;
$thumb_height = 1000;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


    <?php for ($i=0; $i<$list_count; $i++) {  
            $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

            if($thumb['src']) {
                $img = $thumb['ori'];
            } else {
                $img = G5_IMG_URL.'/no_img.png';
                $thumb['alt'] = '이미지가 없습니다.';
            }
            $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
            $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
        
        ?>

                <!-- 여기다가 내용 적기 -->
    <!-- <div class="review container-md">
        <div class="review_title d-flex justify-content-center align-items-center">
            <div class="review_p text-center point p-0 aos-init aos-animate" data-aos="fade-in" data-aos-anchor-placement="top-center">
                <h3>정기구독 고객 리뷰</h3>
            </div>
        </div>

        <div class="review_wr pt-5">
            <div class="review_1 mb-5 d-flex justify-content-around align-items-center" data-aos="fade-up" data-aos-delay="500"
     data-aos-anchor-placement="top-bottom">
                <img src="/sweetbalance/img/jeongyeon/review4.png" alt="리뷰1">
                <div class="review_ment1">
                    <h4>★★★★★</h4>
                    <div class="d-flex">
                        <h4>“닭가슴살 말만 들어도 헛구역질 하던 제 입맛에 딱이에요!”</h4>
                        <p class="pl-3">이*연님</p>
                    </div>
                    <p class="text-center">
                    처음 세개 배송 왔는데 사실 제일 맛없어보이고<br>
                    제 취향 아닌 샐러드를 처음으로 먹었는데요 , 진짜 존맛입니다 !!<br><br>

                    닭가슴살 말만 들어도 헛구역질하는 제가 걍 이건 뭐지? 햄인가? 이러고 있었는데<br>
                    진짜 넘 마싯더라구여 ... 재구매 의사 10000%입니다 ^^
                    </p>
                </div>
            </div>
            <div class="review_2 mb-5 d-flex justify-content-around align-items-center flex-md-row-reverse" data-aos="fade-up" data-aos-delay="800"
     data-aos-anchor-placement="top-bottom">
                <img src="/sweetbalance/img/jeongyeon/review2.png" alt="리뷰2">
                <div class="review_ment2">
                    <h4>★★★★★</h4>
                    <div class="d-flex">
                        <h4>“회사에서도 전자레인지 필요없이 빠르게 먹을 수 있어요!”</h4>
                        <p class="pl-3">조*윤님</p>
                    </div>
                    <p class="text-center">
                    하루에 생채소를 최소 한끼는 먹으려고 처음 정기구독을 이용했어요.<br>

                    회사에서 별도로 전자레인지를 돌릴 필요없이 빠르게 먹을 수 있어<br>
                    점심시간의 효율적인 활용에도 좋습니다.<br><br>

                    대부분 주 1회 배송인 타사랑 다르게 주 2회 배송이여서 좋아요!<br>
                    앞으로도 계속 이용할 것 같습니다~
                    </p>
                </div>
            </div>
            <div class="review_3 mb-5 d-flex justify-content-around align-items-center" data-aos="fade-up" data-aos-delay="1000"
     data-aos-anchor-placement="top-bottom">
                <img src="/sweetbalance/img/jeongyeon/review3.png" alt="리뷰3">
                <div class="review_ment3">
                    <h4>★★★★★</h4>
                    <div class="d-flex">
                        <h4>“다이어터는 아니지만 맛있어서 계속 먹게돼요~”</h4>
                        <p class="pl-3">강*영님</p>
                    </div>
                    <p class="text-center">
                    양질의 식단을 정기배송으로 받아볼 수 있어서 너무 편리해요!!<br>
                    구성 메뉴들도 다 맛있어서 질리지 않고 맛있게 관리할 수 있습니다.<br><br>

                    다이어터는 아니지만 맛있어서 계속 먹을 것 같아요~~
                    </p>
                </div>
            </div>
            <div class="reviewBTN d-flex justify-content-center">
                <a href="#">더 많은 리뷰 보기</a>
            </div>
        </div>
    </div>         -->

              <?php echo $list[$i]['wr_content']; ?>
      
     <!-- 이 사이 멘트 적기 -->


    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    
    <?php }  ?>