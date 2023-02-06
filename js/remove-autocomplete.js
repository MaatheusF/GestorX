//Remove o autocomplete do input quanto a o atributo autocomplete="off"

document.addEventListener("DOMContentLoaded", function(e) {
let input = document.querySelector('input[autocomplete="off"]');

input.setAttribute('disabled', 'disabled');

setTimeout(function(){
    input.removeAttribute('disabled');
}, 1000)
});