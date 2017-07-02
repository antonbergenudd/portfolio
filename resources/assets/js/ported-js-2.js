// Primary variables
var hide = false;
var pos = {
    lat: 55.7047,
    lng: 13.1910
}
var textColor = localStorage.primaryColor;
var colors = [
    {
        color: '#F88787' // red
    }, {
        color: '#88D384' // green
    }, {
        color: '#9A74B3' // purple
    }, {
        color: '#F8B887' // orange
    }, {
        color: '#80BBBB' // lightblue
    }, {
        color: '#858585' // black
    }
];


$('document').ready(function() {
    listener();
    initColor();
    sessionCheck();
});

function listener() {
    document.getElementById('toggle_colors').addEventListener('submit', toggle_colors);
    document.getElementById('skip_intro').addEventListener('click', skipIntro);

    document.querySelectorAll('[data-setup-color]').forEach(button => {
        button.addEventListener('click', init_counting);
    });
}





// Skip intro
function skipIntro() {

    // Exp date
    var name = 'Anonymous you';
    var expiration_date = new Date()
    expiration_date.setHours(expiration_date.getHours() + 1, expiration_date.getMinutes() + 30);
    localStorage.setItem('expiration_date', expiration_date);
    localStorage.firstName = name;
    localStorage.message_sent = false;

    init_counting('#F8B887');
}

function sessionCheck() {
    // Check for expiration date
    if(localStorage.expiration_date) {
        // Check current date
        var current_date = new Date();
        var expire = Date.parse(localStorage.expiration_date);

        // See if it's reached expiration
        if(current_date >= expire) {
            console.log('Expire reached');
            reset_localstorage();
        }
    } else {
        $("#overlay").removeClass('hidden');
        $('html, body').animate({scrollTop: '0px'}, 300);
    }

    // Show overlay if localstorage is undefined
    if(localStorage.firstName != undefined) {
        $("#overlay").removeClass('hidden');
        name = localStorage.firstName.charAt(0).toUpperCase().slice(1);
    } else {
        $("#overlay").addClass('hidden');
    };
}

// Show colors
function toggle_colors(e) {
    e.preventDefault();
    e.stopPropagation();

    // Display colors
    document.getElementById('show_colors').classList.remove('hidden');
    document.getElementById('toggle_colors').classList.add('hidden');

    // Expiration date 1 hr 30 min
    var expiration_date = new Date();
    expiration_date.setHours(expiration_date.getHours() + 1, expiration_date.getMinutes() + 30);
    localStorage.expiration_date = expiration_date;
    localStorage.message_sent = false;
};

// Calls on refresh
function initColor(color) {

    if(localStorage.getItem('primaryColor')) {
        color = localStorage.getItem('primaryColor');
    }

    //ADD_INIT
    color = 'black';

    // Unlock scroll
    if(color) {
        $('body').css('overflow', 'visible');
    }

    localStorage.setItem('activeColor', color);

    $('.primaryColor').css('background-color', color);
    $('.primaryColor-font').css('color', color);
    $('.primaryColor-border').css('border-color', color);
    document.getElementById('content').classList.remove('hidden');

}

// initialize counting process
function init_counting(color = null) {
    if(this.dataset && this.dataset.setupColor) {
        color = this.dataset.setupColor;
    }

    localStorage.primaryColor = color;

    $('#overlay-content-1').css('opacity', '0');

    // Show welcome page
    setTimeout(function(){
        $('#overlay-content-1').toggle();
        $('#welcome-page').toggle();

        setTimeout(function() {
            $('#welcome-page').css('opacity', '1');
        }, 200);

    }, 1000);

    // Hide overlay after 3 seconds
    setTimeout( function() {

        // for animation
        $("#overlay").css('opacity', '0');

        setTimeout(function() {
            $("#overlay").toggle();
            $('body').css('overflow' , 'visible');
            $("#overlay-background").css('display', 'none');
        }, 700);

        $("#overlay").addClass('hidden');

        textColor = localStorage.primaryColor;
        localStorage.firstName = $('.name').val();
        initColor();

    }, 3000);

};

// When counter hits 0
function reset_localstorage() {
    console.log('resetting Localstorage');
    localStorage.clear();
    location.reload();
};
