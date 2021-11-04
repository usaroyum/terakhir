document.querySelectorAll('.cursorHover').forEach(element => {
    element.addEventListener('mouseover',function(){
        anime({
            targets: '.cursorBeeg',
            width: '100%',
            height: '100%',
            opacity: 1,
            duration: 1000
        })
    })

    element.addEventListener('mouseout',function(){
        anime({
            targets: '.cursorBeeg',
            width: '10%',
            height: '10%',
            opacity: 0,
            duration: 1000
        })
    })
});
