<script src="<?php echo base_url(); ?>/libs/sequence/scripts/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>/libs/sequence/scripts/hammer.min.js"></script>
<script src="<?php echo base_url(); ?>/libs/sequence/scripts/sequence.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/coa_setup.js"></script>

<script type="text/javascript">
	var lvl_1 = $('#lvl-1-table').DataTable({
					ajax: window_location+"/company_settings/chart_of_accounts/coa_lvl_1",
					columns: [
								{
									mData: null, bSortable: false,
									mRender: function(rowdata, setting, fulldata){
										return "<button type='button' class='btn btn-primary btn-xs btn-raised view-level-1 title' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised edit-level-1'><i class='fa fa-pencil title' custom-title='Edit'></i></button>\n\
                                        <button type='button' class='btn btn-danger btn-xs btn-raised delete-level-1 title' custom-title='Delete'><i class='fa fa-trash'></i></button>";
									}
								},
								{'data': 'lvl_1_code'},
								{'data': 'lvl_1_name'},
							],
					columnDefs: [{targets: 0, width: '100px'}, {targets: 1, width: '10%'}],
					order: [[1, 'asc']],
					initComplete: function(){
						initRipple();
					},
                    sDom: 'ftipr',
				});
	var lvl_2 = $('#lvl-2-table').DataTable({
					ajax: window_location+"/company_settings/chart_of_accounts/coa_lvl_2/get/0",
					columns: [
								{
									mData: null, bSortable: false,
									mRender: function(rowdata, setting, fulldata){
										return "<button type='button' class='btn btn-primary btn-xs btn-raised view-level-2 title' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised edit-level-2 title' custom-title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                        <button type='button' class='btn btn-danger btn-xs btn-raised delete-level-2 title' custom-title='Delete'><i class='fa fa-refresh'></i></button>";
									}
								},
								{'data': 'lvl_2_code'},
								{'data': 'lvl_2_name'},
							],
					columnDefs: [{targets: 0, width: '100px'}, {targets: 1, width: '10%'}],
					order: [[1, 'asc']],
					initComplete: function(){
						initRipple();
					},
                    sDom: 'ftipr',
				});
	var lvl_3 = $('#lvl-3-table').DataTable({
					ajax: window_location+"/company_settings/chart_of_accounts/coa_lvl_3/get/0",
					columns: [
								{
									mData: null, bSortable: false,
									mRender: function(rowdata, setting, fulldata){
										return "<button type='button' class='btn btn-primary btn-xs btn-raised view-level-3 title' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised edit-level-3 title' custom-title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                        <button type='button' class='btn btn-danger btn-xs btn-raised delete-level-3 title' custom-title='Delete'><i class='fa fa-refresh'></i></button>";
									}
								},
								{'data': 'lvl_3_code'},
								{'data': 'lvl_3_name'},
							],
					columnDefs: [{targets: 0, width: '100px'}, {targets: 1, width: '10%'}],
					order: [[1, 'asc']],
					initComplete: function(){
						initRipple();
					},
                    sDom: 'ftipr',
				});
	var lvl_4 = $('#lvl-4-table').DataTable({
					ajax: window_location+"/company_settings/chart_of_accounts/coa_lvl_4/get/0",
					columns: [
								{
									mData: null, bSortable: false,
									mRender: function(rowdata, setting, fulldata){
										return "<button type='button' class='btn btn-primary btn-xs btn-raised view-level-4 title' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised edit-level-4 title' custom-title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                        <button type='button' class='btn btn-danger btn-xs btn-raised delete-level-4 title' custom-title='Delete'><i class='fa fa-refresh'></i></button>";
									}
								},
								{'data': 'lvl_4_code'},
								{'data': 'lvl_4_name'},
							],
					columnDefs: [{targets: 0, width: '100px'}, {targets: 1, width: '10%'}],
					order: [[1, 'asc']],
					initComplete: function(){
						initRipple();
					},
                    sDom: 'ftipr',
				});

	$('#lvl-1-table_wrapper').on('click', ' tbody tr', function(){
        let data = lvl_1.row($(this)).data();
        $('#bc-cat1').html(data.lvl_1_name);
        $('#bc-cat2').html('...');
        $('#bc-cat3').html('...');
		if($('#coa_sequence li.seq-in').index() === 0){
			$('#lvl-1-table_wrapper tr').removeAttr('style');
			$(this).css('background-color', '#EEE');
            lvl_2.ajax.url(window_location+"/company_settings/chart_of_accounts/coa_lvl_2/get/"+data.lvl_1_id).load();
			level_1 = true;
            level_2 = false;
            level_3 = false;
            initTitle();
		}
	});

    $('#lvl-2-table_wrapper').on('click', ' tbody tr', function(){
        let data = lvl_2.row($(this)).data();
        $('#bc-cat2').html(data.lvl_2_name);
        $('#bc-cat3').html('...');
        if($('#coa_sequence li.seq-in').index() === 1){
            $('#lvl-2-table_wrapper tr').removeAttr('style');
            $(this).css('background-color', '#EEE');
            $('input[name=add-level-2-id]').val(data.lvl_2_id);
            lvl_3.ajax.url(window_location+"/company_settings/chart_of_accounts/coa_lvl_3/get/"+data.lvl_2_id).load();
            level_2 = true;
            level_3 = false;
            initTitle();
        }
    });

    $('#lvl-3-table_wrapper').on('click', ' tbody tr', function(){
        let data = lvl_3.row($(this)).data();
        $('#bc-cat3').html(data.lvl_3_name);
        if($('#coa_sequence li.seq-in').index() === 2){
            $('#lvl-3-table_wrapper tr').removeAttr('style');
            $(this).css('background-color', '#EEE');
            $('input[name=add-level-3-id]').val(data.lvl_3_id);
            lvl_4.ajax.url(window_location+"/company_settings/chart_of_accounts/coa_lvl_4/get/"+data.lvl_3_id).load();
            level_3 = true;
            level_4 = false;
        }
    });


	$('#add-level-1').click(function(){
		 $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#add-popover-level-1').html();
                },
                container: '.navbar-body',
                callback: function(){},
            });
            $(this).popover('toggle');
            initRipple();
	});

	$('#lvl-1-table').on('click', '.view-level-1', function(){
		var data = lvl_1.row(this.closest('tr')).data();
		 $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#view-popover-level-1').html();
                },
                container: '.navbar-body',
                callback: function(){
                	$('input[name=view-code-level-1]').val(data.lvl_1_code);
                	$('input[name=view-name-level-1]').val(data.lvl_1_name);
                },
            });
            $(this).popover('toggle');
            initRipple();

	});

	$('#lvl-1-table').on('click', '.edit-level-1', function(){
		var data = lvl_1.row(this.closest('tr')).data();
		 $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#edit-popover-level-1').html();
                },
                container: '.navbar-body',
                callback: function(){
                	$('input[name=edit-code-level-1]').val(data.lvl_1_code);
                    $('input[name=edit-name-level-1]').val(data.lvl_1_name);
                	$('input[name=edit-lvl-1-id]').val(data.lvl_1_id);
                },
            });
            $(this).popover('toggle');
            initRipple();

	});

	$('#lvl-1-table').on('click', '.delete-level-1', function(){
		var data = lvl_1.row(this.closest('tr')).data();
		 $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#delete-popover-level-1').html();
                },
                container: '.navbar-body',
                callback: function(){
                	$('input[name=delete-code-level-1]').val(data.lvl_1_code);
                    $('input[name=delete-name-level-1]').val(data.lvl_1_name);
                	$('input[name=co-coa-lvl1-id]').val(data.id);
                },
            });
            $(this).popover('toggle');
            initRipple();

	});

	$('#add-level-2').click(function(){
		 $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#add-popover-level-2').html();
                },
                container: '.navbar-body',
                callback: function(){},
            });
            $(this).popover('toggle');
            initRipple();
	});

	$('#lvl-2-table').on('click', '.view-level-2', function(){
		var data = lvl_2.row(this.closest('tr')).data();
		 $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#view-popover-level-2').html();
                },
                container: '.navbar-body',
                callback: function(){
                	$('input[name=view-code-level-2]').val(data.lvl_2_code);
                	$('input[name=view-name-level-2]').val(data.lvl_2_name);
                },
            });
            $(this).popover('toggle');
            initRipple();

	});

	$('#lvl-2-table').on('click', '.edit-level-2', function(){
		var data = lvl_2.row(this.closest('tr')).data();
		 $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#edit-popover-level-2').html();
                },
                container: '.navbar-body',
                callback: function(){
                	$('input[name=edit-code-level-2]').val(data.lvl_2_code);
                	$('input[name=edit-name-level-2]').val(data.lvl_2_name);
                    $('input[name=edit-lvl-2-id]').val(data.lvl_2_id);
                },
            });
            $(this).popover('toggle');
            initRipple();

	});

	$('#lvl-2-table').on('click', '.delete-level-2', function(){
		var data = lvl_2.row(this.closest('tr')).data();
		 $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#delete-popover-level-2').html();
                },
                container: '.navbar-body',
                callback: function(){
                	$('input[name=delete-code-level-2]').val(data.lvl_2_code);
                    $('input[name=delete-name-level-2]').val(data.lvl_2_name);
                	$('input[name=coalvl_1_2-id]').val(data.id);
                },
            });
            $(this).popover('toggle');
            initRipple();

	});

	$('#add-level-3').click(function(){
		 $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#add-popover-level-3').html();
                },
                container: '.navbar-body',
                callback: function(){},
            });
            $(this).popover('toggle');
            initRipple();
	});

	$('#lvl-3-table').on('click', '.view-level-3', function(){
		var data = lvl_3.row(this.closest('tr')).data();
		 $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#view-popover-level-3').html();
                },
                container: '.navbar-body',
                callback: function(){
                	$('input[name=view-code-level-3]').val(data.lvl_3_code);
                	$('input[name=view-name-level-3]').val(data.lvl_3_name);
                },
            });
            $(this).popover('toggle');
            initRipple();

	});

	$('#lvl-3-table').on('click', '.edit-level-3', function(){
		var data = lvl_3.row(this.closest('tr')).data();
		 $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#edit-popover-level-3').html();
                },
                container: '.navbar-body',
                callback: function(){
                	$('input[name=edit-code-level-3]').val(data.lvl_3_code);
                	$('input[name=edit-name-level-3]').val(data.lvl_3_name);
                    $('input[name=edit-lvl-3-id]').val(data.lvl_3_id);
                },
            });
            $(this).popover('toggle');
            initRipple();

	});

	$('#lvl-3-table').on('click', '.delete-level-3', function(){
		var data = lvl_3.row(this.closest('tr')).data();
		 $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#delete-popover-level-3').html();
                },
                container: '.navbar-body',
                callback: function(){
                	$('input[name=delete-code-level-3]').val(data.lvl_3_code);
                    $('input[name=delete-name-level-3]').val(data.lvl_3_name);
                	$('input[name=coalvl_2_3-id]').val(data.id);
                },
            });
            $(this).popover('toggle');
            initRipple();

	});

	$('#add-level-4').click(function(){
		 $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#add-popover-level-4').html();
                },
                container: '.navbar-body',
                callback: function(){},
            });
            $(this).popover('toggle');
            initRipple();
	});

	$('#lvl-4-table').on('click', '.view-level-4', function(){
		var data = lvl_4.row(this.closest('tr')).data();
		 $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#view-popover-level-4').html();
                },
                container: '.navbar-body',
                callback: function(){
                	$('input[name=view-code-level-4]').val(data.lvl_4_code);
                	$('input[name=view-name-level-4]').val(data.lvl_4_name);
                },
            });
            $(this).popover('toggle');
            initRipple();

	});

	$('#lvl-4-table').on('click', '.edit-level-4', function(){
		var data = lvl_4.row(this.closest('tr')).data();
		 $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#edit-popover-level-4').html();
                },
                container: '.navbar-body',
                callback: function(){
                	$('input[name=edit-code-level-4]').val(data.lvl_4_code);
                	$('input[name=edit-name-level-4]').val(data.lvl_4_name);
                    $('input[name=edit-lvl-4-id]').val(data.lvl_4_id);
                },
            });
            $(this).popover('toggle');
            initRipple();

	});

	$('#lvl-4-table').on('click', '.delete-level-4', function(){
		var data = lvl_4.row(this.closest('tr')).data();
		 $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('add-modal-body');
                    return 'right';
                },
                content: function(){
                    return $('#delete-popover-level-4').html();
                },
                container: '.navbar-body',
                callback: function(){
                	$('input[name=delete-code-level-4]').val(data.lvl_4_code);
                	$('input[name=delete-name-level-4]').val(data.lvl_4_name);
                    $('input[name=coalvl_3_4-id]').val(data.id);
                },
            });
            $(this).popover('toggle');
            initRipple();

	});
	
	$('div').on('click', '.close-popover', function(){
        $('.popover').popover('hide');
    });

	
