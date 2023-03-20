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
        confirmButtonColor: 'red',
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
        html: '<form class="px-8 pt-6 pb-8 mb-4">'+
                    '<div class="mb-4">'+
                        '<label for="name" class="block text-gray-700 font-bold mb-2">Nome Completo / Razão Social:</label>'+
                        '<input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" placeholder="Maria da Silva ou Amar Assist">'+
                    '</div>'+
                    '<div class="mb-4">'+
                        '<label for="document" class="block text-gray-700 font-bold mb-2">CPF/CNPJ:</label>'+
                        '<input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="document" placeholder="123.456.789-10 ou 12.345.678/0001-09">'+
                    '</div>'+
                    '<div class="mb-6">'+
                        '<label for="contact" class="block text-gray-700 font-bold mb-2">Telefone:</label>'+
                        '<input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="contact" placeholder="(11)91234-5678">'+
                    '</div>'+
                    '<div class="mb-6">'+
                        '<label for="postal_code" class="block text-gray-700 font-bold mb-2">CEP:</label>'+
                        '<input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="postal_code" placeholder="13245-678">'+
                    '</div>'+
                    '<div class="mb-6">'+
                        '<label for="address_line1" class="block text-gray-700 font-bold mb-2">Endereço:</label>'+
                        '<input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address_line1" placeholder="Rua, Numero, Bairro">'+
                    '</div>'+
                    '<div class="mb-6">'+
                        '<label for="city" class="block text-gray-700 font-bold mb-2">Cidade:</label>'+
                        '<input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="city" placeholder="São Paulo">'+
                    '</div>'+
                    '<div class="mb-6">'+
                        '<label for="state" class="block text-gray-700 font-bold mb-2">Estdos</label>'+
                        '<select id="state" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">'+
                            '<option selected>Selecione um Estado</option>'+
                            '<option value="AC">Acre</option>'+
                            '<option value="AL">Alagoas</option>'+
                            '<option value="AP">Amapá</option>'+
                            '<option value="AM">Amazonas</option>'+
                            '<option value="BA">Bahia</option>'+
                            '<option value="CE">Ceará</option>'+
                            '<option value="DF">Distrito Federal</option>'+
                            '<option value="ES">Espírito Santo</option>'+
                            '<option value="GO">Goiás</option>'+
                            '<option value="MA">Maranhão</option>'+
                            '<option value="MT">Mato Grosso</option>'+
                            '<option value="MS">Mato Grosso do Sul</option>'+
                            '<option value="MG">Minas Gerais</option>'+
                            '<option value="PA">Pará</option>'+
                            '<option value="PB">Paraíba</option>'+
                            '<option value="PR">Paraná</option>'+
                            '<option value="PE">Pernambuco</option>'+
                            '<option value="PI">Piauí</option>'+
                            '<option value="RJ">Rio de Janeiro</option>'+
                            '<option value="RN">Rio Grande do Norte</option>'+
                            '<option value="RS">Rio Grande do Sul</option>'+
                            '<option value="RO">Rondônia</option>'+
                            '<option value="RR">Roraima</option>'+
                            '<option value="SC">Santa Catarina</option>'+
                            '<option value="SP">São Paulo</option>'+
                            '<option value="SE">Sergipe</option>'+
                            '<option value="TO">Tocantins</option>'+
                        '</select>'+
                    '</div>'+
                '</form>',
        showCancelButton: true,
        confirmButtonText: 'Criar',
        confirmButtonColor: 'green',
        cancelButtonText: 'Cancelar',
        focusConfirm: false,
        didOpen: () => {
            const contactInput = Swal.getPopup().querySelector('#contact')
            contactInput.addEventListener('input', () => {
                let contactValue = contactInput.value
                contactValue = contactValue.replace(/\D/g, '')
                contactValue = contactValue.slice(0, 11)
                contactValue = contactValue.replace(/^(\d{2})(\d)/g, '($1)$2')
                contactValue = contactValue.replace(/(\d)(\d{4})$/, '$1-$2')
                contactInput.value = contactValue
            })

            const documentField = Swal.getPopup().querySelector('#document');
            documentField.addEventListener('input', function() {
                const valueDocument = documentField.value.replace(/\D/g, '');
                let formattedValue = '';
                if (valueDocument.length <= 11) {
                    formattedValue = valueDocument.replace(/^(\d{3})(\d{3})(\d{3})(\d{2}).*/, '$1.$2.$3-$4');
                } else {
                    formattedValue = valueDocument.replace(/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2}).*/, '$1.$2.$3/$4-$5');
                }
                documentField.value = formattedValue;
            });

            const postalCodeInput = document.querySelector('#postal_code');

            postalCodeInput.addEventListener('input', function() {
                let value = this.value.replace(/\D/g, '');
                if (value.length > 8) {
                    value = value.slice(0, 8);
                }
                value = value.replace(/^(\d{5})(\d)/, '$1-$2');
                this.value = value;
            });
        },
        preConfirm: () => {
            const name = Swal.getPopup().querySelector('#name').value
            const document = Swal.getPopup().querySelector('#document').value
            const contact = Swal.getPopup().querySelector('#contact').value
            const postal_code = Swal.getPopup().querySelector('#postal_code').value
            const address_line1 = Swal.getPopup().querySelector('#address_line1').value
            const city = Swal.getPopup().querySelector('#city').value
            const state = Swal.getPopup().querySelector('#state').value

            return {client: { name: name, document: document, contact: contact }, address: {postal_code: postal_code, address_line1: address_line1, city: city, state: state}}
        }
    }).then((result) => {
        if (result.isConfirmed) {
            form.post(route('client.store', result.value))
        }
    })
};

