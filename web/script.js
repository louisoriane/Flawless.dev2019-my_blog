$(function() {
	///////////////// Register action \\\\\\\\\\\\\\\\\\
	$('#register').submit(function(e) {
		e.preventDefault();

		var username = $('#username').val();
        var password = $('#password').val();
        var email = $('#email').val();

        if(username === '' || email === '' || password === '') {
            $('.good').html('Les champs doivent être remplis');
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
                    window.location = "?action=login";
                }
            });
        }
	});

	///////////////// Log in action \\\\\\\\\\\\\\\\\\
	$('#login').submit(function(e) {
		e.preventDefault();

		var username = $('#username').val();
        var password = $('#password').val();

        if(username === '' || password === '') {
            $('.good').html('Les champs doivent êtres remplis');
        } else {
        	$.ajax({
                url: '?action=login',
                type: 'post',
                data: {
                    username: username,
                    password: password,
                },
                success: function(response) {
                    window.location = "?action=home";
                }
            });
        }
	});

    ///////////////// Add article \\\\\\\\\\\\\\\\\\
    $('#article').submit(function(e) {
        e.preventDefault();

        var title = $('#title').val();
        var description = $('#description').val();

        if(title === '' || description === '') {
            $('.good').html('Les champs doivent êtres remplis');
        } else {
            $.ajax({
                url: '?action=addArticle',
                type: 'post',
                data: {
                    title: title,
                    description: description
                },
                success: function(response) {
                    $('.good').html('Votre article a été posté.');
                }
            });
        }
    });

    ///////////////// Display article \\\\\\\\\\\\\\\\\\
    $('#display-article').submit(function(e) {
        var title = $('#title-article').val();

        $.ajax({
            url: '?action=displayArticle',
            type: 'post',
            data: {title: title},
            success: function(response) {
                
            }
        });
    });

    ///////////////// Display comment \\\\\\\\\\\\\\\\\\
    $('#comments').submit(function(e) {
        e.preventDefault();

        var title = $('#title-article-special').val();
        var comment = $('#comment').val();

        $.ajax({
            url: '?action=comments',
            type: 'post',
            data: {
                article_name: title,
                comment: comment
            },
            dataType: 'JSON',
            success: function(response) {
                $('.list').css('display', 'block');
                $('.list').prepend('<div class="coms"><hr><h6> Posté par ' + response.username  + 
                    ' le ' + response.data[0]['date'] + '</h6><p> ' 
                    + response.data[0]['comment'] + '<br></p></div>');
            }
        });
    });

    ///////////////// Delete comment \\\\\\\\\\\\\\\\\\
    $(this).find('.del-comment').submit(function(e) {
        e.preventDefault();
        var commentBlock = $(this).parent();
        var comment = $(this).find(".comment").val();
        $.ajax({
            url: '?action=delComment',
            type: 'post',
            data: {
                comment: comment
            },
            success: function(response) {
                commentBlock.remove();
            }
        });
    });

    ///////////////// Change USERNAME \\\\\\\\\\\\\\\\\\
    $('#changeUsername').submit(function(e) {
        e.preventDefault();

        var username = $('#new-username').val();

        $.ajax({
            url: '?action=changeUsername',
            type: 'post',
            data: {
                username: username
            },
            success: function(response) {
                $('.good').html('Pseudo changé.');
            }
        });
    });

    /////////// EDIT ARTICLE \\\\\\\\\
    $('#edit-title').submit(function(e) {
        var title = $('#edit-title-article').val();

        $.ajax({
            url: '?action=editArticle',
            type: 'post',
            data: {title: title},
            success: function(response) {
                
            }
        });
    });

    /////////// ARTICLE \\\\\\\\\
    $('#edit-article').submit(function(e) {
        e.preventDefault();
        var title = $('#edit-title').val();
        var description = $('#edit-description').val();

        $.ajax({
            url: '?action=editIt',
            type: 'post',
            data: {
                title: title,
                description: description
            },
            success: function(response) {
                $('.good').html("Article editez");
            }
        });
    });
});