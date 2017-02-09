var init_table_option = function(table, side_body){
	var state = side_body.hasClass('hide-table-setting');
    $('button.table-setting-toggle').click(function(){
        if(state){
            $(this).closest('.side-body').addClass('hide-table-setting');
            table.columns.adjust().draw();
        }else{
            $(this).closest('.side-body').removeClass('hide-table-setting');
        }
        state = !state;
    });

    $('.close-table-option').click(function(){
        $(this).closest('.side-body').addClass('hide-table-setting');
        state = false;
        var update = setInterval(function() {
            table.columns.adjust().draw();
        }, 1);

        setTimeout(function(){
            clearInterval(update);
        }, 5000);
        
    });

    $('.option-table .search').on( 'keyup', function () {
        table.search( this.value ).draw();
    });

    $('.option-table .entry').change(function(){
        table.page.len($(this).val()).draw();
        
    });

    $('#switch-state').on('switchChange.bootstrapSwitch', function(event, state) {
        var column = table.column(0);
        column.visible( ! column.visible() );
    });
}