const updateClient = (client) => {
    const swalWithTailwindcssButtons = Swal.mixin({
        buttonsStyling:true
    })
    
    swalWithTailwindcssButtons.fire({
        title: 'Editar Cliente',
        html: '<form class="px-8 pt-6 pb-8 mb-4">'+
                    '<div class="mb-4">'+
                        '<label for="name" class="block text-gray-700 font-bold mb-2">Nome:</label>'+
                        '<input value="' + client.name +'" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name">'+
                    '</div>'+
                    '<div class="mb-4">'+
                        '<label for="document" class="block text-gray-700 font-bold mb-2">CPF/CNPJ:</label>'+
                        '<input value="' + client.document +'" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="document">'+
                    '</div>'+
                    '<div class="mb-6">'+
                        '<label for="contact" class="block text-gray-700 font-bold mb-2">Telefone:</label>'+
                        '<input value="' + client.contact +'" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="contact">'+
                    '</div>'+
                '</form>',
        showCancelButton: true,
        confirmButtonText: 'Salvar',
        confirmButtonColor: 'green',
        cancelButtonText: 'Cancelar',
        focusConfirm: false,
        didOpen: () => {
            const contactInput = Swal.getPopup().querySelector('#contact')
            contactInput.addEventListener('input', () => {
                let contactValue = contactInput.value
                contactValue = contactValue.replace(/\D/g, '')
                contactValue = contactValue.slice(0, 11)
                contactValue = contactValue.replace(/^(\d{2})(\d)/g, '($1)$2')
                contactValue = contactValue.replace(/(\d)(\d{4})$/, '$1-$2')
                contactInput.value = contactValue
            })

            const documentField = Swal.getPopup().querySelector('#document');
            documentField.addEventListener('input', function() {
                const valueDocument = documentField.value.replace(/\D/g, '');
                let formattedValue = '';
                if (valueDocument.length <= 11) {
                    formattedValue = valueDocument.replace(/^(\d{3})(\d{3})(\d{3})(\d{2}).*/, '$1.$2.$3-$4');
                } else {
                    formattedValue = valueDocument.replace(/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2}).*/, '$1.$2.$3/$4-$5');
                }
                documentField.value = formattedValue;
            });
        },
        preConfirm: () => {
            const name = Swal.getPopup().querySelector('#name').value
            const document = Swal.getPopup().querySelector('#document').value
            const contact = Swal.getPopup().querySelector('#contact').value
            return { name: name, document: document, contact: contact }
        }
    }).then((result) => {
        if (result.isConfirmed) {
            form.put(route('client.update', [client, result.value]))
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
