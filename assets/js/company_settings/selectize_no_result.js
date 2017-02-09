Selectize.define( 'no_results_found', function( options ) {
    var self = this;

    options = $.extend({
        message: '<span class="no-results-found" style="color: red;">No results found!. Click here to add</span>',

        html: function(data) {
            return (
                '<div class="selectize-dropdown ' + data.classNames + ' dropdown-empty-message">' +
                    '<div class="selectize-dropdown-content">' + data.message + '</div>' +
                '</div>'
            );
        }
    }, options );

    self.displayEmptyResultsMessage = function () {
        this.$empty_results_container.addClass('display-block ');
        this.$empty_results_container.css( 'top', this.$control.outerHeight() );
        this.$empty_results_container.show();
    };

    self.hideEmptyResultsMessage = function () {
        this.$empty_results_container.removeClass('display-block ');
        this.$empty_results_container.hide();
    }

    self.refreshOptions = (function () {
        var original = self.refreshOptions;

        return function () {
            original.apply( self, arguments );
            this.hasOptions ? this.hideEmptyResultsMessage() :
                this.displayEmptyResultsMessage();
        }
    })();

    self.onKeyDown = (function () {
        var original = self.onKeyDown;

        return function ( e ) {
            original.apply( self, arguments );
            if ( e.keyCode === 27 ) {
                this.hideEmptyResultsMessage();
            }
        }
    })();

    self.onBlur = (function () {
        var original = self.onBlur;
        return function () {
            let _this = this;
            original.apply( self, arguments );
            setTimeout(function(){
                _this.hideEmptyResultsMessage();
            }, 500);
        };
    })();

    self.setup = (function() {
        var original = self.setup;
        return function() {
            original.apply(self, arguments);
            self.$empty_results_container = $( options.html( $.extend( {
                classNames: self.$input.attr( 'class' ) }, options ) ) );
            self.$empty_results_container.insertBefore( self.$dropdown );
            this.hideEmptyResultsMessage();
        };
    })();
});