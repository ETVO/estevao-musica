import 'bootstrap';

var backToTop = document.getElementById('backToTop');
var floatingIndex = document.getElementById('floatingIndex');
document.addEventListener('DOMContentLoaded', function () {

  window.onscroll = function () {
    if (window.scrollY < 768) {
      backToTop.style.opacity = '0';
      floatingIndex.style.opacity = '0';
    } else {
      backToTop.style.opacity = '100%';
      floatingIndex.style.opacity = '100%';
    }
  };
});