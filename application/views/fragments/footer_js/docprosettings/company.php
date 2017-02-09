<script>
    var no_space = function(){
        $(".no-space").on({
          keydown: function(e) {
            if (e.which === 32 && $(this).val().length === 0)
              return false;
          },
        });
    }
    $(document).ready(function(){
        var table = $('#company-table').DataTable({
            ajax: window_location+'/docpro_settings/company/get',
            columns:[
                        {
                            mData: null, bSortable: false,
                            mRender: function(data, type, full){
                                if(full.flag === '0'){
                                    return "<button type='button' class='btn btn-primary btn-xs btn-raised title view' custom-title='View' disabled><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised title edit' custom-title='Edit' disabled><i class='fa fa-pencil'></i></button>\n\
                                        <button type='button' class='btn btn-warning btn-xs btn-raised title update' custom-title='Update' disabled><i class='fa fa-refresh'></i></button>";
                                        // <button class='btn btn-default btn-xs ripple-effect title show-branch' custom-title='Show Branch' disabled><b>B</b></button>
                                }
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised title view' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised title edit' custom-title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                        <button type='button' class='btn btn-warning btn-xs btn-raised title update' custom-title='Update'><i class='fa fa-refresh'></i></button>";
                                        // <button class='btn btn-default btn-xs ripple-effect title show-branch' custom-title='Show Branch'><b>B</b></button>
                            }
                        },
                        {'data': 'ch_cb_seq'}, 
                        {'data': 'ch_name'}, 
                        {'data': 'ch_cb_address'}, 
                        {'data': 'ch_cb_tin'}, 
                        {'data': 'ch_cb_bp_type'}, 
                        {'data': 'ch_cb_tax_type'},
                        {'data': 'ch_cb_cno'}, 
                        {'data': 'ch_cb_email'}
                    ],
            createdRow: function( row, data, dataIndex ) {
                if(data.flag === '0'){
                    $(row).css('color', '#a5a5a5');
                    $(row).addClass('disabled');
                }
            },
            columnDefs: [{targets: 0, width: '100px'}],
            order: [['1', 'asc']],
            scrollX: true,
            initComplete: function(json, src){
                initRipple();
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

                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            $('.edit').popover('hide');
            $('.view').popover('hide');
            $('.update').popover('hide');
            initRipple();
        });
        $('#company-table').on('click', '.view', function(){
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
                    popover.find('input[name=view-seq]').val(data.ch_cb_seq);
                    popover.find('input[name=view-code]').val(data.ch_cb_code);
                    popover.find('input[name=view-class]').val(data.ch_cb_class);
                    popover.find('input[name=view-type]').val(data.ch_cb_bp_type);
                    popover.find('input[name=view-name]').val(data.ch_cb_name);
                    popover.find('input[name=view-ind-name]').val(data.ch_cb_ind_name);
                    popover.find('input[name=view-address]').val(data.ch_cb_address);
                    popover.find('input[name=view-tin]').val(data.ch_cb_tin);
                    popover.find('input[name=view-tax-type]').val(data.ch_cb_tax_type);
                    popover.find('input[name=view-cno]').val(data.ch_cb_cno);
                    popover.find('input[name=view-email]').val(data.ch_cb_email);
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
        $('#company-table').on('click', '.edit', function(){
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
                    popover.find('input[name=edit-seq]').val(data.ch_cb_seq);
                    popover.find('input[name=edit-class]').val(data.ch_cb_class);
                    popover.find('input[name=edit-type]').val(data.ch_cb_bp_type);
                    popover.find('input[name=edit-name]').val(data.ch_cb_name);
                    popover.find('input[name=edit-ind-name]').val(data.ch_cb_ind_name);
                    popover.find('input[name=edit-address]').val(data.ch_cb_address);
                    popover.find('input[name=edit-tin]').val(data.ch_cb_tin);
                    popover.find('input[name=edit-tax-type]').val(data.ch_cb_tax_type);
                    popover.find('input[name=edit-cno]').val(data.ch_cb_cno);
                    popover.find('input[name=edit-email]').val(data.ch_cb_email);
                    popover.find('input[name=edit-id]').val(data.ch_cb_id);
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
        $('#company-table').on('click', '.update', function(){
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
                    popover.find('input[name=update-seq]').val(data.ch_cb_seq);
                    popover.find('input[name=update-class]').val(data.ch_cb_class);
                    popover.find('input[name=update-type]').val(data.ch_cb_bp_type);
                    popover.find('input[name=update-name]').val(data.ch_cb_name);
                    popover.find('input[name=update-ind-name]').val(data.ch_cb_ind_name);
                    popover.find('input[name=update-address]').val(data.ch_cb_address);
                    popover.find('input[name=update-tin]').val(data.ch_cb_tin);
                    popover.find('input[name=update-tax-type]').val(data.ch_cb_tax_type);
                    popover.find('input[name=update-cno]').val(data.ch_cb_cno);
                    popover.find('input[name=update-email]').val(data.ch_cb_email);
                    popover.find('input[name=update-id]').val(data.ch_cb_id);
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
        $('div').on('click', '.close-popover', function(){
            $('.popover').popover('hide');
            $('.card-body button').removeAttr('disabled');
            $('tr.disabled button').attr('disabled', true);
        });
        $('div').on('click', '#close-btn', function(){
            $('.popover').popover('hide');
            $('.card-body button').removeAttr('disabled');
            $('tr.disabled button').attr('disabled', true);
        });
        $('div').on('click', '.select-option-class', function(){
            $("input[name='add-class']").attr('readonly', true);
            $("input[name='add-class']").val($(this)[0].textContent);
            $("input[name='add-class-id']").val($(this).attr('class-id'));
            $("input[name='add-class-code']").val($(this).attr('class-code'));
        });
        $('div').on('click', '.select-option-class-others', function(){
            $("input[name='add-class']").removeAttr('readonly');
            $("input[name='add-class']").val($(this)[0].textContent);
            $("input[name='add-class-id']").val($(this).attr('class-id'));
            $("input[name='add-class-code']").val($(this).attr('class-code'));
        });
        $('div').on('click', '.select-option-type', function(){
            $("input[name='add-type']").val($(this)[0].textContent);
            $("input[name='add-type-id']").val($(this).attr('type-id'));
            $("input[name='add-type-code']").val($(this).attr('type-code'));
        });
        $('div').on('click', '.select-option-tax-type', function(){
            $("input[name='add-tax-type']").val($(this)[0].textContent);
            $("input[name='add-tax-type-id']").val($(this).attr('tax-type-id'));
            $("input[name='add-tax-type-code']").val($(this).attr('tax-type-code'));
        });
        $('div').on('click', '.select-option-class', function(){
            $("input[name='edit-class']").attr('readonly', true);
            $("input[name='edit-class']").val($(this)[0].textContent);
            $("input[name='edit-class-id']").val($(this).attr('class-id'));
            $("input[name='edit-class-code']").val($(this).attr('class-code'));
        });
        $('div').on('click', '.select-option-class-others', function(){
            $("input[name='edit-class']").removeAttr('readonly');
            $("input[name='edit-class']").val($(this)[0].textContent);
            $("input[name='edit-class-id']").val($(this).attr('class-id'));
            $("input[name='edit-class-code']").val($(this).attr('class-code'));
        });
        $('div').on('click', '.select-option-type', function(){
            $("input[name='edit-type']").val($(this)[0].textContent);
            $("input[name='edit-type-id']").val($(this).attr('type-id'));
            $("input[name='edit-type-code']").val($(this).attr('type-code'));
        });
        $('div').on('click', '.select-option-tax-type', function(){
            $("input[name='edit-tax-type']").val($(this)[0].textContent);
            $("input[name='edit-tax-type-id']").val($(this).attr('tax-type-id'));
            $("input[name='edit-tax-type-code']").val($(this).attr('tax-type-code'));
        });
        $('div').on('click', '.select-option-class', function(){
            $("input[name='update-class']").attr('readonly', true);
            $("input[name='update-class']").val($(this)[0].textContent);
            $("input[name='update-class-id']").val($(this).attr('class-id'));
            $("input[name='update-class-code']").val($(this).attr('class-code'));
        });
        $('div').on('click', '.select-option-class-others', function(){
            $("input[name='update-class']").removeAttr('readonly');
            $("input[name='update-class']").val($(this)[0].textContent);
            $("input[name='update-class-id']").val($(this).attr('class-id'));
            $("input[name='update-class-code']").val($(this).attr('class-code'));
        });
        $('div').on('click', '.select-option-type', function(){
            $("input[name='update-type']").val($(this)[0].textContent);
            $("input[name='update-type-id']").val($(this).attr('type-id'));
            $("input[name='update-type-code']").val($(this).attr('type-code'));
        });
        $('div').on('click', '.select-option-tax-type', function(){
            $("input[name='update-tax-type']").val($(this)[0].textContent);
            $("input[name='update-tax-type-id']").val($(this).attr('tax-type-id'));
            $("input[name='update-tax-type-code']").val($(this).attr('tax-type-code'));
        });
        $('.navbar-body').on('click', '.add-class-btn', function(){
            $('#add-options').html($('#cb-class-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.add-type-btn', function(){
            $('#add-options').html($('#cb-type-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.add-tax-type-btn', function(){
            $('#add-options').html($('#cb-tax-type-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.edit-class-btn', function(){
            $('#edit-options').html($('#cb-class-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.edit-type-btn', function(){
            $('#edit-options').html($('#cb-type-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.edit-tax-type-btn', function(){
            $('#edit-options').html($('#cb-tax-type-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.update-class-btn', function(){
            $('#update-options').html($('#cb-class-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.update-type-btn', function(){
            $('#update-options').html($('#cb-type-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.update-tax-type-btn', function(){
            $('#update-options').html($('#cb-tax-type-select').html());
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