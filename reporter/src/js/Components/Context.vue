<template>
    <div>
        <bar></bar>
        <div class="py-3">
            <component :is='component'></component>
        </div>
    </div>
</template>

<script>
import Bar from './Bar.vue'
import Trace from './Trace/Trace.vue'

export default {
    components: {
        Bar
    },
    data() {
        return {
            component: Trace
        }
    }
}
</script>
