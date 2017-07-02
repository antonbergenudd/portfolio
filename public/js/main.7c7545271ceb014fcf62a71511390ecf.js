!function(n){"use strict";function t(n,t){return-1!==n.indexOf(t,n.length-t.length)}function e(){}function u(n,f){function c(n,t){return b.push(n),H.push(t),R!=o&&(R=o,setTimeout(function(){l()},0)),d}function l(){if(R!=o)return R=i,S(n),void(S=e);if(++L==b.length){if(!h)return L=b.length-1,void(R=i);L=0}b[L].apply(null,[].concat(l,H[L]))}function s(t,e,u){var i=e.length;return i?void function r(o){setTimeout(function(){M(n,x(n)+e[o]),o+=1,i>o?r(o):t()},u)}(0):t()}function a(e,u,i){var r=x(n),o=r.length;return null!=u&&("string"==typeof u?o=t(r,u+T)?u.length+T.length:0:u>-1&&(o=Math.min(u,o))),o?void function f(t){setTimeout(function(){var u=x(n);t?(M(n,u.substring(0,u.length-1)),f(t-1)):e()},i)}(o):e()}function g(t){M(n,""),t()}function p(t,e){e.call(t,n)}var d=this;if(!(d instanceof u))return new u(n,f);f=f||{};var h=f.loop,v=f.speed||f.typeSpeed||50,m=f.speed||f.deleteSpeed||50,y=f.delay||f.pauseDelay||2e3,T=f.postfix||"",x=f.getter||function(n){return n.innerHTML},M=f.setter||function(n,t){n.innerHTML=t},b=[],H=[],L=-1,R=i,S=e;d.type=function(n,t){return c(s,[n+T,t||v])},d["delete"]=function(n,t){return c(a,[n,t||m])},d.clear=function(){return c(g)},d.pause=function(n){return c(setTimeout,[n||y])},d.call=function(n){return c(p,[n])},d.triggerPause=function(n){return R=r,S=n||e,d},d.triggerResume=function(){if(R!=o){var n=R;R=o,n==i&&l()}return d},d.isRunning=function(){return R!=i}}var i=0,r=1,o=2;"object"==typeof module?module.exports=u:n.malarkey=u}(this);

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

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

var showDescription = false;

var bars = [{
    class:'css',
    knowledge:'100%',
    src:'css'
},{
    class:'angular',
    knowledge:'80%',
    src:'angular'
},{
    class:'html',
    knowledge:'100%',
    src:'html'
},{
    class:'phonegap',
    knowledge:'80%',
    src:'phonegap',
},{
    class:'sass',
    knowledge:'80%',
    src:'sass'
},{
    class:'github',
    knowledge:'40%',
    src:'github'
},{
    class:'jquery',
    knowledge:'80%',
    src:'jquery'
}];

var langDescription = function(lang) {

    switch(lang) {
        case 'css':
            activeLanguage = {
                name: 'CSS',
                shrt: 'Cascade Styling Sheet',
                knowledge: '100%',
                src: 'css'
            }
            break;
        case 'angular':
            activeLanguage = {
                name: 'AngularJS',
                shrt: '',
                knowledge: '80%',
                src: 'angular'
            }
            break;
        case 'html':
            activeLanguage = {
                name: 'HTML',
                shrt: 'Hyper Text Markup Line',
                knowledge: '100%',
                src: 'html'
            }
            break;
        case 'phonegap':
            activeLanguage = {
                name: 'Phonegap',
                shrt: '',
                knowledge: '80%',
                src: 'phonegap'
            }
            break;
        case 'sass':
            activeLanguage = {
                name: 'Sass',
                shrt: 'Super awesome styling sheet',
                knowledge: '80%',
                src: 'sass'
            }
            break;
        case 'github':
            activeLanguage = {
                name: 'Github',
                shrt: '',
                knowledge: '40%',
                src: 'github'
            }
            break;
        case 'jquery':
            activeLanguage = {
                name: 'jQuery',
                shrt: 'Javascript',
                knowledge: '80%',
                src: 'jquery'
            }
            break;
    };
};

$(document).ready(function() {
    initMalarkey();
})

// Static values ( Phone only )
var lockedTop = true;
var animated = false;
var lockedBottom = false;
var reversed_animation = false;
var lastScrollTop = 0;


