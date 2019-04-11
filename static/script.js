const load = document.querySelector(".loader")

console.log(load)

window.addEventListener('load', () => {
    //setTimeout(() => {
        load.style.display = 'none'
        document.body.style.overflow = 'scroll'
    //}, 5000);
})

const glide = new Glide('.glide', {
    type: 'carousel',
    perView: 4,
    gap: 50
}).mount()

glide.on('move', function () {
    document.querySelector(".glide__arrow--left").style.opacity = "1";
})