const glide = new Glide('.glide', {
    type: 'carousel',
    perView: 4,
    gap: 50
}).mount()

glide.on('move', function () {
        document.querySelector(".glide__arrow--left").style.opacity = "1";
})
