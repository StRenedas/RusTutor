const dragAndDrop = () => {
    const words = document.querySelectorAll('.wordplace');
    const cells = document.querySelectorAll('.dropplace');


    const dragStart = function () {
    };
    const dragEnd = function () {
    };
    const dragOver = function (e) {
        e.preventDefault();
    };
    const dragEnter = function () {
    };
    const dragLeave = function () {
    };
    const dragDrop = function () {
        console.log('drop');
        this.append(words);
    };


    cells.forEach((cell) => {
        cell.addEventListener('dragover',dragOver);
        cell.addEventListener('dragenter',dragEnter);
        cell.addEventListener('dragleave', dragLeave);
        cell.addEventListener('drop', dragDrop);
    });

    words.forEach((word) => {
        word.addEventListener('dragstart', dragStart);
        word.addEventListener('dragend', dragEnd);
    });
};
dragAndDrop();