<template>
    <div class="mt-5 border-2 shadow-xl grid-cols-4 grid border-secondary">
        <div 
            class="p-2 hover:bg-secondary hover:text-primary" 
            v-for="(component, name) in tabs" 
            :key="component"
            v-on:click="move(component)"
            :class="component == this.$parent.component ? 'bg-secondary text-primary' : ''"
            >
            {{ name }}
        </div>
    </div>
</template>


<script>
import Trace from './Trace/Trace.vue'

export default {
    data() { 
        return {
            tabs: {
                trace: Trace,
                hints: null,
                request: null,
                routes: null,
            }
        }
    },
    methods: {
        move(tab) {
            this.$parent.component = tab
        }
    }
}
</script>
