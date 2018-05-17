<template>
    <div class="wrapper fadeInDown hehe">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form action="./login" method="post">
                <input type="text" id="login" class="fadeIn second" name="_username" placeholder="username">
                <input type="password" id="password" class="fadeIn third" name="_password" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="./register">Do not have an account ?</a>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        name: 'login-form',
        props: ['path']
    }
</script>

<style scoped></style>