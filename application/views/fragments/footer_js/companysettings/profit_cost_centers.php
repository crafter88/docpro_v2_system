<script>
    $(document).ready(function(){
        var table = $('#profit-cost-centers-table').DataTable({
            ajax: window_location+'/company_settings/profit_cost_centers/get',
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
                        {'data': 'co_pcc_seq'}, {'data': 'co_pcc_code'}, {'data': 'co_pcc_name'}, {'data': 'co_pcc_shortname'}, {'data': 'co_de_name'}
                    ],
                    columnDefs: [{targets: 0, width: '100px'}, {targets: [1,2], width: '80px'}],
                    order: [['2', 'asc']],
                    scrollX: true,
                    initComplete: function(json, src){
                        seq = 0;
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
                    var dept = popover.find('select[name=add-department]').selectize({
                        plugins: ['no_results_found'],
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        },
                        dropdownParent: null
                    });
                    var dept_selectize = dept[0].selectize;
                    dept_selectize.clear();
                    dept_selectize.clearOptions();
                    $.get(window_location+'/company_settings/profit_cost_centers/get_departments', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.co_de_name,
                                value: data.co_de_id,
                                code: data.co_de_code
                            });
                        });
                        dept_selectize.clear();
                        dept_selectize.clearOptions();
                        dept_selectize.renderCache = {};
                        dept_selectize.load(function(callback){
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
        $('#profit-cost-centers-table').on('click', '.view', function(){
            $('body').on('hidden.bs.popover', function (e) {
                $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
            });
            var data = table.row(this.closest('tr')).data();
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context,src){
                    $(context).addClass('view-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#view-popover').html();
                },
                callback: function(){
                    var popover = $('.popover.view-modal-body');
                    popover.find('input[name=view-seq]').val(data.co_pcc_seq);
                    popover.find('input[name=view-code]').val(data.co_pcc_code);
                    popover.find('input[name=view-department]').val(data.co_de_name);
                    popover.find('input[name=view-name]').val(data.co_pcc_name);
                    popover.find('input[name=view-shortname]').val(data.co_pcc_shortname);
                },
                container:'.navbar-body'
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.card-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
            initRipple();
        });
        $('#profit-cost-centers-table').on('click', '.edit', function(){
            $('body').on('hidden.bs.popover', function (e) {
                $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
            });
            var data = table.row(this.closest('tr')).data();
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context, json){
                    $(context).addClass('edit-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#edit-popover').html();
                },
                callback: function(){
                    var popover = $('.popover.edit-modal-body');
                    popover.find('input[name=edit-seq]').val(data.co_pcc_seq);
                    popover.find('input[name=edit-code]').val(data.co_pcc_code);
                    popover.find('input[name=edit-name]').val(data.co_pcc_name);
                    popover.find('input[name=edit-shortname]').val(data.co_pcc_shortname);
                    popover.find('input[name=edit-id]').val(data.co_pcc_id);
                    var dept = popover.find('select[name=edit-department]').selectize({
                        plugins: ['no_results_found'],
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        },
                        dropdownParent: null
                    });
                    var dept_selectize = dept[0].selectize;
                    dept_selectize.clear();
                    dept_selectize.clearOptions();
                    $.get(window_location+'/company_settings/profit_cost_centers/get_departments', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.co_de_name,
                                value: data.co_de_id,
                                code: data.co_de_code
                            });
                        });
                        dept_selectize.clear();
                        dept_selectize.clearOptions();
                        dept_selectize.renderCache = {};
                        dept_selectize.load(function(callback){
                            callback(selectOptions);
                        });
                        dept_selectize.setValue(data.co_de_id);
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
        $('#profit-cost-centers-table').on('click', '.update', function(){
            $('body').on('hidden.bs.popover', function (e) {
                $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
            });
            var data = table.row(this.closest('tr')).data();
            let seq = $(this.closest('tr')).find('td:eq(1)').text();
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context, json){
                    $(context).addClass('update-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#update-popover').html();
                },
                callback: function(){
                    var popover = $('.popover.update-modal-body');
                    popover.find('input[name=update-seq]').val(data.co_pcc_seq);
                    popover.find('input[name=update-code]').val(data.co_pcc_code);
                    popover.find('input[name=update-name]').val(data.co_pcc_name);
                    popover.find('input[name=update-shortname]').val(data.co_pcc_shortname);
                    popover.find('input[name=update-id]').val(data.co_pcc_id);
                    var dept = popover.find('select[name=update-department]').selectize({
                        plugins: ['no_results_found'],
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        },
                        dropdownParent: null
                    });
                    var dept_selectize = dept[0].selectize;
                    dept_selectize.clear();
                    dept_selectize.clearOptions();
                    $.get(window_location+'/company_settings/profit_cost_centers/get_departments', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.co_de_name,
                                value: data.co_de_id,
                                code: data.co_de_code
                            });
                        });
                        dept_selectize.clear();
                        dept_selectize.clearOptions();
                        dept_selectize.renderCache = {};
                        dept_selectize.load(function(callback){
                            callback(selectOptions);
                        });
                        dept_selectize.setValue(data.co_de_id);
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
        $('div').on('click', '#close-btn', function(){
            $('.popover').popover('hide');
            $('.card-body button').removeAttr('disabled');
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='add-department']").val($(this)[0].textContent);
            $("input[name='add-department-id']").val($(this).attr('department-id'));
            $("input[name='add-department-code']").val($(this).attr('department-code'));
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='edit-department']").val($(this)[0].textContent);
            $("input[name='edit-department-id']").val($(this).attr('department-id'));
            $("input[name='edit-department-code']").val($(this).attr('department-code'));
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='update-department']").val($(this)[0].textContent);
            $("input[name='update-department-id']").val($(this).attr('department-id'));
            $("input[name='update-department-code']").val($(this).attr('department-code'));
        });
        $('.navbar-body').on('click', '.add-department-btn', function(){
            $('#add-options').html($('#pcc-department-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.edit-department-btn', function(){
            $('#edit-options').html($('#pcc-department-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.update-department-btn', function(){
            $('#update-options').html($('#pcc-department-select').html());
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

        $('body').on('click', 'tr.add-department .no-results-found', function(){
            $('#add-department-modal').modal({
                backdrop: 'static',
                keyboard: false,
                show: true
            });
        });

        $('body').on('click', '#add-department-modal button.v-submit', function(){
            var _this = $(this);
            var modal = $(this).closest('.modal');
            var validation = Object.create(v_validation);
            var required_input = validation.required_input(modal);
            var required_select = validation.required_select(modal);
            if(!required_input && !required_select){
                $.ajax({
                    type: 'POST',
                    url: _this.closest('form').attr('action'),
                    data: _this.closest('form').serialize(),
                    success: function(return_id){
                        var popover = $('.popover');
                        popover.find('select[name$="-department"]').selectize()[0].selectize.destroy();
                        var dept = popover.find('select[name$="-department"]').selectize({
                            plugins: ['no_results_found'],
                            create: false,
                            sortField: {
                                field: 'text',
                                sort: 'asc'
                            },
                            dropdownParent: null
                        });
                        var dept_selectize = dept[0].selectize;
                        dept_selectize.clear();
                        dept_selectize.clearOptions();
                        $.get(window_location+'/company_settings/profit_cost_centers/get_departments', function(response){
                            var json_data = JSON.parse(response);
                            var selectOptions = [];
                            $.each(json_data, function(index, data){
                                selectOptions.push({
                                    text: data.co_de_name,
                                    value: data.co_de_id,
                                    code: data.co_de_code
                                });
                            });
                            dept_selectize.clear();
                            dept_selectize.clearOptions();
                            dept_selectize.renderCache = {};
                            dept_selectize.load(function(callback){
                                callback(selectOptions);
                            });
                            dept_selectize.setValue(JSON.parse(return_id).id);
                        });
                        modal.modal('hide');
                        modal.find('input').val('');
                        _this.removeAttr('disabled');
                        _this.html("Ok");
                    }
                });
                _this.attr('disabled', true);
                _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
            }

        });

        $('#add-department-modal').on('hidden.bs.modal', function(){
            $(this).find('input').val('');
            $(this).find('select').val('');
            $(this).find('input').removeClass('v-invalid');
            $(this).find('select').removeClass('v-invalid');
            $(this).find('div').removeClass('v-invalid');
        });
    });
</script>