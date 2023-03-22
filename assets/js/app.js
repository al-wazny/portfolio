const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("show");
        } else {
            if (entry.boundingClientRect.top > 0) {
                entry.target.classList.remove("show");
            }
        }
    })
});


const hiddenElements = document.querySelectorAll('.hidden');

hiddenElements.forEach(element => observer.observe(element));

const counters = document.querySelectorAll('.count');
const speed = 100;

counters.forEach( counter => {
    counter.setAttribute('data', counter.innerText);
    counter.innerText = 0;

    const animate = () => {
        const value = +counter.getAttribute('data');
        const data = +counter.innerText;
        
        const time = value / speed;

        if(data < value) {
            counter.innerText = Math.ceil(data + time);
            setTimeout(animate, 10);
        } else {
            counter.innerText = value + "+";
        }
    }
    
    animate();
});

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,

    breakpoints: {
        991: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 5
        }
    },
    
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
