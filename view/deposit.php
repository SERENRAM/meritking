<?php
$query = $db -> query("SELECT * from banks WHERE name= 'ziraatbank'");
$query2 = $db -> query("SELECT * from cryptoacc");

$query1 = $db -> query("SELECT * from accounts WHERE id='1'")->fetch_assoc();


?>
<?php
if ($detect->isMobile()) {?>
<main>
   <div class="observer" style="top: 70px;"></div>
   <section data-v-3ed8b204="" class="deposit">
      <ul data-v-3ed8b204="" class="deposit__menu">
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#payfixDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/payfix.png" alt="PayFix" loading="lazy"> 
               <div>
                  <h4>PayFix</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>1.000.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#paparaDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/payox_papara.png" alt="Payox Papara" loading="lazy"> 
               <div>
                  <h4>Payox Papara</h4>
                  <p><span>1000 ₺</span> <span> - </span> <span>100.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fas_4_fast-havalesi-4.png?1697360457" alt="FAST HAVALESİ 4" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 4</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/FASTT_11_fast-havalesi-11.png?1697360457" alt="FAST HAVALESİ 11" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 11</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fastt_12_fast-havalesi-12.png?1697360457" alt="FAST HAVALESİ 12" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 12</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fas_7_ffast-havalesi-7.png?1697360457" alt="FAST HAVALESİ 7" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 7</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/trendhavale.png" alt="Fast Havalesi 2" loading="lazy"> 
               <div>
                  <h4>Fast Havalesi 2</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fas_14_fast-havalesi-14.png?1697360457" alt="FAST HAVALESİ 14" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 14</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fast_8_fast-havalesi-8.png?1697360457" alt="FAST HAVALESİ 8" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 8</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fast_3_fast-havalesi-3.png?1697360457" alt="FAST HAVALESİ 3" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 3</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fast_5_fast-havalesi-5.png?1697360457" alt="FAST HAVALESİ 5" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 5</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fas_9_fast-havalesi-9.png?1697360457" alt="FAST HAVALESİ 9" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 9</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fast_6_fast-havalesi-6.png?1697360457" alt="FAST HAVALESİ 6" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 6</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fas_13_fast-havalesi-13.png?1697360457" alt="FAST HAVALESİ 13" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 13</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/payox_bank.png" alt="OTOMATİK HIZLI HAVALE" loading="lazy"> 
               <div>
                  <h4>OTOMATİK HIZLI HAVALE</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>100.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#paparaDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/hera_papara.png" alt="Hera Papara" loading="lazy"> 
               <div>
                  <h4>Hera Papara</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>100.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#paparaDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/allpapara.png" alt="Hızlı Papara" loading="lazy"> 
               <div>
                  <h4>Hızlı Papara</h4>
                  <p><span>1000 ₺</span> <span> - </span> <span>100.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/cepbank.png" alt="Cepbank" loading="lazy"> 
               <div>
                  <h4>Cepbank</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>1.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/bank.png" alt="Bank havalesi" loading="lazy"> 
               <div>
                  <h4>Bank havalesi</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>1.000.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#paparaDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/papara_vip_papara-vip.png?1697360457" alt="PAPARA VİP" loading="lazy"> 
               <div>
                  <h4>PAPARA VİP</h4>
                  <p><span>1000 ₺</span> <span> - </span> <span>100.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#mefeteDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/instapays_mft.png" alt="Instapays MeFeTE" loading="lazy"> 
               <div>
                  <h4>Instapays MeFeTE</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>100.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/turbohavalesi.png" alt="Turbo Havalesi" loading="lazy"> 
               <div>
                  <h4>Turbo Havalesi</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>500.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#cryptoDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/jokerpays_crypto.png" alt="CoinPay" loading="lazy"> 
               <div>
                  <h4>CoinPay</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>5.000.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box">
            <a href="#" class="methodSelector" data-target="#cardDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/manypay.png" alt="KREDI KARTI" loading="lazy"> 
               <div>
                  <h4>KREDI KARTI</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>3.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
      </ul>

<div data-v-631850fe="" data-v-3ed8b204="" class="deposit-method hidden">
   <header data-v-631850fe="">
      <div data-v-631850fe="" class="mobile-header">
         <a data-v-631850fe="" href="deposit" class="mobile-header__back-button btn btn--dark btn--round btn--flex open active"><i data-v-533b5753="" data-v-631850fe="" class="icon-chevron-left icon--md"></i></a> 
         <div data-v-631850fe="" class="mobile-header__method-name">
            PAYFIX
         </div>
      </div>
      <div data-v-631850fe="" class="method-info">
         <div>
            <i data-v-533b5753="" class="icon-time icon--2x"></i> 
            <div>
               <span>TOPLAM İŞLEM SÜRESİ</span> 
               <h2>1 DK</h2>
            </div>
         </div>
         <div>
            <i data-v-533b5753="" class="icon-wallet-outlined icon--2x"></i> 
            <div>
               <span>MINIMUM YATIRIM</span> 
               <h2>500 ₺</h2>
            </div>
         </div>
         <div>
            <i data-v-533b5753="" class="icon-wallet icon--2x"></i> 
            <div>
               <span>MAKSİMUM YATIRIM</span> 
               <h2>1.000.000 ₺</h2>
            </div>
         </div>
      </div>
      <div data-v-afd4dde2="" data-v-631850fe="" class="bonus-panel" value="">
         <div data-v-afd4dde2="" class="bonus-panel__select">
            <header data-v-afd4dde2=""><button data-v-afd4dde2="" type="button" disabled="disabled"><label data-v-afd4dde2=""><i data-v-533b5753="" data-v-afd4dde2="" class="icon-gift icon--lg"></i></label> <span data-v-afd4dde2="">
               Lütfen Bonus Seçiniz
               </span> <i data-v-533b5753="" data-v-afd4dde2="" class="icon-caret-down icon--md"></i></button>
            </header>
            <ul data-v-afd4dde2="" style="max-height: 0px;"></ul>
         </div>
         <!---->
      </div>
   </header>
   <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> 
   <form data-v-631850fe="" id="havaleDetails" class="formsa hidden" onsubmit="setPayment('havale')">
      <div class="input__container" value="">
         <div class="preset-amounts preset-amounts--d">
            <div class="preset-amounts__item"><label for="[object Object]-0">
               500 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-0" class="preset-amounts__input" value="500">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-1">
               1.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-1" class="preset-amounts__input" value="1000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-2">
               2.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-2" class="preset-amounts__input" value="2000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-3">
               5.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-3" class="preset-amounts__input" value="5000">
            </div>
         </div>
      </div>
      <div class="input__container">
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset hidden"> <input type="text" name="full_name" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-phone icon--lg"></i></label> <input type="number" placeholder="Telefon Numarası giriniz" class="input--reset hidden"> <input type="text" name="phone" placeholder="Telefon Numarası giriniz" class="input--reset">   
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar giriniz" class="input--reset hidden"> <input type="text" placeholder="Tutar giriniz" class="input--reset" id="amntu" name="amount">
         </div>
         <!---->
      </div>
      <?php while ($row = $query -> fetch_assoc()) { ?>
      <div class="method-finance__details">
         <h4>Banka Hesapları</h4>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Hesap sahibi</label> <!----> 
               <div class=""><?=$row['account_holder']?></div>
               <!---->
            </div>
         </div>
         <div class="input__container">
            <div class="input-placeholder">
               <label>İBAN</label> <!----> 
               <div class="copy"><?=$row['iban']?></div>
               <button type="button" class="btn-copy"><i data-v-533b5753="" class="icon-copy icon--md"></i></button>
            </div>
         </div>
      </div>
      <?php }?>
      <div class="alert alert--warning"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> <h4>Lütfen 500 TL altında transfer sağlamayınız, aksi taktirde yatırımınız onay almayacaktır. Önce hesaba yatırım sağlayınız.Yatırımınızın ardından ''Ödemeyi gerçekleştirdim' butonuna basınız.</h4></div>
       <!----> <!----> 
      <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
         <!----> <span data-v-6a60ad26="">Ödemeyi Gerçekleştir</span>
      </button>
   </form>
   <form data-v-631850fe="" id="paparaDetails" class="formsa hidden" onsubmit="setPayment('papara')">
      <div class="input__container" value="">
         <div class="preset-amounts preset-amounts--d">
            <div class="preset-amounts__item"><label for="[object Object]-0">
               500 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-0" class="preset-amounts__input" value="500">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-1">
               1.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-1" class="preset-amounts__input" value="1000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-2">
               2.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-2" class="preset-amounts__input" value="2000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-3">
               5.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-3" class="preset-amounts__input" value="5000">
            </div>
         </div>
      </div>
      <div class="input__container">
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset hidden"> <input type="text" name="full_name" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-phone icon--lg"></i></label> <input type="number" placeholder="Telefon Numarası giriniz" class="input--reset hidden"> <input type="text" name="phone" placeholder="Telefon Numarası giriniz" class="input--reset">   
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar giriniz" class="input--reset hidden"> <input type="text" placeholder="Tutar giriniz" class="input--reset" id="amntu1" name="amount">
         </div>
         <!---->
      </div>
      <div class="method-finance__details" id="paparaDetails">
         <h4>Banka Hesapları</h4>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Hesap sahibi</label> <!----> 
               <div class=""><?=$query1['papara_holder']?></div>
               <!---->
            </div>
         </div>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Papara numarasi</label> <!----> 
               <div class="copy"><?=$query1['papara_number']?></div>
               <button type="button" class="btn-copy"><i data-v-533b5753="" class="icon-copy icon--md"></i></button>
            </div>
         </div>
      </div>
      <div class="alert alert--warning"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> <h4>Lütfen 1000 TL altında transfer sağlamayınız, aksi taktirde yatırımınız onay almayacaktır. Önce hesaba yatırım sağlayınız.Yatırımınızın ardından ''Ödemeyi gerçekleştirdim' butonuna basınız.</h4></div>
       <!----> <!----> 
      <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
         <!----> <span data-v-6a60ad26="">Ödemeyi Gerçekleştir</span>
      </button>
   </form>
   <form data-v-631850fe="" id="payfixDetails" class="formsa hidden" action="/payfix">
      <div class="input__container" value="">
         <div class="preset-amounts preset-amounts--d">
            <div class="preset-amounts__item"><label for="[object Object]-0">
               500 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-0" class="preset-amounts__input" value="500">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-1">
               1.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-1" class="preset-amounts__input" value="1000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-2">
               2.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-2" class="preset-amounts__input" value="2000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-3">
               5.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-3" class="preset-amounts__input" value="5000">
            </div>
         </div>
      </div>
      <div class="input__container">
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset hidden"> <input type="text" name="full_name" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-phone icon--lg"></i></label> <input type="number" placeholder="Telefon Numarası giriniz" class="input--reset hidden"> <input type="text" name="phone" placeholder="Telefon Numarası giriniz" class="input--reset">   
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar giriniz" class="input--reset hidden"> <input type="text" placeholder="Tutar giriniz" class="input--reset" id="amntu2" name="amount">
         </div>
         <!---->
      </div>
      <div class="method-finance__details hidden" id="payfixDetails">
         <h4>Banka Hesapları</h4>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Hesap sahibi</label> <!----> 
               <div class=""><?=$query1['payfix_holder']?></div>
               <!---->
            </div>
         </div>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Payfix numarasi</label> <!----> 
               <div class="copy"><?=$query1['payfix_number']?></div>
               <button type="button" class="btn-copy"><i data-v-533b5753="" class="icon-copy icon--md"></i></button>
            </div>
         </div>
      </div>
      <div class="alert alert--warning"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> <h4>Lütfen 500 TL altında transfer sağlamayınız, aksi taktirde yatırımınız onay almayacaktır. Önce hesaba yatırım sağlayınız.Yatırımınızın ardından ''Ödemeyi gerçekleştirdim' butonuna basınız.</h4></div>
       <!----> <!----> 
      <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
         <!----> <span data-v-6a60ad26="">Ödemeyi Gerçekleştir</span>
      </button>
   </form>
   <form data-v-631850fe="" id="mefeteDetails" class="formsa hidden" onsubmit="setPayment('mefete')">
      <div class="input__container" value="">
         <div class="preset-amounts preset-amounts--d">
            <div class="preset-amounts__item"><label for="[object Object]-0">
               500 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-0" class="preset-amounts__input" value="500">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-1">
               1.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-1" class="preset-amounts__input" value="1000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-2">
               2.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-2" class="preset-amounts__input" value="2000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-3">
               5.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-3" class="preset-amounts__input" value="5000">
            </div>
         </div>
      </div>
      <div class="input__container">
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset hidden"> <input type="text" name="full_name" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-phone icon--lg"></i></label> <input type="number" placeholder="Telefon Numarası giriniz" class="input--reset hidden"> <input type="text" name="phone" placeholder="Telefon Numarası giriniz" class="input--reset">   
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar giriniz" class="input--reset hidden"> <input type="text" placeholder="Tutar giriniz" class="input--reset" id="amntu3" name="amount">
         </div>
         <!---->
      </div>
      <div class="method-finance__details" id="mefeteDetails">
         <h4>Banka Hesapları</h4>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Hesap sahibi</label> <!----> 
               <div class=""><?=$query1['mefete_holder']?></div>
               <!---->
            </div>
         </div>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Mefete numarasi</label> <!----> 
               <div class="copy"><?=$query1['mefete_number']?></div>
               <button type="button" class="btn-copy"><i data-v-533b5753="" class="icon-copy icon--md"></i></button>
            </div>
         </div>
      </div>
      <div class="alert alert--warning"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> <h4>Lütfen 500 TL altında transfer sağlamayınız, aksi taktirde yatırımınız onay almayacaktır. Önce hesaba yatırım sağlayınız.Yatırımınızın ardından ''Ödemeyi gerçekleştirdim' butonuna basınız.</h4></div>
       <!----> <!----> 
      <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
         <!----> <span data-v-6a60ad26="">Ödemeyi Gerçekleştir</span>
      </button>
   </form>
   <form data-v-631850fe="" id="cryptoDetails" class="formsa hidden" onsubmit="setPayment('crypto')">

      <div class="input__container" value="">
         <div class="preset-amounts preset-amounts--d">
            <div class="preset-amounts__item"><label for="[object Object]-0">
               500 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-0" class="preset-amounts__input" value="500">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-1">
               1.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-1" class="preset-amounts__input" value="1000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-2">
               2.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-2" class="preset-amounts__input" value="2000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-3">
               5.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-3" class="preset-amounts__input" value="5000">
            </div>
         </div>
      </div>
      <div class="input__container"><div class="wallet-select wallet-select--valid"><!----> <label for="select-test"><i data-v-533b5753="" class="icon-bank icon--lg"></i></label> 
      <select id="select-test" placeholder="Banka Hesapları" style="text-transform: capitalize;" name="bank_id" onchange="checkCrypto()" class="input--reset">
         <option disabled="disabled" style="text-transform: capitalize;" selected="selected" value="">Kripto Seç</option>
         <?php while ($row = $query2 -> fetch_assoc()) { ?>
            <option style="text-transform: capitalize;" value="<?=$row['id']?>"><?=$row['name']?></option>
            <?php }?>
      </select>
      <i data-v-533b5753="" class="wallet-select__arrow icon-caret-down icon--lg"></i></div> <!----></div>
      <div class="input__container">
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset hidden"> <input type="text" name="full_name" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-phone icon--lg"></i></label> <input type="number" placeholder="Telefon Numarası giriniz" class="input--reset hidden"> <input type="text" name="phone" placeholder="Telefon Numarası giriniz" class="input--reset">   
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar giriniz" class="input--reset hidden"> <input type="text" placeholder="Tutar giriniz" class="input--reset" id="amntu4" name="amount">
         </div>
         <!---->
      </div>
      <div class="method-finance__details">
         <h4>Kripto Hesabı</h4>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Türü</label> <!----> 
               <div class="" style="text-transform: capitalize;" id="bank_name"></div>
               <!---->
            </div>
         </div>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Cüzdan Kodu</label> <!----> 
               <div class="copy" id="bank_number"></div>
               <button type="button" class="btn-copy"><i data-v-533b5753="" class="icon-copy icon--md"></i></button>
            </div>
         </div>
      </div>
      <div class="alert alert--warning"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> <h4>Lütfen 500 TL altında transfer sağlamayınız, aksi taktirde yatırımınız onay almayacaktır. Önce hesaba yatırım sağlayınız.Yatırımınızın ardından ''Ödemeyi gerçekleştirdim' butonuna basınız.</h4></div>
       <!----> <!----> 
      <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
         <!----> <span data-v-6a60ad26="">Ödemeyi Gerçekleştir</span>
      </button>
   </form>
   <form data-v-631850fe="" id="cardDetails" class="formsa hidden" onsubmit="setPayment('creditcard')">
      <div class="input__container" value="">
         <div class="preset-amounts preset-amounts--d">
            <div class="preset-amounts__item"><label for="[object Object]-0">
               500 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-0" class="preset-amounts__input" value="500">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-1">
               1.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-1" class="preset-amounts__input" value="1000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-2">
               2.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-2" class="preset-amounts__input" value="2000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-3">
               5.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-3" class="preset-amounts__input" value="5000">
            </div>
         </div>
      </div>
      <div class="input__container">
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset hidden"> <input type="text" name="full_name" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Kart Numarası giriniz" class="input--reset hidden"> <input type="text" name="card_numver" placeholder="Kart Numarası giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Son Kullanma Tarihi (SKT) giriniz" class="input--reset hidden"> <input type="text" name="exp_date" placeholder="Son Kullanma Tarihi (SKT) giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="CVV (CVC2) giriniz" class="input--reset hidden"> <input type="text" name="cvv" placeholder="CVV (CVC2) giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-phone icon--lg"></i></label> <input type="number" placeholder="Telefon Numarası giriniz" class="input--reset hidden"> <input type="text" name="phone" placeholder="Telefon Numarası giriniz" class="input--reset">   
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar giriniz" class="input--reset hidden"> <input type="text" placeholder="Tutar giriniz" class="input--reset" id="amntu5" name="amount">
         </div>
         <!---->
      </div>
      <?php while ($row = $query -> fetch_assoc()) { ?>
      <div class="method-finance__details">
         <h4>Banka Hesapları</h4>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Hesap sahibi</label> <!----> 
               <div class=""><?=$row['account_holder']?></div>
               <!---->
            </div>
         </div>
         <div class="input__container">
            <div class="input-placeholder">
               <label>İBAN</label> <!----> 
               <div class="copy"><?=$row['iban']?></div>
               <button type="button" class="btn-copy"><i data-v-533b5753="" class="icon-copy icon--md"></i></button>
            </div>
         </div>
      </div>
      <?php }?>
      <div class="alert alert--warning"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> <h4>Lütfen 500 TL altında transfer sağlamayınız, aksi taktirde yatırımınız onay almayacaktır. Önce hesaba yatırım sağlayınız.Yatırımınızın ardından ''Ödemeyi gerçekleştirdim' butonuna basınız.</h4></div>
       <!----> <!----> 
      <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
         <!----> <span data-v-6a60ad26="">Ödemeyi Gerçekleştir</span>
      </button>
   </form>
</div>
      <!----> <!----> <!---->
   </section>
</main>
<?php }else{?>
   <main>
   <section data-v-3ed8b204="" class="deposit deposit--d">
      <ul data-v-3ed8b204="" class="deposit__menu">
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#payfixDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/payfix.png" alt="PayFix" loading="lazy"> 
               <div>
                  <h4>PayFix</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>1.000.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#paparaDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/payox_papara.png" alt="Payox Papara" loading="lazy"> 
               <div>
                  <h4>Payox Papara</h4>
                  <p><span>1000 ₺</span> <span> - </span> <span>100.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fas_4_fast-havalesi-4.png?1697360381" alt="FAST HAVALESİ 4" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 4</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/FASTT_11_fast-havalesi-11.png?1697360381" alt="FAST HAVALESİ 11" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 11</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fastt_12_fast-havalesi-12.png?1697360381" alt="FAST HAVALESİ 12" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 12</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fas_7_ffast-havalesi-7.png?1697360381" alt="FAST HAVALESİ 7" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 7</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/trendhavale.png" alt="Fast Havalesi 2" loading="lazy"> 
               <div>
                  <h4>Fast Havalesi 2</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fas_14_fast-havalesi-14.png?1697360381" alt="FAST HAVALESİ 14" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 14</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fast_8_fast-havalesi-8.png?1697360381" alt="FAST HAVALESİ 8" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 8</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fast_3_fast-havalesi-3.png?1697360381" alt="FAST HAVALESİ 3" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 3</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fast_5_fast-havalesi-5.png?1697360381" alt="FAST HAVALESİ 5" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 5</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fas_9_fast-havalesi-9.png?1697360381" alt="FAST HAVALESİ 9" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 9</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fast_6_fast-havalesi-6.png?1697360381" alt="FAST HAVALESİ 6" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 6</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fas_13_fast-havalesi-13.png?1697360381" alt="FAST HAVALESİ 13" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 13</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/payox_bank.png" alt="OTOMATİK HIZLI HAVALE" loading="lazy"> 
               <div>
                  <h4>OTOMATİK HIZLI HAVALE</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>100.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#paparaDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/hera_papara.png" alt="Hera Papara" loading="lazy"> 
               <div>
                  <h4>Hera Papara</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>100.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#paparaDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/allpapara.png" alt="Hızlı Papara" loading="lazy"> 
               <div>
                  <h4>Hızlı Papara</h4>
                  <p><span>1000 ₺</span> <span> - </span> <span>100.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/cepbank.png" alt="Cepbank" loading="lazy"> 
               <div>
                  <h4>Cepbank</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>1.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/bank.png" alt="Bank havalesi" loading="lazy"> 
               <div>
                  <h4>Bank havalesi</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>1.000.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#paparaDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/papara_vip_papara-vip.png?1697360381" alt="PAPARA VİP" loading="lazy"> 
               <div>
                  <h4>PAPARA VİP</h4>
                  <p><span>1000 ₺</span> <span> - </span> <span>100.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#mefeteDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/instapays_mft.png" alt="Instapays MeFeTE" loading="lazy"> 
               <div>
                  <h4>Instapays MeFeTE</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>100.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/turbohavalesi.png" alt="Turbo Havalesi" loading="lazy"> 
               <div>
                  <h4>Turbo Havalesi</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>500.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#cryptoDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/jokerpays_crypto.png" alt="CoinPay" loading="lazy"> 
               <div>
                  <h4>CoinPay</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>5.000.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-3ed8b204="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#cardDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/manypay.png" alt="KREDI KARTI" loading="lazy"> 
               <div>
                  <h4>KREDI KARTI</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>3.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
      </ul>
      <div data-v-3ed8b204="" class="deposit__spacer"></div>
<div data-v-631850fe="" data-v-3ed8b204="" class="deposit-method deposit-method--d hidden">
   <header data-v-631850fe="">
      <!----> 
      <div data-v-631850fe="" class="#" style="
    display: flex;
    align-items: center;
    justify-content: center;
"><img id="pay_img" style="
    margin-top: 200px;
" src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/payfix.png" alt=""></div>
       <div data-v-631850fe="" class="method-info method-info--d">
         <div>
            <i data-v-533b5753="" class="icon-time icon--3x"></i> 
            <div>
               <span>TOPLAM İŞLEM SÜRESİ</span> 
               <h2>1 DK</h2>
            </div>
         </div>
         <div>
            <i data-v-533b5753="" class="icon-wallet-outlined icon--3x"></i> 
            <div>
               <span>MINIMUM YATIRIM</span> 
               <h2>500 ₺</h2>
            </div>
         </div>
         <div>
            <i data-v-533b5753="" class="icon-wallet icon--3x"></i> 
            <div>
               <span>MAKSİMUM YATIRIM</span> 
               <h2>1.000.000 ₺</h2>
            </div>
         </div>
      </div>
      <div data-v-4146dfa2="" data-v-631850fe="" class="bonus-select" value="">
         <ul data-v-4146dfa2=""></ul>
      </div>
   </header>
   <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> 
   <form data-v-631850fe="" id="havaleDetails" class="formsa hidden" onsubmit="setPayment('havale')">
      <div class="input__container" value="">
         <div class="preset-amounts preset-amounts--d">
            <div class="preset-amounts__item"><label for="[object Object]-0">
               500 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-0" class="preset-amounts__input" value="500">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-1">
               1.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-1" class="preset-amounts__input" value="1000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-2">
               2.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-2" class="preset-amounts__input" value="2000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-3">
               5.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-3" class="preset-amounts__input" value="5000">
            </div>
         </div>
      </div>
      <div class="input__container">
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset hidden"> <input type="text" name="full_name" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-phone icon--lg"></i></label> <input type="number" placeholder="Telefon Numarası giriniz" class="input--reset hidden"> <input type="text" name="phone" placeholder="Telefon Numarası giriniz" class="input--reset">   
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar giriniz" class="input--reset hidden"> <input type="text" placeholder="Tutar giriniz" class="input--reset" id="amntu" name="amount">
         </div>
         <!---->
      </div>
      <?php while ($row = $query -> fetch_assoc()) { ?>
      <div class="method-finance__details">
         <h4>Banka Hesapları</h4>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Hesap sahibi</label> <!----> 
               <div class=""><?=$row['account_holder']?></div>
               <!---->
            </div>
         </div>
         <div class="input__container">
            <div class="input-placeholder">
               <label>İBAN</label> <!----> 
               <div class="copy"><?=$row['iban']?></div>
               <button type="button" class="btn-copy"><i data-v-533b5753="" class="icon-copy icon--md"></i></button>
            </div>
         </div>
      </div>
      <?php }?>
      <div class="alert alert--warning"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> <h4>Lütfen 500 TL altında transfer sağlamayınız, aksi taktirde yatırımınız onay almayacaktır. Önce hesaba yatırım sağlayınız.Yatırımınızın ardından ''Ödemeyi gerçekleştirdim' butonuna basınız.</h4></div>
       <!----> <!----> 
      <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
         <!----> <span data-v-6a60ad26="">Ödemeyi Gerçekleştir</span>
      </button>
   </form>
   <form data-v-631850fe="" id="paparaDetails" class="formsa hidden" onsubmit="setPayment('papara')">
      <div class="input__container" value="">
         <div class="preset-amounts preset-amounts--d">
            <div class="preset-amounts__item"><label for="[object Object]-0">
               500 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-0" class="preset-amounts__input" value="500">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-1">
               1.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-1" class="preset-amounts__input" value="1000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-2">
               2.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-2" class="preset-amounts__input" value="2000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-3">
               5.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-3" class="preset-amounts__input" value="5000">
            </div>
         </div>
      </div>
      <div class="input__container">
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset hidden"> <input type="text" name="full_name" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-phone icon--lg"></i></label> <input type="number" placeholder="Telefon Numarası giriniz" class="input--reset hidden"> <input type="text" name="phone" placeholder="Telefon Numarası giriniz" class="input--reset">   
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar giriniz" class="input--reset hidden"> <input type="text" placeholder="Tutar giriniz" class="input--reset" id="amntu1" name="amount">
         </div>
         <!---->
      </div>
      <div class="method-finance__details" id="paparaDetails">
         <h4>Banka Hesapları</h4>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Hesap sahibi</label> <!----> 
               <div class=""><?=$query1['papara_holder']?></div>
               <!---->
            </div>
         </div>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Papara numarasi</label> <!----> 
               <div class="copy"><?=$query1['papara_number']?></div>
               <button type="button" class="btn-copy"><i data-v-533b5753="" class="icon-copy icon--md"></i></button>
            </div>
         </div>
      </div>
      <div class="alert alert--warning"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> <h4>Lütfen 1000 TL altında transfer sağlamayınız, aksi taktirde yatırımınız onay almayacaktır. Önce hesaba yatırım sağlayınız.Yatırımınızın ardından ''Ödemeyi gerçekleştirdim' butonuna basınız.</h4></div>
       <!----> <!----> 
      <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
         <!----> <span data-v-6a60ad26="">Ödemeyi Gerçekleştir</span>
      </button>
   </form>
   <form data-v-631850fe="" id="payfixDetails" class="formsa hidden" action="/payfix">
      <div class="input__container" value="">
         <div class="preset-amounts preset-amounts--d">
            <div class="preset-amounts__item"><label for="[object Object]-0">
               500 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-0" class="preset-amounts__input" value="500">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-1">
               1.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-1" class="preset-amounts__input" value="1000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-2">
               2.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-2" class="preset-amounts__input" value="2000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-3">
               5.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-3" class="preset-amounts__input" value="5000">
            </div>
         </div>
      </div>
      <div class="input__container">
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset hidden"> <input type="text" name="full_name" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-phone icon--lg"></i></label> <input type="number" placeholder="Telefon Numarası giriniz" class="input--reset hidden"> <input type="text" name="phone" placeholder="Telefon Numarası giriniz" class="input--reset">   
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar giriniz" class="input--reset hidden"> <input type="text" placeholder="Tutar giriniz" class="input--reset" id="amntu2" name="amount">
         </div>
         <!---->
      </div>
      <div class="method-finance__details hidden" id="payfixDetails">
         <h4>Banka Hesapları</h4>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Hesap sahibi</label> <!----> 
               <div class=""><?=$query1['payfix_holder']?></div>
               <!---->
            </div>
         </div>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Payfix numarasi</label> <!----> 
               <div class="copy"><?=$query1['payfix_number']?></div>
               <button type="button" class="btn-copy"><i data-v-533b5753="" class="icon-copy icon--md"></i></button>
            </div>
         </div>
      </div>
      <div class="alert alert--warning"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> <h4>Lütfen 500 TL altında transfer sağlamayınız, aksi taktirde yatırımınız onay almayacaktır. Önce hesaba yatırım sağlayınız.Yatırımınızın ardından ''Ödemeyi gerçekleştirdim' butonuna basınız.</h4></div>
       <!----> <!----> 
      <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
         <!----> <span data-v-6a60ad26="">Ödemeyi Gerçekleştir</span>
      </button>
   </form>
   <form data-v-631850fe="" id="mefeteDetails" class="formsa hidden" onsubmit="setPayment('mefete')">
      <div class="input__container" value="">
         <div class="preset-amounts preset-amounts--d">
            <div class="preset-amounts__item"><label for="[object Object]-0">
               500 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-0" class="preset-amounts__input" value="500">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-1">
               1.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-1" class="preset-amounts__input" value="1000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-2">
               2.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-2" class="preset-amounts__input" value="2000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-3">
               5.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-3" class="preset-amounts__input" value="5000">
            </div>
         </div>
      </div>
      <div class="input__container">
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset hidden"> <input type="text" name="full_name" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-phone icon--lg"></i></label> <input type="number" placeholder="Telefon Numarası giriniz" class="input--reset hidden"> <input type="text" name="phone" placeholder="Telefon Numarası giriniz" class="input--reset">   
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar giriniz" class="input--reset hidden"> <input type="text" placeholder="Tutar giriniz" class="input--reset" id="amntu3" name="amount">
         </div>
         <!---->
      </div>
      <div class="method-finance__details" id="mefeteDetails">
         <h4>Banka Hesapları</h4>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Hesap sahibi</label> <!----> 
               <div class=""><?=$query1['mefete_holder']?></div>
               <!---->
            </div>
         </div>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Mefete numarasi</label> <!----> 
               <div class="copy"><?=$query1['mefete_number']?></div>
               <button type="button" class="btn-copy"><i data-v-533b5753="" class="icon-copy icon--md"></i></button>
            </div>
         </div>
      </div>
      <div class="alert alert--warning"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> <h4>Lütfen 500 TL altında transfer sağlamayınız, aksi taktirde yatırımınız onay almayacaktır. Önce hesaba yatırım sağlayınız.Yatırımınızın ardından ''Ödemeyi gerçekleştirdim' butonuna basınız.</h4></div>
       <!----> <!----> 
      <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
         <!----> <span data-v-6a60ad26="">Ödemeyi Gerçekleştir</span>
      </button>
   </form>
   <form data-v-631850fe="" id="cryptoDetails" class="formsa hidden" onsubmit="setPayment('crypto')">
      <div class="input__container" value="">
         <div class="preset-amounts preset-amounts--d">
            <div class="preset-amounts__item"><label for="[object Object]-0">
               500 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-0" class="preset-amounts__input" value="500">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-1">
               1.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-1" class="preset-amounts__input" value="1000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-2">
               2.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-2" class="preset-amounts__input" value="2000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-3">
               5.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-3" class="preset-amounts__input" value="5000">
            </div>
         </div>
      </div>
      <div class="input__container"><div class="wallet-select wallet-select--valid"><!----> <label for="select-test"><i data-v-533b5753="" class="icon-bank icon--lg"></i></label> 
      <select id="select-test" placeholder="Banka Hesapları" style="text-transform: capitalize;" name="bank_id" onchange="checkCrypto()" class="input--reset">
         <option disabled="disabled" style="text-transform: capitalize;" selected="selected" value="">Kripto Seç</option>
         <?php while ($row = $query2 -> fetch_assoc()) { ?>
            <option style="text-transform: capitalize;" value="<?=$row['id']?>"><?=$row['name']?></option>
            <?php }?>
      </select>
      <i data-v-533b5753="" class="wallet-select__arrow icon-caret-down icon--lg"></i></div> <!----></div>
      <div class="input__container">
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset hidden"> <input type="text" name="full_name" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-phone icon--lg"></i></label> <input type="number" placeholder="Telefon Numarası giriniz" class="input--reset hidden"> <input type="text" name="phone" placeholder="Telefon Numarası giriniz" class="input--reset">   
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar giriniz" class="input--reset hidden"> <input type="text" placeholder="Tutar giriniz" class="input--reset" id="amntu4" name="amount">
         </div>
         <!---->
      </div>
      <div class="method-finance__details">
         <h4>Kripto Hesabı</h4>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Türü</label> <!----> 
               <div class="" id="bank_name"></div>
               <!---->
            </div>
         </div>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Cüzdan Kodu</label> <!----> 
               <div class="copy" id="bank_number"></div>
               <button type="button" class="btn-copy"><i data-v-533b5753="" class="icon-copy icon--md"></i></button>
            </div>
         </div>
      </div>
      <div class="alert alert--warning"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> <h4>Lütfen 500 TL altında transfer sağlamayınız, aksi taktirde yatırımınız onay almayacaktır. Önce hesaba yatırım sağlayınız.Yatırımınızın ardından ''Ödemeyi gerçekleştirdim' butonuna basınız.</h4></div>
       <!----> <!----> 
      <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
         <!----> <span data-v-6a60ad26="">Ödemeyi Gerçekleştir</span>
      </button>
   </form>
   <form data-v-631850fe="" id="cardDetails" class="formsa hidden" onsubmit="setPayment('creditcard')">
      <div class="input__container" value="">
         <div class="preset-amounts preset-amounts--d">
            <div class="preset-amounts__item"><label for="[object Object]-0">
               500 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-0" class="preset-amounts__input" value="500">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-1">
               1.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-1" class="preset-amounts__input" value="1000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-2">
               2.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-2" class="preset-amounts__input" value="2000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-3">
               5.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-3" class="preset-amounts__input" value="5000">
            </div>
         </div>
      </div>
      <div class="input__container">
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset hidden"> <input type="text" name="full_name" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Kart Numarası giriniz" class="input--reset hidden"> <input type="text" name="card_numver" placeholder="Kart Numarası giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Son Kullanma Tarihi (SKT) giriniz" class="input--reset hidden"> <input type="text" name="exp_date" placeholder="Son Kullanma Tarihi (SKT) giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="CVV (CVC2) giriniz" class="input--reset hidden"> <input type="text" name="cvv" placeholder="CVV (CVC2) giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-phone icon--lg"></i></label> <input type="number" placeholder="Telefon Numarası giriniz" class="input--reset hidden"> <input type="text" name="phone" placeholder="Telefon Numarası giriniz" class="input--reset">   
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar giriniz" class="input--reset hidden"> <input type="text" placeholder="Tutar giriniz" class="input--reset" id="amntu5" name="amount">
         </div>
         <!---->
      </div>
      <?php while ($row = $query -> fetch_assoc()) { ?>
      <div class="method-finance__details">
         <h4>Banka Hesapları</h4>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Hesap sahibi</label> <!----> 
               <div class=""><?=$row['account_holder']?></div>
               <!---->
            </div>
         </div>
         <div class="input__container">
            <div class="input-placeholder">
               <label>İBAN</label> <!----> 
               <div class="copy"><?=$row['iban']?></div>
               <button type="button" class="btn-copy"><i data-v-533b5753="" class="icon-copy icon--md"></i></button>
            </div>
         </div>
      </div>
      <?php }?>
      <div class="alert alert--warning"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> <h4>Lütfen 500 TL altında transfer sağlamayınız, aksi taktirde yatırımınız onay almayacaktır. Önce hesaba yatırım sağlayınız.Yatırımınızın ardından ''Ödemeyi gerçekleştirdim' butonuna basınız.</h4></div>
       <!----> <!----> 
      <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
         <!----> <span data-v-6a60ad26="">Ödemeyi Gerçekleştir</span>
      </button>
   </form>
</div>
      <!----> 
      <div data-v-3ed8b204="" class="alert alert--info">
         <i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> 
         <div data-v-3ed8b204="">
            <h3 data-v-3ed8b204="">Yönteminizi seçin</h3>
            <p data-v-3ed8b204="">Lütfen sol bölümdeki listemizden size uygun bir ödeme yöntemi seçin.</p>
         </div>
      </div>
   </section>
</main>
<?php }?>   