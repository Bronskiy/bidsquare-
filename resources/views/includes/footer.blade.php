<div class="row-copyright">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <p class="mb-0">© 2014-<?php echo date("Y"); ?> QED Realty Pty Limited ABN 58 168 180 774 | NSW Corporation (Real Estate) License 10020460 | <a href="/terms-and-conditions">Terms &amp; Conditions</a><br><a href="https://qedrealty.com.au/" target="_blank">qedrealty.com.au</a> | <a href="https://cls.com.au/" target="_blank">cls.com.au</a> | <a href="https://creditbroker.com.au/" target="_blank">creditbroker.com.au</a></p>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="social-box">
        @foreach ($HomePageData as $value)

        <a href="{{ $value->facebook_link }}"><i class="fa fa-facebook"></i></a>
        <a href="{{ $value->twitter_link }}"><i class="fa fa-twitter"></i></a>
        <a href="{{ $value->linkedin_link }}" target="_blank"><i class="fa fa-linkedin"></i></a>

        @endforeach
      </div>
    </div>
  </div>
</div>
