const navbar = document.getElementById('navbar-main');
const btnDescriptions = document.querySelectorAll('.btn-description');

function handleNavbarScroll() {
  const scrollPixels = window.scrollY;
  
  if (scrollPixels >= 100) {
    navbar.style.top = '0px';
  } else {
    navbar.style.top = '-300px';
  }
}

function handleDescriptionToggle(btn) {
  const card = btn.closest('.list-card');
  const description = card.querySelector('.description');
  const isCollapsed = description.style.height === '0px' || description.style.height === '';

  if (isCollapsed) {
    description.style.height = description.scrollHeight + 'px';
    btn.classList.remove('bi-arrow-down-circle');
    btn.classList.add('bi-arrow-up-circle');
  } else {
    description.style.height = '0px';
    btn.classList.remove('bi-arrow-up-circle');
    btn.classList.add('bi-arrow-down-circle');
  }
}

window.addEventListener('scroll', handleNavbarScroll);

btnDescriptions.forEach(function(btn) {
  btn.addEventListener('click', function() {
    handleDescriptionToggle(btn);
  });
});
