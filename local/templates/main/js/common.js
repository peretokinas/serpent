window.addEventListener('load', function (){

    document.querySelector('.header-burger').addEventListener('click', function (){
        if(document.body.classList.contains('menu-active')){
            document.body.classList.remove('menu-active')
        }else{
            document.body.classList.add('menu-active')
        }
    })

    const swiperJournal = new Swiper(".journal-slider", {
        navigation: {
            nextEl: ".journal .swiper-button-next",
            prevEl: ".journal .swiper-button-prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 14,
            },
            760: {
                slidesPerView: 2,
                spaceBetween: 14,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        }
    });
    if(document.querySelector('.swiper-mobile')){
        document.querySelectorAll('.swiper-mobile').forEach((item) => {
            let swiperProduct = new Swiper(item, {
                slidesPerView: 1,
                spaceBetween: 14,
            })
        })
    }
    if(document.querySelector('.slider-index')){
        let swiperProduct = new Swiper('.slider-index', {
            slidesPerView: 1,
            spaceBetween: 0,
            effect: 'fade',
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            watchSlidesProgress: true,
            navigation: {
                nextEl: '.index-arrow__right',
                prevEl: '.index-arrow__left',
            },
            pagination: {
                el: '.index-navigation',
            },
        });
    }
    if(document.querySelector('.swiper-swimsuit')){
        let swiperSwim = new Swiper(document.querySelector('.swiper-swimsuit'), {
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 14,
                },
                750: {
                    slidesPerView: "auto",
                    spaceBetween: 20,
                },
            },

        })
    }
    if(document.querySelector('.swiper-swimsuit-revert')){
        let swiperSwim = new Swiper(document.querySelector('.swiper-swimsuit-revert'), {
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 14,
                },
                750: {
                    slidesPerView: "auto",
                    spaceBetween: 20,
                },
            },
        })
    }
    if(document.querySelector('.slider-product')){
        document.querySelectorAll('.slider-product').forEach((item) => {
            let swiperProduct = new Swiper(item, {
                slidesPerView: 4,

                watchSlidesProgress: true,
                navigation: {
                    nextEl: item.closest('.section-slider').querySelector('.swiper-button-next'),
                    prevEl: item.closest('.section-slider').querySelector('.swiper-button-prev'),
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 14,
                    },
                    750: {
                        slidesPerView: 3,
                        spaceBetween: 14,
                    },
                    1300: {
                        slidesPerView: 4,
                        spaceBetween: 20,
                    },
                }
            });
        })
    }
    if(document.querySelector('.product-slider__container')){
        let sliderContainer = document.querySelector('.product-slider'),
            sliderContainerWidth = sliderContainer.clientWidth,
            containerLeft = document.querySelector('.container').getBoundingClientRect().left;
        document.querySelector('.product-slider__container').style.width = Number(sliderContainerWidth + containerLeft + 20) + 'px'
        document.querySelector('.product-slider').style.height =  document.querySelector('.product-slider__container').clientHeight + 'px'

        const swiperProduct = new Swiper('.product-slider__container', {
            navigation: {
                nextEl: ".product-block .swiper-button-next",
                prevEl: ".product-block .swiper-button-prev",
            },
            breakpoints: {
                1300: {
                    slidesPerView: "auto",
                    spaceBetween: 20,
                },
            }
        });
        const swiperProductMobile = new Swiper(".product-slider__mobile", {
            pagination: {
                el: ".swiper-pagination",
            },
        });
    }
    if(document.querySelector('.product-slide__swiper')){
        document.querySelectorAll('.product-slide__swiper').forEach((item) => {
            let swiperProductPic = new Swiper(item, {
                slidesPerView: 1,
                spaceBetween: 0,
                loop: true,
                navigation: {
                    nextEl: item.closest('.product-slide__swiper').querySelector('.swiper-arrow__right'),
                    prevEl: item.closest('.product-slide__swiper').querySelector('.swiper-arrow__left'),
                },
                pagination: {
                    el: item.closest('.product-slide__swiper').querySelector('.swiper-pagination'),
                },
            });
            if(window.innerWidth < 750){
                if(swiperProductPic.$el[0].closest('.slider-container') != null){
                    swiperProductPic.allowTouchMove = false;
                }

            }
        })
    }
    if(document.querySelector('.product-slide__size-default')){
        document.querySelectorAll('.product-slide__size-default').forEach((item) => {
            item.addEventListener('click', function (){
                let itemParent = item.closest('.product-slide__size');
                if(itemParent.classList.contains('active')){
                    itemParent.classList.remove('active')
                }else{
                    if(document.querySelector('.product-slide__size.active')){
                        document.querySelector('.product-slide__size.active').classList.remove('active')
                    }
                    itemParent.classList.add('active')
                }
                changeSize()
            })
        })
    }

    function changeSize(){
        document.querySelectorAll('.product-slide__size-item').forEach((itemSize) => {
            itemSize.addEventListener('click', () => {
                let itemParent = itemSize.closest('.product-slide__size');
                itemParent.querySelector('.product-slide__size-item.active').classList.remove('active')
                itemSize.classList.add('active');
                itemParent.classList.remove('active')
                itemParent.querySelector('.product-slide__size-default-text span').innerHTML = itemSize.innerHTML
            })
        })
    }

    if (document.querySelector('.tabs-head')) {
        document.querySelectorAll('.tabs-head').forEach((item) => {
            item.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector('.tabs-head.active').classList.remove('active');
                item.classList.add('active');

                const tabAttr = item.getAttribute('data-tab');

                document.querySelector('.tab-content.active').classList.remove('active')
                document.querySelector(`[data-id=${tabAttr}]`).classList.add('active')
            })
        })
    }

    if(document.querySelector('.pay-way__item')){
        document.querySelectorAll('.pay-way__item input').forEach((item) => {
            item.addEventListener('change', function (){
                if(item.value == 'card'){
                    document.querySelector('.pay-way__item-personally').classList.remove('active')
                    document.querySelector('.pay-way__item-card').classList.add('active')
                    document.querySelector('.pay-slider').classList.add('active')
                }else{
                    document.querySelector('.pay-way__item-personally').classList.add('active')
                    document.querySelector('.pay-way__item-card').classList.remove('active')
                    document.querySelector('.pay-slider').classList.remove('active')
                }
            })
        })

        document.querySelector('.pay-bills-check').addEventListener('change', function (){
            if(this.checked){
                document.querySelector('.pay-balls').classList.add('active');
                document.querySelector('.balls-flex__hidden').classList.add('active');
            }else{
                document.querySelector('.pay-balls').classList.remove('active');
                document.querySelector('.balls-flex__hidden').classList.remove('active');
            }
        })

        let slider = document.getElementById('slider');

        noUiSlider.create(slider, {
            start: [2000],
            step: 1,
            connect: 'lower',
            range: {
                'min': [0],
                'max': [3500]
            }
        });
        var stepSliderValueElement = document.querySelector('.balls-input input');

        slider.noUiSlider.on('update', function (values, handle) {
            stepSliderValueElement.value = Math.trunc(values[handle]);
        });
    }

    document.querySelectorAll('select').forEach((item) => {
        new SlimSelect({
            select: item,
            settings: {
                showSearch: false,
                openPosition: 'down'
            }
        })
    })

    var _targettedModal,
        _triggers = document.querySelectorAll('[data-modal-trigger]'),
        _dismiss = document.querySelectorAll('[data-modal-dismiss]'),
        modalActiveClass = "is-modal-active";

    function showModal(el){
        _targettedModal = document.querySelector('[data-modal-name="'+ el + '"]');
        _targettedModal.classList.add(modalActiveClass);
    }

    function hideModal(event){
        if(event === undefined || event.target.hasAttribute('data-modal-dismiss')) {
            _targettedModal.classList.remove(modalActiveClass);
        }
    }

    function bindEvents(el, callback){
        for (i = 0; i < el.length; i++) {
            (function(i) {
                el[i].addEventListener('click', function(event) {
                   if(!el[i].classList.contains('modal')){
                       event.preventDefault();
                   }
                    callback(this, event);
                });
            })(i);
        }
    }

    function triggerModal(){
        bindEvents(_triggers, function(that){
            showModal(that.dataset.modalTrigger);
        });
    }

    function dismissModal(){
        bindEvents(_dismiss, function(that){
            hideModal(event);
        });
    }

    function initModal(){
        triggerModal();
        dismissModal();
    }

    initModal();

    if(document.querySelector('.order-event__link')){
        document.querySelectorAll('.order-event__link').forEach((item) => {
            item.addEventListener('click', function (){
                let itemParent = document.querySelector('.lk-order__item');
                let itemContainerHidden = itemParent.querySelector('.order-list');
                let itemContainerHiddenHeight = itemContainerHidden.querySelector('.order-list__container').clientHeight;
                if(itemParent.classList.contains('active')){
                    itemParent.classList.remove('active')
                    item.innerHTML = 'Состав заказа';
                    itemContainerHidden.style.height = 0 + 'px';
                }else{
                    itemParent.classList.add('active')
                    item.innerHTML = 'Скрыть состав заказа';
                    itemContainerHidden.style.height = itemContainerHiddenHeight + 20 + 'px';
                }
            })
        })
    }

    if(document.querySelector('.accordion')){
        document.querySelectorAll('.accordion-item').forEach((accordionElement) =>{
            if(accordionElement.classList.contains('active')){
                let elementContent = accordionElement.querySelector('.accordion-content'),
                    elementContentHeight = elementContent.querySelector('.accordion-content__block').clientHeight;
                elementContent.style.height = elementContentHeight + 'px';
            }
            accordionElement.querySelector('.accordion-head').addEventListener('click', function (){
                let elementContent = this.nextElementSibling,
                    elementContentHeight = elementContent.querySelector('.accordion-content__block').clientHeight;
                if(this.closest('.accordion-item').classList.contains('active')){
                    this.closest('.accordion-item').classList.remove('active');
                    elementContent.style.height = 0;
                }else{
                    let siblingElement =  getSiblings(accordionElement)
                    siblingElement.forEach((item) => {
                        item.classList.remove('active')
                        item.querySelector('.accordion-content').style.height = 0;
                    })
                    accordionElement.classList.add('active');
                    elementContent.style.height = elementContentHeight + 'px';
                }
            })
        })
    }

    const getSiblings = function (elem) {

        // Setup siblings array and get the first sibling
        var siblings = [];
        var sibling = elem.parentNode.firstChild;

        // Loop through each sibling and push to the array
        while (sibling) {
            if (sibling.nodeType === 1 && sibling !== elem) {
                siblings.push(sibling);
            }
            sibling = sibling.nextSibling
        }

        return siblings;

    };


    if(document.querySelector('.auth-modal__tab')){
        document.addEventListener( 'mouseup', (e) => {
            if ( e.target.className == 'auth-modal active' ) {
                document.querySelector('.auth-modal').classList.remove('active')
            }
        })
        document.querySelectorAll('.auth-event').forEach((item) => {
            item.addEventListener('click', function (e){
                e.preventDefault();
                document.querySelector('.auth-modal').classList.add('active')
            })
        })
        document.querySelector('.auth-modal__close').addEventListener('click', function (){
            document.querySelector('.auth-modal').classList.remove('active')
        })
        document.querySelectorAll('.auth-modal__tab').forEach((item) => {
            item.addEventListener('click', function (){
                let itemAttr = item.getAttribute('data-id');
                if(itemAttr == 'modal-registry'){
                    document.querySelector('.auth-modal__tab[data-id="modal-entry"]').classList.remove('active')
                    document.querySelector('.auth-modal__tab[data-id="modal-registry"]').classList.add('active')
                    document.querySelector('.auth-modal__slider').classList.add('active')
                }else{
                    document.querySelector('.auth-modal__tab[data-id="modal-entry"]').classList.add('active')
                    document.querySelector('.auth-modal__tab[data-id="modal-registry"]').classList.remove('active')
                    document.querySelector('.auth-modal__slider').classList.remove('active')
                }
            })
        })
        document.querySelector('.auth-modal__entry .btn').addEventListener('click', function (e){
            e.preventDefault();
            document.querySelectorAll('.auth-back').forEach((item) => {
                item.addEventListener('click', function (){
                    item.closest('.auth-modal__two').classList.remove('active')
                })
            })
            if(!document.querySelector('.auth-modal__tab[data-id="modal-registry"]').classList.contains('active')){
                document.querySelector('.auth-modal__reg-code').classList.add('active')
            }else{
                document.querySelector('.auth-modal__entry-code').classList.add('active')
            }
        })

    }


    if(document.querySelector('.filter-item')){
        document.querySelectorAll('.filter-item').forEach((item) => {
            item.addEventListener('click', function (){
                let itemAttr = item.getAttribute('data-attr')
                if(document.querySelector('.filter-item.active')){
                    document.querySelector('.filter-item.active').classList.remove('active')
                    document.querySelector('.filter-container.active').classList.remove('active')
                    document.querySelector('.blackout').classList.remove('active')
                    document.querySelector('.catalog-filter').classList.remove('active')
                }
                item.classList.add('active');
                document.querySelector(`.filter-container[data-id='${itemAttr}']`).classList.add('active')
                document.querySelector('.blackout').classList.add('active')
                document.querySelector('.catalog-filter').classList.add('active')

                document.querySelector(`.filter-container[data-id='${itemAttr}']`).querySelector('.filter-close').addEventListener('click', function (){
                    document.querySelector('.filter-item.active').classList.remove('active')
                    document.querySelector('.filter-container.active').classList.remove('active')
                    document.querySelector('.blackout').classList.remove('active')
                    document.querySelector('.catalog-filter').classList.remove('active')
                })
                document.querySelector(`.filter-container[data-id='${itemAttr}']`).querySelector('.btn_final .btn').addEventListener('click', function (e){
                    e.preventDefault();
                    document.querySelector('.filter-item.active').classList.remove('active')
                    document.querySelector('.filter-container.active').classList.remove('active')
                    document.querySelector('.blackout').classList.remove('active')
                    document.querySelector('.catalog-filter').classList.remove('active')
                })

                document.addEventListener( 'mouseup', (e) => {
                    console.log(e.target.className)
                    if ( e.target.className == 'blackout active' ) {
                        document.querySelector('.filter-item.active').classList.remove('active')
                        document.querySelector('.filter-container.active').classList.remove('active')
                        document.querySelector('.blackout').classList.remove('active')
                        document.querySelector('.catalog-filter').classList.remove('active')
                    }
                })
            })
            if(window.innerWidth < 750){
                document.querySelectorAll('.filter-head').forEach((item) => {
                    item.addEventListener('click', function (){
                        document.querySelector('.filter-item.active').classList.remove('active')
                        document.querySelector('.filter-container.active').classList.remove('active')
                    })
                })
            }
            document.querySelector('.filter-mobile').addEventListener('click', function (){
                document.body.classList.add('filter-active')
            })
            document.querySelector('.filter-close').addEventListener('click', function (){
                document.body.classList.remove('filter-active');
                document.querySelector('.blackout').classList.remove('active')
                document.querySelector('.catalog-filter').classList.remove('active')
            })
        })
    }

    if(document.querySelector('.lk-sidebar__btn')){
        document.querySelector('.lk-sidebar__btn').addEventListener('click', function (){
            document.body.classList.add('sidebar-active')
        })
        document.querySelector('.lk-sidebar__close').addEventListener('click', function (){
            document.body.classList.remove('sidebar-active')
        })
    }

    if(document.querySelector('.header-event__link-search')){
        document.querySelector('.header-event__link-search').addEventListener('click', function (){
            if(document.querySelector('.search-modal').classList.contains('active')){
                document.querySelector('.search-modal').classList.remove('active')
            }else{
                document.querySelector('.search-modal').classList.add('active')
            }
        })
        document.querySelector('.search-back').addEventListener('click', function (){
            document.querySelector('.search-modal').classList.remove('active')
        })
    }

    if(document.querySelector('.filter-price')){
        let priceSlider = document.getElementById('slider');

        noUiSlider.create(priceSlider, {
            start: [1000, 16000],
            step: 100,
            connect: true,
            range: {
                'min': 0,
                'max' : 30000,
            }
        });

        let priceValues = [
            document.querySelector('.filter-price__input_start'),
            document.querySelector('.filter-price__input_end')
        ];

        priceSlider.noUiSlider.on('update', function (values, handle) {
            priceValues[handle].value = Math.trunc(values[handle]);
        });

        document.querySelector('.filter-price__input_start').addEventListener('change', function () {
            priceSlider.noUiSlider.set([this.value, null]);
        });
        document.querySelector('.filter-price__input_end').addEventListener('change', function () {
            priceSlider.noUiSlider.set([null, this.value]);
        });
    }

})

