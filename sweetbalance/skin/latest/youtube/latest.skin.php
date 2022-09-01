<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$thumb_width = 1280;
$thumb_height = 500;

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
            $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);?>
                <div class="youtube_ment mb-4 mb-md-0">
                    <div class="youtube d-flex align-items-center flex-column">
                        <?php echo $list[$i]['wr_content']; ?>
                        <div class="youtubeBTN01 d-md-flex d-none">
                            <a href="<?php echo $list[$i]['wr_link1']; ?>">더 보러가기</a>
                        </div>
                    </div>                    
                </div>

                <div class="position-relative youtube_box flex-md-grow-1 w-100">  
                    <div class="position-relative"> 
                        <iframe width="100%" 
                            
                                src="https://www.youtube.com/embed/<?php echo $list[$i]['subject']; ?>" 
                                title="YouTube video player" 
                                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                    </div>  
                </div>

                <div class="youtubeBTN02 d-md-none d-block text-center mt-4">
                    <a href="<?php echo $list[$i]['wr_link1']; ?>">더 보러가기</a>
                </div>  
      
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    
    <?php }  ?>
