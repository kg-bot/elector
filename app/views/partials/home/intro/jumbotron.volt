<div class="jumbotron text-center home_jumbotron">
    <div class="container-fluid bg-info">
        <h1>Welcome</h1>
        <p>This is online voting application. You can register as ordinary voter or as a candidate, it's up to you.</p>
        <p>
            {{ link_to(
                config.application.urls.register,
                'Register New Account',
                'class': 'btn btn-raised btn-primary btn-lg'
                )
            }}
        </p>
        <p>
            {{ link_to(config.application.urls.login, "Already have an account?")}}
        </p>
    </div>
</div>