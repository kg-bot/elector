{{ get_doctype() }}
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        {{ get_title() }}

        {{ assets.outputCss() }}
    </head>
    <body>
        {% include 'partials/header/navbar.volt' %}
        {# If user is logged in we don't need to show him intro jumbotron #}
        {# Also, jumbotron is only visible at home page #}
        {% if session.has('auth') === false and router.getRewriteUri() === url('/') %}
            {% include 'partials/home/intro/jumbotron.volt' %}
        {% endif %}
        <div class="container-fluid">
            {{ content() }}
            {% include 'partials/footer.volt' %}
        </div>
        {{ assets.outputJs() }}
        <script>$.material.init();</script>
    </body>
</html>
