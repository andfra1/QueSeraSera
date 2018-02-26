var infoCloseBttn = document.getElementsByClassName('info__close');
var info = document.getElementsByClassName('info');

for (var allinfos = 0; allinfos < info.length; allinfos++) {
  info[allinfos].addEventListener('click', function (event) {
    if (event.target.classList.contains('info__close') || event.target.tagName == 'SVG') {
      this.remove();
    }
  }, false);
}

console.log(info[0]);