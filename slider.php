
    <script src="jq/jquery-3.3.1.min.js">

    </script>
    <style>
    *{
	  margin: 0;
	  padding: 0;
    }
    .wrapSlide{
      width: 100%;
      height: 550px;
      overflow:auto;
    }
    .slider{
      width: 100%;
      height: 500px;
      position: relative;
      margin: 0 auto;
      overflow:hidden;
      float: left;
    }
    .img{
      width: 100%;
      height: 600px;
      position: absolute;
      opacity: 0;
      transition: 2s;
    }
    .active{
      opacity: 1;
    }
    .slider img.active{
      display:inline-block;
    }
    .prev,.next{
      float:left;
      margin-top:200px;
      cursor: pointer;
    }
    .prev{
      position:absolute;
      margin-right: 20px;
      z-index:100;
    }
    .next{
      position:absolute;
      margin-left:-70px;
      z-index:100;
    }

    </style>

<div class="wrapSlide">
        <img src="images/prev.png" class="prev" alt="Prev">  
    <div class="slider">
        <img src="images/jatra1.jpg " alt="imageof" class="active img">
        <img src="images/jatra2.jpg " alt="imageof" class="img">
        <img src="images/jatra3.jpg " alt="imageof" class="img">
    </div>
        <img src="images/next.png" class="next" alt="Next">
</div>

<script type="text/javascript">
$(document).ready(function(){
  
    // for image auto slide
    function slider(){
          $current = $('.slider img.active');
          if($current.length == 0){
          $('.sider img:first-child').addClass('active');
          }else{
          $next = $current.removeClass('active').next();
          if($next.length == 0){
              $('.slider img:first-child').addClass('active');
          }else{
              $next.addClass('active');
          }
        }
    }
    setInterval(slider,5000);

    // for sliding image via next btn
    $('.next').on('click', function(){
        var currentImg = $('.active');
        var nextImg = currentImg.next();

        if(nextImg.length){
          currentImg.removeClass('active').css('z-index', -10);
          nextImg.addClass('active').css('z-index', 10);
        }
      });

    $('.prev').on('click', function(){
        var currentImg = $('.active');
        var prevImg = currentImg.prev();

        if(prevImg.length){
          currentImg.removeClass('active').css('z-index', -10);
          prevImg.addClass('active').css('z-index', 10);
          }
      });
});
</script>

