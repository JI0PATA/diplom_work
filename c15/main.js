const c1 = 0.4;
const c2 = 0.7;

const object1 = document.querySelector('#object1');
const object2 = document.querySelector('#object2');

document.addEventListener('mousemove', ev => {
    object1.style.top = `${ev.clientY * c1}px`;
    object1.style.left = `${ev.clientX * c1}px`;

    object2.style.top = `${ev.clientY * c2}px`;
    object2.style.left = `${ev.clientX * c2}px`;
});