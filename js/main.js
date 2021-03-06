// alert('hello!');

let headerButton = document.getElementById('headerButton');
let brandButton = document.getElementById('brandButton');
let overlayWrapper = document.getElementById('overlayWrapper');
let buttonIcon = document.getElementById('buttonIcon');

headerButton.addEventListener('click', function() {
	overlayWrapper.classList.toggle('display-flex');
	if(overlayWrapper.classList.contains('display-flex')) {
		buttonIcon.style.fill = 'var(--dark-pink)';
	} else {
		buttonIcon.style.fill = 'var(--white)';
	}
})

brandButton.addEventListener('click', function() {
	overlayWrapper.classList.remove('display-flex');
	buttonIcon.style.fill = 'var(--white)';
})