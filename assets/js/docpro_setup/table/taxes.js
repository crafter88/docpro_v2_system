var stopPropagation = function(evt) {
    if (evt.stopPropagation !== undefined) {
        evt.stopPropagation();
    } else {
        evt.cancelBubble = true;
    }
}

var init_table_settings = function(table1, table2){
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
    $('body').on('click', '#show-all-col', function(){
        var column1 = table1.column(1);
        column1.visible(!column1.visible());

        var column1 = table2.column(1);
        column1.visible(!column1.visible());

        var column3 = table2.column(3);
        column3.visible(!column3.visible());

        var column4 = table2.column(4);
        column4.visible(!column4.visible());

        var column6 = table2.column(6);
        column6.visible(!column6.visible());

        if($(this).attr('data-status') === '1'){
            $(this).attr('data-status', '0');
            $(this).html("Show All Columns");
        }else{
            $(this).attr('data-status', '1');
            $(this).html("<span style='font-size: 11px; font-weight: bold;'><i class='fa fa-check'></i>&nbsp; Show All Columns</span>");
        }
    });
}

var init_general_search = function(table, input){
    $(input).on('keyup', function () {
        table.search(this.value).draw();
    });
}
var hide_columns = function(table1, table2){
    var column1 = table1.column(1);
    column1.visible(!column1.visible());

    var column1 = table2.column(1);
    column1.visible(!column1.visible());

    var column3 = table2.column(3);
    column3.visible(!column3.visible());

    var column4 = table2.column(4);
    column4.visible(!column4.visible());

    var column6 = table2.column(6);
    column6.visible(!column6.visible());
}