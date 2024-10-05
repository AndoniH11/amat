window.addEventListener('load', () => {
    const quotes = document.querySelectorAll('.quotes__slider .quote');
    const pagination = document.querySelector('.quotes__pagination');
    const slider = document.querySelector('.quotes-slider__wrapper');
    var sliderDimension = slider.offsetWidth + 50
    let lastScreenSize = window.innerWidth

    const createPagination = (viewport) => {   

        pagination.innerHTML = "";
        sliderDimension = slider.offsetWidth + 50

        let quotesLength = quotes.length
        if(viewport === "desktop") quotesLength = Math.floor(quotes.length/2)
        quotes.forEach((quote, i) => {
            if(i < quotesLength){
                const dot = document.createElement('div')
                dot.classList.add('dot')
                if(i === 0) {
                    dot.classList.add('active')
                    activeDot = dot
                }
                pagination.appendChild(dot)
    
                dot.addEventListener('click', () => {
                    activeDot.classList.remove('active')
                    slider.style.transform = `translateX(-${(i) * sliderDimension}px)`
                    dot.classList.add('active')
                    activeDot = dot
                })
            }
        })
    }

    var x = window.matchMedia("(max-width: 767px)")

    function paginationCreation() {
        if(x.matches){
            createPagination("mobile")
        }else{
            createPagination("desktop")
        }

        lastScreenSize = window.innerWidth
    }

    const debounce = (mainFunc, delay = 200) => {
        let timer;
    
        return (...args) => {
            clearTimeout(timer);
            timer = setTimeout(() => {
                mainFunc.apply(this, args)
            }, delay)
        }
    }
    
    // Throttle the paginationCreation function with a delay of 200 ms
    const throttlePaginationCreation = debounce(() => paginationCreation())
    
    // Add an event listener to the window scroll event that calls the throttlePaginationCreation function
    window.addEventListener("resize", throttlePaginationCreation);

    paginationCreation();
})

