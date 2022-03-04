<footer>

    <div class="my__footer">

           <div class="footer__content">
               <div class="row justify-content-center align-items-center">
                   <div class="col-12 col-md-6 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center flex-column mt-5">
               <a href="/"><img class="logo mr-5" src="../assets/img/footer__logo.png" alt="panarams"> </a>
                       
                   </div>
               
                   <div class="col-12 col-md-6 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center flex-column mt-5">
                       
                          <div class="d-flex align-items-center ml-5 mb-0">
                                <span class="mb-0 mr-2" id="location"></span>
                                <h6 class="mb-0"><span id="temp"></span>°C</h6>
                                <img style="width: 50px; height: 50px" id="icon" alt="img" />
                           </div>
                   </div>
                   
                   <div class="col-12 col-md-12 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center flex-column mt-5">
                      <img class="radisson__logo" src="../assets/img/raddisson.png" alt="raddisson">
                   </div>
               </div>
           </div>



           <div class="footer__content">
               <div class="row justify-content-center align-items-center">
                   <div class="col-12 col-md-6 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center flex-column mt-5">
                       <span>Скачать приложение</span>
                       <div class="mt-3">
                           <img class="links" src="../assets/img/playmarket.png" alt="play-market">
                           <img class="links" src="../assets/img/apple.png" alt="apple">
                       </div>
                   </div>
               
                   <div class="col-12 col-md-6 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center flex-column mt-5">
                       <span>Социальные сети</span>
                       <div class="mt-3">
                           <img class="links" src="../assets/img/youtube.png" alt="you-tube">
                           <img class="links" src="../assets/img/twitter.png" alt="twitter">
                           <img class="links" src="../assets/img/pinteres.png" alt="pinteres">
                           <img class="links" src="../assets/img/linkedin.png" alt="linkedin">
                           <img class="links" src="../assets/img/facebook.png" alt="facebook">
                           <img class="links" src="../assets/img/instagram.png" alt="instagram">
                           <img class="links" src="../assets/img/twitter.png" alt="twitter">
                       </div>
                   </div>
                   
                   <div class="col-12 col-md-12 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center flex-column mt-5">
                        <div>
                            <img src="/assets/icons/phone.svg" alt="phone">
                            <a href="tel:+998909164939">+998 90 916 49 39</a>
                        </div>
                        <div class="mt-3">
                            <img src="/assets/icons/mail.svg" alt="mail">
                            <a href="mailto:t.tashtanov@panarams.uz">t.tashtanov@panarams.uz</a>
                        </div>
                   </div>
               </div>
           </div>


              <div class="developer mt-5 d-flex flex-column justify-content-center align-items-center">
                <p>Copyright © 2021–2022 Panarams.uz. Все права защищены.</p>
                <a href="https://marketingconcept.uz/">
                    Разработано в &copy; Marketing Concept.
                </a>
            </div>
    </div>
</footer>

<script src="/assets/libs/jquery/jquery-3.5.1.min.js"></script>
<script src='/assets/libs/datepicker/datepicker.js'></script>
<script src="/assets/scripts/datePicker.js"></script>
<script src="/assets/libs/fancybox/jquery.fancybox.min.js"></script>
<script src="/assets/libs/jquery_mask/jquery.mask.min.js"></script>
<script src="/assets/libs/owl_carousel/owl.carousel.min.js"></script>
<script src="/assets/libs/aos/aos.js"></script>
<script src="/assets/scripts/main.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
      var swiper = new Swiper(".mySwiper", {
        cssMode: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
          },
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        mousewheel: true,
        keyboard: true,   


      });



      link = `https://api.openweathermap.org/data/2.5/weather?lat=41.2646&lon=69.2163&appid=b1e6729d2d8a26e7641fb88bd9d945b8`;
    //   link = `https://api.openweathermap.org/data/2.5/weather?lat=40.1158&lon=67.8422&appid=b1e6729d2d8a26e7641fb88bd9d945b8`;

        let request = new XMLHttpRequest();

        request.open("GET", link, true);

        request.onload = function () {
        let obj = JSON.parse(this.response);
        console.log(obj);
        document.getElementById("location").innerHTML = obj.name;
        document.getElementById("temp").innerHTML = Math.round(
            obj.main.temp - 273.15
        ); //- 273.15
        document.getElementById("icon").src =
            `http://openweathermap.org/img/w/` + obj.weather[0].icon + ".png";
        };

        if (request.status == 200) {
        console.log("ERROR");
        }

        request.send();

</script>



</body>

</html>