</script>

<script>
    $('.navbar-body').on('click', '#add-lvl-1-btn', function(){
        var data = {
                    'add-code-level-1': $(this).closest('.popover').find('input[name=add-code-level-1]').val(),
                    'add-name-level-1': $(this).closest('.popover').find('input[name=add-name-level-1]').val()
                };
        $.post(window_location+"/company_settings/chart_of_accounts/coa_lvl_1/add", data, function(response){
            lvl_1.ajax.reload();
            $('.popover').popover('hide');
            level_1 = false;
            level_2 = false;
            level_3 = false;
            level_4 = false;
        });
    });

    $('.navbar-body').on('click', '#edit-lvl-1-btn', function(){
        var data = {
                    'edit-code-level-1': $(this).closest('.popover').find('input[name=edit-code-level-1]').val(),
                    'edit-name-level-1': $(this).closest('.popover').find('input[name=edit-name-level-1]').val(),
                    'edit-lvl-1-id': $(this).closest('.popover').find('input[name=edit-lvl-1-id]').val(),
                };
        $.post(window_location+"/company_settings/chart_of_accounts/coa_lvl_1/edit", data, function(response){
            lvl_1.ajax.reload();
            $('.popover').popover('hide');
            level_1 = false;
            level_2 = false;
            level_3 = false;
            level_4 = false;
        });
    });

    $('.navbar-body').on('click', '#delete-lvl-1-btn', function(){
        var data = {
                    'co-coa-lvl1-id': $(this).closest('.popover').find('input[name=co-coa-lvl1-id]').val(),
                };
        $.post(window_location+"/company_settings/chart_of_accounts/coa_lvl_1/delete", data, function(response){
            lvl_1.ajax.reload();
            $('.popover').popover('hide');
            level_1 = false;
            level_2 = false;
            level_3 = false;
            level_4 = false;
        });
    });

    $('.navbar-body').on('click', '#add-lvl-2-btn', function(){
        var data = {
                    'add-code-level-2': $(this).closest('.popover').find('input[name=add-code-level-2]').val(),
                    'add-name-level-2': $(this).closest('.popover').find('input[name=add-name-level-2]').val()
                };
        $.post(window_location+"/company_settings/chart_of_accounts/coa_lvl_2/add", data, function(response){
            lvl_2.ajax.reload();
            $('.popover').popover('hide');
            level_2 = false;
            level_3 = false;
            level_4 = false;
        });
    });

    $('.navbar-body').on('click', '#edit-lvl-2-btn', function(){
        var data = {
                    'edit-code-level-2': $(this).closest('.popover').find('input[name=edit-code-level-2]').val(),
                    'edit-name-level-2': $(this).closest('.popover').find('input[name=edit-name-level-2]').val(),
                    'edit-lvl-2-id': $(this).closest('.popover').find('input[name=edit-lvl-2-id]').val(),
                };
        $.post(window_location+"/company_settings/chart_of_accounts/coa_lvl_2/edit", data, function(response){
            lvl_2.ajax.reload();
            $('.popover').popover('hide');
            level_2 = false;
            level_3 = false;
            level_4 = false;
        });
    });

    $('.navbar-body').on('click', '#delete-lvl-2-btn', function(){
        var data = {
                    'coalvl_1_2-id': $(this).closest('.popover').find('input[name=coalvl_1_2-id]').val(),
                };
        $.post(window_location+"/company_settings/chart_of_accounts/coa_lvl_2/delete", data, function(response){
            lvl_2.ajax.reload();
            $('.popover').popover('hide');
            level_2 = false;
            level_3 = false;
            level_4 = false;
        });
    });

    $('.navbar-body').on('click', '#add-lvl-3-btn', function(){
        var data = {
                    'add-code-level-3': $(this).closest('.popover').find('input[name=add-code-level-3]').val(),
                    'add-name-level-3': $(this).closest('.popover').find('input[name=add-name-level-3]').val(),
                    'add-level-2-id': $(this).closest('.popover').find('input[name=add-level-2-id]').val()
                };
        $.post(window_location+"/company_settings/chart_of_accounts/coa_lvl_3/add", data, function(response){
            lvl_3.ajax.reload();
            $('.popover').popover('hide');
            level_3 = false;
            level_4 = false;
        });
    });

    $('.navbar-body').on('click', '#edit-lvl-3-btn', function(){
        var data = {
                    'edit-code-level-3': $(this).closest('.popover').find('input[name=edit-code-level-3]').val(),
                    'edit-name-level-3': $(this).closest('.popover').find('input[name=edit-name-level-3]').val(),
                    'edit-lvl-3-id': $(this).closest('.popover').find('input[name=edit-lvl-3-id]').val(),
                };
        $.post(window_location+"/company_settings/chart_of_accounts/coa_lvl_3/edit", data, function(response){
            lvl_3.ajax.reload();
            $('.popover').popover('hide');
            level_3 = false;
            level_4 = false;
        });
    });

    $('.navbar-body').on('click', '#delete-lvl-3-btn', function(){
        var data = {
                    'coalvl_2_3-id': $(this).closest('.popover').find('input[name=coalvl_2_3-id]').val(),
                };
        $.post(window_location+"/company_settings/chart_of_accounts/coa_lvl_3/delete", data, function(response){
            lvl_3.ajax.reload();
            $('.popover').popover('hide');
            level_3 = false;
            level_4 = false;
        });
    });

    $('.navbar-body').on('click', '#add-lvl-4-btn', function(){
        var data = {
                    'add-code-level-4': $(this).closest('.popover').find('input[name=add-code-level-4]').val(),
                    'add-name-level-4': $(this).closest('.popover').find('input[name=add-name-level-4]').val(),
                    'add-level-3-id': $(this).closest('.popover').find('input[name=add-level-3-id]').val()
                };
        $.post(window_location+"/company_settings/chart_of_accounts/coa_lvl_4/add", data, function(response){
            lvl_4.ajax.reload();
            $('.popover').popover('hide');
            level_3 = false;
            level_4 = false;
        });
    });

    $('.navbar-body').on('click', '#edit-lvl-4-btn', function(){
        var data = {
                    'edit-code-level-4': $(this).closest('.popover').find('input[name=edit-code-level-4]').val(),
                    'edit-name-level-4': $(this).closest('.popover').find('input[name=edit-name-level-4]').val(),
                    'edit-lvl-4-id': $(this).closest('.popover').find('input[name=edit-lvl-4-id]').val(),
                };
        $.post(window_location+"/company_settings/chart_of_accounts/coa_lvl_4/edit", data, function(response){
            lvl_4.ajax.reload();
            $('.popover').popover('hide');
            level_4 = false;
        });
    });

    $('.navbar-body').on('click', '#delete-lvl-4-btn', function(){
        var data = {
                    'coalvl_3_4-id': $(this).closest('.popover').find('input[name=coalvl_3_4-id]').val(),
                };
        $.post(window_location+"/company_settings/chart_of_accounts/coa_lvl_4/delete", data, function(response){
            lvl_4.ajax.reload();
            $('.popover').popover('hide');
            level_4 = false;
        });
    });
</script>
