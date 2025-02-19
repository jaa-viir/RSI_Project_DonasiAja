<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account Requests - Admin Dashboard</title>
    <link rel="stylesheet" href="css/adminuserreq.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="main-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <span class="logo-blue">Donasi</span><span class="logo-orange">Aja!</span>
            </div>
            
            <div class="menu-item">Admin Dashboard</div>
            <div class="menu-item active">Account Requests</div>
            
            <div class="menu-item with-icon">
                <i class="far fa-calendar"></i>
                Event
            </div>
            
            <div class="menu-item with-icon">
                <i class="far fa-comment"></i>
                Testimoni
            </div>
            
            <div class="menu-item with-icon">
                <i class="fas fa-cog"></i>
                Settings
            </div>
            
            <div class="logout">
                <i class="fas fa-sign-out-alt"></i>
                Logout
            </div>
        </div>

        <!-- Main Content -->
        <div class="content">
            <div class="header">
                <div class="title-group">
                    <h1>User Account Requests</h1>
                    <i class="fas fa-user-plus"></i>
                </div>
                <div class="request-info">
                    <span>Pending Requests</span>
                    <div class="request-count">24 requests</div>
                </div>
            </div>

            <div class="controls">
                <div class="view-controls">
                    <button class="btn-view active" data-filter="all">All Requests</button>
                    <button class="btn-view" data-filter="pending">Pending</button>
                    <button class="btn-view" data-filter="approved">Approved</button>
                    <button class="btn-view" data-filter="rejected">Rejected</button>
                </div>
                <div class="search-controls">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search by name or email">
                    </div>
                </div>
            </div>

            <div class="table-wrapper">
                <table id="requestsTable">
                    <thead>
                        <tr>
                            <th>User Information</th>
                            <th>Request Date</th>
                            <th>User Type</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-status="pending">
                            <td>
                                <div class="user-info">
                                    <div class="user-avatar">JD</div>
                                    <div class="user-details">
                                        <span class="user-name">John Doe</span>
                                        <span class="user-email">john.doe@example.com</span>
                                    </div>
                                </div>
                            </td>
                            <td>Oct 25, 2024</td>
                            <td>Donor</td>
                            <td><span class="status pending">Pending</span></td>
                            <td>
                                <div class="actions">
                                    <button class="btn-action approve">
                                        <i class="fas fa-check"></i>
                                        Approve
                                    </button>
                                    <button class="btn-action reject">
                                        <i class="fas fa-times"></i>
                                        Reject
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr data-status="approved">
                            <td>
                                <div class="user-info">
                                    <div class="user-avatar">JS</div>
                                    <div class="user-details">
                                        <span class="user-name">Jane Smith</span>
                                        <span class="user-email">jane.smith@example.com</span>
                                    </div>
                                </div>
                            </td>
                            <td>Oct 24, 2024</td>
                            <td>Organization</td>
                            <td><span class="status approved">Approved</span></td>
                            <td>
                                <div class="actions">
                                    <button class="btn-action" disabled>
                                        <i class="fas fa-check"></i>
                                        Approved
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr data-status="rejected">
                            <td>
                                <div class="user-info">
                                    <div class="user-avatar">RJ</div>
                                    <div class="user-details">
                                        <span class="user-name">Robert Johnson</span>
                                        <span class="user-email">robert.j@example.com</span>
                                    </div>
                                </div>
                            </td>
                            <td>Oct 23, 2024</td>
                            <td>Donor</td>
                            <td><span class="status rejected">Rejected</span></td>
                            <td>
                                <div class="actions">
                                    <button class="btn-action" disabled>
                                        <i class="fas fa-times"></i>
                                        Rejected
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                <button class="btn-nav">
                    <i class="fas fa-chevron-left"></i>
                    Previous
                </button>
                <span>Page 1 of 3</span>
                <button class="btn-nav">
                    Next
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>

    <script src="js/adminuserreq.js"></script>
</body>
</html>