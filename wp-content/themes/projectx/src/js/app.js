document.addEventListener('DOMContentLoaded', function () {
  // contact pop up
  const showBtn = document.getElementById('show-contact');
  const formWrap = document.getElementById('contact-form-wrap');
  const closeBtn = document.querySelector('.close_button');
  const overLay = document.querySelector('.overlay');

  // Show form on "Contact" click
  showBtn.addEventListener('click', function (e) {
    e.preventDefault();
    formWrap.style.display = 'block';
    overLay.style.display = 'block';
    formWrap.scrollIntoView({ behavior: 'smooth' });
  });

  // Hide form on "Close" button click
  closeBtn.addEventListener('click', function () {
    formWrap.style.display = 'none';
    overLay.style.display = 'none';
  });


});
