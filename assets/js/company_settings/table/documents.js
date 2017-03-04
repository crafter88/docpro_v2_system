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
    $('body').on('click', '#show-all-col', function(){
        var column1 = table.column(1);
        column1.visible(!column1.visible());

        var column4 = table.column(5);
        column4.visible(!column4.visible());

        if($(this).attr('data-status') === '1'){
            $(this).attr('data-status', '0');
            $(this).html("Show All Columns");
        }else{
            $(this).attr('data-status', '1');
            $(this).html("<span style='font-size: 11px; font-weight: bold;'><i class='fa fa-check'></i>&nbsp; Show All Columns</span>");
        }
    });
    $('body').on('click', '#show-filters', function(){
        if($(this).attr('data-status') === '1'){
            $(this).attr('data-status', '0');
            $(this).html("Show Filters");

            $('.show-filter').addClass('hide-filter');
            $('.show-filter').removeClass('show-filter');
        }else{
            $(this).attr('data-status', '1');
            $(this).html("<span style='font-size: 11px; font-weight: bold;'><i class='fa fa-check'></i>&nbsp; Show Filters</span>");

            $('.hide-filter').addClass('show-filter');
            $('.hide-filter').removeClass('hide-filter');
        }
    });
}
var init_filter = function(table){
    var filter1 = {},
        filter2 = {};

    filter1 = $('#filter1').selectize({
        create: false,
        sortField: {
            field: 'text',
            sort: 'asc'
        },
        dropdownParent: null,
        onChange: function(value){
            var filter2_select = filter2[0].selectize;
            var val1 = $('#filter1').val();
            var val2 = $('#filter2').val();
            table.ajax.url(window_location+'/company_settings/documents/filter_table?filter1='+val1+'&'+'filter2='+val2).load();
        }
    });

    filter2 = $('#filter2').selectize({
        create: false,
        sortField: {
            field: 'text',
            sort: 'asc'
        },
        dropdownParent: null,
        onChange: function(value){
            var val1 = $('#filter1').val();
            var val2 = $('#filter2').val();
            table.ajax.url(window_location+'/company_settings/documents/filter_table?filter1='+val1+'&'+'filter2='+val2).load();
        }
    });

    var init_filter1 = function(){
        $.get(window_location+'/company_settings/documents/get_filter1', function(response){
            var json_data = JSON.parse(response);
            var options = [];
            var filter_select = filter1[0].selectize;
            var flag = 1;
            $.each(json_data, function(index, data){
                options.push({
                    text: data.d_class,
                    value: data.d_class
                });
            });
            filter_select.clear();
            filter_select.clearOptions();
            filter_select.load(function(callback){
                callback(options);
            });
        });
    }
   
    var init_filter2 = function(){
        $.get(window_location+'/company_settings/documents/get_filter2', function(response){
            var json_data = JSON.parse(response);
            var options = [];
            var filter_select = filter2[0].selectize;
            var flag = 1;
            $.each(json_data, function(index, data){
                options.push({
                    text: data.j_name,
                    value: data.j_id
                });
            });
            filter_select.clear();
            filter_select.clearOptions();
            filter_select.load(function(callback){
                callback(options);
            });
        });
    }

    init_filter1();
    init_filter2();
}
var init_general_search = function(table){
    $('.general-search').on('keyup', function () {
        table.search(this.value).draw();
    });
}
var hide_columns = function(table){
    var column1 = table.column(1);
        column1.visible(!column1.visible());

        var column5 = table.column(5);
        column5.visible(!column5.visible());
}