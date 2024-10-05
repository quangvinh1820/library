<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Thư viện ĐCV Sao Biển Nha Trang</title>
    <meta name="description" content="Thư Viện ĐCV Sao Biển Nha Trang">
    <meta name="keywords" content="">
    <meta name="robots" content="INDEX,FOLLOW">
    <link rel="icon" href="<?php echo get_theme_file_uri() . '/images/logo.ico' ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri() . '/images/logo.ico' ?>"
        type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body class=" cms-index-index cms-home" style="">
    <div class="wrapper">
        <noscript>
            <div class="global-site-notice noscript">
                <div class="notice-inner">
                    <p>
                        <strong>JavaScript seems to be disabled in your browser.</strong><br />
                        Bạn phải bật JavaScript để trang web có thể hoạt động hết tính năng.
                    </p>
                </div>
            </div>
        </noscript>

        <div class="page">
            <div class="header-language-background">
                <div class="header-language-container container">
                    <div class="store-language-container">
                    </div>
                    <div class="welcome-msg"> </div>

                    <div id="header-account" class="skip-content">

                    </div>
                </div>
            </div>
            <header id="header" class="page-header">
                <div class="page-header-container">
                    <div class="header-logo-cart">
                        <div class="top-banner container" id="top-banner-container">
                            <a class="banner" href="https://thuvien.stellamaris.edu.vn/index.php/">
                                <img
                                    src="<?php echo get_theme_file_uri() . '/images/banner.png' ?>">
                            </a>
                        </div>
                    </div>
                    <!-- Search -->
                    <div class="search-categories container">
                        <div class="top-search-categories container">
                            <div class="top-categories">
                                <a href="https://thuvien.stellamaris.edu.vn/index.php/">
                                    <img src="<?php echo get_theme_file_uri() . '/images/home.png' ?>"
                                        alt="Thư viện ĐCV Bùi Chu">
                                </a>
                                <div class="header-top-categories">
                                    <span>Danh mục sách </span>
                                    <!-- <div class="danhmucsach container">
                                        <ul id="menu">
                                            <li>
                                                <a
                                                    href="https://thuvien.stellamaris.edu.vn/index.php/thuvien/catalog_category/list/id/000/">000
                                                    - Tổng quát</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://thuvien.stellamaris.edu.vn/index.php/thuvien/catalog_category/list/id/100/">100
                                                    - Triết học</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://thuvien.stellamaris.edu.vn/index.php/thuvien/catalog_category/list/id/200/">200
                                                    - Tôn Giáo</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://thuvien.stellamaris.edu.vn/index.php/thuvien/catalog_category/list/id/300/">300
                                                    - Khoa học xã hội</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://thuvien.stellamaris.edu.vn/index.php/thuvien/catalog_category/list/id/400/">400
                                                    - Ngôn ngữ</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://thuvien.stellamaris.edu.vn/index.php/thuvien/catalog_category/list/id/500/">500
                                                    - KH tự nhiên - toán học</a>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                            <div id="header-search" class="skip-content">
                                <form id="search_mini_form"
                                    action="https://thuvien.stellamaris.edu.vn/index.php/thuvien/search/" method="get">
                                    <div class="input-box">
                                        <select name="typesearch">
                                            <option value="">Tiêu chí tìm kiếm</option>
                                            <option value="tacpham">Tên tác phẩm</option>
                                            <option value="matacpham">Mã tác phẩm</option>
                                            <option value="tacgia">Tác giả</option>
                                            <option value="dichgia">Dịch giả</option>
                                            <option value="ddc">Số phân loại DDC</option>
                                            <option value="nguyentac">Nguyên tác</option>
                                            <option value="nhaxb">Nhà xuất bản</option>
                                            <option value="mucluc">Mục lục</option>
                                            <option value="sachbo">Sách bộ</option>
                                            <option value="namxb">Năm xuất bản</option>
                                            <option value="ngonngu">Ngôn ngữ</option>
                                        </select>
                                        <input id="search" type="search" name="q" value=""
                                            class="input-text required-entry" maxlength="128"
                                            placeholder="Từ khóa cần tìm" autocomplete="off">
                                        <button type="submit" title="Tìm"
                                            class="button search-button"><span><span>Tìm</span></span></button>
                                    </div>

                                    <div id="search_autocomplete" class="search-autocomplete" style="display: none;">
                                    </div>
                                    <script type="text/javascript">
                                    //<![CDATA[
                                    var searchForm = new Varien.searchForm('search_mini_form', 'search', '');
                                    searchForm.initAutocomplete(
                                        'https://thuvien.stellamaris.edu.vn/index.php/catalogsearch/ajax/suggest/',
                                        'search_autocomplete');
                                    //]]>
                                    </script>
                                </form>

                            </div>
                            <div id="phieusach">
                                <a href="https://thuvien.stellamaris.edu.vn/index.php/thuvien/phieusach/">Phiếu sách</a>
                            </div>

                        </div>

                    </div>
                </div>
            </header>