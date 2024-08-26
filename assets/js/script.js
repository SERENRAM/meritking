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
    // İlk 6 inputu kontrol et
    let isValid = true;
    $(".register__step input").slice(0, 6).each(function() {
        const inputValue = $(this).val().trim();
        console.log("Input değeri: ", inputValue); // Input değerini konsola yazdır

        if (inputValue === "") {
            // Eğer input boşsa, auth-input--light class'ına auth-input--invalid class'ını ekle
            $(this).closest(".auth-input--light").addClass("auth-input--invalid");
            isValid = false;
        } else {
            // Input doluysa auth-input--light class'ından auth-input--invalid class'ını kaldır
            $(this).closest(".auth-input--light").removeClass("auth-input--invalid");
        }
    });

    if (isValid) {
        console.log("Geçiş yapılan adım ID'si: #" + id);
        $(".register__step").addClass("hidden"); // Tüm adımları gizle
        $("#" + id).removeClass("hidden"); // Belirtilen adımı göster
        console.log("Adım geçişi yapıldı ve hidden class'ı kaldırıldı.");
    } else {
        console.log("Geçiş başarısız: İlk 6 alan doldurulmamış.");
    }
}

// Inputlar üzerinde yazılmaya başlandığında invalid class'ı kaldırma
$(document).on('input', '.register__step input', function() {
    if ($(this).val().trim() !== "") {
        $(this).closest(".auth-input--light").removeClass("auth-input--invalid");
    }
});

$(document).ready(function() {
  
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 0) {
            // Sayfa aşağı kaydırıldığında belirttiğiniz sınıfları kaldır
            $('.app-header__slogan').removeClass('slogan-visible');
            $('.app-header__warning').removeClass('warning-visible');
            $('.app-header__dropdown').removeClass('dropdown-visible');
        } else {
            // Sayfanın en üstüne dönüldüğünde sınıfları geri ekle
            $('.app-header__slogan').addClass('slogan-visible');
            $('.app-header__warning').addClass('warning-visible');
            $('.app-header__dropdown').addClass('dropdown-visible');
        }
    });
});
$(document).ready(function() {
    $('.methodSelector').click(function(e) {
        e.preventDefault();
        
        var name = $(this).find('h4').text();
        var min = $(this).find('p > span').eq(0).text();
        var max = $(this).find('p > span').eq(2).text();
        
        $('.mobile-header__method-name').text(name);
        $('.method-info').find('h2').eq(1).text(min);
        $('.method-info').find('h2').eq(2).text(max);

        $('.deposit__menu').addClass('hidden');
        
        $('.deposit-method').removeClass('hidden');
        $('.formsa').addClass('hidden');

    // Belirtilen formu göster
    var targetForm = $($(this).data('target'));
    targetForm.removeClass('hidden');
    $("html, body").animate({ scrollTop: 0 }, "slow");
    });

    $('.closeModal').click(function() {
        $('.deposit-method').addClass('hidden');

        $('.deposit__menu').removeClass('hidden');
    });
    // Ön tanımlı miktarları seçtiğinizde input değerini güncelle
$('.preset-amounts__item').click(function() {
    var value = $(this).find('input.preset-amounts__input').val();
    $('#amntu').val(value);
    $('#amntu1').val(value);
    $('#amntu2').val(value);
    $('#amntu3').val(value);
    $('#amntu4').val(value);
    $('#amntu5').val(value);
   

});
});
$(document).ready(function() {

// Ödeme yöntemini seçtiğinizde çalışacak fonksiyon
$('.methodSelector1').click(function(e) {
    e.preventDefault();

    // Seçilen yöntemin bilgilerini al
    var name = $(this).find('h4').text();
    var img = $(this).find('img').attr('src');
    var min = $(this).find('p > span').eq(0).text();
    var max = $(this).find('p > span').eq(2).text();

    // Bu bilgileri ilgili alanlara yerleştir
    $('.method-info--d').find('h2').eq(1).text(min);
    $('.method-video').find('img').eq(0).attr('src', img);
    $('.method-info--d').find('h2').eq(2).text(max);

    // Tüm formları gizle
    $('.formsa').addClass('hidden');

    // Belirtilen formu göster
    var targetForm = $($(this).data('target'));
    targetForm.removeClass('hidden');
    $("html, body").animate({ scrollTop: 0 }, "slow");
    // Uyarı mesajını gizle ve ödeme yöntemini göster
    $('.alert.alert--info').addClass('hidden');
    $('.deposit-method--d').removeClass('hidden');

});

// Modal pencereyi kapatma işlemi
$('.closeModal').click(function() {
    $('.deposit-method--d').addClass('hidden');
    $('.deposit__menu').removeClass('hidden');
});

// Ön tanımlı miktarları seçtiğinizde input değerini güncelle
$('.preset-amounts__item').click(function() {
    var value = $(this).find('input.preset-amounts__input').val();
    $('#amntu').val(value);
    $('#amntu1').val(value);
    $('#amntu2').val(value);
    $('#amntu3').val(value);
    $('#amntu4').val(value);
    $('#amntu5').val(value);
    
});

});
$(document).ready(function() {

// Kopyalama işlemi için fonksiyon
$('.btn-copy').click(function() {
    // Metni almak için yakındaki '.copy' sınıfına sahip div'i bul
    var textToCopy = $(this).siblings('.copy').text();

    // Metni kopyalamak için bir textarea oluştur
    var $temp = $("<textarea>");
    $("body").append($temp);
    $temp.val(textToCopy).select();

    // Metni kopyala
    document.execCommand("copy");

    // Oluşturduğumuz textarea'yı sil
    $temp.remove();
});

});


   $(document).ready(function() {
let counter = 300;
const countdownElement = $("#countdownaa");

const interval = setInterval(function() {
counter--;
countdownElement.text(counter);

if (counter === 0) {
   clearInterval(interval);
}
}, 1000); 
});

 $(document).ready(function() {
$(window).on('scroll', function() {
if ($(this).scrollTop() > 0) {
$('.domain-warning').removeClass('domain-warning--visible');
$('.observer').addClass('hidden');
} else {
$('.domain-warning').addClass('domain-warning--visible');
$('.observer').removeClass('hidden');
}
});
});