window.addEventListener("DOMContentLoaded", function() {
    [].forEach.call( document.querySelectorAll('input[type=tel]'), function(input) {
        var keyCode;
        function mask(event) {
            event.keyCode && (keyCode = event.keyCode);
            var pos = this.selectionStart;
            if (pos < 3) event.preventDefault();
            var matrix = "+7 (___) ___-__-__",
                i = 0,
                def = matrix.replace(/\D/g, ""),
                val = this.value.replace(/\D/g, ""),
                new_value = matrix.replace(/[_\d]/g, function(a) {
                    return i < val.length ? val.charAt(i++) || def.charAt(i) : a
                });
            i = new_value.indexOf("_");
            if (i != -1) {
                i < 5 && (i = 3);
                new_value = new_value.slice(0, i)
            }
            var reg = matrix.substr(0, this.value.length).replace(/_+/g,
                function(a) {
                    return "\\d{1," + a.length + "}"
                }).replace(/[+()]/g, "\\$&");
            reg = new RegExp("^" + reg + "$");
            if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
            if (event.type == "blur" && this.value.length < 5)  this.value = ""
        }

        input.addEventListener("input", mask, false);
        input.addEventListener("focus", mask, false);
        input.addEventListener("blur", mask, false);
        input.addEventListener("keydown", mask, false)

    });

});