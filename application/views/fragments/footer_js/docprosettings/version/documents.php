<script>
    $(document).ready(function(){
        var seq = 0;
        var table = $('#documents-table').DataTable({
            ajax: window.location.origin+'/docpro_settings/documents/get',
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
                        {'data': 'd_code'}, {'data': 'd_class'}, {'data': 'd_name'}, {'data': 'd_shortname'}, {'data': 'j_name'}
                    ],
            columnDefs: [{targets: 0, width: '40px'}, {targets: 1, width: '40px'}],
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
        $('#documents-table').on('click', '.view', function(){
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
                    $('#view-seq').val(data.d_id);
                    $('#view-code').val(data.d_code);
                    $('#view-class').val(data.d_class);
                    $('#view-name').val(data.d_name);
                    $('#view-shortname').val(data.d_shortname);
                    $('#view-journal').val(data.j_name);  
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            $('.edit').popover('hide');
            $('#add').popover('hide');
            $('.update').popover('hide');
            initRipple();
        });
        $('#documents-table').on('click', '.edit', function(){
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
                    $('#edit-seq').val(data.d_id);
                    $('#edit-class').val(data.d_class);
                    $('#edit-name').val(data.d_name);
                    $('#edit-shortname').val(data.d_shortname);
                    $('#edit-journal').val(data.j_name);
                    $('#edit-id').val(data.d_id);
                    $('#edit-journal-id').val(data.j_id);
                    $('#edit-journal-code').val(data.j_code);
                },
                container: '.navbar-body'
            });
            $(this).popover('toggle');
            $('.view').popover('hide');
            $('#add').popover('hide');
            $('.update').popover('hide');
            initRipple();
        });
        $('#documents-table').on('click', '.update', function(){
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
                    $('#update-class').val(data.d_class);
                    $('#update-name').val(data.d_name);
                    $('#update-shortname').val(data.d_shortname);
                    $('#update-journal').val(data.j_name);
                    $('#update-journal-id').val(data.j_id);
                    $('#update-journal-code').val(data.j_code);
                    $('#update-id').val(data.d_id);
                    $('#update-co-docid').val(data.co_doc_id);
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
            $("input[name='add-journal']").val($(this)[0].textContent);
            $("input[name='add-journal-id']").val($(this).attr('j-id'));
            $("input[name='add-journal-code']").val($(this).attr('j-code'));
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='edit-journal']").val($(this)[0].textContent);
            $("input[name='edit-journal-id']").val($(this).attr('j-id'));
            $("input[name='edit-journal-code']").val($(this).attr('j-code'));
        });
        $('div').on('click', '.select-option', function(){
            $("input[name='update-journal']").val($(this)[0].textContent);
            $("input[name='update-journal-id']").val($(this).attr('j-id'));
            $("input[name='update-journal-code']").val($(this).attr('j-code'));
        });
        $('.navbar-body').on('click', '.add-journal-btn', function(){
            $('#add-options').html($('#d-journal-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.edit-journal-btn', function(){
            $('#edit-options').html($('#d-journal-select').html());
            initRipple();
        });
        $('.navbar-body').on('click', '.update-journal-btn', function(){
            $('#update-options').html($('#d-journal-select').html());
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