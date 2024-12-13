function alert(type, msg) {
    let bs_class = (type === "success") ? "alert-success" : "alert-danger";
    let element = document.createElement('div');
    element.innerHTML = `
    <div class="alert ${bs_class} alert-dismissible fade show custom-alert" role="alert" id="auto-close-alert">
        ${msg}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
`;

    document.body.appendChild(element);

    setTimeout(() => {
        const alert = document.getElementById('auto-close-alert');
        if (alert) {
            alert.classList.remove('show');
            alert.classList.add('fade');
            setTimeout(() => alert.remove(), 150);
        }
    }, 5000);
}