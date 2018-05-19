<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/user">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/tasks">Schedule <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Progress</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tasks">Tasks</a>
                </li>
            </ul>
            <span class="navbar-text">
                <p>Hello, {{ first_name }} {{ last_name }}</p>
            </span>
        </div>
    </nav>
</template>

<script>
    export default{
        name: "nav-menu",
        props: ['first_name', 'last_name']
    }
</script>
