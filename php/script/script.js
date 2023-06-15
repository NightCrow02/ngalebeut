const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

function showSlide() {
  slides[currentSlide].classList.remove('active');
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].classList.add('active');
}

setInterval(showSlide, 5000);

// const carousel = document.querySelector('.ad-carousel');
// const slides = Array.from(carousel.children);
// const slideWidth = slides[0].getBoundingClientRect().width;

// // Arrange the slides next to each other
// function setSlidePosition(slide, index) {
//   slide.style.left = slideWidth * index + 'px';
// }

// slides.forEach(setSlidePosition);

// // Slideshow functionality
// let currentSlide = 0;
// let isMoving = false;

// function moveSlides(direction) {
//   if (isMoving) return;
//   isMoving = true;
//   const distance = direction === 'next' ? -slideWidth : slideWidth;
//   carousel.style.transform = 'translateX(' + distance * (currentSlide + 1) + 'px)';
//   currentSlide += direction === 'next' ? 1 : -1;

//   // Reset the slideshow when it reaches the end
//   if (currentSlide === slides.length) {
//     currentSlide = 0;
//   } else if (currentSlide === -1) {
//     currentSlide = slides.length - 1;
//   }

//   setTimeout(() => {
//     isMoving = false;
//   }, 500); // The time it takes to animate the slideshow
// }

// setInterval(() => {
//   moveSlides('next');
// }, 3000); // The time interval between each slide movement

const carouselitems = document.querySelector(".carouselitems"),
firstImg = carouselitems.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".wrapperitems i");

let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

const showHideIcons = () => {
    // showing and hiding prev/next icon according to carousel scroll left value
    let scrollWidth = carouselitems.scrollWidth - carouselitems.clientWidth; // getting max scrollable width
    arrowIcons[0].style.display = carouselitems.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carouselitems.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
        // if clicked icon is left, reduce width value from the carousel scroll left else add to it
        carouselitems.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
    });
});

const autoSlide = () => {
  // if there is no image left to scroll then return from here
  if(carouselitems.scrollLeft - (carouselitems.scrollWidth - carouselitems.clientWidth) > -1 || carouselitems.scrollLeft <= 0) return;
  positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
  let firstImgWidth = firstImg.clientWidth + 14;
  // getting difference value that needs to add or reduce from carousel left to take middle img center
  let valDifference = firstImgWidth - positionDiff;
  if(carouselitems.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
      return carouselitems.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
  }
  // if user is scrolling to the left
  carouselitems.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
}

const dragStart = (e) => {
  // updatating global variables value on mouse down event
  isDragStart = true;
  prevPageX = e.pageX || e.touches[0].pageX;
  prevScrollLeft = carouselitems.scrollLeft;
}

const dragging = (e) => {
  // scrolling images/carousel to left according to mouse pointer
  if(!isDragStart) return;
  e.preventDefault();
  isDragging = true;
  carouselitems.classList.add("dragging");
  positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
  carouselitems.scrollLeft = prevScrollLeft - positionDiff;
  showHideIcons();
}

const dragStop = () => {
  isDragStart = false;
  carouselitems.classList.remove("dragging");
  if(!isDragging) return;
  isDragging = false;
  autoSlide();
}

carouselitems.addEventListener("mousedown", dragStart);
carouselitems.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carouselitems.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carouselitems.addEventListener("touchend", dragStop);