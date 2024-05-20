function printForm() {
    const printContents = document.getElementById('form-data').innerHTML;
    const originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}

function downloadForm() {
    const formData = document.getElementById('form-data').innerHTML;
    const blob = new Blob([formData], { type: 'text/html' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'admission_form.html';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    URL.revokeObjectURL(url);
}

function addLink() {
    const formContainer = document.querySelector('.form-container');
    const link = document.createElement('a');
    link.href = 'https://www.example.com';
    link.textContent = 'Visit our website';
    link.target = '_blank'; // Open link in a new tab
    formContainer.appendChild(link);
}
