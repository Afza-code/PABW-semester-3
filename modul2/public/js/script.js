document.addEventListener('DOMContentLoaded', () => {
    // Floating Input Animation enhancements
    const inputs = document.querySelectorAll('.floating-input');
    
    inputs.forEach(input => {
        // Initial check in case browser auto-fills
        if (input.value !== '') {
            input.parentElement.classList.add('has-value');
        }

        input.addEventListener('focus', () => {
            input.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', () => {
            input.parentElement.classList.remove('focused');
            if (input.value !== '') {
                input.parentElement.classList.add('has-value');
            } else {
                input.parentElement.classList.remove('has-value');
            }
        });
        
        input.addEventListener('input', () => {
            if (input.value !== '') {
                input.parentElement.classList.add('has-value');
            } else {
                input.parentElement.classList.remove('has-value');
            }
        });
    });

    // Form submission animation
    const form = document.getElementById('reportForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            // Uncomment the next line to prevent submission for testing animation
            // e.preventDefault(); 
            
            const btn = this.querySelector('button[type="submit"]');
            if (btn) {
                // Change button state to loading
                const originalContent = btn.innerHTML;
                const originalWidth = btn.offsetWidth;
                
                btn.style.width = originalWidth + 'px';
                btn.innerHTML = '<span class="loading-spinner"></span><span>Mengirim...</span>';
                btn.style.opacity = '0.9';
                btn.style.pointerEvents = 'none';
                
                // For demonstration: simulate a delay if preventDefault is active
                // setTimeout(() => {
                //     btn.innerHTML = 'Berhasil! 🎉';
                //     btn.style.backgroundColor = 'var(--success)';
                //     setTimeout(() => {
                //         btn.innerHTML = originalContent;
                //         btn.style.pointerEvents = 'auto';
                //         btn.style.opacity = '1';
                //         form.reset();
                //     }, 2000);
                // }, 1500);
            }
        });
    }

    // Animate table rows sequentially on the dashboard page
    const tableRows = document.querySelectorAll('tbody tr');
    if (tableRows.length > 0) {
        tableRows.forEach((row, index) => {
            row.style.opacity = '0';
            row.style.transform = 'translateY(10px)';
            
            // Add animation dynamically
            setTimeout(() => {
                row.style.transition = 'all 0.4s cubic-bezier(0.16, 1, 0.3, 1)';
                row.style.opacity = '1';
                row.style.transform = 'translateY(0)';
            }, 300 + (index * 100)); // Starts after container animates
        });
    }
});
