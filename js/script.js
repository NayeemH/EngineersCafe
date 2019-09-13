

// Get DOM Elements
const modal = document.querySelector('#my-modal');
const modalBtn = document.querySelector('#modal-btn');
const closeBtn = document.querySelector('.close');

// Events
modalBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click', closeModal);
window.addEventListener('click', outsideClick);

// Open
function openModal() {
  modal.style.display = 'block';
}

// Close
function closeModal() {
  modal.style.display = 'none';
}

// Close If Outside Click
function outsideClick(e) {
  if (e.target == modal) {
    modal.style.display = 'none';
  }
}

$(document).ready(function () {

  $(window).on('scroll', function () {
      if ($(window).scrollTop() >= 20) { // use any value lower than the navbar height, [20] is an example

          $('.navbar').css({ // reducing the vertical padding from 25px to 10px
              'padding-top': '10px',
              'padding-bottom': '10px'
          });

      } else {

          $('.navbar').css({ // reset the vertical padding to its initial value [25px]
              'padding-top': '25px',
              'padding-bottom': '25px'
          });

      }
  });

});            
