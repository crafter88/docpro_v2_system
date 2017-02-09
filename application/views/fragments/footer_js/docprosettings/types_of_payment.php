<script>
    $(document).ready(function(){
        var table = $('#top-table').DataTable({
            ajax: window_location+'/docpro_settings/top/get',
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
                    columnDefs: [{targets: 0, width: '20px'}, {targets: 1, width: '80px'}],
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
                    $('#view-code').val(data.top_code);
                    $('#view-type').val(data.top_type);
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
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