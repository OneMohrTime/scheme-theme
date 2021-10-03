// =============================================================================
// Modules: Example
// =============================================================================
// ...

// Import dependencies
// =============================================================================
import { module as modujsModule } from 'modujs';
import Swiper, { Navigation, Pagination } from 'swiper';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Set default function and extend it ontop of our imported 'module'
// =============================================================================
export default class extends modujsModule {
// Set initial values
// =========================================================================
constructor(m) {
	super(m);

	// Defaults
	this.swiper = null;
}

// Init module
// =========================================================================
init() {
	// Defaults

	// configure Swiper to use modules
	Swiper.use([Navigation, Pagination]);

	// Init Swiper
	this.swiper = new Swiper( this.el, {
		// Optional parameters
		// direction: 'vertical',
		// loop: true,
		keyboard: true,

		// If we need pagination
		pagination: {
			el: '.swiper-pagination',
		},

		// Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},

		// And if we need scrollbar
		scrollbar: {
			el: '.swiper-scrollbar',
		},
	});
}

// Destroy
// =========================================================================
destroy() {}
}
