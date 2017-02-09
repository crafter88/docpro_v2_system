<script type="text/javascript">
	var data = [
			{ID: '1', Journal: 'Sales Journal', DocYear: '2012', DocMonth: 'January', DocDate: '30', AccCategCode_1: '122', AccCategName_1: 'Asset Non-current Property', DebitAmmount_1: 'P 300.00', CreditAmmount_1: 'P 300.00', account_code: '2315', account_name: 'Sales Account'},
			{ID: '2', Journal: 'Receipts Journal', DocYear: '2012', DocMonth: 'January', DocDate: '03', AccCategCode_1: '1212', AccCategName_1: 'Asset Non-current Property Vehicle', DebitAmmount_1: 'P 2000.00', CreditAmmount_1: 'P 2000.00', account_code: '6573', account_name: 'Receipts Account'},
			{ID: '3', Journal: 'Sales Journal', DocYear: '2014', DocMonth: 'March', DocDate: '20', AccCategCode_1: '1213', AccCategName_1: 'Asset Non-current Porperty Computer', DebitAmmount_1: 'P 100.00', CreditAmmount_1: 'P 100.00', account_code: '6764', account_name: 'Disbursements Account'},
			{ID: '4', Journal: 'Sales Journal', DocYear: '2014', DocMonth: 'March', DocDate: '08', AccCategCode_1: '212', AccCategName_1: 'Liability Current Cash-on-bank', DebitAmmount_1: 'P 380.00', CreditAmmount_1: 'P 380.00', account_code: '4567', account_name: 'Collections Account'},
			{ID: '5', Journal: 'Receipts Journal', DocYear: '2016', DocMonth: 'January', DocDate: '31', AccCategCode_1: '2111', AccCategName_1: 'Liability Current Cash-on-hand BDO', DebitAmmount_1: 'P 335.00', CreditAmmount_1: 'P 335.00', account_code: '6758', account_name: 'Sales Account'},
			{ID: '6', Journal: 'Collections Journal', DocYear: '2012', DocMonth: 'February', DocDate: '22', AccCategCode_1: '1112', AccCategName_1: 'Asset Current Property Vehicle', DebitAmmount_1: 'P 250.00', CreditAmmount_1: 'P 250.00', account_code: '3457', account_name: 'Receipts Account'},
			{ID: '7', Journal: 'Collections Journal', DocYear: '2013', DocMonth: 'August', DocDate: '15', AccCategCode_1: '1212', AccCategName_1: 'Asset Non-current Property Vehicle', DebitAmmount_1: 'P 890.00', CreditAmmount_1: 'P 890.00', account_code: '1212', account_name: 'Collections Account'},
			{ID: '8', Journal: 'Sales Journal', DocYear: '2012', DocMonth: 'January', DocDate: '18', AccCategCode_1: '1211', AccCategName_1: 'Asset Non-current Property Building', DebitAmmount_1: 'P 1000.00', CreditAmmount_1: 'P 1000.00', account_code: '1211', account_name: 'Receipts Account'},
			{ID: '9', Journal: 'Disbursements Journal', DocYear: '2010', DocMonth: 'May', DocDate: '14', AccCategCode_1: '121', AccCategName_1: 'Asset Non-current Property', DebitAmmount_1: 'P 3500.00', CreditAmmount_1: 'P 3500.00', account_code: '121', account_name: 'Sales Account'},
			{ID: '10', Journal: 'Sales Journal', DocYear: '2012', DocMonth: 'December', DocDate: '28', AccCategCode_1: '2214', AccCategName_1: 'Liability Non-current Property Fixtures', DebitAmmount_1: 'P 300.00', CreditAmmount_1: 'P 300.00', account_code: '2214', account_name: 'Receipts Account'},
			{ID: '11', Journal: 'Purchases Journal', DocYear: '2011', DocMonth: 'January', DocDate: '27', AccCategCode_1: '122', AccCategName_1: 'Asset Non-current Property', DebitAmmount_1: 'P 5300.00', CreditAmmount_1: 'P 5300.00', account_code: '122', account_name: 'Receipts Account'},
			{ID: '12', Journal: 'Sales Journal', DocYear: '2011', DocMonth: 'November', DocDate: '15', AccCategCode_1: '222', AccCategName_1: 'Liability Non-current Property', DebitAmmount_1: 'P 8320.00', CreditAmmount_1: 'P 8320.00', account_code: '222', account_name: 'Collections Account'},
			{ID: '13', Journal: 'Purchases Journal', DocYear: '2012', DocMonth: 'January', DocDate: '08', AccCategCode_1: '1112', AccCategName_1: 'Asset Current Cash-on-bank', DebitAmmount_1: 'P 23900.00', CreditAmmount_1: 'P 23900.00', account_code: '1112', account_name: 'Sales Account'},
			
		];
	var table = $("#others-table").DataTable({
		data: data,
		columns: [
					{
						mData: null,
						bSortable: false,
						mRender: function(rowData, setting, sourceData){
							return "<button class='btn btn-primary btn-sm view'><i class='fa fa-eye'></i></button>";
						}
					},
					{'data': "ID"},
					{'data': "Journal"},
					{'data': "DocYear"},
					{'data': "DocMonth"},
					{'data': "DocDate"},
					{'data': "account_code"},
					{'data': "account_name"},
					{'data': "AccCategCode_1"},
					{'data': "AccCategName_1"},
					{'data': "DebitAmmount_1"},
					{'data': "CreditAmmount_1"},
					
				],
		//lengthChange: false,
		scrollX: true,
		/**drawCallback: function(settings){
			$('#others-table_wrapper .row .col-sm-6:first-child').empty();
			$('#others-table_wrapper .row .col-sm-6:first-child').append('<button id="add" class="btn btn-info"><i class="fa fa-plus"></i>&nbsp; Add</button>');
		},**/
		order: [[ 1, "asc" ]],
	});
	$('div').on('click', '.close-popover', function(){

             $('.popover').popover('hide');
    });

    $('div').on('click', '.btn-info', function(){

             $('.popover').popover('hide');
    });

	$('#others-table_wrapper').on('click', '.view', function(){
		var data = table.row($(this).closest('tr')).data();
		set_modal_data(data);
		$('#modal-journal').attr('readonly', 'true');
		$('#modal-doc-yr').attr('readonly', 'true');
		$('#modal-doc-month').attr('readonly', 'true');
		$('#modal-doc-date').attr('readonly', 'true');
		$('#modal-acc-code').attr('readonly', 'true');
		$('#modal-acc-name').attr('readonly', 'true');
		$('#modal-acc-cat-code').attr('readonly', 'true');
		$('#modal-acc-cat-name').attr('readonly', 'true');
		$('#modal-debit-ammount').attr('readonly', 'true');
		$('#modal-credit-ammount').attr('readonly', 'true');
		$('#modal-submit').css('display', 'none');
		$('#modal-close').css('display', 'inline');
		$(this).popover({
                animation: true,
                html: true,
                placement: 'right',
                content: function(){
                    return $('#modal').html();
                },
                container: '.navbar-body'
                
        });
	});
	
	var set_modal_data = function(data){
		$('#modal-id').html(data.ID);
		$('#input-id').val(data.ID);
		$('#modal-journal').val(data.Journal);
		$('#modal-doc-yr').val(data.DocYear);
		$('#modal-doc-month').val(data.DocMonth);
		$('#modal-doc-date').val(data.DocDate);
		$('#modal-acc-code').val(data.account_code);
		$('#modal-acc-name').val(data.account_name);
		$('#modal-acc-cat-code').val(data.AccCategCode_1);
		$('#modal-acc-cat-name').val(data.AccCategName_1);
		$('#modal-debit-ammount').val(data.DebitAmmount_1);
		$('#modal-credit-ammount').val(data.CreditAmmount_1);
	}
</script>