let callSchedule = document.getElementById("call_schedule");
let btnCallSchedule = document.getElementById("btnCallSchedule");

let btnGroupsBlock = document.getElementById("btnGroupsBlock");
let groupsBlock = document.getElementById("groupsBlock");

btnCallSchedule.onclick = function () {
    callSchedule.style.display = "block";
    groupsBlock.style.display = "none";
}


btnGroupsBlock.onclick = function () {
    callSchedule.style.display = "none";
    groupsBlock.style.display = "block";
}