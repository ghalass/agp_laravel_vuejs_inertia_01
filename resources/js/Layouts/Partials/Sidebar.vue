<template>
    <aside class="main-sidebar sidebar-light-primary elevation-1">
        <!-- Brand Logo -->
        <Link :href="route('home')" class="brand-link">
            <img
                src="../../../images/admin-lte/AdminLTELogo.png"
                alt="AdminLTE Logo"
                class="brand-image img-circle"
                style="opacity: 0.8"
            />
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </Link>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img
                        src="../../../images/admin-lte/user2-160x160.jpg"
                        class="img-circle"
                        alt="User Image"
                    />
                </div>
                <div class="info">
                    <Link :href="route('home')" class="d-block"
                        >Alexander Pierce</Link
                    >
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul
                    class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview"
                    role="menu"
                    data-accordion="false"
                >
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Configurations
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <Link
                                    :href="route('typeparcs')"
                                    class="nav-link active"
                                >
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Types parcs</p>
                                </Link>
                            </li>
                            <li class="nav-item">
                                <Link
                                    :href="route('typeparcs')"
                                    class="nav-link"
                                >
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Parc</p>
                                </Link>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <Link href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Simple Link
                                <span class="right badge badge-danger"
                                    >New</span
                                >
                            </p>
                        </Link>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import { route } from "ziggy-js";
</script>