$(document).scroll(function() {

    // Values
    var langO = $('.lang').offset().top;
    var langH = $('.lang').outerHeight();
    var wH = $(window).height();
    var wS = $(window).scrollTop();
    var color = localStorage.activeColor;

    // Positions

    // About
    var about_offT = $('#about-text').offset().top;
    var about_outH = $('#about-text').outerHeight();
    var trigger_about = about_offT - about_outH;

    // Languages
    var lang_offT = $('#lang-text').offset().top;
    var lang_outH = $('#lang-text').outerHeight();
    var trigger_lang = lang_offT - lang_outH;

    // Residence
    var residence_offT = $('#residence-text').offset().top;
    var residence_outH = $('#residence-text').outerHeight();
    var trigger_residence = residence_offT - residence_outH;

    // Merits
    var merits_offT = $('#medabort-text').offset().top;
    var merits_outH = $('#medabort-text').outerHeight();
    var trigger_merits = merits_offT - merits_outH;

    // News
    var news_offT = $('#latest-news-text').offset().top;
    var news_outH = $('#latest-news-text').outerHeight();
    var trigger_news = news_offT - news_outH;

    // Contact
    var contact_offT = $('#contact').offset().top;
    var contact_outH = $('#contact').outerHeight();
    var trigger_contact = contact_offT - contact_outH;



// FADE TEXTS

    // About
    if(wS > trigger_about - 200) {
        $('#about-text').css('opacity', '1');

        $('.navbar_links li a').removeClass('active');
        document.getElementById('about_link').classList.add('active');
        var tabStr = document.getElementById('about_link').innerHTML.toString();
        localStorage.currentTab = tabStr;
    } else {
        $('#about-text').css('opacity', '0');
    }

    // Languages
    // Box 1
    if(wS > trigger_lang - 200) {
        $('#lang-text').css('opacity', '1');

        $('.navbar_links li a').removeClass('active');
        document.getElementById('lang_link').classList.add('active');
        var tabStr = document.getElementById('lang_link').innerHTML.toString();
        localStorage.currentTab = tabStr;
    } else {
        $('#lang-text').css('opacity', '0');
    }

    // Box 2
    if(wS > trigger_lang + 500) {
        $('#lang-text-2').css('opacity', '1');
    } else {
        $('#lang-text-2').css('opacity', '0');
    }



    // Residence
    if(wS > trigger_residence - 200) {
        $('#residence-text').css('opacity', '1');

        $('.navbar_links li a').removeClass('active');
        document.getElementById('res_link').classList.add('active');
        var tabStr = document.getElementById('res_link').innerHTML.toString();
        localStorage.currentTab = tabStr;
    } else {
        $('#residence-text').css('opacity', '0');
    }

    // Merits
    // Medabort
    if(wS > trigger_merits - 200) {
        $('#medabort-text').css('opacity', '1');

        $('.navbar_links li a').removeClass('active');
        document.getElementById('merits_link').classList.add('active');
        var tabStr = document.getElementById('merits_link').innerHTML.toString();
        localStorage.currentTab = tabStr;
    } else {
        $('#medabort-text').css('opacity', '0');
    }

    // All of IT
    if(wS > trigger_merits + 500) {
        $('#allofit-text').css('opacity', '1');
    } else {
        $('#allofit-text').css('opacity', '0');
    }

    // News
    if(wS > trigger_news - 200) {
        $('#latest-news-text').css('opacity', '1');
    } else {
        $('#latest-news-text').css('opacity', '0');
    }

    // Contact
    if(wS > trigger_contact - 200) {
        $('.navbar_links li a').removeClass('active');
        document.getElementById('contact_link').classList.add('active');
        var tabStr = document.getElementById('contact_link').innerHTML.toString();
        localStorage.currentTab = tabStr;
    }







// Hide navbar on scroll up
    var st = $(this).scrollTop();
    if (st > lastScrollTop){
        $('#navbar').show();
        setTimeout(function(){
            $('#navbar').css('top', '0');
            $('#navbar').css('opacity', '1');
        }, 200)
    } else {
        $('#navbar').css('top', '-30px');
        $('#navbar').css('opacity', '0');
        setTimeout(function(){
            $('#navbar').hide();
        }, 200)
    }
    lastScrollTop = st;





// Graph

    // Positions
    var lang_middle_b = langH / 2 + langO - wH;

    if (wS > lang_middle_b) {
        $('.primaryColor').css('background-color', color);

        /* Bar 1 */
        var skillVal2 = $('.css .inner').attr("data-progress");
        $('.css .inner').animate({
            height: skillVal2
        }, 3000);
        $('.css img').animate({
            bottom: skillVal2
        }, 3000);
        $('.css .p').animate({
            bottom: skillVal2
        }, 3000);

        /* Bar 2 */
        var skillVal = $('.angular .inner').attr("data-progress");
        $('.angular .inner').animate({
            height: skillVal
        }, 1500);
        $('.angular img').animate({
            bottom: skillVal
        }, 1500);
        $('.angular .p').animate({
            bottom: skillVal
        }, 1500);

        /* Bar 3 */
        var skillVal3 = $('.phonegap .inner').attr("data-progress");
        $('.phonegap .inner').animate({
            height: skillVal3
        }, 1500);
        $('.phonegap img').animate({
            bottom: skillVal3
        }, 1500);
        $('.phonegap .p').animate({
            bottom: skillVal3
        }, 1500);

        /* Bar 4 */
        var skillVal6 = $('.html .inner').attr("data-progress");
        $('.html .inner').animate({
            height: skillVal6
        }, 2000);
        $('.html img').animate({
            bottom: skillVal6
        }, 2000);
        $('.html .p').animate({
            bottom: skillVal6
        }, 2000);

        /* Bar 5 */
        var skillVal5 = $('.sass .inner').attr("data-progress");
        $('.sass .inner').animate({
            height: skillVal5
        }, 2500);
        $('.sass img').animate({
            bottom: skillVal5
        }, 2500);
        $('.sass .p').animate({
            bottom: skillVal5
        }, 2500);

        /* Bar 6 */
        var skillVal4 = $('.github .inner').attr("data-progress");
        $('.github .inner').animate({
            height: skillVal4
        }, 1500);
        $('.github img').animate({
            bottom: skillVal4
        }, 1500);
        $('.github .p').animate({
            bottom: skillVal4
        }, 1500);

        /* Bar 7 */
        var skillVal7 = $('.jquery .inner').attr("data-progress");
        $('.jquery .inner').animate({
            height: skillVal7
        }, 1000);
        $('.jquery img').animate({
            bottom: skillVal7
        }, 1000);
        $('.jquery .p').animate({
            bottom: skillVal7
        }, 1000);
    };

});



