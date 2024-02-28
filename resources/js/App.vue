<script setup>
import Logout from './Components/Logout.vue';
</script>

<template>
    <nav>
        <ul>
            <li><router-link to='/'>Go to Home</router-link></li>
            <li><router-link to='/about'>Go to About</router-link></li>
            <li>
                <Logout />
            </li>
        </ul>
    </nav>
    <hr>
    <router-view />
</template>
