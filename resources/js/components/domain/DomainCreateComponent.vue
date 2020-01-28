<template>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">ثبت دامنه(Vue js)</h3>
                </div>
                <form role="form" method="POST" action="api.domains.store">
<!--                    @csrf-->
                    <div class="box-body">
                        <div class="form-group">
                            <label>دامنه(www.example.com)</label>
                            <input type="text" class="form-control" v-model="name">
                        </div>
                    </div>
                    <div class="box-footer">
<!--                        <button type="submit" class="btn btn-primary">ارسال</button>-->
                        <a class="btn btn-primary" @click.stop.prevent="createDomain">ارسال</a>
                    </div>
                </form>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                name: ''
            }
        },
        methods: {
            createDomain() {
                axios.post('domains', {
                    name: this.name,
                }).then(response => {
                    this.$emit('domainCreated')
                });
            },
        },
    }
</script>

<style scoped>

</style>
