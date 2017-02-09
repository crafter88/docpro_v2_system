<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/company_settings/taxes_seq.js"></script>

<script>
    var tt_id = parseFloat($("input[name=default_tt_id]").val());
    var tt_name = $("input[name=default_tt_name]").val().length > 0 ? $("input[name=default_tt_name]").val() : '';
    var tt_code = '';
    var no_space = function(){
        $(".no-space").on({
          keydown: function(e) {
            if (e.which === 32 && $(this).val().length === 0)
              return false;
          },
        });
    }

    var tt_table = $('#tax-types-table').DataTable({
        ajax: window_location+'/company_settings/taxtypes/get',
        columns:[
                    {
                        mData: null, bSortable: false,
                        mRender: function(data, type, full){
                            if($('input#mc_id').val() === $('input#bc_id').val()){
                                if(full.tt_setup_company === 'docpro'){
                                    if(full.status === '1'){
                                        return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' class='disable_tax_type'>";
                                    }
                                    return "<input type='checkbox' style='margin: 0 auto; display: table;' title='Enable or Disable' class='disable_tax_type'>";
                                }
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                    <button type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                    <button type='button' class='btn btn-warning btn-xs btn-raised title update' custom-title='Update'><i class='fa fa-refresh'></i></button>";
                            }
                            if(full.tt_setup_company === 'docpro'){
                                    if(full.status === '1'){
                                        return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                                    }
                                    return "<input type='checkbox' style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                                }
                            return "<button type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View' disabled><i class='fa fa-eye'></i></button>\n\
                                    <button type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit' disabled><i class='fa fa-pencil'></i></button>\n\
                                    <button type='button' class='btn btn-warning btn-xs btn-raised title update' custom-title='Update' disabled><i class='fa fa-refresh'></i></button>";
                        }
                    },
                    {'data': 'tt_seq'}, 
                    {'data': 'tt_code'}, 
                    {
                        mRender: function(row, setting, full){
                            if(full.status === '1'){
                                return full.tt_name + "<button type='button' class='btn btn-raised btn-default btn-xs next-level show-tax' title='Show SubClassification'><i class='fa fa-angle-right'></i></button>";
                            }
                            return full.tt_name + "<button type='button' class='btn btn-raised btn-default btn-xs next-level' title='Show SubClassification'><i class='fa fa-angle-right'></i></button>";
                        }
                    },
                    {'data': 'tt_shortname'}
                ],
                columnDefs: [{targets: 0, width: '100px'}, {targets: [1,2], width: '80px'}, {targets: 4, width: '120px'}],
                order: [['2', 'asc']],
                scrollX: true,
                bLengthChange: false,
                fnDrawCallback: function(oSettings) {
                    $.each(oSettings.aoData, function(index, data){
                        if(data._aData.tt_id+'' === tt_id+''){
                            $('#tax-types-table tbody tr:eq('+index+')').addClass('selected');
                        }
                    });
                },
                initComplete: function(json, src){
                    initRipple();
                    init_tooltip();
                }
    });

    var table = $('#taxes-table').DataTable({
        ajax: window_location+'/company_settings/taxes/get/'+tt_id,
        columns:[
                    {
                        mData: null, bSortable: false,
                        mRender: function(data, type, full){
                            if($('input#mc_id').val() === $('input#bc_id').val()){
                                if(full.t_setup_company === 'docpro'){
                                    if(full.tax_status === '1'){
                                        return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' class='disable_tax'>";
                                    }
                                    return "<input type='checkbox' style='margin: 0 auto; display: table;' title='Enable or Disable' class='disable_tax'>";
                                }
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised title view' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                    <button type='button' class='btn btn-success btn-xs btn-raised title edit' custom-title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                    <button type='button' class='btn btn-warning btn-xs btn-raised title update' custom-title='Update'><i class='fa fa-refresh'></i></button>";
                            }
                            if(full.t_setup_company === 'docpro'){
                                if(full.tax_status === '1'){
                                    return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                                }
                                return "<input type='checkbox' style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                            }
                            return "<button type='button' class='btn btn-primary btn-xs btn-raised title view' custom-title='View' disabled><i class='fa fa-eye'></i></button>\n\
                                    <button type='button' class='btn btn-success btn-xs btn-raised title edit' custom-title='Edit' disabled><i class='fa fa-pencil'></i></button>\n\
                                    <button type='button' class='btn btn-warning btn-xs btn-raised title update' custom-title='Update' disabled><i class='fa fa-refresh'></i></button>";
                        }
                    },
                    {'data': 't_seq'},
                    {'data': 't_code'},
                    {'data': 't_atc'}, 
                    {'data': 'tt_name'}, 
                    {'data': 't_name'}, 
                    {'data': 't_shortname'}, 
                    {'data': 't_rate'}, 
                    {'data': 't_base'}
                ],
                columnDefs: [{targets: 0, width: '100px'}, {targets: [1,2], width: '40px'}, {targets: [3,6,7,8], width: '70px'}],
                order: [['1', 'asc']],
                scrollX: true,
                bLengthChange: false,
                initComplete: function(json, src){
                    initRipple();
                },
    });

    var init_breadcrumb = function(){
        $('#tax_breadcrumb').html(
                                "<li><a href='#'>"+((tt_name === '') ? '...' : tt_name)+"</a></li>"+
                                "<li><a href='#'>...</a></li>"
                            );
    }
    init_breadcrumb();
    
    $('#tax-types-table').on('click', 'tr', function(){
        $('#tax-types-table tr').removeClass('selected');
        $(this).addClass('selected');
        var data = tt_table.row($(this)).data();
        tt_id = 0;
        tt_name = '';
        if(data.status === '1'){
            tt_id = data.tt_id;
            tt_name = data.tt_name;
        }
        init_breadcrumb();
        table.ajax.url(window_location+'/company_settings/taxes/get/'+tt_id).load();
    });

    $('#add-tt').click(function(){
        $('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        var data = tt_table.row(this.closest('tr')).data();
        $(this).popover({
            animation: true,
            html: true,
            placement: function(context, src){
                $(context).addClass('tt-add-modal-body');
                return 'right';
            },
            content: function(){
                return $('#tt-add-popover').html();
            },
            callback: function(){
                var popover = $('.popover.tt-add-modal-body');
                var restriction = Object.create(v_restriction);
                restriction.required();
                restriction.no_space();
                restriction.number();
                $(popover).find('button.v-submit').unbind('click');
                $(popover).find('button.v-submit').click(function(){
                    var _this = $(this);
                    var validation = Object.create(v_validation);
                    var required_input = validation.required_input(popover);
                    var format_input = validation.format_input(popover);
                    if(!required_input && !format_input){
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
        no_space();
        initNumberValidation();
        initSingleSubmit();
    });
    $('#tax-types-table').on('click', '.view', function(){
        $('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        var data = tt_table.row(this.closest('tr')).data();
        $(this).popover({
            animation: true,
            html: true,
            placement: function(context, src){
                $(context).addClass('tt-view-modal-body');
                return 'right';
            },
            content: function(){
                return $('#tt-view-popover').html();
            },
            callback: function(){
                var popover = $('.popover.tt-view-modal-body');
                popover.find('input[name=tt-view-code]').val(data.tt_code);
                popover.find('input[name=tt-view-name]').val(data.tt_name);
                popover.find('input[name=tt-view-shortname]').val(data.tt_shortname);
            },
            container: '.navbar-body'
        }).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
        $(this).popover('toggle');
        initRipple();
        no_space();
        initNumberValidation();
    });
    $('#tax-types-table').on('click', '.edit', function(){
        $('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        var data = tt_table.row(this.closest('tr')).data();
        $(this).popover({
            animation: true,
            html: true,
            placement: function(context, src){
                $(context).addClass('tt-edit-modal-body');
                return 'right';
            },
            content: function(){
                return $('#tt-edit-popover').html();
            },
            callback: function(){
                var popover = $('.popover.tt-edit-modal-body');
                popover.find('input[name=tt-edit-code]').val(data.tt_code);
                popover.find('input[name=tt-edit-name]').val(data.tt_name);
                popover.find('input[name=tt-edit-shortname]').val(data.tt_shortname);
                popover.find('input[name=tt-edit-id]').val(data.tt_id);
                var restriction = Object.create(v_restriction);
                restriction.required();
                restriction.no_space();
                restriction.number();
                $(popover).find('button.v-submit').unbind('click');
                $(popover).find('button.v-submit').click(function(){
                    var _this = $(this);
                    var validation = Object.create(v_validation);
                    var required_input = validation.required_input(popover);
                    var format_input = validation.format_input(popover);
                    if(!required_input && !format_input){
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
        no_space();
        initNumberValidation();
        initSingleSubmit();
    });
    $('#tax-types-table').on('click', '.update', function(){
        $('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        var data = tt_table.row(this.closest('tr')).data();
        $(this).popover({
            animation: true,
            html: true,
            placement: function(context, src){
                $(context).addClass('tt-update-modal-body');
                return 'right';
            },
            content: function(){
                return $('#tt-update-popover').html();
            },
            callback: function(){
                var popover = $('.popover.tt-update-modal-body');
                popover.find('input[name=tt-update-code]').val(data.tt_code);
                popover.find('input[name=tt-update-name]').val(data.tt_name);
                popover.find('input[name=tt-update-shortname]').val(data.tt_shortname);
                popover.find('input[name=tt-update-id]').val(data.tt_id);
                var restriction = Object.create(v_restriction);
                restriction.required();
                restriction.no_space();
                restriction.number();
                $(popover).find('button.v-submit').unbind('click');
                $(popover).find('button.v-submit').click(function(){
                    var _this = $(this);
                    var validation = Object.create(v_validation);
                    var required_input = validation.required_input(popover);
                    var format_input = validation.format_input(popover);
                    if(!required_input && !format_input){
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
        no_space();
        initNumberValidation();
        initSingleSubmit();
    });
    $('#tax-types-table').on('click', '.delete', function(){
        $('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        var data = tt_table.row(this.closest('tr')).data();
        $(this).popover({
            animation: true,
            html: true,
            placement: function(context, src){
                $(context).addClass('tt-delete-modal-body');
                return 'right';
            },
            content: function(){
                return $('#tt-delete-popover').html();
            },
            callback: function(){
                $('#tt-delete-code').val(data.tt_code);
                $('#tt-delete-name').val(data.tt_name);
                $('#tt-delete-shortname').val(data.tt_shortname);
                $('#tt-delete-id').val(data.tt_id);
            },
            container: '.navbar-body'
        }).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
        $(this).popover('toggle');
        initRipple();
        no_space();
        initNumberValidation();
        initSingleSubmit();
    });

// TAX
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
                var popover = $('body .popover.add-modal-body');
                $('#add-type-select').selectize({
                    create: false,
                    sortField: {
                        field: 'text',
                        direction: 'asc'
                    },
                    dropdownParent: null,
                    onChange: function(){
                        var selectize = $('#add-type-select.selectized').selectize()[0].selectize
                        var code = selectize.options[tt_id].code;
                        $('#add-type-code').val(code);
                    },
                });
                var selectize = $('#add-type-select.selectized').selectize()[0].selectize;
                selectize.clear();
                selectize.clearOptions();
                $.get(window_location+'/company_settings/taxes/get_tax_types', function(response){
                    var data = JSON.parse(response);
                    var selectOptions = [];
                    $.each(data, function(index, data){
                        selectOptions.push({
                            text: data.tt_name,
                            value: data.tt_id,
                            code: data.tt_code
                        });
                    });

                    selectize.clear();
                    selectize.clearOptions();
                    selectize.renderCache = {};
                    selectize.load(function(callback) {
                        callback(selectOptions);
                    });
                    selectize.setValue(tt_id);
                });
                $('#add-type-id').val(tt_id);
                $('#add-type-code').val(tt_code);
                $('#add-type-name').val(tt_name);
                if(tt_code === '5'){
                    popover.find('input[name=add-shortname]').attr('readonly', true);
                }
                var restriction = Object.create(v_restriction);
                restriction.required();
                restriction.no_space();
                restriction.number();
                restriction.decimal();
                $(popover).find('button.v-submit').unbind('click');
                $(popover).find('button.v-submit').click(function(){
                    var _this = $(this);
                    var validation = Object.create(v_validation);
                    var required_input = validation.required_input(popover);
                    var format_input = validation.format_input(popover);
                    var decimal_input = validation.format_input(popover);
                    if(!required_input && !format_input && !decimal_input){
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
        no_space();
        required_readonly();
        initValidation();
        initSingleSubmit();
    });
    $('#taxes-table').on('click', '.view', function(){
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
                popover.find('input[name=view-seq]').val(data.t_seq);
                popover.find('input[name=view-code]').val(data.t_code);
                popover.find('input[name=view-atc]').val(data.t_atc);
                popover.find('input[name=view-type]').val(data.tt_name);
                popover.find('input[name=view-name]').val(data.t_name);
                popover.find('input[name=view-shortname]').val(data.t_shortname);
                popover.find('input[name=view-rate]').val(data.t_rate);
                popover.find('input[name=view-base]').val(data.t_base);
            },
            container: '.navbar-body'
        }).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
        $(this).popover('toggle');
        initRipple();
    });
    $('#taxes-table').on('click', '.edit', function(){
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
                popover.find('input[name=edit-type-id]').val(tt_id);
                popover.find('input[name=edit-type-code]').val(tt_code);
                popover.find('input[name=edit-type-name]').val(tt_name);
                popover.find('input[name=edit-seq]').val(data.t_seq);
                popover.find('input[name=edit-code]').val(data.t_code);
                popover.find('input[name=edit-atc]').val(data.t_atc);
                popover.find('input[name=edit-name]').val(data.t_name);
                popover.find('input[name=edit-shortname]').val(data.t_shortname);
                popover.find('input[name=edit-rate]').val(data.t_rate);
                popover.find('input[name=edit-base]').val(data.t_base);
                popover.find('input[name=edit-type-id]').val(data.tt_id);
                popover.find('input[name=edit-type-code]').val(data.tt_code);
                popover.find('input[name=edit-id]').val(data.t_id);

                var type_select = popover.find('select[name=edit-type-select]').selectize({
                    create: false,
                    sortField: {
                        field: 'text',
                        direction: 'asc'
                    },
                    dropdownParent: null,
                    onChange: function(){
                        var selectize = popover.find('select[name=edit-type-select].selectized').selectize()[0].selectize
                        var code = selectize.options[tt_id].code;
                        $('#edit-type-code').val(code);
                    },
                });
                var selectize = type_select[0].selectize;
                selectize.clear();
                selectize.clearOptions();
                $.get(window_location+'/company_settings/taxes/get_tax_types', function(response){
                    var data = JSON.parse(response);
                    var selectOptions = [];
                    $.each(data, function(index, data){
                        selectOptions.push({
                            text: data.tt_name,
                            value: data.tt_id,
                            code: data.tt_code
                        });
                    });

                    selectize.clear();
                    selectize.clearOptions();
                    selectize.renderCache = {};
                    selectize.load(function(callback) {
                        callback(selectOptions);
                    });
                    selectize.setValue(tt_id);
                });

                if(tt_code === '5'){
                    popover.find('input[name=edit-shortname]').attr('readonly', true);
                }
                var restriction = Object.create(v_restriction);
                restriction.required();
                restriction.no_space();
                restriction.number();
                restriction.decimal();
                $(popover).find('button.v-submit').unbind('click');
                $(popover).find('button.v-submit').click(function(){
                    var _this = $(this);
                    var validation = Object.create(v_validation);
                    var required_input = validation.required_input(popover);
                    var format_input = validation.format_input(popover);
                    var decimal_input = validation.format_input(popover);
                    if(!required_input && !format_input && !decimal_input){
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
        no_space();
        required_readonly();
        initValidation();
        initSingleSubmit();
    });
    $('#taxes-table').on('click', '.update', function(){
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
                popover.find('input[name=update-type-id]').val(tt_id);
                popover.find('input[name=update-type-code]').val(tt_code);
                popover.find('input[name=update-type-name]').val(tt_name);
                popover.find('input[name=update-seq]').val(data.t_seq);
                popover.find('input[name=update-code]').val(data.t_code);
                popover.find('input[name=update-atc]').val(data.t_atc);
                popover.find('input[name=update-name]').val(data.t_name);
                popover.find('input[name=update-shortname]').val(data.t_shortname);
                popover.find('input[name=update-rate]').val(data.t_rate);
                popover.find('input[name=update-base]').val(data.t_base);
                popover.find('input[name=update-type-code]').val(data.tt_code);
                popover.find('input[name=update-id]').val(data.t_id);
                popover.find('input[name=update-type-id]').val(tt_id);

                var type_select = popover.find('select[name=update-type-select]').selectize({
                    create: false,
                    sortField: {
                        field: 'text',
                        direction: 'asc'
                    },
                    dropdownParent: null,
                    onChange: function(){
                        var selectize = popover.find('select[name=update-type-select].selectized').selectize()[0].selectize
                        var code = selectize.options[tt_id].code;
                        $('#update-type-code').val(code);
                    },
                });
                var selectize = type_select[0].selectize;
                selectize.clear();
                selectize.clearOptions();
                $.get(window_location+'/company_settings/taxes/get_tax_types', function(response){
                    var data = JSON.parse(response);
                    var selectOptions = [];
                    $.each(data, function(index, data){
                        selectOptions.push({
                            text: data.tt_name,
                            value: data.tt_id,
                            code: data.tt_code
                        });
                    });

                    selectize.clear();
                    selectize.clearOptions();
                    selectize.renderCache = {};
                    selectize.load(function(callback) {
                        callback(selectOptions);
                    });
                    selectize.setValue(tt_id);
                });

                var restriction = Object.create(v_restriction);
                restriction.required();
                restriction.no_space();
                restriction.number();
                restriction.decimal();
                $(popover).find('button.v-submit').unbind('click');
                $(popover).find('button.v-submit').click(function(){
                    var _this = $(this);
                    var validation = Object.create(v_validation);
                    var required_input = validation.required_input(popover);
                    var format_input = validation.format_input(popover);
                    var decimal_input = validation.format_input(popover);
                    if(!required_input && !format_input && !decimal_input){
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
        no_space();
        required_readonly();
        initValidation();
        initSingleSubmit();
    });
    $('#taxes-table').on('click', '.delete', function(){
        $('body').on('hidden.bs.popover', function (e) {
            $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
        });
        var data = table.row(this.closest('tr')).data();
        let seq = $(this.closest('tr')).find('td:eq(1)').text();
        $(this).popover({
            animation: true,
            html: true,
            placement: function(context, src){
                $(context).addClass('delete-modal-body');
                return 'right';
            },
            content: function(){
                return $('#delete-popover').html();
            },
            callback: function(){
                $('#delete-code').val(data.t_code);
                $('#delete-atc').val(data.t_atc);
                $('#delete-type').val(data.tt_name);
                $('#delete-name').val(data.t_name);
                $('#delete-shortname').val(data.t_shortname);
                $('#delete-rate').val(data.t_rate);
                $('#delete-base').val(data.t_base);
                $('#delete-type-id').val(data.tt_id);
                $('#delete-type-code').val(data.tt_code);
                $('#delete-id').val(data.t_id);
            },
            container: '.navbar-body'
        }).on('show.bs.popover', function(){
            $('.popover').not(this).popover('hide');
            $('.card-body button').attr('disabled', true);
        });
        $(this).popover('toggle');
        initRipple();
        no_space();
        required_readonly();
        initValidation();
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

    $('body').on('click', '.disable_tax_type', function(){
        let id = tt_table.row($(this).closest('tr')).data().tt_id;
        if($(this).is(':checked')){
            $.get(window_location+'/company_settings/taxtypes/enable_tax_type', {id: id}, function(response){});
        }
        if(!$(this).is(':checked')){
            $.get(window_location+'/company_settings/taxtypes/disable_tax_type', {id: id}, function(response){});
        }
        $(document).ajaxComplete(function(){
            tt_id = 0;
            tt_code = '';
            tt_name = '';
            $('#tax-breadcrumb').html("<li><a href='#'>...</a></li>"+
                                        "<li><a href='#'>...</a></li>");
            $(this).closest('table').find('tr').removeClass('selected');
            $(this).addClass('selected');
            tt_table.ajax.reload(function(){}, false);
            table.ajax.url(window_location+'/company_settings/taxes/get/0').load(function(){});
            $(document).unbind('ajaxComplete');
        });
    });
    $('body').on('click', '.disable_tax', function(){
        let id = table.row($(this).closest('tr')).data().t_id;
        if($(this).is(':checked')){
            $.get(window_location+'/company_settings/taxes/enable_tax', {id: id}, function(){
                table.ajax.reload(function(){}, false);
            });
        }
        if(!$(this).is(':checked')){
            $.get(window_location+'/company_settings/taxes/disable_tax', {id: id}, function(){
                table.ajax.reload(function(){}, false);
            });
        }
    });

    tax_seq.currentPhaseStarted = function(id, sequence){
        if(parseFloat(tt_id) === 0){
            $('#add').attr('disabled', true);
            $('#tax-alert').css('display', 'block');
        }else{
            $('#add').removeAttr('disabled');
            $('#tax-alert').css('display', 'none');
        }
    }
    var init = function(){
        if(parseFloat(tt_id) === 0){
            $('#add').attr('disabled', true);
            $('#tax-alert').css('display', 'block');
        }else{
            $('#add').removeAttr('disabled');
            $('#tax-alert').css('display', 'none');
        }
    }
    init();
</script>