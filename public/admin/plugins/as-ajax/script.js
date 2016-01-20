;(function($){
    /*Defaults config*/
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /*init main data*/
    var data = {
        searchInputs: $('.as-search').find('input'),
        searchSelects: $('.as-search').find('select'),
        keyBlock: [9, 16, 17, 18, 20, 91]
    }

    asSearch();
    /*Get data in inputs*/
    function getDataInputs(){
        var data = $('.as-search').serialize();
        console.log(data);
        return data;
    }
    /*First list load*/
    if($('table').is('#view-table')) asQueryTable(null, "POST");

    /*Pagination click*/
    $(document).on('click', '.pagination a', function(e){
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        /*Render new item page*/
        getItemsList(page);
    });

    /*Pagination*/
    function getItemsList(page){
        var path = $('#system-path').data('path')+'?page='+page;
        asQueryTable(getDataInputs(), "POST", path);
        location.hash = page;
    }

    /*Search handler*/
    function asSearch(){
        data.searchInputs.keyup(function(e){
            var status = true;
            data.keyBlock.some(function(number){
                 if(number === e.keyCode) status = false;
            });
            status ? asQueryTable(getDataInputs(), "POST") : e.preventDefault();
        });
        data.searchSelects.change(function(){
            asQueryTable(getDataInputs(), "POST");
        });
    }

    /*Search update*/
    $('#as-search-update').click(function(){
        var page = $(document).find('.active span').text();
        var path = $('#system-path').data('path')+'?page='+page;
        asQueryTable(getDataInputs(), "POST", path);
    });
    /*Search clear*/
    $('#as-search-clear').click(function(){
        data.searchInputs.val('');
        data.searchSelects.val(0);
        asQueryTable(null, "POST");
        location.hash = '1';
    });

    /*Query*/
    function asQueryTable(data, method, path){
        data = data || null;
        path = path || null;
        var table = $('#view-table');
        table.find('tbody').remove();
        table.find('tfoot').remove();
        //var CSRF_TOKEN = $(document).find('input[name=_token]').val();
        $.ajax({
            url: (path == null) ? $('#system-path').attr('data-path') : path,
            type: method,
            data: data,
            beforeSend:function(){
                table.after("<div class='loading'></div>");
            },
            success: function (data) {
                table.find('tbody').remove();
                table.find('tfoot').remove();
                table.find('thead').after(data);
            },
            complete: function(){
                $('.loading').hide();
            }
        });
    }
})(jQuery);