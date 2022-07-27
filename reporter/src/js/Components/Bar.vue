<template>
    <div class="mt-5 border-2 shadow-xl grid-cols-3 grid border-secondary">
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
import Hints from './Hints/Hints.vue'
import Request from './Request/Request.vue'

export default {
    data() { 
        return {
            tabs: {
                Trace: Trace,
                Hints: Hints,
                Request: Request,
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
