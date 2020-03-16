//https://codepen.io/jagadeshanh/pen/pNqLYX
function openSideNav() {
    document.getElementById("mySidenav").classList.toggle("openclose");
}


function closeSideNav() {
    document.getElementById("mySidenav").classList.toggle("openclose");
}


$(document).ready(function () {
    // Set iframe attributes when the show instance method is called
    $("#videoModal").on("show.bs.modal", function (event) {
        let button = $(event.relatedTarget); // Button that triggered the modal
        let url = button.data("video"); // Extract url from data-video attribute

        $(this).find("iframe").attr({
            src: url,
            allow: "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        });
    });

    // Remove iframe attributes when the modal has finished being hidden from the user
    $("#videoModal").on("hidden.bs.modal", function () {
        $("#videoModal iframe").removeAttr("src allow");
    });
});


$(document).ready(function () {
    $('.slickcarousel').slick({
//        dots: false,
        infinite: false,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 2000,
        centerMode: false,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    dots: true,
                    centerMode: true,

                }
            },
            {
                breakpoint: 600,
                settings: {
                    dots: true,

                }
            },
            {
                breakpoint: 480,
                settings: {
                    dots: true,

                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    });
});


(function ($) {
    $.fn.extend({
        rotaterator: function (options) {

            var defaults = {
                fadeSpeed: 500,
                pauseSpeed: 100,
                child: null
            };

            var options = $.extend(defaults, options);

            return this.each(function () {
                var o = options;
                var obj = $(this);
                var items = $(obj.children(), obj);
                items.each(function () {
                    $(this).hide();
                })
                if (!o.child) {
                    var next = $(obj).children(':first');
                } else {
                    var next = o.child;
                }
                $(next).fadeIn(o.fadeSpeed, function () {
                    $(next).delay(o.pauseSpeed).fadeOut(o.fadeSpeed, function () {
                        var next = $(this).next();
                        if (next.length == 0) {
                            next = $(obj).children(':first');
                        }
                        $(obj).rotaterator({
                            child: next,
                            fadeSpeed: o.fadeSpeed,
                            pauseSpeed: o.pauseSpeed
                        });
                    })
                });
            });
        }
    });
})(jQuery);

$(document).ready(function () {
    $('#rotate').rotaterator({
        fadeSpeed: 500,
        pauseSpeed: 100
    });
});




! function (a, b) {
    "use strict";

    function c(a, b) {
        for (var c in b) b.hasOwnProperty(c) && (a[c] = b[c]);
        return a
    }

    function d() {
        "function" == typeof b && b.fn.extend({
            ReplaceMe: function (a) {
                return this.each(function () {
                    new e(this, a)
                })
            }
        })
    }

    function e(a, b) {
        var d = {
            animation: "animated flipInX",
            speed: 2e3,
            separator: ",",
            hoverStop: !1,
            clickChange: !1,
            loopCount: "infinite",
            autoRun: !0,
            onInit: !1,
            onChange: !1,
            onComplete: !1
        };
        if ("object" == typeof b ? this.options = c(d, b) : this.options = d, "undefined" == typeof a) throw new Error('ReplaceMe [constructor]: "element" parameter is required');
        if ("object" == typeof a) this.element = a;
        else {
            if ("string" != typeof a) throw new Error('ReplaceMe [constructor]: wrong "element" parameter');
            this.element = document.querySelector(a)
        }
        this.init()
    }
    e.prototype.init = function () {
        "function" == typeof this.options.onInit && this.options.onInit(), this.words = this.escapeHTML(this.element.innerHTML).split(this.options.separator), this.count = this.words.length, this.position = this.loopCount = 0, this.running = !1, this.bindAll(), this.options.autoRun === !0 && this.start()
    }, e.prototype.bindAll = function () {
        this.options.hoverStop === !0 && (this.element.addEventListener("mouseover", this.pause.bind(this)), this.element.addEventListener("mouseout", this.start.bind(this))), this.options.clickChange === !0 && this.element.addEventListener("click", this.change.bind(this))
    }, e.prototype.changeAnimation = function () {
        this.change(), this.loop = setTimeout(this.changeAnimation.bind(this), this.options.speed)
    }, e.prototype.start = function () {
        this.running !== !0 && (this.running = !0, this.changeWord(this.words[this.position]), this.position++), this.loop = setTimeout(this.changeAnimation.bind(this), this.options.speed)
    }, e.prototype.change = function () {
        return this.position > this.count - 1 && (this.position = 0, this.loopCount++, this.loopCount >= this.options.loopCount) ? void this.stop() : (this.changeWord(this.words[this.position]), this.position++, void("function" == typeof this.options.onChange && this.options.onChange()))
    }, e.prototype.stop = function () {
        this.running = !1, this.position = this.loopCount = 0, this.pause(), "function" == typeof this.options.onComplete && this.options.onComplete()
    }, e.prototype.pause = function () {
        clearTimeout(this.loop)
    }, e.prototype.changeWord = function (a) {
        this.element.innerHTML = '<span class="' + this.options.animation + '" style="display:inline-block;">' + a + "</span>"
    }, e.prototype.escapeHTML = function (a) {
        var b = /<\/?\w+\s*[^>]*>/g;
        return b.test(a) === !0 ? a.replace(b, "") : a
    }, a.ReplaceMe = e, d()
}(window, window.jQuery);
