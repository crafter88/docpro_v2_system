<script>
    $(document).ready(function(){
        var table = $('#branches-table').DataTable({
            ajax: window_location+'/company_settings/branches/get',
            columns:[
                {
                    mData: null, bSortable: false,
                    mRender: function(data, type, full){
                        return "<button type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                <button type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                <button type='button' class='btn btn-warning btn-xs btn-raised update title' custom-title='Update'><i class='fa fa-refresh'></i></button>";
                    }
                },   
                {'data': 'br_seq'}, 
                {'data': 'ch_cb_code'}, 
                {'data': 'ch_cb_name'}, 
                {
                    mRender: function(row, settings, full){
                        return full.ch_cb_address.split(';').join(' ');
                    }
                },
                {'data': 'ch_cb_tin'},
                {'data': 'ch_cb_tax_type'},
                {'data': 'ch_cb_cno'},
                {'data': 'ch_cb_email'},
            ],
            columnDefs: [{targets: 0, width: '100px'}],
            scrollX: true,
            order: [['1', 'asc']],
            initComplete: function(settings, json){
                initRipple();
                init_tooltip();
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
                    var popover = $('.popover.add-modal-body');
                    $('#add-tax-type').selectize({});
                    var restriction = Object.create(v_restriction);
                    restriction.number();
                    restriction.required();
                    restriction.format();
                    restriction.no_space();
                    restriction.tin();
                    popover.find('button.v-submit').unbind('click');
                    popover.find('button.v-submit').click(function(){
                        var _this = $(this);
                        var validation = Object.create(v_validation);
                        var required_input = validation.required_input(popover);
                        var format_input = validation.format_input(popover);
                        if(!required_input && !format_input){
                            _this.closest('form').submit();
                            _this.attr('disabled', true);
                            _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
                        }
                    });
                },
                container: '.navbar-body'
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.card-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
            initRipple();
            initSingleSubmit();
        });
        $('#branches-table').on('click', '.view', function(){
            $('body').on('hidden.bs.popover', function (e) {
                $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
            });
            var data = table.row(this.closest('tr')).data();
            var address = data.ch_cb_address.split(";");
            var br_ba_number = address[0];
            var br_ba_street = address[1];
            var br_ba_barangay = address[2];
            var br_ba_city = address[3];
            var br_ba_province = address[4];
            var br_ba_zip = address[5];
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
                    popover.find('input[name=view-seq]').val(data.br_seq);
                    popover.find('input[name=view-code]').val(data.ch_cb_code);
                    popover.find('input[name=view-name]').val(data.ch_cb_name);
                    popover.find('input[name=br_ba_number]').val(br_ba_number);
                    popover.find('input[name=br_ba_street]').val(br_ba_street);
                    popover.find('input[name=br_ba_barangay]').val(br_ba_barangay);
                    popover.find('input[name=br_ba_city]').val(br_ba_city);
                    popover.find('input[name=br_ba_province]').val(br_ba_province);
                    popover.find('input[name=br_ba_zip]').val(br_ba_zip);
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
        });
        $('#branches-table').on('click', '.edit', function(){
            $('body').on('hidden.bs.popover', function (e) {
                $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
            });
            var data = table.row(this.closest('tr')).data();
            var address = data.ch_cb_address.split(";");
            var br_ba_number = address[0];
            var br_ba_street = address[1];
            var br_ba_barangay = address[2];
            var br_ba_city = address[3];
            var br_ba_province = address[4];
            var br_ba_zip = address[5];
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
                    popover.find('input[name=edit-seq]').val(data.br_seq);
                    popover.find('input[name=edit-code]').val(data.ch_cb_code);
                    popover.find('input[name=edit-name]').val(data.ch_cb_name);
                    popover.find('input[name=br_ba_number]').val(br_ba_number);
                    popover.find('input[name=br_ba_street]').val(br_ba_street);
                    popover.find('input[name=br_ba_barangay]').val(br_ba_barangay);
                    popover.find('input[name=br_ba_city]').val(br_ba_city);
                    popover.find('input[name=br_ba_province]').val(br_ba_province);
                    popover.find('input[name=br_ba_zip]').val(br_ba_zip);
                    popover.find('input[name=edit-tin]').val(data.ch_cb_tin);
                    popover.find('input[name=edit-cno]').val(data.ch_cb_cno);
                    popover.find('input[name=edit-email]').val(data.ch_cb_email);
                    popover.find('input[name=ch-cb-id]').val(data.br_id);
                    popover.find('input[name=edit-id]').val(data.ch_id);
                    $('#edit-tax-type').selectize({});
                    var restriction = Object.create(v_restriction);
                    restriction.number();
                    restriction.required();
                    restriction.format();
                    restriction.no_space();
                    restriction.tin();
                    popover.find('button.v-submit').unbind('click');
                    popover.find('button.v-submit').click(function(){
                        var _this = $(this);
                        var validation = Object.create(v_validation);
                        var required_input = validation.required_input(popover);
                        var format_input = validation.format_input(popover);
                        if(!required_input && !format_input){
                            _this.closest('form').submit();
                            _this.attr('disabled', true);
                            _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
                        }
                    });
                },
                container: '.navbar-body'
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.card-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
            initRipple();
            initSingleSubmit();
        });
        $('#branches-table').on('click', '.update', function(){
            $('body').on('hidden.bs.popover', function (e) {
                $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
            });
            var data = table.row(this.closest('tr')).data();
            var address = data.ch_cb_address.split(";");
            var br_ba_number = address[0];
            var br_ba_street = address[1];
            var br_ba_barangay = address[2];
            var br_ba_city = address[3];
            var br_ba_province = address[4];
            var br_ba_zip = address[5];
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
                    popover.find('input[name=update-seq]').val(data.br_seq);
                    popover.find('input[name=update-code]').val(data.ch_cb_code);
                    popover.find('input[name=update-name]').val(data.ch_cb_name);
                    popover.find('input[name=br_ba_number]').val(br_ba_number);
                    popover.find('input[name=br_ba_street]').val(br_ba_street);
                    popover.find('input[name=br_ba_barangay]').val(br_ba_barangay);
                    popover.find('input[name=br_ba_city]').val(br_ba_city);
                    popover.find('input[name=br_ba_province]').val(br_ba_province);
                    popover.find('input[name=br_ba_zip]').val(br_ba_zip);
                    popover.find('select[name=update-tax-type]').val(data.ch_cb_tax_type);
                    popover.find('input[name=update-tin]').val(data.ch_cb_tin);
                    popover.find('input[name=update-cno]').val(data.ch_cb_cno);
                    popover.find('input[name=update-email]').val(data.ch_cb_email);
                    popover.find('input[name=ch-cb-id]').val(data.br_id);
                    popover.find('input[name=update-id]').val(data.ch_id);
                    popover.find('input[name=cbbr-id]').val(data.cbbr_id);
                    $('#update-tax-type').selectize({});
                    var restriction = Object.create(v_restriction);
                    restriction.number();
                    restriction.required();
                    restriction.format();
                    restriction.no_space();
                    restriction.tin();
                    popover.find('button.v-submit').unbind('click');
                    popover.find('button.v-submit').click(function(){
                        var _this = $(this);
                        var validation = Object.create(v_validation);
                        var required_input = validation.required_input(popover);
                        var format_input = validation.format_input(popover);
                        if(!required_input && !format_input){
                            _this.closest('form').submit();
                            _this.attr('disabled', true);
                            _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
                        }
                    });
                },
                container: '.navbar-body'
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.card-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
            initRipple();
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

        $('#switch-state').bootstrapSwitch();
        init_table_option(table, $(this).closest('side-body'));
    });
</script>