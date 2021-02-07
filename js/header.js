
/* Sliding images Code */
let slideIndex = 0;

const showSlides = () => {

   const slides = document.getElementsByClassName("mySlides");
   

   for(let i=0; i < slides.length; i++) {
      slides[i].style.display = "none";
   }	

   slideIndex++;

   if(slideIndex > slides.length) {
      slideIndex = 1;
   }

      slides[slideIndex - 1].style.display = "block";
   

   setTimeout( showSlides , 3000);

};

showSlides();	



