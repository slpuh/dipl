//Прокрутка с заменой цвета верхнего меню
            window.onscroll = function() {
            var scrolled = window.pageYOffset || document.documentElement.scrollTop;
            var w = window.innerWidth;
            document.getElementById('header').style.backgroundColor= scrolled<=80?"#13359e":"#fff";
            document.getElementById('topcontact').style.color= scrolled<=80?"#fff":"#13359e";
            document.getElementById('lang').style.color= scrolled<=80?"#fff":"#13359e";
            document.getElementById('lang').style.borderColor= scrolled<=80?"#fff":"#13359e";
            document.getElementById('header').style.boxShadow= scrolled<=80?"none":"0 0 10px rgba(0,0,0,0.5)";
            document.logo.src= scrolled<=80?"template/images/logo1.png":"template/images/logo2.png";
            //Смена стилей меню
            var top_menu=document.getElementById('top_menu');
            if(scrolled <=80) {
            top_menu.className = ('basic-classname');
            } 
            else if(scrolled >80) {
           top_menu.className =  ('added-classname');
            } 
            //Прокрутка с заменой цвета верхнего меню==============================================================
             //Изменение цвета меню при прокрутке
            var a=document.getElementById('top_menu').querySelectorAll('a');  
            
            if(scrolled >=80 && scrolled <=1300 && w >=480) {
                  a[0].className=('active');
            } 
            else {
                  a[0].classList.remove("active");
            } 
            if(scrolled >1300 && scrolled <=1900 && w >=480) {
                  a[1].className=('active');
            } 
            else {
                  a[1].classList.remove("active");
            } 
            if(scrolled >1900 && scrolled <=2500 && w >=480) {
                  a[2].className=('active');
            } 
            else {
                  a[2].classList.remove("active");
            }  
            if(scrolled > 2500 && scrolled <=3100 && w >=480) {
                  a[3].className=('active');
            } 
            else {
                  a[3].classList.remove("active");
            }
            if(scrolled > 3100 && scrolled <=3700 && w >=480) {
                  a[4].className=('active');
            } 
            else {
                  a[4].classList.remove("active");
            }  
            if(scrolled > 3700 && scrolled <=4300 && w >=480) {
                  a[6].className=('active');
            } 
            else {
                  a[6].classList.remove("active");
            }
            if (w < 496) {
                  document.getElementById('header').style.backgroundColor="#13359e";
                  document.logo.src= "template/images/logo1.png";
                  top_menu.className=('aactive');
                  top_menu.classList.remove("basic-classname");
                  document.getElementById('topcontact').style.color= "#fff";
            document.getElementById('lang').style.color= "#fff";
            document.getElementById('lang').style.borderColor= "#fff";
            } 
                
   }
   //Выпадющее меню при клике
   function lookmenu(elemId) {
    var elem = document.getElementById(elemId);
     if (elem.style.display == "none") {
      elem.style.display = "block";
     }
     else {
      elem.style.display = "none";
     }
 }
  //Слайдер
/*var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
   for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active1", "");
    }
    slides[slideIndex-1].style.display = "block";  
   dots[slideIndex-1].className += " active1";
    var stopSlides=setTimeout(showSlides, 5000); 
      }*/
      var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}1
//Слайдер===================================================



