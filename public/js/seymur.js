/**
 * Created by omaro on 3/31/2018.
 */

var _createClass = function () {
    function defineProperties(target, props) {
        for (var i = 0; i < props.length; i++) {
            var descriptor = props[i];
            descriptor.enumerable = descriptor.enumerable || false;
            descriptor.configurable = true;
            if ("value" in descriptor) descriptor.writable = true;
            Object.defineProperty(target, descriptor.key, descriptor);
        }
    }

    return function (Constructor, protoProps, staticProps) {
        if (protoProps) defineProperties(Constructor.prototype, protoProps);
        if (staticProps) defineProperties(Constructor, staticProps);
        return Constructor;
    };
}();

function _classCallCheck(instance, Constructor) {
    if (!(instance instanceof Constructor)) {
        throw new TypeError("Cannot call a class as a function");
    }
}

document.addEventListener("DOMContentLoaded", function () {

    // stars
    var stars = document.querySelectorAll('.starParent');
    stars.forEach(function (star) {
        var s = new Star(star);
    });

    // menu
    var burger = document.querySelector('.navbar-burger');
    var navMenu = document.querySelector('.navbar-menu');
    burger.addEventListener('click', function () {
        burger.classList.toggle('clicked');
        navMenu.classList.toggle('clicked');
    });

    // navbar links
    var navLinks = document.querySelectorAll('.navbar-end .navbar-item');
    // set current link's class to active
    navLinks.forEach(function (link) {
        link.addEventListener('click', function (e) {
            // remove all link's active class
            e.preventDefault();
            document.querySelector(e.target.hash).scrollIntoView({
                behavior: 'smooth'
            });
            navLinks.forEach(function (link) {
                return link.classList.remove('active');
            });
            // set this link to be active
            e.target.classList.add('active');
        });

        link.href === window.location.href ? link.classList.add('active') : null;
    });
});

function randrange(x) {
    var y = arguments.length <= 1 || arguments[1] === undefined ? 0 : arguments[1];
    var float = arguments.length <= 2 || arguments[2] === undefined ? 0 : arguments[2];

    if (y === 0) {
        return float ? Math.random() * x : parseInt(Math.random() * x);
    } else {
        return float ? Math.random() * (y - x) + x : parseInt(Math.random() * (y - x) + x);
    }
}

var Star = function () {
    // nuo virsaus iki 100vh
    function Star(star) {
        _classCallCheck(this, Star);

        this.star = star;
        this.w = star.children[0].naturalWidth;
        this.h = star.children[0].naturalHeight;
        this.reset();

    }


    _createClass(Star, [{
        key: 'reset',
        value: function reset() {
            this.star.style = "";
            this.set('top', -this.h, 1);
            this.set('opacity', 1);
            this.set('width', 0.1 * document.body.clientWidth, 1);
            this.left = this.w + randrange(document.body.clientWidth * 0.5, document.body.clientWidth * 1.5, 1);
            this.set('left', this.left, 1);
            this.delay = 0.1;
            this.speed = randrange(8, 15, 15);
            this.animate();
        }
    }, {
        key: 'set',
        value: function set(prop, val) {
            var px = arguments.length <= 2 || arguments[2] === undefined ? 0 : arguments[2];

            px === 1 ? val += "px" : null;
            this.star.style[prop] = val;
        }
    }, {
        key: 'animate',
        value: function animate() {
            var _this = this;

            AniX.to(this.star, this.speed, {
                delay: this.delay,
                y: this.left + document.body.clientWidth * 0.1,
                x: -this.left - document.body.clientWidth * 0.1,
                opacity: 0,
                ease: AniX.ease.easeIn,
                onComplete: function onComplete() {
                    return _this.reset();
                }
            });
        }
    }]);

    return Star;
}();

function genStarPos(star, last) {
    var w = star.children[0].naturalWidth;
    var h = star.children[0].naturalHeight;
    var starPosX = document.body.clientWidth + w;
    var starPosY = -1 * parseInt(Math.random() * 500 + h + last);
    console.log(starPosX, starPosY);

    star.style.width = parseInt(Math.random() * 100 + 100) + "px";
    star.style.display = "block";
    star.style.top = starPosY + "px";
    star.style.left = starPosX + "px";

    window.setTimeout(function () {
        return star.classList.toggle('active');
    }, 100);
    return last;
}

