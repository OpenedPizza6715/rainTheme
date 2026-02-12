<?php get_header(); ?>

<?php if (have_posts()) : ?>
    
    <?php while (have_posts()) : the_post(); ?>
        
        <article class="article">
            <h2 class="article-title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            
            <div class="article-meta">
                发布于 <?php the_time('Y年m月d日'); ?> | 
                分类：<?php the_category(', '); ?> | 
                作者：<?php the_author(); ?>
            </div>
            
            <div class="article-content">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="article-thumbnail">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                <?php endif; ?>
                
                <?php the_excerpt(); ?>
                
                <a href="<?php the_permalink(); ?>" class="read-more">阅读更多</a>
            </div>
        </article>
        
    <?php endwhile; ?>
    
    <!-- 分页 -->
    <div class="pagination">
        <?php
        the_posts_pagination(array(
            'prev_text' => '&laquo; 上一页',
            'next_text' => '下一页 &raquo;',
            'mid_size' => 2
        ));
        ?>
    </div>
    
<?php else : ?>
    
    <div class="no-content">
        <h2>没有找到内容</h2>
        <p>抱歉，没有找到您要查看的内容。</p>
    </div>
    
<?php endif; ?>

<?php get_footer(); ?>
