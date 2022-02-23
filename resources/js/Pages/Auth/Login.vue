<template>
<Head title="Login Page"/>
    <main class="grid place-items-center min-h-screen">
        <section class="bg-white p-8 rounded-xl border max-w-lg mx-auto w-full">
            <h1 class="text-3xl mb-2">Login</h1>
            <form @submit.prevent="submit" class="">
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email
                    </label>
                    <input type="text" v-model="form.email" class="border p-2 w-full rounded" required name="email" id="email">
                    <div v-if="form.errors.email" v-text="form.errors.email" class="text-red-500 text-xs mt-2"></div>
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password
                    </label>
                    <input type="password" v-model="form.password" class="border p-2 w-full rounded" required name="password" id="password">
                    <div v-if="form.errors.password" v-text="form.errors.password" class="text-red-500 text-xs mt-2"></div>
                </div>
                <div class="mb-6">
                    <button :disabled="form.processing" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Login</button>
                </div>
            </form>
        </section>
    </main>
</template>

<script>
export default {
    layout: null
}
</script>

<script setup>
import {useForm} from "@inertiajs/inertia-vue3";
let form = useForm({
    email:'',
    password:''
});

let submit = () => {
    form.post('login');
};
</script>
<style scoped>

</style>
