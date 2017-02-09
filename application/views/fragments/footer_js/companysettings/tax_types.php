<script>
    $(document).ready(function(){
        var table = $('#tax-types-table').DataTable({
            ajax: window_location+'/docpro_settings/taxtypes/get',
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
                    columnDefs: [{targets: 0, width: '20px'}, {targets: 1, width: '80px'}, {targets: 3, width: '120px'}],
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

        $('#tax-types-table').on('click', '.view', function(){
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
                    $('#view-code').val(data.tt_code);
                    $('#view-name').val(data.tt_name);
                    $('#view-shortname').val(data.tt_shortname);
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