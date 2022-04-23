<template>
    <div>
        <bar></bar>
        <div class="py-3">
            <component :is='component'></component>
        </div>
    </div>
</template>

<script lang='coffee' type="text/coffeescript">

import Bar from './Bar.vue'
import Trace from './Trace/Trace.vue'

main = 
    components:
        bar: Bar
    data: ->
        component: Trace 

export default main

</script>
