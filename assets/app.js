import './styles/app.css';

function splitArray(array, chunkSize) {
    if (!Array.isArray(array)) {
        throw new Error('L\'argument fourni n\'est pas un tableau');
    }

    const resultNomCollab = [];
    for (let i = 0; i < array.length; i += chunkSize) {
        const chunk = array.slice(i, i + chunkSize);
        resultNomCollab.push(chunk);
    }
    return resultNomCollab;
}

function shuffle(array) {
    let currentIndex = array.length;

    // While there remain elements to shuffle...
    while (currentIndex != 0) {

        // Pick a remaining element...
        let randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex--;

        // And swap it with the current element.
        [array[currentIndex], array[randomIndex]] = [
        array[randomIndex], array[currentIndex]];
    }
}

document.addEventListener('DOMContentLoaded', function(){

    const tableauNomCollab = Array.from(document.querySelectorAll('.list-info-collab > li'))
    
    const splitArrays = splitArray(tableauNomCollab, 10)

    // permet de réduire l'opacité de chaque nom de collab
    for (let index = 0; index < splitArrays.length; index++) {
        const tableauElement = splitArrays[index];
        var opacity = 1;
        var valeurChange = opacity / (tableauElement.length + 4 );
        for (let index = 0; index < tableauElement.length; index++) {
            var element = tableauElement[index];
            opacity = opacity - valeurChange;
            element.style.opacity = opacity;
        }
    }

    var nomCollabShoes = Array.from(document.querySelectorAll('.list-collab-name-element'))

})
