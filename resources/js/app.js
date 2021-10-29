/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(function () {
    $('#btnSubmit').on('click', function (e) {
        e.preventDefault();
        $.ajax({
            url:'/short-link',
            type: 'POST',
            data: {url: $('input').val()},
            success: function (response) {
                $('tbody').html('');
                $('tbody').append(`
                    <tr>
                        <th><a target="_blank" href="/l/${response.shortLink.code}">${document.domain}/${response.shortLink.code}</a></th>
                        <td>${response.shortLink.link}</td>
                    </tr>
                `);
            },
            error: function (response) {
                $('.error').html('');
                let text;
                if (response.status > 400) {
                    text = 'An internal error has occurred. Try later.';
                } else {
                    text = response.responseJSON?.errors?.url[0];
                }
                $('.error').append(`
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <p>${text}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                `);
            },
        });
    });
});
