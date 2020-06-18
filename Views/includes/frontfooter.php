<footer id="footer" class="mt-5 cb-custom">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mt-5">
        <div class="float-left">
          <label for="">Infocar@gmail.com</label>
          <p>
            <a href="">
              <img src="Views/assets/images/Icon ionic-logo-facebook.png" alt="">
            </a>
            <a href="">
              <img src="Views/assets/images/Icon awesome-instagram.png" class="ml-1" alt="">
            </a>
          </p>
        </div>
      </div>
      <div class="col-lg-6 mt-5">
        <div class="float-lg-right">
          <div class="row">
            <div class="col-lg-3 float-lg-right">
              <img src="Views/assets/images/Icon feather-map-pin.png" class="mt-2" alt="">
            </div>
            <div class="col-lg-9 float-lg-left">
              <label for="">Kosove, Ferizaj Rr. 1 tetori</label>
              <label for=""> </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="Views/assets/js/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script>
<script src="Views/assets/js/popper.min.js"></script>
<script src="Views/assets/js/bootstrap.min.js"></script>
<script src="Views/assets/js/main.js"></script>
<script src="Views/assets/js/moment.min.js"></script>
<script src="Views/assets/js/datepicker.min.js"></script>
<script src="Views/assets/js/lightslider.js"></script>
<script type="text/javascript"
src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
<script src="Views/assets/js/gtranslate.js"></script>
<script>
$(document).ready(function() {
$("#gallery-slider").lightSlider({
loop: true,
controls: true,
keyPress: true
});
$('#image-gallery').lightSlider({
gallery: true,
item: 1,
thumbItem: 9,
slideMargin: 0,
speed: 500,
onSliderLoad: function() {
$('#image-gallery').removeClass('cS-hidden');
}
});
});
</script>
</html>