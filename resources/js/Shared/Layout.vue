<template>
    <section class="p-6 bg-gray-200">
        <header class="flex justify-between">
            <h1 class="font-bold text-lg">My site</h1>
            <Nav />
        </header>
    </section>
    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot />
        </div>
    </section>
    <Footer/>
</template>

<script>
import Nav from "../Shared/Nav";
import Footer from '../Shared/Footer'

export default {
    components:{Nav,Footer}
}
</script>

<style scoped>

</style>
