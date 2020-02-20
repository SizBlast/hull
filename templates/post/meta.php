<span class="post-date">
    <i class="fas fa-calendar-alt"></i>
    <?php echo get_the_date(); ?>
</span>
<span class="post-author">
    <i class="fas fa-user"></i>
    <a href="<?php echo get_the_author_link(); ?>"><?php echo get_author_name(); ?></a>
</span>
<?php $categories = get_the_category(); ?>
<?php if ( !empty( $categories ) ): ?>
<span class="post-categories">
    <i class="fas fa-folder"></i>
    <?php foreach ( $categories as $key => $category ): ?>
        <?php if ( count( $categories ) - 1 != $key ): ?>
            <a href="<?php echo get_term_link( $category ); ?>"><?php echo $category->name; ?></a>,
        <?php else: ?>
            <a href="<?php echo get_term_link( $category ); ?>"><?php echo $category->name; ?></a>
        <?php endif; ?>
    <?php endforeach; ?>
</span>
<?php endif; ?>
<?php $tags = get_the_tags(); ?>
<?php if ( !empty( $tags ) ): ?>
<span class="post-tags">
    <?php if ( count( $tags ) > 1 ): ?>
        <i class="fas fa-tags"></i>
    <?php else: ?>
        <i class="fas fa-tag"></i>
    <?php endif; ?>
    <?php foreach ( $tags as $key => $tag ): ?>
        <?php if ( count( $tags ) - 1 != $key ): ?>
            <a href="<?php echo get_term_link( $tag ); ?>"><?php echo $tag->name; ?></a>,
        <?php else: ?>
            <a href="<?php echo get_term_link( $tag ); ?>"><?php echo $tag->name; ?></a>
        <?php endif; ?>
    <?php endforeach; ?>
</span>
<?php endif; ?>