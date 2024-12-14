<template>
    <div class="wrapper">
        <!-- Navbar -->
        <Navbar />

        <!-- Main Sidebar Container -->
        <Sidebar />

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <slot />
        </div>

        <!-- Main Footer -->
        <Footer />
    </div>
</template>

<script setup>
import Footer from "./Partials/Footer.vue";
import Navbar from "./Partials/Navbar.vue";
import Sidebar from "./Partials/Sidebar.vue";
</script>
