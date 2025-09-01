<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            transition: all 0.3s ease;
        }
        .sidebar {
            width: 220px;
            background-color: #343a40;
            min-height: 100vh;
            transition: all 0.3s ease;
        }
        .company {
            font-weight: bold;
            font-size: 18px;
            padding: 15px;
            text-align: center;
            color: #fff;
            border-bottom: 1px solid #495057;
        }
        .logout-container {
        padding: 0 20px 20px 20px;
        }
        .sidebar a {
            color: #fff;
            display: block;
            padding: 10px 15px;
            text-decoration: none;
        }

        .sidebar .logout-btn {
        width: 100%;
        padding: 10px;
        background-color: #dc3545;
        color: #fff;
        border: none;
        cursor: pointer;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            flex: 1;
            padding: 20px;
            transition: all 0.3s ease;
        }
        .sidebar.hide {
            width: 0;
            overflow: hidden;
        }
        .content.full {
            flex: 1 1 100%;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                z-index: 1000;
                height: 100%;
                left: -220px;
            }
            .sidebar.show {
                left: 0;
            }
            .content {
                flex: 1;
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="sidebar" id="sidebar">
        <div class="company">
            Data Rumah Sakit Bandung
        </div>
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('rumah-sakit.index') }}">Rumah Sakit</a>
        <a href="{{ route('pasien.index') }}">Pasien</a>
        <button class="logout-btn" id="logoutBtn">Logout</button>
    </div>

    <div class="content" id="content">
        <button class="btn btn-light mb-3" id="toggleSidebar">☰</button>
        @yield('content')
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
        @csrf
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#toggleSidebar').click(function(){
                // Untuk desktop toggle
                if ($(window).width() > 768) {
                    $('.sidebar').toggleClass('hide');
                    $('#content').toggleClass('full');
                } else {
                    // Untuk mobile toggle
                    $('#sidebar').toggleClass('show');
                }
            });

            $(document).click(function(e) {
                if ($(window).width() <= 768) {
                    if (!$(e.target).closest('#sidebar, #toggleSidebar').length) {
                        $('#sidebar').removeClass('show');
                    }
                }
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            // Logout
            $('#logoutBtn').click(function(e){
                e.preventDefault();
                if(confirm('Apakah Anda yakin ingin logout?')) {
                    $('#logout-form').submit();
                }
            });
        });
    </script>
</body>
</html>
