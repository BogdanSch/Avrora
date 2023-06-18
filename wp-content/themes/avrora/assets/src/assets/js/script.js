$(document).ready(() => {
	$('select').niceSelect();

	$('.button-popup').magnificPopup({
		mainClass: 'mfp-fade',
		fixedContentPos: true,
		callbacks: {
			open: () => {
				$('.main').addClass('scroll-lock');
			},
			close: () => {
				$('.main').removeClass('scroll-lock');
			}
		}
	});
})

// Toggle class for element
const toggleClass = (item, className) => {
	if(item === null) { return; }
	
	item.classList.toggle(className);
}

// Toggle Active Checkbox
const toggleCheckboxes = () => {
	const inputs = document.querySelectorAll('input[type=checkbox]');

	if(!inputs.length > 0) { return; }

	inputs.forEach(input => {
		input.addEventListener('click', () => {
			toggleClass(input.parentElement, 'active')
		})
	})
}

// Toggle Active Filter
const toggleFilter = () => {
	const button = document.querySelector('.jobs .button-toggle'),
				filter = document.querySelector('.jobs__filter');

	if(button === null && filter === null) { return; }

	const originalButtonText = button.textContent;

	button.addEventListener('click', (event) => {
		event.preventDefault();
		const activeButtonText = button.getAttribute('data-active'),
					condition =	button.textContent === originalButtonText ? activeButtonText : originalButtonText;
		
		button.textContent = condition;
		toggleClass(button, 'active');
		toggleClass(filter.parentElement, 'active');
	})

	document.addEventListener('click', (event) => {
		if(!button.classList.contains('active')) { return; }
		
		const withinFilter = event.composedPath().includes(filter),
	 				withinButton= event.composedPath().includes(button);
	 
		if (!withinFilter && !withinButton) {
			button.textContent = originalButtonText;
			toggleClass(button, 'active');
			toggleClass(filter.parentElement, 'active');
		}
	})
}

// Toggle Mobile Header Menu
const toggleHeaderMenu = () => {
	const menu = document.querySelector('.header nav'),
				burger = document.querySelector('.header .button-burger'),
				html = document.querySelector('html');

	if(!menu === null && !burger === null) { return; }

	burger.addEventListener('click', (event) => {
		event.preventDefault();
		toggleClass(menu, 'active');
		toggleClass(burger, 'active');
		toggleClass(html, 'scroll-lock');
	})
}

// Show/Hide Managers phone number
const togglePhoneVisibility = () => {
	const phones = document.querySelectorAll('[href*=tel][data-value]');

	if(!phones.length > 0) { return; }

	phones.forEach(phone => {
		phone.addEventListener('click', (event) => {
			if(!phone.classList.contains('active')) {
				event.preventDefault();
				phone.textContent = phone.getAttribute('data-value');
			}

			phone.classList.add('active');
		})
	})
}

window.onload = () => {
	toggleHeaderMenu();
	toggleCheckboxes();
	toggleFilter();
	togglePhoneVisibility();
}