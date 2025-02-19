<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/admindashboard.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="main-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <span class="logo-blue">Donasi</span><span class="logo-orange">Aja!</span>
            </div>
            
            <div class="menu-item active">Admin Dashboard</div>
            
            <div class="dropdown">
                <button class="dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#eventMenu" aria-expanded="false">
                    <i class="far fa-calendar"></i>
                    Event
                </button>
                <div id="eventMenu" class="collapse">
                    <a href="#daftar-event">Daftar Event</a>
                    <a href="#tambahkan-event">Tambahkan Event</a>
                </div>
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
                    <h1>Admin Dashboard</h1>
                    <i class="fas fa-external-link-alt"></i>
                </div>
                <div class="event-info">
                    <span>Event</span>
                    <div class="project-count">240 project</div>
                </div>
            </div>

            <div class="controls">
                <div class="view-controls">
                    <button class="btn-view active" data-filter="all">View all</button>
                    <button class="btn-view" data-filter="accepted">Accepted</button>
                    <button class="btn-view" data-filter="declined">Declined</button>
                    <button class="btn-view" data-filter="pending">Pending</button>
                </div>
                <div class="search-controls">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search">
                    </div>
                    <button class="btn-filters">
                        <i class="fas fa-sliders-h"></i>
                        Filters
                    </button>
                </div>
            </div>

            <div class="table-wrapper">
                <table id="eventTable">
                    <thead>
                        <tr>
                            <th class="sortable">
                                Nama Admin Event
                                <i class="fas fa-chevron-down"></i>
                            </th>
                            <th class="sortable">
                                Nama Event
                                <i class="fas fa-chevron-down"></i>
                            </th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-status="accepted">
                            <td>
                                <div class="admin-avatar">BPJS</div>
                            </td>
                            <td>Jumat berkah</td>
                            <td>19 Okt 2024</td>
                            <td><span class="status accepted">Accepted</span></td>
                            <td class="actions">
                                <button class="btn-action"><i class="far fa-edit"></i></button>
                                <button class="btn-action"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr data-status="pending">
                            <td>
                                <div class="admin-avatar">PMI</div>
                            </td>
                            <td>Donor Darah</td>
                            <td>20 Okt 2024</td>
                            <td><span class="status pending">Pending</span></td>
                            <td class="actions">
                                <button class="btn-action"><i class="far fa-edit"></i></button>
                                <button class="btn-action"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr data-status="declined">
                            <td>
                                <div class="admin-avatar">YKI</div>
                            </td>
                            <td>Bantuan Bencana</td>
                            <td>21 Okt 2024</td>
                            <td><span class="status declined">Declined</span></td>
                            <td class="actions">
                                <button class="btn-action"><i class="far fa-edit"></i></button>
                                <button class="btn-action"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            </div>

            <div class="pagination">
                <button class="btn-nav">
                    <i class="fas fa-chevron-left"></i>
                    Previous
                </button>
                <span>Page 1 of 10</span>
                <button class="btn-nav">
                    Next
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>  
    <script src="/js/filters.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>