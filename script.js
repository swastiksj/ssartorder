<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SS Art Gallery</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>SS Art Gallery</h1>
    </header>
    <main>
        <div class="form-container">
            <h2>Sketch Order Form</h2>
            <form id="orderForm" action="process_order.php" method="POST" enctype="multipart/form-data">
                <!-- Form fields -->
            </form>
        </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById('orderForm');

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission
                
                // Perform client-side validation
                if (validateForm()) {
                    // If validation passes, submit the form
                    this.submit();
                } else {
                    alert("Please fill out all fields.");
                }
            });

            function validateForm() {
                var name = document.getElementById('name').value;
                var contact = document.getElementById('contact').value;
                var address = document.getElementById('address').value;
                var photo = document.getElementById('photo').value;
                
                if (name.trim() === '' || contact.trim() === '' || address.trim() === '' || photo.trim() === '') {
                    return false;
                }

                return true;
            }
        });
    </script>
</body>
</html>
