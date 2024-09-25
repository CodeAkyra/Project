function loadHTML() {
    fetch('dashboard.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('content-container').innerHTML = data;
        })
}
window.onload = loadHTML;

function loadDashboard() {
    fetch('dashboard.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('content-container').innerHTML = data;
        })
}

function loadClient() {
    fetch('client.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('content-container').innerHTML = data;
        })
}

function loadSupplier() {
    fetch('supplier.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('content-container').innerHTML = data;
        })
}

function loadTest() {
    fetch('test.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('content-container').innerHTML = data;
        })
}