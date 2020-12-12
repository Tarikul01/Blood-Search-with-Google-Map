const menuBar = document.querySelector('.menu-bar');
const navList = document.querySelector('.nav-list');
const bars = document.querySelectorAll('.bar.half');

menuBar.addEventListener('click', () => {
  bars.forEach(bar=> {
	  bar.classList.toggle('active');
  });
  navList.classList.toggle('active');
  menuBar.classList.toggle('active');
});


