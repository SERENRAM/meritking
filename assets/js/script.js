function deopa(){
    $(".dropdown-wrapper").removeClass("inactive");
    $(".dropdown-wrapper").removeClass("is-active");

 }
 function guncelleniyor(){
    swal.fire('Hata!','Bu ödeme yöntemi güncelleniyor','warning');
 }
 function yetersiz(){
    swal.fire('Hata!','Yetersiz Bakiye, Canlı Desteke İletişime Geçiniz','warning');
 }
 function openmodal(id){

$("#"+id).addClass("open");
$("#"+id).removeClass("hidden");

}
function closesmodal(){
   $(".modal").addClass("hidden");

 $(".modal").removeClass("open");
}
function closemodal(){
 $(".modal--with-banner").addClass("hidden");
}
function backModal(id){
if (id === "notifications" || id === "favourites"|| id === "settings") {
closemodal();
} 

else{
closemodal();
openmodal('profile');
}
}
function openmenu(){
   $("#burgerbutton").toggleClass("hidden");
   $("#xbutton").toggleClass("hidden");
   $("#xmenu").toggleClass("navbar-active--HCx__");
   } 
function openusermenu(){
   $(".icon--Z3mH6").toggleClass("expanded--W2OFu");
   $(".side-menu-wrapper--OD41n").toggleClass("not-visible--iK0Vj");
} 
function openbalancemenu(){
$(".dropdown--HJjq7").toggleClass("not-visible--ARwS7"); 
$(".icon--Z3mH6").toggleClass("expanded--W2OFu");
} 
function openmodals(id){
closemodals();
$(".user-profile-container").removeClass("hidden");
 
$("#"+id).removeClass("hidden");

}
function closemodals(id){
$(".my-profile-info-block").addClass("hidden");

}

 function destek(){
   Swal.fire({
    title: 'Hata!',
    icon: 'error',
    html: 'Hesap Hatası!, Canlı Desteke İletişime Geçiniz. <br> <button onclick="maximizeTawkToWidget()" class="swal2-confirm swal2-styled"><a href="#">Desteğe Bağlan</a></button>',
    showConfirmButton: false
});
}
function daylight() {
   $('.dark--fqC7c, .light--k9okC').toggleClass('dark--fqC7c light--k9okC');

   $('[data-theme]').attr('data-theme', function(_, attr) {
       return attr === 'dark' ? 'light' : 'dark';
   });

   $('.logo-dark--btVhJ, .logo-light--Ra_8q').toggleClass('logo-dark--btVhJ logo-light--Ra_8q');

   $('#sun').toggleClass('hidden');
   $('#moon').toggleClass('hidden');
}
function openmenuu(id) {
   $("#"+id).toggleClass("hidden");
   $(event.currentTarget).find(".icon--Z3mH6").toggleClass("expanded--W2OFu");
}
function openpayment(id){
   closepayment();
   $("#"+id).removeClass("hidden");

}
function closepayment(){
   $(".opne").addClass("hidden");

}
function closepayment1(){
   $(".opne").addClass("hidden");
   $("#methods").removeClass("hidden");
   $('[step="1"]').removeClass('hidden');

   $('[step="2"]').removeClass('hidden');

}
function openpayment1(id){
   closepayment();
   $(".card--JiQ_T").removeClass("hidden");

}

$(document).ready(function() {
   $('.card--JiQ_T').click(function() {
       var cardTitleText = $(this).find('.card-title--mM9MT').text();
       
       $('.bank-name-title--OvV9U').text(cardTitleText);

       $('[step="1"]').addClass('hidden');

       $('[step="2"]').removeClass('hidden');
   });
});


