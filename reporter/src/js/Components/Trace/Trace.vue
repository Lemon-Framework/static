<template>
    <div class="h-screen grid gap-3 grid-cols-5">
        <div class="block border-2 border-secondary">
            <div 
                v-for="(item, index) in trace" 
                v-on:click="show(item)"
                v-bind:key="index"
                :class="item == current ? 'bg-secondary text-primary' : ''"
            >
                <div class="p-2">{{ item.file }}</div>
                <hr> 
            </div>
        </div>
        <div class="border-2 border-secondary col-span-4">
            <editor></editor>
        </div>
        </div>
</template>

<script>
import Editor from './Editor.vue'

export default {
    components: {
        Editor
    },
    data() {
        return {
            trace: context['trace'],
            current: context['trace'][0]
        }
    },
    methods: {
        show(current) {
            this.current = current
        }
    }
}
</script>
