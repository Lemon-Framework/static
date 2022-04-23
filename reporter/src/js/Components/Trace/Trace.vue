<template>
    <div class="grid h-screen gap-3 grid-flow-col">
        <div class="border-2 border-secondary block">
            <div 
                v-for="(code, file) in trace" 
                class='p-2'
                v-on:click="show(code)"
            >
                {{ file }}
                <hr> 
            </div>
        </div>
        <div class="border-2 border-secondary col-span-5">
            {{ code }}
        </div>
        </div>
</template>

<script lang="coffee">

main = 
    data: ->
        trace: context['trace']
        code: context['trace'][context['error']]
    methods:
        show: (code) ->
            @code = code

export default main

</script>
