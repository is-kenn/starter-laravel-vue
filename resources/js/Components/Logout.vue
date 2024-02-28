<script setup>
async function logout() {
    try {
        const response = await axios.post('logout');
        window.location = '/login';
    } catch (error) {
        alert('An error has occured');
    }
}
</script>

<template>
    <form @submit.prevent="logout">
        <button>Logout</button>
    </form>
</template>

