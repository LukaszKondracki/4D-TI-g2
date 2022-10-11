const btn = document.getElementById('theme');
const html = document.getElementsByTagName('html')[0];

if (window.localStorage.getItem('theme') === 'light') {
    html.classList.add('light');
} else {
    html.classList.remove('light');
}

btn.addEventListener('click', () => {

    if (html.classList.contains('light')) {
        html.classList.remove('light');
        btn.innerText = '🌞';
        window.localStorage.setItem('theme', 'dark');
    } else {
        html.classList.add('light');
        btn.innerText = '🌚';
        window.localStorage.setItem('theme', 'light');
    }

});

// Cookies       ->  wysyłane z żądaniami, można ustawiać z serwera
// LocalStorage  ->  tylko po stronie klienta
// IndexedDB     ->  prosta baza danych w przeglądarce
// WebSQL        ->  relacyjna baza danych w przeglądarce