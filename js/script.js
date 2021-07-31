$(window).scroll(function(){
    if($(window).scrollTop() > 0) {
        $(".navbar").css("background-color", "#38869e");
        $(".navbar").css("box-shadow","0 0 14px rgba(0,0,0,0.3)");
        $(".navbar").css("padding", "15px 0");
        $(".navbar").css("transition", "0.2s");
    } else {
        $(".navbar").css("background", "none");
        $(".navbar").css("box-shadow","none");
        $(".navbar").css("padding", "");
    }
});

$(".navbar-toggler").click(function() {
    $(".navbar").toggleClass("bg-primary");
})


$('.slick-posts').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
        }
      },
      {
        breakpoint: 600,
        settings: {
            arrows: false,
            slidesToShow: 2,
            slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1
        }
      }
    ]
});
           
$('.slick-areas-atuacao').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 600,
        settings: {
            arrows: false,
            slidesToShow: 2,
            slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1
        }
      }
    ]
});
      