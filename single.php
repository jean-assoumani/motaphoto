<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                        <?php if ('post' === get_post_type()) : ?>
                            <div class="entry-meta">
                                <?php
                                echo '<span class="posted-on">' . get_the_date() . '</span>';
                                ?>
                            </div><!-- .entry-meta -->
                        <?php endif; ?>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php
                        the_content();
                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . __('Pages:', 'textdomain'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer">
                        <?php
                        edit_post_link(
                            sprintf(
                                __('Edit %s', 'textdomain'),
                                the_title('<span class="screen-reader-text">"', '"</span>', false)
                            ),
                            '<span class="edit-link">',
                            '</span>'
                        );
                        ?>
                    </footer><!-- .entry-footer -->
                </article><!-- #post-## -->

        <?php
            endwhile;
        else :
            get_template_part('template-parts/content', 'none');
        endif;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>