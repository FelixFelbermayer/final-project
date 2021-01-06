import './sass/styles.scss';
require.context('./images', true);
document.addEventListener("DOMContentLoaded", () => {
const navslide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.burgermenu');
    burger.addEventListener('click',() => {
        if (nav.style.transform=="translate(0%)") {
            nav.style.transform="translateX(100%)";
            burger.classList.remove("is-active");
            
        } else {
            nav.style.transform="translate(0%)"
            burger.classList.add("is-active");
        }
        
    });
}

navslide();
})

