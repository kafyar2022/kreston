const banner = document.querySelector('.banner');
const partner = document.querySelector('.partner-glide');

if (banner) {
  new Glide(banner, {
    type: 'carousel',
    startAt: 0,
    perView: 1,
    gap: 0,
    autoplay: 2500,
  }).mount()
}

if (partner) {
  new Glide(partner, {
    type: 'carousel',
    startAt: 0,
    perView: 6,
    gap: 60,
    autoplay: 2500,
  }).mount()
}
