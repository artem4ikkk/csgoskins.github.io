let touch;

function resize() { 
  let profilePictures = document.querySelectorAll('.left');
  let screen = document.querySelector('.screen');
  touch = document.querySelector('.touch');
  screen.style.width = screen.offsetHeight*(9.5/18)+'px';
  screen.style.borderRadius = screen.offsetHeight/2*0.06+'px';
  touch.style.width = touch.style.height = screen.offsetWidth/12 + 'px';
  profilePictures[0].style.width = '4px';
  profilePictures.forEach(function(elem) {
    elem.style.width = elem.offsetHeight + 'px';
  })
}

document.addEventListener("DOMContentLoaded", function(event) {
  resize();
});

document.querySelector('#restart').addEventListener('click', resetAnimations);
document.querySelector('#pause').addEventListener('click', pauseAnimations);
document.querySelector('#play').addEventListener('click', playAnimations);
window.onresize = resize;

function resetAnimations() {
  logoInit.restart();
  lettersInit.restart();
  splashScale.restart();
  swipeUp.restart();
  focusOnPen.restart();
  focusOnPenResult.restart();
  focusOnPenHtml.restart();
  swipeToHtmlTab.restart();
  swipeUpTouch.restart();
}

function pauseAnimations() {
  logoInit.pause();
  lettersInit.pause();
  splashScale.pause();
  swipeUp.pause();
  focusOnPen.pause();
  focusOnPenResult.pause();
  focusOnPenHtml.pause();
  swipeToHtmlTab.pause();
  swipeUpTouch.pause();
}

function playAnimations() {
  logoInit.play();
  lettersInit.play();
  splashScale.play();
  swipeUp.play();
  focusOnPen.play();
  focusOnPenResult.play();
  focusOnPenHtml.play();
  swipeToHtmlTab.play();
  swipeUpTouch.play();
}

var logoInit = anime({
  targets: '.splashScreen svg',
  translateX: [
    { value: '200%', duration: 0, delay: 0, easing: 'linear' },
    { value: 0, duration: 500, delay: 1000 }
  ],
  rotate: { value: 360, duration: 500, delay: 500, easing: 'easeInOutSine' }
});

var lettersInit = anime({
  targets: '.splashScreen span',
  translateX: [-400,0],
  direction: 'alternate',
  loop: false,
  delay: 1500,
  duration: 500
});

var splashScale = anime({
  targets: '.splashScreen',
  opacity: { value: 0, delay: 2500, duration: 2000 }
})

var swipeUp = anime({
  targets: '.pickedPens',
  translateY: [
    { value: document.querySelector('.pen').offsetHeight * -2.5, delay: 4000, duration: 2000 },
    { value: 0, delay: 0, duration: 2000 }
  ]
})

var focusOnPen = anime({
  targets: '.selectedPen',
  translateY: [
    { value: ['100%', '0%'], delay: 8000, duration: 200, easing: 'linear'},
    { value: ['0%', '100%'], delay: 3000, duration: 200, easing: 'linear'}
  ]
})

var focusOnPenResult = anime({
  targets: '#focusOn',
  translateX: [
    { value: ['0%', '-100%'], delay: 9500, duration: 1000}
  ]
})

var focusOnPenHtml = anime({
  targets: '#focusOnHtml',
  translateX: [
    { value: ['100%', '0%'], delay: 9500, duration: 1000}
  ]
})

var swipeToHtmlTab = anime({
  targets: '.selectedPen .after',
  translateX: { value: '100%', delay: 9500, duration: 500}
})

