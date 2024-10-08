<?php
/*
 * Template for Sách nổi bật (ID: 35)
 */
get_header(); ?>

<div class="main-container col1-layout">
    <div class="main">
        <div class="col-main">
            <div class="category-view">
                <div class="title">
                    <span>Sách nổi bật</span>
                </div>
                <ul class="product-list">
                <?php
                    $books = get_featured_books_with_author();
                    if ($books) {
                        foreach ($books as $book) {
                            $book_title = esc_html($book->post_title); // Lấy tiêu đề sách
                            $book_author = $book->tacgia ? esc_html($book->tacgia) : 'Chưa rõ tác giả';
                            $view_count = intval($book->count);
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
                                    <?php echo $book_title; ?>
                                </a>
                            </div>
                            <div> Tác giả: 
                                <a href="#">
                                    <span class="tacgia"> <?php echo $book_author; ?> </span>
                                </a>
                            </div>
                            <div> Lượt xem: 
                                <span class="view-count"> <?php echo number_format($view_count); ?> </span>
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