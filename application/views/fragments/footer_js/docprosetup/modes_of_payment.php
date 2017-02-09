<script>
    $(document).ready(function(){
        var top_table = $('#top-table').DataTable({
            ajax: window_location+'/docpro_setup/top/get',
            columns:[
                        {
                            mData: null, bSortable: false,
                            mRender: function(data, type, full){
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised title view' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised title edit' custom-title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                        <button type='button' class='btn btn-warning btn-xs btn-raised title update' custom-title='Update'><i class='fa fa-refresh'></i></button>";
                            }
                        }, 
                        {'data': 'top_code'}, 
                        {'data': 'top_type'}
                    ],
                    columnDefs: [{targets: 0, width: '100px'}, {targets: 1, width: '80px'}],
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
            $('body').on('hidden.bs.popover', function (e) {
                $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
            });
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
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.card-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
            initRipple();
            no_space();
        });

        $('#add-top').click(function(){
            $('body').on('hidden.bs.popover', function (e) {
                $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
            });
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
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.card-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
            initRipple();
            no_space();
            initSingleSubmit();
        });

        $('#top-table').on('click', '.edit', function(){
            $('body').on('hidden.bs.popover', function (e) {
                $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
            });
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
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.card-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
            initRipple();
            no_space();
            initSingleSubmit();
        });

        $('#top-table').on('click', '.update', function(){
            $('body').on('hidden.bs.popover', function (e) {
                $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
            });
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
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.card-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
            initRipple();
            no_space();
            initSingleSubmit();
        });

        $('div').on('click', '.close-popover', function(){
            $('.popover').popover('hide');
            $('.card-body button').removeAttr('disabled');
        });
        $('div').on('click', '#close-btn', function(){
            $('.popover').popover('hide');
            $('.card-body button').removeAttr('disabled');
        });
    });
</script>