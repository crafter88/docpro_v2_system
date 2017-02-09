var currentStepId = 1;
var sequenceElement = document.getElementById("sequence1");

var options = {
	keyNavigation: false,
	fadeStepWhenSkipped: false,
	swipeNavigation: false,
	startingStepId: currentStepId
}

var mySequence1 = sequence(sequenceElement, options);


var sequenceCOA = document.getElementById('coa-seq');

var coa_options = {
	keyNavigation: false,
	fadeStepWhenSkipped: false,
	swipeNavigation: false,
}

var coaSequence = sequence(sequenceCOA, coa_options);

var sequenceTax = document.getElementById('tax-seq');

var tax_options = {
	keyNavigation: false,
	fadeStepWhenSkipped: false,
	swipeNavigation: false,
}

var taxSequence = sequence(sequenceTax, tax_options);

var eval = function(){
	if(currentStepId === 4){
		$('.setup-tab').removeClass('active');
		$('.setup-tab').removeClass('done');
		$('#setup-tab-1').addClass('done');
		$('#setup-tab-2').addClass('done');
		$('#setup-tab-3').addClass('done');
		$('#setup-tab-4').addClass('active');
		$('#btn-prev').css('display', 'block');
		$('#btn-next').css('display', 'none');
		$('#btn-fin').css('display', 'block');
	}
	if(currentStepId === 3){
		$('.setup-tab').removeClass('active');
		$('.setup-tab').removeClass('done');
		$('#setup-tab-1').addClass('done');
		$('#setup-tab-2').addClass('done');
		$('#setup-tab-3').addClass('active');
		$('#setup-tab-4').removeClass('done');
		$('#btn-prev').css('display', 'block');
		$('#btn-next').css('display', 'block');
		$('#btn-fin').css('display', 'none');
	}
	if(currentStepId === 2){
		$('.setup-tab').removeClass('active');
		$('.setup-tab').removeClass('done');
		$('#setup-tab-1').addClass('done');
		$('#setup-tab-2').addClass('active');
		$('#setup-tab-3').removeClass('done');
		$('#setup-tab-4').removeClass('done');
		$('#btn-prev').css('display', 'block');
		$('#btn-next').css('display', 'block');
		$('#btn-fin').css('display', 'none');
	}
	if(currentStepId === 1){
		$('.setup-tab').removeClass('active');
		$('.setup-tab').removeClass('done');
		$('#setup-tab-1').addClass('active');
		$('#setup-tab-2').removeClass('done');
		$('#setup-tab-3').removeClass('done');
		$('#setup-tab-4').removeClass('done');
		$('#btn-prev').css('display', 'none');
		$('#btn-next').css('display', 'block');
		$('#btn-fin').css('display', 'none');
	}
}
eval();

$('#btn-prev').click(function(){
	currentStepId--;
	let width = 25 * currentStepId;
	$('#progress-bar .progress-bar').css('width', width+'%');
	mySequence1.goTo(currentStepId);
	eval();
	window.scrollTo(0, 0);
});
$('#btn-next').click(function(){
	currentStepId++;
	let width = 25 * currentStepId;
	$('#progress-bar .progress-bar').css('width', width+'%');
	mySequence1.goTo(currentStepId);
	eval();
	window.scrollTo(0, 0);
});
