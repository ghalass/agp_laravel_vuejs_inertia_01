<template>
    <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#createTypeparcModal">
        <i class="fa fa-plus"></i>
        Nouveau
    </button>

    <div class="modal fade" id="createTypeparcModal" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ajouter un nouveau type parc</h4>
                    <button @click="closeModal" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="soumettre" id="createForm">
                        <div class="form-group">
                            <label for="name">Nom du type de parc</label>
                            <input v-model="typeparcName" :class="{ 'is-invalid': nameError != '' }"
                                class="form-control form-control-sm" type="text" id="name" />
                            <span v-if="nameError != ''" class="invalid-feedback error fst-italic">
                                {{ nameError }}
                            </span>
                        </div>

                    </form>
                </div>
                <div class="modal-footer justify-content-end">
                    <button @click="closeModal" type="button" class="btn btn-sm btn-outline-secondary"
                        data-dismiss="modal">Fermer</button>
                    <button form="createForm" type="submit" class="btn btn-sm btn-outline-success">Soumettre</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import { router } from '@inertiajs/vue3'
import { route } from 'ziggy-js';
import { showAlert } from '@/Composables/alert';

let typeparcName = ref("");
let nameError = ref("");

let createModal = ""

onMounted(() => {
    createModal = $('#createTypeparcModal')
})

const closeModal = () => {
    createModal.modal('hide');
    typeparcName.value = ""
}

const soumettre = () => {
    const name = typeparcName.value;
    const url = route('typeparcs.store');
    router.post(url, { name: name }, {
        onSuccess: (page) => {
            closeModal()
            showAlert('success', 'Ajouté avec succès!')
        },
        onError: (error) => {
            if (error.name != null) {
                nameError.value = error.name
            }
            showAlert('error', "Une erreur s'est produite!")
        }
    });
}

</script>
