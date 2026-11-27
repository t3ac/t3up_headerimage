document.addEventListener('DOMContentLoaded', () => {

    function setHeaderImageHeights() {

        const bbox = document.querySelector('.blurImageContainer .headerimage')?.offsetHeight || 0;
        const obox = document.querySelector('.headerimagetyleE .headerimage')?.offsetHeight || 0;
        const hbox = document.querySelector('.headerimagetyleH .headerimage')?.offsetHeight || 0;

        document.querySelectorAll('.blur').forEach(el => {
            el.style.height = bbox + 'px';
        });

        document.querySelectorAll('.headerimagetyleE .overlayHeaderImage').forEach(el => {
            el.style.height = obox + 'px';
        });

        document.querySelectorAll('.headerimagetyleH .overlayHeaderImage').forEach(el => {
            el.style.height = hbox + 'px';
        });
    }

    // Initial ausführen
    setHeaderImageHeights();

    // Bei Größenänderung aktualisieren
    window.addEventListener('resize', setHeaderImageHeights);

});
