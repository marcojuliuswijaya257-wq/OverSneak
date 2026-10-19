<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OverSnaek — Jajan Manager</title>
    <!-- Google Fonts & Bootstrap Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-grad: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            --card-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.01);
            --card-shadow-hover: 0 20px 30px -10px rgba(79, 70, 229, 0.15);
        }
        body { 
            background-color: #f3f4f6; 
            font-family: 'Inter', sans-serif; 
            color: #1f2937;
        }
        .navbar-custom {
            background: #ffffff;
            box-shadow: 0 4px 20px rgba(0,0,0,0.03);
        }
        .nav-link {
            font-weight: 500;
            color: #6b7280;
            transition: all 0.2s;
            padding: 0.5rem 1rem !important;
            border-radius: 8px;
        }
        .nav-link:hover, .nav-link.active {
            color: #4f46e5;
            background-color: #f3f4f6;
        }
        .card-custom { 
            border-radius: 16px; 
            border: 1px solid #e5e7eb; 
            background: #ffffff;
            box-shadow: var(--card-shadow);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .btn-gradient {
            background: var(--primary-grad);
            color: #fff;
            border: none;
            box-shadow: 0 4px 12px rgba(124, 58, 237, 0.3);
            transition: all 0.2s;
        }
        .btn-gradient:hover {
            color: #fff;
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(124, 58, 237, 0.4);
        }
        .table-custom th {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #6b7280;
            background-color: #f9fafb;
            padding: 12px 16px;
        }
        .table-custom td {
            padding: 16px;
            border-bottom: 1px solid #f3f4f6;
        }
        .badge-soft {
            background-color: #e0e7ff;
            color: #4338ca;
            font-weight: 600;
            padding: 6px 12px;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top mb-4">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 font-weight-bold" href="/jajan">
                <div class="rounded-3 p-2 text-white" style="background: var(--primary-grad); line-height: 1;">
                    <i class="bi bi-bag-heart-fill"></i>
                </div>
                <span class="fw-bold fs-5 text-dark">OverSnaek</span>
            </a>
            <div class="navbar-nav ms-auto gap-2">
                <a class="nav-link" href="/jajan"><i class="bi bi-receipt me-1"></i> Jajan</a>
                <a class="nav-link" href="/kategori"><i class="bi bi-grid me-1"></i> Kategori</a>
                <a class="nav-link" href="/rekap"><i class="bi bi-graph-up-arrow me-1"></i> Rekap</a>
            </div>
        </div>
    </nav>

    <div class="container pb-5">
        @yield('konten')
    </div>
</body>
</html>