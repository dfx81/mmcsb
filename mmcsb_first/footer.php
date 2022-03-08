    <footer class="footer bar-color">
      <div class="container-lg footer-items">
        <span class="">&copy; 2021, MMCSB</span>
        <div class="socials">
          <?php
          if(is_active_sidebar('footer-1')) {
            dynamic_sidebar('footer-1');
          }
          ?>
        </div>
      </div>
    </footer>
    <?php wp_footer();?>
  </body>
  </html>