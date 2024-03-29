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
?>

        <?php
          include_once(G5_THEME_PATH.'/head_wide.php');
        ?>


<!-- <h2 class="sound_only">최신글</h2> -->
<!--<?php //echo latest ("slider","mainbanner",3,100);?>--> 


<div id="mainSlider" class='position-relative'>
<?php echo latest('slider',"slider",3,100); ?> 
 
  <div id="phone" class="container m-auto d-flex justify-content-end align-items-center" >
                <div class="bgphone">

                <div class="pimg ">
                 
                    <dl class="chat">
                        <dt class="q"  data-aos="fade-up-right" data-aos-easing="ease-in-back" data-aos-delay="1500" data-aos-duration="300">혼자 이겨내지 못하는 <br>
                        나약한 사람이 되는거 아냐?</dt>
                        <dd class="a" data-aos="fade-up-left"  data-aos-easing="ease-in-back" data-aos-delay="3000">
                        <strong>그렇지 않아요.</strong>
                        심리상담을 받는 것은 상담사의 도움을
                        수용하려는 용기가 있는거에요.<br>
                        용기와 내면의 힘이 있는 사람들이죠.
                        </dd>
                        <dt class="q"  data-aos="fade-up-right" data-aos-easing="ease-in-back" data-aos-delay="7000">
                        친구와 진지하게 이야기하는 것과
                        비슷하지 않아?
                        </dt>
                        <dd class="a" data-aos="fade-up-left" data-aos-easing="ease-in-back" data-aos-delay="8500" >
                        <strong>다릅니다.</strong>
                        상담사는 수년간 학위 취득과 임상경험을
                        가져요.<br>  이러한 전문성으로 내담자의
                        성장에 집중하며 대화를 이어나가죠
                        </dd>
                        <dt class="q"  data-aos="fade-up-right" data-aos-easing="ease-in-back" data-aos-delay="12500">
                            상담을 받고나면 기록에 남지 않아?</dt>
                        <dd class="a" data-aos="fade-up-left"data-aos-easing="ease-in-back" data-aos-delay="14000">
                        <strong>걱정 안하셔도 돼요.</strong><br>
                        기본적으로 상담은 비밀보장이 원칙이에요.<br>
                        상담사는 상담과정에서 알게 된 내용에 대해
                        절대로 제3자에게 공개할 수 없어요.
                        </dd>
                    
                        <dt class="q"  data-aos="fade-up-right" data-aos-easing="ease-in-back" data-aos-delay="18000">
                        정신적으로 문제가 있는 사람이 
                        받는거 아냐?
                        </dt>
                        <dd class="a" data-aos="fade-up-left"data-aos-easing="ease-in-back" data-aos-delay="19500">
                        <strong>그렇지 않아요.</strong>
                        상담을 찾는 핵심 이유는 더 나은 삶을 살기 
                        위함이에요.<br> 삶 속에서 변화와 성장의 경험이
                        필요하다면 상담을 추천해요.
                        </dd>
                    </dl>
                   
                </div>
                </div>
                
            

            </div>
 
</div>


