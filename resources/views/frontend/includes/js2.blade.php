<!-- ALL JAVASCRIPT -->         
        <script src="{{asset('frontend')}}/js/jquery.js"></script>
        <script src="{{asset('frontend')}}/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{asset('frontend')}}/js/custom.js"></script>

        <script src="{{asset('starr')}}/dist/starrr.js"></script>
  <script>
    $('#star1').starrr({
      change: function(e, value){
        if (value) {
          $('.your-choice-was').show();
          $('.choice').text(value);
        } else {
          $('.your-choice-was').hide();
        }
      }
    });

  </script>
  <script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-39205841-5', 'dobtco.github.io');
    ga('send', 'pageview');
  </script>

  <script type="text/javascript"
  >
    $('#ratingsForm').change('.star', function(e) {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    }
  });
  $.ajax({
    type: 'POST',
    cache: false,
    dataType: 'JSON',
    url: $(this).attr('action'),
    data: $(this).serialize(),
    success: function(data) {
      console.log(data);
    }
  });
});

    
  </script>


  

			