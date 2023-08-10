
function mostrarTerciarias(select) {
    var terciariasDivs = document.querySelectorAll('.terciarias');
    for (var i = 0; i < terciariasDivs.length; i++) {
        terciariasDivs[i].classList.remove('show-terciarias');
    }
    var selectedOption = select.options[select.selectedIndex].value;
    if (selectedOption !== "") {
        var terciariasDiv = document.getElementById(selectedOption + "Terciarias");
        terciariasDiv.classList.add('show-terciarias');
    }
}

