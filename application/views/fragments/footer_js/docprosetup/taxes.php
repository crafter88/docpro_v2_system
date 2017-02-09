<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/docpro_setup/tax_setup_seq.js"></script>

<script>
    $(document).ready(function(){
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
            ajax: window_location+'/docpro_setup/taxtypes/get',
            columns:[
                        {
                            mData: null, bSortable: false,
                            mRender: function(data, type, full){
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                        <button type='button' class='btn btn-danger btn-xs btn-raised title delete' custom-title='Delete'><i class='fa fa-times'></i></button>";
                            }
                        },
                        {'data': 'tt_seq'}, 
                        {'data': 'tt_code'}, 
                        {
                            mRender: function(row, setting, full){
                                return full.tt_name + "<button type='button' class='btn btn-raised btn-default btn-xs next-level show-lvl-2' title='Show Classifications'><i class='fa fa-angle-right'></i></button>";

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
            ajax: window_location+'/docpro_settings/taxes/get/'+tt_id,
            columns:[
                        {
                            mData: null, bSortable: false,
                            mRender: function(data, type, full){
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised title view' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised title edit' custom-title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                        <button type='button' class='btn btn-danger btn-xs btn-raised title delete' custom-title='Delete'><i class='fa fa-times'></i></button>";
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
                    columnDefs: [{targets: 0, width: '100px'}, {targets: [1,2], width: '40px'}],
                    order: [['1', 'asc']],
                    scrollX: true,
                    bLengthChange: false,
                    initComplete: function(json, src){
                        initRipple();
                    },
        });
        
        var tmp = $.fn.popover.Constructor.prototype.show;
        $.fn.popover.Constructor.prototype.show = function () {
              tmp.call(this);
              if (this.options.callback) {
                this.options.callback();
              }
        }

        var init_breadcrumb = function(){
            $('#tax_breadcrumb').html(
                                    "<li><a href='#'>"+((tt_name === '') ? '...' : tt_name)+"</a></li>"+
                                    "<li><a href='#'>...</a></li>"
                                );
            if(parseFloat(tt_id) > 0){
                $('#add').removeAttr('disabled');
                $('#tax-alert').css('display', 'none');
            }else{
               $('#add').attr('disabled', true);
               $('#tax-alert').css('display', 'block');
            }
        }
        init_breadcrumb();
        

        $('#tax-types-table').on('click', 'tr', function(){
            $('#tax-types-table tr').removeClass('selected');
            $(this).addClass('selected');
            var data = tt_table.row($(this)).data();
            tt_id = data.tt_id;
            tt_name = data.tt_name;
            tt_code = data.tt_code;
            init_breadcrumb();
            table.ajax.url(window_location+'/docpro_settings/taxes/get/'+tt_id).load();
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
                    popover.find('input[name=tt-view-seq]').val(data.tt_seq);
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
                    popover.find('input[name=tt-edit-seq]').val(data.tt_seq);
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
                    $('#tt-update-code').val(data.tt_code);
                    $('#tt-update-name').val(data.tt_name);
                    $('#tt-update-shortname').val(data.tt_shortname);
                    $('#tt-update-id').val(data.tt_id);
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
                    var popover = $('.popover.tt-delete-modal-body');
                    popover.find('input[name=tt-delete-seq]').val(data.tt_seq);
                    popover.find('input[name=tt-delete-code]').val(data.tt_code);
                    popover.find('input[name=tt-delete-name]').val(data.tt_name);
                    popover.find('input[name=tt-delete-shortname]').val(data.tt_shortname);
                    popover.find('input[name=tt-delete-id]').val(data.tt_id);
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
                    $.get(window_location+'/docpro_settings/taxes/get_tax_types', function(response){
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
                    $('#edit-type-select').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            direction: 'asc'
                        },
                        dropdownParent: null,
                        onChange: function(){
                            var selectize = $('#edit-type-select.selectized').selectize()[0].selectize
                            var code = selectize.options[tt_id].code;
                            $('#edit-type-code').val(code);
                        },
                    });
                    var selectize = $('#edit-type-select.selectized').selectize()[0].selectize;
                    selectize.clear();
                    selectize.clearOptions();
                    $.get(window_location+'/docpro_settings/taxes/get_tax_types', function(response){
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
                    $('#edit-type-id').val(tt_id);
                    $('#edit-type-code').val(tt_code);
                    $('#edit-type-name').val(tt_name);
                    $('#edit-type-id').val(data.tt_id);
                    $('#edit-type-code').val(data.tt_code);

                    var popover = $('.popover.edit-modal-body');
                    popover.find('input[name=edit-seq]').val(data.t_seq);
                    popover.find('input[name=edit-code]').val(data.t_code);
                    popover.find('input[name=edit-atc]').val(data.t_atc);
                    popover.find('input[name=edit-name]').val(data.t_name);
                    popover.find('input[name=edit-shortname]').val(data.t_shortname);
                    popover.find('input[name=edit-rate]').val(data.t_rate);
                    popover.find('input[name=edit-base]').val(data.t_base);
                    popover.find('input[name=edit-id]').val(data.t_id);
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
            let seq = $(this.closest('tr')).find('td:eq(1)').text();
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
                    $('#update-type-select').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            direction: 'asc'
                        },
                        dropdownParent: null,
                        onChange: function(){
                            var selectize = $('#update-type-select.selectized').selectize()[0].selectize
                            var code = selectize.options[tt_id].code;
                            $('#update-type-code').val(code);
                        },
                    });
                    var selectize = $('#update-type-select.selectized').selectize()[0].selectize;
                    selectize.clear();
                    selectize.clearOptions();
                    $.get(window_location+'/docpro_settings/taxes/get_tax_types', function(response){
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
                    $('#update-type-id').val(tt_id);
                    $('#update-type-code').val(tt_code);
                    $('#update-type-name').val(tt_name);

                    $('#update-code').val(data.t_code);
                    $('#update-atc').val(data.t_atc);
                    $('#update-name').val(data.t_name);
                    $('#update-shortname').val(data.t_shortname);
                    $('#update-rate').val(data.t_rate);
                    $('#update-base').val(data.t_base);
                    $('#update-type-id').val(data.tt_id);
                    $('#update-type-code').val(data.tt_code);
                    $('#update-id').val(data.t_id);
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
                    var popover = $('.popover.delete-modal-body');
                    popover.find('input[name=delete-seq]').val(data.t_seq);
                    popover.find('input[name=delete-code]').val(data.t_code);
                    popover.find('input[name=delete-atc]').val(data.t_atc);
                    popover.find('input[name=delete-type]').val(data.tt_name);
                    popover.find('input[name=delete-name]').val(data.t_name);
                    popover.find('input[name=delete-shortname]').val(data.t_shortname);
                    popover.find('input[name=delete-rate]').val(data.t_rate);
                    popover.find('input[name=delete-base]').val(data.t_base);
                    popover.find('input[name=delete-id]').val(data.t_id);
                    $('#delete-type-id').val(data.tt_id);
                    $('#delete-type-code').val(data.tt_code);
                    $('#delete-type-name').val(data.tt_name);
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
    });
</script>

<script>
    $(document).ready(function(){
        var tmp = $.fn.popover.Constructor.prototype.show;
            $.fn.popover.Constructor.prototype.show = function () {
              tmp.call(this);
              if (this.options.callback) {
                this.options.callback();
              }
        }
        
        $('div').on('click', '.close-popover', function(){
            $('.popover').popover('hide');
            $('.card-body button').removeAttr('disabled');
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='add-type']").val($(this)[0].textContent);
            $("input[name='add-type-id']").val($(this).attr('type-id'));
            $("input[name='add-type-code']").val($(this).attr('type-code'));
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='edit-type']").val($(this)[0].textContent);
            $("input[name='edit-type-id']").val($(this).attr('type-id'));
            $("input[name='edit-type-code']").val($(this).attr('type-code'));
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='update-type']").val($(this)[0].textContent);
            $("input[name='update-type-id']").val($(this).attr('type-id'));
            $("input[name='update-type-code']").val($(this).attr('type-code'));
        });
        $('.navbar-body').on('click', '.add-type-btn', function(){
            $('#add-options').html($('#t-type-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.edit-type-btn', function(){
            $('#edit-options').html($('#t-type-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.update-type-btn', function(){
            $('#update-options').html($('#t-type-select').html());
            initRipple();
        });

        // $('#switch-state').bootstrapSwitch();
        // init_table_option(table, $(this).closest('side-body'));
    });
</script>