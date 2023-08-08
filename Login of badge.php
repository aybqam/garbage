<script>

   // Hide the badge
   var badge = document.getElementById('favBadge');
   badge.style.display = 'none';

</script>


 <script>
    
        const loginItem = document.getElementById('login-item');
        const logoutItem = document.getElementById('logout-item');
        const usernameItem = document.getElementById('username-item');
        const dropdownMenu = document.querySelector('.dropdown-menu');

        dropdownMenu.addEventListener('click', (event) => {
            if (event.target.textContent === 'Login') {

                // Get the badge element
                var badge = document.getElementById('favBadge');

                // Get the number of items in the off-canvas menu
                var numItems = document.querySelectorAll('.offcanvas-body .modal-header').length;

                // Update the badge number
                badge.textContent = numItems;

                // Hide the badge if there are no items
                if (numItems === 0) {
                    badge.style.display = 'none';
                }

                // Get the number of items in the off-canvas menu
                function updateBadge() {
                    var numItems = document.querySelectorAll('.offcanvas-body .modal-header').length;

                    // Update the badge number
                    badge.textContent = numItems;

                    // Hide the badge if there are no items
                    if (numItems === 0) {
                        badge.style.display = 'none';
                    } else {
                        badge.style.display = 'inline-block';
                    }
                }

                // Add click event listener to close buttons
                var closeButtons = document.querySelectorAll('.btn-close');
                for (var i = 0; i < closeButtons.length; i++) {
                    closeButtons[i].addEventListener('click', function() {
                        var itemId = this.getAttribute('data-item-id');

                        // Remove the item from the DOM
                        var item = document.getElementById(itemId);
                        if (item) {
                            item.remove();
                        }

                        // Update the badge number
                        updateBadge();
                    });
                }

                // Update the badge number
                badge.textContent = numItems;

                // Show the badge
                badge.style.display = 'inline-block';




                const username = 'Logout';
                if (username) {
                    loginItem.classList.add('d-none');
                    logoutItem.classList.remove('d-none');
                    usernameItem.classList.remove('d-none');
                    usernameItem.querySelector('a').textContent = username;
                }
            } else if (event.target.textContent === 'Logout') {

                // Hide the badge
                var badge = document.getElementById('favBadge');
                badge.style.display = 'none';


                loginItem.classList.remove('d-none');
                logoutItem.classList.add('d-none');
                usernameItem.classList.add('d-none');
            }
        });

    </script>
