function submitForm() {
    const form = document.getElementById('donationForm');
    
    if (form instanceof HTMLFormElement) {
        const formData = new FormData(form);

        for (let [key, value] of formData.entries()) {
            console.log(`${key}: ${value}`);
        }
        let isValid = true;
        const inputs = form.querySelectorAll('input');
        inputs.forEach(input => {
            if (input.value.trim() === '') {
            isValid = false;
            input.classList.add('error');
            } else {
            input.classList.remove('error');
            }
        });

        if (!isValid) {
            alert('Error: Fields cannot be empty');
            return;
        } else {
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'index.php?action=donate', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // res = JSON.parse(xhr.responseText);
                        console.log(xhr.responseText);
                        // console.log(res);
                    } else {
                        console.error('Error:', xhr.status);
                    }
                }
            };
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            const encodedData = new URLSearchParams(formData).toString();
            xhr.send(encodedData);
        }

    } else {
        console.error('Error: donationForm is not a valid HTML form element');
    }
}
