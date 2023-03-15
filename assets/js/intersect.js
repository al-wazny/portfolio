const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("show");
        } else {
            entry.target.classList.remove("show");
        }
    })
});

const introductionObserver = new IntersectionObserver((intro) => {
    if (intro[0].isIntersecting) {
        intro[0].target.classList.add('show-introduction');
    } else {
        intro[0].target.classList.remove('show-introduction')
    }
})

const hiddenElements = document.querySelectorAll('.hidden');

hiddenElements.forEach(element => observer.observe(element));
introductionObserver.observe(document.getElementById('introduction'))