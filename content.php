

<div class="row">
    <article class="span8 post <?php get_post_class(); ?>" id="post-<?php the_ID(); ?>" >
        <header>
            <hgroup>
                <h1>
                    <a href="<?php the_permalink() ?>" class="post-title" rel="bookmark"><?php the_title(); ?></a>
                </h1>
                <div class="badges">
                    <?php if (has_tag('vegan')) { ?>
                        <span class="badge badge-vegan"><a href="<?php echo get_term_link('vegan', 'post_tag'); ?>" title="Vegan">V</a></span>
                    <?php } if (has_tag('gluten-free')) { ?>
                        <span class="badge badge-gf"><a href="<?php echo get_term_link('gluten-free', 'post_tag'); ?>" title="Gluten-Free">GF</a></span>
                    <?php } ?>
                </div>
                <div class="fcbk_like">
                  <fb:like href="<?php the_permalink() ?>" send="false" layout="button_count" width="450" show_faces="false" font=""></fb:like>
                </div>
            </hgroup>
            <?php if ( 'post' == get_post_type() ) : ?>
                <div class="entry-meta clear">
                    <small>
                        <span class="sep">Posted on </span>
                        <time class="entry-date" datetime="<?php echo get_the_date(); ?>" pubdate><?php echo get_the_date(); ?></time>
                        
                        <span class="by-author">
                            <span class="sep"> by </span> <?php the_author_posts_link(); ?> <span class="meta"><?php edit_post_link(__('(Edit)')); ?></span>
                        </span>
                        | Category: <?php the_category(', ') ?>
                        <?php the_tags('| Tags: ', ', ', ''); ?>

                    </small>
                </div><!-- .entry-meta -->
            <?php endif; ?>
            
        </header>
        <div class="entry-body">
            <?php if ( is_search() ) : // Only display Excerpts for Search ?>
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-summary -->
            <?php else : ?>
                <div class="entry-content">
                    <?php the_content(__("Read more...")); ?>
                </div><!-- .entry-content -->
            <?php endif; ?>
        
        </div>
    <hr/>
    </article>

    <div class="span8">
        <?php comments_template( '', true ); ?>
    </div>
</div>