var debit_credit = function(event){
	let element = $(event.target);
	let val = parseFloat(element.val());

	if(val < 0){
		element.closest('tr').find("input[name*=je_credit_amount]").val(val);
		element.closest('tr').find("input[name*=je_debit_amount]").val('');
	}else if(val >= 0){
		element.closest('tr').find("input[name*=je_debit_amount]").val(val);
		element.closest('tr').find("input[name*=je_credit_amount]").val('');
	}else{
		element.closest('tr').find("input[name*=je_debit_amount]").val('');
		element.closest('tr').find("input[name*=je_credit_amount]").val('');
	}
}