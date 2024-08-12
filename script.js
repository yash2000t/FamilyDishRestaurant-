document.addEventListener('DOMContentLoaded', function() {
    const bookingForm = document.getElementById('bookingForm');
    const contactForm = document.getElementById('contactForm');
    const reviewForm = document.getElementById('reviewForm');

    if (bookingForm) {
        bookingForm.addEventListener('submit', function(event) {
            if (!validateBookingForm()) {
                event.preventDefault();
            }
        });
    }

    if (contactForm) {
        contactForm.addEventListener('submit', function(event) {
            if (!validateContactForm()) {
                event.preventDefault();
            }
        });
    }

    if (reviewForm) {
        reviewForm.addEventListener('submit', function(event) {
            if (!validateReviewForm()) {
                event.preventDefault();
            }
        });
    }
});

function validateBookingForm() {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;
    const guests = document.getElementById('guests').value;

    if (!name || !email || !phone || !date || !time || !guests) {
        alert('All fields are required.');
        return false;
    }

    const emailPattern = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
    if (!emailPattern.test(email)) {
        alert('Please enter a valid email address.');
        return false;
    }

    const phonePattern = /^[0-9]+$/;
    if (!phonePattern.test(phone)) {
        alert('Please enter a valid phone number.');
        return false;
    }

    const selectedDate = new Date(date + ' ' + time);
    const currentDate = new Date();
    if (selectedDate <= currentDate) {
        alert('Please select a future date and time.');
        return false;
    }

    const openingTime = new Date(selectedDate);
    openingTime.setHours(11, 0, 0);
    const closingTime = new Date(selectedDate);
    closingTime.setHours(23, 0, 0);

    if (selectedDate < openingTime || selectedDate > closingTime) {
        alert('Please select a time within our operating hours (11:00 AM - 11:00 PM).');
        return false;
    }

    if (guests < 1 || guests > 12) {
        alert('Please select a number of guests between 1 and 12.');
        return false;
    }

    return true;
}

function validateContactForm() {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const message = document.getElementById('message').value.trim();

    if (!name || !email || !phone || !message) {
        alert('All fields are required.');
        return false;
    }

    const emailPattern = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
    if (!emailPattern.test(email)) {
        alert('Please enter a valid email address.');
        return false;
    }

    const phonePattern = /^[0-9]+$/;
    if (!phonePattern.test(phone)) {
        alert('Please enter a valid phone number.');
        return false;
    }

    return true;
}

function validateReviewForm() {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const rating = document.getElementById('rating').value;
    const comments = document.getElementById('comments').value.trim();

    if (!name || !email || !rating || !comments) {
        alert('All fields are required.');
        return false;
    }

    const emailPattern = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
    if (!emailPattern.test(email)) {
        alert('Please enter a valid email address.');
        return false;
    }

    if (rating < 1 || rating > 5) {
        alert('Please select a rating between 1 and 5.');
        return false;
    }

    return true;
}
