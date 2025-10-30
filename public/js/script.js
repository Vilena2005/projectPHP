const openModalButton = document.getElementById('openModal');
const closeModalButton = document.getElementById('buttonClose');

openModalButton.addEventListener('click', () => {
    const modalWrap = document.getElementById('modalWrapper');
    modalWrap.classList.toggle("modal-show");

    closeModalButton.addEventListener('click', () => {
        modalWrap.classList.remove("modal-show");
    });
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