$(document).ready(function() {
$(window).on('scroll', function() {
if ($(this).scrollTop() > 0) {
$('.app-header__slogan').removeClass('slogan-visible');
$('.app-header__warning').removeClass('app-header__warning--visible');
$('.app-header__dropdown').removeClass('app-header__dropdown--visible');
$('.observer').addClass('hidden');
} else {
$('.app-header__slogan').addClass('slogan-visible');
$('.app-header__warning').addClass('app-header__warning--visible');
$('.app-header__dropdown').addClass('app-header__dropdown--visible');
$('.observer').removeClass('hidden');
}
});
});

$(document).ready(function () {

if (!Cookies.get('firstModalClosed')) {
$('#firstAdsModal').removeClass('hidden');
} else if (!Cookies.get('secondModalClosed')) {
$('#secondAdsModal').removeClass('hidden');
}

$('#firstAdsModal .app-modal__close').click(function () {
$('#firstAdsModal').addClass('hidden');
$('#secondAdsModal').removeClass('hidden');
Cookies.set('firstModalClosed', 'true', { expires: 1 }); 
});

$('#secondAdsModal .app-modal__close').click(function () {
$('#firstAdsModal, #secondAdsModal').addClass('hidden');
Cookies.set('secondModalClosed', 'true', { expires: 1 }); 
});

});
$(document).ready(function() {

    // Kopyalama işlemi için fonksiyon
    $('.btn-copy').click(function() {
        // Metni almak için yakındaki '.copy' sınıfına sahip div'i bul
        var textToCopy = $(this).siblings('.copy').text();
    
        // Metni kopyalamak için bir textarea oluştur
        var $temp = $("<textarea>");
        $("body").append($temp);
        $temp.val(textToCopy).select();
    
        // Metni kopyala
        document.execCommand("copy");
    
        // Oluşturduğumuz textarea'yı sil
        $temp.remove();
    });
    
    });
    
    $(document).ready(function() {
        var currentSlide = 0;
        var slideHeight = $(".app-slide").height();
        var slideCount = $(".app-slide").length;
        var dragging = false; 
        var startY = 0; 
        var dragDistance = 0; 
    
        function moveSlider() {
            var translateY = -(currentSlide * slideHeight) + 'px';
            $(".app-slider__slideshow").css('transform', 'translateY(' + translateY + ')');
            $('.slider-pagination--active').removeClass('slider-pagination--active');
            $('.app-slider__pagination button').eq(currentSlide).addClass('slider-pagination--active');
        }
    
        $(".app-slider__pagination button").on('click', function() {
            currentSlide = $(this).index();
            moveSlider();
        });
    
        setInterval(function() {
            currentSlide++;
            if (currentSlide >= slideCount) {
                currentSlide = 0;
            }
            moveSlider();
        }, 3000);
    
        $(".app-slider__root").on('mousedown', function(e) {
            dragging = true;
            startY = e.clientY;
            dragDistance = 0;
        });
    
        $(document).on('mousemove', function(e) {
            if(dragging) {
                dragDistance = e.clientY - startY;
                var translateY = -(currentSlide * slideHeight) + dragDistance + 'px';
                $(".app-slider__slideshow").css('transform', 'translateY(' + translateY + ')');
            }
        });
    
        $(document).on('mouseup', function() {
            if (dragging) {
                dragging = false;
                if (Math.abs(dragDistance) > slideHeight / 4) {
                    if (dragDistance > 0 && currentSlide > 0) {
                        currentSlide--;
                    } else if (dragDistance < 0 && currentSlide < slideCount - 1) {
                        currentSlide++;
                    }
                }
                moveSlider();
            }
        });
    });
    function openUserMenu(){ 
        $('#usernemua').toggleClass('app-drawer--open');
        $('#usernemua1').toggleClass('hidden');
        $('html').toggleClass('scroll-disabled');
        $('body').toggleClass('scroll-disabled');
        $('.app-header__username').toggleClass('active');

      }
      function loginModal(){
        $('#loginModal').toggleClass('hidden');
      
      }
      function discountModal(){
        $('#discountModal').toggleClass('hidden');
      
      }
      function depositModal(){
        $('#depositModal').toggleClass('hidden');
      
      }