$(document).ready(function() {
   $('.amount--Tk4d4').click(function() {
       console.log("Amount clicked!"); 
       var ellipsisText = $(this).find('.ellipsis--EjZIN').text();
       console.log("Ellipsis text: " + ellipsisText); 

       var numericValue = ellipsisText.replace(/[^\d.-]/g, '');
       console.log("Numeric value: " + numericValue); 

       $('.money-input-container--ZuMoj input').val(numericValue);
   });
});
$(document).ready(function() {
   $('.card--JiQ_T').click(function() {
       var cardTitleText = $(this).find('.card-title--mM9MT').text();
       
       $('.bank-name-title--OvV9U').text(cardTitleText);

       $('[step="1"]').addClass('hidden');

       $('[step="2"]').removeClass('hidden');
   });
});
$(document).ready(function() {
   $('.form-item-content--_NgyH .copy--qGwNJ').on('click', function() {
       var textToCopy = $(this).closest('.form-item-content--_NgyH').find('.ellipsis--EjZIN:first').text();
       
       var tempTextarea = $('<textarea>');
       tempTextarea.val(textToCopy).appendTo('body').select();
       
       try {
           var successful = document.execCommand('copy');
           var msg = successful ? 'successful' : 'unsuccessful';
           console.log('Copying text command was ' + msg);
       } catch (err) {
           console.log('Oops, unable to copy');
       }

       tempTextarea.remove();
       
       $('.message-wrapper--JG_60').removeClass('hidden');
       
       setTimeout(function() {
           $('.message-wrapper--JG_60').addClass('hidden');
       }, 3000);
   });
});
$(document).ready(function() {
   var $carouselSlide = $('.carousel-slide');
   var $carouselCount = $('.carousel-count-arrow');
   var currentIndex = 0;

   // Slick Slider'ı başlatırken
   $('.slider-slickone').slick({
       autoplay: true,
       autoplaySpeed: 2000,
       arrows: false,
       dots: false,
       infinite: true,
       slidesToShow: 1,
       slidesToScroll: 1,
       swipeToSlide: true,
   });

   // Slick Slider değişiklikten sonra olayını dinle
   $('.slider-slickone').on('afterChange', function(event, slick, currentSlide) {
       currentIndex = currentSlide;
       updateSlideCount();
       updatePagination(currentIndex);
   });

   // Pagination düğmeleri için olay dinleyici ekle
   $('.splide__pagination__page').on('click', function() {
       var index = $(this).index();
       $('.slider-slickone').slick('slickGoTo', index);
   });

   function updateSlideCount() {
       var currentNumber = currentIndex + 1;
       var totalCount = $carouselSlide.length - 2;
       $carouselCount.text(currentNumber + ' / ' + totalCount);
   }

   function updatePagination(currentIndex) {
       $('.splide__pagination__page').removeClass('is-active');
       $('.splide__pagination__page').eq(currentIndex).addClass('is-active');
   }

   updateSlideCount(); 
});

 function openmobilemenu(){
   $(".overlay--zU4r_").toggleClass("overlay-active--DdB_P");
   $("body").toggleClass("ohidden");
   $("#xmenu").toggleClass("navbar-active--HCx__");
 }
 function openmobileusermenu(){
   $("#usermenux").toggleClass("overlay-active--DdB_P");
   $("body").toggleClass("ohidden");
 }
 function closemobileusermenu(){
   $("#usermenux").removeClass("overlay-active--DdB_P");
   $("body").removeClass("ohidden");
 }
 
 $(document).ready(function() {
    var header = $('#hdr-c');
    var appHeader = $('app-header');
    var previousScroll = 0;

    $(window).scroll(function() {
        var currentScroll = $(this).scrollTop();

        if (currentScroll > previousScroll) {
            // Kullanıcı aşağı kaydırıyor
            header.removeClass('shw-fx').addClass('hd-fx');
            appHeader.css('top', '-40px');
        } else {
            // Kullanıcı yukarı kaydırıyor
            header.removeClass('hd-fx').addClass('shw-fx');
        }

        if (currentScroll === 0) {
            // Sayfa en üstte
            appHeader.css('top', '0px');
        }

        previousScroll = currentScroll;
    });
});

function openaasmenu(){
    $('#left-menu').css('transform', 'translateX(0)');
    $('#sidenav-overlay').removeClass('hidden');
  }
  function copenaasmenu(){
    $('#left-menu').css('transform', 'translateX(-100%)');
    $('#sidenav-overlay').addClass('hidden');
  }
  function openaawsmenu(){
    $('#user-menu').css('transform', 'translateX(0)');
    $('#sidenav-overlay').removeClass('hidden');
  }
  function copenaawsmenu(){
    $('#user-menu').css('transform', 'translateX(100%)');
    $('#sidenav-overlay').addClass('hidden');
  }
  function stepupa(id) {
    // Tüm inputları kontrol et
    let isValid = true;
    $(".register__step input").each(function() {
        if ($(this).val().trim() === "") {
            // Eğer input boşsa, auth-input--light class'ına auth-input--invalid class'ını ekle
            $(this).closest(".auth-input--light").addClass("auth-input--invalid");
            isValid = false;
        } else {
            // Input doluysa auth-input--light class'ından auth-input--invalid class'ını kaldır
            $(this).closest(".auth-input--light").removeClass("auth-input--invalid");
        }
    });

    // Eğer tüm inputlar doluysa adımı göster
    if (isValid) {
        $(".register__step").addClass("hidden");
        $("#" + id).removeClass("hidden");
    }
}

// Inputlar üzerinde yazılmaya başlandığında invalid class'ı kaldırma
$(document).on('input', '.register__step input', function() {
    if ($(this).val().trim() !== "") {
        $(this).closest(".auth-input--light").removeClass("auth-input--invalid");
    }
});
