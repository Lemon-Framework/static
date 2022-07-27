<template>
    <div>
        <div class="p-3 mb-2 border-2 border-secondary">
            {{ request.method.toUpperCase() }} {{ request.path }}{{ request.query }}
        </div>

        <div class="p-3 mb-2 border-2 border-secondary"> 
            Headers
            <ul>
                <li v-for="(header, name) in request.headers" :key="name">
                    {{ name }}: {{ header }}
                </li>
            </ul>    
        </div>
    </div>

    <div class="p-3 mb-2 border-2 border-secondary">
        Body
        <br> 
        {{ request.body }}
    </div>
</template>

<script>
export default {
    data() { 
        return {
            request: context.request
        }
    }
}
</script>
