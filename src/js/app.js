// jquery import
import $ from "jquery";

// Bootstrap import
import 'bootstrap';





$(function () {
    // huuberger click function
    $('#Humburger').click(function () {
        // huuberger active
        $('#Humburger').toggleClass('active');
        // nav open
        $('body').toggleClass('nav-open');
        // black layer shop when slide is active

    });



});





// Darkmode js

const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
const currentTheme = localStorage.getItem('theme');

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);

    if (currentTheme === 'dark') {
        toggleSwitch.checked = true;
    }
}

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light');
    }
}

toggleSwitch.addEventListener('change', switchTheme, false);




// Tree Dropdown JS
$(function () {
    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
    $('.tree li.parent_li > span').on('click', function (e) {
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            // $(this).attr('title', 'Expand this branch').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
            $(this).attr('title', 'Expand this branch').parent().addClass('close').removeClass('open');
        } else {
            children.show('fast');
            // $(this).attr('title', 'Collapse this branch').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');
            $(this).attr('title', 'Collapse this branch').parent().addClass('open').removeClass('close');
        }
        e.stopPropagation();
    });
});


// navbar open in mobile view

if ($(window).width() < 767) {
    $('body').removeClass('nav-open')
    $('#Humburger').removeClass('active');
} else {
    $('body').addClass('nav-open')
    $('#Humburger').addClass('active');
}



// new window open javascript 
(function () {
    // var links = document.querySelectorAll('a.new-window');
    // for (var i = 0; i < links.length; ++i) {
    //   links[i].addEventListener('click', function(e) {
    //     e.preventDefault();
    //     // Note that it'll not work inside SO snippets preview because of the sandbox!
    //     // Try on https://codepen.io/xerif/pen/JWggoJ
    //     window.open(this.getAttribute('href'), '', [
    //       'width=' + screen.availWidth,
    //       'height=' + screen.availHeight
    //     ]);
    //     // Also note that array will be converted to proper string automagically — I used array for readability
    //   });
    // }



    $("a.new-window").click(function (e) {
        var popupWidth = 1650;
        var leftPos = screen.width - popupWidth;
        e.preventDefault();
        window.open(this.href, "customWindow", "width=" + popupWidth + ", height=740, top=200, left=" + leftPos);
    });


    $("path, circle").hover(function (e) {
        $('#info-box').css('display', 'block');
        $('#info-box').html($(this).data('info'));
    });

    $("path, circle").mouseleave(function (e) {
        $('#info-box').css('display', 'none');
    });

    $(document).mousemove(function (e) {
        $('#info-box').css('top', e.pageY - $('#info-box').height() - 30);
        $('#info-box').css('left', e.pageX - ($('#info-box').width()) / 2);
    }).mouseover();

    var ios = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
    if (ios) {
        $('a').on('click touchend', function () {
            var link = $(this).attr('href');
            window.open(link, '_blank');
            return false;
        });
    }



})();



/*
* The JS file - shows a cookie pop up on the website in 1 sec. And then write a cookie about visiting the website.
*/

"use strict";

var btz_cookie_popup_html = `
<div id="btz-cookie-popup">
  <div class="btz-cookie-popup__c-p-card btz-cookie-popup__card">
    <div class="btz-cookie-popup__content">
      <div class="modal-header">
        <h2>New Features & Updates</h3>
      </div>
      <div class="modal-body">
        <p>Welcome To The All new web 1040 Pro! Some features may be unavailable until the tax season begins. as they become available, you will be notified</p>
        <button class="btz-cookie-popup__c-p-button btn btn-secondary rounded-1 ">OK</button>
        <form>

          <div class="mb-2 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Do not show this message again</label>
          </div>
        </form>
      
      </div>
      <div class="modal-footer">
          <p><span class="h6 d-block">Help to make us better!</span>
            providing your feedback, suggestions, and features request us to make the Web1040 Pro a better software for tax preparation. <a href="#" target="_blank"> Click here to make a suggesions!</a></p>
        </div>
    </div>
  </div>
</div>
`;

var btz_cookie_popup_css = document.createElement("style");
btz_cookie_popup_css.type = "text/css";
btz_cookie_popup_css.innerHTML = ``;

function btzSetCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function btzGetCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function btzCheckCookie() {
    var btz_cookie_popup_visited = btzGetCookie("cookie_pop_visited");
    if (btz_cookie_popup_visited != "") {
        console.log("Cookie popup visited: " + btz_cookie_popup_visited);
    } else {
        setTimeout(function () {

            var btz_cookie_popup_span = document.createElement('span');
            btz_cookie_popup_span.innerHTML = btz_cookie_popup_html;
            document.body.appendChild(btz_cookie_popup_span);
            document.body.appendChild(btz_cookie_popup_css);

            var close = document.getElementsByClassName('btz-cookie-popup__c-p-close')[0];
            var card = document.getElementsByClassName('btz-cookie-popup__c-p-card')[0];
            var button = document.getElementsByClassName('btz-cookie-popup__c-p-button')[0];

            card.classList.add('btz-cookie-popup--opened');
            card.classList.remove('btz-cookie-popup--closed');

            card.addEventListener('click', function (e) {
                if (e.target === close | e.target === button) {
                    card.classList.remove('btz-cookie-popup--opened');
                    card.classList.add('btz-cookie-popup--closed');
                    btzSetCookie("cookie_pop_visited", true, 365);
                }
            });
        }, 1000);
    }
};

setTimeout(function () {
    btzCheckCookie();
}, 1000); // 1 sec

