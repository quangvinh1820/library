// Nút điều hướng trái, phải
jQuery(document).ready(function() {
    jQuery('.bxslider').bxSlider({
        mode: 'fade',
        captions: true,
        auto: true,
        pager: false
    });
});

jQuery(function() {
    jQuery(".newbook").jCarouselLite({
        btnNext: ".next-newbook",
        btnPrev: ".prev-newbook",
        scroll: 5,
        visible: 5
    });
});

jQuery(function() {
    jQuery(".goodbook").jCarouselLite({
        btnNext: ".next-goodbook",
        btnPrev: ".prev-goodbook",
        scroll: 5,
        visible: 5
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const toggleCategories = document.getElementById('toggle-categories');
    const danhMucSach = document.querySelector('.danhmucsach');

    toggleCategories.addEventListener('click', function () {
      // Kiểm tra trạng thái hiển thị của danh mục sách
      if (danhMucSach.style.display === 'block') {
        danhMucSach.style.display = 'none'; // Ẩn menu nếu đang hiển thị
      } else {
        danhMucSach.style.display = 'block'; // Hiện menu nếu đang ẩn
      }
    });
  });
