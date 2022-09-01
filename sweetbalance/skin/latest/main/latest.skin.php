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
                <!-- <div class="d-lg-flex align-items-center">
                    <div class="m_p col-lg-4">
                        <dd>
                            <dl>한 동안의 자극적임 보다,</dl>
                            <h2>꾸준함</h2><span class="main_p">을</span><br><span class="main_p">함께 해드릴게요</span>
                        </dd>
                        <a href="#">정기구독 신청하기</a>
                    </div>
                    <div class="img_up col-lg-8">
                            <div class="main_img_1 row justify-content-start flex-row-reverse">
                                <div class="main_img_ment1 text-center"><p>식단관리를 처음 시작 할 때,</p><h3>1주 식단구독</h3></div>
                                <a href="#" class="col-7"><img src="/sweetbalance/img/jeongyeon/main01.png" class="img-fluid" alt="메인사진_1"></a>
                            </div>
                            <div class="main_img_2 d-flex justify-content-between">
                                <div>
                                    <div class="main_img_ment2 text-center"><p>가벼운 식단에 익숙해질 때,</p><h3>2주 식단구독</h3></div>
                                    <a href="#" class=""><img src="/sweetbalance/img/jeongyeon/main02.png" class="main_img_move1 img-fluid" alt="메인사진_2"></a>
                                </div>
                                <div class="main_img_3 row justify-content-start flex-row-reverse">
                                    <div class="main_img_ment3 text-center"><p>꾸준한 식단의 재미를 알아갈 때,</p><h3>3주 식단구독</h3></div>
                                    <a href="#" class=""><img src="/sweetbalance/img/jeongyeon/main03.png" class="img-fluid" alt="메인사진_3"></a>
                                </div>
                            </div>
                           
                    </div>
                </div>

            메인 키프레임 이미지
                    <div class="keyframes d-flex">
                    <div class="main_svg_1 position-absolute">
            
                    </div>
                    <div class="main_svg_2 position-absolute">
                        <img src="/sweetbalance/img/jeongyeon/main2.svg" alt="메인키프레임_2">
                    </div>
                    <div class="main_svg_3 position-absolute">
                        <img src="/sweetbalance/img/jeongyeon/main3.svg" alt="메인키프레임_3">
                    </div>
                    <div class="main_svg_4 position-absolute">
                        <img src="/sweetbalance/img/jeongyeon/main4.svg" alt="메인키프레임_4">
                    </div>
                    <div class="main_svg_5 position-absolute">
                        <img src="/sweetbalance/img/jeongyeon/main5.svg" alt="메인키프레임_5">
                    </div>
                    <div class="main_svg_6 position-absolute">
                        <img src="/sweetbalance/img/jeongyeon/main6.svg" alt="메인키프레임_6">
                    </div>
                </div> --> 

      

          
              <?php echo $list[$i]['wr_content']; ?>
       
      
     <!-- 이 사이 멘트 적기 -->


    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    
    <?php }  ?>