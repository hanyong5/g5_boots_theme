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

include_once(G5_THEME_PATH.'/head.php');
?>
 <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
<style>
      html,
      body {
        position: relative;
        height: 100%;
      }

      body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }

      .swiper {
        width: 100%;
        height: 300px;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .item{width:100%;height:100%;background-repeat:no-repeat;background-size:cover}
    </style>
    <script>
        const array = [
            {title:"text1",img:"pc01.jpg"},
            {title:"text2",img:"pc02.jpg"},
            {title:"text3",img:"pc03.jpg"},

        ]
    </script>


 <!-- Swiper -->
 <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <script>
            let viewData = ""
            array.forEach(function(item,index){
                viewData += `<div class="swiper-slide">
                                <div class="item" style="background-image:url(<?echo G5_THEME_IMG_URL?>/${item.img})">${item.title}</div>
                            </div>`
            })
            document.write(viewData)
        </script>
      </div>
      <div class="swiper-pagination"></div>
    </div>







 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
    },
  });
</script>


<?php
include_once(G5_THEME_PATH.'/tail.php');