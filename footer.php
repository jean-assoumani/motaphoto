<footer class="footer">
    <nav id="footer-menu">
        <?php wp_nav_menu(['theme_location' => 'footer-menu']); ?>
    </nav>
    <aside id="widget-area">
        <?php dynamic_sidebar('footer-widget'); ?>
    </aside>
</footer>
<?php get_template_part('template-parts/contact-modal'); ?>
<?php wp_footer(); ?>

</body>

</html>