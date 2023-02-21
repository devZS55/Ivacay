// blogslider start

$(".blogslid").slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 300,
    autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

// test Slide start
$(".test_slide").slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    autoplay: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

// blogslider start
$(".about_slide").slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 500,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 2,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

// blogslider end

// product slider jas start

$(".slider-for").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: ".slider-nav",
});
$(".slider-nav").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: ".slider-for",
    dots: true,
    centerMode: true,
    focusOnSelect: true,
});
// product slider jas end

// simple slick slider start
$(".regular").slick({
    dots: true,
    infinite: true,
    speed: 300,
    autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 3,
});

// simple slick slider end

// wow animation js

$(function () {
    new WOW().init();
});

// responsive menu js

$(function () {
    $("#menu").slicknav();
});

AOS.init();

// mobile mode aos animatio hide js
AOS.init({ disable: "mobile" });

// video play script
function playVideo() {
    $("#videoBanner").trigger("play");
    $("#btn2").hide();
    $("#btn1").show();
}
function pauseVideo() {
    $("#videoBanner").trigger("pause");
    $("#btn1").hide();
    $("#btn2").show();
}

// Check box functionalty Both with Validation

// function myFunction() {
//   document.getElementById("panel").style.display = "block";
// }
var count = 0;
var count1 = 0;
$(document).ready(function () {
    $("#btn_click").click(function () {
        var wtg = $("#wtg").val();
        var fromdate = $("#fromdate").val();
        var todate = $("#todate").val();

        if (wtg == "" || fromdate == "" || todate == "") {
            alert("Null Working");
        } else {
            // alert("Data Filled");

            $("#panel").css("display", "block");

            $("#panel2").css("display", "block");

            //          var dd=$('.check_class').val();
            // console.log(dd);
        }
        $("#check_id1").click(function () {
            if ($("#check_id1").is(":checked")) {
                // it is checked
                count++;
                // alert("It is working");
            } else {
                --count;
                // alert("Not working");
            }
            console.log(count);
            check();
        });

        $("#check_id2").click(function () {
            if ($("#check_id2").is(":checked")) {
                // it is checked
                count++;
                // alert("It is working");
            } else {
                --count;
                // alert("Not working");
            }
            console.log(count);
            check();
        });

        $("#check_id3").click(function () {
            if ($("#check_id3").is(":checked")) {
                // it is checked
                count++;
                // alert("It is working");
            } else {
                --count;
                // alert("Not working");
            }
            console.log(count);
            check();
        });

        $("#check_id4").click(function () {
            if ($("#check_id4").is(":checked")) {
                // it is checked
                count++;
                // alert("It is working");
            } else {
                --count;
                // alert("Not working");
            }
            console.log(count);
            check();
        });

        $("#check_id5").click(function () {
            if ($("#check_id5").is(":checked")) {
                // it is checked
                count++;
                // alert("It is working");
            } else {
                --count;
                // alert("Not working");
            }
            console.log(count);
            check();
        });
    });

    $("#check_id11").click(function () {
        if ($("#check_id11").is(":checked")) {
            // it is checked
            count1++;
            // alert("It is working");
        } else {
            --count1;
            // alert("Not working");
        }
        console.log(count);
        check1();
    });

    $("#check_id22").click(function () {
        if ($("#check_id22").is(":checked")) {
            // it is checked
            count1++;
            // alert("It is working");
        } else {
            --count1;
            // alert("Not working");
        }
        console.log(count);
        check1();
    });

    $("#check_id33").click(function () {
        if ($("#check_id33").is(":checked")) {
            // it is checked
            count1++;
            // alert("It is working");
        } else {
            --count1;
            // alert("Not working");
        }
        console.log(count);
        check1();
    });

    $("#check_id44").click(function () {
        if ($("#check_id44").is(":checked")) {
            // it is checked
            count1++;
            // alert("It is working");
        } else {
            --count1;
            // alert("Not working");
        }
        console.log(count);
        check1();
    });
});

// div1
function check() {
    var count_check = count;
    if (count_check >= 3) {
        $("#ssd").css("display", "flex");
    } else {
        $("#ssd").css("display", "none");
    }
}

// div2

function check1() {
    var count_check1 = count1;
    if (count_check1 >= 3) {
        $("#pcs").css("display", "flex");
    } else {
        $("#pcs").css("display", "none");
    }
}

// colour theme change script

function myFunction() {
    var checkBox = document.querySelector("#myCheck");
    var text = document.querySelector("body");
    if (checkBox.checked == true) {
        text.classList.add("light-mode");
    } else {
        text.classList.remove("light-mode");
    }
}

// product slider jas start

// product slider
$(".slider-for1").slick({
    autoplay: true,
    autoplaySpeed: 20000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    asNavFor: ".slider-nav1",
});
$(".slider-nav1").slick({
    autoplay: true,
    autoplaySpeed: 20000,
    infinite: true,
    slidesToShow: 7,
    slidesToScroll: 1,
    asNavFor: ".slider-for1",
    dots: false,
    arrows: false,
    focusOnSelect: true,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                vertical: false,
            },
        },
    ],
});

// simple slick slider end
// Second Slider start
$(".second_slider").slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 300,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

// ====================================== JS GET N POST REQUEST ======================================
function AjaxRequest(url, data) {
    var res;
    $.ajax({
        url: url,
        data: data,
        async: false,
        error: function () {
            console.log("error");
        },
        dataType: "json",
        success: function (data) {
            res = data;
        },
        type: "POST",
    });
    return res;
}

function AjaxRequest_get(url, data) {
    var res;
    $.ajax({
        url: url,
        data: data,
        async: false,
        type: "GET",
        dataType: "json",
        success: function (data) {
            res = data;
        },
        error: function () {
            console.log("error");
        },
    });
    return res;
}
// ============================================================================
