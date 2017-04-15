$(function() {
	$('#register').submit(function(e) {
		e.preventDefault();
		var $this = $(this);

		var username = $('#username').val();
        var password = $('#password').val();
        var email = $('#email').val();

        if(username === '' || email === '' || password === '') {
            $('.good').html('Les champs doivent êtres remplis');
        } else {
        	$.ajax({
                url: '?action=register',
                type: 'post',
                data: {
                    username: username,
                    password: password,
                    email: email
                },
                success: function(response) {
                    $("body").load('?action=login');
                }
            });
        }
	});

    $('#logout').submit(function(e) {
        e.preventDefault();
        $.ajax({
                url: '?action=logout',
                type: 'post',
                success: function(response) {
                    $("body").load('?action=login');
                }
            });
    });
});