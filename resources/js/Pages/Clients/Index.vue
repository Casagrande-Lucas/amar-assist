<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import Swal from 'sweetalert2';

const form = useForm({});
const props = defineProps({
    clients:{type:Object}
});

const deleteClient = (client, name) => {
    const swalWithTailwindcssButtons = Swal.mixin({
        buttonsStyling:true
    })

    swalWithTailwindcssButtons.fire({
        title: 'Quer mesmo inativar o cadastro de <br>' + name,
        text: 'Após desativar o cadastro não podera acessar novamente!',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: '<i class="fa-solid fa-check"></i> Sim, Inativar cadastro',
        cancelButtonText: '<i class="fa-solid fa-ban"></i> cancelar',
    }).then((result) => {
        if(result.isConfirmed) {
            form.delete(route('client.destroy', client));
        }
    })
};

const createClient = () => {
    const swalWithTailwindcssButtons = Swal.mixin({
        buttonsStyling:true
    })

    swalWithTailwindcssButtons.fire({
        title: 'Novo Cliente',
        html: '<form>' +
                '<div class="form-group">' +
                '<label for="name" class="col-form-label">Nome:</label>' +
                '<input type="text" class="form-control" id="name">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="document" class="col-form-label">CPF/CNPJ:</label>' +
                '<input type="text" class="form-control" id="document">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="contact" class="col-form-label">Telefone:</label>' +
                '<input type="text" class="form-control" id="contact">' +
                '</div>' +
                '</form>',
        showCancelButton: true,
        confirmButtonText: 'Salvar',
        cancelButtonText: 'Cancelar',
        focusConfirm: false,
        preConfirm: () => {
            const name = Swal.getPopup().querySelector('#name').value
            const document = Swal.getPopup().querySelector('#document').value
            const contact = Swal.getPopup().querySelector('#contact').value
            return { name: name, document: document, contact: contact }
        }
    }).then((result) => {
        if (result.isConfirmed) {
            form.post(route('client.store', result.value))
            // faça a lógica de envio do formulário aqui
        }
    })
};

const updateClient = (client) => {
    const swalWithTailwindcssButtons = Swal.mixin({
        buttonsStyling:true
    })
    
    swalWithTailwindcssButtons.fire({
        title: 'Editar Cliente',
        html: '<form>' +
                '<div class="form-group">' +
                '<label for="name" class="col-form-label">Nome:</label>' +
                '<input type="text" class="form-control" id="name" value="' + client.name +'">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="document" class="col-form-label">CPF/CNPJ:</label>' +
                '<input type="text" class="form-control" id="document" value="' + client.document +'">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="contact" class="col-form-label">Telefone:</label>' +
                '<input type="text" class="form-control" id="contact" value="' + client.contact +'">' +
                '</div>' +
                '</form>',
        showCancelButton: true,
        confirmButtonText: 'Salvar',
        cancelButtonText: 'Cancelar',
        focusConfirm: false,
        preConfirm: () => {
            client.name = Swal.getPopup().querySelector('#name').value
            client.document = Swal.getPopup().querySelector('#document').value
            client.contact = Swal.getPopup().querySelector('#contact').value
            return { name: name, document: document, contact: contact }
        }
    }).then((result) => {
        if (result.isConfirmed) {
            form.post(route('client.store', result.value))
            // faça a lógica de envio do formulário aqui
        }
    })
};
</script>

<template>
    <Head title="Clientes" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Clientes</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="text-center">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalCreate" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                    @click="createClient()">
                        <i class="fa-solid fa-circle-plus"></i> Adicionar Cliente
                    </button>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-orange-200 dark:bg-orange-700 dark:text-white">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nome
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        CPF/CNPJ
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Endereço
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Contato
                                    </th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="client in clients" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ client.name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ client.document }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ (client.address) ? client.address.city + '-' + client.address.state : 'N/A' }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ client.contact }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#modalEdit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900"
                                        @click="updateClient(client, client.name)">
                                            <i class="fa-solid fa-edit"></i>
                                        </button>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                        @click="deleteClient(client, client.name)">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
