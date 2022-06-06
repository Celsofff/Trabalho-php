function estrangeira() {
    document.getElementById("pessoa").style.display = "block"
    document.getElementById("estrangeira").style.display = "block"
    document.getElementById("fisica").style.display = "none"
    document.getElementById("juridica").style.display = "none"

    document.getElementById("button").style.display = "block"
    document.getElementById("button").value = "estrangeira"
}

function fisica() {
    document.getElementById("pessoa").style.display = "block"
    document.getElementById("estrangeira").style.display = "none"
    document.getElementById("fisica").style.display = "block"
    document.getElementById("juridica").style.display = "none"

    document.getElementById("button").style.display = "block"
    document.getElementById("button").value = "fisica"
}

function juridica() {
    document.getElementById("pessoa").style.display = "block"
    document.getElementById("estrangeira").style.display = "none"
    document.getElementById("fisica").style.display = "none"
    document.getElementById("juridica").style.display = "block"

    document.getElementById("button").style.display = "block"
    document.getElementById("button").value = "juridica"
}