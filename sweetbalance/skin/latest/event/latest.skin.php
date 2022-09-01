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



<div class="form ">
                <div class="form_title text-center">
                    <h3>맛보기 구독 키트 신청</h3>
                    <form action="데이터 전송 페이지경로" id="form" name="form">
                            <div class="d-flex justify-content-center">
                                <ul class="px-0 col-md-5 text-left">
                                        <li class="pt-5 row m-0 align-items-center justify-content-between">
                                            <strong class="form_text  px-0 col-md-3">이름</strong>
                                            <div class="col-md-8  px-0"><input class="border w-100 pl-2 p-3 form_name" type="text" placeholder="이름" required=""></div>
                                        </li>
                                        <li class="pt-5  row m-0 align-items-center justify-content-between">
                                            <strong class="form_text px-0 col-md-3">연락처</strong>
                                            <div class="col-md-8  px-0"><input class="border w-100  pl-2 p-3 form_tell" type="text" placeholder="'-'를 제외하고 입력해주세요."></div>
                                        </li>
                                        <li class="pt-5  row m-0 align-items-center justify-content-between">
                                            <strong class="form_text px-0 col-md-3">생년월일</strong>
                                            <div class="col-md-8  px-0"> <input class="border w-100  pl-2 p-3 form_born" type="date"></div>
                                        </li>
                                        <li class="pt-5 row m-0 align-items-center justify-content-between">
                                            <strong class="form_text px-0 col-md-3">배송지</strong>
                                            <div class="col-md-8  px-0">
                                                <div class="d-flex align-items-center">
                                                    <input class="border pl-2 p-3 form_d col" type="text" placeholder="배송지">
                                                    <button class="form_btn border pl-2 p-3 " type="button">우편번호</button>
                                                </div>
                                                <div class="pt-2">
                                                    <input class="form_address border pl-2 p-3 w-100" type="text" placeholder="나머지 주소">
                                                </div>
                                            </div>                                            
                                        </li>
                                        <li class="pt-5  row m-0 align-items-center justify-content-between">
                                            <strong class="form_text px-0 col-md-3">메세지</strong>
                                            <div class="col-md-8  px-0"><input class="form_m border pl-2 p-3 w-100" type="text" placeholder="30자 이내로 입력해주세요."></div>
                                        </li>
                                </ul>
                            </div>
                    </form>
                    <div class="form_checkbox pt-5 d-flex justify-content-center flex-row-reverse">
                        <input type="checkbox" name="agree" id="agree" value="social">
                        <label for="agree">개인정보 이용 및 수집 동의</label>
                    </div>
                    <div class="form_submit pt-3">
                        <input type="submit" value="신청하기">
                    </div>
                </div>
            </div>
            <div class="pt-5">
                <div class="event_1">
                    <div class="event_title text-center d-flex flex-column justify-content-center align-items-center">
                        <p>SNS EVENT</p>
                        <div class="point p-0 position-relative aos-init" data-aos="fade-in" data-aos-anchor-placement="top-center">
                        <h3>맛보기 구독하고, 정기 구독 할인 받자!</h3>
                        </div>
                    </div>
                        <div class="d-md-flex justify-content-between align-items-center">
                            <div class="event_insta position-relative">
                                <img src="/sweetbalance/img/jeongyeon/insta.png" alt="인스타이벤트">
                            </div>
                            <div class="event_bigbox pl-3">
                                <div class="event_content d-flex">
                                    <div class="event_box text-center"><p>이벤트 기간</p></div>
                                    <div class="pl-3 event_text text-center"><?php echo $list[$i]['wr_1'] ?></div>
                                </div>
                                <div class="event_content d-flex">
                                    <div class="event_box text-center"><p>이벤트 상품</p></div>
                                    <div class="pl-3 event_text text-center"><?php echo $list[$i]['wr_2'] ?></div>
                                </div>
                                <div class="event_content d-flex">
                                    <div class="event_box text-center"><p>참여 방법</p></div>
                                    <div class="pl-3 event_text text-left"><?php echo $list[$i]['wr_3'] ?></div>
                                </div>
                                <div class="event_content d-flex">
                                    <div class="event_box text-center"><p>당첨 발표</p></div>
                                    <div class="pl-3 event_text"><?php echo $list[$i]['wr_4'] ?> </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
                <div class="event_3 pt-5">
                    <dl class="d-flex text-center justify-content-center align-item-center">
                        <dt>#스윗밸런스</dt>
                        <dt>#스윗밸런스맛보기구독</dt>
                        <dt>#스윗밸런스샐러드</dt>
                    </dl>
                </div>




    
                <!-- 여기다가 내용 적기 -->
            
            <!-- <div class="form ">
                <div class="form_title text-center">
                    <h3>맛보기 구독 키트 신청</h3>
                    <form action="데이터 전송 페이지경로" id="form" name="form" >
                            <div class="d-flex justify-content-center">
                                <ul class="px-0 col-md-5 text-left">
                                        <li class="pt-5 row m-0 align-items-center justify-content-between">
                                            <strong class="form_text  px-0 col-md-3">이름</strong>
                                            <div class='col-md-8  px-0'><input class="border w-100 pl-2 p-3 form_name" type="text" placeholder="이름" required></div>
                                        </li>
                                        <li class="pt-5  row m-0 align-items-center justify-content-between">
                                            <strong class="form_text px-0 col-md-3">연락처</strong>
                                            <div  class='col-md-8  px-0'><input class="border w-100  pl-2 p-3 form_tell" type="text"  placeholder="'-'를 제외하고 입력해주세요."></div>
                                        </li>
                                        <li class="pt-5  row m-0 align-items-center justify-content-between">
                                            <strong class="form_text px-0 col-md-3">생년월일</strong>
                                            <div  class='col-md-8  px-0'> <input class="border w-100  pl-2 p-3 form_born" type="date"></div>
                                        </li>
                                        <li class="pt-5 row m-0 align-items-center justify-content-between">
                                            <strong class="form_text px-0 col-md-3">배송지</strong>
                                            <div   class='col-md-8  px-0'>
                                                <div class="d-flex align-items-center">
                                                    <input class="border pl-2 p-3 form_d col" type="text"  placeholder="배송지">
                                                    <button class="form_btn border pl-2 p-3 " type="button">우편번호</button>
                                                </div>
                                                <div class="pt-2">
                                                    <input class="form_address border pl-2 p-3 w-100" type="text"  placeholder="나머지 주소">
                                                </div>
                                            </div>                                            
                                        </li>
                                        <li class="pt-5  row m-0 align-items-center justify-content-between">
                                            <strong class="form_text px-0 col-md-3">메세지</strong>
                                            <div class='col-md-8  px-0'><input class="form_m border pl-2 p-3 w-100" type="text"  placeholder="30자 이내로 입력해주세요."></div>
                                        </li>
                                </ul>
                            </div>
                    </form>
                    <div class="form_checkbox pt-5 d-flex justify-content-center flex-row-reverse">
                        <input type="checkbox" name="agree" id="agree" value="social" >
                        <label for="agree">개인정보 이용 및 수집 동의</label>
                    </div>
                    <div class="form_submit pt-3">
                        <input type="submit" value="신청하기">
                    </div>
                </div>
            </div>
            <div class="pt-5">
                <div class="event_1">
                    <div class="event_title text-center d-flex flex-column justify-content-center align-items-center">
                        <p>SNS EVENT</p>
                        <div class="point p-0 position-relative aos-init" data-aos="fade-in" data-aos-anchor-placement="top-center">
                        <h3>맛보기 구독하고, 정기 구독 할인 받자!</h3>
                        </div>
                    </div>
                        <div class="d-md-flex justify-content-between align-items-center">
                            <div class="event_insta position-relative">
                                <img src="/sweetbalance/img/jeongyeon/insta.png" alt="인스타이벤트">
                            </div>
                            <div class="event_bigbox pl-3">
                                <div class="event_content d-flex">
                                    <div class="event_box text-center"><p>이벤트 기간</p></div>
                                    <div class="pl-3 event_text text-center">06.13~07.30</div>
                                </div>
                                <div class="event_content d-flex">
                                    <div class="event_box text-center"><p>이벤트 상품</p></div>
                                    <div class="pl-3 event_text text-center">정기구독 20% 할인쿠폰</div>
                                </div>
                                <div class="event_content d-flex">
                                    <div class="event_box text-center"><p>참여 방법</p></div>
                                    <div class="pl-3 event_text text-left">맛보기 구독 인증샷을<br>해시태그와 함께 SNS에 업로드</div>
                                </div>
                                <div class="event_content d-flex">
                                    <div class="event_box text-center"><p>당첨 발표</p></div>
                                    <div class="pl-3 event_text">07.30 스윗밸런스 인스타그램 계정으로 발표 </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
                <div class="event_3 pt-5">
                    <dl class="d-flex text-center justify-content-center align-item-center">
                        <dt>#스윗밸런스</dt>
                        <dt>#스윗밸런스맛보기구독</dt>
                        <dt>#스윗밸런스샐러드</dt>
                    </dl>
                </div> -->
              <?php //echo $list[$i]['wr_content']; ?>
      
     <!-- 이 사이 멘트 적기 -->


    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    
    <?php }  ?>