<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import Swal from 'sweetalert2';

const form = useForm({});
const props = defineProps({
    billings:{type:Object}
});

const payment = (billing) => {
    const swalWithTailwindcssButtons = Swal.mixin({
        buttonsStyling:true
    })

    swalWithTailwindcssButtons.fire({
        title: 'Fazer Pagamento',
        text: 'Após fazer o pagamento não poderá fazer o estorno!',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: '<i class="fa-solid fa-check"></i> Sim, Pagar',
        confirmButtonColor: 'green',
        cancelButtonText: '<i class="fa-solid fa-ban"></i> cancelar',
    }).then((result) => {
        if(result.isConfirmed) {
            form.put(route('billing.update', billing));
        }
    })
};

</script>

<template>
    <Head title="Cobrança" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Cobrança</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-orange-200 dark:bg-orange-700 dark:text-white">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Responsável
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tipo
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Valor (R$)
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Valor Multa (R$)
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Vencimento
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="billing in billings" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ billing.client.name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ billing.type_billing }}
                                    </td>
                                    <td class="px-6 py-4">
                                        R${{ billing.amount.toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ (billing.amount_fine) ? 'R$' + billing.amount_fine.toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) : 'N/A' }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ new Date(billing.expiration_date).toLocaleDateString('pt-BR') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <i class="p-2 rounded" :class="{'text-gray-700 bg-red-200 hover:bg-red-700 hover:text-white': billing.billing_status == 1, 'text-gray-700 bg-green-200 hover:bg-green-700 hover:text-white': billing.billing_status != 1}">
                                            {{ (billing.billing_status == 1) ? 'Aberto' : 'Pago' }}
                                        </i>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-900" :class="{' bg-gray-700 hover:bg-gray-800 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-900': billing.billing_status === 0}"
                                        :disabled="billing.billing_status === 0" @click="payment(billing)">
                                            <i class="fa-solid fa-brazilian-real-sign"></i>
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
