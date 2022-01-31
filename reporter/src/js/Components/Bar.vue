<template>
    <div class="mt-5 border-2 shadow-xl grid-cols-4 gap-4 grid border-secondary">
        <div 
            class="p-2 hover:bg-secondary hover:text-primary" 
            v-for="(component, name) in tabs" 
            :key="component"
            v-on:click="move(component)"
            >
            {{ name }}
        </div>
    </div>
</template>

<script lang='coffee'>

import Trace from './Trace/Trace.vue'

main =
    data: ->
        tabs: 
            trace: Trace
            hints: null
            request: null
            routes: null

    methods:
        move: (tab) ->
            @$parent.component = tab

export default main

</script>