$(document).ready(function () {
    $('a[href^="#"]').click(function (e) {
        e.preventDefault();
        var target = this.hash, $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
});


// pagination
var projectsPagination = document.querySelectorAll('.projectsPag');
var loader = document.querySelector('#projectsLoader');
var cols = document.querySelector('#projects .columns');
// switch
var projectsSwitch = document.querySelector("#projectsSwitch input");
var currentSwitch = projectsSwitch.checked ? "Packages" : "Projects";

projectsSwitch.addEventListener('click', function (e) {


    currentSwitch = projectsSwitch.checked ? "Packages" : "Projects";
    cols.classList.add("hidden");
    loader.children[1].innerHTML = 'Loading ' + currentSwitch;
    loader.style.display = "block";
    getData(1);
});

$(document).ready(function () {

    $(document).on('click', '.pagination a', function (event) {

        // $('li').removeClass('active');
        //
        // $(this).parent('li').addClass('active');

        event.preventDefault();

        loader.children[1].innerHTML = 'Loading Page ';
        // hide projects
        cols.classList.add("hidden");
        loader.style.display = "block";
        projectsPagination.forEach(function (link) {
            return link.classList.remove('is-current');
        });
        $(this).parent('li').addClass('is-current');


        //silmek ucun div icini

        var myurl = $(this).attr('href');

        var page = $(this).attr('href').split('page=')[1];


        getData(page);

    });

});


function getData(page) {
    $("#item-lists").empty();

    $.ajax(
        {

            url: '?page=' + page + '&type=' + currentSwitch,

            type: "get",

            datatype: "html",

        })

        .done(function (data) {
            setTimeout(function () {
                loader.style.display = "none";
                $("#item-lists").html(data);
            }, 1000);
        })

        .fail(function (jqXHR, ajaxOptions, thrownError) {

            alert('No response from server');

        });

}

$(".showBlog").click(function () {
    var blog_id = this.dataset.value;
    axios.get('/blog/' + blog_id)
        .then(function (response) {
            $("#blog-modal").addClass("is-active");
            $("#blog-content").html(response.data);

            // console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });


    console.log(this.dataset.value);
});


document.addEventListener('DOMContentLoaded', function () {

    // Modals

    var rootEl = document.documentElement;
    var $modals = getAll('.modal');
    var $modalButtons = getAll('.modal-button');
    var $modalCloses = getAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button');

    if ($modalButtons.length > 0) {
        $modalButtons.forEach(function ($el) {
            $el.addEventListener('click', function () {
                var target = $el.dataset.target;
                var $target = document.getElementById(target);
                rootEl.classList.add('is-clipped');
                $target.classList.add('is-active');
            });
        });
    }

    if ($modalCloses.length > 0) {
        $modalCloses.forEach(function ($el) {
            $el.addEventListener('click', function () {
                closeModals();
            });
        });
    }

    document.addEventListener('keydown', function (event) {
        var e = event || window.event;
        if (e.keyCode === 27) {
            closeModals();
        }
    });

    function closeModals() {
        rootEl.classList.remove('is-clipped');
        $modals.forEach(function ($el) {
            $el.classList.remove('is-active');
        });
    }

    // Functions

    function getAll(selector) {
        return Array.prototype.slice.call(document.querySelectorAll(selector), 0);
    }

});

var token = document.head.querySelector('meta[name="csrf-token"]');

toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-bottom-center",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};

$("#sendMessage").click(function () {

    axios.post('/save/message', {
        name: $("#name").val(),
        email: $("#email").val(),
        message: $("#message").val(),
        _token: token
    })
        .then(function (response) {
            console.log(response);
            if (response.data == "ok") {
                Command: toastr["success"]("Success")
            } else {
                Command: toastr["error"](JSON.stringify(response.data))
            }
        })
        .catch(function (error) {
            console.log(error);
        });

});

