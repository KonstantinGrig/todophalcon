<div class="page-header">
    <h1>Todo list!</h1>
</div>
<ul class="list-group">
{% for todo in todoRows %}
<li class="list-group-item">{{ todo.id }} {{ todo.title }} {{ todo.body }}</li>
{% endfor %}
</ul>


