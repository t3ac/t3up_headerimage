document.addEventListener('DOMContentLoaded', () => {

    function setHeaderImageHeights() {

        const blurImage = document.querySelector('.blurImageContainer .headerimage');
        const overlayE = document.querySelector('.headerimagetyleE .headerimage');
        const overlayH = document.querySelector('.headerimagetyleH .headerimage');

        const blur = document.querySelectorAll('.blur');
        const overlayHeaderE = document.querySelectorAll('.headerimagetyleE .overlayHeaderImage');
        const overlayHeaderH = document.querySelectorAll('.headerimagetyleH .overlayHeaderImage');

        if (blurImage) {
            const height = blurImage.offsetHeight;
            blur.forEach(element => {
                element.style.height = `${height}px`;
            });
        }

        if (overlayE) {
            const height = overlayE.offsetHeight;
            overlayHeaderE.forEach(element => {
                element.style.height = `${height}px`;
            });
        }

        if (overlayH) {
            const height = overlayH.offsetHeight;
            overlayHeaderH.forEach(element => {
                element.style.height = `${height}px`;
            });
        }
    }

    // Initial ausführen
    setHeaderImageHeights();

    // Bei Größenänderung aktualisieren
    window.addEventListener('resize', setHeaderImageHeights);

});
