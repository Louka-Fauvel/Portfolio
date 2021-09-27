const testFonction = document.getElementById('particule');

setInterval(rainFall, 10);

function rainFall() {

  const waterDrop = document.createElement('i');

  waterDrop.classList.add('bi');
  waterDrop.classList.add('bi-square-fill');
  waterDrop.style.fontSize = Math.random() * 7 + 'px';
  waterDrop.style.animationDuration = Math.random() * 30 + 's';
  waterDrop.style.opacity = Math.random() + 0.3;
  waterDrop.style.marginLeft = Math.random() * 20 + '%';

  testFonction.appendChild(waterDrop);

  setTimeout(() => {
    waterDrop.remove();
  }, 6000)
}
