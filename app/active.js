console.log("ja sam docs-mobile-nav.js");

/* Mobile nav */

const opener = document.querySelector('.hamburger')
const closer = document.querySelector('.close')
const nav = document.getElementById('navbar')

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