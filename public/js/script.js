const openModalButton = document.getElementById('openModal');

openModalButton.addEventListener('click', () => {
    const modalWrap = document.getElementById('modalWrapper');
    modalWrap.classList.toggle("modal-show");

    // modalWrap.addEventListener('click', () => {
    //     modalWrap.remove();
    // })
});

const openUserLog = document.getElementById('userLog');

openUserLog.addEventListener('click', () => {
    // const modalWrap = document.getElementById('userWrapper');
    // modalWrap.classList.toggle('modal-show');
    
});


//показать больше для каталога и страницы с проектом
const viewMoreButton = document.getElementById('viewMore');
const projects = document.querySelectorAll('.designStartImg');

viewMoreButton.addEventListener('click', () => {

    for(let designStartImg of projects) {
        designStartImg.style.display = 'inline';
    }
    viewMoreButton.style.display = 'none';
});


// //слайдер с трендами в каталоге
// const slides = document.querySelector('.slides');
// const slideCount = document.querySelectorAll('.slide');
// const prevButton = document.getElementById('left');
// const nextButton = document.getElementById('right');

// let currentIndex = 0;

// let goToSlide = (index) => {
//     if (index < 0) {
//         index = slideCount - 1; 
//     }
//     else if (index >= slideCount) {
//         index = 0; 
//     }
//     currentIndex = index; 
//     slides.style.transform = `translateX(${-index * 100}%)`;
// }
// // Добавляем обработчик клика для кнопки «Назад»
// prevButton.addEventListener('click', () => {
//     goToSlide(currentIndex - 1);
// });

// // Добавляем обработчик клика для кнопки «Вперёд»
// nextButton.addEventListener('click', () => {
//     goToSlide(currentIndex + 1);
// });

// // Устанавливаем первый активный слайд при загрузке страницы
// goToSlide(0);