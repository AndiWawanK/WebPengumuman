// Set the date we're counting down to
var countDownDate = new Date("May 03, 2018 16:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 28));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 28)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    // document.getElementById("pengumuman").innerHTML = days + " " + hours + " "
    // + minutes + " " + seconds + " ";
    // document.getElementById("days").innerHTML = days + "";
    // console.log(seconds);
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;
    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        // document.getElementById("pengumuman").innerHTML = "EXPIRED";
        window.location.replace("http://localhost:8888/webpengumuman/Welcome/home");

    }
}, 1000);
