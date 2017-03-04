<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/company_settings/table/business_partners.js"></script>
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
            $('#business-partners-table thead tr#searchfilterrow th').each( function () {
                if($(this).index() !== 0){
                    var title = $('#business-partners-table thead th').eq( $(this).index() ).text();
                    $(this).html( '<input type="text" onclick="stopPropagation(event);" placeholder="Search '+title+'" />' );
                }
            });
            $("#business-partners-table thead input").on( 'keyup change', function () {
                table.column($(this).parent().index()+':visible')
                     .search(this.value)
                     .draw();
            } );
        })();

        var table = $('#business-partners-table').DataTable({
            ajax: window_location+'/company_settings/business_partners/get',
            columns:[{
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
            {'data': 'co_bp_seq'}, {'data': 'co_bp_code'}, {'data': 'bp_name'}, {'data': 'co_bp_shortname'}, {'data': 'co_bp_bus_style'}, {'data': 'co_bp_address'}, {'data': 'co_bp_tin'}, {'data': 'co_bp_particulars'}, {'data': 'bpc_class'}, {'data': 'bpt_type'}],
            columnDefs: [{targets: 0, width: '110px'}],
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
                    var bp_class = popover.find('#add-class').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        },
                        onChange: function(value){
                            var popover = $('.popover.add-modal-body');
                            var select = popover.find('#add-class').selectize()[0].selectize;
                            var code = select.options[value].code;
                            if(code === '61'){
                                popover.find('input[name=new-class]').removeAttr('readonly');
                            }else{
                                popover.find('input[name=new-class]').val('');
                                popover.find('input[name=new-class]').attr('readonly', true);
                            }
                            popover.find('input[name=bpc_code]').val(code);
                        }
                    });
                    var bp_class_select = bp_class[0].selectize;
                    bp_class_select.clear();
                    bp_class_select.clearOptions();
                    $.get(window_location+'/company_settings/business_partners/get_bp_class', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.bpc_class,
                                value: data.bpc_id,
                                code: data.bpc_code
                            });
                        });
                        bp_class_select.clear();
                        bp_class_select.clearOptions();
                        bp_class_select.cacheRender = {};
                        bp_class_select.load(function(callback){
                            callback(selectOptions);
                        });
                    });
                    var bp_type = popover.find('#add-type').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        }
                    });
                    var bp_type_select = bp_type[0].selectize;
                    bp_type_select.clear();
                    bp_type_select.clearOptions();
                    $.get(window_location+'/company_settings/business_partners/get_bp_type', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.bpt_type,
                                value: data.bpt_id,
                                code: data.bpt_code
                            });
                        });
                        bp_type_select.clear();
                        bp_type_select.clearOptions();
                        bp_type_select.cacheRender = {};
                        bp_type_select.load(function(callback){
                            callback(selectOptions);
                        });
                    });
                    var tax1 = popover.find('#add-tax-1').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        }
                    });
                    var tax1_select = tax1[0].selectize;
                    tax1_select.clear();
                    tax1_select.clearOptions();
                    $.get(window_location+'/company_settings/business_partners/get_tax_1', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.t_name,
                                value: data.t_id,
                                code: data.t_code
                            });
                        });
                        tax1_select.clear();
                        tax1_select.clearOptions();
                        tax1_select.cacheRender = {};
                        tax1_select.load(function(callback){
                            callback(selectOptions);
                        });
                    });
                    var tax2 = popover.find('#add-tax-2').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        }
                    });
                    var tax2_select = tax2[0].selectize;
                    tax2_select.clear();
                    tax2_select.clearOptions();
                    $.get(window_location+'/company_settings/business_partners/get_tax_2', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.t_atc,
                                value: data.t_id,
                                code: data.t_code
                            });
                        });
                        tax2_select.clear();
                        tax2_select.clearOptions();
                        tax2_select.cacheRender = {};
                        tax2_select.load(function(callback){
                            callback(selectOptions);
                        });
                    });
                    var tax3 = popover.find('#add-tax-3').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        }
                    });
                    var tax3_select = tax3[0].selectize;
                    tax3_select.clear();
                    tax3_select.clearOptions();
                    $.get(window_location+'/company_settings/business_partners/get_tax_3', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.t_atc,
                                value: data.t_id,
                                code: data.t_code
                            });
                        });
                        tax3_select.clear();
                        tax3_select.clearOptions();
                        tax3_select.cacheRender = {};
                        tax3_select.load(function(callback){
                            callback(selectOptions);
                        });
                    });

                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    restriction.format();
                    restriction.select_required();
                    restriction.tin();
                    popover.find('button.v-submit').unbind('click');
                    popover.find('button.v-submit').click(function(){
                        var _this = $(this);
                        var validation = Object.create(v_validation);
                        var required_input = validation.required_input(popover);
                        var format_input = validation.format_input(popover);
                        var required_select = validation.required_select(popover);
                        if(!required_input && !format_input && !required_select){
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
        $('#business-partners-table').on('click', '.view', function(){
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
                    popover.find('input[name=view-seq]').val(data.co_bp_seq);
                    popover.find('input[name=view-code]').val(data.co_bp_code);
                    popover.find('input[name=view-name]').val(data.bp_name);
                    popover.find('input[name=view-trade-name]').val(data.co_bp_trade_name);
                    popover.find('input[name=view-shortname]').val(data.co_bp_shortname);
                    popover.find('input[name=view-style]').val(data.co_bp_bus_style);
                    popover.find('input[name=view-address]').val(data.co_bp_address);
                    popover.find('input[name=view-tin]').val(data.co_bp_tin);
                    popover.find('input[name=view-particulars]').val(data.co_bp_particulars);
                    popover.find('input[name=view-class]').val(data.bpc_class);
                    popover.find('input[name=view-type]').val(data.bpt_type);
                    popover.find('input[name=view-tax-1]').val(data.vat.length > 0 ? data.vat[0].t_name : '');
                    popover.find('input[name=view-tax-2]').val(data.ewt.length > 0 ? data.ewt[0].t_atc : '');
                    popover.find('input[name=view-tax-3]').val(data.fwt.length > 0 ? data.fwt[0].t_atc : '');
                    popover.find('.add-vat-row-plate').html('');
                    $.each(data.vat, function(index, value){
                        if(index !== 0){
                            var vat_table = popover.find('.add-vat-row-plate');
                            var row = "<tr class='vat'>"+
                                        "<td style='width: 150px; text-align: right; padding-right: 20px;' title='Value Added Tax'></td>"+
                                        "<td>"+
                                            "<input name='add-tax-1[]' class='form-control' value='"+value.t_name+"' readonly>"+
                                        "</td>"+
                                        "<td style='width: 50px;'></td>"+
                                    "</tr>";
                            vat_table.append(row);
                        }
                    });
                    popover.find('.add-ewt-row-plate').html('');
                    $.each(data.ewt, function(index, value){
                        if(index !== 0){
                            var ewt_table = popover.find('.add-ewt-row-plate');
                            var row = "<tr>"+
                                        "<td style='width: 150px; text-align: right; padding-right: 20px;' title='Expanded Withholding Tax'></td>"+
                                        "<td>"+
                                            "<input name='add-tax-2[]' class='form-control' value='"+value.t_atc+"' readonly>"+
                                        "</td>"+
                                        "<td style='width: 50px;'></td>"+
                                    "</tr>";
                            ewt_table.append(row);
                        }
                    });
                    popover.find('.add-fwt-row-plate').html('');
                    $.each(data.fwt, function(index, value){
                        if(index !== 0){
                            var fwt_table = popover.find('.add-fwt-row-plate');
                            var row = "<tr>"+
                                        "<td style='width: 150px; text-align: right; padding-right: 20px;' title='Final Withholding Tax'></td>"+
                                        "<td>"+
                                            "<input name='add-tax-3[]' class='form-control' value='"+value.t_atc+"' readonly>"+
                                        "</td>"+
                                        "<td style='width: 50px;'></td>"+
                                    "</tr>";
                            fwt_table.append(row);
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
        });
        $('#business-partners-table').on('click', '.edit', function(){
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
                    var bp_class = popover.find('#edit-class').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        },
                        onChange: function(value){
                            var select = popover.find('#edit-class').selectize()[0].selectize;
                            var code = select.options[value] !== undefined ? select.options[value].code : '';
                            if(code === '61'){
                                popover.find('input[name=new-class]').removeAttr('readonly');
                            }else{
                                popover.find('input[name=new-class]').val('');
                                popover.find('input[name=new-class]').attr('readonly', true);
                            }
                            var code = code === '' ? '61' : code;
                            popover.find('input[name=bpc_code]').val(code);
                        }
                    });
                    var bp_class_select = bp_class[0].selectize;
                    bp_class_select.clear();
                    bp_class_select.clearOptions();
                    $.get(window_location+'/company_settings/business_partners/get_bp_class', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.bpc_class,
                                value: data.bpc_id,
                                code: data.bpc_code
                            });
                        });
                        bp_class_select.clear();
                        bp_class_select.clearOptions();
                        bp_class_select.cacheRender = {};
                        bp_class_select.load(function(callback){
                            callback(selectOptions);
                        });
                        bp_class_select.setValue(data.bpc_id);
                    });
                    var bp_type = popover.find('#edit-type').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        }
                    });
                    var bp_type_select = bp_type[0].selectize;
                    bp_type_select.clear();
                    bp_type_select.clearOptions();
                    $.get(window_location+'/company_settings/business_partners/get_bp_type', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.bpt_type,
                                value: data.bpt_id,
                                code: data.bpt_code
                            });
                        });
                        bp_type_select.clear();
                        bp_type_select.clearOptions();
                        bp_type_select.cacheRender = {};
                        bp_type_select.load(function(callback){
                            callback(selectOptions);
                        });
                        bp_type_select.setValue(data.bpt_id);
                    });
                    popover.find('.add-vat-row-plate').html('');
                    $.each(data.vat, function(index, value){
                        if(index !== 0){
                            var vat_table = popover.find('.add-vat-row-plate');
                            var row = "<tr class='vat'>"+
                                        "<td style='width: 150px; text-align: right; padding-right: 20px;' title='Value Added Tax'></td>"+
                                        "<td>"+
                                            "<select name='add-tax-1[]' placeholder='Select...'></select>"+
                                        "</td>"+
                                        "<td style='width: 50px;'>"+
                                            "<button class='btn btn-xs btn-default remove-vat-row' title='remove row' type='button' style='background-color: transparent; margin-top: 10px; text-align: left;'><i class='fa fa-minus'></i></button>"+
                                        "</td>"+
                                    "</tr>";
                            vat_table.append(row);
                            var select = vat_table.find('select:last-child');
                            var tax1 = select.selectize({
                                        create: false,
                                        sortField: {
                                            field: 'text',
                                            sort: 'asc'
                                        }
                                    });
                            var tax1_select = tax1[0].selectize;
                            tax1_select.clear();
                            tax1_select.clearOptions();
                            $.get(window_location+'/company_settings/business_partners/get_tax_1', function(response){
                                var json_data = JSON.parse(response);
                                var selectOptions = [];
                                $.each(json_data, function(index, data){
                                    selectOptions.push({
                                        text: data.t_name,
                                        value: data.t_id,
                                        code: data.t_code
                                    });
                                });
                                tax1_select.clear();
                                tax1_select.clearOptions();
                                tax1_select.cacheRender = {};
                                tax1_select.load(function(callback){
                                    callback(selectOptions);
                                });
                                tax1_select.setValue(value.t_id);
                            });    
                        }
                    });
                    popover.find('.add-ewt-row-plate').html('');
                    $.each(data.ewt, function(index, value){
                        if(index !== 0){
                            var ewt_table = popover.find('.add-ewt-row-plate');
                            var row = "<tr>"+
                                        "<td style='width: 150px; text-align: right; padding-right: 20px;' title='Expanded Withholding Tax'></td>"+
                                        "<td>"+
                                            "<select name='add-tax-2[]' placeholder='Select...'></select>"+
                                        "</td>"+
                                        "<td style='width: 50px;'>"+
                                            "<button class='btn btn-xs btn-default remove-ewt-row' title='remove row' type='button' style='background-color: transparent; margin-top: 10px; text-align: left;'><i class='fa fa-minus'></i></button>"+
                                        "</td>"+
                                    "</tr>";
                            ewt_table.append(row);
                            var select = ewt_table.find('select:last-child');
                            var tax2 = select.selectize({
                                        create: false,
                                        sortField: {
                                            field: 'text',
                                            sort: 'asc'
                                        }
                                    });
                            var tax2_select = tax2[0].selectize;
                            tax2_select.clear();
                            tax2_select.clearOptions();
                            $.get(window_location+'/company_settings/business_partners/get_tax_2', function(response){
                                var json_data = JSON.parse(response);
                                var selectOptions = [];
                                $.each(json_data, function(index, data){
                                    selectOptions.push({
                                        text: data.t_atc,
                                        value: data.t_id,
                                        code: data.t_code
                                    });
                                });
                                tax2_select.clear();
                                tax2_select.clearOptions();
                                tax2_select.cacheRender = {};
                                tax2_select.load(function(callback){
                                    callback(selectOptions);
                                });
                                tax2_select.setValue(value.t_id);
                            });  
                        }   
                    });
                    popover.find('.add-fwt-row-plate').html('');
                    $.each(data.fwt, function(index, value){
                        if(index !== 0){
                            var fwt_table = popover.find('.add-fwt-row-plate');
                            var row = "<tr>"+
                                        "<td style='width: 150px; text-align: right; padding-right: 20px;' title='Final Withholding Tax'></td>"+
                                        "<td>"+
                                            "<select name='add-tax-3[]' placeholder='Select...'></select>"+
                                        "</td>"+
                                        "<td style='width: 50px;'>"+
                                            "<button class='btn btn-xs btn-default remove-ewt-row' title='remove row' type='button' style='background-color: transparent; margin-top: 10px; text-align: left;'><i class='fa fa-minus'></i></button>"+
                                        "</td>"+
                                    "</tr>";
                            fwt_table.append(row);
                            var select = fwt_table.find('select:last-child');
                            var tax3 = select.selectize({
                                        create: false,
                                        sortField: {
                                            field: 'text',
                                            sort: 'asc'
                                        }
                                    });
                            var tax3_select = tax3[0].selectize;
                            tax3_select.clear();
                            tax3_select.clearOptions();
                            $.get(window_location+'/company_settings/business_partners/get_tax_3', function(response){
                                var json_data = JSON.parse(response);
                                var selectOptions = [];
                                $.each(json_data, function(index, data){
                                    selectOptions.push({
                                        text: data.t_atc,
                                        value: data.t_id,
                                        code: data.t_code
                                    });
                                });
                                tax3_select.clear();
                                tax3_select.clearOptions();
                                tax3_select.cacheRender = {};
                                tax3_select.load(function(callback){
                                    callback(selectOptions);
                                });
                                tax3_select.setValue(value.t_id);
                            });  
                        }   
                    });
                    var tax1 = popover.find('#edit-tax-1').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        }
                    });
                    var tax1_select = tax1[0].selectize;
                    tax1_select.clear();
                    tax1_select.clearOptions();
                    $.get(window_location+'/company_settings/business_partners/get_tax_1', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.t_name,
                                value: data.t_id,
                                code: data.t_code
                            });
                        });
                        tax1_select.clear();
                        tax1_select.clearOptions();
                        tax1_select.cacheRender = {};
                        tax1_select.load(function(callback){
                            callback(selectOptions);
                        });
                        if(data.vat.length > 0){
                            tax1_select.setValue(data.vat[0].t_id);
                        }
                    });
                    var tax2 = popover.find('#edit-tax-2').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        }
                    });
                    var tax2_select = tax2[0].selectize;
                    tax2_select.clear();
                    tax2_select.clearOptions();
                    $.get(window_location+'/company_settings/business_partners/get_tax_2', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.t_atc,
                                value: data.t_id,
                                code: data.t_code
                            });
                        });
                        tax2_select.clear();
                        tax2_select.clearOptions();
                        tax2_select.cacheRender = {};
                        tax2_select.load(function(callback){
                            callback(selectOptions);
                        });
                        if(data.ewt.length > 0){
                            tax2_select.setValue(data.ewt[0].t_id);
                        }
                    });
                    var tax3 = popover.find('#edit-tax-3').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        }
                    });
                    var tax3_select = tax3[0].selectize;
                    tax3_select.clear();
                    tax3_select.clearOptions();
                    $.get(window_location+'/company_settings/business_partners/get_tax_3', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.t_atc,
                                value: data.t_id,
                                code: data.t_code
                            });
                        });
                        tax3_select.clear();
                        tax3_select.clearOptions();
                        tax3_select.cacheRender = {};
                        tax3_select.load(function(callback){
                            callback(selectOptions);
                        });
                        if(data.fwt.length > 0){
                            tax3_select.setValue(data.fwt[0].t_id);
                        }
                    });

                    popover.find('input[name=edit-seq]').val(data.co_bp_seq);
                    popover.find('input[name=edit-code]').val(data.co_bp_code);
                    popover.find('input[name=edit-name]').val(data.co_bp_name);
                    popover.find('input[name=edit-trade-name]').val(data.co_bp_trade_name);
                    popover.find('input[name=edit-shortname]').val(data.co_bp_shortname);
                    popover.find('input[name=edit-style]').val(data.co_bp_bus_style);
                    popover.find('input[name=edit-address]').val(data.co_bp_address);
                    popover.find('input[name=edit-tin]').val(data.co_bp_tin);
                    popover.find('input[name=edit-particulars]').val(data.co_bp_particulars);
                    popover.find('input[name=edit-id]').val(data.co_bp_id);

                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    restriction.format();
                    restriction.select_required();
                    restriction.tin();
                    popover.find('button.v-submit').unbind('click');
                    popover.find('button.v-submit').click(function(){
                        var _this = $(this);
                        var validation = Object.create(v_validation);
                        var required_input = validation.required_input(popover);
                        var format_input = validation.format_input(popover);
                        var required_select = validation.required_select(popover);
                        if(!required_input && !format_input && !required_select){
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
        $('#business-partners-table').on('click', '.update', function(){
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
                    var bp_class = popover.find('#update-class').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        },
                        onChange: function(value){
                            var select = popover.find('#update-class').selectize()[0].selectize;
                            var code = select.options[value] !== undefined ? select.options[value].code : '';
                            if(code === '61'){
                                popover.find('input[name=new-class]').removeAttr('readonly');
                            }else{
                                popover.find('input[name=new-class]').val('');
                                popover.find('input[name=new-class]').attr('readonly', true);
                            }
                            var code = code === '' ? '61' : code;
                            popover.find('input[name=bpc_code]').val(code);
                        }
                    });
                    var bp_class_select = bp_class[0].selectize;
                    bp_class_select.clear();
                    bp_class_select.clearOptions();
                    $.get(window_location+'/company_settings/business_partners/get_bp_class', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.bpc_class,
                                value: data.bpc_id,
                                code: data.bpc_code
                            });
                        });
                        bp_class_select.clear();
                        bp_class_select.clearOptions();
                        bp_class_select.cacheRender = {};
                        bp_class_select.load(function(callback){
                            callback(selectOptions);
                        });
                        bp_class_select.setValue(data.bpc_id);
                    });
                    var bp_type = popover.find('#update-type').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        }
                    });
                    var bp_type_select = bp_type[0].selectize;
                    bp_type_select.clear();
                    bp_type_select.clearOptions();
                    $.get(window_location+'/company_settings/business_partners/get_bp_type', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.bpt_type,
                                value: data.bpt_id,
                                code: data.bpt_code
                            });
                        });
                        bp_type_select.clear();
                        bp_type_select.clearOptions();
                        bp_type_select.cacheRender = {};
                        bp_type_select.load(function(callback){
                            callback(selectOptions);
                        });
                        bp_type_select.setValue(data.bpt_id);
                    });
                    popover.find('.add-vat-row-plate').html('');
                    $.each(data.vat, function(index, value){
                        if(index !== 0){
                            var vat_table = popover.find('.add-vat-row-plate');
                            var row = "<tr class='vat'>"+
                                        "<td style='width: 150px; text-align: right; padding-right: 20px;' title='Value Added Tax'></td>"+
                                        "<td>"+
                                            "<select name='add-tax-1[]' placeholder='Select...'></select>"+
                                        "</td>"+
                                        "<td style='width: 50px;'>"+
                                            "<button class='btn btn-xs btn-default remove-vat-row' title='remove row' type='button' style='background-color: transparent; margin-top: 10px; text-align: left;'><i class='fa fa-minus'></i></button>"+
                                        "</td>"+
                                    "</tr>";
                            vat_table.append(row);
                            var select = vat_table.find('select:last-child');
                            var tax1 = select.selectize({
                                        create: false,
                                        sortField: {
                                            field: 'text',
                                            sort: 'asc'
                                        }
                                    });
                            var tax1_select = tax1[0].selectize;
                            tax1_select.clear();
                            tax1_select.clearOptions();
                            $.get(window_location+'/company_settings/business_partners/get_tax_1', function(response){
                                var json_data = JSON.parse(response);
                                var selectOptions = [];
                                $.each(json_data, function(index, data){
                                    selectOptions.push({
                                        text: data.t_name,
                                        value: data.t_id,
                                        code: data.t_code
                                    });
                                });
                                tax1_select.clear();
                                tax1_select.clearOptions();
                                tax1_select.cacheRender = {};
                                tax1_select.load(function(callback){
                                    callback(selectOptions);
                                });
                                tax1_select.setValue(value.t_id);
                            });    
                        }
                    });
                    popover.find('.add-ewt-row-plate').html('');
                    $.each(data.ewt, function(index, value){
                        if(index !== 0){
                            var ewt_table = popover.find('.add-ewt-row-plate');
                            var row = "<tr>"+
                                        "<td style='width: 150px; text-align: right; padding-right: 20px;' title='Expanded Withholding Tax'></td>"+
                                        "<td>"+
                                            "<select name='add-tax-2[]' placeholder='Select...'></select>"+
                                        "</td>"+
                                        "<td style='width: 50px;'>"+
                                            "<button class='btn btn-xs btn-default remove-ewt-row' title='remove row' type='button' style='background-color: transparent; margin-top: 10px; text-align: left;'><i class='fa fa-minus'></i></button>"+
                                        "</td>"+
                                    "</tr>";
                            ewt_table.append(row);
                            var select = ewt_table.find('select:last-child');
                            var tax2 = select.selectize({
                                        create: false,
                                        sortField: {
                                            field: 'text',
                                            sort: 'asc'
                                        }
                                    });
                            var tax2_select = tax2[0].selectize;
                            tax2_select.clear();
                            tax2_select.clearOptions();
                            $.get(window_location+'/company_settings/business_partners/get_tax_2', function(response){
                                var json_data = JSON.parse(response);
                                var selectOptions = [];
                                $.each(json_data, function(index, data){
                                    selectOptions.push({
                                        text: data.t_atc,
                                        value: data.t_id,
                                        code: data.t_code
                                    });
                                });
                                tax2_select.clear();
                                tax2_select.clearOptions();
                                tax2_select.cacheRender = {};
                                tax2_select.load(function(callback){
                                    callback(selectOptions);
                                });
                                tax2_select.setValue(value.t_id);
                            });  
                        }   
                    });
                    popover.find('.add-fwt-row-plate').html('');
                    $.each(data.fwt, function(index, value){
                        if(index !== 0){
                            var fwt_table = popover.find('.add-fwt-row-plate');
                            var row = "<tr>"+
                                        "<td style='width: 150px; text-align: right; padding-right: 20px;' title='Final Withholding Tax'></td>"+
                                        "<td>"+
                                            "<select name='add-tax-3[]' placeholder='Select...'></select>"+
                                        "</td>"+
                                        "<td style='width: 50px;'>"+
                                            "<button class='btn btn-xs btn-default remove-ewt-row' title='remove row' type='button' style='background-color: transparent; margin-top: 10px; text-align: left;'><i class='fa fa-minus'></i></button>"+
                                        "</td>"+
                                    "</tr>";
                            fwt_table.append(row);
                            var select = fwt_table.find('select:last-child');
                            var tax3 = select.selectize({
                                        create: false,
                                        sortField: {
                                            field: 'text',
                                            sort: 'asc'
                                        }
                                    });
                            var tax3_select = tax3[0].selectize;
                            tax3_select.clear();
                            tax3_select.clearOptions();
                            $.get(window_location+'/company_settings/business_partners/get_tax_3', function(response){
                                var json_data = JSON.parse(response);
                                var selectOptions = [];
                                $.each(json_data, function(index, data){
                                    selectOptions.push({
                                        text: data.t_atc,
                                        value: data.t_id,
                                        code: data.t_code
                                    });
                                });
                                tax3_select.clear();
                                tax3_select.clearOptions();
                                tax3_select.cacheRender = {};
                                tax3_select.load(function(callback){
                                    callback(selectOptions);
                                });
                                tax3_select.setValue(value.t_id);
                            });  
                        }   
                    });
                    var tax1 = popover.find('#update-tax-1').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        }
                    });
                    var tax1_select = tax1[0].selectize;
                    tax1_select.clear();
                    tax1_select.clearOptions();
                    $.get(window_location+'/company_settings/business_partners/get_tax_1', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.t_name,
                                value: data.t_id,
                                code: data.t_code
                            });
                        });
                        tax1_select.clear();
                        tax1_select.clearOptions();
                        tax1_select.cacheRender = {};
                        tax1_select.load(function(callback){
                            callback(selectOptions);
                        });
                        if(data.vat.length > 0){
                            tax1_select.setValue(data.vat[0].t_id);
                        }
                    });
                    var tax2 = popover.find('#update-tax-2').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        }
                    });
                    var tax2_select = tax2[0].selectize;
                    tax2_select.clear();
                    tax2_select.clearOptions();
                    $.get(window_location+'/company_settings/business_partners/get_tax_2', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.t_atc,
                                value: data.t_id,
                                code: data.t_code
                            });
                        });
                        tax2_select.clear();
                        tax2_select.clearOptions();
                        tax2_select.cacheRender = {};
                        tax2_select.load(function(callback){
                            callback(selectOptions);
                        });
                        if(data.ewt.length > 0){
                            tax2_select.setValue(data.ewt[0].t_id);
                        }
                    });
                    var tax3 = popover.find('#update-tax-3').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        }
                    });
                    var tax3_select = tax3[0].selectize;
                    tax3_select.clear();
                    tax3_select.clearOptions();
                    $.get(window_location+'/company_settings/business_partners/get_tax_3', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.t_atc,
                                value: data.t_id,
                                code: data.t_code
                            });
                        });
                        tax3_select.clear();
                        tax3_select.clearOptions();
                        tax3_select.cacheRender = {};
                        tax3_select.load(function(callback){
                            callback(selectOptions);
                        });
                        if(data.fwt.length > 0){
                            tax3_select.setValue(data.fwt[0].t_id);
                        }
                    });

                    popover.find('input[name=update-seq]').val(data.co_bp_seq);
                    popover.find('input[name=update-code]').val(data.co_bp_code);
                    popover.find('input[name=update-name]').val(data.co_bp_name);
                    popover.find('input[name=update-trade-name]').val(data.co_bp_trade_name);
                    popover.find('input[name=update-shortname]').val(data.co_bp_shortname);
                    popover.find('input[name=update-style]').val(data.co_bp_bus_style);
                    popover.find('input[name=update-address]').val(data.co_bp_address);
                    popover.find('input[name=update-tin]').val(data.co_bp_tin);
                    popover.find('input[name=update-particulars]').val(data.co_bp_particulars);
                    popover.find('input[name=update-id]').val(data.co_bp_id);

                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    restriction.format();
                    restriction.select_required();
                    restriction.tin();
                    popover.find('button.v-submit').unbind('click');
                    popover.find('button.v-submit').click(function(){
                        var _this = $(this);
                        var validation = Object.create(v_validation);
                        var required_input = validation.required_input(popover);
                        var format_input = validation.format_input(popover);
                        var required_select = validation.required_select(popover);
                        if(!required_input && !format_input && !required_select){
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
        $('body').on('click', '#add-vat-row', function(){
            var popover = $(this).closest('.popover');
            var vat_table = popover.find('.add-vat-row-plate');
            var row = "<tr class='vat'>"+
                        "<td style='width: 150px; text-align: right; padding-right: 20px;' title='Value Added Tax'></td>"+
                        "<td>"+
                            "<select id='add-tax-1-1' name='add-tax-1[]' placeholder='Select...'></select>"+
                        "</td>"+
                        "<td style='width: 50px;'>"+
                            "<button class='btn btn-xs btn-default remove-vat-row' title='remove row' type='button' style='background-color: transparent; margin-top: 10px; text-align: left;'><i class='fa fa-minus'></i></button>"+
                        "</td>"+
                    "</tr>";
            vat_table.append(row);
            var select = vat_table.find('select:last-child');
            var tax1 = select.selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        }
                    });
            var tax1_select = tax1[0].selectize;
            tax1_select.clear();
            tax1_select.clearOptions();
            $.get(window_location+'/company_settings/business_partners/get_tax_1', function(response){
                var json_data = JSON.parse(response);
                var selectOptions = [];
                $.each(json_data, function(index, data){
                    selectOptions.push({
                        text: data.t_name,
                        value: data.t_id,
                        code: data.t_code
                    });
                });
                tax1_select.clear();
                tax1_select.clearOptions();
                tax1_select.cacheRender = {};
                tax1_select.load(function(callback){
                    callback(selectOptions);
                });
            });     
        });
        $('body').on('click', '#add-ewt-row', function(){
            var popover = $(this).closest('.popover');
            var ewt_table = popover.find('.add-ewt-row-plate');
            var row = "<tr>"+
                        "<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Expanded Withholding Tax'></td>"+
                        "<td style='padding-top: 5px;'>"+
                            "<select id='add-tax-1-1' name='add-tax-2[]' placeholder='Select...'></select>"+
                        "</td>"+
                        "<td style='width: 50px;'>"+
                            "<button class='btn btn-xs btn-default remove-ewt-row' title='remove row' type='button' style='background-color: transparent; margin-top: 10px; text-align: left;'><i class='fa fa-minus'></i></button>"+
                        "</td>"+
                    "</tr>";
            ewt_table.append(row);
            var select = ewt_table.find('select:last-child');
            var tax2 = select.selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        }
                    });
            var tax2_select = tax2[0].selectize;
            tax2_select.clear();
            tax2_select.clearOptions();
            $.get(window_location+'/company_settings/business_partners/get_tax_2', function(response){
                var json_data = JSON.parse(response);
                var selectOptions = [];
                $.each(json_data, function(index, data){
                    selectOptions.push({
                        text: data.t_atc,
                        value: data.t_id,
                        code: data.t_code
                    });
                });
                tax2_select.clear();
                tax2_select.clearOptions();
                tax2_select.cacheRender = {};
                tax2_select.load(function(callback){
                    callback(selectOptions);
                });
            });     
        });
        $('body').on('click', '#add-fwt-row', function(){
            var popover = $(this).closest('.popover');
            var fwt_table = popover.find('.add-fwt-row-plate');
            var row = "<tr>"+
                        "<td style='padding-top: 5px; width: 150px; text-align: right; padding-right: 20px;' title='Final Withholding Tax'></td>"+
                        "<td style='padding-top: 5px;'>"+
                            "<select id='add-tax-1-1' name='add-tax-3[]' placeholder='Select...'></select>"+
                        "</td>"+
                        "<td style='width: 50px;'>"+
                            "<button class='btn btn-xs btn-default remove-fwt-row' title='remove row' type='button' style='background-color: transparent; margin-top: 10px; text-align: left;'><i class='fa fa-minus'></i></button>"+
                        "</td>"+
                    "</tr>";
            fwt_table.append(row);
            var select = fwt_table.find('select:last-child');
            var tax3 = select.selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        }
                    });
            var tax3_select = tax3[0].selectize;
            tax3_select.clear();
            tax3_select.clearOptions();
            $.get(window_location+'/company_settings/business_partners/get_tax_3', function(response){
                var json_data = JSON.parse(response);
                var selectOptions = [];
                $.each(json_data, function(index, data){
                    selectOptions.push({
                        text: data.t_atc,
                        value: data.t_id,
                        code: data.t_code
                    });
                });
                tax3_select.clear();
                tax3_select.clearOptions();
                tax3_select.cacheRender = {};
                tax3_select.load(function(callback){
                    callback(selectOptions);
                });
            });     
        });
        $('body').on('click', '.remove-vat-row', function(){
            $(this).closest('tr').remove();
        });
        $('body').on('click', '.remove-ewt-row', function(){
            $(this).closest('tr').remove();
        });
        $('body').on('click', '.remove-fwt-row', function(){
            $(this).closest('tr').remove();
        });
        $('body').on('click', '.close-popover', function(){
            $('.popover').popover('hide');
            $('.box-body button').removeAttr('disabled');
        });
    });
</script>