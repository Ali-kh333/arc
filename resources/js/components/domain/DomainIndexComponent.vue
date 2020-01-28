<template>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">لیست دامنه‌های ثبت شده(Vue js)</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <a class="btn btn-primary" @click.stop.prevent="showCreate">ورود دامنه جدید</a>
                        <br><br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>نام</th>
                                <th>وضعیت</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="domain in domains">
                                <td>{{ domain.name }}</td>
                                <td>{{ domain.isVerified === 1 ? 'تایید شده' : 'تایید نشده!' }}</td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "DomainIndexComponent",

        data() {
            return {
                domains: ''
            }
        },
        methods: {
            getDomains() {
                axios.get('domains').then(response => {
                    this.domains = response.data;
                });
            },
            showCreate() {
                this.$emit('showCreate')
            }
        },
        mounted() {
            this.getDomains();
        },
    }
</script>

<style scoped>

</style>
