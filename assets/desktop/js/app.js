function backtotop(event) {
    event.preventDefault();
    $('body, html').animate({
        scrollTop: 0
    }, 800);
}