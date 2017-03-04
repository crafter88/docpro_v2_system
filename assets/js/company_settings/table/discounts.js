var stopPropagation = function(evt) {
    if (evt.stopPropagation !== undefined) {
        evt.stopPropagation();
    } else {
        evt.cancelBubble = true;
    }
}

var init_table_settings = function(table){
    $('body').on('click', '#advance-search', function(){
        var table_filter = $(".dataTable").find('.searchfilterrow');
        if($(table_filter).hasClass('show-searchfilter')){
            $(table_filter).removeClass('show-searchfilter');
            $(table_filter).addClass('hide-searchfilter');
        }else{
            $(table_filter).removeClass('hide-searchfilter');
            $(table_filter).addClass('show-searchfilter');
        }

        if($(this).attr('data-status') === '1'){
            $(this).attr('data-status', '0');
            $(this).html("Show Advance Search");
        }else{
            $(this).attr('data-status', '1');
            $(this).html("<span style='font-size: 11px; font-weight: bold;'><i class='fa fa-check'></i>&nbsp; Show Advance Search</span>");
        }
    });
}

var init_general_search = function(table){
    $('.general-search').on('keyup', function () {
        table.search(this.value).draw();
    });
}