document.addEventListener('DOMContentLoaded', function() {
    // Filter buttons functionality
    const filterButtons = document.querySelectorAll('.btn-view');
    const tableRows = document.querySelectorAll('#requestsTable tbody tr');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');
            
            const filterValue = button.getAttribute('data-filter');
            
            // Show/hide rows based on filter
            tableRows.forEach(row => {
                const status = row.getAttribute('data-status');
                if (filterValue === 'all' || status === filterValue) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });

    // Search functionality
    const searchInput = document.querySelector('.search-box input');
    
    searchInput.addEventListener('input', (e) => {
        const searchTerm = e.target.value.toLowerCase();
        
        tableRows.forEach(row => {
            const name = row.querySelector('.user-name').textContent.toLowerCase();
            const email = row.querySelector('.user-email').textContent.toLowerCase();
            
            if (name.includes(searchTerm) || email.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });

    // Approve/Reject functionality
    const actionButtons = document.querySelectorAll('.btn-action:not([disabled])');
    
    actionButtons.forEach(button => {
        button.addEventListener('click', function() {
            const row = this.closest('tr');
            const userName = row.querySelector('.user-name').textContent;
            const statusCell = row.querySelector('.status');
            const actionsCell = row.querySelector('.actions');
            
            if (this.classList.contains('approve')) {
                handleApproval(row, statusCell, actionsCell, userName);
            } else if (this.classList.contains('reject')) {
                handleRejection(row, statusCell, actionsCell, userName);
            }
        });
    });

    function handleApproval(row, statusCell, actionsCell, userName) {
        // Update status
        statusCell.className = 'status approved';
        statusCell.textContent = 'Approved';
        
        // Update row status
        row.setAttribute('data-status', 'approved');
        
        // Update actions
        actionsCell.innerHTML = `
            <button class="btn-action" disabled>
                <i class="fas fa-check"></i>
                Approved
            </button>
        `;
        
        // Update pending count
        updatePendingCount();
        
        // Show notification
        showNotification(`${userName}'s account request has been approved`);
    }

    function handleRejection(row, statusCell, actionsCell, userName) {
        // Update status
        statusCell.className = 'status rejected';
        statusCell.textContent = 'Rejected';
        
        // Update row status
        row.setAttribute('data-status', 'rejected');
        
        // Update actions
        actionsCell.innerHTML = `
            <button class="btn-action" disabled>
                <i class="fas fa-times"></i>
                Rejected
            </button>
        `;
        
        // Update pending count
        updatePendingCount();
        
        // Show notification
        showNotification(`${userName}'s account request has been rejected`);
    }

    function updatePendingCount() {
        const pendingCount = document.querySelectorAll('tr[data-status="pending"]').length;
        const requestCount = document.querySelector('.request-count');
        requestCount.textContent = `${pendingCount} requests`;
    }

    function showNotification(message) {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = 'notification';
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: #1F2937;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            z-index: 1000;
            opacity: 0;
            transform: translateY(-20px);
            transition: all 0.3s ease;
        `;
        notification.textContent = message;
        
        // Add to document
        document.body.appendChild(notification);
        
        // Trigger animation
        setTimeout(() => {
            notification.style.opacity = '1';
            notification.style.transform = 'translateY(0)';
        }, 100);
        
        // Remove after delay
        setTimeout(() => {
            notification.style.opacity = '0';
            notification.style.transform = 'translateY(-20px)';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 3000);
    }

    // Pagination functionality
    const prevButton = document.querySelector('.btn-nav:first-child');
    const nextButton = document.querySelector('.btn-nav:last-child');
    const pageInfo = document.querySelector('.pagination span');
    
    let currentPage = 1;
    const rowsPerPage = 5;
    const totalPages = Math.ceil(tableRows.length / rowsPerPage);

    function updatePagination() {
        // Update page info
        pageInfo.textContent = `Page ${currentPage} of ${totalPages}`;
        
        // Update button states
        prevButton.disabled = currentPage === 1;
        nextButton.disabled = currentPage === totalPages;
        
        // Show/hide rows
        tableRows.forEach((row, index) => {
            if (index >= (currentPage - 1) * rowsPerPage && index < currentPage * rowsPerPage) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    prevButton.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            updatePagination();
        }
    });

    nextButton.addEventListener('click', () => {
        if (currentPage < totalPages) {
            currentPage++;
            updatePagination();
        }
    });

    // Initialize pagination
    updatePagination();
});