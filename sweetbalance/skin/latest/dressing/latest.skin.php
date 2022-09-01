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
<!-- <div class="dressing container-md">
        <div class="dressing_p text-center d-flex flex-column justify-content-center align-items-center">
            <p>소스 맛집 스윗밸런스만의</p>
            <div class="point p-0 position-relative aos-init" data-aos="fade-in" data-aos-anchor-placement="top-center">
            <h3>드레싱 소스</h3>
            </div>
        </div>
        <div class="dressing_img text-center">
            <ul class="d-md-flex justify-content-between align-items-start">
                <li class="col-md-4 dressing_bg_1">
                    <a href="#" class="position-relative">
                    <figure>
                        <img src="/sweetbalance/img/jeongyeon/ltaly.png" alt="이탈리안 드레싱" class="img-fluid">
                        <figcaption class="dressing_img_hover_1">
                            이탈리안 드레싱<br>
                            <strong>샐러드 보러가기</strong>
                        </figcaption>
                    </figure>
                    </a>
                    <div class="dressing_ment text-center">
                        <p>토마토의 새콤달콤함에 매콤함 한 스푼!</p>
                        <h4>이탈리안 드레싱</h4>
                    </div>
                </li>

                <li class="dressing_bg_2 col-md-4 d-flex flex-column justify-content-beteween">
                    <a href="#" class="position-relative">
                        <figure>
                            <img src="/sweetbalance/img/jeongyeon/chamkke.png" alt="참깨 된장 드레싱" class="img-fluid">
                            <figcaption class="dressing_img_hover_2">
                                참깨 된장 드레싱<br>
                                <strong>샐러드 보러가기</strong>
                            </figcaption>
                        </figure>
                    </a>
                    <div class="dressing_ment text-center">
                        <p>고소한 참깨와 된장의 완벽 조합!</p>
                        <h4>참깨 된장 드레싱</h4>
                    </div>
                </li>

                <li class="dressing_bg_3 col-md-4">
                    <a href="#" class="position-relative">
                        <figure>
                            <img src="/sweetbalance/img/jeongyeon/lemon.png" alt="레몬 케일 드레싱" class="img-fluid">
                            <figcaption class="dressing_img_hover_3">
                                레몬 케일 드레싱<br>
                                <strong>샐러드 보러가기</strong>
                            </figcaption>
                        </figure>
                    </a>
                    <div class="dressing_ment text-center">
                        <p>입맛 돋워주는 상큼한 꿀레몬즙 팡팡!</p>
                        <h4>레몬 케일 드레싱</h4>
                    </div>
                </li>
            </ul>
        </div>
</div> -->
              <?php echo $list[$i]['wr_content']; ?>
      
     <!-- 이 사이 멘트 적기 -->


    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    
    <?php }  ?>