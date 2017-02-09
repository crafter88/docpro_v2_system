<script>
    $(document).ready(function(){
        var table = $('#banks-table').DataTable({
            ajax: window_location+'/company_settings/banks/get',
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
                        {'data': 'b_seq'}, {'data': 'b_code'}, {'data': 'b_name'}, {'data': 'b_shortname'}, {'data': 'co_b_no'}, {'data': 'co_b_class'}
                    ],
            columnDefs: [{targets: 0, width: '100px'}, {targets: 1, width: '40px'}],
            scrollX: true,
            order: [['2', 'asc']],
            initComplete: function(context, src){
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
                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    restriction.format();
                    restriction.number();
                    popover.find('button.v-submit').unbind('click');
                    popover.find('button.v-submit').click(function(){
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
            initSingleSubmit();
        });
        $('#banks-table').on('click', '.view', function(){
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
                    popover.find('input[name=view-seq]').val(data.b_seq);
                    popover.find('input[name=view-code]').val(data.b_code);
                    popover.find('input[name=view-name]').val(data.b_name);
                    popover.find('input[name=view-shortname]').val(data.b_shortname);
                    popover.find('input[name=view-acc-no]').val(data.co_b_no);
                    popover.find('input[name=view-classification]').val(data.co_b_class);
                },
                container:'.navbar-body'
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.card-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
            initRipple();
            initSingleSubmit();
        });
        $('#banks-table').on('click', '.edit', function(){
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
                    popover.find('input[name=edit-seq]').val(data.b_seq);
                    popover.find('input[name=edit-code]').val(data.b_code);
                    popover.find('input[name=edit-name]').val(data.b_name);
                    popover.find('input[name=edit-shortname]').val(data.b_shortname);
                    popover.find('input[name=edit-acc-no]').val(data.co_b_no);
                    popover.find('input[name=edit-classification]').val(data.co_b_class);
                    popover.find('input[name=edit-bank-id]').val(data.b_id);
                    popover.find('input[name=edit-cobank-id]').val(data.co_b_id);
                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    restriction.format();
                    restriction.number();
                    popover.find('button.v-submit').unbind('click');
                    popover.find('button.v-submit').click(function(){
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
                    initRipple();
                    initSingleSubmit();
                },
                container: '.navbar-body'
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.card-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
        });
        $('#banks-table').on('click', '.update', function(){
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
                    popover.find('input[name=update-seq]').val(data.b_seq);
                    popover.find('input[name=update-code]').val(data.b_code);
                    popover.find('input[name=update-name]').val(data.b_name);
                    popover.find('input[name=update-shortname]').val(data.b_shortname);
                    popover.find('input[name=update-acc-no]').val(data.co_b_no);
                    popover.find('input[name=update-classification]').val(data.co_b_class);
                    popover.find('input[name=update-bank-id]').val(data.b_id);
                    popover.find('input[name=update-cobank-id]').val(data.co_b_id);
                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    restriction.format();
                    restriction.number();
                    popover.find('button.v-submit').unbind('click');
                    popover.find('button.v-submit').click(function(){
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
            initSingleSubmit();
        });
        $('div').on('click', '.close-popover', function(){
            $('.popover').popover('hide');
            $('.card-body button').removeAttr('disabled');
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='add-bank']").val($(this)[0].textContent);
            $("input[name='add-bank-id']").val($(this).attr('bank-id'));
            $("input[name='add-bank-code']").val($(this).attr('bank-code'));
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='edit-bank']").val($(this)[0].textContent);
            $("input[name='edit-bank-id']").val($(this).attr('bank-id'));
            $("input[name='edit-bank-code']").val($(this).attr('bank-code'));
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='update-bank']").val($(this)[0].textContent);
            $("input[name='update-bank-id']").val($(this).attr('bank-id'));
            $("input[name='update-bank-code']").val($(this).attr('bank-code'));
        });
        $('.navbar-body').on('click', '.add-bank-btn', function(){
            $('#add-options').html($('#bank-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.edit-bank-btn', function(){
            $('#edit-options').html($('#bank-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.update-bank-btn', function(){
            $('#update-options').html($('#bank-select').html());
            initRipple();
        });
        $('#switch-state').bootstrapSwitch();
        init_table_option(table, $(this).closest('side-body'));
    });
</script>