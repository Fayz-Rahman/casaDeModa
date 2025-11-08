import './bootstrap';

const ready = (callback) => {
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', callback, { once: true });
	} else {
		callback();
	}
};

ready(() => {
	const body = document.body;
	const html = document.documentElement;
	const cartDrawer = document.querySelector('[data-cart-drawer]');
	const cartOverlay = document.querySelector('[data-cart-overlay]');
	const cartOpeners = document.querySelectorAll('[data-cart-toggle]');
	const cartClosers = document.querySelectorAll('[data-cart-close]');
	const cartToast = document.querySelector('[data-cart-toast]');

	const mobileNav = document.querySelector('[data-mobile-nav]');
	const mobileToggle = document.querySelector('[data-mobile-toggle]');
	const mobileSearchButton = document.querySelector('[data-mobile-search]');
	const desktopSearchInput = document.querySelector('header input[name="search"]');

	const syncScrollLock = () => {
		if (body.classList.contains('cart-open') || body.classList.contains('mobile-nav-open')) {
			body.classList.add('overflow-hidden');
			html.classList.add('overflow-hidden');
		} else {
			body.classList.remove('overflow-hidden');
			html.classList.remove('overflow-hidden');
		}
	};

	const openCart = () => {
		if (!cartDrawer || !cartOverlay) {
			return;
		}

		cartDrawer.classList.remove('translate-x-full');
		cartOverlay.classList.remove('opacity-0', 'pointer-events-none');
		body.classList.add('cart-open');
		syncScrollLock();
	};

	const closeCart = () => {
		if (!cartDrawer || !cartOverlay) {
			return;
		}

		cartDrawer.classList.add('translate-x-full');
		cartOverlay.classList.add('opacity-0', 'pointer-events-none');
		body.classList.remove('cart-open');
		syncScrollLock();
	};

	cartOpeners.forEach((trigger) => {
		trigger.addEventListener('click', (event) => {
			event.preventDefault();
			openCart();
		});
	});

	cartClosers.forEach((trigger) => {
		trigger.addEventListener('click', (event) => {
			event.preventDefault();
			closeCart();
		});
	});

	cartOverlay?.addEventListener('click', closeCart);

	window.addEventListener('keydown', (event) => {
		if (event.key === 'Escape') {
			closeCart();
			if (mobileNav && !mobileNav.hasAttribute('hidden')) {
				mobileNav.setAttribute('hidden', '');
				mobileToggle?.classList.remove('is-open');
				mobileToggle?.querySelector('i')?.classList.replace('fa-xmark', 'fa-bars');
				body.classList.remove('mobile-nav-open');
				syncScrollLock();
			}
		}
	});

	if (window.__openCartOnLoad) {
		openCart();
	}

	if (cartToast) {
		setTimeout(() => {
			cartToast.classList.add('opacity-0', 'translate-y-2');
			setTimeout(() => cartToast.parentElement?.remove(), 200);
		}, 3500);
	}

	const closeMobileNav = () => {
		if (!mobileNav) {
			return;
		}

		mobileNav.setAttribute('hidden', '');
		mobileToggle?.classList.remove('is-open');
		mobileToggle?.querySelector('i')?.classList.replace('fa-xmark', 'fa-bars');
		body.classList.remove('mobile-nav-open');
		syncScrollLock();
	};

	if (mobileToggle && mobileNav) {
		mobileToggle.addEventListener('click', () => {
			const isOpen = !mobileNav.hasAttribute('hidden');
			if (isOpen) {
				closeMobileNav();
			} else {
				mobileNav.removeAttribute('hidden');
				mobileToggle.classList.add('is-open');
				mobileToggle.querySelector('i')?.classList.replace('fa-bars', 'fa-xmark');
				body.classList.add('mobile-nav-open');
				syncScrollLock();
			}
		});

		mobileNav.querySelectorAll('a').forEach((link) => {
			link.addEventListener('click', closeMobileNav);
		});
	}

	if (mobileSearchButton && desktopSearchInput) {
		mobileSearchButton.addEventListener('click', () => {
			desktopSearchInput.focus();
			desktopSearchInput.scrollIntoView({ behavior: 'smooth', block: 'center' });
		});
	}
});
