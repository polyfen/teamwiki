console.log("ja sam docs-mobile-nav.js");

/* Mobile nav */

const opener = document.querySelector('.hamburger')
const closer = document.querySelector('.close')
const nav = document.getElementById('navbar')
let navItems = navbar.querySelectorAll("li");


opener.addEventListener('click', () => {
	nav.classList.add('open-nav')
	closer.classList.add('open-nav')
	opener.classList.add('close-nav')
})
closer.addEventListener('click', () => {
	nav.classList.remove('open-nav')
	closer.classList.remove('open-nav')
	opener.classList.remove('close-nav')
})

if (window.innerWidth <= 768) {
navItems.addEventListener('click', () => {
	nav.classList.remove('open-nav')
	closer.classList.remove('open-nav')
	opener.classList.remove('close-nav')
})
}





function toggle() {
    if (window.innerWidth <= 768) {
        // Verificar si la clase 'open-nav' está presente
        if (navbar.classList.contains('open-nav')) {
            // Si sí, quitar 'open-nav' y agregar 'close-nav'
            navbar.classList.remove('open-nav');
            navbar.classList.add('close-nav');
        } else {
            // Si no, quitar 'close-nav' y agregar 'open-nav'
            navbar.classList.remove('close-nav');
            navbar.classList.add('open-nav');
        }
    }
}






/* Mobile nav Scroll observer */
const menuItems = document.querySelectorAll('#navbar ul li a');
const observer = new IntersectionObserver((entries) => {
	entries.forEach((entry) => {
		const targetId = entry.target.getAttribute('id');
		if (entry.isIntersecting) {
			menuItems.forEach((menuItem) => {
				menuItem.classList.remove('active');
				if (menuItem.getAttribute('href') === `#${targetId}`) {
					menuItem.classList.add('active');
				}
			});
		}
	});
}, {
	threshold: 0.3
});

const sections = document.querySelectorAll('section');
sections.forEach((section) => {
	observer.observe(section);
});