import './bootstrap';

// dropdown web
document.addEventListener('DOMContentLoaded', function() {
    const userMenuButton = document.getElementById('user-menu-button');
    const userMenu = document.getElementById('user-menu');

    userMenuButton.addEventListener('click', function() {
      userMenu.classList.toggle('hidden');
    });

    document.addEventListener('click', function(event) {
      if (!userMenuButton.contains(event.target) && !userMenu.contains(event.target)) {
        userMenu.classList.add('hidden');
      }
    });
  });

  // mobile menu
  document.getElementById('mobile-menu').addEventListener('click', function() {
    var menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
  });
//alert register success
  