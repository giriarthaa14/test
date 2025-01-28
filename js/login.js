function login() {
    console.log('aju')
}
console.log('apalah')


function banned() {
    const button = document.querySelector('button');
    let countdown = 10;
    button.textContent = `harap tunggu ${countdown} detik`
    button.setAttribute('disabled', 'true')
    const time = setInterval(() => {
        countdown--;
        if (countdown > 0) {
             button.textContent = `harap tunggu ${countdown} detik`
        }else{
            clearInterval(time);
            button.removeAttribute('disabled');
            button.textContent = `Login`;
        }
    },1000)
}


