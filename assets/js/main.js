const menuBar = document.querySelector('.menu-bar');
const navList = document.querySelector('.nav-list');
const bars = document.querySelectorAll('.bar.half');
const numb = document.querySelector('.numb');
let counter = 0;

//menu Bar
/*menuBar.addEventListener('click', () => {
  bars.forEach(bar=> {
	  bar.classList.toggle('active');
  });
  navList.classList.toggle('active');
  menuBar.classList.toggle('active');
});*/


//progress Bar
setInterval(()=>{
    if(counter == 100){
        clearInterval();   
     }else{
        counter += 1;
        numb.textContent = counter + "%";
     }
}, 80);
