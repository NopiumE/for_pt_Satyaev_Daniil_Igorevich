const knopka = document.getElementById('knopka');
const kartinka = document.getElementById('kartinka');

knopka.addEventListener('click', () => {
    if (kartinka.style.display === 'none') {
        kartinka.style.display = 'block';
        knopka.textContent = 'Скрыть картинку';
    } else {
        kartinka.style.display = 'none';
        knopka.textContent = 'Показать картинку';
    }
});