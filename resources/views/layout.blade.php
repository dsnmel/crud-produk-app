<!DOCTYPE html>
<html>
<head>
    <title>Product App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h1 {
            margin-bottom: 20px;
            font-size: 28px;
            color: #374151;
        }

        a.button {
            display: inline-block;
            padding: 8px 14px;
            background: #3b82f6;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            transition: 0.2s ease;
        }
        a.button:hover {
            background: #2563eb;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 18px;
        }

        table th {
            background: #e5e7eb;
            padding: 10px;
            text-align: left;
            font-size: 14px;
        }
        table td {
            padding: 10px;
            border-bottom: 1px solid #e5e7eb;
            font-size: 14px;
        }

        .action-buttons a, .action-buttons button {
            margin-right: 5px;
            font-size: 12px;
            background: #10b981;
            border: none;
            color: white;
            padding: 6px 10px;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
        }

        .action-buttons .delete {
            background: #ef4444;
        }

        form input, form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        button.submit-btn {
            background: #3b82f6;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        button.submit-btn:hover {
            background: #2563eb;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