// Progress bar
$(document).scroll(function(){
	var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());
	$('.progress-line').css('width', scrollPercent + '%');
});




// Loading animation
$(window).load(function() {
  $('#loading').hide();
  animate_logo();
});

$(document).ready(function(){
    if(localStorage.primaryColor != undefined) {
        $('#loading').hide();
    }
})

function animate_logo() {

    // Initiative logo animation
    // Logo line 1
    $('.line2').addClass('animate1');

    setTimeout(function(){
        //Logo line 2
        $('.line1').addClass('animate2');

        setTimeout(function(){
            //Logo text shift
            $('.test').animate({
                'right':'80px'
                },500)

            //Logo text fade-in
            $('#text').animate({
                'opacity':'1',
                'width':'100px'
                }, 500).promise().then(function() {

                    setTimeout(function() {
                        // Logo blur
                        $('#animation_wrapper').css('-webkit-filter', 'blur(5px)');

                        setTimeout(function() {
                            // Text fade-in
                            $('#text-stage-1').fadeIn();
                        }, 800)
                    }, 500)
                })
        },1100)
    }, 150);

    // Choose color animation
    $('.color-list li').hover(function(){
        var buttonColor = $(this).css('background-color');
        $('#overlay').css('background-color', buttonColor);
    });

};





// Logo animation
$('#navbar_logo').hover(function(){
    $('#main_logo').animate({'left':'15px'}, 200).promise().then(function(){
        $('.navbar-text').animate({
            'opacity': '1',
            'width': '100px'
        }, 200)
    });

}, function() {

    $('.navbar-text').animate({
        'width': '0',
        'opacity': '0'
    }, 300).promise().then(function(){
        $('#main_logo').animate({'left':'30px'});
    }, 300);
})





