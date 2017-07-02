// Expiration time
var timeout_expiration = 3600 * 1000;

// initialize counting process
function init_counting() {
    // Show welcome page
    $('#overlay-content-1').toggle();
    $('#overlay-content-2').toggle();

    // Hide after 4 seconds
    setTimeout( function() {
        console.log('hiding overlay');
        $('#overlay').toggle();

        console.log('Enabling scroll');
        $scope.scroll = 'scroll';

        // apply changes
        $scope.$apply();

        // Set official name
        localStorage.firstName = $('.name').val();
        localStorage.scroll = true;

        // Initialize counter
        console.log('starting counting to ' + timeout_expiration / 1000+ 's..');
        setTimeout(reset_localstorage, timeout_expiration);

        // Initialize the local counter
        counter();
    }, 4000);
};

// When counter hits 0
var reset_localstorage = function() {
    if(localStorage.firstName != undefined) {
        console.log('resetting Localstorage');
        localStorage.clear();
        localStorage.counter = 0;

        // Restart process
        setTimeout(reset_localstorage, timeout_expiration);
    }
};

// Check counting progress
var counter = function(){
    if(localStorage.counter < (timeout_expiration / 1000)) {
        localStorage.counter++;

        setTimeout(counter, 1000);
    } else {
        reset_localstorage();
    }
};

// Check wether counter has been started before
if(localStorage.counter == undefined) {
    localStorage.counter = 0;
} else {
    if(localStorage.counter > 0) {
        counter();
    }
};
