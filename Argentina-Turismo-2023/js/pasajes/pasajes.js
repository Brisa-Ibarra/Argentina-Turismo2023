function confirmLogout(event) {
    event.preventDefault(); // Evita el comportamiento predeterminado del enlace
    $('#logoutModal').modal('show');
}

var btnsToggle = document.querySelectorAll('.btn-toggle');
btnsToggle.forEach(function(btn) {
    btn.addEventListener('click', function() {
        var target = document.querySelector(this.getAttribute('data-target'));
        target.classList.toggle('show');
        this.textContent = target.classList.contains('show') ? 'Ocultar descripción' : 'Ver descripción';
    });
});
function highlightCard(button) {
    var card = button.closest('.card');
    card.classList.toggle('card-active');
}
function highlightCard(button) {
    var card = button.closest('.card');
    card.classList.toggle('card-expand');
}
const checkbox = document.getElementById('ida-vuelta-checkbox');
const fechaVueltaInput = document.getElementById('fecha-vuelta-input');

checkbox.addEventListener('change', function() {
    fechaVueltaInput.disabled = !this.checked;
    fechaVueltaInput.required = this.checked;
});