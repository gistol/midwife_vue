<template>
    <div>
        <p>This is an example of a new components in VueJs</p>
        <p>{{username}}</p>
        <p>{{chuj}}</p>
    </div>

</template>

<script>
    export default {
        name: "example",
        props: ['username', 'chuj']
    }
</script>

<style scoped></style>