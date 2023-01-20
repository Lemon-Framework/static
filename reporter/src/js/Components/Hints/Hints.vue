<template>
    <div>
        <div 
            class="p-3 mb-2 border-2 border-secondary" 
            v-for="(hint, index) in hints" 
            :key="index"
            v-html="hint"
        >
        </div>

        Hints didn't help? Ask on <a href="https://discord.gg/tsqBauhb8c">our discord</a>.
        </div>
</template>

<script>
export default {
    data() { 
        return {
            hints: context.hints
        }
    }
}
</script>
