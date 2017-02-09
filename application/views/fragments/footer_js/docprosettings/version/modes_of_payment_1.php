<script>
    $(document).ready(function(){
        var seq = 0;
        var table = $('#modes-of-payment-table').DataTable({
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
            columnDefs: [{targets: 0, width: '20px'}, {targets: 1, width: '1px'}, {targets: 2, width: '150px'}, {targets: 4, width: '150px'}, {targets: 5, width: '150px'}],
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
                    $('#view-code').val(data.mop_code);
                    $('#view-name').val(data.mop_name);
                    $('#view-shortname').val(data.mop_shortname);
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
    });
</script>