<div class="warp">
    <section id="intro" class="position-ralative">
        <div class="container">
            
            <div id="first" class="d-flex justify-content-between align-items-center" >
                            <div class="text">
                                <p><strong>마인드카페</strong>는,<br> 
                                    심리상담&마음치유 플렛폼이에요.</p>
                                <p>
                                심리상담의 효과는 국내외 수많은 연구1)로 검증이 되었어요.<br>
                                하지만 어떤 심리 전문가에 상담을 받았느냐에 따라<br>
                                상담의 효과가 다를 수 있어요.
                                </p>
                            </div>
                            <div class="youtube">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/SBLs4y3MNko?autoplay=1&mute=1&modestbranding=1&controls=0&amp;playlist=SBLs4y3MNko&loop=1" frameborder="0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; loop;" allowfullscreen></iframe>
                            </div>
            </div>
            <div id="second" class="d-flex justify-content-between align-items-center " data-aos="fade-up" data-aos-duration="1000">

                <div class="introimg">
                        <img src="/gnu/img/introimg.png" alt="인트로 두번째 이야기 사진">
                </div>
                <div class="text">
                    <p><strong>마인드카페</strong>는,<br> 
                    내 마음을 알아 볼 수 있어요.</p>
                    <p>
                    100문항의 자가 진단 평가를 통해 진정한 나를 탐구하고<br>
                    내 문제를 자신의 문제처럼 함께 고민해주는 사람들이 모인<br>
                    익명 SNS에 매일의 마음을 남길 수 있어요
                    </p>
                </div>
        </div>
        <p class="second2" data-aos="fade-up" data-aos-duration="1000">
            Lambert, M. J., Bergin, A. E., & Garfield, S. L. (1994). The effectiveness of psychotherapy. New York.<br>
                Seligman, M. E. (1995). The effectiveness of psychotherapy: The Consumer Reports study. American psychologist, 50(12), 965.
        </p>
        </div>
           

    </section>
    <section id="people">
        <div class="container">
            <div class="text text3" data-aos="fade-up" data-aos-duration="1000">
                <p><strong>마인드카페</strong>는,<br> 
                최고의 전문가와 함께합니다.</p>
                <p>
                정신건강의학과 전문의, 임상심리 전문가, 코칭 전문가 등<br> 
                200여명의 온·오프라인 전문가들과 함께하여<br>
                5만명이 넘는 사람들이 치유하였어요.<br>
                <br>
                이제 여러분 차례에요.<br>
                심리상담이 도울 수 있어요.
                </p>
            </div>
            <ul class="person row d-flex jsutify-content-evenly mb-0">
                <li class="col-6 col-md-3 px-1"  data-aos="fade-up" data-aos-duration="1000"><img src="/gnu/img/GJ/p1.png" alt="오지희 임상심리 전문가"><span>오지희 임상심리 전문가</span></li>
                <li class="col-6 col-md-3 px-1"  data-aos="fade-up" data-aos-duration="1500"><img src="/gnu/img/GJ/p2.png" alt="박윤정 임상심리 전문가"><span>박윤정 임상심리 전문가</span></li>
                <li class="col-6 col-md-3 px-1"  data-aos="fade-up" data-aos-duration="2000"><img src="/gnu/img/GJ/p3.png" alt="양재웅 정신건강의학과 전문의"><span>양재웅 정신건강의학과 전문의</span></li>
                <li class="col-6 col-md-3 px-1"  data-aos="fade-up" data-aos-duration="2500"><img src="/gnu/img/GJ/p4.png" alt="양재진 정신건강의학과 전문의"><span>양재진 정신건강의학과 전문의</span></li>
            </ul>
        </div>
        
    </section>

    <section id="gif">
    <div class="back position-relative d-flex">
            <span class="position-absolute">
            눈치 보지 않고 마음을 털어 놓은<br> 
            당신에게 <strong>위로와 응원을.<strong>
            </span>
    
            <div class="app mt-5">
                <a href="https://play.google.com/store/apps/details?id=com.atommerce.mindpro&hl=ko" target="_brank" ><img src="/gnu/img/GJ/and.png" alt="구글스토어"></a>
                <a href="https://apps.apple.com/kr/app/%EB%A7%88%EC%9D%B8%EB%93%9C%EC%B9%B4%ED%8E%98-%EC%8B%AC%EB%A6%AC%EC%83%81%EB%8B%B4-%EB%A7%88%EC%9D%8C-%EC%B9%98%EC%9C%A0-%ED%94%8C%EB%9E%AB%ED%8F%BC/id1441402766" target="_brank"><img src="/gnu/img/GJ/apple.png" alt="앱스토어"></a>
            </div>
        </div>

    </section>
    <section id="map">
    <div class="container position-relative">
        <h3>
        심리케어센터  
        </h3>  
        <ul class="maps mb-0">
            <li class="center pb-3 d-flex justify-content-center">
                <a href="#maps1" class="color">
                    <h4 class="act pr-3">분당수내점</h4>
                </a>
                <a href="#maps2">
                     <h4 class="pl-3">한남점</h4>
                </a>
            </li>
            <li id="contents">    
                <div id="maps1" class="map1 act">
                    <div id="map1" style="width:100%; height:350px;"></div> 
                    <div class="maptext py-2 d-flex justify-content-between align-items-center">
                        <div class="call d-flex align-items-center">
                            <img src="/gnu/img/GJ/call.png" alt="전화">
                            <a href="tel:031-711-3275"><span>031-711-3275</span></a>
                        </div>
                        <a href="http://kko.to/kw60b5gzM" target="_blank">
                            <span>경기 성남시 분당구 황새울로214번길 8</span>
                        </a>
                    </div>
                </div>
                <div id="maps2" class="map2">
                    <div id="map2" style="width:100%; height:350px;"></div>    
                    <div class="maptext py-2 d-flex justify-content-between align-items-center">
                        <div class="call d-flex align-items-center">
                            <img src="/gnu/img/GJ/call.png" alt="전화">
                            <a href="tel:02-790-9811"><span>02-790-9811</span></a>
                        </div>
                        <a href="http://kko.to/StKMf1a0o" target="_blank">
                            <span>서울 용산구 이태원동 22-76,몬드리안 서울 이태원 B1F</span>
                        </a>
                    </div>
                </div>
            </li>  
        </ul>
    </div>
    </section>
    <section id="event">
        <div class="position-relative" >
            <h3 >EVENT</h3>
            <div class="container art d-flex justify-content-between align-items-start">
                <span>미술로 찾아가는<br>
                    마음휴식처</span>
    
                    <span>
                마인드케어의 미술치료전문가와 함께<br>
                자기인식 및 스트레스를 완화하는 시간을<br> 
                매주 주말마다 무료로 진행하고 있습니다.
                </span>
            </div>
            <div class="artbg">
               <div class="container forms mt-0 pt-0 mt-md-3 pt-md-3">
                    <div class="artwarp">

                    <p>
                        <strong>미술치료</strong><br>
                        : 잠재되어있는 무기력하거나 공격적 에너지를 중화시키고<br> 
                        좌절을 견디고 긍정적인 힘을 키우는 효과를 얻게 합니다.
                    </p>
                    <form action="" class="" id="fm">
                        <div class="info">
                            <div class="basic d-flex flex-column justify-content-between">
                                <div>
                                    <strong class="d-block">이름</strong>
                                    <input type="text" name="name" class="basicinfo iname" placeholder="홍길동" maxlength=6 >
                                </div>
                                <div>
                                    <strong  class="d-block">연락처</strong>
                                    <input type="tel" name="tel" class="basicinfo itel" maxlength=13 max placeholder="010-0000-0000">
                                </div>
                                <div>
                                    <strong  class="d-block">나이</strong>
                                    <input type="number" name="age" min="10" class="basicinfo iage" placeholder="10">
                                </div>
                            </div>
              
                                <div class="check d-flex">
                                    <div>
                                        <span class="d-block">토요일 - 그림</span>
                                        
                                        <input type="checkbox" id="sat" class="ck">
                                        <label for="sat" ></label>
                                    </div>
                                    <div>
                                    <span class="d-block">일요일 - 만들기</span>
                                    
                                        <input type="checkbox" id="sun" class="ck">
                                        <label for="sun" ></label>
                                    </div>
                                    <div>
                                    <a href=""> <span class="d-block">개인정보보호동의(보기)</span></a>
                                    
                                        <input type="checkbox" id="pck" class="ck">
                                        <label for="pck" ></label>
                                    </div>
                                </div>
                         
                         
                            <div class="personal d-flex">
                          
                              
                        
                            </div>
                            <div class="subdiv">
                                <input type="submit" class="sub" value="신청하기">
                            </div>
                           
                            <span class=" subcall">*빠른시일내로 연락드리겠습니다.</span>

                            
                        </div>`

                    </form> 
                </div>
                   
               </div>

            </div>   
        </div>
    </section>


</div>

<div id="popup" class="position-fixed off">
        <div class="pop position-relative">
            <p class="text-center">개인정보보호동의</p>
            <p class="poptext">
                ① 개인정보를 제공받는 자 : 마인드카페<br>
                ② 개인정보를 제공받는 자의 개인정보 이용 목적 : 고객 관리<br>
                ③ 제공하는 개인정보의 항목 : 성명, 전화번호, 나이<br>
                ④ 개인정보를 제공받는 자의 개인정보 보유 및 이용 기간 : 제공 후 1년<br>
                ⑤ 동의를 거부할 수 있으며, 동의 거부시 마인드카페 서비스가 제공되지 않습니다.
            </p>
            <button class="ok position-absolute ">확인</button>
        </div>
    </div>

<!-- <?php //echo latest("pic_block","folio",3,100);?> -->
<!-- <?php //echo latest("basic","as",3,100);?> -->




    <!-- } 최신글 끝 -->


<?php
include_once(G5_THEME_PATH.'/tail.php');