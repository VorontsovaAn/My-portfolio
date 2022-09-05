let modalAuth = document.getElementById("myModalAuth");
let btnAuth = document.getElementById("myBtnAuth");
let spanAuth = document.getElementsByClassName("closeAuth")[0];

btnAuth.onclick = function () {
    modalAuth.style.display = "block"
}
spanAuth.onclick = function () {
    modalAuth.style.display = "none"
}

window.onclick = function (event) {
    if (event.target == modalAuth) {
         modalAuth.style.display = "none" 
        }
    if (event.target == modalReg) {
         modalReg.style.display = "none" 
        }
}
let modalReg = document.getElementById("myModalReg");
let btnReg = document.getElementById("myBtnReg");
let spanReg = document.getElementsByClassName("closeReg")[0];

btnReg.onclick = function () {
     modalReg.style.display = "block" 
    }
spanReg.onclick = function () {
     modalReg.style.display = "none" 
    }