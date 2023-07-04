let timerOn = true
$data = 0
$.get('/otp-time', function (response) {
    console.log(response);
    response < 0 ? timer(0) : timer(response)
})

function timer(remaining) {
    var m = Math.floor(remaining / 60)
    var s = remaining % 60
    m = m < 10 ? '0' + m : m
    s = s < 10 ? '0' + s : s
    document.getElementById('timer').innerHTML = m + ':' + s;
    remaining -= 1
    if (remaining >= 0 && timerOn) {
        setTimeout(() => {
            timer(remaining)
        }, 1000);
        return;
    }
}
