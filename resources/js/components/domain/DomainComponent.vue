<template>
    <div>
        <domain-index-component v-if="page==='index'" @showCreate="page = 'create'"></domain-index-component>
        <domain-create-component v-if="page==='create'" @domainCreated="page = 'index'"></domain-create-component>
    </div>
</template>

<script>
    import domainIndexComponent from "./DomainIndexComponent";
    import domainCreateComponent from "./DomainCreateComponent";

    export default {

        data() {
            return {
                page: 'index',
            }
        },

        methods: {

        },

        components: {
            domainIndexComponent,
            domainCreateComponent
        }
    }
</script>
