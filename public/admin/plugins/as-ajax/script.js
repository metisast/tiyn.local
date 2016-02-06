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
    $('#as-search-update').on('click.update', function(){
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

    /*===================================================*/

    /*Delete button enabled*/
    $(document).on('ifChecked', 'input', function(e){
        var ch = $('input[name=item_id]');
        $.each(ch, function(){
            if($(this).prop('checked')){
                $('#btn-delete').attr('disabled', false);
                return false;
            }
        });
    });
    /*Delete button disabled*/
    $(document).on('ifUnchecked', 'input', function(e){
        var ch = $('input[name=item_id]');
        var i = 1;
        $.each(ch, function(){
            if($(this).prop('checked')){
                i++;
            }
        });
        if(i == 1){
            $('#btn-delete').attr('disabled', true);
        }
    });

    /*Delete items*/
    var btnDelete = $('#btn-delete');
    btnDelete.click(function(){
        var path = $('#system-path').attr('data-path')+'/delete';
        var ch = $('input[name=item_id]');
        var items = {};
        items.del = [];
        $.each(ch, function(){
            if($(this).prop('checked')){
                items.del.push($(this).attr('value'));
            }
        });
        /*Query for message*/
        $.ajax({
            url: path,
            type: "post",
            data: {_method: 'delete'},
            beforeSend: function () {
                createShadowWrapper();
            },
            success: function (data) {
                createMessage(data);
                /*Success deleted*/
                $(document).on('click', '.modal-send', function(){
                    $.ajax({
                        url: path,
                        type: "post",
                        data: {_method: 'delete',items: items.del},
                        beforeSend: function(){
                            $('#modal-dialog').hide();
                            $('#as-search-update').trigger('click.update');
                        },
                        success: function(){

                        },
                        complete: function(){
                            $('.shadow-wrapper').hide()
                        }
                    });
                });
            },
            complete: function () {
                $('.loading').hide();
            }
        });
    });

    /*Create shadow-wrapper*/
    function createShadowWrapper(){
        var div = $("<div>").addClass('shadow-wrapper');
        var loader = $("<div>").addClass('loading');
        $("body").prepend(div);
        div.prepend(loader);
    }

    /*Create message modal*/
    function createMessage(data){
        $('.shadow-wrapper').append(data);

        /*Centering message*/
        var modal = $(document).find('#modal-dialog');
        var height = modal.height();
        var width = modal.width();

        modal.css({
            top: "50%",
            left: "50%",
            marginTop: -height/2+"px",
            marginLeft: -width/2+"px"
        });
    }

    /*Close modal and hide shadow*/
    $(document).on('click', '.modal-close', function(){
        $('#modal-dialog').hide();
        $('.shadow-wrapper').hide();
    });


})(jQuery);