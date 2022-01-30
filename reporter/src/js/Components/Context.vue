<template>
    <div>
        <bar></bar>
        <!--component :is='component'></component-->
    </div>
</template>

<script lang='ls'>
require! {
    './Bar.vue'
}
module.exports = 
    data: ->
        component: null
    components:
        'bar': Bar

</script>
