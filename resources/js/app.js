import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// We need to click #mobile-nav-btn and toggle the mobile navigation #mobile-nav.
function toggleMobileNav() {
    const mobileNavBtn = document.getElementById('mobile-nav-btn');
    const mobileNav = document.getElementById('mobile-nav');
    mobileNavBtn.addEventListener('click', () => {
        mobileNav.classList.toggle('hidden');
    });
}

function hideMobileNav() {
    const mobileNav = document.getElementById('mobile-nav');
    const mobileNavBtn = document.getElementById('mobile-nav-close-btn');
    mobileNavBtn.addEventListener('click', () => {
        mobileNav.classList.add('hidden');
    });
}

toggleMobileNav();
hideMobileNav();


ClassicEditor
.create( document.querySelector( '#editor' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic'],
        placeholder: 'Escribe tu contenido aquí...'
} )
.then( editor => {

    editor.model.document.on( 'change:data', () => {
        let input = document.querySelector( '#postContent' );
        input.value = editor.getData();
    });
} )
.catch( error => {
        console.error( error );
} );