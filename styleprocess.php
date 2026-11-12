* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background-color: #f4f7f6;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
}

.container, .receipt-container {
    background: #ffffff;
    width: 100%;
    max-width: 550px;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
}

header {
    margin-bottom: 25px;
    text-align: center;
}

header h2 {
    color: #1a365d;
    margin-bottom: 8px;
}

header p {
    color: #64748b;
    font-size: 0.95rem;
}

.error-banner {
    background-color: #fee2e2;
    color: #991b1b;
    padding: 10px 15px;
    border-radius: 6px;
    margin-bottom: 20px;
    font-size: 0.9rem;
    border: 1px solid #f87171;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: 600;
    margin-bottom: 6px;
    color: #334155;
    font-size: 0.9rem;
}

input[type="text"],
input[type="email"],
select {
    width: 100%;
    padding: 12px;
    border: 1px solid #cbd5e1;
    border-radius: 6px;
    font-size: 1rem;
    transition: border-color 0.2s;
}

input:focus, select:focus {
    outline: none;
    border-color: #2563eb;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
}

button {
    width: 100%;
    background-color: #2563eb;
    color: white;
    border: none;
    padding: 12px;
    font-size: 1rem;
    font-weight: 600;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.2s;
}

button:hover {
    background-color: #1d4ed8;
}

/* Success Receipt Styling */
.success-header {
    text-align: center;
    border-bottom: 2px solid #e2e8f0;
    padding-bottom: 15px;
    margin-bottom: 20px;
}

.success-header h3 {
    color: #16a34a;
    font-size: 1.4rem;
}

.receipt-details {
    margin-bottom: 25px;
}

.receipt-row {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px solid #f1f5f9;
}

.receipt-label {
    font-weight: 600;
    color: #475569;
}

.receipt-value {
    color: #1e293b;
}

.back-btn {
    display: block;
    text-align: center;
    background-color: #475569;
    color: white;
    text-decoration: none;
    padding: 12px;
    border-radius: 6px;
    font-weight: 600;
}

.back-btn:hover {
    background-color: #334155;
}