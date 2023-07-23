(function (window, document) {
    if (window && document) {
        if (window.matchMedia) {
            setDarkTheme();
        }
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function (e) {
            setDarkTheme();
        });
    }
})(window, document)

function setDarkTheme() {
    const captcha = document.getElementById('g-recaptcha');

    document.documentElement.classList.add('theme-dark');

    if(captcha !== null) {
        captcha.setAttribute('data-theme','dark');
    }
}