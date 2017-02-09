<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/docpro_setup/tax_setup_seq.js"></script>

<script>
    $(document).ready(function(){
        var seq = 0;
        var table = $('#taxes-table').DataTable({
            ajax: window.location.origin+'/docpro_settings/taxes/get',
            columns:[
                        {
                            mData: null, bSortable: false,
                            mRender: function(data, type, full){
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised view' data-hint='View'><i class='fa fa-eye'></i></button>";
                        }
                        },
                        {
                            mRender: function(data, type, full){
                                return seq += 1;
                        }
                        }, 
                        {'data': 't_code'}, {'data': 'tt_name'}, {'data': 't_name'}, {'data': 't_shortname'}, {'data': 't_rate'}, {'data': 't_base'}
                    ],
                    columnDefs: [{targets: 0, width: '40px'}],
                    order: [['1', 'asc']],
                    scrollX: true,
                    initComplete: function(json, src){
                        seq = 0;
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
        $('#taxes-table').on('click', '.view', function(){
            var data = table.row(this.closest('tr')).data();
            let seq = $(this.closest('tr')).find('td:eq(1)').text();
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
                    $('#view-code').val(data.t_code);
                    $('#view-type').val(data.tt_name);
                    $('#view-name').val(data.t_name);
                    $('#view-shortname').val(data.t_shortname);
                    $('#view-rate').val(data.t_rate);
                    $('#view-base').val(data.t_base);
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            $('.edit').popover('hide');
            $('#add').popover('hide');
            $('.update').popover('hide');
            initRipple();
        });
        $('#taxes-table').on('click', '.edit', function(){
            var data = table.row(this.closest('tr')).data();
            let seq = $(this.closest('tr')).find('td:eq(1)').text();
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
                    $('#edit-type').val(data.tt_name);
                    $('#edit-name').val(data.t_name);
                    $('#edit-shortname').val(data.t_shortname);
                    $('#edit-rate').val(data.t_rate);
                    $('#edit-base').val(data.t_base);
                    $('#edit-type-id').val(data.tt_id);
                    $('#edit-type-code').val(data.tt_code);
                    $('#edit-id').val(data.t_id);
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            $('.view').popover('hide');
            $('#add').popover('hide');
            $('.update').popover('hide');
            initRipple();
        });
        $('#taxes-table').on('click', '.update', function(){
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
                    $('#update-seq').val(seq);
                    $('#update-type').val(data.tt_name);
                    $('#update-name').val(data.t_name);
                    $('#update-shortname').val(data.t_shortname);
                    $('#update-rate').val(data.t_rate);
                    $('#update-base').val(data.t_base);
                    $('#update-type-id').val(data.tt_id);
                    $('#update-type-code').val(data.tt_code);
                    $('#update-id').val(data.t_id);
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

<!-- TAX TYPES -->

<script>
    $(document).ready(function(){
        var tt_table = $('#tax-types-table').DataTable({
            ajax: window.location.origin+'/docpro_settings/taxtypes/get',
            columns:[
                        {
                            mData: null, bSortable: false,
                            mRender: function(data, type, full){
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised view' data-hint='View'><i class='fa fa-eye'></i></button>";
                            }
                        },
                        {'data': 'tt_code'}, 
                        {'data': 'tt_name'}, 
                        {'data': 'tt_shortname'}
                    ],
                    columnDefs: [{targets: 0, width: '40px'}, {targets: 1, width: '80px'}, {targets: 3, width: '120px'}],
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

        $('#add-tt').click(function(){
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
                    $('#tt-view-code').val(data.tt_code);
                    $('#tt-view-name').val(data.tt_name);
                    $('#tt-view-shortname').val(data.tt_shortname);
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            $('.view').popover('hide');
            $('.edit').popover('hide');
            $('.update').popover('hide');
            initRipple();
        });
        $('#tax-types-table').on('click', '.view', function(){
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
                    $('#tt-view-code').val(data.tt_code);
                    $('#tt-view-name').val(data.tt_name);
                    $('#tt-view-shortname').val(data.tt_shortname);
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            $('#add-tt').popover('hide');
            $('.edit').popover('hide');
            $('.update').popover('hide');
            initRipple();
        });
        $('#tax-types-table').on('click', '.edit', function(){
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
                    $('#tt-edit-code').val(data.tt_code);
                    $('#tt-edit-name').val(data.tt_name);
                    $('#tt-edit-shortname').val(data.tt_shortname);
                    $('#tt-edit-id').val(data.tt_id);
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            $('#add-tt').popover('hide');
            $('.view').popover('hide');
            $('.update').popover('hide');
            initRipple();
        });
        $('#tax-types-table').on('click', '.update', function(){
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
                    $('#tt-update-code').val(data.tt_code);
                    $('#tt-update-name').val(data.tt_name);
                    $('#tt-update-shortname').val(data.tt_shortname);
                    $('#tt-update-id').val(data.tt_id);
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            $('#add-tt').popover('hide');
            $('.view').popover('hide');
            $('.edit').popover('hide');
            initRipple();
        });

        $('div').on('click', '.close-popover', function(){
            $('.popover').popover('hide');
        });
        $('div').on('click', '#close-btn', function(){
             $('.popover').popover('hide');
        });
    });
</script>