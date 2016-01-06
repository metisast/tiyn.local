;$(document).ready(function(){
    /*First*/
    asQueryTable(null, "POST");

    /*Pagination click*/
    $(document).on('click', '.pagination a', function(e){
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        /*Render new item page*/
        getItemsList(page);
    });

    /*Pagination*/
    function getItemsList(page){
        var path = $('#system-path').attr('data-path')+'?page='+page;
        asQueryTable(null, "POST", path);
        location.hash = page;
    }

    /*Query*/
    function asQueryTable(data, method, path){
        data = data || null;
        path = path || null;
        var CSRF_TOKEN = $(document).find('input[name=_token]').val();
        $.ajax({
            url: (path == null) ? $('#system-path').attr('data-path') : path,
            type: method,
            data: {_token: CSRF_TOKEN},
            beforeSend:function(){
                $('#view-table').after("<div class='loading'></div>");
            },
            success: function (data) {
                $('#view-table').find('tbody').remove();
                $('#view-table').find('tfoot').remove();
                $('#view-table').find('thead').after(data);
            },
            complete: function(){
                $('.loading').hide();
            }
        });
    }
});