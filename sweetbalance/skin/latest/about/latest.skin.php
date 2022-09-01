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
            <!-- <div class="about_container container-md subscribe text-center d-md-flex justify-content-around align-items-center">
                <div>
                    <ul class="about_1 position-relative"  data-aos="fade-zoom-in"
                    data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <li>
                            <strong>"샐러드, 내 입맛에 맞을까?"</strong>
                        </li>
                        <li>•</li>
                        <li>•</li>
                        <li>•</li>
                        <li>•</li>
                        <li>
                            <h4>맛보기 구독으로 확인해보세요!</h4>
                        </li>
                        <li> 
                            <br><br><p>맛보기 구독을 신청하시면,<br>
                            베스트 4종 샐러드 미니 맛보기 키트를 드립니다.</p>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="about_2" data-aos="fade-right" data-aos-offset="400" data-aos-easing="ease-in-sine">
                        <li><h4>이런 분들께 추천합니다</h4></li>
                        <li>
                        <br><p><img src="/sweetbalance/img/jeongyeon/check.png" alt="check">
                            스윗밸런스가 처음이신 분<br>
                            <img src="/sweetbalance/img/jeongyeon/check.png" alt="check">실패없는 조합을 찾고싶으신 분<br>
                            <img src="/sweetbalance/img/jeongyeon/check.png" alt="check">어떤 샐러드를 구매할지 결정이 어려우신 분</p></li>
                    </ul>
                    <div class="about_img"      data-aos-offset="800"
     data-aos-easing="ease-in-sine"><img src="/sweetbalance/img/jeongyeon/about.png" alt="맛보기구독" class="img-fluid"></div>
                </div>
            </div>
            <div class="about_arrow text-center">
                <i class="fa-solid fa-angles-down"></i>
            </div> -->

      

          
              <?php echo $list[$i]['wr_content']; ?>
       
      
     <!-- 이 사이 멘트 적기 -->


    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    
    <?php }  ?>