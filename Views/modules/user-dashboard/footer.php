</div>
</div>
<script src="Views/assets/js/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script>
<script src="Views/assets/js/popper.min.js"></script>
<script src="Views/assets/js/bootstrap.min.js"></script>
<script src="Views/assets/js/main.js"></script>
<script src="Views/assets/js/moment.min.js"></script>
<script src="Views/assets/js/datepicker.min.js"></script>
<script src="Views/assets/fileuploader/jquery.fileuploader.min.js" type="text/javascript"></script>
<script src="Views/assets/fileuploader/custom.js" type="text/javascript"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2">
</script>
<script src="Views/assets/js/gtranslate.js"></script>
<script>
$('input[date="datepicker"]').daterangepicker({
  "singleDatePicker": true,
  "dateLimit": {
    "days": 7
  },
  "alwaysShowCalendars": true,
  "minDate": completeDate,

});
</script>
<!-- Initialize Quill editor -->
<script>
$(document).ready(function() {
  $('input[name="files"]').fileuploader({
    // Options will go here
  });
});
</script>
</body>

</html>