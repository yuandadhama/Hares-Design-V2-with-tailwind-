function $(comp) { return document.querySelector(comp); }
function $all(comp) { return document.querySelectorAll(comp); }
function $id(comp) { return document.getElementById(comp); }
function c(comp) { console.log(comp); }

const buttonNav = $id('button');
const containList = $id('contain-list');
const desc = $id('desc');
const logo = $id('logo');
const blackFilter = $id('black-filter');
const close = $id('close');
const imageDesc = $id('image-desc');
const description = $id('description');
const beranda = $id('beranda');

const imageKarya = $all('.image-art');
const judulDesc = $all('.judul-desc');
const link = $all('#link');

const body = $('body');
const nav = $('nav');

const hidden = 'y-hidden';
let indexKarya = 0;

// setInterval(() => {
//      beranda.classList.toggle('slide-kiri');
//      beranda.classList.toggle('slide-kanan');
// }, 5000);

window.addEventListener('scroll', function () {
  nav.classList.toggle('sticky', window.scrollY > 0);
});

buttonNav.addEventListener('click', function () {
  containList.classList.toggle('slide');
  body.classList.toggle(hidden);
  nav.classList.toggle('push-menu');
  nav.classList.toggle('transparent');
  logo.classList.toggle('none');
  nav.classList.toggle('opacity');
  blackFilter.classList.toggle('none');
  this.classList.toggle('not-active');
  this.classList.toggle('active');
});

link.forEach((e) => {
  reset(e, 'click');
});

reset(window, 'resize');
reset(blackFilter, 'click');

function reset(comp, valid) {
  comp.addEventListener(valid, () => {
    containList.classList.remove('slide');
    body.classList.remove(hidden);
    nav.classList.remove('push-menu');
    nav.classList.remove('opacity');
    buttonNav.classList.remove('active');
    buttonNav.classList.add('not-active');
    blackFilter.classList.add('none');
    nav.classList.remove('opacity');
    nav.classList.remove('transparent');
    logo.classList.remove('none');
  });
}

document.addEventListener('click', function (e) {
  if (e.target.classList.contains('image-art')) {
      desc.classList.add('top');
      nav.style.display = 'none';
      body.classList.add(hidden);
      $id('contain-desc').innerHTML = showDescription(e.target);
    }
});

close.addEventListener('click', () => {
  desc.classList.remove('top');
  nav.style.display = 'flex';
  body.classList.remove(hidden);
});

window.addEventListener('resize', () => {
  desc.classList.remove('top');
  nav.style.display = 'flex';
  body.classList.remove(hidden);
});

fetch('data.json')
  .then(response => response.json())
  .then(response => {
    let figure = '';
    response.forEach(k => figure += makeFigure(k));
    $id('container-karya').innerHTML = figure;
  });


function makeFigure(k) {
  return `<figure class="figure">
            <div class="bungkus">
              <div class="wrapper group">
                <img src="${k.src}" alt="${k.title}" title="${k.title}" class="image-art ${k.aspect ? k.aspect : ''}" data-desc="${k.description}">
              </div>
            </div>
            <h2 class="caption">${k.title}</h2>
          </figure>`
}

function showDescription(e) {
  return `<div class="sm:desc-pc">
            <div class="w-full mb-3 sm:hidden">
              <div class="text-left">
                <h2 class="judul-desc">${e.title}</h2>
                <p class="sub-judul-desc">Digital Art</p>
              </div>
            </div>
            <img src="${e.src}" alt="${e.title}" title="${e.title}" width="1px" height="1px"
              class="w-full h-auto shadow-black shadow-md max-w-[300px] sm:w-1/2 sm:max-w-md" id="image-desc">
            <div class="w-full sm:w-1/2 sm:ml-4">
              <div class="hidden sm:block md:mb-5 lg:mb-9">
                <h2 class="judul-desc">${e.title}</h2>
                <p class="sub-judul-desc">Digital Art</p>
              </div>
              <p class="text-left mt-4 max-w-[300px] text-[4vw] xs:text-base sm:max-w-none md:text-lg xl:text-2xl"
                id="description">${e.dataset.desc}</p>
            </div>
          </div>`
}