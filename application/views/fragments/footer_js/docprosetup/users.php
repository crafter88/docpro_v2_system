<script>
    $(document).ready(function(){
        var seq = 0;
        var table = $('#users-table').DataTable({
            ajax: window_location+'/docpro_setup/users/get',
            columns: [
                        {
                            mData: null, bSortable: false,
                            mRender: function(data, type, full){
                               return "<button type='button' class='btn btn-primary btn-xs btn-raised view' data-hint='View'><i class='fa fa-eye'></i></button>\n\
                                       <button type='button' class='btn btn-success btn-xs btn-raised edit' data-hint='Edit'><i class='fa fa-pencil'></i></button>";
                            }
                        },
                        {
                            mRender: function(data, type, full){
                                return seq += 1;
                            }
                        },
                        {
                            mRender: function(data, type, full){
                               return full.p_fname+" "+full.p_mname+" "+full.p_lname;
                            }
                        },
                        {'data': 'p_address'}, {'data': 'u_name'}, {'data': 'p_email'}, {'data': 'p_cno'}, {'data': 'u_type'}
                    ],
                    columnDefs: [{targets: 0, width: '70px'}],
                    order: [['1', 'asc']],
                    scrollX: true,
                    initComplete: function(settings, json){
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
        $('#users-table').on('click', '.view', function(){
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
                    $('#view-fname').val(data.p_fname);
                    $('#view-mname').val(data.p_mname);
                    $('#view-lname').val(data.p_lname);
                    $('#view-cno').val(data.p_cno);
                    $('#view-email').val(data.p_email);
                    $('#view-address').val(data.p_address);
                    $('#view-username').val(data.u_name);
                    $('#view-company').val(data.cb_name);
                    $('#view-user-type').val(data.u_type);
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            $('.edit').popover('hide');
            $('#add').popover('hide');
            $('.update').popover('hide');
            initRipple();
        });
        $('#users-table').on('click', '.edit', function(){
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
                    $('#edit-fname').val(data.p_fname);
                    $('#edit-mname').val(data.p_mname);
                    $('#edit-lname').val(data.p_lname);
                    $('#edit-address').val(data.p_address);
                    $('#edit-cno').val(data.p_cno);
                    $('#edit-email').val(data.p_email);
                    $('#edit-uname').val(data.u_name);
                    $('#edit-company').val(data.cb_name);
                    $('#edit-user-type').val(data.u_type);
                    $('#p-id').val(data.p_id);
                    $('#cb-id').val(data.cb_id);
                    $('#edit-cb-id').val(data.cb_id);
                    $('#edit-id').val(data.u_id);
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            $('.view').popover('hide');
            $('#add').popover('hide');
            $('.update').popover('hide');
            initRipple();
        });
        $('div').on('click', '.close-popover', function(){
            $('.popover').popover('hide');
        });
        $('div').on('click', '#close-btn', function(){
             $('.popover').popover('hide');
        });
        $('div').on('click', '.select-option-company', function(){
            $("input[name='add-company']").val($(this)[0].textContent);
            $("input[name='add-cb-id']").val($(this).attr('cb-id'));
        });
        $('div').on('click', '.select-option-user-type', function(){
            $("input[name='add-user-type']").val($(this)[0].textContent);
        });
        $('div').on('click', '.select-option-company', function(){
            $("input[name='edit-company']").val($(this)[0].textContent);
            $("input[name='edit-cb-id']").val($(this).attr('cb-id'));
        });
        $('div').on('click', '.select-option-user-type', function(){
            $("input[name='edit-user-type']").val($(this)[0].textContent);
        });
        $('.navbar-body').on('click', '.add-company-btn', function(){
            $('#add-options').html($('#u-company-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.add-user-type-btn', function(){
            $('#add-options').html($('#u-user-type-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.edit-company-btn', function(){
            $('#edit-options').html($('#u-company-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.edit-user-type-btn', function(){
            $('#edit-options').html($('#u-user-type-select').html());
            initRipple();
        });
        $("input:not(input[name='add-company']), select").focus(function(){
            $('.popover').hide();
        });
        $("input:not(input[name='add-user-type']), select").focus(function(){
            $('.popover').hide();
        });
        $("input:not(input[name='edit-company']), select").focus(function(){
            $('.popover').hide();
        });
        $("input:not(input[name='edit-user-type']), select").focus(function(){
            $('.popover').hide();
        });
        $('.navbar-body').on('click', '.form-control', function(){
            $('#add-options').empty();
        });
         $('.navbar-body').on('click', '.form-control', function(){
            $('#edit-options').empty();
        });
        initButtonPrevention();
    });
    var initButtonPrevention = function(){
        jQuery.fn.preventDoubleSubmission = function(){
            if($(this)[0].checkValidity()){
                $(this).on('submit',function(e){
                    var $form = $(this);
                    if($form.data('submitted') === true){
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