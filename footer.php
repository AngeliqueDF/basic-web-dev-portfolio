<?php wp_footer(); ?>
</body>
<footer class="main-footer">
    <nav class="footer-nav">
        <?php wp_nav_menu(array(
            'theme_location' => 'HeaderMenuLocation'
        ));
        ?>
    </nav>
    <div class="site-created-by">
        <a href="https://adf.dev">© Angélique D. Faye</a>
    </div>
</footer>

</html>