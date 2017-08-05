function registerValidate(formSelector) {
    $(formSelector).validate({
        errorClass: "has-error",
        highlight: function(element, errorClass) {
            $(element).parent().addClass(errorClass);
        },
        rules: {
            // Email
            email: {
                required: true,
                email: true,
                remote: {
                    url: "/validate/email",
                    method: "POST",
                    data: {
                        email: function() {
                            $("#email").val();
                        }
                    }
                }
            },
            // Password Name
            password: {
                required: true,
                minlength: 6
            },
            // Password Confirm
            PasswordConfirm: {
                required: true,
                minlength: 6,
                equalTo: "#password"
            },
            // First Name
            FirstName: {
                required: true,
            },
            // Last Name
            LastName: {
                required: true,
            },
            // Profile image
            ProfileImage: {
                required: true,
                accept: "image/*"
            },
            // ID card image
            IdImage: {
                required: true,
                accept: "image/*"
            },
            // Select Country
            SelectCountry: "required",
            // Select Region
            SelectRegion: "required",
            // Select City
            SelectCity: "required"

        },
        messages: {
            PasswordConfirm: {
                equalTo: "You must enter same value as in password field."
            },
            ProfileImage: {
                accept: "Only image files are allowed."
            },
            IdImage: {
                accept: "Only image files are allowed."
            }
        }
    })
}