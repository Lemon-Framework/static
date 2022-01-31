<template>
    <div>
        <bar></bar>
        <component :is='component'></component>
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
