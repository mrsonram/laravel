<html>

<head>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <input type="text" class="form-control" id="validationTooltip01" value="Mark" required />
                            <label for="validationTooltip01" class="form-label">First name</label>
                            <div class="valid-tooltip">Looks good!</div>
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <input type="text" class="form-control" id="validationTooltip02" value="Otto" required />
                            <label for="validationTooltip02" class="form-label">Last name</label>
                            <div class="valid-tooltip">Looks good!</div>
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="input-group form-outline">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                            <input type="text" class="form-control" id="validationTooltipUsername"
                                aria-describedby="validationTooltipUsernamePrepend" required />
                            <label for="validationTooltipUsername" class="form-label">Username</label>
                            <div class="invalid-tooltip">Please choose a unique and valid username.</div>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <input type="text" class="form-control" id="validationTooltip03" required />
                            <label for="validationTooltip03" class="form-label">City</label>
                            <div class="invalid-tooltip">Please provide a valid city.</div>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <input type="text" class="form-control" id="validationTooltip05" required />
                            <label for="validationTooltip05" class="form-label">Zip</label>
                            <div class="invalid-tooltip">Please provide a valid zip.</div>
                        </div>
                    </div>
                    <div class="col-12 pt-2">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict';

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation');

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms).forEach((form) => {
                form.addEventListener('submit', (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>

</html>
