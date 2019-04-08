$(document).ready(function() {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $("#ajax-posts").click(function () {
        let ajax_button = $("#ajax-posts");
        let post_id = ajax_button.attr("data-id");
        let offset =   ajax_button.attr("data-offset");

        $.ajax({
            url: '/postajax',
            type: 'POST',
            data: {_token: CSRF_TOKEN, id: post_id, offset: offset},
            success: function (data) {
                $("#ajax-posts").attr("data-offset", function(i, origValue){
                    return parseInt(origValue) + 20;
                });
                $("#post-container").append(data);
            }
        });
    });
});

