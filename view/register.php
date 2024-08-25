<style>
    .app-footer{
        display: none;
    }
</style>
<main>
   <div class="observer" style="top: 70px;"></div>
   <section data-v-0f33c399="" class="register register--d">
      <div data-v-0f33c399="" class="register__container">
         <div data-v-0f33c399="" class="register__brand">
            <img data-v-0f33c399="" src="/assets/images/logo-dark.png" alt="MeritKing"> 
            <h3 data-v-0f33c399="">UMUT DEĞİL PARA DAĞITIYORUZ!</h3>
         </div>
         <form data-v-0f33c399="" id="register_form" onsubmit="signUp()" action="javascript:;">
            <div data-v-0f33c399="" class="register__step" id="stp1">
               <div data-v-192295e2="" data-v-0f33c399="" class="auth-input auth-input--light">
                  <div data-v-192295e2="" class="auth-input__wrapper">
                     <div data-v-192295e2="" class="auth-input__root">
                        <div data-v-192295e2="" class="auth-input__icon"><i data-v-3ee02676="" data-v-192295e2="" class="icon-id-card icon--md"></i></div>
                        <input data-v-192295e2="" type="text" placeholder="Adınız" class="input--reset"> <!---->
                     </div>
                  </div>
                  <!---->
               </div>
               <div data-v-192295e2="" data-v-0f33c399="" class="auth-input auth-input--light">
                  <div data-v-192295e2="" class="auth-input__wrapper">
                     <div data-v-192295e2="" class="auth-input__root">
                        <div data-v-192295e2="" class="auth-input__icon"><i data-v-3ee02676="" data-v-192295e2="" class="icon-id-card icon--md"></i></div>
                        <input data-v-192295e2="" type="text" placeholder="Soyadınız" class="input--reset"> <!---->
                     </div>
                  </div>
                  <!---->
               </div>
               <div data-v-192295e2="" data-v-0f33c399="" class="auth-input auth-input--light">
                  <div data-v-192295e2="" class="auth-input__wrapper">
                     <div data-v-192295e2="" class="auth-input__root">
                        <div data-v-192295e2="" class="auth-input__icon"><i data-v-3ee02676="" data-v-192295e2="" class="icon-users icon--md"></i></div>
                        <input data-v-192295e2="" type="text" name="login" placeholder="Kullanıcı Adınız" class="input--reset"> <!---->
                     </div>
                  </div>
                  <!---->
               </div>
               <div data-v-192295e2="" data-v-0f33c399="" class="auth-input auth-input--light">
                  <div data-v-192295e2="" class="auth-input__wrapper">
                     <div data-v-192295e2="" class="auth-input__root">
                        <div data-v-192295e2="" class="auth-input__icon"><i data-v-3ee02676="" data-v-192295e2="" class="icon-envelope icon--md"></i></div>
                        <input data-v-192295e2="" type="email" placeholder="E-Mail" class="input--reset"> <!---->
                     </div>
                  </div>
                  <!---->
               </div>
               <div data-v-192295e2="" data-v-0f33c399="" class="auth-input auth-input--light">
                  <div data-v-192295e2="" class="auth-input__wrapper">
                     <div data-v-192295e2="" class="auth-input__root">
                        <div data-v-192295e2="" class="auth-input__icon"><i data-v-3ee02676="" data-v-192295e2="" class="icon-lock icon--md"></i></div>
                        <input data-v-192295e2="" type="password" name="password" placeholder="Şifreniz" class="input--reset"> <button data-v-192295e2="" type="button" class="auth-input__toggle"><i data-v-3ee02676="" data-v-192295e2="" class="icon-eye-slash icon--sm"></i></button>
                     </div>
                  </div>
                  <!---->
               </div>
               <div data-v-192295e2="" data-v-0f33c399="" class="auth-input auth-input--light">
                  <div data-v-192295e2="" class="auth-input__wrapper">
                     <div data-v-192295e2="" class="auth-input__root">
                        <div data-v-192295e2="" class="auth-input__icon"><i data-v-3ee02676="" data-v-192295e2="" class="icon-lock icon--md"></i></div>
                        <input data-v-192295e2="" type="password" placeholder="Şifrenizi Tekrar Girin" class="input--reset"> <button data-v-192295e2="" type="button" class="auth-input__toggle"><i data-v-3ee02676="" data-v-192295e2="" class="icon-eye-slash icon--sm"></i></button>
                     </div>
                  </div>
                  <!---->
               </div>
               <button data-v-0f33c399="" type="button" onclick="stepupa('stp2')" class="btn btn--block btn--brand btn--uppercase register-button step-button">
               Sonraki AdIma Geç
               </button>
            </div>
            <div data-v-0f33c399="" class="register__step hidden" id="stp2">
            <button data-v-0f33c399="" type="button"  onclick="stepupa('stp1')" class="btn btn--flex btn--dark btn--sm btn--uppercase back-button"><i data-v-3ee02676="" data-v-0f33c399="" class="icon-chevron-left icon--md"></i> <span data-v-0f33c399="">Geri Dön</span></button> 
            <div data-v-192295e2="" data-v-0f33c399="" class="auth-input auth-input--light">
                <div data-v-192295e2="" class="auth-input__wrapper">
                    <div data-v-192295e2="" class="auth-input__root">
                        <div data-v-192295e2="" class="auth-input__icon"><i data-v-3ee02676="" data-v-192295e2="" class="icon-id-card icon--md"></i></div>
                        <input data-v-192295e2="" type="number" placeholder="T.C Kimlik No" class="input--reset"> <!---->
                    </div>
                </div>
                <!---->
            </div>
            <div data-v-5c52e658="" data-v-0f33c399="" class="auth-phone-input auth-phone-input--light">
                <div data-v-5c52e658="" class="auth-phone-input__wrapper">
                    <div data-v-5c52e658="" class="auth-phone-input__root">
                        <div data-v-5c52e658="" class="auth-phone-input__icon"><i data-v-3ee02676="" data-v-5c52e658="" class="icon-mobile icon--md"></i></div>
                        <div data-v-5c52e658="" class="auth-phone-input__input"><span data-v-5c52e658="">05</span> <input data-v-5c52e658="" type="tel" placeholder="Telefon" class="input--reset"></div>
                    </div>
                </div>
                <!---->
            </div>
            <div data-v-192295e2="" data-v-0f33c399="" class="auth-input auth-input--light">
                <div data-v-192295e2="" class="auth-input__wrapper">
                    <div data-v-192295e2="" class="auth-input__root">
                        <div data-v-192295e2="" class="auth-input__icon"><i data-v-3ee02676="" data-v-192295e2="" class="icon-shield-solid icon--md"></i></div>
                        <input data-v-192295e2="" type="text" placeholder="Güvenlik Sorusu" class="input--reset"> <!---->
                    </div>
                </div>
                <!---->
            </div>
            <div data-v-192295e2="" data-v-0f33c399="" class="auth-input auth-input--light">
                <div data-v-192295e2="" class="auth-input__wrapper">
                    <div data-v-192295e2="" class="auth-input__root">
                        <div data-v-192295e2="" class="auth-input__icon"><i data-v-3ee02676="" data-v-192295e2="" class="icon-shield-check icon--md"></i></div>
                        <input data-v-192295e2="" type="text" placeholder="Güvenlik Cevabı" class="input--reset"> <!---->
                    </div>
                </div>
                <!---->
            </div>
            <div data-v-36e800ac="" data-v-0f33c399="" class="auth-panel">
                <h4 data-v-36e800ac="">Giriş Kurulum Menusu</h4>
                <div data-v-36e800ac="" class="auth-panel__body">
                    <div data-v-7ad1488a="" data-v-0f33c399="" class="auth-radio" label="auth.extra_auth" value="2" data-v-36e800ac="">
                        <div data-v-7ad1488a="" class="auth-radio-group">
                        <div data-v-7ad1488a="" class="auth-radio-group__item auth-radio-group__item--active"><label data-v-7ad1488a="" for="2-0">
                            Mail ile girişi aktif et
                            </label> <i data-v-3ee02676="" data-v-7ad1488a="" class="icon-circle-dot icon--md"></i> <input data-v-7ad1488a="" type="radio" name="extra-auth" id="2-0" class="auth-radio-group__input" value="2">
                        </div>
                        <div data-v-7ad1488a="" class="auth-radio-group__item"><label data-v-7ad1488a="" for="1-1">
                            Sms ile girişi aktif et
                            </label> <i data-v-3ee02676="" data-v-7ad1488a="" class="icon-circle icon--md"></i> <input data-v-7ad1488a="" type="radio" name="extra-auth" id="1-1" class="auth-radio-group__input" value="1">
                        </div>
                        <div data-v-7ad1488a="" class="auth-radio-group__item"><label data-v-7ad1488a="" for="0-2">
                            Tümünü devre dışı bırak
                            </label> <i data-v-3ee02676="" data-v-7ad1488a="" class="icon-circle icon--md"></i> <input data-v-7ad1488a="" type="radio" name="extra-auth" id="0-2" class="auth-radio-group__input" value="0">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <label data-v-6e81e162="" data-v-0f33c399="" for="register-tnc" class="auth-checkbox">
                <div data-v-6e81e162="" class="auth-checkbox__root"><input data-v-6e81e162="" id="register-tnc" type="checkbox" value="false"> <i data-v-3ee02676="" data-v-6e81e162="" class="auth-checkbox__box icon-hexagon icon--md"></i></div>
                <span data-v-6e81e162="">Genel Kural ve Şartları okudum, kabul ediyorum</span>
            </label>
            <div data-v-0f33c399="" class="register__submit">
                <button data-v-0f33c399="" type="submit" class="btn btn--flex btn--brand btn--uppercase register-button"><i data-v-3ee02676="" data-v-0f33c399="" class="icon-party-horn icon--lg"></i> <span data-v-0f33c399="">Şimdi Kayıt Olun</span></button> 
                <div data-v-0f33c399="" class="turnstile">
                    <div class="turnstile__wrapper">
                        <div data-theme="light">
                        <div style="border: 0px; margin: 0px; padding: 0px;"><input type="hidden" name="cf-turnstile-response" id="cf-chl-widget-e8xg1_response" value="0.wBSiP4pMyZTXJHhqlNgaK_b41jyRu00tMNHmo_LwB_YmLI5aUJM0MOvrWC8tsIt9QMO6v38vY-THzdYTDKV4kXsAPcyLJX0xa282SUUfV6ecEC4uF5rd27MnWdWbziCmLQ5f57OCxfbrbiDO6QK9HmgGf0tbTbW3NqHX6MLxC3c1Pnl5LB5ePE-hz5j99JyW9q8q-oalXXjDxHUutAdY9tvlIhwzraZ5Tq4ooBFkJoqmRvH2bI4MeTwLd6aCqyXuqbRp-a--kUBAr6M2SbBLLv5XGc-e5gKx3ejK0LQJyVXUT9-9CvnZGUkbiN4N06Hb4NA3DZgVqzPum5ZpDh-XSxEtCKKdvQEQKxvNmIpyE-nxk0LsQyF_2Li9oBoR59aJgYP4BeaQMyo5Na85NKPgQjJY44yA7lK7L6DNN8c5i_xttGi2z5IELJZFZ3o1l8wi.fws1Q7lUJ47VyCXKJ6yZsw.2d8a804de7efd84206e78623586fb53a7dfad3b249c3f419344c159e73c6d2ec"></div>
                        </div>
                    </div>
                    <!---->
                </div>
            </div>
            <p data-v-0f33c399="">Cloudflare is a global cloud platform designed to make everything you connect to the Internet secure, private, fast and reliable.</p>
            </div>
         </form>
      </div>
   </section>
</main>