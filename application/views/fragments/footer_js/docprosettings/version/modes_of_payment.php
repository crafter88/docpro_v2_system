<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/docpro_setup/mop_setup_seq.js"></script>

<script type="text/javascript">
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
<script>
    $(document).ready(function(){
        var seq = 0;
        var mop_table = $('#modes-of-payment-table').DataTable({
            ajax: window.location.origin+'/docpro_settings/modes_of_payment/get',
            columns:[{
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
            {'data': 'mop_code'}, {'data': 'mop_name'}, {'data': 'mop_shortname'}, {'data': 'top_type'},],
            columnDefs: [{targets: 0, width: '40px'}, {targets: 1, width: '1px'}, {targets: 2, width: '150px'}, {targets: 4, width: '150px'}, {targets: 5, width: '150px'}],
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
        

        $('#modes-of-payment-table').on('click', '.view', function(){
            var data = mop_table.row(this.closest('tr')).data();
            let seq = $(this.closest('tr')).find('td:eq(1)').text();
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('mop-view-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#mop-view-popover').html();
                },
                callback: function(){
                    $('#mop-view-seq').val(seq);
                    $('#mop-view-code').val(data.mop_code);
                    $('#mop-view-name').val(data.mop_name);
                    $('#mop-view-shortname').val(data.mop_shortname);
                    $('#mop-view-type').val(data.top_type);
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            initRipple();
        });
        $('#add-mop').click(function(){
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('mop-add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#mop-add-popover').html();
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            $('.edit').popover('hide');
            $('.view').popover('hide');
            $('.update').popover('hide');
            initRipple();
        });
        $('#modes-of-payment-table').on('click', '.edit', function(){
            var data = mop_table.row(this.closest('tr')).data();
            let seq = $(this.closest('tr')).find('td:eq(1)').text();
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('mop-edit-modal-body')
                    return 'right';
                },
                content: function(){
                    return $('#mop-edit-popover').html();
                },
                callback: function(){
                    $('#mop-edit-seq').val(seq);
                    $('#mop-edit-code').val(data.mop_code);
                    $('#mop-edit-name').val(data.mop_name);
                    $('#mop-edit-shortname').val(data.mop_shortname);
                    $('#mop-edit-type').val(data.top_type);
                    $('#mop-edit-id').val(data.mop_id);
                    $('#mop-edit-type-id').val(data.top_id);
                    $('#mop-edit-type-code').val(data.top_code);
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            $('.view').popover('hide');
            $('#add').popover('hide');
            $('.update').popover('hide');
            initRipple();
        });
        $('#modes-of-payment-table').on('click', '.update', function(){
            var data = mop_table.row(this.closest('tr')).data();
            let seq = $(this.closest('tr')).find('td:eq(1)').text();
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('mop-update-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#mop-update-popover').html();
                },
                callback: function(){
                    $('#mop-update-seq').val(seq);
                    $('#mop-update-code').val(data.mop_code);
                    $('#mop-update-name').val(data.mop_name);
                    $('#mop-update-shortname').val(data.mop_shortname);
                    $('#mop-update-type').val(data.top_type);
                    $('#mop-update-type-id').val(data.top_id);
                    $('#mop-update-type-code').val(data.top_code);
                    $('#mop-update-id').val(data.mop_id);
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
            $("input[name='mop-add-type']").val($(this)[0].textContent);
            $("input[name='mop-add-type-id']").val($(this).attr('type-id'));
            $("input[name='mop-add-type-code']").val($(this).attr('type-code'));
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='mop-edit-type']").val($(this)[0].textContent);
            $("input[name='mop-edit-type-id']").val($(this).attr('type-id'));
            $("input[name='mop-edit-type-code']").val($(this).attr('type-code'));
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='mop-update-type']").val($(this)[0].textContent);
            $("input[name='mop-update-type-id']").val($(this).attr('type-id'));
            $("input[name='mop-update-type-code']").val($(this).attr('type-code'));
        });
        $('.navbar-body').on('click', '.add-type-btn', function(){
            $('#add-options').html($('#mop-type-select').html());
            initRipple();
        });
         $('.navbar-body').on('click', '.mop-add-type-btn', function(){
            $('#mop-add-options').html($('#mop-type-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.mop-edit-type-btn', function(){
            $('#mop-edit-options').html($('#mop-type-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.mop-update-type-btn', function(){
            $('#mop-update-options').html($('#mop-type-select').html());
            initRipple();
        });
        initButtonPrevention();
    });
</script>


<!-- TYPES OF PAYMENT -->
<script>
    $(document).ready(function(){
        var top_table = $('#top-table').DataTable({
            ajax: window.location.origin+'/docpro_settings/top/get',
            columns:[
                        {
                            mData: null, bSortable: false,
                            mRender: function(data, type, full){
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised view' data-hint='View'><i class='fa fa-eye'></i></button>";
                            }
                        }, 
                        {'data': 'top_code'}, 
                        {'data': 'top_type'}
                    ],
                    columnDefs: [{targets: 0, width: '40px'}, {targets: 1, width: '80px'}],
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

        $('#top-table').on('click', '.view', function(){
            var data = top_table.row(this.closest('tr')).data();
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('top-view-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#top-view-popover').html();
                },
                callback: function(){
                    $('#top-view-code').val(data.top_code);
                    $('#top-view-type').val(data.top_type);
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            initRipple();
        });

        $('#add-top').click(function(){
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('top-add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#top-add-popover').html();
                },
                callback: function(){
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            initRipple();
            $('.view').popover('hide');
            $('.edit').popover('hide');
            $('.update').popover('hide');
        });

        $('#top-table').on('click', '.edit', function(){
            var data = top_table.row(this.closest('tr')).data();
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('top-edit-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#top-edit-popover').html();
                },
                callback: function(){
                    $('#top-edit-id').val(data.top_id);
                    $('#top-edit-code').val(data.top_code);
                    $('#top-edit-type').val(data.top_type);
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            initRipple();
            $('#add-top').popover('hide');
            $('.view').popover('hide');
            $('.update').popover('hide');
        });

        $('#top-table').on('click', '.update', function(){
            var data = top_table.row(this.closest('tr')).data();
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('top-update-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#top-update-popover').html();
                },
                callback: function(){
                    $('#top-update-id').val(data.top_id);
                    $('#top-update-code').val(data.top_code);
                    $('#top-update-type').val(data.top_type);
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            initRipple();
            $('#add-top').popover('hide');
            $('.view').popover('hide');
            $('.edit').popover('hide');
        });

        $('div').on('click', '.close-popover', function(){
            $('.popover').popover('hide');
        });
        $('div').on('click', '#close-btn', function(){
             $('.popover').popover('hide');
        });
    });
</script>