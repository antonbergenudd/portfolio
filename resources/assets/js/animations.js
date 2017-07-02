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
