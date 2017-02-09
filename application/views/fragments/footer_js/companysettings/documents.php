<script>
    $(document).ready(function(){
        var table = $('#documents-table').DataTable({
            ajax: window_location+'/company_settings/documents/get',
            columns:[
                        {
                            mData: null, bSortable: false,
                            mRender: function(data, type, full){
                                if($('input#mc_id').val() === $('input#bc_id').val()){
                                    return "<button type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                        <button type='button' class='btn btn-warning btn-xs btn-raised update title' custom-title='Update'><i class='fa fa-refresh'></i></button>";
                                }
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View' disabled><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit' disabled><i class='fa fa-pencil'></i></button>\n\
                                        <button type='button' class='btn btn-warning btn-xs btn-raised update title' custom-title='Update' disabled><i class='fa fa-refresh'></i></button>";
                                
                            }   
                        }, 
                        {'data': 'd_seq'}, {'data': 'd_code'}, {'data': 'd_class'}, {'data': 'd_name'}, {'data': 'd_shortname'}, {'data': 'j_name'}
                    ],
            columnDefs: [{targets: 0, width: '100px'}, {targets: 1, width: '40px'}],
            scrollX: true,
            initComplete: function(json, src){
                initRipple();
                init_tooltip();
            }
        });
        
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
                    var journal = $('#add-journal').selectize({
                                    create: false,
                                    sortField: {
                                        field: 'text',
                                        sort: 'asc'
                                    },
                                    onChange: function(value){
                                        var selectize = $('#add-journal').selectize()[0].selectize;
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
                container: '.navbar-body'
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.card-body button').attr('disabled', true);
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
                container: '.navbar-body'
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.card-body button').attr('disabled', true);
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
                    var journal = $('#edit-journal').selectize({
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
                container: '.navbar-body'
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.card-body button').attr('disabled', true);
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
                    var journal = $('#update-journal').selectize({
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
                container: '.navbar-body'
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.card-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
            initRipple();
            initSingleSubmit();
        });
        $('div').on('click', '.close-popover', function(){
            $('.popover').popover('hide');
            $('.card-body button').removeAttr('disabled');
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='add-journal']").val($(this)[0].textContent);
            $("input[name='add-journal-id']").val($(this).attr('j-id'));
            $("input[name='add-journal-code']").val($(this).attr('j-code'));
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='edit-journal']").val($(this)[0].textContent);
            $("input[name='edit-journal-id']").val($(this).attr('j-id'));
            $("input[name='edit-journal-code']").val($(this).attr('j-code'));
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='update-journal']").val($(this)[0].textContent);
            $("input[name='update-journal-id']").val($(this).attr('j-id'));
            $("input[name='update-journal-code']").val($(this).attr('j-code'));
        });
        $('.navbar-body').on('click', '.add-journal-btn', function(){
            $('#add-options').html($('#d-journal-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.edit-journal-btn', function(){
            $('#edit-options').html($('#d-journal-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.update-journal-btn', function(){
            $('#update-options').html($('#d-journal-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.form-control', function(){
            $('#add-options').empty();
        });
         $('.navbar-body').on('click', '.form-control', function(){
            $('#edit-options').empty();
        });
        $('.navbar-body').on('click', '.form-control', function(){
            $('#update-options').empty();
        });
        $('#switch-state').bootstrapSwitch();
        init_table_option(table, $(this).closest('side-body'));
    });
</script>