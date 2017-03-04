<script type="text/javascript">
	var lvl_1_id = parseFloat($('input[name=default_lvl_1_id]').val());
	var lvl_2_id = parseFloat($('input[name=default_lvl_2_id]').val());
	var lvl_3_id = parseFloat($('input[name=default_lvl_3_id]').val());
	var lvl_4_id = parseFloat($('input[name=default_lvl_4_id]').val());
	var lvl_1_code = $('input[name=default_lvl_1_code]').val();
	var lvl_2_code = $('input[name=default_lvl_2_code]').val();
	var lvl_3_code = $('input[name=default_lvl_3_code]').val();
	var lvl_4_code = $('input[name=default_lvl_4_code]').val();
	var lvl_1_name = $('input[name=default_lvl_1_name]').val();
	var lvl_2_name = $('input[name=default_lvl_2_name]').val();
	var lvl_3_name = $('input[name=default_lvl_3_name]').val();
	var lvl_4_name = $('input[name=default_lvl_4_name]').val();
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>libs/selectize_2/js/standalone/selectize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/company_settings/chart_of_accounts_seq.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/company_settings/table/chart_of_accounts.js"></script>
<script>
	var no_space = function(){
        $(".no-space").on({
          keydown: function(e) {
            if (e.which === 32 && $(this).val().length === 0)
              return false;
          },
        });
    }

    $(document).ready(function(){
        (function(){
            $('#account-elements thead tr.searchfilterrow th').each( function () {
                if($(this).index() !== 0){
                    var title = $('#account-elements thead th').eq( $(this).index() ).text();
                    $(this).html( '<input type="text" onclick="stopPropagation(event);" placeholder="Search '+title+'" />' );
                }
            });
            $("#account-elements thead input").on( 'keyup change', function () {
                acc_elements.column($(this).parent().index()+':visible')
                     .search(this.value)
                     .draw();
            } );
        })();
        (function(){
            $('#account-classification thead tr.searchfilterrow th').each( function () {
                if($(this).index() !== 0){
                    var title = $('#account-classification thead th').eq( $(this).index() ).text();
                    $(this).html( '<input type="text" onclick="stopPropagation(event);" placeholder="Search '+title+'" />' );
                }
            });
            $("#account-classification thead input").on( 'keyup change', function () {
                acc_classification.column($(this).parent().index()+':visible')
                     .search(this.value)
                     .draw();
            } );
        })();
        (function(){
            $('#line-items thead tr.searchfilterrow th').each( function () {
                if($(this).index() !== 0){
                    var title = $('#line-items thead th').eq( $(this).index() ).text();
                    $(this).html( '<input type="text" onclick="stopPropagation(event);" placeholder="Search '+title+'" />' );
                }
            });
            $("#line-items thead input").on( 'keyup change', function () {
                line_items.column($(this).parent().index()+':visible')
                     .search(this.value)
                     .draw();
            } );
        })();
        (function(){
            $('#account-subclassification thead tr.searchfilterrow th').each( function () {
                if($(this).index() !== 0){
                    var title = $('#account-subclassification thead th').eq( $(this).index() ).text();
                    $(this).html( '<input type="text" onclick="stopPropagation(event);" placeholder="Search '+title+'" />' );
                }
            });
            $("#account-subclassification thead input").on( 'keyup change', function () {
                account_subclassification.column($(this).parent().index()+':visible')
                     .search(this.value)
                     .draw();
            } );
        })();
        (function(){
            $('#lvl5-table thead tr.searchfilterrow th').each( function () {
                if($(this).index() !== 0){
                    var title = $('#lvl5-table thead th').eq( $(this).index() ).text();
                    $(this).html( '<input type="text" onclick="stopPropagation(event);" placeholder="Search '+title+'" />' );
                }
            });
            $("#lvl5-table thead input").on( 'keyup change', function () {
                lvl_5.column($(this).parent().index()+':visible')
                     .search(this.value)
                     .draw();
            } );
        })();
        (function(){
            $('#coa-table thead tr.searchfilterrow th').each( function () {
                if($(this).index() !== 0){
                    var title = $('#coa-table thead th').eq( $(this).index() ).text();
                    $(this).html( '<input type="text" onclick="stopPropagation(event);" placeholder="Search '+title+'" />' );
                }
            });
            $("#coa-table thead input").on( 'keyup change', function () {
                coa.column($(this).parent().index()+':visible')
                     .search(this.value)
                     .draw();
            } );
        })();


    	var acc_elements = $('#account-elements').DataTable({
    		ajax: window_location+'/company_settings/chart_of_accounts/acc_elements_get',
    		columns: [
                        {
                            mData: null, bSortable: false, bSearchable: false,
                            mRender: function(data, type, full){
                            	if($('input#mc_id').val() === $('input#bc_id').val()){
                            		if(full.lvl_1_setup_company === 'docpro'){
                            			if(full.status === '1'){
                            				return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' class='disable_lvl_1'>";
                            			}
                            			return "<input type='checkbox' style='margin: 0 auto; display: table;' title='Enable or Disable' class='disable_lvl_1'>";
                            		}
                            		return "<button type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                        <button type=button class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete'><i class='fa fa-times'></i></button>";
                            	}
                            	if(full.lvl_1_setup_company === 'docpro'){
                            		if(full.status === '1'){
                            			return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                            		}
                        			return "<input type='checkbox' style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                        		}
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View' disabled><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit' disabled><i class='fa fa-pencil'></i></button>\n\
                                        <button type=button class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete' disabled><i class='fa fa-times'></i></button>";
                            }
                        },
    					{'data': 'lvl_1_seq'},
    					{'data': 'lvl_1_code'},
    					{
                            mRender: function(row, setting, full){
                                if(full.status === '1'){
                                    return full.lvl_1_name + "<button class='btn btn-raised btn-default btn-xs next-level show-lvl-2 seq-btn-next' title='Show Classification'><i class='fa fa-angle-right'></i></button>";
                                }
                                return full.lvl_1_name + "<button class='btn btn-raised btn-default btn-xs next-level seq-btn-next' title='Show Classification'><i class='fa fa-angle-right'></i></button>";
                            }
                        },
    				],
    		columnDefs: [{targets: 0, width: '100px'}, {targets: 1, width: '40px'}, {targets: 2, width: '80px'}],
            scrollX: true,
            order: [['2', 'asc']],
            orderCellsTop: true,
            bPaginate: false,
            language: {
                info: 'Total number of records: <b> _MAX_ </b>',
                infoEmpty: 'Total number of records: <b> 0 </b>'
            },
    		fnDrawCallback: function(oSettings) {
    			$.each(oSettings.aoData, function(index, data){
    				if(data._aData.lvl_1_id+'' === lvl_1_id+''){
    					$('#account-elements tbody tr:eq('+index+')').addClass('selected');
    				}
    			});
    		}
    	});
    	var acc_classification = $('#account-classification').DataTable({
    		ajax: window_location+'/company_settings/chart_of_accounts/reload_lvl_2/'+lvl_1_id,
    		columns: [
                        {
                            mData: null, bSortable: false, bSearchable: false,
                            mRender: function(data, type, full){
                            	if($('input#mc_id').val() === $('input#bc_id').val()){
                            		if(full.lvl_2_setup_company === 'docpro'){
                                        if(full.lvl_2_code+'' === '0'){
                                            return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                                        }
                            			if(full.lvl_2_status === '1'){
                            				return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' class='disable_lvl_2'>";
                            			}
                            			return "<input type='checkbox' style='margin: 0 auto; display: table;' title='Enable or Disable' class='disable_lvl_2'>";
                            		}
                                    if(full.lvl_2_setup_company === 'company'){
                                        if(full.lvl_2_code+'' === '0'){
                                            return "<span type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View' disabled><i class='fa fa-eye'></i></span>\n\
                                            <span type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit' disabled><i class='fa fa-pencil'></i></span>\n\
                                            <span type=button class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete' disabled><i class='fa fa-times'></i></span>";
                                        }
                                    }
                            		return "<button type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                        <button type=button class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete'><i class='fa fa-times'></i></button>";
                            	}
                            	if(full.lvl_2_setup_company === 'docpro'){
                                    if(full.lvl_2_code+'' === '0'){
                                        return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                                    }
                            		if(full.lvl_2_status === '1'){
                            			return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                            		}
                        			return "<input type='checkbox' style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                        		}
                                return "<span type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View' disabled><i class='fa fa-eye'></i></span>\n\
                                        <span type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit' disabled><i class='fa fa-pencil'></i></span>\n\
                                        <span type=button class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete' disabled><i class='fa fa-times'></i></span>";
                            }
                        },
    					{'data': 'lvl_2_seq'},
    					{'data': 'lvl_1_code'},
    					{'data': 'lvl_2_code'},
    					{
                            mRender: function(row, setting, full){
                                if(full.lvl_2_status === '1'){
                                    return "<button class='btn btn-raised btn-default btn-xs prev-level show-lvl-1 seq-btn-prev' title='Show Element'><i class='fa fa-angle-left'></i></button>" + full.lvl_2_name + "<button class='btn btn-raised btn-default btn-xs next-level show-lvl-3 seq-btn-next' title='Show Line Items'><i class='fa fa-angle-right'></i></button>";
                                }
                                return "<button class='btn btn-raised btn-default btn-xs prev-level show-lvl-1 seq-btn-prev' title='Show Element'><i class='fa fa-angle-left'></i></button>" + full.lvl_2_name + "<button class='btn btn-raised btn-default btn-xs next-level seq-btn-next' title='Show Line Items'><i class='fa fa-angle-right'></i></button>";
                            }
                        },
    				],
    		columnDefs: [{targets: 0, width: '100px'}, {targets: 1, width: '40px'}, {targets: 2, width: '80px'}, {targets: 3, width: '150px'}],
    		scrollX: true,
            order: [['2', 'asc']],
            orderCellsTop: true,
            bPaginate: false,
            language: {
                info: 'Total number of records: <b> _MAX_ </b>',
                infoEmpty: 'Total number of records: <b> 0 </b>'
            },
    		fnDrawCallback: function(oSettings) {
    			$.each(oSettings.aoData, function(index, data){
    				if(data._aData.lvl_2_id+'' === lvl_2_id+''){
    					$('#account-classification tbody tr:eq('+index+')').addClass('selected');
    				}
    			});
    		}
    	});
    	var line_items = $('#line-items').DataTable({
    		ajax: window_location+'/company_settings/chart_of_accounts/reload_lvl_3/'+lvl_2_id,
    		columns: [
                        {
                            mData: null, bSortable: false, bSearchable: false,
                            mRender: function(data, type, full){
                            	if($('input#mc_id').val() === $('input#bc_id').val()){
                            		if(full.lvl_3_setup_company === 'docpro'){
                                        if(full.lvl_3_code_int+'' === '0'){
                                            return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                                        }
                            			if(full.lvl_3_status === '1'){
                            				return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' class='disable_lvl_3'>";
                            			}
                            			return "<input type='checkbox' style='margin: 0 auto; display: table;' title='Enable or Disable' class='disable_lvl_3'>";
                            		}
                                    if(full.lvl_3_setup_company === 'company'){
                                        if(full.lvl_3_code_int+'' === '0'){
                                            return "<span type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View' disabled><i class='fa fa-eye'></i></span>\n\
                                            <span type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit' disabled><i class='fa fa-pencil'></i></span>\n\
                                            <span type=button class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete' disabled><i class='fa fa-times'></i></span>";
                                        }
                                    }
                            		return "<button type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                        <button type=button class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete'><i class='fa fa-times'></i></button>";
                            	}
                            	if(full.lvl_3_setup_company === 'docpro'){
                                    if(full.lvl_3_code_int+'' === '0'){
                                        return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                                    }
                            		if(full.lvl_3_status === '1'){
                            			return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                            		}
                        			return "<input type='checkbox' style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                        		}
                               	return "<span type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View' disabled><i class='fa fa-eye'></i></span>\n\
                                        <span type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit' disabled><i class='fa fa-pencil'></i></span>\n\
                                        <span type=button class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete' disabled><i class='fa fa-times'></i></span>";
                            }
                        },
    					{'data': 'lvl_3_seq'},
    					{'data': 'lvl_1_code'},
    					{'data': 'lvl_2_code'},
    					{'data': 'lvl_3_code'},
    					{
                            mRender: function(row, setting, full){
                                if(full.lvl_3_status === '1'){
                                    return "<button class='btn btn-raised btn-default btn-xs prev-level show-lvl-2 seq-btn-prev' title='Show Classification'><i class='fa fa-angle-left'></i></button>" + full.lvl_3_name + "<button class='btn btn-raised btn-default btn-xs next-level show-lvl-4 seq-btn-next' title='Show SubClassification'><i class='fa fa-angle-right'></i></button>";
                                }
                                return "<button class='btn btn-raised btn-default btn-xs prev-level show-lvl-2 seq-btn-prev' title='Show Classification'><i class='fa fa-angle-left'></i></button>" + full.lvl_3_name + "<button class='btn btn-raised btn-default btn-xs next-level seq-btn-next' title='Show SubClassification'><i class='fa fa-angle-right'></i></button>";
                            }
                        }
    				],
    		columnDefs: [{targets: 0, width: '100px'}, {targets: 1, width: '40px'}, {targets: 2, width: '80px'}, {targets: 3, width: '150px'}, {targets: 4, width: '100px'}],
    		scrollX: true,
            order: [['2', 'asc']],
            orderCellsTop: true,
            bPaginate: false,
            language: {
                info: 'Total number of records: <b> _MAX_ </b>',
                infoEmpty: 'Total number of records: <b> 0 </b>'
            },
    		fnDrawCallback: function(oSettings) {
    			$.each(oSettings.aoData, function(index, data){
    				if(data._aData.lvl_3_id+'' === lvl_3_id+''){
    					$('#line-items tbody tr:eq('+index+')').addClass('selected');
    				}
    			});
    		}
    	});
    	var account_subclassification = $('#account-subclassification').DataTable({
    		ajax: window_location+'/company_settings/chart_of_accounts/reload_lvl_4/'+lvl_3_id,
    		columns: [
                        {
                            mData: null, bSortable: false, bSearchable: false,
                            mRender: function(data, type, full){
                            	if($('input#mc_id').val() === $('input#bc_id').val()){
                            		if(full.lvl_4_setup_company === 'docpro'){
                                        if(full.lvl_4_code+'' === '0'){
                                            return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                                        }
                            			if(full.lvl_4_status === '1'){
                            				return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' class='disable_lvl_4'>";
                            			}
                            			return "<input type='checkbox' style='margin: 0 auto; display: table;' title='Enable or Disable' class='disable_lvl_4'>";
                            		}
                                    if(full.lvl_4_setup_company === 'company'){
                                        if(full.lvl_4_code+'' === '0'){
                                            return "<span type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View' disabled><i class='fa fa-eye'></i></span>\n\
                                            <span type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit' disabled><i class='fa fa-pencil'></i></span>\n\
                                            <span type=button class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete' disabled><i class='fa fa-times'></i></span>";
                                        }
                                    }
                            		return "<button type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                        <button type=button class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete'><i class='fa fa-times'></i></button>";
                            	}
                            	if(full.lvl_4_setup_company === 'docpro'){
                                    if(full.lvl_4_code+'' === '0'){
                                        return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                                    }
                            		if(full.lvl_4_status === '1'){
                            			return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                            		}
                        			return "<input type='checkbox' style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                        		}
                                return "<span type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View' disabled><i class='fa fa-eye'></i></span>\n\
                                        <span type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit' disabled><i class='fa fa-pencil'></i></span>\n\
                                        <span type=button class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete' disabled><i class='fa fa-times'></i></span>";
                            }
                        },
    					{'data': 'lvl_4_seq'},
    					{'data': 'lvl_1_code'},
    					{'data': 'lvl_2_code'},
    					{'data': 'lvl_3_code'},
    					{'data': 'lvl_4_code'},
    					{
                            mRender: function(row, setting, full){
                                if(full.lvl_4_status === '1'){
                                    return "<button class='btn btn-raised btn-default btn-xs prev-level show-lvl-3 seq-btn-prev' title='Show Line Item'><i class='fa fa-angle-left'></i></button>" + full.lvl_4_name;
                                        // + "<button class='btn btn-raised btn-default btn-xs next-level show-lvl-5' title='Show Subsidiary Name'><i class='fa fa-angle-right'></i></button>";
                                }
                                return "<button class='btn btn-raised btn-default btn-xs prev-level show-lvl-3 seq-btn-prev' title='Show Line Item'><i class='fa fa-angle-left'></i></button>" + full.lvl_4_name;
                                    // + "<button class='btn btn-raised btn-default btn-xs next-level' title='Show Subsidiary Name'><i class='fa fa-angle-right'></i></button>";
                            }
                        },
    					{'data': 'bir'}
    				],
    		columnDefs: [{targets: 0, width: '100px'}, {targets: 1, width: '40px'}, {targets: 2, width: '80px'}, {targets: 3, width: '150px'}, {targets: 4, width: '100px'}, {targets: 5, width: '150px'}],
    		scrollX: true,
            order: [['2', 'asc']],
            orderCellsTop: true,
            bPaginate: false,
            language: {
                info: 'Total number of records: <b> _MAX_ </b>',
                infoEmpty: 'Total number of records: <b> 0 </b>'
            },
    		fnDrawCallback: function(oSettings) {
    			$.each(oSettings.aoData, function(index, data){
    				if(data._aData.lvl_4_id+'' === lvl_4_id+''){
    					$('#account-subclassification tbody tr:eq('+index+')').addClass('selected');
    				}
    			});
    		}
    	});
    	var lvl_5 = $('#lvl5-table').DataTable({
    		ajax: window_location+'/company_settings/chart_of_accounts/reload_lvl_5/'+lvl_4_id,
    		columns: [
                        {
                            mData: null, bSortable: false, bSearchable: false,
                            mRender: function(data, type, full){
                            	if($('input#mc_id').val() === $('input#bc_id').val()){
                            		if(full.lvl_5_setup_company === 'docpro'){
                                        if(full.lvl_5_code+'' === '0'){
                                            return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                                        }
                            			if(full.lvl_5_status === '1'){
                            				return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' class='disable_lvl_5'>";
                            			}
                            			return "<input type='checkbox' style='margin: 0 auto; display: table;' title='Enable or Disable' class='disable_lvl_5'>";
                            		}
                                    if(full.lvl_5_setup_company === 'company'){
                                        if(full.lvl_5_code+'' === '0'){
                                            return "<span type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View' disabled><i class='fa fa-eye'></i></span>\n\
                                            <span type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit' disabled><i class='fa fa-pencil'></i></span>\n\
                                            <span type=button class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete' disabled><i class='fa fa-times'></i></span>";
                                        }
                                    }
                            		return "<button type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                        <button type=button class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete'><i class='fa fa-times'></i></button>";
                            	}
                            	if(full.lvl_5_setup_company === 'docpro'){
                                    if(full.lvl_5_code+'' === '0'){
                                        return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                                    }
                            		if(full.lvl_5_status === '1'){
                            			return "<input type='checkbox' checked style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                            		}
                        			return "<input type='checkbox' style='margin: 0 auto; display: table;' title='Enable or Disable' disabled>";
                        		}
                                return "<span type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View' disabled><i class='fa fa-eye'></i></span>\n\
                                        <span type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit' disabled><i class='fa fa-pencil'></i></span>\n\
                                        <span type=button class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete' disabled><i class='fa fa-times'></i></span>";
                            }
                        },
    					{'data': 'lvl_5_seq'},
    					{'data': 'lvl_1_code'},
    					{'data': 'lvl_2_code'},
    					{'data': 'lvl_3_code'},
    					{'data': 'lvl_4_code'},
    					{'data': 'lvl_5_code'},
    					{
                            mRender: function(row, setting, full){
                                return "<button class='btn btn-raised btn-default btn-xs prev-level show-lvl-4 seq-btn-prev' title='Show SubClassification'><i class='fa fa-angle-left'></i></button>" + full.lvl_5_name;
                            }
                        },
    				],
    		columnDefs: [{targets: 0, width: '100px'}, {targets: 1, width: '40px'}, {targets: 2, width: '80px'}, {targets: 3, width: '150px'}, {targets: 4, width: '100px'}, {targets: 5, width: '150px'}, {targets: 6, width: '100px'}],
    		scrollX: true,
            order: [['2', 'asc']],
            orderCellsTop: true,
            bPaginate: false,
            language: {
                info: 'Total number of records: <b> _MAX_ </b>',
                infoEmpty: 'Total number of records: <b> 0 </b>'
            },
    		fnDrawCallback: function(oSettings) {
    			// $.each(oSettings.aoData, function(index, data){
    			// 	if(data._aData.lvl_4_id+'' === lvl_4_id+''){
    			// 		$('#account-subclassification tbody tr:eq('+index+')').addClass('selected');
    			// 	}
    			// });
    		}
    	});
    	var coa = $('#coa-table').DataTable({
    		ajax: window_location+'/company_settings/chart_of_accounts/coa_get',
    		columns: [
                        {
                            mData: null, bSortable: false, bSearchable: false,
                            mRender: function(data, type, full){
                            	if($('input#mc_id').val() === $('input#bc_id').val()){
                            		return "<button type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View'><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit'><i class='fa fa-pencil'></i></button>\n\
                                        <button type=button class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete'><i class='fa fa-times'></i></button>";
                            	}
                                return "<button type='button' class='btn btn-primary btn-xs btn-raised view title' custom-title='View' disabled><i class='fa fa-eye'></i></button>\n\
                                        <button type='button' class='btn btn-success btn-xs btn-raised edit title' custom-title='Edit' disabled><i class='fa fa-pencil'></i></button>\n\
                                        <button type=button class='btn btn-danger btn-xs btn-raised delete title' custom-title='Delete' disabled><i class='fa fa-times'></i></button>";
                            }
                        },
    					{'data': 'lvl_1_name'},
    					{'data': 'lvl_2_name'},
    					{'data': 'lvl_3_name'},
    					{'data': 'lvl_4_name'},
    					{'data': 'lvl_5_name'},
    					{'data': 'coa_code'},
    					{'data': 'coa_name'},
    					{'data': 'bir'},
    				],
    		columnDefs: [{targets: 0, width: '100px'}],
    		scrollX: true,
            order: [['2', 'asc']],
            orderCellsTop: true,
            bPaginate: false,
            language: {
                info: 'Total number of records: <b> _MAX_ </b>',
                infoEmpty: 'Total number of records: <b> 0 </b>'
            },
    	});

    	var init_breadcrumb = function(){
    		$('#coa_breadcrumb').html(
    								"<li><a href='#'>"+((lvl_1_name === '') ? '...' : lvl_1_name)+"</a></li>"+
    								"<li><a href='#'>"+((lvl_2_name === '') ? '...' : lvl_2_name)+"</a></li>"+
    								"<li><a href='#'>"+((lvl_3_name === '') ? '...' : lvl_3_name)+"</a></li>"+
    								"<li><a href='#'>"+((lvl_4_name === '') ? '...' : lvl_4_name)+"</a></li>"
    							);
    	}
    	init_breadcrumb();

        init_general_search(acc_elements, '.general-search-lvl1');
        init_general_search(acc_classification, '.general-search-lvl2');
        init_general_search(line_items, '.general-search-lvl3');
        init_general_search(account_subclassification, '.general-search-lvl4');
        init_general_search(lvl_5, '.general-search-lvl5');
        init_general_search(coa, '.general-search-lvl6');

        hide_columns(acc_elements, acc_classification, line_items, account_subclassification, lvl_5, coa);
        init_table_settings(acc_elements, acc_classification, line_items, account_subclassification, lvl_5, coa);

    	$('#account-elements').on('click', 'tbody tr', function(){
    		$(this).closest('table').find('tr').removeClass('selected');
    		$(this).addClass('selected');
    		let data = acc_elements.row($(this)).data();
    		lvl_1_code = 0;
    		lvl_1_id = 0;
    		lvl_1_name = '';
    		if(data.status === '1'){
    			lvl_1_code = data.lvl_1_code;
    			lvl_1_id = data.lvl_1_id;
    			lvl_1_name = data.lvl_1_name;
    		}
    		lvl_2_code = 0;
    		lvl_3_code = 0;
    		lvl_4_code = 0;
    		lvl_2_id = 0;
    		lvl_3_id = 0;
    		lvl_4_id = 0;
    		lvl_2_name = '';
    		lvl_3_name = '';
    		lvl_4_name = '';
    		init_breadcrumb();
    	});

    	$('#account-classification').on('click', 'tbody tr', function(){
    		$(this).closest('table').find('tr').removeClass('selected');
    		$(this).addClass('selected');
    		let data = acc_classification.row($(this)).data();
    		lvl_2_code = 0;
    		lvl_2_id = 0;
    		lvl_2_name = '';
    		if(data.lvl_2_status === '1'){
    			lvl_2_code = data.lvl_2_code;
    			lvl_2_id = data.lvl_2_id;
    			lvl_2_name = data.lvl_2_name;
    		}
    		lvl_3_code = 0;
    		lvl_4_code = 0;
    		lvl_3_id = 0;
    		lvl_4_id = 0;
    		lvl_3_name = '';
    		lvl_4_name = '';
    		init_breadcrumb();
    	});

    	$('#line-items').on('click', 'tbody tr', function(){
    		$(this).closest('table').find('tr').removeClass('selected');
    		$(this).addClass('selected');
    		let data = line_items.row($(this)).data();
    		lvl_3_code = 0;
    		lvl_3_id = 0;
    		lvl_3_name = '';
    		if(data.lvl_3_status === '1'){
    			lvl_3_code = data.lvl_3_code;
    			lvl_3_id = data.lvl_3_id;
    			lvl_3_name = data.lvl_3_name;
    		}
    		lvl_4_code = 0;
    		lvl_4_id = 0;
    		lvl_4_name = '';
    		init_breadcrumb();
    	});

    	$('#account-subclassification').on('click', 'tbody tr', function(){
    		$(this).closest('table').find('tr').removeClass('selected');
    		$(this).addClass('selected');
    		let data = account_subclassification.row($(this)).data();
    		lvl_4_code = 0;
    		lvl_4_id = 0;
    		lvl_4_name = '';
    		if(data.lvl_4_status === '1'){
    			lvl_4_code = account_subclassification.row($(this)).data().lvl_4_code;
    			lvl_4_id = account_subclassification.row($(this)).data().lvl_4_id;
    			lvl_4_name = account_subclassification.row($(this)).data().lvl_4_name;
    		}
    		init_breadcrumb();
    	});


    // ACCOUNT ELEMENTS POPOVER
    	$('#add-acc-elements').click(function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('acc-elements-add');
    				return 'right';
    			},
    			content: function(){
    				return $('#add-acc-elements-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.acc-elements-add');
    				popover.find('input[name=lvl_1_id]').val(lvl_1_id);
    				popover.find('input[name=lvl_2_id]').val(lvl_2_id);
    				popover.find('input[name=lvl_3_id]').val(lvl_3_id);
    				popover.find('input[name=lvl_1_code]').val(lvl_1_code);
    				popover.find('input[name=lvl_2_code]').val(lvl_2_code);
    				popover.find('input[name=lvl_3_code]').val(lvl_3_code);
    				popover.find('input[name=lvl_1_name]').val(lvl_1_name);
    				popover.find('input[name=lvl_2_name]').val(lvl_2_name);
    				popover.find('input[name=lvl_3_name]').val(lvl_3_name);
                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    $(popover).find('button.v-submit').unbind('click');
                    $(popover).find('button.v-submit').click(function(){
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
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    		initSingleSubmit();
    	});
    	$('#account-elements').on('click', 'button.view', function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		var data = acc_elements.row(this.closest('tr')).data();
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('acc-elements-view');
    				return 'right';
    			},
    			content: function(){
    				return $('#view-acc-elements-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.acc-elements-view');
    				popover.find('input[name=acc-elements-view-code]').val(data.lvl_1_code);
    				popover.find('input[name=acc-elements-view-name]').val(data.lvl_1_name);
    			},
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    	});
    	$('#account-elements').on('click', 'button.edit', function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		var data = acc_elements.row(this.closest('tr')).data();
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('acc-elements-edit');
    				return 'right';
    			},
    			content: function(){
    				return $('#edit-acc-elements-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.acc-elements-edit');
    				popover.find('input[name=acc-elements-edit-code]').val(data.lvl_1_code);
    				popover.find('input[name=acc-elements-edit-name]').val(data.lvl_1_name);
    				popover.find('input[name=acc-elements-edit-id]').val(data.lvl_1_id);
    				popover.find('input[name=lvl_1_id]').val(lvl_1_id);
    				popover.find('input[name=lvl_2_id]').val(lvl_2_id);
    				popover.find('input[name=lvl_3_id]').val(lvl_3_id);
    				popover.find('input[name=lvl_1_code]').val(lvl_1_code);
    				popover.find('input[name=lvl_2_code]').val(lvl_2_code);
    				popover.find('input[name=lvl_3_code]').val(lvl_3_code);
    				popover.find('input[name=lvl_1_name]').val(lvl_1_name);
    				popover.find('input[name=lvl_2_name]').val(lvl_2_name);
    				popover.find('input[name=lvl_3_name]').val(lvl_3_name);
                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    restriction.number();
                    $(popover).find('button.v-submit').unbind('click');
                    $(popover).find('button.v-submit').click(function(){
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
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    		initSingleSubmit();
    	});
    	$('#account-elements').on('click', 'button.delete', function(){
    		var data = acc_elements.row(this.closest('tr')).data();
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('acc-elements-delete');
    				return 'right';
    			},
    			content: function(){
    				return $('#delete-acc-elements-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.acc-elements-delete');
    				popover.find('input[name=acc-elements-delete-code]').val(data.lvl_1_code);
    				popover.find('input[name=acc-elements-delete-name]').val(data.lvl_1_name);
    				popover.find('input[name=acc-elements-delete-id]').val(data.lvl_1_id);
    				popover.find('input[name=lvl_1_id]').val(lvl_1_id);
    				popover.find('input[name=lvl_2_id]').val(lvl_2_id);
    				popover.find('input[name=lvl_3_id]').val(lvl_3_id);
    				popover.find('input[name=lvl_1_code]').val(lvl_1_code);
    				popover.find('input[name=lvl_2_code]').val(lvl_2_code);
    				popover.find('input[name=lvl_3_code]').val(lvl_3_code);
    				popover.find('input[name=lvl_1_name]').val(lvl_1_name);
    				popover.find('input[name=lvl_2_name]').val(lvl_2_name);
    				popover.find('input[name=lvl_3_name]').val(lvl_3_name);
    			},
    			container: 'body'
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    	});
    // ACCOUNT CLASSIFICATION POPOVER
    	$('#add-acc-classification').click(function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('acc-classification-add');
    				return 'right';
    			},
    			content: function(){
    				return $('#add-acc-classification-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.acc-classification-add');
    				popover.find('input[name=add-lvl2-lvl1-code]').val(lvl_1_code);
    				popover.find('input[name=acc-classification-add-elements]').val(lvl_1_id);
    				popover.find('#acc-classification-add-elements').val(lvl_1_id);
    				popover.find('#acc-classification-add-elements').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						direction: 'asc'
    					},
    					dropdownParent: 'body',
    					onChange: function(){
    						var val = $('#acc-classification-add-elements').val();
    						var code = $('#add-acc-classification-popover #acc-classification-add-elements').find("option[value="+val+"]").attr('code');
    						$('#add-lvl2-lvl1-code').val(code);
    					},
    				});

    				popover.find('input[name=lvl_1_id]').val(lvl_1_id);
    				popover.find('input[name=lvl_2_id]').val(lvl_2_id);
    				popover.find('input[name=lvl_3_id]').val(lvl_3_id);
    				popover.find('input[name=lvl_1_code]').val(lvl_1_code);
    				popover.find('input[name=lvl_2_code]').val(lvl_2_code);
    				popover.find('input[name=lvl_3_code]').val(lvl_3_code);
    				popover.find('input[name=lvl_1_name]').val(lvl_1_name);
    				popover.find('input[name=lvl_2_name]').val(lvl_2_name);
    				popover.find('input[name=lvl_3_name]').val(lvl_3_name);
                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    $(popover).find('button.v-submit').unbind('click');
                    $(popover).find('button.v-submit').click(function(){
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
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    		initSingleSubmit();
    	});
    	$('#account-classification').on('click', 'button.view', function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		var data = acc_classification.row(this.closest('tr')).data();
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('acc-classification-view');
    				return 'right';
    			},
    			content: function(){
    				return $('#view-acc-classification-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.acc-classification-view');
    				popover.find('input[name=acc-classification-view-code]').val(data.lvl_2_code);
    				popover.find('input[name=acc-classification-view-name]').val(data.lvl_2_name);
    				popover.find('input[name=view-lvl2-lvl1-code]').val(data.lvl_1_code);
    				popover.find('#acc-classification-view-elements').val(data.lvl_1_id);
    				popover.find('#acc-classification-view-elements').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						direction: 'asc'
    					},
    					dropdownParent: 'body'
    				});
    			},
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    	});
    	$('#account-classification').on('click', 'button.edit', function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		var data = acc_classification.row(this.closest('tr')).data();
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('acc-classification-edit');
    				return 'right';
    			},
    			content: function(){
    				return $('#edit-acc-classification-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.acc-classification-edit');
    				popover.find('input[name=acc-classification-edit-code]').val(data.lvl_2_code);
    				popover.find('input[name=acc-classification-edit-name]').val(data.lvl_2_name);
    				popover.find('input[name=acc-classification-edit-id]').val(data.lvl_2_id);
    				popover.find('input[name=acc-classification-edit-join-id]').val(data.coalvl12_id);
    				popover.find('input[name=acc-classification-edit-elements]').val(data.lvl_1_id);
    				popover.find('input[name=edit-lvl2-lvl1-code]').val(data.lvl_1_code);
    				popover.find('#acc-classification-edit-elements').val(lvl_1_id);
    				popover.find('#acc-classification-edit-elements').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						direction: 'asc'
    					},
    					dropdownParent: null,
    					onChange: function(){
    						var val = $('#acc-classification-edit-elements').val();
    						var code = $('#edit-acc-classification-popover #acc-classification-edit-elements').find("option[value="+val+"]").attr('code');
    						$('#edit-lvl2-lvl1-code').val(code);
    					},
    				});

    				popover.find('input[name=lvl_1_id]').val(lvl_1_id);
    				popover.find('input[name=lvl_2_id]').val(lvl_2_id);
    				popover.find('input[name=lvl_3_id]').val(lvl_3_id);
    				popover.find('input[name=lvl_1_code]').val(lvl_1_code);
    				popover.find('input[name=lvl_2_code]').val(lvl_2_code);
    				popover.find('input[name=lvl_3_code]').val(lvl_3_code);
    				popover.find('input[name=lvl_1_name]').val(lvl_1_name);
    				popover.find('input[name=lvl_2_name]').val(lvl_2_name);
    				popover.find('input[name=lvl_3_name]').val(lvl_3_name);
                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    restriction.number();
                    $(popover).find('button.v-submit').unbind('click');
                    $(popover).find('button.v-submit').click(function(){
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
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    		initSingleSubmit();
    	});
    	$('#account-classification').on('click', 'button.delete', function(){
    		var data = acc_classification.row(this.closest('tr')).data();
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('acc-classification-delete');
    				return 'right';
    			},
    			content: function(){
    				return $('#delete-acc-classification-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.acc-classification-delete');
    				popover.find('input[name=acc-classification-delete-code]').val(data.lvl_2_code);
    				popover.find('input[name=acc-classification-delete-name]').val(data.lvl_2_name);
    				popover.find('input[name=acc-classification-delete-id]').val(data.lvl_2_id);
    				popover.find('input[name=acc-classification-delete-join-id]').val(data.coalvl12_id);
    				popover.find('input[name=delete-lvl2-lvl1-code]').val(data.lvl_1_code);
    				popover.find('#acc-classification-delete-elements').val(data.lvl_1_id);
    				popover.find('#acc-classification-delete-elements').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						direction: 'asc'
    					},
    					dropdownParent: 'body'
    				});

    				popover.find('input[name=lvl_1_id]').val(lvl_1_id);
    				popover.find('input[name=lvl_2_id]').val(lvl_2_id);
    				popover.find('input[name=lvl_3_id]').val(lvl_3_id);
    				popover.find('input[name=lvl_1_code]').val(lvl_1_code);
    				popover.find('input[name=lvl_2_code]').val(lvl_2_code);
    				popover.find('input[name=lvl_3_code]').val(lvl_3_code);
    				popover.find('input[name=lvl_1_name]').val(lvl_1_name);
    				popover.find('input[name=lvl_2_name]').val(lvl_2_name);
    				popover.find('input[name=lvl_3_name]').val(lvl_3_name);
    			},
    			container: 'body'
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    	});
    // LINE ITEMS POPOVER
    	$('#add-line-items').click(function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('line-items-add');
    				return 'right';
    			},
    			content: function(){
    				return $('#add-line-items-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.line-items-add');
    				popover.find('input[name=add-lvl3-lvl2-code]').val(lvl_2_code);
    				popover.find('input[name=line-items-add-classification]').val(lvl_2_id);
    				popover.find('#line-items-add-classification').val(lvl_2_id);
    				popover.find('#line-items-add-classification').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						direction: 'asc'
    					},
    					dropdownParent: 'body',
    					onChange: function(){
    						var val = $('#line-items-add-classfication').val();
    						var code = $('#add-line-items-popover #line-items-add-classfication').find("option[value="+val+"]").attr('code');
    						$('#add-lvl3-lvl2-code').val(code);
    					},
    				});

    				popover.find('input[name=lvl_1_id]').val(lvl_1_id);
    				popover.find('input[name=lvl_2_id]').val(lvl_2_id);
    				popover.find('input[name=lvl_3_id]').val(lvl_3_id);
    				popover.find('input[name=lvl_1_code]').val(lvl_1_code);
    				popover.find('input[name=lvl_2_code]').val(lvl_2_code);
    				popover.find('input[name=lvl_3_code]').val(lvl_3_code);
    				popover.find('input[name=lvl_1_name]').val(lvl_1_name);
    				popover.find('input[name=lvl_2_name]').val(lvl_2_name);
    				popover.find('input[name=lvl_3_name]').val(lvl_3_name);
                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    $(popover).find('button.v-submit').unbind('click');
                    $(popover).find('button.v-submit').click(function(){
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
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    		initSingleSubmit();
    	});
    	$('#line-items').on('click', 'button.view', function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		var data = line_items.row(this.closest('tr')).data();
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('line-items-view');
    				return 'right';
    			},
    			content: function(){
    				return $('#view-line-items-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.line-items-view');
    				popover.find('input[name=line-items-view-code]').val(data.lvl_3_code);
    				popover.find('input[name=line-items-view-name]').val(data.lvl_3_name);
    				popover.find('input[name=view-lvl3-lvl2-code]').val(data.lvl_2_code);
    				popover.find('#line-items-view-classfication').val(data.lvl_2_id);
    				popover.find('#line-items-view-classfication').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						direction: 'asc'
    					},
    					dropdownParent: 'body'
    				});
    			},
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    	});
    	$('#line-items').on('click', 'button.edit', function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		var data = line_items.row(this.closest('tr')).data();
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('line-items-edit');
    				return 'right';
    			},
    			content: function(){
    				return $('#edit-line-items-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.line-items-edit');
    				popover.find('input[name=line-items-edit-code]').val(data.lvl_3_code);
    				popover.find('input[name=line-items-edit-name]').val(data.lvl_3_name);
    				popover.find('input[name=line-items-edit-id]').val(data.lvl_3_id);
    				popover.find('input[name=line-items-edit-join-id]').val(data.coalvl23_id);
    				popover.find('input[name=line-items-edit-classification]').val(data.lvl_2_id);
    				popover.find('input[name=edit-lvl3-lvl2-code]').val(data.lvl_2_code);
    				popover.find('#line-items-edit-classification').val(lvl_2_id);
    				popover.find('#line-items-edit-classification').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						direction: 'asc'
    					},
    					dropdownParent: 'body',
    					onChange: function(){
    						var val = $('#line-items-edit-classification').val();
    						var code = $('#edit-line-items-popover #line-items-edit-classification').find("option[value="+val+"]").attr('code');
    						$('#edit-lvl3-lvl2-code').val(code);
    					},
    				});

    				popover.find('input[name=lvl_1_id]').val(lvl_1_id);
    				popover.find('input[name=lvl_2_id]').val(lvl_2_id);
    				popover.find('input[name=lvl_3_id]').val(lvl_3_id);
    				popover.find('input[name=lvl_1_code]').val(lvl_1_code);
    				popover.find('input[name=lvl_2_code]').val(lvl_2_code);
    				popover.find('input[name=lvl_3_code]').val(lvl_3_code);
    				popover.find('input[name=lvl_1_name]').val(lvl_1_name);
    				popover.find('input[name=lvl_2_name]').val(lvl_2_name);
    				popover.find('input[name=lvl_3_name]').val(lvl_3_name);
                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    restriction.number();
                    $(popover).find('button.v-submit').unbind('click');
                    $(popover).find('button.v-submit').click(function(){
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
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    		initSingleSubmit();
    	});
    	$('#line-items').on('click', 'button.delete', function(){
    		var data = line_items.row(this.closest('tr')).data();
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('line-items-delete');
    				return 'right';
    			},
    			content: function(){
    				return $('#delete-line-items-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.line-items-delete');
    				popover.find('input[name=line-items-delete-code]').val(data.lvl_3_code);
    				popover.find('input[name=line-items-delete-name]').val(data.lvl_3_name);
    				popover.find('input[name=line-items-delete-id]').val(data.lvl_3_id);
    				popover.find('input[name=line-items-delete-join-id]').val(data.coalvl23_id);
    				popover.find('input[name=delete-lvl3-lvl2-code]').val(data.lvl_2_code);
    				popover.find('#line-items-delete-classification').val(data.lvl_2_id);
    				popover.find('#line-items-delete-classification').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						direction: 'asc'
    					},
    					dropdownParent: 'body'
    				});

    				popover.find('input[name=lvl_1_id]').val(lvl_1_id);
    				popover.find('input[name=lvl_2_id]').val(lvl_2_id);
    				popover.find('input[name=lvl_3_id]').val(lvl_3_id);
    				popover.find('input[name=lvl_1_code]').val(lvl_1_code);
    				popover.find('input[name=lvl_2_code]').val(lvl_2_code);
    				popover.find('input[name=lvl_3_code]').val(lvl_3_code);
    				popover.find('input[name=lvl_1_name]').val(lvl_1_name);
    				popover.find('input[name=lvl_2_name]').val(lvl_2_name);
    				popover.find('input[name=lvl_3_name]').val(lvl_3_name);
    			},
    			container: 'body'
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    	});
    // Account Subclassification POPOVER
    	$('#add-acc-sub').click(function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('acc-sub-add');
    				return 'right';
    			},
    			content: function(){
    				return $('#add-acc-sub-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.acc-sub-add');
    				popover.find('input[name=add-lvl4-lvl3-code]').val(lvl_3_code);
    				popover.find('input[name=acc-sub-add-line-item]').val(lvl_3_id);
    				popover.find('#acc-sub-add-line-item').val(lvl_3_id);
    				popover.find('#acc-sub-add-line-item').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						direction: 'asc'
    					},
    					dropdownParent: 'body',
    					onChange: function(){
    						var val = $('#acc-sub-add-line-item').val();
    						var code = $('#add-acc-sub-popover #acc-sub-add-line-item').find("option[value="+val+"]").attr('code');
    						$('#add-lvl4-lvl3-code').val(code);
    					},
    				});

    				popover.find('input[name=lvl_1_id]').val(lvl_1_id);
    				popover.find('input[name=lvl_2_id]').val(lvl_2_id);
    				popover.find('input[name=lvl_3_id]').val(lvl_3_id);
    				popover.find('input[name=lvl_1_code]').val(lvl_1_code);
    				popover.find('input[name=lvl_2_code]').val(lvl_2_code);
    				popover.find('input[name=lvl_3_code]').val(lvl_3_code);
    				popover.find('input[name=lvl_1_name]').val(lvl_1_name);
    				popover.find('input[name=lvl_2_name]').val(lvl_2_name);
    				popover.find('input[name=lvl_3_name]').val(lvl_3_name);
                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    $(popover).find('button.v-submit').unbind('click');
                    $(popover).find('button.v-submit').click(function(){
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
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    		initSingleSubmit();
    	});
    	$('#account-subclassification').on('click', 'button.view', function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		var data = account_subclassification.row(this.closest('tr')).data();
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('acc-sub-view');
    				return 'right';
    			},
    			content: function(){
    				return $('#view-acc-sub-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.acc-sub-view');
    				popover.find('input[name=acc-sub-view-code]').val(data.lvl_4_code);
                    popover.find('input[name=acc-sub-view-name]').val(data.lvl_4_name);
    				popover.find('input[name=bir]').val(data.bir);
    				popover.find('input[name=view-lvl4-lvl3-code]').val(data.lvl_3_code);
    				popover.find('#acc-sub-view-line-item').val(data.lvl_3_id);
    				popover.find('#acc-sub-view-line-item').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						direction: 'asc'
    					},
    					dropdownParent: 'body'
    				});
    			},
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    	});
    	$('#account-subclassification').on('click', 'button.edit', function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		var data = account_subclassification.row(this.closest('tr')).data();
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('acc-sub-edit');
    				return 'right';
    			},
    			content: function(){
    				return $('#edit-acc-sub-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.acc-sub-edit');
    				popover.find('input[name=acc-sub-edit-code]').val(data.lvl_4_code);
                    popover.find('input[name=acc-sub-edit-name]').val(data.lvl_4_name);
    				popover.find('input[name=bir]').val(data.bir);
    				popover.find('input[name=acc-sub-edit-id]').val(data.lvl_4_id);
    				popover.find('input[name=acc-sub-edit-join-id]').val(data.coalvl34_id);
    				popover.find('input[name=acc-sub-edit-line-item]').val(data.lvl_3_id);
    				popover.find('input[name=edit-lvl4-lvl3-code]').val(data.lvl_3_code);
    				popover.find('input[name=acc-sub-edit-line-item-val]').val(lvl_3_id);
    				popover.find('input[name=edit-lvl4-lvl3-code]').val(lvl_3_code);
    				popover.find('#acc-sub-edit-line-item').val(lvl_3_id);
    				popover.find('#acc-sub-edit-line-item').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						direction: 'asc'
    					},
    					dropdownParent: 'body',
    					onChange: function(){
    						var val = $('#acc-sub-edit-line-item').val();
    						var code = $('#edit-acc-sub-popover #acc-sub-edit-line-item').find("option[value="+val+"]").attr('code');
    						$('#edit-lvl4-lvl3-code').val(code);
    					},
    				});

    				popover.find('input[name=lvl_1_id]').val(lvl_1_id);
    				popover.find('input[name=lvl_2_id]').val(lvl_2_id);
    				popover.find('input[name=lvl_3_id]').val(lvl_3_id);
    				popover.find('input[name=lvl_1_code]').val(lvl_1_code);
    				popover.find('input[name=lvl_2_code]').val(lvl_2_code);
    				popover.find('input[name=lvl_3_code]').val(lvl_3_code);
    				popover.find('input[name=lvl_1_name]').val(lvl_1_name);
    				popover.find('input[name=lvl_2_name]').val(lvl_2_name);
    				popover.find('input[name=lvl_3_name]').val(lvl_3_name);
                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    restriction.number();
                    $(popover).find('button.v-submit').unbind('click');
                    $(popover).find('button.v-submit').click(function(){
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
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    		initSingleSubmit();
    	});
    	$('#account-subclassification').on('click', 'button.delete', function(){
    		var data = account_subclassification.row(this.closest('tr')).data();
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('acc-sub-delete');
    				return 'right';
    			},
    			content: function(){
    				return $('#delete-acc-sub-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.acc-sub-delete');
    				popover.find('input[name=acc-sub-delete-code]').val(data.lvl_4_code);
                    popover.find('input[name=acc-sub-delete-name]').val(data.lvl_4_name);
    				popover.find('input[name=bir]').val(data.bir);
    				popover.find('input[name=acc-sub-delete-id]').val(data.lvl_4_id);
    				popover.find('input[name=acc-sub-delete-join-id]').val(data.coalvl34_id);
    				popover.find('input[name=delete-lvl4-lvl3-code]').val(lvl_3_code);
    				popover.find('#acc-sub-delete-line-item').val(data.lvl_3_id);
    				popover.find('#acc-sub-delete-line-item').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						direction: 'asc'
    					},
    					dropdownParent: 'body'
    				});
    				
    				popover.find('input[name=lvl_1_id]').val(lvl_1_id);
    				popover.find('input[name=lvl_2_id]').val(lvl_2_id);
    				popover.find('input[name=lvl_3_id]').val(lvl_3_id);
    				popover.find('input[name=lvl_1_code]').val(lvl_1_code);
    				popover.find('input[name=lvl_2_code]').val(lvl_2_code);
    				popover.find('input[name=lvl_3_code]').val(lvl_3_code);
    				popover.find('input[name=lvl_1_name]').val(lvl_1_name);
    				popover.find('input[name=lvl_2_name]').val(lvl_2_name);
    				popover.find('input[name=lvl_3_name]').val(lvl_3_name);
    			},
    			container: 'body'
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    	});
    // Level 5 POPOVER
    	$('#add-lvl-5').click(function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('lvl-5-add');
    				return 'right';
    			},
    			content: function(){
    				return $('#add-lvl-5-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.lvl-5-add');
    				popover.find('input[name=add-lvl5-lvl4-code]').val(lvl_4_code);
    				popover.find('input[name=lvl-5-add-acc-sub]').val(lvl_4_id);
    				popover.find('#lvl-5-add-acc-sub').val(lvl_4_id);
    				popover.find('#lvl-5-add-acc-sub').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						direction: 'asc'
    					},
    					dropdownParent: 'body',
    					onChange: function(){
    						var val =$('#lvl-5-add-acc-sub').val();
    						var code = $('#add-lvl-5-popover #lvl-5-add-acc-sub').find("option[value="+val+"]").attr('code');
    						$('#add-lvl5-lvl4-code').val(code);
    					},
    				});

    				popover.find('input[name=lvl_1_id]').val(lvl_1_id);
    				popover.find('input[name=lvl_2_id]').val(lvl_2_id);
    				popover.find('input[name=lvl_3_id]').val(lvl_3_id);
    				popover.find('input[name=lvl_4_id]').val(lvl_4_id);
    				popover.find('input[name=lvl_1_code]').val(lvl_1_code);
    				popover.find('input[name=lvl_2_code]').val(lvl_2_code);
    				popover.find('input[name=lvl_3_code]').val(lvl_3_code);
    				popover.find('input[name=lvl_4_code]').val(lvl_4_code);
    				popover.find('input[name=lvl_1_name]').val(lvl_1_name);
    				popover.find('input[name=lvl_2_name]').val(lvl_2_name);
    				popover.find('input[name=lvl_3_name]').val(lvl_3_name);
    				popover.find('input[name=lvl_4_name]').val(lvl_4_name);
                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    $(popover).find('button.v-submit').unbind('click');
                    $(popover).find('button.v-submit').click(function(){
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
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    		initSingleSubmit();
    	});
    	$('#lvl5-table').on('click', 'button.view', function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		var data = lvl_5.row(this.closest('tr')).data();
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('lvl-5-view');
    				return 'right';
    			},
    			content: function(){
    				return $('#view-lvl-5-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.lvl-5-view');
    				popover.find('input[name=lvl-5-view-code]').val(data.lvl_5_code);
    				popover.find('input[name=lvl-5-view-name]').val(data.lvl_5_name);
    				popover.find('input[name=view-lvl5-lvl4-code]').val(data.lvl_4_code);
    				popover.find('#lvl-5-view-acc-sub').val(data.lvl_4_id);
    				popover.find('#lvl-5-view-acc-sub').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						direction: 'asc'
    					},
    					dropdownParent: 'body'
    				});
    			},
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    	});
    	$('#lvl5-table').on('click', 'button.edit', function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		var data = lvl_5.row(this.closest('tr')).data();
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('lvl-5-edit');
    				return 'right';
    			},
    			content: function(){
    				return $('#edit-lvl-5-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.lvl-5-edit');
    				popover.find('input[name=lvl-5-edit-code]').val(data.lvl_5_code);
    				popover.find('input[name=lvl-5-edit-name]').val(data.lvl_5_name);
    				popover.find('input[name=lvl-5-edit-id]').val(data.lvl_5_id);
    				popover.find('input[name=lvl-5-edit-join-id]').val(data.coalvl45_id);
    				popover.find('input[name=lvl-5-edit-acc-sub]').val(data.lvl_4_id);
    				popover.find('input[name=edit-lvl5-lvl4-code]').val(data.lvl_4_code);
    				popover.find('#lvl-5-edit-acc-sub').val(lvl_4_id);
    				popover.find('#lvl-5-edit-acc-sub').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						direction: 'asc'
    					},
    					dropdownParent: null,
    					onChange: function(){
    						var val = $('#lvl-5-edit-acc-sub').val();
    						var code = $('#edit-lvl-5-popover #lvl-5-edit-acc-sub').find("option[value="+val+"]").attr('code');
    						$('#edit-lvl5-lvl4-code').val(code);
    					},
    				});

    				popover.find('input[name=lvl_1_id]').val(lvl_1_id);
    				popover.find('input[name=lvl_2_id]').val(lvl_2_id);
    				popover.find('input[name=lvl_3_id]').val(lvl_3_id);
    				popover.find('input[name=lvl_4_id]').val(lvl_4_id);
    				popover.find('input[name=lvl_1_code]').val(lvl_1_code);
    				popover.find('input[name=lvl_2_code]').val(lvl_2_code);
    				popover.find('input[name=lvl_3_code]').val(lvl_3_code);
    				popover.find('input[name=lvl_4_code]').val(lvl_4_code);
    				popover.find('input[name=lvl_1_name]').val(lvl_1_name);
    				popover.find('input[name=lvl_2_name]').val(lvl_2_name);
    				popover.find('input[name=lvl_3_name]').val(lvl_3_name);
    				popover.find('input[name=lvl_4_name]').val(lvl_4_name);
                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    restriction.number();
                    $(popover).find('button.v-submit').unbind('click');
                    $(popover).find('button.v-submit').click(function(){
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
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    		initSingleSubmit();
    	});
    	$('#lvl5-table').on('click', 'button.delete', function(){
    		var data = lvl_5.row(this.closest('tr')).data();
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('lvl-5-delete');
    				return 'right';
    			},
    			content: function(){
    				return $('#delete-lvl-5-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.lvl-5-delete');
    				popover.find('input[name=lvl-5-delete-code]').val(data.lvl_5_code);
    				popover.find('input[name=lvl-5-delete-name]').val(data.lvl_5_name);
    				popover.find('input[name=lvl-5-delete-id]').val(data.lvl_5_id);
    				popover.find('input[name=lvl-5-delete-join-id]').val(data.coalvl45_id);
    				popover.find('input[name=delete-lvl5-lvl4-code]').val(lvl_4_code);
    				popover.find('#lvl-5-delete-acc-sub').val(data.lvl_4_id);
    				popover.find('#lvl-5-delete-acc-sub').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						direction: 'asc'
    					},
    					dropdownParent: 'body'
    				});
    				
    				popover.find('input[name=lvl_1_id]').val(lvl_1_id);
    				popover.find('input[name=lvl_2_id]').val(lvl_2_id);
    				popover.find('input[name=lvl_3_id]').val(lvl_3_id);
    				popover.find('input[name=lvl_4_id]').val(lvl_4_id);
    				popover.find('input[name=lvl_1_code]').val(lvl_1_code);
    				popover.find('input[name=lvl_2_code]').val(lvl_2_code);
    				popover.find('input[name=lvl_3_code]').val(lvl_3_code);
    				popover.find('input[name=lvl_4_code]').val(lvl_4_code);
    				popover.find('input[name=lvl_1_name]').val(lvl_1_name);
    				popover.find('input[name=lvl_2_name]').val(lvl_2_name);
    				popover.find('input[name=lvl_3_name]').val(lvl_3_name);
    				popover.find('input[name=lvl_4_name]').val(lvl_4_name);
    			},
    			container: 'body'
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    	});
    // COA
    	$('#add-coa-temporary').click(function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('coa-add');
    				return 'right';
    			},
    			content: function(){
    				return $('#add-coa-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.coa-add');
    				var lvl5_name = '';
    				var lvl5_id = 0;

    				popover.find('input[name=add-name]').keyup(function(){
    					var value = $(this).val();
    					if(lvl5_id > 0){
    						if(value === lvl5_name){
    							popover.find('input[name=add-lvl-6-code]').val('0');
    						}else{	
    							$.get(window_location+'/company_settings/chart_of_accounts/coa_get_lvl6/'+lvl5_id, function(response){
    								var json_data = JSON.parse(response);
    								var code = json_data.length > 0 ? json_data[0].lvl_6_name === value ? parseFloat(json_data[0].lvl_6_code) : parseFloat(json_data[0].lvl_6_code) + 1 : 0;
    								popover.find('input[name=add-lvl-6-code]').val(code);

    								var lvl_1_code = popover.find('input[name=add-element-code]').val();
    								var lvl_2_code = popover.find('input[name=add-classification-code]').val();
    								var lvl_3_code = popover.find('input[name=add-line-item-code]').val();
    								var lvl_4_code = popover.find('input[name=add-subclassification-code]').val();
    								var lvl_5_code = popover.find('input[name=add-lvl-5-code]').val();
    								var lvl_6_code = popover.find('input[name=add-lvl-6-code]').val();
    								var final_code = lvl_1_code+''+lvl_2_code+''+lvl_3_code+''+lvl_4_code+''+lvl_5_code+''+lvl_6_code;
    								popover.find('input[name=add-code]').val(final_code);
    								
    							});
    						}
    					}else{
    						popover.find('input[name=add-code]').val('');
    						popover.find('input[name=add-lvl-6-code]').val('');
    					}
    					popover.find('input[name=add-name-display]').val(value);
    				});
    				var lvl5 = popover.find('#add-coa-lvl-5').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						sort: 'asc'
    					},
    					dropdownParent: null,
    					onChange: function(value){
    						var value = value ? value : 0;
    						var selectize = popover.find('#add-coa-lvl-5').selectize()[0].selectize;
    						var selected = selectize.options[value] ? selectize.options[value] : '';
    						var code = selected !== '' ? selected.code : '';
    						var text = selected !== '' ? selected.text : '';
    						var lvl_6_code = selected !== '' ? '0' : '';
    						popover.find('input[name=add-lvl-5-code]').val(code);
    						popover.find('input[name=add-lvl-6-code]').val(lvl_6_code);
    						popover.find('input[name=add-name]').val(text);
    						popover.find('input[name=add-name-display]').val(text);
    						lvl5_name = text;
    						lvl5_id = value;

    						var lvl_1_code = popover.find('input[name=add-element-code]').val();
    						var lvl_2_code = popover.find('input[name=add-classification-code]').val();
    						var lvl_3_code = popover.find('input[name=add-line-item-code]').val();
    						var lvl_4_code = popover.find('input[name=add-subclassification-code]').val();
    						var lvl_5_code = popover.find('input[name=add-lvl-5-code]').val();
    						var lvl_6_code = popover.find('input[name=add-lvl-6-code]').val();
    						var final_code = lvl_1_code+''+lvl_2_code+''+lvl_3_code+''+lvl_4_code+''+lvl_5_code+''+lvl_6_code;
    						popover.find('input[name=add-code]').val(final_code);
    					}
    				});
    				lvl5_select = lvl5[0].selectize;
    				var subclass = popover.find('#add-subclassification').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						sort: 'asc'
    					},
    					dropdownParent: null,
    					onChange: function(value){
    						var value = value ? value : 0;
    						var selectize = popover.find('#add-subclassification').selectize()[0].selectize;
    						var selected = selectize.options[value] ? selectize.options[value] : '';
    						var code = selected !== '' ? selected.code : '';
                            var bir = selected !== '' ? selected.bir : '';
    						popover.find('input[name=add-subclassification-code]').val(code);
                            popover.find('input[name=add-bir]').val(bir);
    						lvl5_select.clear();
    						lvl5_select.clearOptions();
    						$.get(window_location+'/company_settings/chart_of_accounts/coa_get_lvl5/'+value, function(response){
    							var json_data = JSON.parse(response);
    							var options = [];
    							$.each(json_data, function(index, data){
    								options.push({
    									text: data.lvl_5_name,
    									value: data.lvl_5_id,
    									code: data.lvl_5_code
    								});
    								lvl5_select.load(function(callback){
    									callback(options);
    								});
    							});
    						});
    					}
    				});
    				subclass_select = subclass[0].selectize;
    				var lineitem = popover.find('#add-line-item').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						sort: 'asc'
    					},
    					dropdownParent: null,
    					onChange: function(value){
    						var value = value ? value : 0;
    						var selectize = popover.find('#add-line-item').selectize()[0].selectize;
    						var selected = selectize.options[value] ? selectize.options[value] : '';
    						var code = selected !== '' ? selected.code : '';
    						popover.find('input[name=add-line-item-code]').val(code);
    						subclass_select.clear();
    						subclass_select.clearOptions();
    						$.get(window_location+'/company_settings/chart_of_accounts/coa_get_subclassification/'+value, function(response){
    							var json_data = JSON.parse(response);
    							var options = [];
    							$.each(json_data, function(index, data){
    								options.push({
    									text: data.lvl_4_name,
    									value: data.lvl_4_id,
    									code: data.lvl_4_code,
                                        bir: data.bir
    								});
    								subclass_select.load(function(callback){
    									callback(options);
    								});
    							});
    						});
    					}
    				});
    				lineitem_select = lineitem[0].selectize;
    				var classification = popover.find('#add-classification').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						sort: 'asc'
    					},
    					dropdownParent: null,
    					onChange: function(value){
    						var value = value ? value : 0;
    						var selectize = popover.find('#add-classification').selectize()[0].selectize;
    						var selected = selectize.options[value] ? selectize.options[value] : '';
    						var code = selected !== '' ? selected.code : '';
    						popover.find('input[name=add-classification-code]').val(code);
    						lineitem_select.clear();
    						lineitem_select.clearOptions();
    						$.get(window_location+'/company_settings/chart_of_accounts/coa_get_line_item/'+value, function(response){
    							var json_data = JSON.parse(response);
    							var options = [];
    							$.each(json_data, function(index, data){
    								options.push({
    									text: data.lvl_3_name,
    									value: data.lvl_3_id,
    									code: data.lvl_3_code
    								});
    								lineitem_select.load(function(callback){
    									callback(options);
    								});
    							});
    						});
    					}
    				});
    				classification_select = classification[0].selectize;
    				var element = popover.find('#add-element').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						sort: 'asc'
    					},
    					dropdownParent: null,
    					onChange: function(value){
    						var value = value ? value : 0;
    						var selectize = popover.find('#add-element').selectize()[0].selectize;
    						var selected = selectize.options[value] ? selectize.options[value] : '';
    						var code = selected !== '' ? selected.code : '';
    						popover.find('input[name=add-element-code]').val(code);
    						classification_select.clear();
    						classification_select.clearOptions();
    						$.get(window_location+'/company_settings/chart_of_accounts/coa_get_classification/'+value, function(response){
    							var json_data = JSON.parse(response);
    							var options = [];
    							$.each(json_data, function(index, data){
    								options.push({
    									text: data.lvl_2_name,
    									value: data.lvl_2_id,
    									code: data.lvl_2_code
    								});
    								classification_select.load(function(callback){
    									callback(options);
    								});
    							});
    						});
    					}
    				});
    				element_select = element[0].selectize;
    				element_select.clear();
    				element_select.clearOptions();
    				$.get(window_location+'/company_settings/chart_of_accounts/coa_get_elements', function(response){
    					var json_data = JSON.parse(response);
    					var options = [];
    					$.each(json_data, function(index, data){
    						options.push({
    							text: data.lvl_1_name,
    							value: data.lvl_1_id,
    							code: data.lvl_1_code
    						});
    					});
    					element_select.load(function(callback){
    						callback(options);
    					});
    				});

                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    restriction.select_required();
                    popover.find('button.v-submit').unbind('click');
                    popover.find('button.v-submit').click(function(){
                        var _this = $(this);
                        var validation = Object.create(v_validation);
                        var required_input = validation.required_input(popover);
                        var required_select = validation.required_select(popover);
                        if(!required_input && !required_select){
                            _this.closest('form').submit();
                            _this.attr('disabled', true);
                            _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
                        }
                    });
    			},
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    		initSingleSubmit();
    	});
    	$('#coa-table-temporary').on('click', '.view', function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		var data = coa.row($(this).closest('tr')).data();
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('coa-view');
    				return 'right';
    			},
    			content: function(){
    				return $('#view-coa-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.coa-view');
    				popover.find('input[name=view-element-code]').val(data.lvl_1_code);
    				popover.find('input[name=view-element]').val(data.lvl_1_name);
    				popover.find('input[name=view-classification-code]').val(data.lvl_2_code);
    				popover.find('input[name=view-classification]').val(data.lvl_2_name);
    				popover.find('input[name=view-line-item-code]').val(data.lvl_3_code);
    				popover.find('input[name=view-line-item]').val(data.lvl_3_name);
    				popover.find('input[name=view-subclassification-code]').val(data.lvl_4_code);
    				popover.find('input[name=view-subclassification]').val(data.lvl_4_name);
    				popover.find('input[name=view-lvl-5-code]').val(data.lvl_5_code);
    				popover.find('input[name=view-coa-lvl-5]').val(data.lvl_5_name);
    				popover.find('input[name=view-lvl-6-code]').val(data.lvl_6_code);
    				popover.find('input[name=view-name]').val(data.coa_name);
    				popover.find('input[name=view-code]').val(data.coa_code);
    				popover.find('input[name=view-name-display]').val(data.coa_name);
    				popover.find('input[name=view-bir]').val(data.lvl_3_bir);
    			},
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    		initSingleSubmit();
    	});
    	$('#coa-table-temporary').on('click', '.edit', function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		var data = coa.row($(this).closest('tr')).data();
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('coa-edit');
    				return 'right';
    			},
    			content: function(){
    				return $('#edit-coa-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.coa-edit');
    				var lvl5_name = '';
    				var lvl5_id = 0;

    				popover.find('input[name=o_lvl6_id]').val(data.lvl_6_id);

    				popover.find('input[name=edit-name]').keyup(function(){
    					var value = $(this).val();
    					if(lvl5_id > 0){
    						if(lvl5_id === data.lvl_5_id){
    							if(value === lvl5_name){
    								popover.find('input[name=edit-lvl-6-code]').val('0');
    							}else{	
    								$.get(window_location+'/company_settings/chart_of_accounts/coa_get_lvl6/'+lvl5_id, function(response){
    									var json_data = JSON.parse(response);
    									var code = json_data.length > 0 ? json_data[0].lvl_6_name === value ? parseFloat(json_data[0].lvl_6_code) : parseFloat(json_data[0].lvl_6_code) + 1 : 0;
    									popover.find('input[name=edit-lvl-6-code]').val(code);

    									var lvl_1_code = popover.find('input[name=edit-element-code]').val();
    									var lvl_2_code = popover.find('input[name=edit-classification-code]').val();
    									var lvl_3_code = popover.find('input[name=edit-line-item-code]').val();
    									var lvl_4_code = popover.find('input[name=edit-subclassification-code]').val();
    									var lvl_5_code = popover.find('input[name=edit-lvl-5-code]').val();
    									var lvl_6_code = popover.find('input[name=edit-lvl-6-code]').val();

    									var final_code = lvl_1_code+''+lvl_2_code+''+lvl_3_code+''+lvl_4_code+''+lvl_5_code+''+lvl_6_code;
    									popover.find('input[name=edit-code]').val(final_code);
    									
    								});
    							}
    						}else{
    							popover.find('input[name=edit-lvl-6-code]').val(data.lvl_6_code);
    						}
    					}else{
    						popover.find('input[name=edit-code]').val('');
    						popover.find('input[name=edit-lvl-6-code]').val('');
    					}
    					popover.find('input[name=edit-name-display]').val(value);
    				});
    				var lvl5 = $('#edit-coa-lvl-5').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						sort: 'asc'
    					},
    					dropdownParent: null,
    					onChange: function(value){
    						var value = value ? value : 0;
    						var selectize = $('#edit-coa-lvl-5').selectize()[0].selectize;
    						var selected = selectize.options[value] ? selectize.options[value] : '';
    						var code = selected !== '' ? selected.code : '';
    						var text = selected !== '' ? selected.text : '';
    						var lvl_6_code = selected !== '' ? '0' : '';
    						popover.find('input[name=edit-lvl-5-code]').val(code);
    						popover.find('input[name=edit-lvl-6-code]').val(lvl_6_code);
    						popover.find('input[name=edit-name]').val(text);
    						popover.find('input[name=edit-name-display]').val(text);
    						lvl5_name = text;
    						lvl5_id = value;

    						if(lvl5_id === data.lvl_5_id){
    							popover.find('input[name=edit-lvl-6-code]').val(data.lvl_6_code);
    							popover.find('input[name=edit-name]').val(data.coa_name);
    							popover.find('input[name=edit-name-display]').val(data.coa_name);
    						}

    						var lvl_1_code = popover.find('input[name=edit-element-code]').val();
    						var lvl_2_code = popover.find('input[name=edit-classification-code]').val();
    						var lvl_3_code = popover.find('input[name=edit-line-item-code]').val();
    						var lvl_4_code = popover.find('input[name=edit-subclassification-code]').val();
    						var lvl_5_code = popover.find('input[name=edit-lvl-5-code]').val();
    						var lvl_6_code = popover.find('input[name=edit-lvl-6-code]').val();

    						var final_code = lvl_1_code+''+lvl_2_code+''+lvl_3_code+''+lvl_4_code+''+lvl_5_code+''+lvl_6_code;
    						popover.find('input[name=edit-code]').val(final_code);
    					}
    				});
    				lvl5_select = lvl5[0].selectize;
    				var subclass = $('#edit-subclassification').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						sort: 'asc'
    					},
    					dropdownParent: null,
    					onChange: function(value){
    						var value = value ? value : 0;
    						var selectize = $('#edit-subclassification').selectize()[0].selectize;
    						var selected = selectize.options[value] ? selectize.options[value] : '';
    						var code = selected !== '' ? selected.code : '';
                            var bir = selected !== '' ? selected.bir : '';
    						popover.find('input[name=edit-subclassification-code]').val(code);
                            popover.find('input[name=edit-bir]').val(bir);
    						lvl5_select.clear();
    						lvl5_select.clearOptions();
    						$.get(window_location+'/company_settings/chart_of_accounts/coa_get_lvl5/'+value, function(response){
    							var json_data = JSON.parse(response);
    							var options = [];
    							$.each(json_data, function(index, data){
    								options.push({
    									text: data.lvl_5_name,
    									value: data.lvl_5_id,
    									code: data.lvl_5_code
    								});
    								lvl5_select.load(function(callback){
    									callback(options);
    								});
    							});
    							lvl5_select.setValue(data.lvl_5_id);
    						});
    					}
    				});
    				subclass_select = subclass[0].selectize;
    				var lineitem = $('#edit-line-item').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						sort: 'asc'
    					},
    					dropdownParent: null,
    					onChange: function(value){
    						var value = value ? value : 0;
    						var selectize = $('#edit-line-item').selectize()[0].selectize;
    						var selected = selectize.options[value] ? selectize.options[value] : '';
    						var code = selected !== '' ? selected.code : '';
    						popover.find('input[name=edit-line-item-code]').val(code);
    						subclass_select.clear();
    						subclass_select.clearOptions();
    						$.get(window_location+'/company_settings/chart_of_accounts/coa_get_subclassification/'+value, function(response){
    							var json_data = JSON.parse(response);
    							var options = [];
    							$.each(json_data, function(index, data){
    								options.push({
    									text: data.lvl_4_name,
    									value: data.lvl_4_id,
    									code: data.lvl_4_code,
                                        bir: data.bir
    								});
    								subclass_select.load(function(callback){
    									callback(options);
    								});
    							});
    							subclass_select.setValue(data.lvl_4_id);
    						});
    					}
    				});
    				lineitem_select = lineitem[0].selectize;
    				var classification = $('#edit-classification').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						sort: 'asc'
    					},
    					dropdownParent: null,
    					onChange: function(value){
    						var value = value ? value : 0;
    						var selectize = $('#edit-classification').selectize()[0].selectize;
    						var selected = selectize.options[value] ? selectize.options[value] : '';
    						var code = selected !== '' ? selected.code : '';
    						popover.find('input[name=edit-classification-code]').val(code);
    						lineitem_select.clear();
    						lineitem_select.clearOptions();
    						$.get(window_location+'/company_settings/chart_of_accounts/coa_get_line_item/'+value, function(response){
    							var json_data = JSON.parse(response);
    							var options = [];
    							$.each(json_data, function(index, data){
    								options.push({
    									text: data.lvl_3_name,
    									value: data.lvl_3_id,
    									code: data.lvl_3_code
    								});
    								lineitem_select.load(function(callback){
    									callback(options);
    								});
    							});
    							lineitem_select.setValue(data.lvl_3_id);
    						});
    					}
    				});
    				classification_select = classification[0].selectize;
    				var element = $('#edit-element').selectize({
    					create: false,
    					sortField: {
    						field: 'text',
    						sort: 'asc'
    					},
    					dropdownParent: null,
    					onChange: function(value){
    						var value = value ? value : 0;
    						var selectize = $('#edit-element').selectize()[0].selectize;
    						var selected = selectize.options[value] ? selectize.options[value] : '';
    						var code = selected !== '' ? selected.code : '';
    						popover.find('input[name=edit-element-code]').val(code);
    						classification_select.clear();
    						classification_select.clearOptions();
    						$.get(window_location+'/company_settings/chart_of_accounts/coa_get_classification/'+value, function(response){
    							var json_data = JSON.parse(response);
    							var options = [];
    							$.each(json_data, function(index, data){
    								options.push({
    									text: data.lvl_2_name,
    									value: data.lvl_2_id,
    									code: data.lvl_2_code
    								});
    								classification_select.load(function(callback){
    									callback(options);
    								});
    							});
    							classification_select.setValue(data.lvl_2_id);
    						});
    					}
    				});
    				element_select = element[0].selectize;
    				element_select.clear();
    				element_select.clearOptions();
    				$.get(window_location+'/company_settings/chart_of_accounts/coa_get_elements', function(response){
    					var json_data = JSON.parse(response);
    					var options = [];
    					$.each(json_data, function(index, data){
    						options.push({
    							text: data.lvl_1_name,
    							value: data.lvl_1_id,
    							code: data.lvl_1_code
    						});
    					});
    					element_select.load(function(callback){
    						callback(options);
    					});
    					element_select.setValue(data.lvl_1_id);
    				});

    				popover.find('input[name=edit-coa-lvl-6]').val(data.lvl_6_id);
    				popover.find('input[name=o_lvl5_id]').val(data.lvl_5_id);
    				popover.find('input[name=o_coa_name]').val(data.coa_name);
    				popover.find('input[name=edit-id]').val(data.coa_id);

                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    restriction.select_required();
                    popover.find('button.v-submit').unbind('click');
                    popover.find('button.v-submit').click(function(){
                        var _this = $(this);
                        var validation = Object.create(v_validation);
                        var required_input = validation.required_input(popover);
                        var required_select = validation.required_select(popover);
                        if(!required_input && !required_select){
                            _this.closest('form').submit();
                            _this.attr('disabled', true);
                            _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
                        }
                    });
    			},
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    		initSingleSubmit();
    	});
    	$('#coa-table-temporary').on('click', '.delete', function(){
    		$('body').on('hidden.bs.popover', function (e) {
    		    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
    		});
    		var data = coa.row($(this).closest('tr')).data();
    		$(this).popover({
    			animation: true,
    			html: true,
    			placement: function(context, src){
    				$(context).addClass('coa-delete');
    				return 'right';
    			},
    			content: function(){
    				return $('#delete-coa-popover').html();
    			},
    			callback: function(){
    				var popover = $('.popover.coa-delete');
    				popover.find('input[name=delete-element-code]').val(data.lvl_1_code);
    				popover.find('input[name=delete-element]').val(data.lvl_1_name);
    				popover.find('input[name=delete-classification-code]').val(data.lvl_2_code);
    				popover.find('input[name=delete-classification]').val(data.lvl_2_name);
    				popover.find('input[name=delete-line-item-code]').val(data.lvl_3_code);
    				popover.find('input[name=delete-line-item]').val(data.lvl_3_name);
    				popover.find('input[name=delete-subclassification-code]').val(data.lvl_4_code);
    				popover.find('input[name=delete-subclassification]').val(data.lvl_4_name);
    				popover.find('input[name=delete-lvl-5-code]').val(data.lvl_5_code);
    				popover.find('input[name=delete-coa-lvl-5]').val(data.lvl_5_name);
    				popover.find('input[name=delete-lvl-6-code]').val(data.lvl_6_code);
    				popover.find('input[name=delete-name]').val(data.coa_name);
    				popover.find('input[name=delete-code]').val(data.coa_code);
    				popover.find('input[name=delete-name-display]').val(data.coa_name);
    				popover.find('input[name=delete-bir]').val(data.lvl_3_bir);
    				popover.find('input[name=delete-id]').val(data.coa_id);
    				popover.find('input[name=o_lvl6_id]').val(data.lvl_6_id);
    			},
    			container: 'body'
    		}).on('show.bs.popover', function(){
    			$('.popover').not(this).popover('hide');
    			$('.box-body button').attr('disabled', true);
    		});
    		$(this).popover('toggle');
    		initRipple();
    		no_space();
    		initNumberValidation();
    		initSingleSubmit();
    	});
        $('#add-coa').click(function(){
            $('body').on('hidden.bs.popover', function (e) {
                $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
            });
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('coa-add');
                    return 'right';
                },
                content: function(){
                    return $('#add-coa-popover').html();
                },
                callback: function(){
                    var popover = $('.popover.coa-add');
                    var lvl4_name = '';
                    var lvl4_id = 0;

                    popover.find('input[name=add-name]').keyup(function(){
                        var value = $(this).val();
                        if(lvl4_id > 0){
                            if(value === lvl4_name){
                                popover.find('input[name=add-lvl-5-code]').val('0');
                            }else{  
                                $.get(window_location+'/company_settings/chart_of_accounts/coa_get_lvl5/'+lvl4_id, function(response){
                                    var json_data = JSON.parse(response);
                                    var code = json_data.length > 0 ? json_data[0].lvl_5_name === value ? parseFloat(json_data[0].lvl_5_code) : parseFloat(json_data[0].lvl_5_code) + 1 : 0;
                                    popover.find('input[name=add-lvl-5-code]').val(code);

                                    var lvl_1_code = popover.find('input[name=add-element-code]').val();
                                    var lvl_2_code = popover.find('input[name=add-classification-code]').val();
                                    var lvl_3_code = popover.find('input[name=add-line-item-code]').val();
                                    var lvl_4_code = popover.find('input[name=add-subclassification-code]').val();
                                    var lvl_5_code = popover.find('input[name=add-lvl-5-code]').val();
                                    var final_code = lvl_1_code+''+lvl_2_code+''+lvl_3_code+''+lvl_4_code+''+lvl_5_code;
                                    popover.find('input[name=add-code]').val(final_code);
                                    
                                });
                            }
                        }else{
                            popover.find('input[name=add-code]').val('');
                            popover.find('input[name=add-lvl-6-code]').val('');
                        }
                        popover.find('input[name=add-name-display]').val(value);
                    });
                    var subclass = popover.find('#add-subclassification').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        },
                        dropdownParent: null,
                        onChange: function(value){
                            var value = value ? value : 0;
                            var selectize = popover.find('#add-subclassification').selectize()[0].selectize;
                            var selected = selectize.options[value] ? selectize.options[value] : '';
                            var code = selected !== '' ? selected.code : '';
                            var text = selected !== '' ? selected.text : '';
                            var lvl_5_code = selected !== '' ? '0' : '';
                            var bir = selected !== '' ? selected.bir : '';
                            popover.find('input[name=add-bir]').val(bir);
                            popover.find('input[name=add-subclassification-code]').val(code);
                            popover.find('input[name=add-lvl-5-code]').val(lvl_5_code);
                            popover.find('input[name=add-name]').val(text);
                            popover.find('input[name=add-name-display]').val(text);
                            lvl4_name = text;
                            lvl4_id = value;

                            var lvl_1_code = popover.find('input[name=add-element-code]').val();
                            var lvl_2_code = popover.find('input[name=add-classification-code]').val();
                            var lvl_3_code = popover.find('input[name=add-line-item-code]').val();
                            var lvl_4_code = popover.find('input[name=add-subclassification-code]').val();
                            var lvl_5_code = popover.find('input[name=add-lvl-5-code]').val();
                            var final_code = lvl_1_code+''+lvl_2_code+''+lvl_3_code+''+lvl_4_code+''+lvl_5_code;
                            popover.find('input[name=add-code]').val(final_code);

                            $('#add-subclassification').parent().parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
                            $('#add-subclassification').parent().parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
                            popover.find('input[name=add-name]').removeClass('v-invalid');
                        }
                    });
                    subclass_select = subclass[0].selectize;
                    var lineitem = popover.find('#add-line-item').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        },
                        dropdownParent: null,
                        onChange: function(value){
                            var value = value ? value : 0;
                            var selectize = popover.find('#add-line-item').selectize()[0].selectize;
                            var selected = selectize.options[value] ? selectize.options[value] : '';
                            var code = selected !== '' ? selected.code : '';
                            popover.find('input[name=add-line-item-code]').val(code);
                            subclass_select.clear();
                            subclass_select.clearOptions();
                            $.get(window_location+'/company_settings/chart_of_accounts/coa_get_subclassification/'+value, function(response){
                                var json_data = JSON.parse(response);
                                var options = [];
                                $.each(json_data, function(index, data){
                                    options.push({
                                        text: data.lvl_4_name,
                                        value: data.lvl_4_id,
                                        code: data.lvl_4_code,
                                        bir: data.bir
                                    });
                                    subclass_select.load(function(callback){
                                        callback(options);
                                    });
                                });
                            });

                            $('#add-line-item').parent().parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
                            $('#add-line-item').parent().parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
                        }
                    });
                    lineitem_select = lineitem[0].selectize;
                    var classification = popover.find('#add-classification').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        },
                        dropdownParent: null,
                        onChange: function(value){
                            var value = value ? value : 0;
                            var selectize = popover.find('#add-classification').selectize()[0].selectize;
                            var selected = selectize.options[value] ? selectize.options[value] : '';
                            var code = selected !== '' ? selected.code : '';
                            popover.find('input[name=add-classification-code]').val(code);
                            lineitem_select.clear();
                            lineitem_select.clearOptions();
                            $.get(window_location+'/company_settings/chart_of_accounts/coa_get_line_item/'+value, function(response){
                                var json_data = JSON.parse(response);
                                var options = [];
                                $.each(json_data, function(index, data){
                                    options.push({
                                        text: data.lvl_3_name,
                                        value: data.lvl_3_id,
                                        code: data.lvl_3_code
                                    });
                                    lineitem_select.load(function(callback){
                                        callback(options);
                                    });
                                });
                            });

                            $('#add-classification').parent().parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
                            $('#add-classification').parent().parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
                        }
                    });
                    classification_select = classification[0].selectize;
                    var element = popover.find('#add-element').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        },
                        dropdownParent: null,
                        onChange: function(value){
                            var value = value ? value : 0;
                            var selectize = popover.find('#add-element').selectize()[0].selectize;
                            var selected = selectize.options[value] ? selectize.options[value] : '';
                            var code = selected !== '' ? selected.code : '';
                            popover.find('input[name=add-element-code]').val(code);
                            classification_select.clear();
                            classification_select.clearOptions();
                            $.get(window_location+'/company_settings/chart_of_accounts/coa_get_classification/'+value, function(response){
                                var json_data = JSON.parse(response);
                                var options = [];
                                $.each(json_data, function(index, data){
                                    options.push({
                                        text: data.lvl_2_name,
                                        value: data.lvl_2_id,
                                        code: data.lvl_2_code
                                    });
                                    classification_select.load(function(callback){
                                        callback(options);
                                    });
                                });
                            });

                            $('#add-element').parent().parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
                            $('#add-element').parent().parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
                        }
                    });
                    element_select = element[0].selectize;
                    element_select.clear();
                    element_select.clearOptions();
                    $.get(window_location+'/company_settings/chart_of_accounts/coa_get_elements', function(response){
                        var json_data = JSON.parse(response);
                        var options = [];
                        $.each(json_data, function(index, data){
                            options.push({
                                text: data.lvl_1_name,
                                value: data.lvl_1_id,
                                code: data.lvl_1_code
                            });
                        });
                        element_select.load(function(callback){
                            callback(options);
                        });
                    });

                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    restriction.select_required();
                    popover.find('button.v-submit').unbind('click');
                    popover.find('button.v-submit').click(function(){
                        var _this = $(this);
                        var validation = Object.create(v_validation);
                        var required_input = validation.required_input(popover);
                        var required_select = validation.required_select(popover);
                        if(!required_input && !required_select){
                            _this.closest('form').submit();
                            _this.attr('disabled', true);
                            _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
                        }
                    });
                },
                container: 'body'
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.box-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
            initRipple();
            no_space();
            initNumberValidation();
            initSingleSubmit();
        });
        $('#coa-table').on('click', '.view', function(){
            $('body').on('hidden.bs.popover', function (e) {
                    $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
                });
                var data = coa.row($(this).closest('tr')).data();
                $(this).popover({
                    animation: true,
                    html: true,
                    placement: function(context, src){
                        $(context).addClass('coa-view');
                        return 'right';
                    },
                    content: function(){
                        return $('#view-coa-popover').html();
                    },
                    callback: function(){
                        var popover = $('.popover.coa-view');
                        popover.find('input[name=view-element-code]').val(data.lvl_1_code);
                        popover.find('input[name=view-element]').val(data.lvl_1_name);
                        popover.find('input[name=view-classification-code]').val(data.lvl_2_code);
                        popover.find('input[name=view-classification]').val(data.lvl_2_name);
                        popover.find('input[name=view-line-item-code]').val(data.lvl_3_code);
                        popover.find('input[name=view-line-item]').val(data.lvl_3_name);
                        popover.find('input[name=view-subclassification-code]').val(data.lvl_4_code);
                        popover.find('input[name=view-subclassification]').val(data.lvl_4_name);
                        popover.find('input[name=view-lvl-5-code]').val(data.lvl_5_code);
                        popover.find('input[name=view-coa-lvl-5]').val(data.lvl_5_name);
                        popover.find('input[name=view-lvl-6-code]').val(data.lvl_6_code);
                        popover.find('input[name=view-name]').val(data.coa_name);
                        popover.find('input[name=view-code]').val(data.coa_code);
                        popover.find('input[name=view-name-display]').val(data.coa_name);
                        popover.find('input[name=view-bir]').val(data.bir);
                    },
                    container: 'body'
                }).on('show.bs.popover', function(){
                    $('.popover').not(this).popover('hide');
                    $('.box-body button').attr('disabled', true);
                });
                $(this).popover('toggle');
                initRipple();
                no_space();
                initNumberValidation();
                initSingleSubmit();
        });
        $('#coa-table').on('click', '.edit', function(){
            $('body').on('hidden.bs.popover', function (e) {
                $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
            });
            var data = coa.row($(this).closest('tr')).data();
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('coa-edit');
                    return 'right';
                },
                content: function(){
                    return $('#edit-coa-popover').html();
                },
                callback: function(){
                    var popover = $('.popover.coa-edit');
                    var lvl4_name = '';
                    var lvl4_id = 0;

                    popover.find('input[name=o_lvl5_id]').val(data.lvl_5_id);

                    popover.find('input[name=edit-name]').keyup(function(){
                        var value = $(this).val();
                        if(lvl4_id > 0){
                            if(value === lvl4_name){
                                popover.find('input[name=edit-lvl-5-code]').val('0');
                            }else{  
                                $.get(window_location+'/company_settings/chart_of_accounts/coa_get_lvl5/'+lvl4_id, function(response){
                                    var json_data = JSON.parse(response);
                                    var code = json_data.length > 0 ? json_data[0].lvl_5_name === value ? parseFloat(json_data[0].lvl_5_code) : parseFloat(json_data[0].lvl_5_code) + 1 : 0;
                                    popover.find('input[name=edit-lvl-5-code]').val(code);

                                    var lvl_1_code = popover.find('input[name=edit-element-code]').val();
                                    var lvl_2_code = popover.find('input[name=edit-classification-code]').val();
                                    var lvl_3_code = popover.find('input[name=edit-line-item-code]').val();
                                    var lvl_4_code = popover.find('input[name=edit-subclassification-code]').val();
                                    var lvl_5_code = popover.find('input[name=edit-lvl-5-code]').val();

                                    var final_code = lvl_1_code+''+lvl_2_code+''+lvl_3_code+''+lvl_4_code+''+lvl_5_code;
                                    popover.find('input[name=edit-code]').val(final_code);
                                    
                                });
                            }
                        }else{
                            popover.find('input[name=edit-code]').val('');
                            popover.find('input[name=edit-lvl-5-code]').val('');
                        }
                        popover.find('input[name=edit-name-display]').val(value);
                    });
                    var subclass = popover.find('#edit-subclassification').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        },
                        dropdownParent: null,
                        onChange: function(value){
                            var value = value ? value : 0;
                            var selectize = popover.find('#edit-subclassification').selectize()[0].selectize;
                            var selected = selectize.options[value] ? selectize.options[value] : '';
                            var code = selected !== '' ? selected.code : '';
                            var text = selected !== '' ? selected.text : '';
                            var lvl_5_code = selected !== '' ? '0' : '';
                            var bir = selected !== '' ? selected.bir : '';
                            popover.find('input[name=edit-bir]').val(bir);
                            popover.find('input[name=edit-subclassification-code]').val(code);
                            popover.find('input[name=edit-lvl-5-code]').val(lvl_5_code);
                            popover.find('input[name=edit-name]').val(text);
                            popover.find('input[name=edit-name-display]').val(text);
                            lvl4_name = text;
                            lvl4_id = value;

                            if(lvl4_id === data.lvl_4_id){
                                popover.find('input[name=edit-lvl-5-code]').val(data.lvl_5_code);
                                popover.find('input[name=edit-name]').val(data.coa_name);
                                popover.find('input[name=edit-name-display]').val(data.coa_name);
                            }

                            var lvl_1_code = popover.find('input[name=edit-element-code]').val();
                            var lvl_2_code = popover.find('input[name=edit-classification-code]').val();
                            var lvl_3_code = popover.find('input[name=edit-line-item-code]').val();
                            var lvl_4_code = popover.find('input[name=edit-subclassification-code]').val();
                            var lvl_5_code = popover.find('input[name=edit-lvl-5-code]').val();

                            var final_code = lvl_1_code+''+lvl_2_code+''+lvl_3_code+''+lvl_4_code+''+lvl_5_code;
                            popover.find('input[name=edit-code]').val(final_code);

                            $('#edit-subclassification').parent().parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
                            $('#edit-subclassification').parent().parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
                            popover.find('input[name=edit-name]').removeClass('v-invalid');
                        }
                    });
                    subclass_select = subclass[0].selectize;
                    var lineitem = popover.find('#edit-line-item').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        },
                        dropdownParent: null,
                        onChange: function(value){
                            var value = value ? value : 0;
                            var selectize = popover.find('#edit-line-item').selectize()[0].selectize;
                            var selected = selectize.options[value] ? selectize.options[value] : '';
                            var code = selected !== '' ? selected.code : '';
                            popover.find('input[name=edit-line-item-code]').val(code);
                            subclass_select.clear();
                            subclass_select.clearOptions();
                            $.get(window_location+'/company_settings/chart_of_accounts/coa_get_subclassification/'+value, function(response){
                                var json_data = JSON.parse(response);
                                var options = [];
                                $.each(json_data, function(index, data){
                                    options.push({
                                        text: data.lvl_4_name,
                                        value: data.lvl_4_id,
                                        code: data.lvl_4_code,
                                        bir: data.bir
                                    });
                                    subclass_select.load(function(callback){
                                        callback(options);
                                    });
                                });
                                subclass_select.setValue(data.lvl_4_id);
                            });

                            $('#edit-line-item').parent().parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
                            $('#edit-line-item').parent().parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
                        }
                    });
                    lineitem_select = lineitem[0].selectize;
                    var classification = popover.find('#edit-classification').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        },
                        dropdownParent: null,
                        onChange: function(value){
                            var value = value ? value : 0;
                            var selectize = popover.find('#edit-classification').selectize()[0].selectize;
                            var selected = selectize.options[value] ? selectize.options[value] : '';
                            var code = selected !== '' ? selected.code : '';
                            popover.find('input[name=edit-classification-code]').val(code);
                            lineitem_select.clear();
                            lineitem_select.clearOptions();
                            $.get(window_location+'/company_settings/chart_of_accounts/coa_get_line_item/'+value, function(response){
                                var json_data = JSON.parse(response);
                                var options = [];
                                $.each(json_data, function(index, data){
                                    options.push({
                                        text: data.lvl_3_name,
                                        value: data.lvl_3_id,
                                        code: data.lvl_3_code
                                    });
                                    lineitem_select.load(function(callback){
                                        callback(options);
                                    });
                                });
                                lineitem_select.setValue(data.lvl_3_id);
                            });

                            $('#edit-classification').parent().parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
                            $('#edit-classification').parent().parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
                        }
                    });
                    classification_select = classification[0].selectize;
                    var element = popover.find('#edit-element').selectize({
                        create: false,
                        sortField: {
                            field: 'text',
                            sort: 'asc'
                        },
                        dropdownParent: null,
                        onChange: function(value){
                            var value = value ? value : 0;
                            var selectize = popover.find('#edit-element').selectize()[0].selectize;
                            var selected = selectize.options[value] ? selectize.options[value] : '';
                            var code = selected !== '' ? selected.code : '';
                            popover.find('input[name=edit-element-code]').val(code);
                            classification_select.clear();
                            classification_select.clearOptions();
                            $.get(window_location+'/company_settings/chart_of_accounts/coa_get_classification/'+value, function(response){
                                var json_data = JSON.parse(response);
                                var options = [];
                                $.each(json_data, function(index, data){
                                    options.push({
                                        text: data.lvl_2_name,
                                        value: data.lvl_2_id,
                                        code: data.lvl_2_code
                                    });
                                    classification_select.load(function(callback){
                                        callback(options);
                                    });
                                });
                                classification_select.setValue(data.lvl_2_id);
                            });

                            $('#edit-element').parent().parent().parent().parent().find('.selectize-control').removeClass('v-invalid');
                            $('#edit-element').parent().parent().parent().parent().find('.selectize-input').removeClass('v-invalid');
                        }
                    });
                    element_select = element[0].selectize;
                    element_select.clear();
                    element_select.clearOptions();
                    $.get(window_location+'/company_settings/chart_of_accounts/coa_get_elements', function(response){
                        var json_data = JSON.parse(response);
                        var options = [];
                        $.each(json_data, function(index, data){
                            options.push({
                                text: data.lvl_1_name,
                                value: data.lvl_1_id,
                                code: data.lvl_1_code
                            });
                        });
                        element_select.load(function(callback){
                            callback(options);
                        });
                        element_select.setValue(data.lvl_1_id);
                    });

                    popover.find('input[name=edit-coa-lvl-5]').val(data.lvl_5_id);
                    popover.find('input[name=o_lvl4_id]').val(data.lvl_4_id);
                    popover.find('input[name=o_coa_name]').val(data.coa_name);
                    popover.find('input[name=edit-id]').val(data.coa_id);

                    var restriction = Object.create(v_restriction);
                    restriction.required();
                    restriction.no_space();
                    restriction.select_required();
                    popover.find('button.v-submit').unbind('click');
                    popover.find('button.v-submit').click(function(){
                        var _this = $(this);
                        var validation = Object.create(v_validation);
                        var required_input = validation.required_input(popover);
                        var required_select = validation.required_select(popover);
                        if(!required_input && !required_select){
                            _this.closest('form').submit();
                            _this.attr('disabled', true);
                            _this.html("<i class='fa fa-circle-o-notch fa-spin'></i> &nbsp; Loading");
                        }
                    });
                },
                container: 'body'
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.box-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
            initRipple();
            no_space();
            initNumberValidation();
            initSingleSubmit();
        });
        $('#coa-table').on('click', '.delete', function(){
            $('body').on('hidden.bs.popover', function (e) {
                $(e.target).data("bs.popover").inState = { click: false, hover: false, focus: false }
            });
            var data = coa.row($(this).closest('tr')).data();
            $(this).popover({
                animation: true,
                html: true,
                placement: function(context, src){
                    $(context).addClass('coa-delete');
                    return 'right';
                },
                content: function(){
                    return $('#delete-coa-popover').html();
                },
                callback: function(){
                    var popover = $('.popover.coa-delete');
                    popover.find('input[name=delete-element-code]').val(data.lvl_1_code);
                    popover.find('input[name=delete-element]').val(data.lvl_1_name);
                    popover.find('input[name=delete-classification-code]').val(data.lvl_2_code);
                    popover.find('input[name=delete-classification]').val(data.lvl_2_name);
                    popover.find('input[name=delete-line-item-code]').val(data.lvl_3_code);
                    popover.find('input[name=delete-line-item]').val(data.lvl_3_name);
                    popover.find('input[name=delete-subclassification-code]').val(data.lvl_4_code);
                    popover.find('input[name=delete-subclassification]').val(data.lvl_4_name);
                    popover.find('input[name=delete-lvl-5-code]').val(data.lvl_5_code);
                    popover.find('input[name=delete-coa-lvl-5]').val(data.lvl_5_name);
                    popover.find('input[name=delete-lvl-6-code]').val(data.lvl_6_code);
                    popover.find('input[name=delete-name]').val(data.coa_name);
                    popover.find('input[name=delete-code]').val(data.coa_code);
                    popover.find('input[name=delete-name-display]').val(data.coa_name);
                    popover.find('input[name=delete-bir]').val(data.bir);
                    popover.find('input[name=delete-id]').val(data.coa_id);
                    popover.find('input[name=o_lvl5_id]').val(data.lvl_5_id);
                },
                container: 'body'
            }).on('show.bs.popover', function(){
                $('.popover').not(this).popover('hide');
                $('.box-body button').attr('disabled', true);
            });
            $(this).popover('toggle');
            initRipple();
            no_space();
            initNumberValidation();
            initSingleSubmit();
        });
    // CLOSE BTN
    	$('body').on('click', '.close-popover', function(){
            $('.popover').popover('hide');
            $('.box-body button').removeAttr('disabled');
        });

        $('body').on('click', '.disable_lvl_1', function(){
        	let id = acc_elements.row($(this).closest('tr')).data().lvl_1_id;
        	if($(this).is(':checked')){
        		$.get(window_location+'/company_settings/chart_of_accounts/enable_lvl_1', {id: id}, function(){
        			acc_elements.ajax.reload(function(){}, false);
    	    		acc_classification.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_2/0').load(function(json){});
    	    		line_items.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_3/0').load(function(json){});
    	    		account_subclassification.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_4/0').load(function(json){});
    	    		lvl_5.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_5/0').load(function(json){});
    	    		coa.ajax.reload(function(){}, false);
        		});
        	}
        	if(!$(this).is(':checked')){
        		$.get(window_location+'/company_settings/chart_of_accounts/disable_lvl_1', {id: id}, function(){
        			acc_elements.ajax.reload(function(){}, false);
    	    		acc_classification.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_2/0').load(function(json){});
    	    		line_items.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_3/0').load(function(json){});
    	    		account_subclassification.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_4/0').load(function(json){});
    	    		lvl_5.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_5/0').load(function(json){});
    	    		coa.ajax.reload(function(){}, false);
        		});
        	}
        	$(document).ajaxComplete(function(){
        		lvl_1_code = 0;
    			lvl_2_code = 0;
    			lvl_3_code = 0;
    			lvl_4_code = 0;
    			lvl_1_id = 0;
    			lvl_2_id = 0;
    			lvl_3_id = 0;
    			lvl_4_id = 0;
    			lvl_1_name = '';
    			lvl_2_name = '';
    			lvl_3_name = '';
    			lvl_4_name = '';
    			init_breadcrumb();
    			$(document).unbind('ajaxComplete');
        	});
        });
        $('body').on('click', '.disable_lvl_2', function(){
        	let id = acc_classification.row($(this).closest('tr')).data().lvl_2_id;
        	if($(this).is(':checked')){
        		$.get(window_location+'/company_settings/chart_of_accounts/enable_lvl_2', {id: id}, function(){
        			acc_classification.ajax.reload(function(){}, false);
    	    		line_items.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_3/0').load(function(json){});
    	    		account_subclassification.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_4/0').load(function(json){});
    	    		lvl_5.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_5/0').load(function(json){});
    	    		coa.ajax.reload(function(){}, false);
        		});
        		
        	}
        	if(!$(this).is(':checked')){
        		$.get(window_location+'/company_settings/chart_of_accounts/disable_lvl_2', {id: id}, function(){
        			acc_classification.ajax.reload(function(){}, false);
    	    		line_items.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_3/0').load(function(json){});
    	    		account_subclassification.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_4/0').load(function(json){});
    	    		lvl_5.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_5/0').load(function(json){});
    	    		coa.ajax.reload(function(){}, false);
        		});
        	}
        	$(document).ajaxComplete(function(){
    			lvl_2_code = 0;
    			lvl_3_code = 0;
    			lvl_4_code = 0;
    			lvl_2_id = 0;
    			lvl_3_id = 0;
    			lvl_4_id = 0;
    			lvl_2_name = '';
    			lvl_3_name = '';
    			lvl_4_name = '';
    			init_breadcrumb();
    			$(document).unbind('ajaxComplete');
        	});
        });
        $('body').on('click', '.disable_lvl_3', function(){
        	let id = line_items.row($(this).closest('tr')).data().lvl_3_id;
        	if($(this).is(':checked')){
        		$.get(window_location+'/company_settings/chart_of_accounts/enable_lvl_3', {id: id}, function(){
        			line_items.ajax.reload(function(){}, false);
    	    		account_subclassification.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_4/0').load(function(json){});
    	    		lvl_5.ajax.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_5/0').load(function(json){});
    	    		coa.ajax.reload(function(){}, false);
        		});
        		
        	}
        	if(!$(this).is(':checked')){
        		$.get(window_location+'/company_settings/chart_of_accounts/disable_lvl_3', {id: id}, function(){
        			line_items.ajax.reload(function(){}, false);
    	    		account_subclassification.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_4/0').load(function(json){});
    	    		lvl_5.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_5/0').load(function(json){});
    	    		coa.ajax.reload(function(){}, false);
        		});
        	}
        	$(document).ajaxComplete(function(){
    			lvl_3_code = 0;
    			lvl_4_code = 0;
    			lvl_3_id = 0;
    			lvl_4_id = 0;
    			lvl_3_name = '';
    			lvl_4_name = '';
    			init_breadcrumb();
    			$(document).unbind('ajaxComplete');
        	});
        });
        $('body').on('click', '.disable_lvl_4', function(){
        	let id = account_subclassification.row($(this).closest('tr')).data().lvl_4_id;
        	if($(this).is(':checked')){
        		$.get(window_location+'/company_settings/chart_of_accounts/enable_lvl_4', {id: id}, function(){
        			account_subclassification.ajax.reload(function(){}, false);
    	    		lvl_5.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_5/0').load(function(json){});
    	    		coa.ajax.reload(function(){}, false);
        		});
        		
        	}
        	if(!$(this).is(':checked')){
        		$.get(window_location+'/company_settings/chart_of_accounts/disable_lvl_4', {id: id}, function(){
        			account_subclassification.ajax.reload(function(){}, false);
    	    		lvl_5.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_5/0').load(function(json){});
    	    		coa.ajax.reload(function(){}, false);
        		});
        	}
        	$(document).ajaxComplete(function(){
    			lvl_4_code = 0;
    			lvl_4_id = 0;
    			lvl_4_name = '';
    			init_breadcrumb();
    			$(document).unbind('ajaxComplete');
        	});
        });
        $('body').on('click', '.disable_lvl_5', function(){
        	let id = lvl_5.row($(this).closest('tr')).data().lvl_5_id;
        	if($(this).is(':checked')){
        		$.get(window_location+'/company_settings/chart_of_accounts/enable_lvl_5', {id: id}, function(){
        			lvl_5.ajax.reload(function(){}, false);
    	    		coa.ajax.reload(function(){}, false);
        		});
        		
        	}
        	if(!$(this).is(':checked')){
        		$.get(window_location+'/company_settings/chart_of_accounts/disable_lvl_5', {id: id}, function(){
        			lvl_5.ajax.reload(function(){}, false);
    	    		coa.ajax.reload(function(){}, false);
        		});
        	}
        });

        coa_seq.currentPhaseStarted = function(id, sequence){
            if(lvl_1_id === 0 || isNaN(lvl_1_id)){
                $('#lvl-2-alert').css('display', 'block');      
                $('#lvl-3-alert').css('display', 'block');      
                $('#lvl-4-alert').css('display', 'block');      
                $('#lvl-5-alert').css('display', 'block');
                $('#add-acc-classification').attr('disabled', true);
                $('#add-line-items').attr('disabled', true);
                $('#add-acc-sub').attr('disabled', true);
                $('#add-lvl-5').attr('disabled', true);
            }else{
                $('#lvl-2-alert').css('display', 'none');       
                $('#lvl-3-alert').css('display', 'block');      
                $('#lvl-4-alert').css('display', 'block');      
                $('#lvl-5-alert').css('display', 'block');
                $('#add-acc-classification').removeAttr('disabled');
                $('#add-line-items').attr('disabled', true);
                $('#add-acc-sub').attr('disabled', true);
                $('#add-lvl-5').attr('disabled', true);
            }
            if(lvl_2_id === 0 || isNaN(lvl_2_id)){
                $('#lvl-3-alert').css('display', 'block');      
                $('#lvl-4-alert').css('display', 'block');      
                $('#lvl-5-alert').css('display', 'block');
                $('#add-line-items').attr('disabled', true);
                $('#add-acc-sub').attr('disabled', true);
                $('#add-lvl-5').attr('disabled', true);
            }else{
                $('#lvl-3-alert').css('display', 'none');       
                $('#lvl-4-alert').css('display', 'block');      
                $('#lvl-5-alert').css('display', 'block');
                $('#add-line-items').removeAttr('disabled');
                $('#add-acc-sub').attr('disabled', true);
                $('#add-lvl-5').attr('disabled', true);
            }
            if(lvl_3_id === 0 || isNaN(lvl_3_id)){
                $('#lvl-4-alert').css('display', 'block');      
                $('#lvl-5-alert').css('display', 'block');
                $('#add-acc-sub').attr('disabled', true);
                $('#add-lvl-5').attr('disabled', true);
            }else{  
                $('#lvl-4-alert').css('display', 'none');       
                $('#lvl-5-alert').css('display', 'block');
                $('#add-acc-sub').removeAttr('disabled');
                $('#add-lvl-5').attr('disabled', true);
            }
            if(lvl_4_id === 0 || isNaN(lvl_4_id)){
                $('#lvl-5-alert').css('display', 'block');
                $('#add-lvl-5').attr('disabled', true);
            }else{
                $('#lvl-5-alert').css('display', 'none');
                $('#add-lvl-5').removeAttr('disabled');
            }
            if(!$.active){
                $('#lvl-2-plate').css('opacity', '1');
                $('#lvl-3-plate').css('opacity', '1');
                $('#lvl-4-plate').css('opacity', '1');
                $('#lvl-5-plate').css('opacity', '1');
            }else{
                $('#lvl-2-plate').css('opacity', '0');
                $('#lvl-3-plate').css('opacity', '0');
                $('#lvl-4-plate').css('opacity', '0');
                $('#lvl-5-plate').css('opacity', '0');
            }
            $(document).ajaxComplete(function(){
                $('#lvl-2-plate').css('opacity', '1');
                $('#lvl-3-plate').css('opacity', '1');
                $('#lvl-4-plate').css('opacity', '1');
                $('#lvl-5-plate').css('opacity', '1');
                $(document).unbind('ajaxComplete');
            });

            acc_classification.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_2/'+lvl_1_id).load(function(){});
            line_items.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_3/'+lvl_2_id).load(function(){});
            account_subclassification.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_4/'+lvl_3_id).load(function(){});
            lvl_5.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_5/'+lvl_4_id).load(function(){});
        }

        var init = function(){
            if(lvl_1_id === 0 || isNaN(lvl_1_id)){
                $('#lvl-2-alert').css('display', 'block');      
                $('#lvl-3-alert').css('display', 'block');      
                $('#lvl-4-alert').css('display', 'block');      
                $('#lvl-5-alert').css('display', 'block');
                $('#add-acc-classification').attr('disabled', true);
                $('#add-line-items').attr('disabled', true);
                $('#add-acc-sub').attr('disabled', true);
                $('#add-lvl-5').attr('disabled', true);
            }else{
                $('#lvl-2-alert').css('display', 'none');       
                $('#lvl-3-alert').css('display', 'block');      
                $('#lvl-4-alert').css('display', 'block');      
                $('#lvl-5-alert').css('display', 'block');
                $('#add-acc-classification').removeAttr('disabled');
                $('#add-line-items').attr('disabled', true);
                $('#add-acc-sub').attr('disabled', true);
                $('#add-lvl-5').attr('disabled', true);
            }
            if(lvl_2_id === 0 || isNaN(lvl_2_id)){
                $('#lvl-3-alert').css('display', 'block');      
                $('#lvl-4-alert').css('display', 'block');      
                $('#lvl-5-alert').css('display', 'block');
                $('#add-line-items').attr('disabled', true);
                $('#add-acc-sub').attr('disabled', true);
                $('#add-lvl-5').attr('disabled', true);
            }else{
                $('#lvl-3-alert').css('display', 'none');       
                $('#lvl-4-alert').css('display', 'block');      
                $('#lvl-5-alert').css('display', 'block');
                $('#add-line-items').removeAttr('disabled');
                $('#add-acc-sub').attr('disabled', true);
                $('#add-lvl-5').attr('disabled', true);
            }
            if(lvl_3_id === 0 || isNaN(lvl_3_id)){
                $('#lvl-4-alert').css('display', 'block');      
                $('#lvl-5-alert').css('display', 'block');
                $('#add-acc-sub').attr('disabled', true);
                $('#add-lvl-5').attr('disabled', true);
            }else{  
                $('#lvl-4-alert').css('display', 'none');       
                $('#lvl-5-alert').css('display', 'block');
                $('#add-acc-sub').removeAttr('disabled');
                $('#add-lvl-5').attr('disabled', true);
            }
            if(lvl_4_id === 0 || isNaN(lvl_4_id)){
                $('#lvl-5-alert').css('display', 'block');
                $('#add-lvl-5').attr('disabled', true);
            }else{
                $('#lvl-5-alert').css('display', 'none');
                $('#add-lvl-5').removeAttr('disabled');
            }
            if(!$.active){
                $('#lvl-2-plate').css('opacity', '1');
                $('#lvl-3-plate').css('opacity', '1');
                $('#lvl-4-plate').css('opacity', '1');
                $('#lvl-5-plate').css('opacity', '1');
            }else{
                $('#lvl-2-plate').css('opacity', '0');
                $('#lvl-3-plate').css('opacity', '0');
                $('#lvl-4-plate').css('opacity', '0');
                $('#lvl-5-plate').css('opacity', '0');
            }
            $(document).ajaxComplete(function(){
                $('#lvl-2-plate').css('opacity', '1');
                $('#lvl-3-plate').css('opacity', '1');
                $('#lvl-4-plate').css('opacity', '1');
                $('#lvl-5-plate').css('opacity', '1');
                $(document).unbind('ajaxComplete');
            });

            acc_classification.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_2/'+lvl_1_id).load(function(){});
            line_items.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_3/'+lvl_2_id).load(function(){});
            account_subclassification.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_4/'+lvl_3_id).load(function(){});
            lvl_5.ajax.url(window_location+'/company_settings/chart_of_accounts/reload_lvl_5/'+lvl_4_id).load(function(){});
        }
        init();

    });
</script>