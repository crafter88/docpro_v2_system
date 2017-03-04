<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/company_settings/table/documents.js"></script>
<script>
    var stopPropagation = function(evt) {
        if (evt.stopPropagation !== undefined) {
            evt.stopPropagation();
        } else {
            evt.cancelBubble = true;
        }
    }
    $(document).ready(function(){
        (function(){
            $('#documents-table thead tr#searchfilterrow th').each( function () {
                if($(this).index() !== 0){
                    var title = $('#documents-table thead th').eq( $(this).index() ).text();
                    $(this).html( '<input type="text" onclick="stopPropagation(event);" placeholder="Search '+title+'" />' );
                }
            });
            $("#documents-table thead input").on( 'keyup change', function () {
                table.column($(this).parent().index()+':visible')
                     .search(this.value)
                     .draw();
            } );
        })();

        var table = $('#documents-table').DataTable({
            ajax: window_location+'/company_settings/documents/get',
            columns:[
                        {
                            mData: null, bSortable: false,
                            mRender: function(data, type, full){
                                if($('input#mc_id').val() === $('input#bc_id').val()){
                                    return "<button type='button' class='btn btn-primary btn-xs btn-raised view title' title='View'><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised edit title' title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                        <button type='button' class='btn btn-warning btn-xs btn-raised update title' title='Update'><i class='fa fa-refresh'></i></button>";
                                }
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised view title' title='View' disabled><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised edit title' title='Edit' disabled><i class='fa fa-pencil'></i></button>\n\
                                        <button type='button' class='btn btn-warning btn-xs btn-raised update title' title='Update' disabled><i class='fa fa-refresh'></i></button>";
                                
                            }   
                        }, 
                        {'data': 'd_seq'}, {'data': 'd_code'}, {'data': 'd_class'}, {'data': 'd_name'}, {'data': 'd_shortname'}, {'data': 'j_name'}
                    ],
            columnDefs: [{targets: 0, width: '100px'}, {targets: 1, width: '40px'}],
            scrollX: true,
            order: [['2', 'asc']],
            orderCellsTop: true,
            bPaginate: false,
            language: {
                info: 'Total number of records: <b> _MAX_ </b>',
                infoEmpty: 'Total number of records: <b> 0 </b>'
            }
        });

        init_table_settings(table);
        init_filter(table);
        init_general_search(table);
        hide_columns(table);
        
        var tmp = $.fn.popover.Constructor.prototype.show;
            $.fn.popover.Constructor.prototype.show = function () {
              tmp.call(this);
              if (this.options.callback) {
                this.options.callback();
              }
        }
        
        $('#add').click(function(){
            $('body').on('hidden.bs.popover', function (e) {
                $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
            });
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#add-popover').html();
                },
                callback: function(){
                    var popover = $('.popover.add-modal-body');
                    var journal = popover.find('#add-journal').selectize({
                                    create: false,
                                    sortField: {
                                        field: 'text',
                                        sort: 'asc'
                                    },
                                    onChange: function(value){
                                        var selectize = popover.find('#add-journal').selectize()[0].selectize;
                                        var code = selectize.options[value].code;
                                        popover.find('input[name=add-journal-code]').val(code);
                                    }
                                });
                    var journal_select = journal[0].selectize;
                    journal_select.clear();
                    journal_select.clearOptions();
                    $.get(window_location+'/company_settings/documents/get_journals', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.j_name,
                                value: data.j_id,
                                code: data.j_code
                            });
                        });
                        journal_select.clear();
                        journal_select.clearOptions();
                        journal_select.cacheRender = {};
                        journal_select.load(function(callback){
                            callback(selectOptions);
                        });
                    });
                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    restriction.select_required();
                    restriction.number();
                    popover.find('button.v-submit').unbind('click');
                    popover.find('button.v-submit').click(function(){
                        var _this = $(this);
                        var validation = Object.create(v_validation);
                        var required_input = validation.required_input(popover);
                        var required_select = validation.required_select(popover);
                        if(!required_input && !required_select){
                            _this.closest('form').submit();
                            _this.attr('disabled', true);
                            _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
                        }
                    });

                },
                container: 'body'
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.box-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
            initRipple();
            initSingleSubmit();
        });
        $('#documents-table').on('click', '.view', function(){
            $('body').on('hidden.bs.popover', function (e) {
                $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
            });
            var data = table.row(this.closest('tr')).data();
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('view-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#view-popover').html();
                },
                callback: function(){
                    var popover = $('.popover.view-modal-body');
                    popover.find('input[name=view-seq]').val(data.d_seq);
                    popover.find('input[name=view-code]').val(data.d_code);
                    popover.find('input[name=view-class]').val(data.d_class);
                    popover.find('input[name=view-name]').val(data.d_name);
                    popover.find('input[name=view-shortname]').val(data.d_shortname);
                    popover.find('input[name=view-journal]').val(data.j_name);  
                },
                container: 'body'
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.box-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
            initRipple();
        });
        $('#documents-table').on('click', '.edit', function(){
            $('body').on('hidden.bs.popover', function (e) {
                $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
            });
            var data = table.row(this.closest('tr')).data();
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('edit-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#edit-popover').html();
                },
                callback: function(){
                    var popover = $('.popover.edit-modal-body');
                    popover.find('input[name=edit-seq]').val(data.d_seq);
                    popover.find('input[name=edit-code]').val(data.d_code);
                    popover.find('input[name=edit-class]').val(data.d_class);
                    popover.find('input[name=edit-name]').val(data.d_name);
                    popover.find('input[name=edit-shortname]').val(data.d_shortname);
                    popover.find('input[name=edit-id]').val(data.d_id);
                    var journal = popover.find('#edit-journal').selectize({
                                    create: false,
                                    sortField: {
                                        field: 'text',
                                        sort: 'asc'
                                    }
                                });
                    var journal_select = journal[0].selectize;
                    journal_select.clear();
                    journal_select.clearOptions();
                    $.get(window_location+'/company_settings/documents/get_journals', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.j_name,
                                value: data.j_id,
                                code: data.j_code
                            });
                        });
                        journal_select.clear();
                        journal_select.clearOptions();
                        journal_select.cacheRender = {};
                        journal_select.load(function(callback){
                            callback(selectOptions);
                        });
                        journal_select.setValue(data.j_id);
                    });
                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    restriction.select_required();
                    restriction.number();
                    popover.find('button.v-submit').unbind('click');
                    popover.find('button.v-submit').click(function(){
                        var _this = $(this);
                        var validation = Object.create(v_validation);
                        var required_input = validation.required_input(popover);
                        var required_select = validation.required_select(popover);
                        if(!required_input && !required_select){
                            _this.closest('form').submit();
                            _this.attr('disabled', true);
                            _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
                        }
                    });
                },
                container: 'body'
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.box-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
            initRipple();
            initSingleSubmit();
        });
        $('#documents-table').on('click', '.update', function(){
            $('body').on('hidden.bs.popover', function (e) {
                $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
            });
            var data = table.row(this.closest('tr')).data();
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('update-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#update-popover').html();
                },
                callback: function(){
                    var popover = $('.popover.update-modal-body');
                    popover.find('input[name=update-seq]').val(data.d_seq);
                    popover.find('input[name=update-code]').val(data.d_code);
                    popover.find('input[name=update-class]').val(data.d_class);
                    popover.find('input[name=update-name]').val(data.d_name);
                    popover.find('input[name=update-shortname]').val(data.d_shortname);
                    popover.find('input[name=update-id]').val(data.d_id);
                    var journal = popover.find('#update-journal').selectize({
                                    create: false,
                                    sortField: {
                                        field: 'text',
                                        sort: 'asc'
                                    }
                                });
                    var journal_select = journal[0].selectize;
                    journal_select.clear();
                    journal_select.clearOptions();
                    $.get(window_location+'/company_settings/documents/get_journals', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.j_name,
                                value: data.j_id,
                                code: data.j_code
                            });
                        });
                        journal_select.clear();
                        journal_select.clearOptions();
                        journal_select.cacheRender = {};
                        journal_select.load(function(callback){
                            callback(selectOptions);
                        });
                        journal_select.setValue(data.j_id);
                    });
                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    restriction.select_required();
                    restriction.number();
                    popover.find('button.v-submit').unbind('click');
                    popover.find('button.v-submit').click(function(){
                        var _this = $(this);
                        var validation = Object.create(v_validation);
                        var required_input = validation.required_input(popover);
                        var required_select = validation.required_select(popover);
                        if(!required_input && !required_select){
                            _this.closest('form').submit();
                            _this.attr('disabled', true);
                            _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
                        }
                    });
                },
                container: 'body'
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.box-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
            initRipple();
            initSingleSubmit();
        });
        $('body').on('click', '.close-popover', function(){
            $('.popover').popover('hide');
            $('.box-body button').removeAttr('disabled');
        });

    });
</script>