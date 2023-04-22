var deadline = new Date("February 28, 2031 23:59:59").getTime();

var x = setInterval(function () {

    var now = new Date().getTime();

    var timeleft = deadline - now;

    var years = Math.floor(timeleft / (1000 * 60 * 60 * 24 * 365));
    var months = Math.floor((timeleft % (1000 * 60 * 60 * 24 * 365)) / (1000 * 60 * 60 * 24 * 30));
    var days = Math.floor((timeleft % (1000 * 60 * 60 * 24 * 30)) / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

    document.querySelector(".year").innerText = years;
    document.querySelector(".month").innerText = months;
    document.querySelector(".day").innerText = days;
    document.querySelector(".hour").innerText = hours;
    document.querySelector(".minute").innerText = minutes;
    document.querySelector(".second").innerText = seconds;

    if (timeleft <= 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
    }
}, 1000);