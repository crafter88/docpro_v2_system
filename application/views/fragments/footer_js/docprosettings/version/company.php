<script>
    $(document).ready(function(){
        var seq = 0;
        var table = $('#company-table').DataTable({
            ajax: window.location.origin+'/docpro_settings/company/get',
            columns:[
                        {
                            mData: null, bSortable: false,
                            mRender: function(data, type, full){
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised view' data-hint='View'><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised edit' data-hint='Edit'><i class='fa fa-pencil'></i></button>\n\
                                        <button type='button' class='btn btn-warning btn-xs btn-raised update' data-hint='Update'><i class='fa fa-refresh'></i></button>";
                            }
                        },
                        {
                            mRender: function(data, type, full){
                                return seq += 1;
                            }
                        }, 
                        {'data': 'cb_code'}, {'data': 'name'}, {'data': 'cb_address'}, {'data': 'cb_tin'}, {'data': 'cb_class'}, {'data': 'bpt_type'}, {'data': 'cb_tax_type'},{'data': 'cb_cno'}, {'data': 'cb_email'}
                    ],
                    columnDefs: [{targets: 0, width: '100px'}],
                    order: [['1', 'asc']],
                    scrollX: true,
                    initComplete: function(json, src){
                        seq = 0;
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
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            $('.edit').popover('hide');
            $('.view').popover('hide');
            $('.update').popover('hide');
            initRipple();
        });
        $('#company-table').on('click', '.view', function(){
            var data = table.row(this.closest('tr')).data();
            var seq = $(this.closest('tr')).find('td:eq(1)').text();
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
                    $('#view-seq').val(seq);
                    $('#view-code').val(data.cb_code);
                    $('#view-class').val(data.cb_class);
                    $('#view-type').val(data.bpt_type);
                    $('#view-name').val(data.cb_name);
                    $('#view-ind-name').val(data.cb_ind_name);
                    $('#view-address').val(data.cb_address);
                    $('#view-tin').val(data.cb_tin);
                    $('#view-tax-type').val(data.cb_tax_type);
                    $('#view-cno').val(data.cb_cno);
                    $('#view-email').val(data.cb_email);
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            $('.edit').popover('hide');
            $('#add').popover('hide');
            $('.update').popover('hide');
            initRipple();
        });
        $('#company-table').on('click', '.edit', function(){
            var data = table.row(this.closest('tr')).data();
            var seq = $(this.closest('tr')).find('td:eq(1)').text();
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
                    $('#edit-seq').val(seq);
                    $('#edit-class').val(data.cb_class);
                    $('#edit-type').val(data.bpt_type);
                    $('#edit-name').val(data.cb_name);
                    $('#edit-ind-name').val(data.cb_ind_name);
                    $('#edit-address').val(data.cb_address);
                    $('#edit-tin').val(data.cb_tin);
                    $('#edit-tax-type').val(data.tt_name);
                    $('#edit-type-id').val(data.bpt_id);
                    $('#edit-tax-type-id').val(data.tt_id);
                    $('#edit-type-code').val(data.bpt_code);
                    $('#edit-tax-type-code').val(data.tt_code);
                    $('#edit-cno').val(data.cb_cno);
                    $('#edit-email').val(data.cb_email);
                    $('#edit-id').val(data.cb_id);
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            $('.view').popover('hide');
            $('#add').popover('hide');
            $('.update').popover('hide');
            initRipple();
        });
        $('#company-table').on('click', '.update', function(){
            var data = table.row(this.closest('tr')).data();
            var seq = $(this.closest('tr')).find('td:eq(1)').text();
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
                    $('#update-seq').val(seq);
                    $('#update-class').val(data.cb_class);
                    $('#update-type').val(data.bpt_type);
                    $('#update-name').val(data.cb_name);
                    $('#update-ind-name').val(data.cb_ind_name);
                    $('#update-address').val(data.cb_address);
                    $('#update-tin').val(data.cb_tin);
                    $('#update-tax-type').val(data.tt_name);
                    $('#update-type-id').val(data.bpt_id);
                    $('#update-tax-type-id').val(data.tt_id);
                    $('#update-type-code').val(data.bpt_code);
                    $('#update-tax-type-code').val(data.tt_code);
                    $('#update-cno').val(data.cb_cno);
                    $('#update-email').val(data.cb_email);
                    $('#update-id').val(data.cb_id);
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            $('.view').popover('hide');
            $('#add').popover('hide');
            $('.edit').popover('hide');
            initRipple();
        });
        $('div').on('click', '.close-popover', function(){
            $('.popover').popover('hide');
        });
        $('div').on('click', '#close-btn', function(){
             $('.popover').popover('hide');
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
        initButtonPrevention();
    });
    var initButtonPrevention = function(){
        jQuery.fn.preventDoubleSubmission = function(){
            if($(this)[0].checkValidity()){
                $(this).on('submit',function(e){
                    var $form = $(this);
                    if ($form.data('submitted') === true){
                        e.preventDefault();
                    }else{
                        $form.data('submitted', true);
                    }
                });
                return this;
            }
        };	
        $('form').preventDoubleSubmission();
    }
</script>