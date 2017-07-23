<div class="row">
    <div class="col-xs-12">
        {% if session.has('auth') === false %}
            {% include 'partials/home/intro/index.volt' %}
        {% else %}
            {% include 'partials/home.volt' %}
        {% endif %}
    </div>
</div>
