<footer class="footer">
    <nav id="footer-menu">
        <?php wp_nav_menu(['theme_location' => 'footer-menu']); ?>
    </nav>
    <aside id="widget-area">
        <?php dynamic_sidebar('footer-widget'); ?>
    </aside>
</footer>

<?php wp_footer(); ?>

</body>

</html>