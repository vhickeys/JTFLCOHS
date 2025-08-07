// index-startup-business.html
if(document.getElementsByClassName('typed-business').length > 0) {
    var typed = new Typed('.typed-business', {
        stringsElement: '#typed-strings',
        typeSpeed: 200,
        loop: true,
        strings: [
            'Develop', 'Growing', 'We Build',
        ],
    });
}

// index-personal-portfolio.html
if(document.getElementsByClassName('typed-personal-port').length > 0) {
    var typed = new Typed('.typed-personal-port', {
        stringsElement: '#typed-strings',
        typeSpeed: 90,
        loop: true,
        strings: [
            'JOHN DOE', 'Web Designer', 'App Development', 'UI Designer',
        ],
    });
}