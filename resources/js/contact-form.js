document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');

    if (form) {
        form.addEventListener('submit', function(e) {
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();

            if (!name || !email || !message) {
                e.preventDefault();
                alert('Please fill in all fields');
                return false;
            }

            const submitButton = form.querySelector('button[type="submit"]');
            submitButton.disabled = true;
            submitButton.innerHTML = 'Sending...';
        });
    }
});


document.addEventListener('DOMContentLoaded', function() {
    const totalMessages = window.contactData?.totalMessages || 0;

    const form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();

            if (!name || !email || !message) {
                e.preventDefault();
                alert('Please fill in all fields');
                return false;
            }

            const submitButton = form.querySelector('button[type="submit"]');
            if (submitButton) {
                submitButton.disabled = true;
                submitButton.innerHTML = 'Sending...';
            }
        });
    }

    const alert = document.getElementById('successAlert');
    if (alert) {
        setTimeout(function() {
            alert.style.opacity = '0';
            alert.style.transform = 'scale(0.95)';
            setTimeout(function() {
                alert.style.display = 'none';
            }, 300);
        }, 5000);
    }

    let visibleCount = 5;

    function showMore() {
        const rows = document.querySelectorAll('.message-row');
        const newVisibleCount = Math.min(visibleCount + 5, totalMessages);

        for (let i = visibleCount; i < newVisibleCount; i++) {
            if (rows[i]) {
                rows[i].classList.remove('hidden');
                rows[i].style.opacity = '0';
                rows[i].style.transform = 'translateY(20px)';

                setTimeout(function() {
                    rows[i].style.transition = 'all 0.3s ease';
                    rows[i].style.opacity = '1';
                    rows[i].style.transform = 'translateY(0)';
                }, 50);
            }
        }

        visibleCount = newVisibleCount;
        updateButtons();
        updateCounter();
    }

    function showLess() {
        const rows = document.querySelectorAll('.message-row');
        const newVisibleCount = Math.max(5, visibleCount - 5);

        for (let i = newVisibleCount; i < visibleCount; i++) {
            if (rows[i]) {
                rows[i].style.transition = 'all 0.3s ease';
                rows[i].style.opacity = '0';
                rows[i].style.transform = 'translateY(-20px)';

                setTimeout(function() {
                    rows[i].classList.add('hidden');
                }, 300);
            }
        }

        visibleCount = newVisibleCount;
        updateButtons();
        updateCounter();
    }

    function updateButtons() {
        const showMoreBtn = document.getElementById('showMoreBtn');
        const showLessBtn = document.getElementById('showLessBtn');

        if (showMoreBtn) {
            showMoreBtn.classList.toggle('hidden', visibleCount >= totalMessages);
        }

        if (showLessBtn) {
            showLessBtn.classList.toggle('hidden', visibleCount <= 5);
        }
    }

    function updateCounter() {
        const visibleCountSpan = document.getElementById('visibleCount');
        if (visibleCountSpan) {
            visibleCountSpan.textContent = visibleCount;
        }
    }

    window.closeAlert = function() {
        const alert = document.getElementById('successAlert');
        if (alert) {
            alert.style.opacity = '0';
            alert.style.transform = 'scale(0.95)';
            setTimeout(function() {
                alert.style.display = 'none';
            }, 300);
        }
    };

    window.showMore = showMore;
    window.showLess = showLess;

    updateButtons();
    updateCounter();
});
