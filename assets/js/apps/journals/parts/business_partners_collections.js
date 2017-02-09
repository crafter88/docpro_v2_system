$(document).ready(function(){
	var journal_type = $('input#journal_type').val();
	if(journal_type === 'collections'){
		var bp_summary = '/journals/collections/bp/get';
		var bp_trans = '/journals/collections/bp_transaction/get?bp_id=';
	}
	
	var bp_summary_table = $('#bp-table').DataTable({
							ajax: window_location+bp_summary,
							columns: [
										{'data': 'bpc_class'},
										{'data': 'co_bp_code'},
										{'data': 'bp_name'},
										{'data': 'co_bp_address'},
										{'data': 'co_bp_tin'}

									],
							scrollX: true,
							order: [[1, 'asc']],
							columnDefs: [{targets: '1', width: '100px'}],
							oLanguage: {
							  	sSearch: "<i class='fa fa-search'></i> Search",
							  	sLengthMenu: "Show _MENU_", 
							}
	});
	var bp_transaction_details_table = $('#transaction-details-table').DataTable({
							ajax: window_location+bp_trans+'0',
							columns: [
										{'data': 'co_trans_id'},
										{
											mData: function(rowData, settings, fullData){
												return new Date(rowData.co_trans_date).toString('MMM d, yyyy');
											}
											
										},
										{'data': 'co_trans_doc_name'},
										{'data': 'co_journ_trans_count'},
										{'data': 'co_trans_doc_no'},
										{
											mData: function(rowData, settings, fullData){
												return new Date(rowData.co_trans_doc_date).toString('MMM d, yyyy');
											}
										},
										{'data': 'bp_name'},
										{'data': 'co_bp_particulars'},
										{'data': 'co_trans_doc_pay_type'},
										{'data': 'co_trans_doc_amount_gross'},
										{'data': 'co_trans_doc_amount_netamount'},
									],
							scrollX: true,
							order: [[0, 'asc']],
							oLanguage: {
							  	sSearch: "<i class='fa fa-search'></i> Search",
							  	sLengthMenu: "Show _MENU_", 
							},
	});
	$('.side-body .nav-tabs li:nth-child(2)').click(function(){
		bp_summary_table.ajax.reload();
	});

	$('#bp-table_wrapper tbody').on('click', 'tr', function(){
		var row_data = bp_summary_table.row(this).data();
		bp_transaction_details_table.ajax.url(window_location+bp_trans+row_data.co_bp_id).load();
		$(this).closest('table').find('tr').css('background-color', '#FFF');
		$(this).closest('table').find('tr').css('color', 'rgba(0,0,0,.87)');
		$(this).css('background-color', 'rgb(133, 150, 214)');
		$(this).css('color', '#FFF');
		$('#bp-transaction-details.collapsed-box .box-tools').find('button').trigger('click');
	});

	$('#transaction-details-table_wrapper tbody').on('click', 'tr', function(){
		var row_data = bp_transaction_details_table.row(this).data();

		let t_prod_serv_qty = 0;
		let t_prod_serv_unit = 0;
		let t_prod_serv_unit_price = 0;
		let t_prod_serv_gross = 0;

		let t_vat_rate = 0;
		let t_vat_amount = 0;
		let t_vat_net = 0;
		let t_vat_gross =0;

		let t_discount_rate = 0;
		let t_discount_deduction = 0;

		let t_ewt_rate = 0;
		let t_ewt_tax_base = 0;
		let t_ewt_tax_withheld = 0;

		let t_fwt_rate = 0;
		let t_fwt_tax_base = 0;
		let t_fwt_tax_withheld = 0;

		let t_doc_ref_gross = 0;
		let t_doc_ref_net_amount = 0;

		let t_bank_amount = 0;

		$('#bp-trans-prod-serv').html('');
		if(row_data === undefined || row_data.prod_data.length === 0 & row_data.serv_data.length === 0){
			$('#bp-trans-prod-serv').append("<tr><td colspan='6' style='padding: 8px !important; text-align: center;'>No data available in the table</td></tr>");
		}else{
			$.each(row_data.prod_data, function(index, data){
				$('#bp-trans-prod-serv').append("<tr>"+
													"<td><input class='form-control' type='text' value='"+data.co_p_code+"' readonly></td>"+
														"<td><input class='form-control' type='text' value='"+data.co_p_description+"'  readonly></td>"+
														"<td><input class='form-control' type='text' value='"+data.co_trans_prod_qty+"'  readonly></td>"+
														"<td><input class='form-control' type='text' value='"+data.co_trans_prod_unit+"'  readonly></td>"+
														"<td><input class='form-control' type='text' value='"+data.co_trans_prod_unitprice+"'  readonly></td>"+
														"<td><input class='form-control' type='text' value='"+data.co_trans_prod_gross+"'  readonly></td>"+
													"</tr>");
					t_prod_serv_qty += (data.co_trans_prod_qty.length > 0) ? parseFloat(data.co_trans_prod_qty) : 0;
					t_prod_serv_unit += (data.co_trans_prod_unit.length > 0) ? parseFloat(data.co_trans_prod_unit) : 0;
					t_prod_serv_unit_price += (data.co_trans_prod_unitprice.length > 0) ? parseFloat(data.co_trans_prod_unitprice) : 0;
					t_prod_serv_gross += (data.co_trans_prod_gross.length > 0) ? parseFloat(data.co_trans_prod_gross) : 0;
			});
			$.each(row_data.serv_data, function(index, data){
				$('#summary-prod-serv').append("<tr>"+
													"<td><input class='form-control' type='text' value='"+data.co_s_code+"' readonly></td>"+
														"<td><input class='form-control' type='text' value='"+data.co_s_description+"'  readonly></td>"+
														"<td><input class='form-control' type='text' value='"+data.co_trans_serv_qty+"'  readonly></td>"+
														"<td><input class='form-control' type='text' value='"+data.co_trans_serv_unit+"'  readonly></td>"+
														"<td><input class='form-control' type='text' value='"+data.co_trans_serv_unitprice+"'  readonly></td>"+
														"<td><input class='form-control' type='text' value='"+data.co_trans_serv_gross+"'  readonly></td>"+
													"</tr>");
					t_prod_serv_qty += (data.co_trans_serv_qty.length > 0) ? parseFloat(data.co_trans_serv_qty) : 0;
					t_prod_serv_unit += (data.co_trans_serv_unit.length > 0) ? parseFloat(data.co_trans_serv_unit) : 0;
					t_prod_serv_unit_price += (data.co_trans_serv_unitprice.length > 0) ? parseFloat(data.co_trans_serv_unitprice) : 0;
					t_prod_serv_gross += (data.co_trans_serv_gross.length > 0) ? parseFloat(data.co_trans_serv_gross) : 0;
			});
		}
		
		
		$('#bp-trans-vat').html('');
		if(row_data === undefined || row_data.vat_data.length === 0){
			$('#bp-trans-vat').append("<tr><td colspan='6' style='padding: 8px !important; text-align: center;'>No data available in the table</td></tr>");
		}else{
			$.each(row_data.vat_data, function(index, data){
				$('#bp-trans-vat').append("<tr>"+
								"<td><input class='form-control' type='text' value='"+data.t_code+"' readonly></td>"+
								"<td><input class='form-control' type='text' value='"+data.co_trans_vat_nature+"' readonly></td>"+
								"<td><input class='form-control' type='text' value='"+data.t_rate+"' readonly></td>"+
								"<td><input class='form-control' type='text' value='"+data.co_trans_vat_amount+"' readonly></td>"+
								"<td><input class='form-control' type='text' value='"+data.co_trans_vat_net_amount+"' readonly></td>"+
								"<td><input class='form-control' type='text' value='"+data.co_trans_vat_gross+"' readonly></td>"+
							"</tr>");
					t_vat_rate += (data.t_rate.length > 0) ? parseFloat(data.t_rate) : 0;
					t_vat_amount += (data.co_trans_vat_amount.length > 0) ? parseFloat(data.co_trans_vat_amount) : 0;
					t_vat_net += (data.co_trans_vat_net_amount.length > 0) ? parseFloat(data.co_trans_vat_net_amount) : 0;
					t_vat_gross += (data.co_trans_vat_gross.length > 0) ? parseFloat(data.co_trans_vat_gross) : 0;
			});
		}
		
		$('#bp-trans-discount').html('');
		if(row_data === undefined ||  row_data.discounts_data.length === 0){
			$('#bp-trans-discount').append("<tr><td colspan='5' style='padding: 8px !important; text-align: center;'>No data available in the table</td></tr>");
		}else{
			$.each(row_data.discounts_data, function(index, data){
				$('#bp-trans-discount').append("<tr>"+
												"<td><input class='form-control' type='text' value='"+data.co_d_code+"' readonly></td>"+
												"<td><input class='form-control' type='text' value='"+data.co_trans_disc_nature+"' readonly></td>"+
												"<td><input class='form-control' type='text' value='"+data.co_d_rate+"' readonly></td>"+
												"<td><input class='form-control' type='text' value='"+data.co_trans_disc_deduction+"' readonly></td>"+
												"<td><input class='form-control' type='text' value='"+data.co_trans_disc_scid+"' readonly></td>"+
											"</tr>");
					t_discount_rate += (data.co_d_rate.length > 0) ? parseFloat(data.co_d_rate) : 0;
					t_discount_deduction += (data.co_trans_disc_deduction.length > 0) ? parseFloat(data.co_trans_disc_deduction) : 0;
			});
		}
		
		$('#bp-trans-ewt').html('');
		if(row_data === undefined || row_data.ewt_data.length === 0){
			$('#bp-trans-ewt').append("<tr><td colspan='5' style='padding: 8px !important; text-align: center;'>No data available in the table</td></tr>");
		}else{
			$.each(row_data.ewt_data, function(index, data){
				$('#bp-trans-ewt').append("<tr>"+
											"<td><input class='form-control' type='text' value='"+data.t_code+"' readonly></td>"+
											"<td><input class='form-control' type='text' value='"+data.co_trans_ewt_nature+"' readonly></td>"+
											"<td><input class='form-control' type='text' value='"+data.t_rate+"' readonly></td>"+
											"<td><input class='form-control' type='text' value='"+data.t_base+"' readonly></td>"+
											"<td><input class='form-control' type='text' value='"+data.co_trans_ewt_taxwithheld+"' readonly></td>"+
										"</tr>");
					t_ewt_rate += (data.t_rate.length > 0) ? parseFloat(data.t_rate) : 0;
					t_ewt_tax_base += (data.t_base.length > 0) ? parseFloat(data.t_base) : 0;
					t_ewt_tax_withheld += (data.co_trans_ewt_taxwithheld.length > 0) ? parseFloat(data.co_trans_ewt_taxwithheld) : 0;
			});
		}
		
		$('#bp-trans-fwt').html('');
		if(row_data === undefined || row_data.fwt_data.length === 0){
			$('#bp-trans-fwt').append("<tr><td colspan='5' style='padding: 8px !important; text-align: center;'>No data available in the table</td></tr>");
		}else{
			$.each(row_data.fwt_data, function(index, data){
				$('#bp-trans-fwt').append("<tr>"+
											"<td><input class='form-control' type='text' value='"+data.t_code+"' readonly></td>"+
											"<td><input class='form-control' type='text' value='"+data.co_trans_fwt_nature+"' readonly></td>"+
											"<td><input class='form-control' type='text' value='"+data.t_rate+"' readonly></td>"+
											"<td><input class='form-control' type='text' value='"+data.t_base+"' readonly></td>"+
											"<td><input class='form-control' type='text' value='"+data.co_trans_fwt_taxwithheld+"' readonly></td>"+
										"</tr>");
					t_fwt_rate += (data.t_rate.length > 0) ? parseFloat(data.t_rate) : 0;
					t_fwt_tax_base += (data.t_base.length > 0) ? parseFloat(data.t_base) : 0;
					t_fwt_tax_withheld += (data.co_trans_fwt_taxwithheld.length > 0) ? parseFloat(data.co_trans_fwt_taxwithheld) : 0;
			});
		}
		
		$('#bp-trans-doc-ref').html('');
		if(row_data === undefined || row_data.doc_reference_data.length === 0){
			$('#bp-trans-doc-ref').append("<tr><td colspan='5' style='padding: 8px !important; text-align: center;'>No data available in the table</td></tr>");
		}else{
			$.each(row_data.doc_reference_data, function(index, data){
				$('#bp-trans-doc-ref').append("<tr>"+
												"<td><input class='form-control' type='text' value='"+data.d_code+"' readonly></td>"+
												"<td><input class='form-control' type='text' value='"+data.co_trans_doc_ref_no+"' readonly></td>"+
												"<td><input class='form-control' type='text' value='"+data.co_trans_doc_docdate+"' readonly></td>"+
												"<td><input class='form-control' type='text' value='"+data.co_trans_doc_gross+"' readonly></td>"+
												"<td><input class='form-control' type='text' value='"+data.co_trans_doc_netamount+"' readonly></td>"+
											"</tr>");
				t_doc_ref_gross = data.co_trans_doc_gross;
				t_doc_ref_net_amount = data.co_trans_doc_netamount;
			});
		}
		
		$('#bp-trans-bank').html('');
		if(row_data === undefined || row_data.bank_details_data.length === 0){
			$('#bp-trans-bank').append("<tr><td colspan='6' style='padding: 8px !important; text-align: center;'>No data available in the table</td></tr>");
		}else{
			$.each(row_data.bank_details_data, function(index, data){
				$('#bp-trans-bank').append("<tr>"+
												"<td><input class='form-control' type='text' value='"+data.b_code+"' readonly></td>"+
												"<td><input class='form-control' type='text' value='"+data.b_shortname+"' readonly></td>"+
												"<td><input class='form-control' type='text' value='"+data.co_b_no+"' readonly></td>"+
												"<td><input class='form-control' type='text' value='"+data.co_trans_bank_det_doc+"' readonly></td>"+
												"<td><input class='form-control' type='text' value='"+data.co_trans_bank_det_amount+"' readonly></td>"+
												"<td><input class='form-control' type='text' value='"+data.co_trans_bank_det_date+"' readonly></td>"+
											"</tr>");
					t_bank_amount += parseFloat(data.co_trans_bank_det_amount);
			});
		}
		
		$('#bp-trans-other').html('');
		if(row_data === undefined || row_data.others_data.length === 0){
			$('#bp-trans-other').append("<tr><td colspan='4' style='padding: 8px !important; text-align: center;'>No data available in the table</td></tr>");
		}else{
			$.each(row_data.others_data, function(index, data){
				$('#bp-trans-other').append("<tr>"+
												"<td><input class='form-control' type='text' value='"+data.p_fname+' '+data.p_mname+' '+data.p_lname+"' readonly></td>"+
												"<td><input class='form-control' type='text' value='"+data.co_trans_verifiedby+"' readonly></td>"+
												"<td><input class='form-control' type='text' value='"+data.co_trans_approvedby+"' readonly></td>"+
												"<td><input class='form-control' type='text' value='"+data.co_trans_receivedby+"' readonly></td>"+
											"</tr>");
			});
		}

		$('#bp-journal-entries').find('.journal-entry').html('');
		if(row_data === undefined || row_data.je_data.length === 0){
			$('#bp-journal-entries').find('.journal-entry').append(`<tr>
													<td colspan='10' style='padding: 8px !important; text-align: center;'>No data available in the table</td>
												</tr>`);
		}else{
			$.each(row_data.je_data, function(index, data){
				$('#bp-journal-entries').find('.journal-entry').append(`<tr>
													<td><input type='' class='form-control' value='${data.co_trans_je_no}' readonly></td>
													<td><input type='' class='form-control' value='${data.co_trans_je_trans_code}' readonly></td>
													<td><input type='' class='form-control' value='${data.co_trans_je_seq_no}' readonly></td>
													<td><input type='' class='form-control' value='${data.co_trans_je_acc_code}' readonly></td>
													<td><input type='' class='form-control' value='${data.co_trans_je_acc_name}' readonly></td>
													<td><input type='' class='form-control' value='${data.co_trans_je_debit_credit}' readonly></td>
													<td><input type='' class='form-control' value='${data.co_trans_je_debit_amount}' readonly></td>
													<td><input type='' class='form-control' value='${data.co_trans_je_credit_amount}' readonly></td>
													<td><input type='' class='form-control' value='${data.co_pcc_name}' readonly></td>
													<td><input type='' class='form-control' value='${data.co_de_name}' readonly></td>
												</tr>`);
			});
		}

		let bp_document_details = $('#bp-document-details');
		bp_document_details.find('input[name=t_prod_serv_qty]').val(t_prod_serv_qty);
		bp_document_details.find('input[name=t_prod_serv_unit]').val(t_prod_serv_unit);
		bp_document_details.find('input[name=t_prod_serv_unit_price]').val(t_prod_serv_unit_price);
		bp_document_details.find('input[name=t_prod_serv_gross]').val(t_prod_serv_gross);

		bp_document_details.find('input[name=t_vat_rate]').val(t_vat_rate);
		bp_document_details.find('input[name=t_vat_amount]').val(t_vat_amount);
		bp_document_details.find('input[name=t_vat_net]').val(t_vat_net);
		bp_document_details.find('input[name=t_vat_gross]').val(t_vat_gross);

		bp_document_details.find('input[name=t_discount_rate]').val(t_discount_rate);
		bp_document_details.find('input[name=t_discount_deduction]').val(t_discount_deduction);

		bp_document_details.find('input[name=t_ewt_rate]').val(t_ewt_rate);
		bp_document_details.find('input[name=t_ewt_tax_base]').val(t_ewt_tax_base);
		bp_document_details.find('input[name=t_ewt_tax_withheld]').val(t_ewt_tax_withheld);

		bp_document_details.find('input[name=t_fwt_rate]').val(t_fwt_rate);
		bp_document_details.find('input[name=t_fwt_tax_base]').val(t_fwt_tax_base);
		bp_document_details.find('input[name=t_fwt_tax_withheld]').val(t_fwt_tax_withheld);

		bp_document_details.find('input[name=t_doc_ref_gross]').val(t_doc_ref_gross);
		bp_document_details.find('input[name=t_doc_ref_net_amount]').val(t_doc_ref_net_amount);

		bp_document_details.find('input[name=t_bank_amount]').val(t_bank_amount);

		let bp_doc = $('#bp-document');
		bp_doc.find('input[name=transaction_id]').val(row_data ? row_data.co_trans_id : '');
		bp_doc.find('input[name=transaction_date]').val(row_data ? new Date(row_data.co_trans_date).toString('MMM d, yyyy') : '');
		bp_doc.find('input[name=journal_trans_id]').val(row_data ? row_data.co_journ_trans_id : '');
		bp_doc.find('input[name=company_name]').val(row_data ? row_data.ch_name : '');
		bp_doc.find('input[name=document_name]').val(row_data ? row_data.co_trans_doc_name : '');
		bp_doc.find('input[name=company_address]').val(row_data ? row_data.ch_cb_address : '');
		bp_doc.find('input[name=document_number]').val(row_data ? row_data.co_trans_doc_no : '');
		bp_doc.find('input[name=company_tin]').val(row_data ? row_data.ch_cb_tin : '');
		bp_doc.find('input[name=document_date]').val(row_data ? new Date(row_data.co_trans_doc_date).toString('MMM d, yyyy') : '');
		bp_doc.find('input[name=bp_name]').val(row_data ? row_data.bp_name : '');
		bp_doc.find('input[name=payment_type]').val(row_data ? row_data.co_trans_doc_pay_type : '');
		bp_doc.find('input[name=bp_address]').val(row_data ? row_data.co_bp_address : '');
		bp_doc.find('input[name=terms]').val(row_data ? row_data.co_trans_doc_pay_terms : '');
		bp_doc.find('input[name=tin]').val(row_data ? row_data.co_bp_tin : '');
		bp_doc.find('input[name=due_date]').val(row_data ? new Date(row_data.co_trans_doc_pay_duedate).toString('MMMM d, yyyy') : '');
		bp_doc.find('input[name=bp_type]').val(row_data ? row_data.bpt_type : '');
		bp_doc.find('input[name=particulars]').val(row_data ? row_data.co_bp_particulars : '');
		bp_doc.find('input[name=payment_mode]').val(row_data ? row_data.co_mop_name : '');
		bp_doc.find('input[name=payment_amount]').val(row_data ? row_data.co_trans_doc_pay_amountpaid : '');
		bp_doc.find('input[name=check_number]').val(row_data ? row_data.co_trans_doc_pay_checknumber : '');
		bp_doc.find('input[name=check_date]').val(row_data ? new Date(row_data.co_trans_date).toString('MMM d, yyyy') : '');
		bp_doc.find('input[name=check_payee]').val(row_data ? row_data.cb_name : '');
		bp_doc.find('input[name=bank]').val(row_data ? row_data.b_name : '');
		bp_doc.find('input[name=account_number]').val(row_data ? row_data.co_b_no : '');

		bp_doc.find('.product_services').html('');
		if(row_data === undefined || row_data.prod_data.length === 0 & row_data.serv_data.length === 0){
			$('#summary-prod-serv').append(`<tr>
												<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
											</tr>`);
		}else{
			$.each(row_data.prod_data, function(index, data){
				bp_doc.find('.product_services').append(`<tr>
													<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
													<td>${data.co_p_description}</td>
													<td>${data.co_trans_prod_qty}</td>
													<td>${data.co_trans_prod_unit}</td>
													<td>${data.co_trans_prod_unitprice}</td>
													<td>${data.co_trans_prod_gross}</td>
													<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
												</tr>`);
			});
			$.each(row_data.serv_data, function(index, data){
				bp_doc.find('.product_services').append(`<tr>
													<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
													<td>${data.co_s_description}</td>
													<td>${data.co_trans_serv_qty}</td>
													<td>${data.co_trans_serv_unit}</td>
													<td>${data.co_trans_serv_unitprice}</td>
													<td>${data.co_trans_serv_gross}</td>
													<td style='width: 200px; background-color: #BBBBBB; border: none;'></td>
												</tr>`);
			});
		}

		$(this).closest('table').find('tr').css('background-color', '#FFF');
		$(this).closest('table').find('tr').css('color', 'rgba(0,0,0,.87)');
		$(this).css('background-color', 'rgb(133, 150, 214)');
		$(this).css('color', '#FFF');
		$('#bp-document-details.collapsed-box .box-tools').find('button').trigger('click');
		$('#bp-journal-entries.collapsed-box .box-tools').find('button').trigger('click');
		$('#bp-document.collapsed-box .box-tools').find('button').trigger('click');
	});
});
