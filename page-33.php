<?php
/*
 * Template for Sách mới nhập (ID: 33)
 */
get_header(); ?>

<div class="main-container col1-layout">
    <div class="main">
        <div class="col-main">
            <div class="category-view">
                <div class="title">
                    <span>Sách mới nhập</span>
                </div>
                <ul class="product-list">
                <?php
                    $books_query = new WP_Query( array ( 
                        'posts_per_page' => 10,
                        'post_type' => 'home_book_ui_cpt',
                        'order' => 'DESC'
                    ));
                    if($books_query->have_posts()) {
                        while($books_query->have_posts()) {
                            $books_query->the_post();
                            $tacgia = get_post_meta(get_the_ID(), 'tacgia', true);
                ?>
                    <li>
                        <div class="">
                            <a href="#">
                                <img src="https://thuvien.stellamaris.edu.vn/media/tacpham/hinhanh/1728181861_TheGloryOfTheLord.jpg"
                                    title="The Glory of the Lord - Volumn 1: Seeing The Form">
                            </a>
                        </div>
                        <div class="book-infor">
                            <div class="prodouct-name">
                                <a href="#" title="The Glory of the Lord - Volumn 1: Seeing The Form">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                            <div> Tác giả: 
                                <a href="#">
                                    <span class="tacgia"> <?php echo $tacgia ? $tacgia : 'Chưa rõ tác giả'; ?> </span>
                                </a>
                            </div>
                        </div>
                    </li>
                <?php
                    }
                    wp_reset_postdata();
                }
                ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>