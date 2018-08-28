function onLoad() {
    var mainScrollOrientation = 1; // 1 = rightwards, 0 = leftwards.
}

$(document).ready(function() {
    $('#main-scroll').click(function() {
        if (mainScrollOrientation == 1) {
            // insert transition (scrolls the home div out and the post's div in)
            document.getElementById('main-scroll-text').innerHTML = "&larr"; // main-scroll always stays in the middle of the main div, which slides from left to right depending on the visible div (home or posts).
            mainScrollOrientation = 0;
        } else if (mainScrollOrientation == 0) {
            // insert transition (scrolls the post's div out and the home div in)
            document.getElementById('main-scroll-text').innerHTML = "&rarr";
            mainScrollOrientation = 1;
        }
    });
    $(document).scroll(function() {
        $('#top').toggleClass('scrolled', $(this).scrollTop() >= 50);
    });
});