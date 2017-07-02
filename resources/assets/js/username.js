
// Expiration time
var timeout_expiration = 3600 * 1000;

// Reset function
var reset_localstorage = function() {
    if(localStorage.firstName != undefined) {
        console.log('resetting Localstorage');
        localStorage.counter = 0;
        localStorage.clear();

        // Restart process
        setTimeout(reset_localstorage, timeout_expiration);
    }
};

// initialize counting process
$('.finalize').click(function() {

    $('#overlay-content-1').toggle();
    $('#overlay-content-2').toggle();

    setTimeout( function() {
        localStorage.firstName = $('.name').val();
        // localStorage.scroll = true;
        setTimeout(reset_localstorage, timeout_expiration);

        console.log('starting timeout to ' + timeout_expiration / 1000+ 's..');

        // Start the acctual counting
        reset_counter();
    }, 5000);
});

// Check counting progress
var reset_counter = function(){
    if(localStorage.counter < (timeout_expiration / 1000)) {
        localStorage.counter++;

        // Display
        // console.log(localStorage.counter);

        setTimeout(reset_counter, 1000);
    } else {
        reset_localstorage();
    }
};

// Check wether counter has been started before
if(localStorage.counter == undefined) {
    localStorage.counter = 0;
    console.log('Setting counter to 0');
}

// Resurrect counting from last session
else {
    if(localStorage.counter > 0) {
        console.log('Re-init counter');
        reset_counter();
    }
};
