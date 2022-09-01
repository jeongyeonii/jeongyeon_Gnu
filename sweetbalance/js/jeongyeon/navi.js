$(function(){  

  $('#allBtn').click(function(){
    //전체버튼을 클릭하면 xeicon의 닫기 클래스를 줬다뺐다해라.
    $(this).toggleClass('xi-close');
  })

  
  var navitxt = [ 
        $('#skill h2').html(), //#skill h2요소를 가져와서 navitxt 첫번째 값으로 저장
        $('#portfolio h2').html(),
        $('#interview h2').html(),
        $('#sns h2').html()
     ]
   $('#gnb a').each(function(index, item){
        // each 매개인자 변수 2개를 쓸 수 있다.
        // 첫번째자리인자는 번수, 순번값을 받는 인자
        // 두번째자리가 그 실행 객체
        $(item).html(navitxt[index])
   })

   $('#gnb a').click(function(e){
        e.preventDefault(); 
        // 이벤트객체(브라우저)가 가지고 있는 메서드임
        // 기본기능 막아 a, input, select 태그의 자체 기능을 가진 태그가 선택자가 되었을때 처리
        // animate({ 스타일 }, 스피드, 애니메이션끝나고 처리할 실행문)
        // offset body 상단 혹은 왼쪽위치에서 객체의 top, left위치를 계산하는 메서드
        // $(this).attr('href') == #skill, #interview .... 이 값의 선택자화 하기위해서 $()을 씌워준다.
        // $(this) -> 클릭을 호출한 객체 a
        $('body, html').animate({ 
            scrollTop : $( $(this).attr('href') ).offset().top 
        }, 400, function(){
           // $(this) -> $('body, html') 
        });

   })




  
  
}) //// ready이벤트