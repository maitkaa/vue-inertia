<template>
    <nav class="">
        <ul class="flex list-disc space-x-4 list-inside">
            <li>
                <NavLink class="text-blue-500 hover:underline" href="/" :active="$page.component === 'Home'">Home</NavLink>
            </li>
            <li><NavLink class="text-blue-500 hover:underline" href="/about" :active="$page.component === 'About'">About</NavLink></li>
            <li><NavLink class="text-blue-500 hover:underline" href="/contact" :active="$page.component === 'Contact'">Contact</NavLink></li>
            <li><NavLink method="post" class="text-blue-500 hover:underline" href="/logout">Logout</NavLink></li>
        </ul>
    </nav>
</template>

<script>
import NavLink from "../Shared/NavLink";
export default {
    components:{NavLink},
    props: {
    }
}
</script>

<style scoped>

</style>
