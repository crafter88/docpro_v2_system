// Get the Sequence element
	var level_1 = false;
	var level_2 = false;
	var level_3 = false;

    var initTitle = function(){
        $('.title').mouseover(function(){
            var _this = $(this);
            setTimeout(function() {
                _this.attr('title', _this.attr('custom-title'));
            }, 50);
        });
    }


	var sequenceElement = document.getElementById("coa_sequence");

	var options = {
	// Place your Sequence options here to override defaults
	// See: http://sequencejs.com/documentation/#options
	keyNavigation: true,
	fadeStepWhenSkipped: false,
	swipeNavigation: false,
	keyEvents: {
	  left: function(sequence) {
	  								if($('#coa_sequence li.seq-in').index() > 0){
	  									mySequence.prev();
	  								}
	  								initTitle();
	  							},
	  right: function(sequence) {
	  								if($('#coa_sequence li.seq-in').index() === 0){
	  									if(level_1 === true){
	  										mySequence.next();
	  									}
	  								}
	  								if($('#coa_sequence li.seq-in').index() === 1){
	  									if(level_2 === true){
	  										mySequence.next();
	  									}
	  								}
	  								if($('#coa_sequence li.seq-in').index() === 2){
	  									if(level_3 === true){
	  										mySequence.next();
	  									}
	  								}
	  								initTitle();
	  							}

	}
	}

	// Launch Sequence on the element, and with the options we specified above
	var mySequence = sequence(sequenceElement, options);