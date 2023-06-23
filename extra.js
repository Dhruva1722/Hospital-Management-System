 function editData() {
    console.log("hello")
            // Get the form data
            const form = document.querySelector('form');
            const formData = new FormData(form);
    console.log(formData);
            // Send a POST request to the server
            fetch('extra.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Display the result of the server response
                console.log(data);
            })
            .catch(error => {
                console.error(error);
            });
            console.log(formData,"outere");
        }