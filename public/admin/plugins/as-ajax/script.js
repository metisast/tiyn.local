;$(document).ready(function(){
    /*Get data in inputs*/
    function getDataInputs(){
        var data = $('.as-search').serialize();
        console.log(data);
        return data;
    }
    /*First list load*/
    asQueryTable(getDataInputs(), "POST");

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
        asQueryTable(getDataInputs(), "POST", path);
        location.hash = page;
    }

    /*Search*/
    function asSearch(){
        var searchInputs = $('.as-search').find('input');
        var searchSelects = $('.as-search').find('select');
        searchInputs.keyup(function(e){
             asQueryTable(getDataInputs(), "POST");
        });
        searchSelects.change(function(){
            asQueryTable(getDataInputs(), "POST");
        });
    }
    asSearch();

    /*Query*/
    function asQueryTable(data, method, path){
        data = data || null;
        path = path || null;
        var CSRF_TOKEN = $(document).find('input[name=_token]').val();
        $.ajax({
            url: (path == null) ? $('#system-path').attr('data-path') : path,
            type: method,
            data: (data == null) ? '_token=' + CSRF_TOKEN : '_token=' + CSRF_TOKEN + '&' + data,
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