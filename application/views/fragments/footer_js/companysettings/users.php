<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/company_settings/table/users.js"></script>
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
            $('#users-table thead tr#searchfilterrow th').each( function () {
                if($(this).index() !== 0){
                    var title = $('#users-table thead th').eq( $(this).index() ).text();
                    $(this).html( '<input type="text" onclick="stopPropagation(event);" placeholder="Search '+title+'" />' );
                }
            });
            $("#users-table thead input").on( 'keyup change', function () {
                table.column($(this).parent().index()+':visible')
                     .search(this.value)
                     .draw();
            } );
        })();

        var table = $('#users-table').DataTable({
            ajax: window_location+'/company_settings/users/get',
            columns: [
                        {
                            mData: null, bSortable: false,
                            mRender: function(data, type, full){
                                if($('input#mc_id').val() === $('input#bc_id').val()){
                                    return "<button type='button' class='btn btn-primary btn-xs btn-raised view title' title='View'><i class='fa fa-eye'></i></button>\n\
                                       <button type='button' class='btn btn-success btn-xs btn-raised edit title' title='Edit'><i class='fa fa-pencil'></i></button>";
                                }
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised view title' title='View' disabled><i class='fa fa-eye'></i></button>\n\
                                       <button type='button' class='btn btn-success btn-xs btn-raised edit title' title='Edit' disabled><i class='fa fa-pencil'></i></button>";
                                
                            }
                        },
                        {'data': 'u_seq'},
                        {
                            mRender: function(row, setting, full){
                                return full.p_fname+' '+full.p_lname;
                            }
                        },
                        {'data': 'p_address'},
                        {'data': 'p_cno'},
                        {'data': 'p_email'},
                        {'data': 'ch_name'},
                        {'data': 'u_type'},
                        {'data': 'u_name'},
            ],
            columnDefs: [{targets: 0, width: '100px'}],
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
                    $(context).addClass('add-user-modal');
                    return 'right';
                },
                content: function(){
                    return $('#add-popover').html();
                },
                callback: function(){
                    var popover = $('.popover.add-user-modal');
                    var access_level = popover.find('select[name=add-user-access-level]').selectize();
                    var branch = popover.find('select[name=add-branch]').selectize({
                        plugins: ['no_results_found'],
                        create: false,
                        sortField: {
                            field: 'text',
                            direction: 'asc'
                        },
                        onChange: function(value){
                            var selectize = access_level[0].selectize;
                            selectize.clear();
                            selectize.clearOptions();
                            selectize.renderCache = {};
                            if(value === $('input#mc_id').val()){
                                selectize.load(function(callback){
                                    callback([
                                                {text: 'Super Admin', value: 'Super Admin'},
                                                {text: 'Admin', value: 'Admin'},
                                                {text: 'User', value: 'User'}
                                            ]);
                                });
                            }else{
                                selectize.load(function(callback){
                                    callback([
                                                {text: 'Admin', value: 'Admin'},
                                                {text: 'User', value: 'User'}
                                            ]);
                                });
                            }
                        },
                        dropdownParent: null
                    });
                    var branch_selectize = branch[0].selectize;
                    branch_selectize.clear();
                    branch_selectize.clearOptions();
                    $.get(window_location+'/company_settings/users/get_branches', function(response){
                        var data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(data, function(index, data){
                            selectOptions.push({
                                text: data.name,
                                value: data.cbbr_id
                            });
                        });

                        branch_selectize.clear();
                        branch_selectize.clearOptions();
                        branch_selectize.renderCache = {};
                        branch_selectize.load(function(callback) {
                            callback(selectOptions);
                        });
                    });
                    var restriction = Object.create(v_restriction);
                    restriction.number();
                    restriction.required();
                    restriction.format();
                    restriction.no_space();
                    restriction.tin();
                    restriction.select_required();
                    restriction.min_date();
                    restriction.unique();
                    popover.find('button.v-submit').unbind('click');
                    popover.find('button.v-submit').click(function(){
                        var _this = $(this);
                        var validation = Object.create(v_validation);
                        var required_input = validation.required_input(popover);
                        var required_select = validation.required_select(popover);
                        var format_input = validation.format_input(popover, function(){});
                        var unique_input = validation.unique_input(popover, function(is_unique){
                            if(!required_input && !format_input && !required_select && !is_unique){
                                _this.closest('form').submit();
                                _this.attr('disabled', true);
                                _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
                            }
                        });
                    });

                    popover.find('input[name=add-username]').keyup(function(){
                        var value = $(this).val();
                        popover.find('input[name=add-password]').val(value);
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
        $('#users-table').on('click', '.view', function(){
            $('body').on('hidden.bs.popover', function (e) {
                $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
            });
            var data = table.row(this.closest('tr')).data();
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('view-user-modal');
                    return 'right';
                },
                content: function(){
                    return $('#view-popover').html();
                },
                callback: function(){
                    var popover = $('.popover.view-user-modal');
                    popover.find('input[name=view-sequence]').val(data.u_seq);
                    popover.find('input[name=view-fname]').val(data.p_fname);
                    popover.find('input[name=view-mname]').val(data.p_mname);
                    popover.find('input[name=view-lname]').val(data.p_lname);
                    popover.find('input[name=view-address]').val(data.p_address);
                    popover.find('input[name=view-cno]').val(data.p_cno);
                    popover.find('input[name=view-email]').val(data.p_email);
                    popover.find('input[name=view-branch]').val(data.ch_name);
                    popover.find('input[name=view-user-access-lvl]').val(data.u_type);
                    popover.find('input[name=view-username]').val(data.u_name);
                    popover.find('input[name=view-validity-date]').val(new Date(data.u_validity_date).toString('yyyy-MM-dd'));
                },
                container: 'body'
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.box-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
            initRipple();
        });
        $('#users-table').on('click', '.edit', function(){
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
                    popover.find('input[name=edit-sequence]').val(data.u_seq);
                    popover.find('input[name=edit-fname]').val(data.p_fname);
                    popover.find('input[name=edit-mname]').val(data.p_mname);
                    popover.find('input[name=edit-lname]').val(data.p_lname);
                    popover.find('input[name=edit-address]').val(data.p_address);
                    popover.find('input[name=edit-cno]').val(data.p_cno);
                    popover.find('input[name=edit-email]').val(data.p_email);
                    popover.find('input[name=edit-username]').val(data.u_name);
                    popover.find('input[name=edit-password]').val(data.u_name);
                    popover.find('input[name=u-id]').val(data.u_id);
                    popover.find('input[name=p-id]').val(data.p_id);
                    popover.find('input[name=edit-username]').attr('o_v', data.u_name);
                    popover.find('input[name=edit-validity-date]').val(new Date(data.u_validity_date).toString('yyyy-MM-dd'));

                    var access_level = popover.find('select[name=edit-user-access-level]').selectize();
                    access_level[0].selectize.setValue(data.u_type);
                    var branch = popover.find('select[name=edit-branch]').selectize({
                        plugins: ['no_results_found'],
                        create: false,
                        sortField: {
                            field: 'text',
                            direction: 'asc'
                        },
                        onChange: function(value){
                            var selectize = access_level[0].selectize;
                            selectize.clear();
                            selectize.clearOptions();
                            selectize.renderCache = {};
                            if(value === $('input#mc_id').val()){
                                selectize.load(function(callback){
                                    callback([
                                                {text: 'Super Admin', value: 'Super Admin'},
                                                {text: 'Admin', value: 'Admin'},
                                                {text: 'User', value: 'User'}
                                            ]);
                                });
                            }else{
                                selectize.load(function(callback){
                                    callback([
                                                {text: 'Admin', value: 'Admin'},
                                                {text: 'User', value: 'User'}
                                            ]);
                                });
                            }
                        },
                        dropdownParent: null
                    });
                    var branch_selectize = branch[0].selectize;
                    branch_selectize.clear();
                    branch_selectize.clearOptions();
                    $.get(window_location+'/company_settings/users/get_branches', function(response){
                        var json_data = JSON.parse(response);
                        var selectOptions = [];
                        $.each(json_data, function(index, data){
                            selectOptions.push({
                                text: data.name,
                                value: data.cbbr_id
                            });
                        });

                        branch_selectize.clear();
                        branch_selectize.clearOptions();
                        branch_selectize.renderCache = {};
                        branch_selectize.load(function(callback) {
                            callback(selectOptions);
                        });

                        branch_selectize.setValue(data.cbbr_id);
                        access_level[0].selectize.setValue(data.u_type);
                    });
                    popover.find('input[name=edit-username]').keyup(function(){
                        var value = $(this).val();
                        popover.find('input[name=edit-password]').val(value);
                    });

                    var restriction = Object.create(v_restriction);
                    restriction.number();
                    restriction.required();
                    restriction.format();
                    restriction.no_space();
                    restriction.tin();
                    restriction.select_required();
                    restriction.min_date();
                    restriction.unique_edit();
                    popover.find('button.v-submit').unbind('click');
                    popover.find('button.v-submit').click(function(){
                        var _this = $(this);
                        var validation = Object.create(v_validation);
                        var required_input = validation.required_input(popover);
                        var required_select = validation.required_select(popover);
                        var format_input = validation.format_input(popover, function(){});
                        var unique_input = validation.unique_input_edit(popover, function(is_unique){
                            if(!required_input && !format_input && !required_select && !is_unique){
                                _this.closest('form').submit();
                                _this.attr('disabled', true);
                                _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
                            }
                        });
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

        $('body').on('click', 'tr.add-branch .no-results-found', function(){
            $('#add-tax-type').selectize({});
            var restriction = Object.create(v_restriction);
            restriction.number();
            restriction.required();
            restriction.format();
            restriction.no_space();
            restriction.tin();
            $('#add-branch-modal').modal({
                backdrop: 'static',
                keyboard: false,
                show: true
            });
        });

        $('body').on('click', '#add-branch-modal button.v-submit', function(){
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
                        popover.find('select[name$="-user-access-level"]').selectize()[0].selectize.destroy();
                        var access_level = popover.find('select[name$="-user-access-level"]').selectize();
                        var branch = popover.find('select[name$="-branch"]').selectize({
                            plugins: ['no_results_found'],
                            create: false,
                            sortField: {
                                field: 'text',
                                direction: 'asc'
                            },
                            onChange: function(value){
                                var selectize = access_level[0].selectize;
                                selectize.clear();
                                selectize.clearOptions();
                                selectize.renderCache = {};
                                if(value === $('input#mc_id').val()){
                                    selectize.load(function(callback){
                                        callback([
                                                    {text: 'Super Admin', value: 'Super Admin'},
                                                    {text: 'Admin', value: 'Admin'},
                                                    {text: 'User', value: 'User'}
                                                ]);
                                    });
                                }else{
                                    selectize.load(function(callback){
                                        callback([
                                                    {text: 'Admin', value: 'Admin'},
                                                    {text: 'User', value: 'User'}
                                                ]);
                                    });
                                }
                            },
                            dropdownParent: null
                        });
                        var branch_selectize = branch[0].selectize;
                        branch_selectize.clear();
                        branch_selectize.clearOptions();
                        $.get(window_location+'/company_settings/users/get_branches', function(response){
                            var data = JSON.parse(response);
                            var selectOptions = [];
                            $.each(data, function(index, data){
                                selectOptions.push({
                                    text: data.name,
                                    value: data.cbbr_id
                                });
                            });

                            branch_selectize.clear();
                            branch_selectize.clearOptions();
                            branch_selectize.renderCache = {};
                            branch_selectize.load(function(callback) {
                                callback(selectOptions);
                            });
                            branch_selectize.setValue(JSON.parse(return_id).id);
                        });
                        $('body tr.add-branch').find('input').removeClass('v-invalid');
                        $('body tr.add-branch').find('select').removeClass('v-invalid');
                        $('body tr.add-branch').find('div').removeClass('v-invalid');
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

        $('#add-branch-modal').on('hidden.bs.modal', function(){
            $(this).find('input').val('');
            $(this).find('select').val('');
            $(this).find('input').removeClass('v-invalid');
            $(this).find('select').removeClass('v-invalid');
            $(this).find('div').removeClass('v-invalid');
            $(this).find('input').removeClass('v-invalid-format');
            $(this).find('select').removeClass('v-invalid-format');
            $(this).find('div').removeClass('v-invalid-format');
        });
    });
</script>