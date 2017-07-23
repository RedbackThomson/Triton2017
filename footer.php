<footer id="myFooter">
  <div class="container">
    <div class="subscribe">
      <div class="row">
        <div class="col-sm-12 subscribe__text">
          <?php _e('Stay informed.', 'en-US'); ?><br/>
          <?php _e('Subscribe to our email list.', 'en-US'); ?>
        </div>
        <form class="col-sm-12 col-lg-8 offset-lg-2 subscribe__form"
          action="//news.us14.list-manage.com/subscribe/post?u=a8b171812d49ace19d1357277&id=036c1915ae"
          method="post">
          <div class="input-group">
            <input type="email" class="subscribe__input form-control"
              placeholder="<?php _e('Email', 'en-US'); ?>" name="email" />
            <span class="input-group-btn">
              <button type="submit" class="subscribe__button btn btn-primary">
                <?php _e('Subscribe', 'en-US'); ?>
              </button>
            </span>
          </div>
        </form>
      </div>
    </div>
    
    <div class="footer-divider"></div>

    <div class="row">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="footer-link">
              <a href="aboutus.html"><?php _e('About', 'en-US') ?></a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="footer-link">
              <a href="contactus.html"><?php _e('Contact Us', 'en-US') ?></a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="footer-link">
              <a href="makeasubmission.html">
                <?php _e('Submit a Story', 'en-US'); ?>
              </a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="footer-link">
              <a href="jobs.html"><?php _e('Jobs', 'en-US'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="social">
          <a href="https://www.facebook.com/thetritonnews/" class="social__link social__link--facebook"><i class="fa fa-lg fa-facebook"></i></a>
          <a href="https://twitter.com/Triton_News/" class="social__link social__link--twitter"><i class="fa fa-lg fa-twitter"></i></a>
          <a href="https://www.instagram.com/triton_news/" class="social__link social__link--instagram"><i class="fa fa-lg fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="footer-copyright">
      <p>Content Copyright © 2016-2017 The Triton. The Triton is not in anyway
        affiliated with UC San Diego and the opinions expressed therein are not the
        overall public opinions of UCSD, ASUCSD, or our staff. Materials produced
        by The Triton do not reflect the views of the Regents of the University of
        California and the Regents do not endorse, warrant, or otherwise take
        responsibility for said content. Editorials represent the majority opinion
        of The Triton Editorial Board.</p>
    </div>
  </div>
</footer>

<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top"
  role="button" data-toggle="tooltip" data-placement="left">
  <span class="glyphicon glyphicon-chevron-up"></span>
</a>

<?php wp_footer(); ?>
</body>
</html>