// Order project section
var animation_active_app = false;
var animation_active_desktop = false;

  // App
    $('#app').mouseenter(function(){
      // Enter trigger animation 0.1s
        if(!animation_active_app) {
          animation_active_app = true;
          $('#icon-app').animate({
              'font-size': '0'
            }, 100, function() {
               $('#app h1').animate({
                   'font-size': '30pt'
                 }, 100);
               animation_active_app = false;
            });
        }

    });
    $('#app').mouseleave(function(){
      // Trigger if animation is over

        if(!animation_active_app) {
          animation_active_app = true;
          $('#app h1').animate({
            'font-size': '0'
          }, 100, function() {
             $('#icon-app').animate({
                 'font-size': '110pt'
               }, 100);
             animation_active_app = false;
          });
        }
    });

  // Desktop
    $('#desktop').hover(function() {
      if(!animation_active_desktop) {
        animation_active_desktop = true;
        $('#icon-desktop').animate({
            'font-size': '0'
          }, 100, function() {
             $('#desktop h1').animate({
                 'font-size': '30pt'
               }, 100);
             animation_active_desktop = false;
          });
      }
    }, function(){
      if(!animation_active_desktop) {
        animation_active_desktop = true;
        $('#desktop h1').animate({
            'font-size': '0'
          }, 100, function() {
             $('#icon-desktop').animate({
                 'font-size': '70pt'
               }, 100);
             animation_active_desktop = false;
          });
      }
    });

    // Form control

    // First click
    $('.test-btn').click(function() {
      // Text
      if ($(this).attr("id") == "app") {
        $('#option').text('App');
      } else {
        $('#option').text('Website');
      }

      // Hide content
      $('#option-menu').toggle();

      // Transform main box
      $('#main-box').addClass('form-layout');

      // Show new content
      $('#form').toggle();
    });

    // Back button
    $('#return').click(function(){

      // Hide content
      $('#form').toggle();

      // Transform main box
      $('#main-box').removeClass('form-layout');

      // Show new content
      $('#option-menu').toggle();
    });




// Contact buttons
// $('#facebook-trigger').onmouseenter(function() {
//     $('#facebook').hide();
//     $('#facebook-square').show();
// });
$('#twitter-trigger').hover(
   function () {
        setTimeout(function(){
            $('#twitter-square').show();
            $('#twitter-trigger').addClass('rotate');
        }, 10)

        $('#twitter').hide();
   },

   function () {
      $('#twitter').show();
      $('#twitter-square').hide();
      $('#twitter-trigger').removeClass('rotate');
   }
);

$('#linkedin-trigger').hover(
   function () {
        setTimeout(function(){
            $('#linkedin-square').show();
            $('#linkedin-trigger').addClass('rotate');
        }, 10)

        $('#linkedin').hide();
   },

   function () {
      $('#linkedin').show();
      $('#linkedin-square').hide();
      $('#linkedin-trigger').removeClass('rotate');
   }
);

$('#facebook-trigger').hover(
   function () {
    setTimeout(function(){
        $('#facebook-square').show();
        $('#facebook-trigger').addClass('rotate');
    }, 10)

      $('#facebook').hide();
   },

   function () {
      $('#facebook').show();
      $('#facebook-square').hide();
      $('#facebook-trigger').removeClass('rotate');
   }
);

$('#codepen-trigger').hover(
   function () {
      $('#codepen-trigger i').addClass('rotate');
   },

   function () {
      $('#codepen-trigger i').removeClass('rotate');
   }
);

// $('#twitter-trigger').hover(function() {
//     $('#twitter').hide();
//     $('#twitter-square').show();
// });
// $('#linkedin-trigger').hover(function() {
//     $('#linkedin').hide();
//     $('#linkedin-square').show();
// });



// Malarkey
function initMalarkey() {
    var elem = document.getElementById('malarkey-target');

    var opts = {
      typeSpeed: 30,
      deleteSpeed: 30,
      pauseDelay: 3000,
      loop: true
    };

    malarkey(elem, opts)
        .type('professional').pause().delete()
        .type('elegance').pause().delete()
        .type('simplicity').pause().delete()
        .type('teamwork').pause().delete();
}




// Submit form
$('#project-form').submit(function(e){

  // Replace with animation
  e.preventDefault();

  var email = $('#email').val();
  var name = $('#name').val();
  var body = $('#body').val();
  var project_type = $('#option').text();

  $.ajax({
      type: 'POST',
      url:'send_request.php',
      data : { email : email, name : name, body : body, project_type : project_type },
      success: function() {
          console.log('email sent successfully..');
          $('#project-form input[type="text"], textarea, input[type="number"], input[type="email"]').val('');
      },
    error: function(XMLHttpRequest, textStatus, errorThrown) {
     alert(textStatus + ': ' + errorThrown + ' / ' + XMLHttpRequest);
    }
  });
});





// Navbar links
$('.navbar_links li a').click(function(){
    $('.navbar_links li a').attr('id', '');
    $(this).attr('id', 'active');
    var tabStr = $(this)[0].innerHTML.toString();
    localStorage.currentTab = tabStr;
});

$(document).ready(function(){
    for(var i = 0; i < $('.navbar_links').children().length; i++) {
        if($('.navbar li').children()[i].innerHTML == localStorage.currentTab) {
            $('.navbar_links li a').removeClass('active');
            i++;
            $('.navbar_links li:nth-child(' + i + ') a').addClass('active');
        }
    }
});


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
