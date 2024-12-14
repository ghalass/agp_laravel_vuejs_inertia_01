<template>
    <div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Liste des types de parc</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header py-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <CreateTypeparc />
                            <div class="card-tools">
                                <Pagination :links="props.typeparcs.links" :prev="props.typeparcs.prev_page_url"
                                    :next="props.typeparcs.next_page_url" />
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Type parc</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="typeparc in props.typeparcs.data" :key="typeparc.id">
                                    <td>{{ typeparc.name }}</td>
                                    <td>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-sm btn-outline-info mr-1">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fa fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import Pagination from '../../Shared/Pagination.vue';
import CreateTypeparc from './CreateTypeparc.vue';


const props = defineProps({
    typeparcs: Object
})

</script>
