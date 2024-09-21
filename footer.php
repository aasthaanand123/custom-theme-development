
<!-- footer -->
<footer>
  <div class="footer-content">
    <p>&copy; 2024 My RECIPE Book. All Rights Reserved.</p>
    <!-- Footer menu display -->
    <?php wp_nav_menu( array(
            'theme_location'=>"footer_menu",
        ) )
        ?>
        <!-- Footer menu display -->
  </div>
</footer>
<!-- footer -->
    <?php wp_footer(); ?>
</body>
</html>