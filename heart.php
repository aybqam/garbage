
var doubleClickTime = 0;
var doubleClickDelay = 300; // Adjust this value to change the double-click delay

function toggleLove(loveID) {
    var icon = document.getElementById(loveID);
    var currentTime = new Date().getTime();

    if (document.getElementById("username-item").classList.contains('d-none')) {

        swal(
            'Warning!',
            'Please login before adding to favorites!',
            'warning'
        );

    } else {

        if (currentTime - doubleClickTime < doubleClickDelay) {
            // Double click
            icon.classList.add('bi-heart-fill');
            icon.classList.remove('bi-heart');
        } else {
            // Single click
            icon.classList.toggle('bi-heart-fill');
            icon.classList.toggle('bi-heart');
        }

        doubleClickTime = currentTime;
    }
}
