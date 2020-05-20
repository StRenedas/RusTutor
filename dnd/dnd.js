const draggable = document.querySelectorAll(".wordplace");
const droppable = document.querySelectorAll('.dropplace');

draggable.forEach(elem => {
    elem.addEventListener("dragstart", dragStart);
});

droppable.forEach(elem => {
    elem.addEventListener("dragover", dragOver);
    elem.addEventListener("drop", drop);
});

function dragStart(e) {
    e.dataTransfer.setData("text", event.target.innerHTML);
    e.dataTransfer.setData("name", event.target.getAttribute("name"))
}

function dragOver(e) {
    e.preventDefault();
}

function drop(e) {
    e.preventDefault();
    const draggableElementText = event.dataTransfer.getData("text");
    const draggableElementName = event.dataTransfer.getData("name")
    event.target.innerHTML = draggableElementText;
    event.target.setAttribute("name", draggableElementName);
    console.log(droppable[0].getAttribute('name'))
}
console.log(draggable[0].getAttribute('name'))