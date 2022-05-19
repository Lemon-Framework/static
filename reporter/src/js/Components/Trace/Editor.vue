<template>
    <pre><ol v-html="highlight()" class="list-decimal list-inside hljs" :style="{'--start': start}"></ol></pre>
</template>

<script>
import hljs from 'highlight.js'

export default {
    data() {
        return {
            start: 0
        }
    },
    methods: {
        highlight() {
            let line = this.$parent.current.line
            this.start = (line - 6) < 0 ? 0 : line - 6
            return (
                this.$parent.current['code']
                    .split("\n")
                    .slice(this.start, line + 5 )
                    .map((content, index) => '<code' + ((this.start + index + 1 === line) ? ' class="reporter-error">' : '>') + hljs.highlight(content, {language: 'php'}).value + '</code>')
            ).join("\n")
        }
    }    
}
</script>
